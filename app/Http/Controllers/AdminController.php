<?php

namespace App\Http\Controllers;
use DateTime;
use PDF;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Models\Kamar;
use App\Models\Reservasi;
use App\Models\Fasilitas;
use App\Models;



class AdminController extends Controller
{
    public function dashboard()
    {
        $kamar = Kamar::all();
        $tipekamar = Kamar::count();
        $jumlahReservasi = Reservasi::count();
        $total_kamar = 0;
        $total_tersedia = 0;
        $total_terpakai = 0;
        $totalProses = 0;

        $reservasiProses = Reservasi::where('status', "proses")->get();

        foreach($reservasiProses as $proses){
            $total_terpakai += $proses->jumlah_kamar;
            $totalProses++;
        }

        foreach($kamar as $jumlah){
            $total_kamar += $jumlah->jumlah_kamar;
            $total_tersedia += $jumlah->ketersediaan;
        };

        return view('/admin/dashboard', [
            "kamarTersedia" => $total_tersedia,
            "totalKamar" => $total_kamar,
            "jumlahTipe" => $tipekamar,
            "totalBooking" => $jumlahReservasi,
            "totalProses" => $totalProses,
            "totalTerpakai" => $total_terpakai,
        ]);
    }
    //

    public function kamarIndex()
    {
        $kamar = Kamar::all();
        if( $kamar != null){
            return view('/admin/kamar/kamarIndex',  ['kamar' => $kamar]);
        } else {
            $e = "Data Kosong";
            return view('/admin/kamar/kamarIndex',  ['kamar' => $kamar, 'error' => $e]);
        }


        // dd($kamar);
        // return view('/admin/kamar/kamarIndex',  ['kamar' => $kamar]);
    }

    public function kamarCreate()
    {
        return view('/admin/kamar/kamarCreate');
    }

    public function kamarStore(Request $request)
    {
        $data_request = $request->only(
            'nama_kamar', 'jumlah_kamar', 'harga', 'deskripsi'
        );


        $validator = Validator::make($data_request, array(
            "nama_kamar" => ["required"],
            "jumlah_kamar" => ["required"],
            "harga" => ["required", "min:5"],
        ));
        // dd($data_request);

        if(!$validator->fails()){
            try{
                $kamar = new Kamar();
                $kamar->nama_kamar = $request->nama_kamar;
                $kamar->jumlah_kamar = $request->jumlah_kamar;
                $kamar->ketersediaan = $request->jumlah_kamar;
                $kamar->harga = $request->harga;
                $kamar->deskripsi = $request->deskripsi;
                $kamar->detail_lengkap = $request->detail;

                $kamar->save();

                return redirect(route('kamarIndex'));
                // $create_kamar = Kamar::create($data_request);

            } catch(Exception $e){
                // dd($e->getMessage());
                dd($e);
                return redirect()->back();
            }
        }   else {
            return redirect()->back();
        }


       // return redirect()->back();
    }

    public function kamarEdit($id)
    {
        $kamar = Kamar::find($id);

        return view('admin.kamar.kamarEdit', ['kamar'=> $kamar]);
    }

    public function kamarUpdate(Request $request, $id)
    {
        Kamar::find($id)->update($request->all());

        return redirect(route('kamarIndex'));
    }


    public function kamarDestroy($id)
    {
        $kamar = Kamar::find($id);
        $kamar->delete();

        return redirect(route('kamarIndex'));
    }


    public function bookingIndex(Request $request)
    {
        $book = Reservasi::paginate(10);

        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $book = Reservasi::whereBetween('tgl_check_in',[$start_date,$end_date])->get();
            return view('resepsionis/bookingIndex', ['book' => $book]);
        } else if (request()->search) {
            $book = Reservasi::where('nama', 'like',"%".request()->search."%")->get();

            return view('resepsionis/bookingIndex', ['book' => $book]);
         } else {
            return view('resepsionis/bookingIndex', ['book' => $book]);
        }
        if ($request->get('cari')){
        }

    }

    public function viewResi($id)
    {
        $resi = Reservasi::find($id);

        $dateCheckin = $resi->tgl_check_in;
        $dateCheckout = $resi->tgl_check_out;

        $datetime1 = new DateTime($dateCheckin);
        $datetime2 = new DateTime($dateCheckout);

        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        return view('resepsionis/viewBooking', ['resi' => $resi, 'days' => $days]);
    }

    public function resiPDF($id)
    {
        $resi = Reservasi::find($id);

        $dateCheckin = $resi->tgl_check_in;
        $dateCheckout = $resi->tgl_check_out;

        $datetime1 = new DateTime($dateCheckin);
        $datetime2 = new DateTime($dateCheckout);

        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        // return view('resepsionis/resiPDF',['resi'=>$resi, 'days' => $days]);
        $pdf = PDF::loadview('resepsionis/resiPDF',['resi'=>$resi, 'days' => $days]);
        set_time_limit(300);
        return $pdf->stream();
    }

    public function fasilitasIndex()
    {
        $fasilitas = Fasilitas::all();
        return view('admin/fasilitas/fasilitasIndex', ['fasilitas'=> $fasilitas]);
    }

    public function fasilitasCreate()
    {
        return view('admin/fasilitas/fasilitasCreate');
    }

    public function fasilitasStore(Request $request)
    {

        $request->validate([
            'nama_fasilitas' => 'required',
        ]);

        if ($request->hasFile('image')) {
            // dd($request->nama_fasilitas);
            $request->validate([
                'image' => 'mimes:jpeg,bmp,png'
            ]);

            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();

            $fasilitas = new Fasilitas([
                "nama_fasilitas" => $request->nama_fasilitas,
                "file_path" => $filename,
                "deskripsi" => $request->deskripsi,
                "detail_deskripsi" => $request->detail_deskripsi,
            ]);
            $fasilitas->save(); // Finally, save the record.

            $file->move(public_path('public/Image'), $filename);
        } else {
            $fasilitas = new Fasilitas([
                "nama_fasilitas" => $request->nama_fasilitas,
                "deskripsi" => $request->deskripsi,
                "detail_deskripsi" => $request->detail_deskripsi,
            ]);
            $fasilitas->save();
        }

        // $input = $request->all();

        // $post = Fasilitas::create($input);
        return redirect(route('table_fasilitas'));
    }

    public function fasilitasEdit($id)
    {
        $fasilitas = Fasilitas::find($id);

        return view('admin/fasilitas/fasilitasEdit', ["fasilitas"=>$fasilitas]);
    }

    public function fasilitasUpdate(Request $request, $id)
    {
        $fasilitas = Fasilitas::find($id);
        if($request->hasFile('image')){

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();

            $fasilitas->file_path = $filename;

            $file->move(public_path('public/Image'), $filename);
        }

        $fasilitas->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas->deskripsi = $request->deskripsi;
        $fasilitas->detail_deskripsi = $request->detail_deskripsi;
        $fasilitas->save();

        return redirect(route('table_fasilitas'));
    }

    public function fasilitasDestroy($id)
    {
        $fasilitas = Fasilitas::find($id);
        $fasilitas->delete();

        return redirect(route('table_fasilitas'));
    }





}


