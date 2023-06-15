<?php

namespace App\Http\Controllers;

use App\Models\Saldo;
use App\Models\Pemasukan;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    public function index(){
        $pemasukans = Pemasukan::get();
        // dd($pemasukans);
        return view('Page.Masuk', [
            'pemasukans' => $pemasukans
        ]);
    }

    public function store(Request $request){
        $data = Pemasukan::create([
            'asal' => $request->asal,
            'nominal' => $request->nominal,
            'tanggal_terima' => $request->tanggal_terima
        ]);

        // dd($data);

        $saldo = Saldo::first();
        // dd($saldo);
        if($saldo == null){
            Saldo::create([
                'saldo' => $request->nominal
            ]);
        } else{
            $saldo->update([
                'saldo' => $data->nominal + $saldo->saldo
            ]);
        }
        
        // $s = Saldo::where('id', 1)->get();
        // if( $s === true){
        //     $saldo = Saldo::where('id', 1)->update([
        //         'saldo' => $pemasukan->nominal + $s
        //     ]);
        // }


        return redirect('/uang-masuk');
    }
}
