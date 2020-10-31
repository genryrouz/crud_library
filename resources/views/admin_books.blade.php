@extends('adminpanel')
@section('title-page')Раздел книг@endsection
@section('shadow_active')
<li class="nav-item shadow-sm nav-menu">
    <a class="nav-link text-center" href="{{ route('admin-panel') }}">Главная</a>
</li>
<li class="nav-item shadow nav-menu mt-2">
    <a class="nav-link text-center" href="{{ route('admin-books') }}">Раздел "Книги"</a>
</li>
<li class="nav-item shadow-sm nav-menu mt-2">
    <a class="nav-link text-center" href="{{ route('admin-author-data') }}">Раздел "Авторы"</a>
</li>

@endsection

 @section('admin-content')
 <div class="row">
        <div class="col">
            <h2 class="display-6 text-center mb-5"><i class="em em-blue_book" aria-role="presentation" aria-label="BLUE BOOK"></i> Раздел "Книги"</h2>
        </div>
</div>

<div class="row mb-5">
    <div class="col text-center">
        <a href = "{{ route('admin-books-input') }}"><button type="button" class="btn btn-outline-success"><i class="em em-bookmark_tabs" aria-role="presentation" aria-label="BOOKMARK TABS"></i> добавить новую книгу</button></a>
    </div>
</div>

 <div class="row">
        <div class="col">
            <div class="card border-light mb-3" style="max-width: 22rem;">
             <div class="card-header">Описание книги</div>
                <div class="card-body">
                    <h5 class="card-title text-center"><i class="em em-book" aria-role="presentation" aria-label="OPEN BOOK"></i> Симон</h5>
                    <p class="card-text">В маленьком армянском городке умирает каменщик Симон. Он прожил долгую жизнь, пользовался уважением горожан, но при этом был известен бесчисленными амурными похождениями. Чтобы проводить его в последний путь, в доме Симона собираются все женщины, которых он когда?то любил. И у каждой из них — своя история.</p>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">автор: Фамилия Имя</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">количество страниц: 300</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">город издания: Москва</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">дата издания: 2020</small>
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

        <div class="col-6">
            <div class="card border-light mb-3" style="max-width: 22rem;">
             <div class="card-header">Описание книги</div>
                <div class="card-body">
                    <h5 class="card-title text-center"><i class="em em-book" aria-role="presentation" aria-label="OPEN BOOK"></i> Симон</h5>
                    <p class="card-text">В маленьком армянском городке умирает каменщик Симон. Он прожил долгую жизнь, пользовался уважением горожан, но при этом был известен бесчисленными амурными похождениями. Чтобы проводить его в последний путь, в доме Симона собираются все женщины, которых он когда?то любил. И у каждой из них — своя история.</p>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">автор: Фамилия Имя</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">количество страниц: 300</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">город издания: Москва</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">дата издания: 2020</small>
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
        <div class="col">
            <div class="card border-light mb-3" style="max-width: 22rem;">
             <div class="card-header">Описание книги</div>
                <div class="card-body">
                    <h5 class="card-title text-center"><i class="em em-book" aria-role="presentation" aria-label="OPEN BOOK"></i> Симон</h5>
                    <p class="card-text">В маленьком армянском городке умирает каменщик Симон. Он прожил долгую жизнь, пользовался уважением горожан, но при этом был известен бесчисленными амурными похождениями. Чтобы проводить его в последний путь, в доме Симона собираются все женщины, которых он когда?то любил. И у каждой из них — своя история.</p>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">автор: Фамилия Имя</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">количество страниц: 300</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">город издания: Москва</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">дата издания: 2020</small>
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

        <div class="col-6">
            <div class="card border-light mb-3" style="max-width: 22rem;">
             <div class="card-header">Описание книги</div>
                <div class="card-body">
                    <h5 class="card-title text-center"><i class="em em-book" aria-role="presentation" aria-label="OPEN BOOK"></i> Симон</h5>
                    <p class="card-text">В маленьком армянском городке умирает каменщик Симон. Он прожил долгую жизнь, пользовался уважением горожан, но при этом был известен бесчисленными амурными похождениями. Чтобы проводить его в последний путь, в доме Симона собираются все женщины, которых он когда?то любил. И у каждой из них — своя история.</p>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">автор: Фамилия Имя</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">количество страниц: 300</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">город издания: Москва</small>
                    </div>
                    <div class="card-footer text-center mt-2">
                        <small class="text-muted">дата издания: 2020</small>
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
 @endsection
