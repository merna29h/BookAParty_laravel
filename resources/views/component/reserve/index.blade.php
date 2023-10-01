@extends('component.includs.index')
@section('home')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"> Party Name</th>
       <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Book Number</th>
        <th scope="col">Stutes</th>
        <th scope="col">Operation</th>

       

      </tr>
    </thead>
    <tbody>
        @foreach ($reserves as  $reserve)
     

      <tr>
        <td> {{$reserve ->id}}</td>
        <td> {{$reserve->name}}</td>
        <td> {{$reserve->email}}</td>
        <td> {{$reserve->phone}}</td>
        <td> {{$reserve->number_ticket}}</td>
        <td> {{$reserve->event_id}}</td>
         <td>{{$reserve->approve == 0 ? 'pending' : 'Approved'}}</td>
         <td>
          <form action="{{route('reserve.update',$reserve->id)}}" method="POST">
            @csrf
            @method('put')

            <button class="btn btn-success" name="approve" value="1">Approve</button>

            <button class="btn btn-danger" name="approve" value="0">Pendding</button>

        
          </form>
          
        </td>  
       
      </tr>
 
 
        


     
      @endforeach
    
    </tbody>
  </table>
  {{-- <div class=" d-flex p-2">
  {{$companies->onEachSide(1)->links()}}
 </div> --}}






@endsection