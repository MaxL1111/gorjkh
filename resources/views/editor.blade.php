@extends('layouts.app')

@section('title', 'Редактор')

@section('content')


    <div class="shadow p-3 mb-5 bg-white rounded"><h5><strong>Админ-панель. Редактор полей таблицы</strong></h5></div>

    @if(count($questions) > 0)
    @foreach($questions as $question)

    <form class="was-validated" id="form_admin_question_answer_editor" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}

        <input type="hidden" id="id" name="id" class="form-control" value="{{$question->id}}">


        <div class="form-group">
            <label for="date" class="col-form-label">Дата:*</label>
            <input type="date" id="date" name="date" class="form-control" value="{{$question->created_at}}" required>
        </div>

        <div class="form-group">
            <label for="validationTextarea" class="col-form-label">Вопрос:*</label>
            <textarea name="question" class="form-control is-invalid" rows="5" id="validationTextarea"
                      required>{{$question->question}}</textarea>
        </div>

        <div class="form-group">
            <label for="validationTextarea2" class="col-form-label">Ответ:*</label>
            <textarea name="answer" class="form-control is-invalid" rows="5" id="validationTextarea2"
                      required>{{ $question->answer}}</textarea>
        </div>

        <div id="sendmessage3">
            <span>Изменения применены!</span>
        </div>
        <div id="errsend3">
            При отправке сообщения произошла ошибка. Попробуйте еще раз!
        </div>

        <div class="modal-footer">
            <a href="/adminpanel" class="btn btn-secondary" data-dismiss="modal">Назад</a>
            <button id="upload" type="submit" class="btn btn-primary">Применить изменения</button>
        </div>
    </form>


    @endforeach

    @endif

@endsection