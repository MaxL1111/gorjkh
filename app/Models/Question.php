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

    public function insert_question($date, $question, $answer)
    {
        DB::insert('insert into questions (created_at, question, answer) values (?, ?, ?)',
            [$date, $question, $answer] );

    }

    public function delete_question($id)
    {
        DB::delete('delete from questions where id = ?',
            [$id] );

    }

}
