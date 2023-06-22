@extends('layout.master')
@section('title', 'Home Page')
@section('content')
<!-- content begin -->
<style>
   .enlarge:hover {
  transform: scale(1.6);
}
</style>
<div id="content" class="no-bottom no-top">
   <!-- revolution slider begin -->
   <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
      <div id="revolution-slider">
         <ul>
            <?php if(!empty($bannerdetails)){ ?>
               <?php foreach($bannerdetails as $val){ ?>
            <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
               <!--  BACKGROUND IMAGE -->
               <img src="{{env('MEDIA_URL').$val['image']}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
               <div class="tp-caption very-big-white"
                  data-x="center"
                  data-y="220"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_in="x:50px;opacity:0;s:1000;e:Power3.easeOut;"
                  data-transform_out="opacity:0;x:-10;px;s:800;e:Power3.easeInOut;"
                  data-start="700"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on">
                  {{$val['title']}}
               </div>
               <div class="tp-caption text-center"
                  data-x="center"
                  data-y="330"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_in="y:100px;opacity:0;s:500;e:Power3.easeOut;"
                  data-transform_out="opacity:0;x:-10;s:800;e:Power3.easeInOut;"
                  data-start="1100">
                  <span class="id-color"> {{$val['subtitle']}}</span>
               </div>
            </li>
            <?php } } ?>
         </ul>
      </div>
   </section>
   <!-- revolution slider close -->
   <!-- section begin -->
   <section id="section-about" class="no-top z-index1000">
      <div class="container">
         <div class="row">
            <div class="col-md-4 col-sm-6 wow fadeInUp">
               <figure class="pic-hover hover-scale mb20 mt-40 shadow-soft">
                  <span class="center-xy">
                  <a class="popup-youtube" href="https://www.youtube.com/watch?v=mcODFaL2VFo">
                  <i class="fa fa-play btn-action btn-play btn-action-hide"></i></a>
                  </span>
                  <span class="bg-overlay"></span>
                  <img src="{!!asset('public/assets/images/misc/pic_1.jpg')!!}" class="img-responsive" alt="">
               </figure>
               <h3 class="id-color">Healthy &amp; Tasty</h3>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                  <br>
                  <a href="#" class="btn-underline mt20">READ MORE</a>
               </p>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
               <figure class="pic-hover hover-scale mb20 mt-40 shadow-soft">
                  <span class="center-xy">
                  <a class="image-popup" href="{!!asset('public/assets/images/misc/pic_1.jpg')!!}">
                  <i class="fa fa-image btn-action btn-action-hide"></i></a>
                  </span>
                  <span class="bg-overlay"></span>
                  <img src="{!!asset('public/assets/images/misc/pic_2.jpg')!!}" class="img-responsive" alt="">
               </figure>
               <h3 class="id-color">Today's Special</h3>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  <br>
                  <a href="#" class="btn-underline mt20">READ MORE</a>
               </p>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
               <figure class="pic-hover hover-scale mb20 mt-40 shadow-soft">
                  <span class="center-xy">
                  <a class="image-popup" href="{!!asset('public/assets/images/misc/pic_3.jpg')!!}">
                  <i class="fa fa-image btn-action btn-action-hide"></i></a>
                  </span>
                  <span class="bg-overlay"></span>
                  <img src="{!!asset('public/assets/images/misc/pic_3.jpg')!!}" class="img-responsive" alt="">
               </figure>
               <h3 class="id-color">Romantic Dinner</h3>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  <br>
                  <a href="#" class="btn-underline mt20">READ MORE</a>
               </p>
            </div>
         </div>
      </div>
   </section>
   <!-- section close -->
   <!-- section begin -->
   <section id="section-welcome" class="side-bg" data-bgcolor="#18181d">
   <?php if(!empty($abouthomedetails)){ ?>
   <?php foreach($abouthomedetails as $val){ ?>
      <div class="col-md-6 image-container wow fadeInLeft" style="height: 500px; background-image: url('{{env('MEDIA_URL').$val['image']}}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-5 col-md-offset-7 wow fadeInUp">
               <h2>{{$val['title']}}<span class="teaser">{{$val['subtitle']}}</span><span class="tiny-border"></span></h2>
               <p>
               {{$val['description']}}
               </p>
               <div class="spacer-single"></div>
               <!-- <a href="#" class="btn-solid rounded mt20">Read More</a> -->
            </div>
         </div>
      </div>
      <?php } } ?>
</section>

   <!-- section close -->
   <!-- section begin -->
   <section id="section-features" class="text-light" data-stellar-background-ratio=".2">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h2>Walmart Links<span class="teaser">Buy From Here</span><span class="small-border center"></span></h2>
            </div>
            <?php if(!empty($wallmartdetails)){ ?>
            <?php foreach($wallmartdetails as $val){ ?>
            <div class="col-md-3 col-sm-6 text-center wow fadeInLeft" data-wow-delay=".3s">
               <div class="menu-item">
                  <figure class="pic-hover hover-scale mb10">
                     <span class="center-xy">
                     <a class="image-popup" href="{{env('MEDIA_URL').$val['image']}}">
                     <i class="fa fa-play btn-action btn-play btn-action-hide"></i>
                     </a>
                     </span>
                     <span class="bg-overlay"></span>
                     <span class="border-overlay"></span>
                     <a href="{{$val['links']}}" target="_blank"><img src="{{env('MEDIA_URL').$val['image']}}" class="img-responsive" alt=""></a>
                  </figure>
                  <!-- <h3>Roasted Chicken</h3> -->
                  <span class="id-color"> <a href="{{$val['links']}}" target="_blank">{{$val['description']}}</a></span>
               </div>
            </div>
            <?php } } ?>
            <!-- <div class="col-md-3 col-sm-6 text-center wow fadeInLeft">
               <div class="menu-item">
                  <figure class="pic-hover hover-scale mb10">
                     <span class="center-xy">
                     <a class="image-popup" href="{!!asset('public/assets/images/menu/thumbs/2.jpg')!!}">
                     <i class="fa fa-image btn-action btn-action-hide"></i>
                     </a>
                     </span>
                     <span class="bg-overlay"></span>
                     <span class="border-overlay"></span>
                     <img src="{!!asset('public/assets/images/menu/thumbs/2.jpg')!!}" class="img-responsive" alt="">
                  </figure>
                  <h3>Baked Crab Cheese</h3>
                  <span class="id-color">$66</span>
               </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center wow fadeInRight">
               <div class="menu-item">
                  <figure class="pic-hover hover-scale mb10">
                     <span class="center-xy">
                     <a class="image-popup" href="{!!asset('public/assets/images/menu/thumbs/3.jpg')!!}">
                     <i class="fa fa-image btn-action btn-action-hide"></i>
                     </a>
                     </span>
                     <span class="bg-overlay"></span>
                     <span class="border-overlay"></span>
                     <img src="{!!asset('public/assets/images/menu/thumbs/3.jpg')!!}" class="img-responsive" alt="">
                  </figure>
                  <h3>Foie Gras</h3>
                  <span class="id-color">$99</span>
               </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center wow fadeInRight" data-wow-delay=".3s">
               <div class="menu-item">
                  <figure class="pic-hover hover-scale mb10">
                     <span class="center-xy">
                     <a class="image-popup" href="{!!asset('public/assets/images/menu/thumbs/4.jpg')!!}">
                     <i class="fa fa-image btn-action btn-action-hide"></i>
                     </a>
                     </span>
                     <span class="bg-overlay"></span>
                     <span class="border-overlay"></span>
                     <img src="{!!asset('public/assets/images/menu/thumbs/4.jpg')!!}" class="img-responsive" alt="">
                  </figure>
                  <h3>Chicken Satay</h3>
                  <span class="id-color">$56</span>
               </div>
            </div> -->
         </div>
      </div>
   </section>
   <!-- section close -->
   <section id="section-services-tab" aria-label="section-services-tab">
      <div class="container">
         <div class="col-md-12 text-center">
            <h2>Our Products<span class="teaser">Healthy &amp; Tasty</span><span class="small-border center"></span></h2>
         </div>
         <div class="col-md-12 mb60 wow fadeInUp">
            <div class="de_tab tab_style_1">
               <ul class="de_nav">
               <?php foreach($productdetails as $val){ ?>
                  <li class="active" data-link="#section-services-tab">
                     <span>{{$val['category_name']}}</span>
                     <div class="v-border"></div>
                  </li>
                  <?php } ?>   
               </ul>
               <div class="de_tab_content">
                 <?php $x = 0; ?> 
               <?php foreach($productdetails as $val){ ?>
                 
                  <div id="tab{{++$x}}" class="tab_single_content">
                     <div class="row">
                     <?php foreach($val['product_list'] as $value) { ?>
                        <div class="col-md-6 mb30">
                           <div class="post-menu">
                           <a href="{{url('productdetails/'.$value['id'])}}">
                              <img src="{{env('MEDIA_URL').$value['product_image']}}" class="img-responsive enlarge" alt="" style="width: 80px !important; height: 80px !important;">
                           </a>   
                              <div class="sub-item-service meta">
                                 <div class="c1"><a href="{{url('productdetails/'.$value['id'])}}">{{$value['name']}}</a></div>
                                 <div class="c2"></div>
                                 <div class="c3">${{$value['price']}}</div>
                              </div>
                              <div class="service-text meta-content">{{$value['product_description']}}</div>
                           </div>
                        </div><?php } ?>
                        <div class="clearfix"></div>
                     </div>
                  </div> <?php } ?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- <section id="section-book-form" class="no-top no-bottom" data-stellar-background-ratio=".2">
      <div class="container">
         <div class="col-md-6 col-md-offset-3">
            <div data-bgcolor="#18181d" class="padding60 text-center text-light mt-50 mb-50 shadow-soft wow fadeInUp">
               <h2>Book a Table<span class="teaser center">Reservation</span><span class="small-border center"></span></h2>
               <div class="row">
                  <form name="contactForm" id='contact_form' class="form-dark" method="post" action='https://www.designesia.com/themes/delizus/reservation.php'>
                     <div class="col-md-4 mb10">
                        <input type='text' name='date' id='date' class="form-control" placeholder="Date">
                     </div>
                     <div class="col-md-4 mb10">
                        <input type='text' name='time' id='time' class="form-control" placeholder="Time">
                     </div>
                     <div class="col-md-4 mb10">
                        <input type='text' name='person' id='person' class="form-control" placeholder="Person">
                     </div>
                     <div class="col-md-6 mb10">
                        <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                     </div>
                     <div class="col-md-6 mb10">
                        <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                     </div>
                     <div class="col-md-12 mb10">
                        <textarea name='message' id='message' class="form-control" placeholder="Any Message?"></textarea>
                     </div>
                     <div class="col-md-12 text-center">
                        <div id='submit'>
                           <input type='submit' id='send_message' value='Submit Form' class="btn-solid rounded">
                        </div>
                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!-- section begin -->
   <section id="section-news">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center mt30">
               <h2>Latest Brochure<span class="teaser center">Come &amp; Join</span><span class="small-border center"></span></h2>
            </div>
            <div class="col-md-12 wow fadeInUp">
               <ul id="blog-carousel" class="article-list">
               <?php foreach($brochuredetails as $val){ ?>
                  <li class="col-md-6 item">
                     <figure class="pic-hover mb10">
                        <span class="center-xy">
                        <a class="image-popup" href="{{env('MEDIA_URL').$val['image']}}">
                        <i class="fa fa-link btn-action btn-action-hide"></i>
                        </a>
                        </span>
                        <span class="bg-overlay"></span>
                        <img src="{{env('MEDIA_URL').$val['image']}}" alt="" style="width: 337px !important; height: 337px !important;" class="img-responsive enlarge">
                     </figure>
                     <div class="post-content">
                        <div class="post-text">
                           <h3><a href="#">{{$val['name']}}</a></h3>
                           <div class="date-time"><span class="date">{{date('d-m-Y', strtotime($val['created_at']))}}</span><span class="time"><a href="{{env('MEDIA_URL').$val['pdf']}}" download>Download PDF</a></span></div>
                        </div>
                     </div>
                  </li>
                  <?php } ?>
                  <!-- <li class="col-md-6 item">
                     <figure class="pic-hover mb10">
                        <span class="center-xy">
                        <a href="#">
                        <i class="fa fa-link btn-action btn-action-hide"></i>
                        </a>
                        </span>
                        <span class="bg-overlay"></span>
                        <img src="{!!asset('public/assets/images/events/2.jpg')!!}" alt="" class="img-responsive">
                     </figure>
                     <div class="post-content">
                        <div class="post-text">
                           <h3><a href="#">Friday Jazz</a></h3>
                           <div class="date-time"><span class="date">20 April 2015</span><span class="time">12:00 - 13:30</span></div>
                        </div>
                     </div>
                  </li>
                  <li class="col-md-6 item">
                     <figure class="pic-hover mb10">
                        <span class="center-xy">
                        <a href="#">
                        <i class="fa fa-link btn-action btn-action-hide"></i>
                        </a>
                        </span>
                        <span class="bg-overlay"></span>
                        <img src="{!!asset('public/assets/images/events/3.jpg')!!}" alt="" class="img-responsive">
                     </figure>
                     <div class="post-content">
                        <div class="post-text">
                           <h3><a href="#">Romantic Night</a></h3>
                           <div class="date-time"><span class="date">20 April 2015</span><span class="time">12:00 - 13:30</span></div>
                        </div>
                     </div>
                  </li>
                  <li class="col-md-6 item">
                     <figure class="pic-hover mb10">
                        <span class="center-xy">
                        <a href="#">
                        <i class="fa fa-link btn-action btn-action-hide"></i>
                        </a>
                        </span>
                        <span class="bg-overlay"></span>
                        <img src="{!!asset('public/assets/images/events/1.jpg')!!}" alt="" class="img-responsive">
                     </figure>
                     <div class="post-content">
                        <div class="post-text">
                           <h3><a href="#">Barbeque Party</a></h3>
                           <div class="date-time"><span class="date">20 April 2015</span><span class="time">12:00 - 13:30</span></div>
                        </div>
                     </div>
                  </li> -->
               </ul>
            </div>
         </div>
      </div>
   </section>
   <!-- section close -->   
   <!-- section begin -->
   <section id="section-fun-facts" class="bg-color text-light no-top no-bottom">
      <div class="pt20 pb20">
         <div class="container bg-color">
            <div class="row">
                <div class="col-md-12 text-center mt30">
                   <h2>HERE'S A SWEET DEAL!
                      <span class="teaser center" style="color: #fff;">Buy Curious?</span><span class="small-border center"></span>
                   </h2>
                </div>
             </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 wow fadeInUp">
                   <div class="slideshow-container">
                      <div class="mySlides" style="background-image: url('./public/assets/images-slider/wide4.jpg');">
                        <div class="deal-text-aria">
                            <h4>cook140</h4>
                            <h5>Big Saving Days: Upto 80% Off</h5>
                        </div>
                      </div>
                      <div class="mySlides" style="background-image: url('./public/assets/images-slider/wide1.jpg');">
                        <div class="deal-text-aria">
                            <h4>TECNO1000</h4>
                            <h5>Flat ₹1000 Off on Tecno Phantom X2</h5>
                        </div>
                      </div>
                      <div class="mySlides" style="background-image: url('./public/assets/images-slider/wide3.jpg');">
                        <div class="deal-text-aria">
                            <h4>Ethnic80</h4>
                            <h5>Upto 60% Off On Ethnic Wear</h5>
                        </div>
                      </div>
                      <a class="prev" onclick="plusSlides(-1)">❮</a>
                      <a class="next" onclick="plusSlides(1)">❯</a>
                   </div>
                   <div class="dot-container">
                      <span class="dot" onclick="currentSlide(1)"></span> 
                      <span class="dot" onclick="currentSlide(2)"></span> 
                      <span class="dot" onclick="currentSlide(3)"></span> 
                   </div>
                </div>
             </div>
            <!-- <div class="row">
               <div class="col-md-3 wow fadeIn" data-wow-delay="0">
                  <div class="de_count">
                     <h3 class="timer" data-to="8330" data-speed="2500">0</h3>
                     <span>Hours of Works</span>
                  </div>
               </div>
               <div class="col-md-3 wow fadeIn" data-wow-delay=".25s">
                  <div class="de_count">
                     <h3 class="timer" data-to="248" data-speed="2500">0</h3>
                     <span>Projects Complete</span>
                  </div>
               </div>
               <div class="col-md-3 wow fadeIn" data-wow-delay=".5s">
                  <div class="de_count">
                     <h3 class="timer" data-to="852" data-speed="2500">0</h3>
                     <span>Slice of Pizza</span>
                  </div>
               </div>
               <div class="col-md-3 wow fadeIn" data-wow-delay=".75s">
                  <div class="de_count">
                     <h3 class="timer" data-to="615" data-speed="2500">0</h3>
                     <span>Cups of Coffee</span>
                  </div>
               </div>
            </div> -->
         </div>
      </div>
   </section>
   <!-- section close -->
</div>
<script>
   var slideIndex = 1;
   showSlides(slideIndex);
   
   function plusSlides(n) {
   showSlides(slideIndex += n);
   }
   
   function currentSlide(n) {
   showSlides(slideIndex = n);
   }
   
   function showSlides(n) {
   var i;
   var slides = document.getElementsByClassName("mySlides");
   var dots = document.getElementsByClassName("dot");
   if (n > slides.length) {slideIndex = 1}    
   if (n < 1) {slideIndex = slides.length}
   for (i = 0; i < slides.length; i++) {
     slides[i].style.display = "none";  
   }
   for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" active", "");
   }
   slides[slideIndex-1].style.display = "block";  
   dots[slideIndex-1].className += " active";
   }
   window.onload= function () {
   setInterval(function(){ 
    plusSlides(1);
   }, 3000);
   }
   
</script>
@endsection