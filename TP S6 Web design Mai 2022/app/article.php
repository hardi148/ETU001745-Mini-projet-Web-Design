<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $fillable = [
        'titre',
        'contenu',
        'resumer',
        'auteur',
        'img',
    ];

    public $timestamps = false;
    protected $primaryKey = "idarticle";
    public $incrementing = false;
}

?>