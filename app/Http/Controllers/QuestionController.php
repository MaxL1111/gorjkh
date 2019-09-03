<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Показать список всех вопросов из таблицы questions.
     *
     * @return Response
     */
    public function findall()
    {
        $questions = DB::select('select * from questions order by id desc');

        return view('question', ['questions' => $questions]);
    }
}
