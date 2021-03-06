<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
        table {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            color: #333333;
            border: 1px solid #e3eaf0;
            width: 100%;
            border-collapse: collapse;
        }

        td {
            border: 1px solid #e3eaf0;
            padding: 7px 15px;
        }

        th {
            background: #e3eaf0;
            padding: 7px 15px;
        }

    </style>
</head>
<body>
<div class="alert alert-primary" role="alert">

    <table>
        <tr>
            <th colspan="2">Электронное обращение ( {{$userCitizen}} )</th>
        </tr>
        <tr>
            <td>Кому:</td>
            <td>{{$destination}}</td>
        </tr>
        <tr>
            <td>{{$organizationHeading}}</td>
            <td>{{$organizationName}}</td>
        </tr>
        <tr>
            <td>ФИО:</td>
            <td> {{$userName}}</td>
        </tr>
        <tr>
            <td>Почтовый адрес:</td>
            <td> {{$userAddress}}</td>
        </tr>
        <tr>
            <td>Адрес электронной почты:</td>
            <td> {{$userMail}}</td>
        </tr>
        <tr>
            <td>Текст обращения:</td>
            <td> {{$userText}}</td>
        </tr>

    </table>

</div>



</body>
</html>