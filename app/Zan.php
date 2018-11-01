<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zan extends BaseModel
{
    public function article() {
        return $this->belongsTo('\App\Article');
    }

    public function user() {

    }
}
