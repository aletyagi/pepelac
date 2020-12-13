<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Работа с изображениями в Laravel</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style type="text/css"> 
        table, th, td{ 
            border: 1px solid; 
            padding: 5px; 
        } 
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}          
            <div class="form-group">
                <label for="title">Введите название</label>
                <input class="form-control" id="title" placeholder="Название" name="title">
            </div>          
            <div class="form-group">
                <label for="img">Выберите файл</label>
                <input id="img" type="file" multiple name="file[]">
            </div>
            <button type="submit" class="btn btn-default">Добавить</button>
        </form>
    </div>
</body>
