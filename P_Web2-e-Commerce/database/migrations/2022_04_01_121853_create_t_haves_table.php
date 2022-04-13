<?php

use App\Models\t_article;
use App\Models\t_category;
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
        Schema::create('t_have', function (Blueprint $table) {
            $table->unsignedBigInteger("FKCategory");
            $table->unsignedBigInteger("FKArticle");
            $table->foreign("FKCategory")->references("idCategory")->on("t_category")->onDelete("cascade");
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
        Schema::dropIfExists('t_have');
    }
};
