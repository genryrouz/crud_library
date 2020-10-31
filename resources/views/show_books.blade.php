@extends('adminpanel')
@section('title-page')Список книг автора@endsection
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
            <h2 class="display-6 text-center mb-5"><i class="em em-closed_book" aria-role="presentation" aria-label="CLOSED BOOK"></i> Список книг</h2>
        </div>
</div>

<div class="row">
    <div class="col">
        <div class="card border-light mb-3" style="max-width: 22rem;">
             <div class="card-header">Описание книги</div>
                <div class="card-body">
                    <h5 class="card-title text-center"><i class="em em-book" aria-role="presentation" aria-label="OPEN BOOK"></i> Симон</h5>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">количество страниц: 300</small>
                    </div>
                   <div class="row mt-2">
                        <div class="col ml-3">
                            <a href="/adminpanel/books"><button type="button" class="btn btn-outline-primary btn-sm">Изменить</button></a>
                        </div>

                        <div class="col ml-5">
                            <a href="/adminpanel/books"><button type="button" class="btn btn-outline-danger btn-sm">Удалить</button></a>
                        </div>
                   </div>
                </div>
            </div>
    </div>

    <div class="col">
        <div class="card border-light mb-3" style="max-width: 22rem;">
             <div class="card-header">Описание книги</div>
                <div class="card-body">
                    <h5 class="card-title text-center"><i class="em em-book" aria-role="presentation" aria-label="OPEN BOOK"></i> Симон</h5>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">количество страниц: 300</small>
                    </div>
                   <div class="row mt-2">
                        <div class="col ml-3">
                            <a href="/adminpanel/books"><button type="button" class="btn btn-outline-primary btn-sm">Изменить</button></a>
                        </div>

                        <div class="col ml-5">
                            <a href="/adminpanel/books"><button type="button" class="btn btn-outline-danger btn-sm">Удалить</button></a>
                        </div>
                   </div>
                </div>
            </div>
    </div>  
</div>  

<div class="row">
    <div class="col text-center">
    <a href="/adminpanel/authors"><button type="button" class="btn btn-outline-secondary btn-sm">Вернуться назад</button></a>
    </div>
</div>


 @endsection
