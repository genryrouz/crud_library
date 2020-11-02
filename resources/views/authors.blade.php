@extends('layouts.app')

@section('title-page')Авторы@endsection   
   
@section('content')



    <div class="row">
        <div class="col">
            <h1 class = "text-center">Список авторов</h1>
        </div>
    </div>

@foreach($data as $el)
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
                            <img class="rounded mx-auto d-block" src="/img/page_authors.png" alt="">
                           </div>
                       </div>

                       <div class="row">
                           <div class="col">
                                <h5 class="card-title text-center mt-2">{{$el->surname}} {{$el->author_name}}</h5>
                                <div class="card-footer text-center">
                                    <small class="text-muted">{{$el->email}}</small>
                                </div>
                           </div>
                       </div>
                    </div>

                    <div class="col-7">
                        <div class="card" style="width: 35rem;">
                       
                            <div class="card-header"> 
                                <span class="badge badge-secondary badge-pill">{{$el->books_count}}</span>   
                                Список книг
                            </div>

                    @if (!$el->books->isEmpty())
                            <ul class="list-group list-group-flush">
                            @foreach ($el->books as $book)
                                <li class="list-group-item"> "{{ $book->name }}"</li>
                            @endforeach  
                            </ul>  
                    
                    @else
                            <ul   ul class="list-group list-group-flush">
                                <li class="list-group-item"> Книги  отсутствуют</li>
                            </ul>  

                    @endif
                            
                        </div>
                    </div>

                </div>

    

               
                
                
            </div>
            </div>
        </div>
    </div>
@endforeach
  
@endsection    