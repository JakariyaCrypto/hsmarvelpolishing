@extends('fontend/layout/app')
@section('title','HS Polishing')

@section('content')
  <!-- services -->
  <div class="service-section">
    <div class="container mt text-center">
      <div class="row">
          <div class="col-sm-12">
            <div class="section-title pb">
              <h4>Our Works</h4>
            </div>
          </div>
        </div>
    </div>
    <div class="gallery-work">
      @foreach($works as $work)
      <a href="{{asset($work->image)}}">
        <img src="{{asset($work->image)}}">
      </a>
      @endforeach
    </div>
  </div>



@endsection

