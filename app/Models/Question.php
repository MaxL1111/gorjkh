<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Question extends Model
{
    public function find_all()
    {
        $res = DB::select('select * from questions order by id desc');
        return $res;
    }
}
