@extends('welcome')
@section('content')
<div class="container mt-4 shadow-none p-3 mb-5 bg-light rounded">
  <div class="row">
   <div class="col-md-12">
    <table class="table table-bordered table-hover">
      <thead class="bg-primary text-white">
        <tr>
          <th>ID</th>
          <th>Code</th>
          <th>Name</th>
          <th>Price</th>
          <th  class="float-end">Code Bar</th>
        </tr>
      </thead>
      <tfoot class="bg-primary text-white">
        <tr>
          <th>ID</th>
          <th>Code</th>
          <th>Name</th>
          <th>Price</th>
          <th  class="float-end">Code Bar</th>
        </tr>
      </tfoot>
      <tbody>
        @if(isset($products) && count($products)>0)
        @foreach ($products as $item)
           <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->code}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td class="float-end">{!! DNS1D::getBarcodeHTML("$item->codebar",'PHARMA') !!}
              {{'p'.'-'.$item->codebar}}
            </td>
            </tr> 
        @endforeach
        @endif
      </tbody>
    </table>
   </div>
  </div>
</div>
@endsection