<?php

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
        Schema::create('t_session', function (Blueprint $table) {
            $table->id("idSession");
            $table->unsignedBigInteger("FKUser");
            $table->foreign("FKUser")->references("idUser")->on("t_user")->onDelete("cascade");
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
        Schema::dropIfExists('t_session');
    }
};
