@extends('layouts.app')

@section('title', 'Обращения')

@section('content')


    <div class="shadow p-3 mb-5 bg-white rounded"><h5><strong>Электронное обращение</strong></h5></div>

    <p><strong>Согласно п.1 ст. 25 <span class="text-danger">Закона Республики Беларусь «Об обращениях граждан и
            юридических лиц»</span> в данной рубрике «Обращения» размещена специальная форма, заполнив которую
            Вы можете направить электронное обращение,
            обращаем Ваше внимание на то, что такой способ направления электронного обращения является единственным.
            Электронный ящик КПУП "Гомельское городское ЖКХ" служит только для направления ответов на электронные
            обращения заявителей и присланные на него вопросы рассматриваться не будут <i class="fas fa-exclamation"></i></strong></p>
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
            data-target="#exampleModal1" data-whatever="@mdo">Написать электронное обращение <i class="far fa-hand-point-up"></i>
        <br>(для граждан)
    </button>
    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="modal"
            data-target="#exampleModal2" data-whatever="@mdo">
        Написать электронное обращение <i class="far fa-hand-point-up"></i>
        <br>(для юридических лиц и индивидуальных предпринимателей)
    </button>

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Электронное обращение (для граждан)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body was-validated" >
                    <form id="contactform" enctype="multipart/form-data" method="POST" >
                        {{ csrf_field() }}

                        <input name="user_citizen" type="hidden" value="физлицо">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="recipiente">Кому:*</label>
                            </div>
                            <select name="destination" class="custom-select" id="recipiente" required>
                                <option value="" selected>Выбрать...</option>
                                <option value="Генеральному директору Кулаго В.А.">Генеральному директору КПУП "Гомельское городское ЖКХ" Кулаго В.А.</option>
                                <option value="Руководителю КЖРЭУП Новобелицкое">Руководителю КЖРЭУП "Новобелицкое"</option>
                                <option value="Руководителю КЖРЭУП Центральное">Руководителю КЖРЭУП "Центральное"</option>
                                <option value="Руководителю КЖРЭУП Советское">Руководителю КЖРЭУП "Советское"</option>
                                <option value="Руководителю КЖРЭУП Железнодорожное">Руководителю КЖРЭУП "Железнодорожное"</option>
                                <option value="Руководителю КЖРЭУП Сельмашевское">Руководителю КЖРЭУП "Сельмашевское"</option>
                                <option value="Руководителю КУП Расчетно-справочный центр г. Гомеля">Руководителю КУП "Расчетно-справочный центр г. Гомеля"</option>
                                <option value="Руководителю КАУП по СД ГорСАП">Руководителю КАУП по СД "ГорСАП"</option>
                                <option value="Руководителю КУП Спецкоммунтранс">Руководителю КУП "Спецкоммунтранс"</option>
                                <option value="Руководителю КУП Гомельский городской дорожный строительно-ремонтный трест">Руководителю КУП "Гомельский городской дорожный строительно-ремонтный трест"</option>
                                <option value="Руководителю КПУП Гомельводоканал">Руководителю КПУП "Гомельводоканал"</option>
                                <option value="Руководителю КУП Горэлектротранспорт">Руководителю КУП "Горэлектротранспорт"</option>
                                <option value="Руководителю КСУП Городской центр оздоровления">Руководителю КСУП "Городской центр оздоровления"</option>
                                <option value="Руководителю ДКПУП Гомельгорсвет">Руководителю ДКПУП "Гомельгорсвет"</option>
                                <option value="Руководителю ДКСУП Красная гвоздика">Руководителю ДКСУП "Красная гвоздика"</option>
                                <option value="Руководителю ОАО Гомельремстрой">Руководителю ОАО "Гомельремстрой"</option>
                                <option value="Руководителю ОАО Гомельский специализированный комбинат">Руководителю ОАО "Гомельский специализированный комбинат"</option>
                                <option value="Руководителю ОАО Отель">Руководителю ОАО "Отель"</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="validationTooltip01" class="col-form-label">ФИО:*</label>
                            <input type="text" name="user_name" class="form-control" id="validationTooltip01" placeholder="Иванов Иван Петрович" required>

                            <label for="user-address" class="col-form-label">Почтовый адрес (адрес места
                                жительства (места пребывания) и(или) места работы (учебы)):*</label>
                            <input name="user_address" type="text" class="form-control" id="user-address" required>

                            <label for="user-email" class="col-form-label">Адрес электронной почты:*</label>
                            <input name="user_mail" type="email" class="form-control" id="user-email"
                                   placeholder="yourmail@example.by" required>
                        </div>

                            <div class="form-group">
                                <label for="validationTextarea" class="col-form-label">Текст обращения:*</label>
                                <textarea name="user_text" class="form-control is-invalid" id="validationTextarea" required></textarea>
                            </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Прикрепить jpeg-изображение (не более 2MB):</label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                            <input accept="image/jpeg" class="form-control-file" id="exampleFormControlFile1"
                                   name="user_image" type="file" value="">
                        </div>

                        <div id="sendmessage">
                            <span>Ваше сообщение отправлено!</span>
                        </div>
                        <div id="errsend">
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


    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Электронное обращение (для ИП и
                        юридических лиц)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body was-validated" >
                    <form id="contactform2" enctype="multipart/form-data" method="POST" >
                       {{ csrf_field() }}


                        <input name="user_citizen" type="hidden" value="юрлицо">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="recipiente">Кому:*</label>
                            </div>
                            <select name="destination" class="custom-select" id="recipiente" required>
                                <option value="" selected>Выбрать...</option>
                                <option value="Генеральному директору Кулаго В.А.">Генеральному директору КПУП "Гомельское городское ЖКХ" Кулаго В.А.</option>
                                <option value="Руководителю КЖРЭУП Новобелицкое">Руководителю КЖРЭУП "Новобелицкое"</option>
                                <option value="Руководителю КЖРЭУП Центральное">Руководителю КЖРЭУП "Центральное"</option>
                                <option value="Руководителю КЖРЭУП Советское">Руководителю КЖРЭУП "Советское"</option>
                                <option value="Руководителю КЖРЭУП Железнодорожное">Руководителю КЖРЭУП "Железнодорожное"</option>
                                <option value="Руководителю КЖРЭУП Сельмашевское">Руководителю КЖРЭУП "Сельмашевское"</option>
                                <option value="Руководителю КУП Расчетно-справочный центр г. Гомеля">Руководителю КУП "Расчетно-справочный центр г. Гомеля"</option>
                                <option value="Руководителю КАУП по СД ГорСАП">Руководителю КАУП по СД "ГорСАП"</option>
                                <option value="Руководителю КУП Спецкоммунтранс">Руководителю КУП "Спецкоммунтранс"</option>
                                <option value="Руководителю КУП Гомельский городской дорожный строительно-ремонтный трест">Руководителю КУП "Гомельский городской дорожный строительно-ремонтный трест"</option>
                                <option value="Руководителю КПУП Гомельводоканал">Руководителю КПУП "Гомельводоканал"</option>
                                <option value="Руководителю КУП Горэлектротранспорт">Руководителю КУП "Горэлектротранспорт"</option>
                                <option value="Руководителю КСУП Городской центр оздоровления">Руководителю КСУП "Городской центр оздоровления"</option>
                                <option value="Руководителю ДКПУП Гомельгорсвет">Руководителю ДКПУП "Гомельгорсвет"</option>
                                <option value="Руководителю ДКСУП Красная гвоздика">Руководителю ДКСУП "Красная гвоздика"</option>
                                <option value="Руководителю ОАО Гомельремстрой">Руководителю ОАО "Гомельремстрой"</option>
                                <option value="Руководителю ОАО Гомельский специализированный комбинат">Руководителю ОАО "Гомельский специализированный комбинат"</option>
                                <option value="Руководителю ОАО Отель">Руководителю ОАО "Отель"</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="validationTooltip01" class="col-form-label">Полное наименование юридического лица:*</label>
                            <input type="text" name="organization_name" class="form-control" id="validationTooltip01" required>

                            <label for="user_address" class="col-form-label">Местонахождение юридического лица:*
                            </label>
                            <input name="user_address" type="text" class="form-control" id="user-address" required>

                            <label for="recipient-name" class="col-form-label">Фамилия, собственное имя, отчество(если такое имеется) лица,
                                уполномоченного подписывать обращения:*</label>
                            <input type="text" name="user_name" class="form-control" id="validationTooltip01" placeholder="Иванов Иван Петрович" required>


                            <label for="recipient-name" class="col-form-label">Адрес электронной почты:*</label>
                            <input name="user_mail" type="email" class="form-control" id="user-email"
                                   placeholder="yourmail@example.by" required>
                        </div>

                        <div class="form-group">
                            <label for="validationTextarea" class="col-form-label">Текст обращения:*</label>
                            <textarea name="user_text" class="form-control is-invalid" id="validationTextarea" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Прикрепить jpeg-изображение (не более 2MB):</label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                            <input accept="image/jpeg" class="form-control-file" id="exampleFormControlFile1"
                                   name="user_image" type="file" value="">
                        </div>

                        <div id="sendmessage2">
                            <span>Ваше сообщение отправлено!</span>
                        </div>
                        <div id="errsend2">
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



@endsection