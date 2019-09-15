@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Панель админа</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Админ, ты залогирован!
                    </div>
                </div>
                <br>
                <a href="{{'/adminpanel'}}" class="btn btn-dark" role="button">Редактирование рубрики "Спрашивайте - Ответим"</a>
            </div>

        </div>

    </div>
@endsection
