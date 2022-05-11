@extends('layout')

@section('content')
<form action="/connect" method="POST" class="text-black">
    {{csrf_field()}}
    <p><input class="ml-4 w-28 mt-4" type="text" name="name" value="{{old('name')}}" placeholder="Nom d'utilisateur"></p>

    @if($errors->has('name'))
    <p>{{$errors->first('name')}}</p>
    @endif

    <p><input class="ml-4 w-28 mt-4" type="password" name="password" placeholder="Mot de passe"></p>

    @if($errors->has('password'))
    <p>{{$errors->first('password')}}</p>
    @endif

    <p><button class="ml-4 mt-4" type="submit">Se connecter</button></p>
</form>
@stop