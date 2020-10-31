@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    <ul class = "text-center">
           <h6>{{ $error }} </h6> 
        
    </ul>
</div>
@endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    <ul class = "text-center">
           <h6> {{ session('success') }} </h6> 
        
    </ul>
</div>
@endif