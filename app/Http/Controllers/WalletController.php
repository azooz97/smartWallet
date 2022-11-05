<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function list()
    {
        // dd(Wallet::all());
        return view('wallets', [
            'wal' => Wallet::all()
        ]);
    }
}
