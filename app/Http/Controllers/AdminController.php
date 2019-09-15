<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Показать список всех вопросов из таблицы questions.
     *
     * @return Response
     */
    public function all_question()
    {
        //   $questions = DB::select('select * from questions order by id desc');

        $questions = new Question();
        return view('adminpanel', ['questions' => $questions->find_all()]);
    }

}
