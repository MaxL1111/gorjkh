@extends('layouts.app')

@section('title', 'Панель админа')

@section('content')

    <p align="center">
        <strong><span class="text-danger">Рубрика "Спрашивайте - Ответим":</span></strong>
    </p>


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
                            <span>Ваше сообщение отправлено!</span>
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
                    <td>
                        {{ $question->question }}
                    </td>
                    <td>
                        {{ $question->answer}}
                    </td>
                    <td>
                        <p>
                            <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal"
                                    data-target="#ModaEditing" data-whatever="@mdo">Редактировать</button>


                        <div class="modal fade" id="ModaEditing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Редактор</h5>

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
                                                          required>{{$question->id}}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="validationTextarea2" class="col-form-label">Ответ:*</label>
                                                <textarea name="answer" class="form-control is-invalid" id="validationTextarea2"
                                                          required>{{$question->answer}}</textarea>
                                            </div>

                                            <div id="sendmessage3">
                                                <span>Ваше сообщение отправлено!</span>
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


                        </p>
                        <p>
                        <form id="delete_question" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}

                            <input type="hidden"  name="id" value="{{$question->id}}">
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

