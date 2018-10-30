<?php

namespace App;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class BaseModel extends EloquentModel
{
    protected $guarded = [];
}
