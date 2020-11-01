@extends('adminpanel')
@section('title-page')Раздел авторов@endsection
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
            <h2 class="display-6 text-center mb-5"><i class="em em-lower_left_ballpoint_pen" aria-role="presentation" aria-label=""></i> Раздел "Авторы"</h2>
        </div>
</div>



<div class="row mb-5">
    <div class="col text-center">
        <a href= "{{ route('admin-authors-input') }}"><button type="button" class="btn btn-outline-success"><i class="em em-man-frowning" aria-role="presentation" aria-label=""></i> добавить нового автора</button></a>
    </div>
</div>

@include('inc.messages')

<div class="row row-cols-1 mt-5">
@foreach($data as $el)

    <div class="col-6 mb-4">
            <div class="card border-light mb-3" style="max-width: 22rem;">
             <div class="card-header">Описание Автора</div>
                <div class="card-body">
                    <h5 class="card-title text-center"><i class="em em-man-raising-hand" aria-role="presentation" aria-label=""></i> {{$el->surname}} {{$el->author_name}} </h5>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">количество написанных книг: 0</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">Email: {{$el->email}}</small>
                    </div>

                    <div class="row mt-2">
                        <div class="col text-center">
                            <a href="{{ route('admin-books-showlist', $el->id) }}"><button type="button" class="btn btn-outline-success btn-sm">Список книг</button></a>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col text-center">
                            <a href="{{ route('author-update', $el->id) }}"><button type="button" class="btn btn-outline-primary btn-sm">Изменить</button></a>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col text-center">
                            <a href="{{ route('author-delete', $el->id) }}"><button type="button" class="btn btn-outline-danger btn-sm">Удалить</button></a>
                        </div>
                   </div>
                </div>
            </div>
        </div>
   
@endforeach
</div>
 @endsection
