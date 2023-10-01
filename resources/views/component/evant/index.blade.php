@extends('component.includs.index')
@section('home')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name Singer</th>
       <th scope="col">Descraption</th>
        <th scope="col">Date</th>
        <th scope="col">Price</th>
        <th scope="col">Ticket</th>

        <th scope="col">Options</th>
       

      </tr>
    </thead>
    <tbody>
        @foreach ($evant as  $event)
     

      <tr>
        <td> {{$event ->id}}</td>
        <td> {{$event->name}}</td>
        <td> {{$event->description}}</td>
        <td> {{$event->date}}</td>
        <td> {{$event->price}}</td>
        <td> {{$event->ticket}}</td>

         <td>       
        <a class="btn btn-info"  href="{{route('evant.edit',$event->id)}}" >Edit</a> 
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$event->id}}">Delete</button> 

        </td>  
       
      </tr>
     <!-- Modal -->
<div class="modal fade" id="exampleModal{{$event->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form action="{{route('evant.destroy',$event->id)}}" method="POST">
    @csrf
    @method('delete')
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        are you sure you want delete {{$event->name}}
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