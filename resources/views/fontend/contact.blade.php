@extends('fontend/layout/app')
@section('title','HS Polishing')

@section('content')

  <!-- Contact -->
  <div class="service-section">
    <div class="container mt text-center">
      <div class="row">
          <div class="col-sm-12">
            <div class="section-title pb">
              <h4>Contact now</h4>
            </div>
          </div>
          <div class="col-md-5">
            <div class="contact-info">
              <div class="phone">
                <h5>Phone</h5>
                <a href="tel:+60 112980 7902"><span><i class="fas fa-phone"></i> </span> +60 112980 7902</a>
              </div>
              <div class="phone">
                <h5>E-mail</h5>
                <a href="mail:info@hspolishingmarble.com"><span><i class="fas fa-phone"></i> </span> hspolishingmarbleparquet@gmail.com</a>
              </div>
              <div class="phone">
                <h5>Address</h5>
                <span>
                  48,Jalan,4k ampang jaya, Selangor-68000, Malaysia.
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="contact-form">
              <div class="success"></div>
              <form method="post" id="contactForm">
                @csrf
                <div class="form-custom-group">
                  <label>full name <strong class="text text-success">*</strong></label>
                  <input type="text" name="name" placeholder="Full Name" id="name">
                  <span id="name_error"></span>
                </div>
                <div class="form-custom-group">
                  <label>Mobile <strong class="text text-success">*</strong></label>
                  <input type="number" name="mobile" placeholder="Mobile" id="mobile">
                  <div id="mobile_error"></div>
                </div>
                <div class="form-custom-group">
                  <label>Message <strong class="text text-success">*</strong></label>
                  <textarea name="message" id="message"></textarea>
                  <div id="message_error"></div>
                </div>
                <div class="form-group">
                  <button type="submit" class="send-btn">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>

    <div class="container mdmt">
      <div class="row">
        <div class="col-sm-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.745527467006!2d101.76406834981105!3d3.16162535394749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc3710647fa527%3A0xc865edc3bd21878f!2sJalan%204k%2C%2068000%20Ampang%2C%20Selangor%2C%20Malaysia!5e0!3m2!1sen!2sbd!4v1647487563485!5m2!1sen!2sbd" width="100%" height="500" style="border:0; font-size:20px" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
<div class="container mdmt">
  <div class="row">
    <div class="heading">
      <h3>United Arab Emirates</h3>
    </div>
    <div class="heading-arobic">
      <h4>مختصون في جميع خدمات الصيانة الكهربائية، الصباغة والسباكة. على هبة الاستعداد لخدمتك على مدار 24 ساعة للمزيد من التفاصيل يرجى التواصل / موبايل + واتسا</h4>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-5">
      <div class="contact-info">
        <div class="phone">
          <h5>Phone</h5>
          <a href="tel:+60 112980 7902"><span><i class="fas fa-phone"></i> </span> +97 15667 54752</a>
        </div>
        <div class="phone">
          <h5>E-mail</h5>
          <a href="mail:info@hspolishingmarble.com"><span><i class="fas fa-phone"></i> </span> hspolishingmarbleparquet@gmail.com</a>
        </div>
        <div class="phone">
          <h5>Address</h5>
          <span>
            Sharjah, United Arab Emirates
          </span>
        </div>
      </div>
    </div>
    <div class="col-md-7">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230818.14382576966!2d55.41477219134224!3d25.319872987975206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5f5fede7964b%3A0x2a830aa19c1f6d89!2sSharjah%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sbd!4v1647489499698!5m2!1sen!2sbd" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</div>

<div class="container mdmt">
  <div class="row">
    <div class="heading">
      <h3>Dhaka Bangladesh</h3>
    </div>

  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-5">
      <div class="contact-info">
        <div class="phone">
          <h5>Phone</h5>
          <a href="tel:+60 112980 7902"><span><i class="fas fa-phone"></i> </span> +97 15667 54752</a>
        </div>
        <div class="phone">
          <h5>E-mail</h5>
          <a href="mail:info@hspolishingmarble.com"><span><i class="fas fa-phone"></i> </span> hspolishingmarbleparquet@gmail.com</a>
        </div>
        <div class="phone">
          <h5>Address</h5>
          <span>
            Dhaka, Bangladehs
          </span>
        </div>
      </div>
    </div>
    <div class="col-md-7">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d524653.8402649784!2d90.20925997478633!3d23.759231763123882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1649004521640!5m2!1sen!2sbd" width="600" height="450" style="border:0; width: 100%;height: 350px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>
<!-- footer section -->

@endsection

@section('script')
  <script type="text/javascript">
    ///csrf token cache out
  $.ajaxSetup({
    headers:{
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

//registration
  jQuery('#contactForm').submit(function(e){
    e.preventDefault();

    jQuery.ajax({
      url:'/contact-store',
      data:jQuery('#contactForm').serialize(),
      type:'post',
      success:function(result){
        if (result.status == 'errors') {
          jQuery.each(result.errors,function(key,val){
            $('#'+key+'_error').html('<div class="alert alert-danger" role="alert"><span>'+val[0]+'</span></div>');
          });
        }
        if (result.status == 'success') {
          jQuery('#contactForm')[0].reset();
            $('.success').html('<div class="alert alert-success" role="alert"><span>'+result.msg+'</span></div>');

        }
      }
    });
  });
  </script>
@endsection