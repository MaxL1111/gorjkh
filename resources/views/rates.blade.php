@extends('layouts.app')

@section('title', 'Тарифы')

@section('content')

    <div class="shadow p-3 mb-5 bg-white rounded"><h5><strong>Тарифы</strong></h5></div>


    <div class="list-group">
        <a href="{{'/download/obr_zaya_el_yasch.pdf'}}"
           class="list-group-item list-group-item-action list-group-item-success">
            Образец заявления на предоставление извещения о размере платы за жилищно-коммунальные
            услуги в электронном виде на электронный ящик</a>
        <a href="{{'/download/postanov_CM-571_vRed_947.pdf'}}" class="list-group-item list-group-item-action list-group-item-success">
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
        <p><small class="text-muted">ТАРИФЫ НА ЖИЛИЩНО-КОММУНАЛЬНЫЕ УСЛУГИ</small></p>

    </h3>
    <p><small>Фиксированные тарифы на жилищно-коммунальные услуги, предоставляемые населению,
            субсидируемые государством по состоянию на 1 января 2019 г.</small></p>

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
        </tbody>
    </table>

@endsection
