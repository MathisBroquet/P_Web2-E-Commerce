@extends('layout')

@section('content')
<div class="flex">
    <div class=" w-1/10">
    </div>
    <div class="mt-4 h-40 ml w-4/5 flex justify-around items-center text-2xl text-white font-medium">
        <div>
            <nav>
                <ul>
                    <li>
                        <button class="font-medium">Plateforme</button>
                        <ul class="">
                            <?php
                            $html = "";
                            for ($i = 0; $i < 4; $i++) {
                                $html .= "<li class='font-normal'><input type='checkbox' id='scales' name='scales'
                                ><label for='scales'>Scales</label></li>";
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
                            $html .= "<li class='font-normal'><input type='checkbox' id='Horreur' name='Horreur'
                                ><label for='scales'>Horreur</label></li>";
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
                            $html .= "<li class='font-normal'><input type='checkbox' id='ubisoft' name='ubisoft'
                                ><label for='ubisoft'>Ubisoft</label></li>";
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
<div class="flex">
    <div class=" w-1/10">
    </div>
    <div>
        
    </div>
    <div class=" w-1/10">
    </div>
</div>

@stop