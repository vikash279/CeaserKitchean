@extends('layout.masterstore')

@section('title', 'Product Details Page')

@section('content')
<style>
    #subheader {
        <?php if ($banner == null) { ?>
           background: url(/newdesign/public/assets/images/background/subheader-6.jpg) top fixed;
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
            <h1>Roasted Chicken</h1>
            <h2><span>Main</span></h2>
         </div>
      </div>
   </div>
</section>
<!-- subheader close -->
<!-- content begin -->
<div id="content">
   <div class="container">
      <div class="row">
         <div class="post-menu-view">
            <div class="col-md-6">
               <img src="{{env('MEDIA_URL').$productdetails->product_image}}" class="img-responsive" alt="">
            </div>
            <div class="col-md-6">
               <div class="price">${{$productdetails->price}}</div>
               <div class="dish">{{$productdetails->name}}</div>
               <div class="spacer-single"></div>
               <p class="dish-p">{{$productdetails->product_description}}</p>
               <a href="{{url('cart')}}" class="btn-solid rounded mt20">Add to Cart</button>
               <a><a href="#"><i class="fa fa-heart-o shopping-icon"></i></a>
            </div>
         </div>
      </div>
   </div>
   <div class="spacer-double"></div>
   <div class="row">
      <div class="col-md-12 text-center">
         <h2>You May Also Like<span class="small-border center"></span></h2>
      </div>
      <?php foreach($products as $value){ ?> 
      <div class="col-sm-6 col-md-2 mb30">
      <a href="{{url('productdetails/'.$value['id'])}}">
         <div class="post-menu s1">
            <img src="{{env('MEDIA_URL').$value['product_image']}}" class="img-responsive enlarge" alt="">
            <div class="sub-item-service meta">
               <div class="c1" style="word-wrap: break-word;"><a href="{{url('productdetails/'.$value['id'])}}">{{$value['name']}}</a></div>
               <div class="c3"><a href="{{url('productdetails/'.$value['id'])}}">${{$value['price']}}</a></div>
            </div>
            <div class="service-text meta-content"><a href="{{url('productdetails/'.$value['id'])}}">{{$value['product_description']}}</a></div>
         </div>
      </a>
      </div>
      <?php } ?>
      <div class="clearfix"></div>
   </div>
</div>
</div>
</div>
@endsection