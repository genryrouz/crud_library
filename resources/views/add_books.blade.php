@extends('adminpanel')
@section('title-page')Добавить книгу@endsection
@section('shadow_active')
<li class="nav-item shadow-sm nav-menu">
    <a class="nav-link text-center" href="{{ route('admin-panel') }}">Главная</a>
</li>
<li class="nav-item shadow nav-menu mt-2">
    <a class="nav-link text-center" href="{{ route('admin-books') }}">Раздел "Книги"</a>
</li>
<li class="nav-item shadow-sm nav-menu mt-2">
    <a class="nav-link text-center" href="{{ route('admin-author-data') }}">Раздел "Авторы"</a>
</li>

@endsection

 @section('admin-content')
 <div class="row">
        <div class="col">
            <h2 class="display-6 text-center mb-5"><i class="em em-bookmark" aria-role="presentation" aria-label="BOOKMARK"></i> Добавление новой книги</h2>
        </div>
</div>

@include('inc.messages')



<div class="row">
    <div class="col">
        <form action = "{{ route('admin-book-submit') }}" method = "post">
            @csrf
            <div class="form-group">
                <div class="input-group input-group-sm mb-3">
                <label for="name">Наименование книги</label>
                    <input type="text" name = "name" id="name" class="form-control ml-2" placeholder = "Введите название книги" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label for="name">Автор</label>
                    <select name = "authors_id" id = "author" class="form-control input-sm ml-1">
                    @foreach($data as $el)
                        <option name ="authors_id" value = "{{$el->id}}"> {{$el->surname }} {{$el->author_name}} </option>
                    
                    @endforeach
                    </select>
                </div>

                <div class="input-group input-group-sm mb-3">
                <label for="pages_count">Количество страниц</label>
                    <input type="number" name = "pages_count" id="pages_count" class="form-control ml-2" placeholder = "Введите количество страниц книги" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                <label for="charter_count">Количество глав</label>
                    <input type="number" name = "charter_count" id = "charter_count" class="form-control ml-2" placeholder = "Введите количество страниц книги" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                <label for="publish_date">Год издания</label>
                    <input type="text" name = "publish_date" id = "publish_date" class="form-control ml-2" placeholder = "Введите год издания книги" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                <label for="city_publish_date">Город издания</label>
                    <input type="text" name = "city_publish_date" id = "city_publish_date" class="form-control ml-2" placeholder = "Введите город издания книги" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                <label for="city_publish_date">Описание книги</label>
                    <textarea type="text" name = "dectiption_book" id = "dectiption_book" class="form-control ml-2" placeholder = "Введите описание книги" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></textarea>
                </div>

                <div class="row">
                    <div class="col text-center">
                        <a href="/adminpanel/books"><button type="submit" class="btn btn-outline-success btn-sm">Добавить</button></a>
                    </div>

                    <div class="col text-center">
                        <a href="{{ route('admin-books') }}"><button type="button" class="btn btn-outline-secondary btn-sm">Вернуться назад</button></a>
                    </div>
                </div>

               
            
            </div>
        </form>
        
    </div>
</div>


 @endsection
