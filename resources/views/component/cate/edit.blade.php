@extends('component.includs.index')
@section('home')

<form action="{{route('cate.update',$cate->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
<div class="container">
   
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name" name="name"
    value="{{$cate->name}}">
  </div>

          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Upload</label>
            <img src="{{asset('category/'.$cate->logo)}}" width="50px">
            <input type="file" class="form-control" id="inputGroupFile01" name="image"
            value="{{$cate->logo}}">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="description"
            value="{{$cate->description}}">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Date</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="date"  value="{{$cate->date}}">
           
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>






@endsection