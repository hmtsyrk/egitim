<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYazisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yazis', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("baslik");
            $table->string("icerik");
            $table->bigInteger("kategori_id")->unsigned();
            $table->bigInteger("user_id")->unsigned();
            $table->foreign("kategori_id")->references("id")->on("kategoris")->onDelete("cascade");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            //$table->softDeletes();

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
        Schema::dropIfExists('yazis');
    }
}
