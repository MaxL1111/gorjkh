<?php

namespace App\Http\Controllers;

use App\Mail\MailUser;
use App\Models\Admin;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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

    public function add_question_answer(Request $request)
    {
        $date = $request->date;
        $question = $request->question;
        $answer = $request->answer;

        $result = new Question;
        $result->insert_question($date, $question, $answer);

    }

    public function delete_question_answer($id)
    {
        $result = new Question;
        $result->delete_question($id);

    }


}
