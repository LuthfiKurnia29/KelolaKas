<?php

namespace App\Http\Controllers;

use App\Models\Saldo;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index(){
        $saldo = Saldo::first();
        $pengeluarans = Pengeluaran::all();
        return view('Page.Keluar', [
            'saldo' => $saldo,
            'pengeluarans' => $pengeluarans
        ]);
    }

    public function store(Request $request){
        $saldo = Saldo::first();
        $pengeluaran = 
            Pengeluaran::create([
                'keluar_kepada' => $request->keluar_kepada,
                'nominal' => $request->nominal,
                'tanggal_keluar' => $request->tanggal_keluar
            ]);
        $saldo->update([
            'saldo' => $saldo->saldo - $pengeluaran->nominal
        ]);

        return redirect('/uang-keluar');
    }
}
