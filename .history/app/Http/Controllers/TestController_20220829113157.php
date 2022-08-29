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

        /**
         * Create Deposit for confirm transacction
         */

        // $myWallet       =   $clients->getWallet($clients->profile);
        // $transaction    =   $myWallet->depositFloat(5.64, ['deposito'], false);
        // $transaction->confirmed;
        // $myWallet       =   $clients->getWallet($clients->profile);
        // dd($myWallet->balanceFloat);

        /**
         * Confirm Payment transacction Deposit
         */
        $myWallet       =   $clients->getWallet($clients->profile);
        $transaction    =   $clients->transactions()->where('confirmed',0)->get();

        dd($transaction);
        if($transaction->count() > 0)
        {
            foreach ($transaction as $t => $trans)
            {
                $myWallet->confirm($trans);
                $myWallet->confirmed;
            }
        }


        dd("Test Controller");
    }
}
