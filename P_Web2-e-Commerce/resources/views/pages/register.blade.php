@extends('layout')

@section('content')
<form action="/register" method="POST" class="text-black">
        {{csrf_field()}}
        <input type="text" name="name" placeholder="Nom d'utilisateur">    
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe">
        <button type="submit">M'inscrire</button>
    </form>


@stop