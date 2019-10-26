<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/app.css" rel="stylesheet">

    <!-- Подключаем иконки -->
    <script src="https://kit.fontawesome.com/59c86a6755.js"></script>


    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


</head>
<body>
<div id="main_style" class="container">
    @section('navbar')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <p class="nav-link" href="#"><strong>Власть:</strong><span class="sr-only">(current)</span></p>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Структура</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Телефоны горячей линии</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'http://ugkh.gomel.by/opros'}}">Опросы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'/question'}}">Задать вопрос</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Гостиницы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Бани</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Благоустройство</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Еще
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Безналичные жилищные субсидии</a>
                            <a class="dropdown-item" href="#">Правовая информация для ЖСПК, ТС</a>
                            <a class="dropdown-item" href="#">Для председателя товарищества</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <br>

        <div class="shadow-none p-3 mb-5 bg-light rounded">
            <h2>
                <strong>
                    Коммунальное производственное унитарное предприятие "Гомельское городское ЖКХ"
                </strong>
            </h2>
        </div>

    @show

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-2 col-md-12">
                <div class="row">
                    <div id="left_navbar" class="nav-link font-weight-bold list-group list-group-flush">


                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{'/'}}">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{'/dispatcher'}}">Диспетчерская</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{'/rates'}}">Тарифы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{'/sport'}}">Спорт</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Документы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{'/contacts'}}">Контакты</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{'/appeals'}}">Обращения</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{'/departments'}}">Отделы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{'/about'}}">О&nbspнас</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-7">

                <div class="card-body">
                    @yield('content')
                </div>

            </div>

            <div id="right_navbar" class="col-lg-3 col-md-5">


                <div class="list-group" role="tablist">
                    <a href="http://www.mjkx.gov.by/" class="list-group-item list-group-item-action">
                    <img src="{{ URL::to('/images/rightnav/1mingkh.png') }}" class="card-img-top" alt="...">
                    </a>
                    <a href="http://portal.gov.by/" class="list-group-item list-group-item-action">
                    <img src="{{ URL::to('/images/rightnav/2portal.jpg') }}" class="card-img-top" alt="...">
                    </a>
                    <a href="http://www.gorod.gomel.by/" class="list-group-item list-group-item-action">
                        <img src="{{ URL::to('/images/rightnav/3gomispolkom.jpg') }}" class="card-img-top" alt="...">
                    </a>
                    <a href="http://gomeloblzem.by/" class="list-group-item list-group-item-action">
                        <img src="{{ URL::to('/images/rightnav/4zemleustrsluzhba.jpg') }}" class="card-img-top" alt="...">
                    </a>
                    <a href="http://ugkh.gomel.by/" class="list-group-item list-group-item-action">
                        <img src="{{ URL::to('/images/rightnav/5gogkh.png') }}" class="card-img-top" alt="...">
                    </a>
                    <a href="http://www.pravo.by/" class="list-group-item list-group-item-action">
                        <img src="{{ URL::to('/images/rightnav/6pravoby.png') }}" class="card-img-top" alt="...">
                    </a>
                    <a href="http://www.president.gov.by/" class="list-group-item list-group-item-action">
                        <img src="{{ URL::to('/images/rightnav/7portpres.jpg') }}" class="card-img-top" alt="...">
                    </a>
                    <a href="http://www.kommunalnik.gomel.by/" class="list-group-item list-group-item-action">
                        <img src="{{ URL::to('/images/rightnav/8profsouz.jpg') }}" class="card-img-top" alt="...">
                    </a>
                    <a href="http://www.gkhmag.by/" class="list-group-item list-group-item-action">
                        <img src="{{ URL::to('/images/rightnav/9zkh.jpg') }}" class="card-img-top" alt="...">
                    </a>
                    <a href="http://www.government.gov.by/" class="list-group-item list-group-item-action">
                        <img src="{{ URL::to('/images/rightnav/10pravitelstvorb.jpg') }}" class="card-img-top" alt="...">
                    </a>
                    <a href="http://www.gomel-region.gov.by/" class="list-group-item list-group-item-action">
                        <img src="{{ URL::to('/images/rightnav/11gomloblis.jpg') }}" class="card-img-top" alt="...">
                    </a>
                    <a href="http://gkx.by/" class="list-group-item list-group-item-action">
                        <img src="{{ URL::to('/images/rightnav/12portalkg.jpg') }}" class="card-img-top" alt="...">
                    </a>
                    <a href="http://mchs.gov.by/" class="list-group-item list-group-item-action">
                        <img src="{{ URL::to('/images/rightnav/13mchs.jpg') }}" class="card-img-top" alt="...">
                    </a>
                    <a href="http://gorjkh.gomel.by/Target99.html" class="list-group-item list-group-item-action">
                        <img src="{{ URL::to('/images/rightnav/14musorenot.jpg') }}" class="card-img-top" alt="...">
                    </a>


                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- gorgkh1 -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-2170526760365877"
                             data-ad-slot="9930890799"
                             data-ad-format="auto"
                             data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>

                </div>
            </div>

        </div>
    </div>

    @section('footer')

        <div id="footer">

            <p><strong>Официальный сайт КПУП "Гомельское городское ЖКХ"</strong>
                <br>
                <span id="footer_text_small"
                      class="small">246050, Республика Беларусь, г.Гомель, ул.Советская, д.12</span>
            </p>

            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <p><strong>Новости</strong></p>
                        <ul id="footer_list" class="list-unstyled">
                            <li>Культура</li>
                            <li>Транспорт</li>
                            <li>Строительство</li>
                            <li>Городское хозяйство</li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <p><strong>Услуги</strong></p>
                        <ul id="footer_list" class="list-unstyled">
                            <li>Аренда</li>
                            <li>Qwerty i am</li>
                            <li>Qwerty i am</li>
                            <li>Qwerty i am</li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <p><strong>Афиша</strong></p>
                        <ul id="footer_list" class="list-unstyled">
                            <li>Qwerty i am</li>
                            <li>Qwerty i am</li>
                            <li>Qwerty i am</li>
                            <li>Qwerty i am</li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <p><strong>Афиша</strong></p>
                        <ul id="footer_list" class="list-unstyled">
                            <li>Все события</li>
                            <li>Спектакли</li>
                            <li>Выставки</li>
                            <li>Концерты</li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr id="line">
            <span id="footer_text_small"><strong>Соглашение о пользовании информационными системами и ресурсами города Гомеля</strong></span>

        </div>


@show

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/ajax.js"></script>

    <script type="text/javascript" src="/js/my.js"></script>


</div>
</body>

</html>