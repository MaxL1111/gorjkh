@extends('layouts.app')

@section('title', 'Контакты')

@section('content')

    <div class="shadow p-3 mb-5 bg-white rounded"><h5><strong>Контакты</strong></h5></div>


    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Коммунальное производственное унитарное предприятие
                <br>"Гомельское городское ЖКХ"</h5>
        </div>

        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A779b4d72d52cb79036fb3214aaabb7d77bed780c46a63bc7924e09d7452d5d65&amp;width=575&amp;height=269&amp;lang=ru_RU&amp;scroll=true"></script>
        <div class="card-body">
            <p class="card-text">
                <i class="fas fa-map-marker-alt"></i> 246050, Республика Беларусь, г.Гомель, ул.Советская, д.12
                <br>
                <i class="fas fa-phone-alt"></i>
                приемная тел.70-37-81, факс 70-48-51
                <br><i class="fas fa-clock"></i> Режим работы: Пн.-Пт., 8.30-17.30 обед 13.00-14.00.
            </p>
        </div>
    </div>



@endsection