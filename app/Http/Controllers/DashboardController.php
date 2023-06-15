<?php

namespace App\Http\Controllers;

use App\Models\Saldo;
use App\Models\Pemasukan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $saldo = Saldo::first();
        // dd($saldo->sum('nominal'));
        return view('Page.index', [
            'saldo' => $saldo
        ]);
    }
}
