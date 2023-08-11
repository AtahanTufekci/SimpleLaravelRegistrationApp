@extends('tasarım._layout')

<form method="post" action="/girisyap">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">E_Posta</span>
        <input type="text" class="form-control text-center" name="E_Posta" >
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Şifre</span>
        <input type="text" class="form-control text-center" name="Sifre" >
    </div>
    <button type="submit" class="btn btn-primary">Giriş Yap</button>
</form>