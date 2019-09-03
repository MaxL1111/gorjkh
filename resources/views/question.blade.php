@extends('layouts.app')

@section('title', 'Задать вопрос')

@section('content')

    <div class="shadow p-3 mb-5 bg-white rounded"><h5><strong>Вопрос-Ответ</strong></h5></div>


    <p class="text-justify">
        В повседневной жизни нередко возникают различные вопросы, найти ответ на которые,
        даже имея под рукой нормативные документы, удается не всегда. И без разъяснений и
        комментариев компетентного специалиста здесь не обойтись. На сайте КПУП "Гомельское
        городское ЖКХ" в качестве постоянной будет присутствовать рубрика "Спрашивайте - Ответим".
        В ней соответствующие специалисты дадут ответ на любой вопрос, так или иначе связанный
        с деятельностью предприятий жилищно-коммунального хозяйства города Гомеля. На данной
        странице опубликованы наиболее часто задаваемые вопросы. Если среди данных вопросов,
        опубликованных ниже, Вы не нашли интересующий Вас и хотите получить на него ответ в
        наиболее короткие сроки, тогда эта рубрика для Вас.
        Прежде чем задать свой вопрос предлагаем ознакомиться с ответами на наиболее
        часто задаваемые вопросы, перейдя по ссылке.
    </p>

    <p class="text-justify">
        Вы можете задать свой вопрос перейдя по ссылке, расположенной ниже. Администратор
        сайта в кратчайшие сроки вышлет Вам ответ на Вашу электронную почту.
    </p>

    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal"
            data-target="#exampleModal3" data-whatever="@mdo">
        Задайте свой вопрос <i class="far fa-hand-point-up"></i>
    </button>

    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Рубрика Спрашивайте - Ответим</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body was-validated" >
                    <p class="text-muted">Здесь Вы можете задать вопрос, касающийся жилищно-коммунального хозяйства г. Гомеля.</p>
                    <form id="form_question_answer" enctype="multipart/form-data" method="POST" >
                        {{ csrf_field() }}

                        <input name="user_citizen" type="hidden" value="рубрика вопрос-ответ">

                        <div class="form-group">
                            <label for="validationTooltip01" class="col-form-label">Кто Вы:*</label>
                            <input type="text" name="user_name" class="form-control" id="validationTooltip01" placeholder="Иванов Иван Петрович" required>

                            <label for="user-email" class="col-form-label">Ваш е-mail:*</label>
                            <input name="user_mail" type="email" class="form-control" id="user-email"
                                   placeholder="yourmail@example.by" required>
                        </div>

                        <div class="form-group">
                            <label for="validationTextarea" class="col-form-label">Ваш вопрос:*</label>
                            <textarea name="user_question" class="form-control is-invalid" id="validationTextarea" required></textarea>
                        </div>

                        <div id="sendmessage3">
                            <span>Ваше сообщение отправлено!</span>
                        </div>
                        <div id="errsend3">
                            При отправке сообщения произошла ошибка. Попробуйте еще раз!
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button id="upload" type="submit" class="btn btn-primary">Отправить сообщение</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <br>

    <p class="text-justify">
        Обращаем Ваше внимание, что рубрика "Спрашивайте - Ответим" носит разъяснительный характер.
        Если Вы хотите подать электронное обращение, то Вам следует перейти по одной из ссылок,
        имеющихся на странице <a href="{{'/appeals'}}">"Обращения"</a>, и заполнить представленную там форму. Ваше
        обращение
        будет рассмотрено в сроки, установленные законом Республики Беларусь "Об обращение
        граждан и юридических лиц".
    </p>

    <p align="center">
        <strong><span class="text-danger">Ваши вопросы в рубрику "Спрашивайте - Ответим":</span></strong>
    </p>


    @if(count($questions) > 0)
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Дата</th>
                <th scope="col">&nbsp&nbsp&nbsp&nbspВопрос&nbsp&nbsp</th>
                <th scope="col">Ответ</th>

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

                        {{ $question->answer }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

@endsection