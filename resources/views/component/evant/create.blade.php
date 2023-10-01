@extends('component.includs.index')
@section('home')
<form action="{{route('evant.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
   
      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="name">

        <option value=""> Name Singer</option>
        @foreach ($categories as $category )
        <option value="{{$category->id}}">{{ $category->name}}  </option>
        @endforeach
      </select>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Description</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="description">
          </div>  

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Date</label>
            <input type="text" class="form-control" id="exampleInputPassword1"name="date" >
           
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="numder" class="form-control" id="exampleInputPassword1"name="price" >
           
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ticket</label>
            <input type="text" class="form-control" id="exampleInputPassword1"name="ticket" >
           
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>

    </div>
</form>
@endsection