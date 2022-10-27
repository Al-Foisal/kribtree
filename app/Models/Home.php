<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Home extends Model {
    protected $guarded = [];

    public function setTitleAttribute($value) {
        $this->attributes['title'] = $value;
        $this->attributes['slug']  = Str::slug($value);
    }

}
