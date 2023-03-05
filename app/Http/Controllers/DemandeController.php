<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function qrcode(){
      return \QrCode::
     size(300)
            ->backgroundColor(255,55,0)
            ->margin(20)
            ->generate('AMBROISE ZOUNMENOU');
    }
}
