@extends('layouts.app')

@section('title-page')Авторы@endsection   
   
@section('content')

    <div class="row">
        <div class="col">
            <h1 class = "text-center">Список авторов</h1>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
        <div class="card">
            <div class="card-header">
                Описание автора
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                       <div class="row">
                           <div class="col">
                            <img class="rounded mx-auto d-block" src="https://icon-icons.com/icons2/582/PNG/128/businness-man_icon-icons.com_55047.png" alt="">
                           </div>
                       </div>

                       <div class="row">
                           <div class="col">
                                <h5 class="card-title text-center mt-2">Имя Фамилия</h5>
                                <div class="card-footer text-center">
                                    <small class="text-muted">author@library.ru</small>
                                </div>
                           </div>
                       </div>
                    </div>

                    <div class="col-7">
                        <div class="card" style="width: 35rem;">
                            <div class="card-header">
                                <span class="badge badge-secondary badge-pill">3</span>   
                                Список книг
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">"Красноярское утро"</li>
                                <li class="list-group-item">"Добро и зло"</li>
                                <li class="list-group-item">"Рога и копыта"</li>
                            </ul>
                        </div>
                    </div>

                </div>

    

               
                
                
            </div>
            </div>
        </div>
    </div>

  
@endsection    