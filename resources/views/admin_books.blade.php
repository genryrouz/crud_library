@extends('adminpanel')
@section('title-page')Раздел книг@endsection
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
            <h2 class="display-6 text-center mb-5"><i class="em em-blue_book" aria-role="presentation" aria-label="BLUE BOOK"></i> Раздел "Книги"</h2>
        </div>
</div>

@include('inc.messages')

<div class="row mb-5">
    <div class="col text-center">
        <a href = "{{ route('admin-books-input') }}"><button type="button" class="btn btn-outline-success"><i class="em em-bookmark_tabs" aria-role="presentation" aria-label="BOOKMARK TABS"></i> добавить новую книгу</button></a>
    </div>
</div>


<div class="row row-cols-1 row-cols-md-2 mt-5">
@foreach($data as $el)
    <div class="col mb-4">
        <div class="card border-light mb-3" style="max-width: 22rem;">
             <div class="card-header">Описание книги</div>
                <div class="card-body">
                    <h5 class="card-title text-center"><i class="em em-book" aria-role="presentation" aria-label="OPEN BOOK"></i> {{ $el->name }}</h5>
                    <p class="card-text">{{$el->dectiption_book}}</p>
                    <div class="card-footer text-center mt-2">
                    
                        <small class="text-muted">автор: {{$el->surname}} {{$el->author_name}} </small>
                     
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">количество страниц: {{$el->pages_count}}</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">город издания: {{$el->city_publish_date}}</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">дата издания: {{$el->publish_date}}</small>
                    </div>
                   <div class="row mt-2">
                        <div class="col ml-3">
                            <a href="{{route('books-update', $el->id)}}"><button type="button" class="btn btn-outline-primary btn-sm">Изменить</button></a>
                        </div>

                        <div class="col ml-5">
                            <a href="{{route('books-delete', $el->id)}}"><button type="button" class="btn btn-outline-danger btn-sm">Удалить</button></a>
                        </div>
                   </div>
                </div>
            </div>
    </div>
@endforeach
</div>


 @endsection
