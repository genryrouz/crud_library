@extends('adminpanel')
@section('title-page')Раздел авторов@endsection
@section('shadow_active')
<li class="nav-item shadow-sm nav-menu">
    <a class="nav-link text-center" href="/adminpanel/home">Главная</a>
</li>
<li class="nav-item shadow-sm nav-menu mt-2">
    <a class="nav-link text-center" href="/adminpanel/books">Раздел "Книги"</a>
</li>
<li class="nav-item shadow nav-menu mt-2">
    <a class="nav-link text-center" href="/adminpanel/authors">Раздел "Авторы"</a>
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
        <a href= "/adminpanel/authors/addauthor"><button type="button" class="btn btn-outline-success"><i class="em em-man-frowning" aria-role="presentation" aria-label=""></i> добавить нового автора</button></a>
    </div>
</div>

<div class="row">
        <div class="col">
            <div class="card border-light mb-3" style="max-width: 22rem;">
             <div class="card-header">Описание Автора</div>
                <div class="card-body">
                    <h5 class="card-title text-center"><i class="em em-man-raising-hand" aria-role="presentation" aria-label=""></i> Степанов Иван</h5>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">количество написанных книг: 0</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">Email: stepanov@library.ru</small>
                    </div>

                    <div class="row mt-2">
                        <div class="col text-center">
                            <a href="/adminpanel/authors/showbooklist"><button type="button" class="btn btn-outline-success btn-sm">Список книг</button></a>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col text-center">
                            <a href="/adminpanel/books"><button type="button" class="btn btn-outline-primary btn-sm">Изменить</button></a>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col text-center">
                            <a href="/adminpanel/books"><button type="button" class="btn btn-outline-danger btn-sm">Удалить</button></a>
                        </div>
                   </div>
                </div>
            </div>
        </div>

    <div class="col">
    <div class="card border-light mb-3" style="max-width: 22rem;">
             <div class="card-header">Описание Автора</div>
                <div class="card-body">
                    <h5 class="card-title text-center"><i class="em em-man-raising-hand" aria-role="presentation" aria-label=""></i> Степанов Иван</h5>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">количество написанных книг: 0</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">Email: stepanov@library.ru</small>
                    </div>

                    <div class="row mt-2">
                        <div class="col text-center">
                            <a href="/adminpanel/authors/showbooklist"><button type="button" class="btn btn-outline-success btn-sm">Список книг</button></a>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col text-center">
                            <a href="/adminpanel/books"><button type="button" class="btn btn-outline-primary btn-sm">Изменить</button></a>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col text-center">
                            <a href="/adminpanel/books"><button type="button" class="btn btn-outline-danger btn-sm">Удалить</button></a>
                        </div>
                   </div>
                </div>
            </div>
    </div>
</div>
 @endsection
