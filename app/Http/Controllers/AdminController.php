<?php

namespace App\Http\Controllers;
use DateTime;
use PDF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Kamar;
use App\Models\Reservasi;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('/admin/dashboard');
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

    public function kamarDelete(Request $request, $id)
    {
        Kamar::find($id)->destroy();

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



}


