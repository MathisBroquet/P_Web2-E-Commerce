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
        <select name="artFKAuthor" id="author">
            @foreach($authors as $author) 
                <option value="{{$author->idAuthor}}">{{$author->autCompanyName}}</option>
            @endforeach
        </select>
        <select name="idCategory" id="">
            @foreach($categories as $category) 
                <option value="{{$category->idCategory}}">{{$category->catName}}</option>
            @endforeach
        </select>
        
        <input type="submit" name="test" value="Ajouter le jeu">
    </form>

    <h1 class=" text-5xl">Modify Game</h1>
    <form action="" method="get">
        @csrf
        <select name="idGame" id="game">
            @foreach($games as $game)
                <option value="{{$game->idArticle}}">{{$game->artName}}</option>
            @endforeach
        </select>
        <input type="submit" name="test" value="Modifier ce jeu...">
    </form>-->
    @if(isset($_POST['idGame']))
    <?= "<pre> $_POST[idGame] </pre>" ?>
    <form action="{{ route('game.modify') }}" method="post">
        @csrf
        <input type="text" name="artName" value="{{$game->artName::where(idArticle, $_GET['game'])}}" id="" placeholder="name">
        <input type="text" name="artDescription" value="{{$game->artDescription}}" id="" placeholder="Description">
        <input type="text" name="artPathToImage" value="{{$game->artPathToImage}}" id="" placeholder="PathToImg">
        <input type="text" name="artPrice" value="{{$game->artPrice}}" id="" placeholder="price">
        <input type="date" name="artReleaseDate" value="{{ $game->artRealeseDate }}" id="" placeholder="release">
        <select name="artFKAuthor" id="author">
            @foreach($authors as $author)
                @if($author->idAuthor == $game->FKAuthor){
                    <option value="{{$author->idAuthor}}" selected>{{$author->autCompanyName}}</option>
                }
                @else{
                    <option value="{{$author->idAuthor}}">{{$author->autCompanyName}}</option>
                }
                @endif
            @endforeach
        </select>
        
        <input type="submit" name="test" value="Modifier le jeu">
    </form>
    @endif
</div>

@stop