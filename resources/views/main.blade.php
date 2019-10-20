@extends('layouts.app')

@section('title', 'Главная')

@section('content')

    <div class="card mb-3" style="max-width: 100%;  ">
        <div class="row no-gutters">
            <div class="col-md-3">
                <img src="{{ URL::to('/images/director.jpg') }}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title">Кулаго Виктор Андреевич</h4>
                    <h4><small class="text-muted">Генеральный директор КПУП "Гомельское городское ЖКХ"</small></h4>
                </div>
            </div>
        </div>
    </div>

    <p class="text-justify"><strong>Уважаемые гомельчане и гости нашего города! Позвольте мне от имени КПУП "Гомельское
            городское ЖКХ" приветствовать Вас в качестве посетителей официального сайта Гомельского городского ЖКХ.
            <br/>
            Коммунальное производственное унитарное предприятие "Гомельское городское
            ЖКХ" - многоотраслевая
            организация,
            функциональное назначение которой состоит в создании надлежащих условий для жизнедеятельности
            населения,
            предоставляя весь комплекс жилищно-коммунальных услуг.
            <br/>
            Ознакомиться с деятельностью предприятий жилищно-коммунального хозяйства города, узнать
            историю нашего предприятия, получить информацию о состоянии культурной и спортивной жизни КПУП
            "Гомельское городское ЖКХ" вы сможете на нашем сайте.
            <br/>
            Надеюсь, что посещение сайта откроет для Вас много нового и интересного о
            жилищно-коммунальном хозяйстве
            города Гомеля.
            <br/>
            Спасибо.
        </strong></p>




    <h2>Внимание</h2>

    <hr id="line_main">

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Уважаемые жители!</h5>
                    <p class="card-text">С 4 по 30 октября 2019 года проводится перепись населения!</p>
                    <a href="{{'/download/perepis_nasel.pdf'}}" class="btn btn-primary">Скачать брошюру</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Как не стать жертвой кибермошенников!</h5>
                    <p class="card-text">Надежные пароли, безопасный WI-FI ...</p>
                    <a href="{{'/download/info_security.pdf'}}" class="btn btn-primary">Скачать брошюру</a>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Подоходный налог с физлиц при сдаче внаем помещений</h5>
                    <p class="card-text">Порядок налогообложения доходов, полученных физическими лицами ...</p>
                    <a href="{{'/download/podoh_nalog.pdf'}}" class="btn btn-primary">Скачать брошюру</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Информация о действующих службах</h5>
                    <p class="card-text">Службы, оказывающие медицинскую, социальную и психологическую помощь ...</p>
                    <a href="{{'/download/helper_service.pdf'}}" class="btn btn-primary">Скачать брошюру</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Уважаемые жильцы!</h4>
        <hr>
        <p>Ставим вас в известность, что участились случаи, когда представители различных
            коммерческих организаций предлагают услуги по техническому обслуживанию
            электропроводки или выполнению электромонтажных работ, выдавая себя за
            работников РУП «Гомельэнерго» или коммунальных служб.</p>
        <p>
            В связи с этим предупреждаем, что сотрудники энергосберегающей организации
            в лице филиала «Энергосбыт» РУП «Гомельэнерго» при посещении потребителей
            должны быть одеты в спецодежду и иметь при себе служебное удостоверение.
            Акцентируем внимание, что работники РУП «Гомельэнерго» и коммунальных
            служб не предлагают заключить договор на оказание услуг (работ) на
            месте их выполнения, т.е. на объекте потребителя.
        </p>


    </div>


    <h2>Полезные материалы</h2>
    <hr id="line_main">

    <div class="list-group">
        <a href="http://gkx.by/poleznye-sovety/1355-5-sposobov-bystro-oplatit-uslugi-zhkkh"
           class="list-group-item list-group-item-action list-group-item-primary">
            5 способов быстро оплатить услуги ЖКХ</a>
        <a href="https://www.kp.by/daily/26371/3252171/#comment"
           class="list-group-item list-group-item-action list-group-item-primary">
            Коммунальная грамотность населения</a>
        <a href="{{'/download/poriydok_zam_dom.pdf'}}"
           class="list-group-item list-group-item-action list-group-item-primary">
            Для сведения потребителей: о порядке замены домофонов</a>
        <a href="{{'/download/razd_zbor_musor.pdf'}}"
           class="list-group-item list-group-item-action list-group-item-primary">
            Организация раздельного сбора твердых коммунальных отходов в секторе индивидуальной застройки г. Гомеля</a>
        <a href="{{'/download/instr_ orazd_zbor_musor.pdf'}}"
           class="list-group-item list-group-item-action list-group-item-primary">
            Информация о раздельном сборе мусора в частном секторе</a>
        <u><a href="{{'/download/priam_tel_lines.pdf'}}"
              class="list-group-item list-group-item-action list-group-item-primary">
                Прямые телефонные линии</a>
        </u>
    </div>

    <br>

    <h2>Услуги</h2>
    <hr id="line_main">

    <div class="list-group">
        <li class="list-group-item list-group-item-success">
            АРЕНДА
        </li>
        <li class="list-group-item text-justify">Гомельский горисполком предлагает к продаже
            и сдаче в аренду ряд объектов недвижимого имущества, подробную информацию Вы можете получить,
            обратившись по телефонам:
            <br>21-25-60, 34-16-48.
        </li>
    </div>

@endsection