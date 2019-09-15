@extends('layouts.app')

@section('title', 'Панель админа')

@section('content')

    <p align="center">
        <strong><span class="text-danger">Рубрика "Спрашивайте - Ответим":</span></strong>
    </p>


    @if(count($questions) > 0)
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Дата</th>
                <th scope="col">&nbsp&nbsp&nbsp&nbspВопрос&nbsp&nbsp</th>
                <th scope="col">Ответ</th>
                <th scope="col">Редактирование</th>

            </tr>
            </thead>
            <tbody>
            @foreach($questions as $question)
                <tr>
                    <th scope="row">

                        {{ $question->created_at }}
                    </th>
                    <td>

                        {{ $question->question }}
                    </td>
                    <td>



                        {{ $question->answer}}

                    </td>
                    <td>
                        <p>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Редактировать</button>
                        </p>
                        <p>
                            <button id="" type="submit" class="btn btn-danger" role="button">Удалить</button>
                        </p>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif


@endsection

