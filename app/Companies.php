<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Companies_list;
class Companies extends Model
{
    //
    public function candidate_list()
    {
        return $this->hasMany('App\Companies_list');
    }
}
