@extends('tasarım._layout')

<form method="post" action="/guncelle">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Id</span>
        <input type="text" class="form-control text-center" name="Id" >
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Kullanılan Şifre</span>
        <input type="text" class="form-control text-center" name="K_Sifre" >
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Yeni Şifre</span>
        <input type="text" class="form-control text-center" name="Y_Sifre" >
    </div>
    <button type="submit" class="btn btn-primary">Güncelle</button>
</form>