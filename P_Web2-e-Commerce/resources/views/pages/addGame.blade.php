<?php 
use App\Http\Controllers\Author; 
?>
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
                $oth = new Author();
                $request = $oth->selectIdAndName();
                foreach ($request as $key => $value){
                    echo "<option value=".$key.">".$value."</option>";
                }
            ?>
            <option value="">--Please choose an option--</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="hamster">Hamster</option>
            <option value="parrot">Parrot</option>
            <option value="spider">Spider</option>
            <option value="goldfish">Goldfish</option>
        </select>

        <input type="submit" name="test">
    </form>
</div>

@stop