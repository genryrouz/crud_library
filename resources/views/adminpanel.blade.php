@extends('layouts.app')
@section('title-page')Административная панель@endsection
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

 @section('content')

<div class="row">
    <div class="col-8">
        @yield('admin-content')
    </div>
    

    <div class="col-4">
        <nav class="navbar navbar-light  justify-content-center">
            <ul class="navbar-nav">
                @yield('shadow_active')
            </ul>
        </nav>

    </div>
</div>

@endsection    