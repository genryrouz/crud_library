@extends('adminpanel')
@section('title-page')Главная@endsection
@section('shadow_active')
<li class="nav-item shadow nav-menu">
    <a class="nav-link text-center" href="{{ route('admin-panel') }}">Главная</a>
</li>
<li class="nav-item shadow-sm nav-menu mt-2">
    <a class="nav-link text-center" href="{{ route('admin-books') }}">Раздел "Книги"</a>
</li>
<li class="nav-item shadow-sm nav-menu mt-2">
    <a class="nav-link text-center" href="{{ route('admin-author-data') }}">Раздел "Авторы"</a>
</li>

@endsection

 @section('admin-content')
    <div class="row">
        <div class="col">
            <h2 class="display-6 text-center mb-5"><i class="em em-hammer_and_pick" aria-role="presentation" aria-label=""></i> Панель администратора</h2>
        </div>
    </div>

  

    <div class="row">
        <div class="col">
            <div class="card border-light mb-3" style="max-width: 22rem;">
             <div class="card-header">Описание раздела</div>
                <div class="card-body">
                    <h5 class="card-title"><i class="em em-book" aria-role="presentation" aria-label="OPEN BOOK"></i> Раздел "Книги"</h5>
                    <p class="card-text">Данный раздел содержит описание имеющихся <br> книг, предоставляет возможность их дальнейшего редактирования и удаления</p>
                    <a href="{{ route('admin-books') }}"><button type="button" class="btn btn-outline-secondary btn-sm">Управлять</button></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-light mb-3" style="max-width: 22rem;">
             <div class="card-header">Описание раздела</div>
                <div class="card-body">
                    <h5 class="card-title"><i class="em em-female-technologist" aria-role="presentation" aria-label=""></i> Раздел "Авторы"</h5>
                    <p class="card-text">Данный раздел содержит описание имеющихся <br> авторов, предоставляет возможность их дальнейшего редактирования и удаления</p>
                    <a href="{{ route('admin-books') }}"><button type="button" class="btn btn-outline-secondary btn-sm">Управлять</button></a>
                </div>
            </div>
        </div>
    </div>
 @endsection
