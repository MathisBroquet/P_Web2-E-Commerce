<?php

use App\Models\t_basket;
use App\Models\t_user;
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
        Schema::create('t_order', function (Blueprint $table) {
            $table->id("idOrder");
            $table->float("ordPrice");
            $table->date("ordDate");
            $table->foreignIdFor(t_basket::class);
            $table->foreignIdFor(t_user::class);
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
        Schema::dropIfExists('t_order');
    }
};
