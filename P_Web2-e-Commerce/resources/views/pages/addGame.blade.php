@extends('layout')

@section('content')
<div class="flex text-black">
    <form class=" flex-col" action="{{ route('game.add') }}" method="post">
        @csrf
        <input type="text" name="artName" value="" id="">
        <input type="text" name="artDescription" value="" id="">
        <input type="text" name="artPathToImage" value="" id="">
        <input type="text" name="artPrice" value="" id="">
        <input type="date" name="artReleaseDate" value="" id="">
        <input type="integer" name="artFKAuthor" value="" id="">
        <input type="submit" name="test">
    </form>
</div>

@stop