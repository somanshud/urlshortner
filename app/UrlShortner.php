<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UrlShortner extends Model
{
    //
    protected $table = "url_shortner";
    protected $fillable = [
        'shortcode', 'orglink'
    ];
}
