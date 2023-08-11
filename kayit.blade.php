@extends('tasarım._layout')

<form method="post" action="/kayitOl">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">İsim</span>
        <input type="text" class="form-control text-center" name="Ad" >
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Soyisim</span>
        <input type="text" class="form-control text-center" name="Soyad" >
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">E-Posta</span>
        <input type="text" class="form-control text-center" name="E_Posta" >
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Şifre</span>
        <input type="text" class="form-control text-center" name="Sifre" >
    </div>
    <button type="submit" class="btn btn-primary">Kayıt Ol</button>
</form>
<button type="button" class="btn btn-primary" onclick="location.href='/guncelleme'">Güncelleme</button>
<button type="button" class="btn btn-primary" onclick="location.href='/giris'">Giriş</button>