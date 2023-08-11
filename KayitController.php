<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kullanicilar;
use Exception;

class KayitController extends Controller
{
    public function Kayit(){
        return view("kayit");
    }
    public function KayitOl(Request $request){
        if($request->filled(["Ad", "Soyad","E_Posta", "Sifre"])){
            $kullanici = new Kullanicilar;
            $kullanici->Ad = $request->Ad;
            $kullanici->Soyad = $request->Soyad;
            $kullanici->E_Posta = $request->E_Posta;
            $kullanici->Sifre = $request->Sifre;
            $kullanici->save();
            echo "Kullanıcı Kaydı Yapıldı!";
        }
        else{
            echo "Eksik Bilgi Girildi!";
        }
    }
    public function Guncelleme(){
        return view("guncelleme");
    }
    public function Guncelle(Request $request){
        try{
            if($request->filled(["Id","K_Sifre","Y_Sifre"])){
                $guncelle = Kullanicilar::query()->find($request->Id);
                if($request->K_Sifre == $guncelle->Sifre){
                    $guncelle->Sifre = $request->Y_Sifre;
                    $guncelle->save();
                    echo "Şifre Güncellendi!";
                }
                else{
                    echo "Kullanılan Şifre Hatalı Girildi!";
                }
            }
            else{
                echo "Eksik Bilgi Girildi!";
            }
        }
        catch(Exception $e){
            echo "Hata Meydana Geldi!";
        }
    }
}
