<?php


use App\Http\Controllers\KayitController;
use App\Http\Controllers\KullaniciGirisController;
use Illuminate\Support\Facades\Route;



Route::get("/", [KayitController::class, "Kayit"]);
Route::post("/kayitOl", [KayitController::class, "KayitOl"]);
Route::get("/guncelleme", [KayitController::class, "Guncelleme"]);
Route::post("/guncelle", [KayitController::class, "Guncelle"]);
Route::get("/giris", [KullaniciGirisController::class, "Giris"]);
Route::post("girisyap", [KullaniciGirisController::class, "GirisYap"]);