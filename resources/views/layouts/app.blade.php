<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
<body>
<div class="container">
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
                        <a class="nav-link" href="#">Спрашивайте-Ответим</a>
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

        <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img height="150px" src="{{ URL::to('/images/carousel/1.jpg') }}" class="d-block w-100"
                             alt="...">
                    </div>
                    <div class="carousel-item">
                        <img height="150px" src="{{ URL::to('/images/carousel/2.jpg') }}" class="d-block w-100"
                             alt="...">
                    </div>
                    <div class="carousel-item">
                        <img height="150px" src="{{ URL::to('/images/carousel/3.jpg') }}"
                             class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <br>
        <div class="container-fluid">
            <div class="shadow-none p-3 mb-5 bg-light rounded">
                <h2><strong>Коммунальное производственное унитарное предприятие "Гомельское городское ЖКХ"</strong></h2>
            </div>
        </div>


    @show

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-2">
                <div class="row">
                    <div class="list-group list-group-flush">
                        <a href="{{'/'}}" class="list-group-item">Главная</a>
                        <a href="#" class="list-group-item">Диспетчерская</a>
                        <a href="#" class="list-group-item">Тарифы</a>
                        <a href="#" class="list-group-item">Спорт</a>
                        <a href="#" class="list-group-item">Документы</a>
                        <a href="#" class="list-group-item">Контакты</a>
                        <a href="{{'/appeals'}}" class="list-group-item">Обращения</a>
                        <a href="#" class="list-group-item">Отделы</a>
                        <a href="#" class="list-group-item">О нас</a>
                    </div>
                </div>

            </div>

            <div class="col">

                <div class="card-body">
                    @yield('content')
                </div>

            </div>

        </div>
    </div>

    @section('footer')

    @show

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</div>
</body>
</html>