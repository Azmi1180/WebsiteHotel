<?php

namespace App\Http\Controllers;
use DateTime;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Kamar;
use App\Models\Reservasi;

class GuestController extends Controller
{
    //
    public function home()
    {
        return view('guest/landingpage');
        // return view('layout/client');
    }

    public function listKamar()
    {
        $kamar = Kamar::all();
        return view('guest/kamar', ['kamar' => $kamar]);
    }

    public function detailKamar($id)
    {
        $kamar = Kamar::find($id);
        return view('guest/detailkamar', ['kamar' => $kamar]);
    }

    public function viewBook($id)
    {
        $kamar = Kamar::all();
        // $kamarTerpilih = Kamar::find($id);
        return view('guest.book', ['idkamar' => $id, 'kamar' => $kamar]);

    }

    public function orderBook(Request $request)
    {
        // $reservasi =

        $data_request = $request->only(
            'id_kamar',
            'jumlah_kamar',
            'jumlah_orang',
            'email',
            'no_telp',
            'nik',
            'nama',
            'alamat',
            'checkin',
            'checkout',
            'catatan',
        );
        $validator = Validator::make($data_request, array(
            'id_kamar'=> ["required"],
            'jumlah_kamar'=> ["required"],
            'email'=> ["required"],
            'no_telp'=> ["required"],
            'nik'=> ["required"],
            'nama'=> ["required", "max:16"],
            'alamat'=> ["required"],
            'checkin'=> ["required"],
            'checkout'=> ["required"],
            'catatan'=> ["required"],
        ));

        if(!$validator->fails()){
            try{
                // dd($request->id_kamar);
                $kamar = Kamar::find($request->id_kamar);

                $dateCheckin = $request->checkin;
                $dateCheckout = $request->checkout;

                $datetime1 = new DateTime($dateCheckin);
                $datetime2 = new DateTime($dateCheckout);

                $interval = $datetime1->diff($datetime2);
                $days = $interval->format('%a');

                // dd($days);

                $totalHarga = $kamar->harga * $days * $request->jumlah_kamar;

                $jumlahSekarang = $kamar->ketersediaan - $request->jumlah_kamar;

                $kamar->ketersediaan = $jumlahSekarang;
                $kamar->save();

                $reservasi = new Reservasi();

                $reservasi->id_kamar = $request->id_kamar;
                $reservasi->jumlah_kamar = $request->jumlah_kamar;
                $reservasi->jumlah_orang = $request->jumlah_orang;
                $reservasi->email = $request->email;
                $reservasi->no_telp = $request->no_telp;
                $reservasi->nik = $request->nik;
                $reservasi->nama = $request->nama;
                $reservasi->alamat = $request->alamat;
                $reservasi->tgl_check_in = $request->checkin;
                $reservasi->tgl_check_out = $request->checkout;
                $reservasi->catatan = $request->catatan;
                $reservasi->status = "proses";
                $reservasi->total_harga = $totalHarga;


                // dd($reservasi);
                $reservasi->save();

                return redirect(route('home'));
                // $create_kamar = Kamar::create($data_request);

            } catch(Exception $e){
                // dd($e->getMessage());
                dd($e);
                return redirect()->back();
            }
        }   else {
            return redirect()->back();
        }
    }

    public function konfirmasiOrder($id)
    {
        $book = Reservasi::find($id);
        $kamar = Kamar::find($book->id_kamar);

        $dateCheckin = $book->tgl_check_in;
        $dateCheckout = $book->tgl_check_out;

        $datetime1 = new DateTime($dateCheckin);
        $datetime2 = new DateTime($dateCheckout);

        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        return view('guest/konfirmasi', ['resi'=>$book, 'days'=>$days]);
    }
}
