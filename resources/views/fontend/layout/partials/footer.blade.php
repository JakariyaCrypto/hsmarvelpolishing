<!-- footer section -->
<section class="footer-section mt pt" style="position: relative;">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="footer-item">
          <h3>Miazura Enterprise HS Polishing </h3>
          <h5>( A Polishing Branch of Miazura )</h5>
          <p>
            We specialize in on site marble repair, marble polishing, stone and grout restoration, cleaning, and sealing, while paying attention to details normally missed by the competition. We provide the best service in Malaysia & Dubai.
          </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="footer-item">
        <h3>Contact Us</h3>
          <ul>
            <li><i class="fas fa-phone"></i> +60 1129807902</li>
            <li><i class="fas fa-envelope"></i> hspolishingmarbleparquet@gmail.com</li>
            <li><i class="fas fa-map"></i>48,Jalan,4k ampang jaya, Selangor-68000, Malaysia.</li>
          </ul>
      </div>
    </div>

      <div class="col-sm-4">
        <div class="footer-item">
        <h3>Our services </h3>
          <ul>
            <li><i class="fas fa-dot-circle"></i> Renovation</li>
            <li><i class="fas fa-dot-circle"></i>Plumbing</li>
            <li><i class="fas fa-dot-circle"></i> Electicity</li>
            <li><i class="fas fa-dot-circle"></i> Roofling</li>
            <li><i class="fas fa-dot-circle"></i> Painting</li>

          </ul>
      </div>
    </div>
    </div>
  </div>
  <div class="footer-copy">
    <span>Design and Developed By <a href="https://www.facebook.com/eskill24/">Eskil It </a>| Technical Support By <a href="https://web.facebook.com/jakariya.ahmeds/"> Jakariya Ahmed</a></span>
  </div>
</section>
<style type="text/css">
  .footer-item h5 {
  text-align: ;
  font-size: ;
  font-weight: 700;
  color: #65bc54;
}
</style>
<!-- footer section --> 





<div class="modal fade" id="PhotoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <span class="popup-img-close" data-dismiss="modal" aria-label="Close"><i class="fas fa-close"></i></span>
      <img class="popup-show" src="{{asset('fontend/assets/img/recent-2.jpg')}}" id="show_popup_img">
    </div>
  </div>
</div>



  <script src="{{asset('fontend/assets/js/jquery-3.6.0.js')}}"></script>
  <script src="{{asset('fontend/assets/js/jquery.waypoints.js')}}"></script>
  <script src="{{asset('fontend/assets/js/popper.min.js')}}" ></script>
  <script src="{{asset('fontend/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('fontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('fontend/assets/js/counterup.min.js')}}"></script>
  <script src="{{asset('fontend/assets/js/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('fontend/assets/js/fontend.js')}}"></script>
  <script src="{{asset('fontend/assets/js/slider.js')}}"></script>


@yield('script')

<!-- popup modal photo view -->
<script>


// home popup
  $('.popup').click(function(){
    var src = $(this).attr('src');
    $('#show_popup_img').attr('src',src);
    $('#PhotoModal').modal('show');
    // alert(src);
  })
// home conter
$('.counter').counterUp({
    delay: 10,
    time: 1000
});

</script>


<script type="text/javascript"> 
  $(document).ready(function() {
   $('.gallery-service').magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery: {
        enabled: true,
        preload: [0,2],
      }
   })
  })
</script>
<script type="text/javascript"> 
  $(document).ready(function() {
   $('.gallery-work').magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery: {
        enabled: true,
        preload: [0,2],
      }
   })
  })
</script>

  </body>
</html>
