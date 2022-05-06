@extends('layout')

@section('content')
<div class="flex border-b-2 border-slate-600 mb-5">
    <div class=" w-1/10">
    </div>
    <div class="mt-4 h-40 ml w-4/5 flex justify-around items-center text-2xl text-white font-medium ">
        <div>
            <nav>
                <ul>
                    <li>
                        <button class="font-medium">Plateforme</button>
                        <ul class="">
                            <?php
                            $html = "";
                            for ($i = 0; $i < 4; $i++) {
                                $html .= "<li class='font-normal'><input type='checkbox' id='pc" . $i . "' name='pc" . $i . "'
                                ><label for='pc" . $i . "'>PC</label></li>";
                            }
                            echo $html;
                            ?>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div>
            <ul>
                <li>
                    <button class="font-medium">Genre</button>
                    <ul class="">
                        <?php
                        $html = "";
                        for ($i = 0; $i < 4; $i++) {
                            $html .= "<li class='font-normal'><input type='checkbox' id='Horreur" . $i . "' name='Horreur" . $i . "'
                                ><label for='Horreur" . $i . "'>Horreur</label></li>";
                        }
                        echo $html;
                        ?>
                    </ul>
                </li>
            </ul>
        </div>
        <div>
            <ul>
                <li>
                    <button class="font-medium">Editeur</button>
                    <ul class="">
                        <?php
                        $html = "";
                        for ($i = 0; $i < 4; $i++) {
                            $html .= "<li class='font-normal'><input type='checkbox' id='ubisoft" . $i . "' name='ubisoft" . $i . "'
                                ><label for='ubisoft" . $i . "'>Ubisoft</label></li>";
                        }
                        echo $html;
                        ?>
                    </ul>
                </li>
            </ul>
        </div>
        <div>
            <ul>
                <li class="font-normal">
                    <input type="checkbox" id="favoris" name="favoris"><label for="favoris">Favoris</label>
                </li>
            </ul>
        </div>

    </div>
    <div class=" w-1/10">
    </div>
</div>

<div class="flex mt-5 mb-5">
    <div class=" w-1/10">
    </div>
    <div>
        <div>
            Minecraft
        </div>
        <div class="w-fit h-fit relative ">
            <img src="/images/games/Minecraft.png" alt="Minecraft">
            <div class="flex w-full bg-white bg-opacity-25 inset-08 absolute mt-[-95px]  white justify-between h-1/4">
                <div class="ml-2">
                    Etoile
                </div>
                <div>
                    Like
                </div>
                <div class="mr-2">
                    <a href=""> Panier</a>
                </div>
            </div>
        </div>
    </div>
    <div class=" w-1/10">
    </div>
</div>

@stop