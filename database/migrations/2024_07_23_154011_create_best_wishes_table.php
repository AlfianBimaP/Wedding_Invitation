<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBestWishesTable extends Migration
{
    public function up()
    {
        Schema::create('Best_Wishes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ucapan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Best_Wishes');
    }
}
