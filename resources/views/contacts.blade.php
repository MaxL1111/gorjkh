@extends('layouts.app')

@section('title', 'Контакты')

@section('content')

    <div class="shadow p-3 mb-5 bg-white rounded"><h5><strong>Контакты</strong></h5></div>

    <address>
        <strong>
            Коммунальное производственное унитарное предприятие "Гомельское городское ЖКХ"
        </strong>
        <br>

        <img src="{{ URL::to('/images/fasad_gorjkh.jpg') }}" class="rounded float-right" alt="...">
        <br>
        <i class="fas fa-map-marker-alt"></i>
        246050, Республика Беларусь,
        <br>
        г.Гомель, ул.Советская, д.12
        <br>
        <i class="fas fa-phone-alt"></i>
        приемная 70-37-81, факс 70-48-51
    </address>

    <p>
        Режим работы: Пн.-Пт.: 8.30-17.30 обед 13.00-14.00
    </p>


@endsection