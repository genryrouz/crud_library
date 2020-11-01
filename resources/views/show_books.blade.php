@extends('adminpanel')
@section('title-page')Список книг автора@endsection
@section('shadow_active')
<li class="nav-item shadow-sm nav-menu">
    <a class="nav-link text-center" href="{{ route('admin-panel') }}">Главная</a>
</li>
<li class="nav-item shadow-sm nav-menu mt-2">
    <a class="nav-link text-center" href="{{ route('admin-books') }}">Раздел "Книги"</a>
</li>
<li class="nav-item shadow nav-menu mt-2">
    <a class="nav-link text-center" href="{{ route('admin-author-data') }}">Раздел "Авторы"</a>
</li>

@endsection

 @section('admin-content')
 <div class="row">
        <div class="col">
            <h2 class="display-6 text-center mb-5"><i class="em em-closed_book" aria-role="presentation" aria-label="CLOSED BOOK"></i> Список книг</h2>
        </div>
</div>


@if (!$data->isEmpty())
<div class="row">
@foreach($data as $el)
    <div class="col">
        <div class="card border-light mb-3" style="max-width: 22rem;">
             <div class="card-header">Описание книги</div>
                <div class="card-body">
                    <h5 class="card-title text-center"><i class="em em-book" aria-role="presentation" aria-label="OPEN BOOK"></i> {{$el->name}}</h5>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">количество страниц: {{$el->pages_count}}</small>
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

@else
<div class="row">
    <div class="col text-center">
        <div class="alert alert-info" role="alert">
            У данного автора книг нет!
        </div>
    </div>
</div>

@endif


    <div class="col text-center">
    <a href="{{ route('admin-author-data') }}"><button type="button" class="btn btn-outline-secondary btn-sm">Вернуться назад</button></a>
    </div>
</>


 @endsection
