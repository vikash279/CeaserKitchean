@extends('layout.master')

@section('title', 'Menu Page')

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
<style>
   .enlarge:hover {
  transform: scale(1.6);
}
</style>
<section id="subheader" data-speed="8" data-type="background">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1>Our Products</h1>
            <h2><span>Fresh &amp; Delicious</span></h2>
         </div>
      </div>
   </div>
</section>
<!-- subheader close -->
<!-- content begin -->
<div id="content" class="no-top no-bottom">
   <!-- section begin -->
   <section id="sub-menu-1" class="side-bg" data-bgcolor="#18181d">
      <div class="col-md-3 image-container wow fadeInLeft">
         <div class="background-image"></div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-8 col-md-offset-4">
            <?php foreach($productdetails as $val){ ?>
               <div class="text-center">
                  <h2>{{$val['category_name']}}<span class="teaser">Fresh and delicious</span><span class="small-border center"></span></h2>
               </div>
               <div class="row wow fadeInUp">
                  <?php foreach($val['product_list'] as $value){ ?> 
                  <div class="col-sm-6 col-md-4 mb30">
                     <div class="post-menu s1">
                       <a href="{{url('productdetails/'.$value['id'])}}">
                        <img src="{{env('MEDIA_URL').$value['product_image']}}" class="img-responsive enlarge" alt=""></a>
                        <div class="sub-item-service meta">
                           <div class="c1"><a href="{{url('productdetails/'.$value['id'])}}">{{$value['name']}}</a></div>
                           <div class="c3"><a href="{{url('productdetails/'.$value['id'])}}">${{$value['price']}}</a></div>
                        </div>
                        </a>
                        <div class="service-text meta-content">{{$value['product_description']}}</div>
                     </div>
                  </div>
                  <?php } ?>
                  <div class="clearfix"></div>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </section>
   <!-- section close -->
   <!-- section begin -->
   <!--<section id="sub-menu-2" class="side-bg" data-bgcolor="#111111">-->
   <!--   <div class="col-md-3 col-md-offset-9 image-container pull-right wow fadeInRight">-->
   <!--      <div class="background-image"></div>-->
   <!--   </div>-->
   <!--   <div class="container">-->
   <!--      <div class="row">-->
   <!--         <div class="col-md-8">-->
   <!--            <div class="text-center">-->
   <!--               <h2>Conventional<span class="teaser">Fresh and delicious</span><span class="small-border center"></span></h2>-->
   <!--            </div>-->
   <!--            <div class="row justify-content-center wow fadeInUp ">-->
   <!--            <div class="col-sm-6 col-md-3 mb30"></div>-->
   <!--               <div class="col-sm-6 col-md-6 mb30">-->
   <!--               <img src="{!!asset('public/assets/images/where-to-buy.png')!!}" class="img-responsive" alt="">-->
   <!--               </div>-->
   <!--               <div class="col-sm-6 col-md-3 mb30"></div>-->
   <!--               <div class="clearfix"></div>-->
   <!--            </div>-->
   <!--         </div>-->
   <!--      </div>-->
   <!--   </div>-->
   <!--</section>-->
   <!-- section close -->
   <!-- section begin -->
   <section class="call-to-action bg-color dark pt40 pb40" data-speed="5" data-type="background">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <h3 class="mt10">Delicious starts right here. Enjoy the real fresh food by our chef!</h3>
            </div>
            <div class="col-md-4 text-right">
               <a href="{{url('store')}}" class="btn btn-slider rounded">Buy Now</a>
            </div>
         </div>
      </div>
   </section>
   <!-- section close -->
</div>
@endsection