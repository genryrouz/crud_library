@extends('adminpanel')
@section('title-page')Изменить автора@endsection
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
            <h2 class="display-6 text-center mb-5"><i class="em em-busts_in_silhouette" aria-role="presentation" aria-label="BUSTS IN SILHOUETTE"></i> Добавление нового автора</h2>
        </div>
</div>

@include('inc.messages')

<div class="row">
    <div class="col">
        <form action = "{{ route('author-update-submit', $data->id) }}" method = "post">
            @csrf
            <div class="form-group">
                <div class="input-group input-group-sm mb-3">
                <label for="surname">Фамилия</label>
                    <input type="text" name = "surname" id = "surname" value = "{{$data->surname}}" class="form-control ml-2" placeholder = "Введите фамилию" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                <label for="author_name">Имя</label>
                    <input type="text" name = "author_name" id = "author_name" value = "{{$data->author_name}}" class="form-control ml-2" placeholder = "Введите имя" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                <label for="pages_count">Email</label>
                    <input type="text" name = "email" id = "email" value = "{{$data->email}}" class="form-control ml-2" placeholder = "Введите email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                

                <div class="row">
                    <div class="col text-center">
                        <a href="{{route('author-update-submit', $data->id)}}"><button type="submit" class="btn btn-outline-success btn-sm">Изменить</button></a>
                    </div>

                    <div class="col text-center">
                        <a href="{{ route('admin-author-data') }}"><button type="button" class="btn btn-outline-secondary btn-sm">Вернуться назад</button></a>
                    </div>
                </div>

               
            
            </div>
        </form>
        
    </div>
</div>


 @endsection
