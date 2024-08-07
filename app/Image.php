<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Schema::create('foto', function (Blueprint $table){
    $table->string('foto');
});

class Image extends Model
{
    protected $fillable = ['foto'];
    public function getUrlPathAttribute()
    {
        return Storage::url($this->path);
    }
}
