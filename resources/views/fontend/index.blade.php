@extends('fontend/layout/app')
@section('title','HS Polishing')

@section('content')

<!-- slider section -->
<div class="slider-section">
  <div class="slider-content">
     <div class="swiper sliderHome">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slider-img">
            <img src="{{asset('fontend/assets/img/slide-2-min.jpg')}}">
            <div class="slider-text">
              <h6>
              HS Polishing Marble 
              </h6>
              <h2>We Are Solution For Your Renovation</h2>
              <div class="default-btn">
                <a href="https://wa.me/+601129807902?text=I am ready to chate with you" target="_blank" class="default-button">Order now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-img">
            <img src="{{asset('fontend/assets/img/slide-1-min.jpg')}}">
            <div class="slider-text">
              <h6>
                HS Polishing Marble 
              </h6>
              <h2>We Are Solution For Your Renovation</h2>
              <div class="default-btn">
                <a href="https://wa.me/+601129807902?text=I am ready to chate with you" target="_blank" class="default-button">Order now</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- slider section -->


<!-- services section -->
<section class="service-section mt mb">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4 ">
        <div class="service-item">
          <div class="service-item-heading">
            <h5>Renovation</h5>
          </div>
          <div class="service-text">
            <p>
              HS Polishing Marble is one of the best Renovation services providers in Malaysia & Dubai with a 100% guarantee. We provide  Polish marble floor, Grind – to – shine marble floor, Polish solid timber floor,  parquet floor, Polish tile floor etc.
            </p>
          </div>
          <div class="see-more">
            <a href=""  class="service-btn"> see more <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 ">
        <div class="service-item">
          <div class="service-item-heading">
            <h5>Cleaning</h5>
          </div>
          <div class="service-text">
            <p>
              HS Polishing Marble is one of the best cleaning services providers in Malaysia & Dubai with a 100% guarantee. We clean all the residential and commercial places and remove all dust to make them look as good as new.
            </p>
          </div>
          <div class="see-more">
            <a href=""  class="service-btn"> see more <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 ">
        <div class="service-item">
          <div class="service-item-heading">
            <h5>Painting</h5>
          </div>
          <div class="service-text">
            <p>
              We have a team of professionals and specialist painters that provides expert support in choosing the color, type of paint, and the amount of paint application that is needed depending on each case.
            </p>
          </div>
          <div class="see-more">
            <a href="" class="service-btn"> see more <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- services section -->

<!-- banner section -->
<section class="banner-seciton mt mb">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mr-0 pr-0 custom-bnr-stylr">
        <div class="banner-image">
          <img src="{{asset('fontend/assets/img/mid-1-min.jpg')}}">
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0 custom-bnr-stylr">
        <div class="banner-left-content">
          <div class="banner-left-content-heading">
            <h5>Marbel Polishing Services</h5>
          </div>
          <div class="banner-left-text">
            <p>
              We have extensive experience working in the local Renovation industry in Malaysia & Dubai, making us an ideal company for your projects. We have well-trained and experienced who are passionate about their work. Moreover, we’ve invested in state-of-the-art equipment and tools required to work on renovation projects.
            </p>
          </div>
          <div class="banner-left">
            <a href="" class="service-btn"> see more <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- banner section -->

<!-- latest work -->
<section class="latest-work mt mb">
  <div class="container">
    <div class="row text-center">
      <div class="section-title pt pb">
        <h4>Recent Works</h4>
      </div>
    </div>
    <div class="recent-content">
      <div class="row">
        @foreach($services as $service)
        <div class="col-sm-6 col-md-4 ">
          <div class="recent-sub-img">
            <img class="popup" src="{{asset($service->image)}}">
          </div>
        </div>
        @endforeach()
        </div>
      </div>
    </div>
  </div>
</section>


<!-- counter section -->
<section class="counter-section mt mb">
  <div class="container custom-width">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="counter-item">
          <h2><span class="counter">200</span>+</h2>
          <h6>clients</h6>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="counter-item">
          <h2><span class="counter">100</span>+</h2>
          <h6>Company</h6>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="counter-item">
          <h2><span class="counter">780</span>+</h2>
          <h6>Projects</h6>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- counter section -->

@endsection

