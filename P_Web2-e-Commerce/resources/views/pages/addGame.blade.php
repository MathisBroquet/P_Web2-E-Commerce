@extends('layout')

@section('content')
<div class=" text-black">
    <h1 class=" text-5xl">Add Game</h1>
    <form action="{{ route('game.add') }}" method="post">
        @csrf
        <input type="text" name="artName" value="" id="" placeholder="name">
        <input type="text" name="artDescription" value="" id="" placeholder="Description">
        <input type="text" name="artPathToImage" value="" id="" placeholder="PathToImg">
        <input type="text" name="artPrice" value="" id="" placeholder="price">
        <input type="date" name="artReleaseDate" value="" id="" placeholder="release">
        <input type="integer" name="artFKAuthor" value="" id="" placeholder="fk">

        <select name="pets" id="pet-select">
            <?php
                
            ?>
        </select>

        <input type="submit" name="test">
    </form>
</div>

@stop