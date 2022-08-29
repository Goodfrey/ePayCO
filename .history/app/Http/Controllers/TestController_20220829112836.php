<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public static function index(Request $request)
    {
        $clients    =   User::first();
        // dd($clients);

        /**
         * Create Wallet for single client
         */
        // $clients->createWallet([
        //     'name'          =>  $clients->profile,
        //     'slug'          =>  $clients->profile,
        //     'meta'          =>  'USD',
        //     'description'   =>  'Wallet Client: '.$clients->name.'',
        // ]);

        /**
         * Get Wallet and make a deposit
         */

        // $myWallet   =   $clients->getWallet($clients->profile);
        // $myWallet->depositFloat(5.24);

        /**
         * Get Balance from Wallet
         */
        // $myWallet   =   $clients->getWallet($clients->profile);
        // $balance    =   $myWallet->balanceFloat;
        // dd($balance);

        /**
         * Discount Balance from Wallet
         */

        // $myWallet   =   $clients->getWallet($clients->profile);
        // $myWallet->WithdrawFloat(2.88, ['Description' => 'PAYMENT FOR MONTH']);
        // $balance    =   $myWallet->balanceFloat;
        // dd($balance);



        dd("Test Controller");
    }
}
