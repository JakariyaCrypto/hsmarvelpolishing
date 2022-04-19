@include('fontend/layout/partials/header')


  @yield('content')


@include('fontend/layout/partials/footer')

<!-- mobile button -->
<div class="mobile-button">
  <a href="tel:+601129807902" target="_blank">
    <i class="fas fa-phone"></i> +60 1129807902
  </a>
</div>

<!-- mobile button -->


<!-- whatapp button -->
<div class="what-app-button">
  <a href="https://wa.me/+601129807902?text=I am ready to chate with you" target="_blank">
    <img src="{{asset('fontend/assets/img/what-icon-2.png')}}">
  </a>
</div>

<!-- whatapp button -->
