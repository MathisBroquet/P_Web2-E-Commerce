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
<div class=" mt-4 min-h-40 w-full">test</div>
@stop