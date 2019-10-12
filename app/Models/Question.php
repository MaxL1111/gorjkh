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

    public function find_one($id)
    {
        $res = DB::select('select * from questions where id = ?',
            [$id]);
        return $res;
    }

    public function insert_question($date, $question, $answer)
    {
        DB::insert('insert into questions (created_at, question, answer) values (?, ?, ?)',
            [$date, $question, $answer] );

    }

    public function delete_question($id_delete)
    {
       // DB::table('questions')->where('id',$id)->delete();
        DB::delete('delete from questions where id = ?',
            [$id_delete] );

    }

    public function update_question($id, $created_at, $question, $answer)
    {
        DB::table('questions')
            ->where('id', $id)
            ->update(['created_at' => $created_at, 'question'=> $question, 'answer'=> $answer]);

    }

}
