@extends('component.includs.index')
@section('home')


<div>{{$result}}</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Logo</th>
        <th scope="col">Descraption</th>
        <th scope="col">Date</th>
        <th scope="col">Options</th>


      </tr>
    </thead>
    <tbody>
        @foreach ($cate as  $Categories)


      <tr>
        <td> {{$Categories ->id}}</td>
        <td> {{$Categories->name}}</td>
        <td><img src="{{asset('category/'.$Categories->logo)}}" width="50px"></td>
        <td> {{$Categories->description}}</td>

        <td> {{$Categories->date}}</td>

         <td>
         <a class="btn btn-info"  href="{{route('cate.edit',$Categories->id)}}" >Edit</a>
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$Categories->id}}">Delete</button>
          {{--<a class="btn btn-primary"  href="{{route('cate.show',$Categories->id)}}" >Profile</a>        --}}
        </td>

      </tr>
     <!-- Modal -->
<div class="modal fade" id="exampleModal{{$Categories->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form action="{{route('cate.destroy',$Categories->id)}}" method="POST">
    @csrf
    @method('delete')
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        are you sure you want delete {{$Categories->name}}
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">delete</button>
      </div>
    </div>
  </div>
  </form>




</div>


      @endforeach

    </tbody>
  </table>
  {{-- <div class=" d-flex p-2">
  {{$companies->onEachSide(1)->links()}}
 </div> --}}


@endsection

