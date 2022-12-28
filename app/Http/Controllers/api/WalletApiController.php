<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Models\Report;
use App\Models\Client;
use App\Models\Favourite;
use App\Models\BlockUser;
use App\Models\HideUser;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
class WalletApiController extends Controller
{  
     public function ShowWalletAmount(Request $request)
    {
        $walletamount = Client::where('id',$request->user_id)->select('wallet_amount')->first();
          if ($walletamount) {
                  
                    return response()->json(['error' => false,'Wallet Amount'=>$walletamount]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Something is Wrong']);
            }
    }
}