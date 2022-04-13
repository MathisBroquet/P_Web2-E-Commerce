<?php

use App\Models\t_article;
use App\Models\t_basket;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_contain', function (Blueprint $table) {
            $table->unsignedBigInteger("FKBasket");
            $table->unsignedBigInteger("FKArticle");
            $table->foreign("FKBasket")->references("idBasket")->on("t_basket")->onDelete("cascade");
            $table->foreign("FKArticle")->references("idArticle")->on("t_article")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_contain');
    }
};
