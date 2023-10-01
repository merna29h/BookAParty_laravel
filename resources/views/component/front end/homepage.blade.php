@extends('component.front end.includes.main')
@section('home')

<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12">
                    <div class="slider_text text-center">
                        <div class="shape_1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <img src="{{asset('frontend/assets/img/shape/shape_1.svg')}}" alt="">
                        </div>
                        <div class="shape_2 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                            <img src="{{asset('frontend/assets/img/shape/shape_2.svg')}}" alt="">
                        </div>
                        <span class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">12 Feb, 2020</span>
                        <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Concert  2020</h3>
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Green Avenue, New York</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="performar_area black_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title mb-80">
                    <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Performer</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="row">
                    @foreach ( $categories as $cate)
                    <div class="col-lg-6 col-md-6">
                        <div  class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div data-tilt class="thumb">
                                
                                    
                               
                                <img src="{{asset('category/'.$cate->logo)}}" alt="" width="350" height="435">
                            </div>
                            <div class="performer_heading">
                                <h4>{{$cate->name}}</h4>
                                <span>{{$cate->description}}</span>
                                
                            </div>
                            {{-- <button type="submit" class="btn btn-info p-2">Buy Ticket</button> --}}
                        </div>
                       
                    </div>
                  @endforeach
                </div>
               
            </div>
        </div>
    </div>
</div>


@endsection