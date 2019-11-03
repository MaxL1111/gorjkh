@extends('layouts.app')

@section('title', 'Тарифы')

@section('content')

    <div class="shadow p-3 mb-5 bg-white rounded"><h5><strong>Тарифы</strong></h5></div>


    <div class="list-group">
        <a href="{{'/download/obr_zaya_el_yasch.pdf'}}"
           class="list-group-item list-group-item-action list-group-item-success">
            Образец заявления на предоставление извещения о размере платы за жилищно-коммунальные
            услуги в электронном виде на электронный ящик</a>
        <a href="{{'/download/postanov_CM-571_vRed_947.pdf'}}"
           class="list-group-item list-group-item-action list-group-item-success">
            Постановление Совета Министров Республики Беларусь 12 июня 2014 г. №571 "Об утверждении
            положения о порядке расчетов и внесения платы за жилищно-коммунальные услуги и платы пользование
            жилыми помещениями государственного жилищного фонда, внесении изменений и дополнений в
            постановления Совета Министров Республики Беларусь и признании утратившими силу постановлений
            Совета Министров Республики Беларусь и их структурных элементов" (в редакции постановления
            Совета Министров РБ от 09.02.2019 №81)</a>
        <a href="{{'/download/platarazscheta.pdf'}}"
           class="list-group-item list-group-item-action list-group-item-success">
            Начисление платы за жилищно-коммунальные услуги при разделении лицевых счетов
            (Разъяснение Министерства жилищно-коммунального хозяйства Республики Беларусь)
        </a>
        <a href="{{'/download/now_izv_2016.pdf'}}"
           class="list-group-item list-group-item-action list-group-item-success">
            Новое извещение 2016</a>
        <a href="{{'/download/postan_1466.pdf'}}"
           class="list-group-item list-group-item-action list-group-item-success">
            ПОСТАНОВЛЕНИЕ СОВЕТА МИНИСТРОВ РЕСПУБЛИКИ БЕЛАРУСЬ 16 декабря 2005 г. №1466</a>
        <a href="{{'/download/smartaPlataGKU.pdf'}}"
           class="list-group-item list-group-item-action list-group-item-success">
            С 1 марта 2019 г. плата за ЖКУ в Беларуси будет начисляться по новым правилам</a>
        <a href=""
           class="list-group-item list-group-item-action list-group-item-success">
            Решение Гомельского городского исполнительного комитета от 10.02.2015г. №88
            "Об установлении дифференцированных нормативов образования коммунальных отходов"</a>
        <a href=""
           class="list-group-item list-group-item-action list-group-item-success">
            Решение Гомельского областного исполнительного комитета от 20.06.2016г.
            №505 "Об установлении норм потребления воды"</a>

    </div>
    <hr>
    <h3>
        <p>
            <small class="text-muted">ТАРИФЫ НА ЖИЛИЩНО-КОММУНАЛЬНЫЕ УСЛУГИ</small>
        </p>

    </h3>
    <p>
        <small>Фиксированные тарифы на жилищно-коммунальные услуги, предоставляемые населению,
            субсидируемые государством по состоянию на 1 января 2019 г.
        </small>
    </p>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Наименование жилищно-коммунальной услуги</th>
            <th scope="col">Единица измерения</th>
            <th scope="col">Тариф (цена), рублей</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Техническое обслуживание жилого дома*</th>
            <td>1 квадратный метр общей площади жилого помещения в месяц</td>
            <td>0,1187</td>

        </tr>
        <tr>
            <th scope="row">Капитальный ремонт*</th>
            <td>1 квадратный метр общей площади жилого помещения в месяц</td>
            <td>0,1001</td>

        </tr>
        <tr>
            <th scope="row">Водоснабжение*</th>
            <td>1 кубический метр</td>
            <td>0,8338</td>
        </tr>
        <tr>
            <th scope="row">Водоотведение (канализация)*</th>
            <td>1 кубический метр</td>
            <td>0,6383</td>
        </tr>
        <tr>
            <th scope="row">Техническое обслуживание лифта*</th>
            <td>с одного проживающего в месяц</td>
            <td>1,40</td>
        </tr>
        <tr>
            <th scope="row">Обращение с твердыми коммунальными отходами**</th>
            <td>1 кубический метр</td>
            <td>7,3333</td>
        </tr>
        <thead class="thead-light">
        <tr>
            <th scope="row" colspan="3">Тепловая энергия для нужд отопления и горячего водоснабжения:***</th>

        </tr>
        </thead>
        <tr>
            <th scope="row">с 1 января по 31 мая включительно</th>
            <td>1 Гкал</td>
            <td>16,9259</td>
        </tr>
        <tr>
            <th scope="row">с 1 июня по 31 декабря включительно</th>
            <td>1 Гкал</td>
            <td>18,4831</td>
        </tr>
        <tr>
            <th scope="row">Электроэнергия в жилых домах (квартирах),
                не оборудованных электрическими плитами***
            </th>
            <td>1 кВт∙ч</td>
            <td>0,1746</td>
        </tr>
        <tr>
            <th scope="row">Электрическая энергия в жилых домах (квартирах),
                оборудованных электрическими плитами***
            </th>
            <td>1 кВт∙ч</td>
            <td>0,1484</td>
        </tr>
        <thead class="thead-light">
        <tr>
            <th scope="row" colspan="3">Газ природный:***</th>
        </tr>
        </thead>
        <tr>
            <th scope="row" colspan="3">1.1. используемый с установленными приборами
                индивидуального учета расхода газа:</th>
        </tr>
        <tr>
            <th scope="row" colspan="3">1.1.1. при наличии индивидуальных газовых
                отопительных приборов:</th>
        </tr>
        <tr>
            <th scope="row" colspan="3">в отопительный период:</th>
        </tr>
        <tr>
            <th scope="row">с 1 января по 31 мая включительно</th>
            <td>1 куб.метр</td>
            <td>0,1143</td>
        </tr>
        <tr>
            <th scope="row">с 1 июня по 31 декабря включительно</th>
            <td>1 куб.метр</td>
            <td>0,1190</td>
        </tr>
        <tr>
            <th scope="row">в летний период</th>
            <td>1 куб.метр</td>
            <td>0,4114</td>
        </tr>
        <tr>
            <th scope="row">1.1.2. при отсутствии индивидуальных газовых отопительных приборов</th>
            <td>1 куб.метр</td>
            <td>0,4114</td>
        </tr>
        <tr>
            <th scope="row" colspan="3">1.2. используемый без приборов индивидуального учета
                расхода газа:</th>
        </tr>


        </tbody>
    </table>

@endsection
