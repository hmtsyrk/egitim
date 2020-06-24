<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreattableYazi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yazilar', function (Blueprint $table) {
            $table->id();
            $table->string("baslik");
            $table->text("icerik");
            $table->integer("kategori_id")->unsigned();// varsayılan olarak herhangi bir değeri yok
            $table->integer("user_id")->unsigned();
            $table->string("resim")->nullable();

           // $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            // cascade bu tabloda bişey silindiğinde hata vermesin diye. yoksa users tablosunda hala bu id var diye hata verir

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
        Schema::dropIfExists('yazilar');
    }
}
