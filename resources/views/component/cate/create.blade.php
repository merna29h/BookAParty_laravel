@extends('component.includs.index')
@section('home')

    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Input Mask</h6>
            <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p>
            <form class="forms-sample" action="{{route('cate.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <div class="col">
                  <label class="form-label">Date:</label>
                  <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"/>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Time (12 hour):</label>
                  <input class="form-control" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="hh:mm tt" />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label">Date time:</label>
                  <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy HH:MM:ss" />
                </div>
                <div class="col-md-6">
                  <label class="form-label">Date with custom placeholder:</label>
                  <input class="form-control" data-inputmask="'alias': 'datetime'" data-inputmask-placeholder="*" data-inputmask-inputformat="dd/mm/yyyy" />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label">Phone:</label>
                  <input class="form-control mb-4 mb-md-0" data-inputmask-alias="(+99) 9999-9999"/>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Credit card:</label>
                  <input class="form-control" data-inputmask-alias="9999-9999-9999-9999"/>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label">Currency:</label>
                  <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'currency', 'prefix':'$'"/>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Serial key:</label>
                  <input class="form-control" data-inputmask-alias="****-****-****-****"/>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label">Email:</label>
                  <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'email'"/>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Ip address:</label>
                  <input class="form-control" data-inputmask="'alias': 'ip'"/>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>





        <button type="submit" class="btn btn-primary">Submit</button>








@endsection

