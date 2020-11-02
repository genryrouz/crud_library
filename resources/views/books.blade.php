@extends('layouts.app')

@section('title-page')Книги@endsection

 @section('content')

    
 <div class="row">
        <div class="col">
            <h1 class = "text-center">Список книг</h1>
        </div>
    </div>

 @foreach($data as $el)
    <div class="row mt-5">
        <div class="col">
        <div class="card">
            <div class="card-header">
                Описание книги
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                       <div class="row">
                           <div class="col">
                            <img class="rounded mx-auto d-block" src="/img/page_book.png" alt="">
                           </div>
                       </div>

                       <div class="row">
                           <div class="col">
                                <h5 class="card-title text-center mt-2">{{ $el->name }}</h5>
                                <div class="card-footer text-center">
                                    <small class="text-muted">автор: {{$el->surname}} {{$el->author_name}}</small>
                                </div> 
                           </div>
                       </div>
                    </div>

                    <div class="col-7">
                        <div class="card" style="width: 35rem;">
                            <div class="card-header">  
                                Характеристика книги
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Количество страниц: {{$el->pages_count}}</li>
                                <li class="list-group-item">Количество глав: {{$el->charter_count}}</li>
                                <li class="list-group-item">Город: {{$el->city_publish_date}}</li>
                            </ul>
                        </div>
                    </div>

                </div>

    

               
                
                
            </div>
            </div>
        </div>
    </div>
@endforeach

@endsection    