@extends('welcome')
@section('content')
<div class="container col-md-6 offset-md-3 shadow-none p-3 mb-5 bg-light rounded py-5">
  <div class="row">
   <div class="col-md-12">
    
    <form action="{{url('add')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="form-group">
          <input type="text" class="form-control mt-2" name="code">
        </div>
        <div class="form-group">
          <input type="text" class="form-control mt-2" name="name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control mt-2" name="price">
        </div>
        <div class="form-group">
         <button class="btn btn-primary btn-sm mt-2">save</button>
        </div>
      </div>
    </form>
   </div>
  </div>
</div>
@endsection