<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><i class="em em-books" aria-role="presentation" aria-label="BOOKS"></i> Библиотека</h5>
  <nav class="my-2 my-md-0 mr-md-3 header-nav">
    <a class="p-2 text-dark" href="{{ route('home') }}">Главная</a>
    <a class="p-2 text-dark" href="{{ route('authors') }}">Авторы</a>
    <a class="p-2 text-dark" href="{{ route('books') }}">Книги</a>
  </nav>
  <a class="btn btn-outline-primary" href="{{ route('admin-panel') }}">Панель администратора</a>
</div>