@extends('layout.master')

@section('title', 'About Us Page')

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
            <h1>About Us</h1>
            <h2><span>Who We Are</span></h2>
         </div>
      </div>
   </div>
</section>
<!-- subheader close -->
<!-- content begin -->
<div id="content" class="no-top no-bottom">
   <!-- section begin -->
   <?php if(!empty($details)){ ?>
   <?php if(!empty($details[0])) { ?>
   <section id="sub-about-1" class="side-bg">
      <div class="col-md-6 image-container">
         <div class="background-image"></div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-5 col-md-offset-7 wow fadeInUp">
               <h2>{{$details[0]['title']}}<span class="teaser"></span><span class="tiny-border"></span></h2>
               <p>
               {{$details[0]['description']}}
               </p>
               <div class="spacer-single"></div>
               <a href="{{url('menu')}}" class="btn-solid rounded mt20"> See  our products</a>
            </div>
         </div>
      </div>
   </section>
   <?php } ?>
   <!-- section close -->
   <!-- section begin -->
   <?php if(!empty($details[1])) { ?>
   <section id="sub-about-2" class="side-bg">
      <div class="image-container col-md-6 col-md-offset-6 pull-right">
         <div class="background-image"></div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-5 wow fadeInUp">
               <h2>{{$details[1]['title']}} <span class="teaser"></span><span class="tiny-border"></span></h2>
               <p>
               {{$details[1]['description']}}
               </p>
               <div class="spacer-single"></div>
               <a href="{{url('store')}}" class="btn-solid rounded mt20">Buy Now</a>
            </div>
         </div>
      </div>
   </section>
   <?php } } ?>
</div>
@endsection