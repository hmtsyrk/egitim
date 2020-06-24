<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yazi extends Model
{
    protected $table ="yazis";
    protected $guarded = [];

    public function kategori() {
        return $this->belongsTo("App\Kategori","kategori_id");
        //migrate dosyalarında foreign satırları ilişkilendirmeleri için bu fonksiyon yazılmalı
    }

    public function user() {
        return $this->belongsTo("App\User","user_id");
        //migrate dosyalarında foreign satırları ilişkilendirmeleri için bu fonksiyon yazılmalı
    }
}
