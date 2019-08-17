@extends('layouts.app')

@section('title', 'Главная')

@section('content')

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{ URL::to('/images/director.jpg') }}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title">Добро пожаловать!</h4>
                    <p class="card-text text-muted">Посетителей сайта приветствует генеральный директор КПУП "Гомельское
                        городское
                        ЖКХ" Кулаго Виктор Андреевич.</p>
                </div>
            </div>
        </div>
    </div>

    <p><strong>Уважаемые гомельчане и гости нашего города! Позвольте мне от имени КПУП "Гомельское городское
            ЖКХ" приветствовать
            Вас в качестве посетителей официального сайта Гомельского городского ЖКХ.
            <p>Коммунальное производственное унитарное предприятие "Гомельское городское ЖКХ" - многоотраслевая
            организация,
            функциональное назначение которой состоит в создании надлежащих условий для жизнедеятельности
            населения,
        предоставляя весь комплекс жилищно-коммунальных услуг.</p>
            <p> Ознакомиться с деятельностью предприятий жилищно-коммунального хозяйства города, узнать
            историю нашего предприятия, получить информацию о состоянии культурной и спортивной жизни КПУП
                "Гомельское городское ЖКХ" вы сможете на нашем сайте.</p>
            <p>Надеюсь, что посещение сайта откроет для Вас много нового и интересного о
            жилищно-коммунальном хозяйстве
                города Гомеля.</p>
    <p> Спасибо.</p></strong>
    </p>

    <div class="list-group">
        <p class="list-group-item list-group-item-warning">
            ВНИМАНИЕ!
        </p>
        <a href="#" class="list-group-item list-group-item-action">УВАЖАЕМЫЕ ЖИТЕЛИ! С 4 по 30 октября 2019 года
            проводится перепись населения!</a>
        <a href="#" class="list-group-item list-group-item-action">КАК НЕ СТАТЬ ЖЕРТВОЙ КИБЕРМОШЕННИКОВ И
            СОХРАНИТЬ СВОИ ДЕНЬГИ!</a>
        <a href="#" class="list-group-item list-group-item-action">Информация об уплате физическими лицами подоходного
            налога при сдаче внаем жилых и нежилых помещений</a>
        <a href="#" class="list-group-item list-group-item-action">Информация
            о действующих службах, оказывающих медицинскую, социальную и психологическую помощь в
            кризисных состояниях, в том числе экстренную психологическую помощь.</a>
        <u><a href="#" class="list-group-item list-group-item-action">Прямые телефонные линии</a></u>
    </div>
    <br>
    <div class="list-group">
        <li class="list-group-item list-group-item-success">
            АРЕНДА
        </li>
        <li class="list-group-item">Гомельский горисполком предлагает к продаже
            и сдаче в аренду ряд объектов недвижимого имущества, подробную информацию Вы можете получить,
            обратившись по телефонам:
            <br>21-25-60, 34-16-48.
        </li>
    </div>

@endsection