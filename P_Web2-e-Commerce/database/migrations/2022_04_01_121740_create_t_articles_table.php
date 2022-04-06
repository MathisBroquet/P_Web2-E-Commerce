<?php

use App\Models\t_author;
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
        Schema::create('t_article', function (Blueprint $table) {
            $table->id("idArticle");
            $table->string("artName", 150);
            $table->string("artDescription", 400);
            $table->float("artPrice");
            $table->date("artRealeseDate");
            $table->foreignIdFor(t_author::class);
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
        Schema::dropIfExists('t_articles');
    }
};
