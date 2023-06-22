@extends('layout.masterstore')

@section('title', 'Contact Us Page')

@section('content')
<style>
    #subheader {
        <?php if ($banner == null) { ?>
           background: url(./public/assets/images/background/subheader-6.jpg) top fixed;
        <?php } else { ?>
           background: url(<?php echo env('MEDIA_URL').$banner[0]['image'] ?>) top fixed;    
        <?php } ?>
    }
</style>
<!-- subheader -->
<section id="subheader" data-speed="8" data-type="background">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1>Contact Us</h1>
            <h2><span>Who We Are</span></h2>
         </div>
      </div>
   </div>
</section>
<!-- subheader close -->
<!-- content begin -->
<div id="content" class="no-top no-bottom">
   <section class="no-top no-bottom relative overflow-hidden">
   <div id="map" class="map-container-full">
   </div>
   <div class="color-overlay">
      <div class="container">
         <div class="row">
            <div class="col-md-8 col-md-offset-2">
               <div class="row">
               <div class="col-md-12 text-center">
               <h2>CAESAR’S KITCHEN REPS THE EAST SIDE STYLE, COMING AT YOU FROM BLACKWOOD, NJ.<span class="teaser">Ready to email us? <br> Let’s get digital:</span><span class="tiny-border"style="display: inline-flex;"></span></h2></div>
               
                  <div class="col-md-12">
                     <form name="reservationForm" id='contact_form' method="post" action='#'>
                        <div class="row">
                           <div class="col-md-12">
                              <div>
                                <label>Name:*</label>
                                 <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                              </div>
                              <div>
                                <label>Email:*</label>
                                 <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                              </div>
                              <div>
                                <label>Subject:*</label>
                                <select name="input_4" id="input_1_4" class="form-control">
                                    <option value="General Inquiry">General Inquiry</option>
                                    <option value="Product Request">Product Request</option>
                                    <option value="Product Feedback">Product Feedback</option>
                                </select>
                              </div>
                              <div>
                                <label>Message:*</label>
                                 <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                              </div>
                              <div>
                                <label>If providing feedback on a product, please enter the product expiration date found on the side panel.</label>
                                 <input type='text' name='email' class="form-control" placeholder="">
                                 <p>Protected by Captcha
                                </p>
                              </div>
                           </div>
                           <div class="col-md-12 text-center">
                              <div id='submit'>
                                 <input type='submit' id='send_message' value='Submit Form' class="btn-solid rounded">
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection