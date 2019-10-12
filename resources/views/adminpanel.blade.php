@extends('layouts.app')

@section('title', 'Панель админа')

@section('content')

    <div class="shadow p-3 mb-5 bg-white rounded"><h5><strong>Админ-панель. Таблица Рубрики "Спрашивайте - Ответим"</strong></h5></div>


    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal"
            data-target="#exampleModal5" data-whatever="@mdo">
        Добавить вопрос-ответ <i class="far fa-hand-point-up"></i>
    </button>

    <br>

    <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Рубрика Спрашивайте - Ответим</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body was-validated">

                    <form id="form_admin_question_answer" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label for="date" class="col-form-label">Дата:*</label>
                            <input type="date" id="date" name="date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="validationTextarea" class="col-form-label">Вопрос:*</label>
                            <textarea name="question" class="form-control is-invalid" id="validationTextarea"
                                      required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="validationTextarea2" class="col-form-label">Ответ:*</label>
                            <textarea name="answer" class="form-control is-invalid" id="validationTextarea2"
                                      required></textarea>
                        </div>

                        <div id="sendmessage3">
                            <span>Добавлена новая запись!</span>
                        </div>
                        <div id="errsend3">
                            При отправке сообщения произошла ошибка. Попробуйте еще раз!
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button id="upload" type="submit" class="btn btn-primary">Опубликовать</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>




    @if(count($questions) > 0)
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Дата</th>
                <th scope="col">&nbsp&nbsp&nbsp&nbspВопрос&nbsp&nbsp</th>
                <th scope="col">Ответ</th>
                <th scope="col">Редактирование</th>

            </tr>
            </thead>
            <tbody>
            @foreach($questions as $question)
                <tr>
                    <th scope="row">
                        {{ $question->created_at }}
                    </th>
                    <td id="question">
                        {{ $question->question }}
                    </td>
                    <td>
                        {{ $question->answer}}
                    </td>
                    <td>
                        <p>

                        <form action="editor/{{$question->id}}" id="editor_question" enctype="multipart/form-data" method="GET">
                            {{ csrf_field() }}


                            <button id="upload" type="submit" class="btn btn-success">Редактировать</button>
                        </form>



                        </p>
                        <p>
                        <form action="/delete_question_answer/{{$question->id}}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}


                            <input type="hidden" name="id_delete" value="{{$question->id}}">
                            <button id="upload" type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                        </p>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif


@endsection

