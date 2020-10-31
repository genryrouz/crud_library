@extends('adminpanel')
@section('title-page')Добавить автора@endsection
@section('shadow_active')
<li class="nav-item shadow-sm nav-menu">
    <a class="nav-link text-center" href="{{ route('admin-panel') }}">Главная</a>
</li>
<li class="nav-item shadow-sm nav-menu mt-2">
    <a class="nav-link text-center" href="{{ route('admin-books') }}">Раздел "Книги"</a>
</li>
<li class="nav-item shadow nav-menu mt-2">
    <a class="nav-link text-center" href="{{ route('admin-authors') }}">Раздел "Авторы"</a>
</li>

@endsection

 @section('admin-content')
 <div class="row">
        <div class="col">
            <h2 class="display-6 text-center mb-5"><i class="em em-busts_in_silhouette" aria-role="presentation" aria-label="BUSTS IN SILHOUETTE"></i> Добавление нового автора</h2>
        </div>
</div>

<div class="row">
    <div class="col">
        <form action = "/adminpanel/books/addbook/submit">
            <div class="form-group">
                <div class="input-group input-group-sm mb-3">
                <label for="surname">Фамилия</label>
                    <input type="text" id = "surname" class="form-control ml-2" placeholder = "Введите фамилию" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                <label for="author_name">Имя</label>
                    <input type="text" id = "author_name" class="form-control ml-2" placeholder = "Введите имя" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                <label for="pages_count">Email</label>
                    <input type="number" id = "pages_count" class="form-control ml-2" placeholder = "Введите email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                

                <div class="row">
                    <div class="col text-center">
                        <a href="/adminpanel/books"><button type="button" class="btn btn-outline-success btn-sm">Добавить</button></a>
                    </div>

                    <div class="col text-center">
                        <a href="/adminpanel/authors"><button type="button" class="btn btn-outline-secondary btn-sm">Вернуться назад</button></a>
                    </div>
                </div>

               
            
            </div>
        </form>
        
    </div>
</div>


 @endsection
