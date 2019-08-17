@extends('layouts.app')

@section('title', 'Главная')

@section('content')


    <div class="shadow-sm p-3 mb-5 bg-white rounded"><h5><strong>Электронное обращение</strong></h5></div>

    <p><strong>Согласно п.1 ст. 25 <span class="text-danger">Закона Республики Беларусь «Об обращениях граждан и
            юридических лиц»</span> в данной рубрике «Обращения» размещена специальная форма, заполнив которую
            Вы можете направить электронное обращение,
            обращаем Ваше внимание на то, что такой способ направления электронного обращения является единственным.
            Электронный ящик КПУП "Гомельское городское ЖКХ" служит только для направления ответов на электронные
            обращения заявителей и присланные на него вопросы рассматриваться не будут.</strong></p>
    <ul class="list-unstyled">
        <p>
            <ins><strong>Правила при составлении обращения:</strong></ins>
        </p>
        <ul>
            <li>Обращения излагаются на белорусском или русском языке;</li>
            <li>Согласно статье 12 Закона «Об обращениях граждан и юридических лиц» поля, помеченные *, обязательны для
                заполнения;
            </li>
            <li>Не допускается употребление в обращениях нецензурных либо оскорбительных слов или выражений;</li>
            <li>В обращениях должна содержаться информация о результатах их предыдущего рассмотрения;</li>
            <li>Отзыв электронного обращения осуществляется путем подачи письменного заявления либо направления
                заявления в электронной форме.
            </li>
        </ul>
    </ul>

    <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal"
            data-target="#exampleModal" data-whatever="@mdo">Написать электронное обращение
        <br>(для граждан)
    </button>
    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="modal"
            data-target="#exampleModal2" data-whatever="@mdo">
        Написать электронное обращение
        <br>(для юридических лиц и индивидуальных предпринимателей)
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Электронное обращение</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" >
                    <form method="POST" action="{{route('send-mail')}}">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="recipiente">Кому:*</label>
                            </div>
                            <select class="custom-select" id="recipiente">
                                <option selected>Выбрать...</option>
                                <option value="1">Генеральному директору КПУП "Гомельское городское ЖКХ" Кулаго В.А.</option>
                                <option value="2">Руководителю КЖРЭУП "Новобелицкое"</option>
                                <option value="3">Руководителю КЖРЭУП "Центральное"</option>
                                <option value="4">Руководителю КЖРЭУП "Советское"</option>
                                <option value="5">Руководителю КЖРЭУП "Железнодорожное"</option>
                                <option value="6">Руководителю КЖРЭУП "Сельмашевское"</option>
                                <option value="7">Руководителю КУП "Расчетно-справочный центр г. Гомеля"</option>
                                <option value="8">Руководителю КАУП по СД "ГорСАП"</option>
                                <option value="9">Руководителю КУП "Спецкоммунтранс"</option>
                                <option value="10">Руководителю КУП "Гомельский городской дорожный строительно-ремонтный трест"</option>
                                <option value="11">Руководителю КПУП "Гомельводоканал"</option>
                                <option value="12">Руководителю КУП "Горэлектротранспорт"</option>
                                <option value="13">Руководителю КСУП "Городской центр оздоровления"</option>
                                <option value="14">Руководителю ДКПУП "Гомельгорсвет"</option>
                                <option value="15">Руководителю ДКСУП "Красная гвоздика"</option>
                                <option value="16">Руководителю ОАО "Гомельремстрой"</option>
                                <option value="17">Руководителю ОАО "Гомельский специализированный комбинат"</option>
                                <option value="18">Руководителю ОАО "Отель"</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">ФИО:*</label>
                            <input type="text" name="username" class="form-control" id="validationTooltip01">
                            <label for="recipient-name" class="col-form-label">Почтовый адрес (адрес места
                                жительства (места пребывания) и(или) места работы (учебы)):*</label>
                            <input type="text" class="form-control" id="user-address">
                            <label for="recipient-name" class="col-form-label">Адрес электронной почты:*</label>
                            <input type="text" class="form-control" id="user-email">

                        </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Текст обращения:*</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-primary">Отправить сообщение</button>
                        </div>

                    </form>
                </div>



            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Электронное обращение</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="recipiente">Кому:*</label>
                            </div>
                            <select class="custom-select" id="recipiente">
                                <option selected>Выбрать...</option>
                                <option value="1">Генеральному директору КПУП "Гомельское городское ЖКХ" Кулаго В.А.</option>
                                <option value="2">Руководителю КЖРЭУП "Новобелицкое"</option>
                                <option value="3">Руководителю КЖРЭУП "Центральное"</option>
                                <option value="4">Руководителю КЖРЭУП "Советское"</option>
                                <option value="5">Руководителю КЖРЭУП "Железнодорожное"</option>
                                <option value="6">Руководителю КЖРЭУП "Сельмашевское"</option>
                                <option value="7">Руководителю КУП "Расчетно-справочный центр г. Гомеля"</option>
                                <option value="8">Руководителю КАУП по СД "ГорСАП"</option>
                                <option value="9">Руководителю КУП "Спецкоммунтранс"</option>
                                <option value="10">Руководителю КУП "Гомельский городской дорожный строительно-ремонтный трест"</option>
                                <option value="11">Руководителю КПУП "Гомельводоканал"</option>
                                <option value="12">Руководителю КУП "Горэлектротранспорт"</option>
                                <option value="13">Руководителю КСУП "Городской центр оздоровления"</option>
                                <option value="14">Руководителю ДКПУП "Гомельгорсвет"</option>
                                <option value="15">Руководителю ДКСУП "Красная гвоздика"</option>
                                <option value="16">Руководителю ОАО "Гомельремстрой"</option>
                                <option value="17">Руководителю ОАО "Гомельский специализированный комбинат"</option>
                                <option value="18">Руководителю ОАО "Отель"</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Полное наименование
                                юридического лица:*</label>
                            <input type="text" class="form-control" id="legalentity-name">
                            <label for="recipient-name" class="col-form-label">Место нахождения
                                юридического лица:*</label>
                            <input type="text" class="form-control" id="user-address">
                            <label for="recipient-name" class="col-form-label">Фамилия, собственное имя, отчество(если
                                такое имеется) лица, уполномоченного подписывать обращения:*</label>
                            <input type="text" class="form-control" id="user-name">
                            <label for="recipient-name" class="col-form-label">Адрес электронной почты:*</label>
                            <input type="text" class="form-control" id="user-email">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Текст обращения:*</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary">Отправить сообщение</button>
                </div>
            </div>
        </div>
    </div>

@endsection