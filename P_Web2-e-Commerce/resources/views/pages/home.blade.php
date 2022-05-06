@extends('layout')

@section('content')
<div class="relative">
    <img class=" relative object-cover w-full h-[1000px]" src="/images/games/amongus.jpg" id="yield" alt="">
        <div class="flex justify-between absolute inset-0 w-full h-[1000px]">
            <button class="text-8xl ml-2 text-ored-300"><</button>
            <button class="text-8xl mr-2 text-ored-300">></button>
        </div>
        <div class="flex flex-col justify-center absolute inset-0 w-full h-[1000px]">
            <h1 class=" text-center text-9xl">Imposez - vous</h1>
            <button class="border-2 text-ored-300 w-fit p-3 px-20 self-center bg-white opacity-75 hover:opacity-25">Détails</button>
        </div>
</div>
<div class=" mt-10 min-h-40 w-full">
    <div>
        <h1 class="uppercase text-center">Meilleures ventes</h1>
        <hr class=" w-5 ml-auto mr-auto mt-4 mb-4">
    </div>
    <div id="games" class="mt-5 mb-5 grid grid-cols-3 gap-20 place-items-center">
        <div id="game1" class="relative">
            <img class=" h-[600px] w-[400px] z-30 hover:z-20 relative" src="/images/games/amongus.jpg" alt="">
            <button id="hover" class="flex flex-col justify-center inset-08 mt-[-60px] absolute w-[400px] h-[60px] text-black bg-white opacity-80 z-20 hover:z-40 hover:bg-ored-300">Aperçu rapide</button>
        </div>
        <div id="game2" class="relative">
            <img class=" h-[600px] w-[400px] z-30 hover:z-20 relative" src="/images/games/amongus.jpg" alt="">
            <button id="hover" class="flex flex-col justify-center inset-08 mt-[-60px] absolute w-[400px] h-[60px] text-black bg-white opacity-80 z-20 hover:z-40 hover:bg-ored-300">Aperçu rapide</button>
        </div>
        <div id="game3" class="relative">
            <img class=" h-[600px] w-[400px] z-30 hover:z-20 relative" src="/images/games/amongus.jpg" alt="">
            <button id="hover" class="flex flex-col justify-center inset-08 mt-[-60px] absolute w-[400px] h-[60px] text-black bg-white opacity-80 z-20 hover:z-40 hover:bg-ored-300">Aperçu rapide</button>
        </div>
    </div>
</div>
@stop