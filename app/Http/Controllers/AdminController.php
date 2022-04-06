<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Kamar;

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
}


