@extends('layout')

@section('content')
<p>utilisateur connecté</p>

@if(Auth::user())
oui
@else
non
@endif

@stop