<?php

namespace App\Http\Controllers;

use App\Models\Kullanicilar;
use Illuminate\Http\Request;

class KullaniciGirisController extends Controller
{
    public function Giris(){
        return view("giris");
    }
    public function GirisYap(Request $request){
        $giris = Kullanicilar::where("E_Posta","=",$request->E_Posta)->where("Sifre","=",$request->Sifre)->first();
        if($giris != null){
            echo "Hoşgeldiniz!";
        }
        else{
            echo "Hatalı Giriş";
        }
    }
}
