@extends('fontend/layout/app')
@section('title','HS Polishing')

@section('content')
  <!-- services -->
  <div class="service-section">
    <div class="container mt text-center">
      <div class="row">
          <div class="col-sm-12">
            <div class="section-title pb">
              <h4>Our Services</h4>
            </div>
          </div>
        </div>
    </div>
    <div class="gallery-service">
      @foreach($services as $service)
      <a href="{{asset($service->image)}}">
        <img src="{{asset($service->image)}}">
        <div class="service-content-overlap">
          <span>{{$service->title}}</span>
        </div>
      </a>
      @endforeach
    </div>
  </div>


@endsection

