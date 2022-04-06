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
            $table->foreignIdFor(t_article::class);
            $table->foreignIdFor(t_basket::class);
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
