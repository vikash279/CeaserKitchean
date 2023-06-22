@extends('layout.masterstore')

@section('title', 'Menu Page')

@section('content')
<!-- subheader -->
<style>
    #subheader {
        <?php if ($banner == null) { ?>
           background: url(./public/assets/images/background/subheader-6.jpg) top fixed;
        <?php } else { ?>
           background: url(<?php echo env('MEDIA_URL').$banner[0]['image'] ?>) top fixed;    
        <?php } ?>
    }
    
    
    .c1 a {
        word-wrap: break-word;
    }
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
<div id="content">
   <div class="container">
      <div class="col-md-12">
         <div class="de_tab tab_style_1">
            <ul class="de_nav">
            <?php foreach($productdetails as $val){ ?>
                  <li class="active" data-link="#section-services-tab">
                     <span>{{$val['category_name']}}</span>
                     <div class="v-border"></div>
                  </li>
                  <?php } ?> 
            </ul>
            <div class="de_tab_content wow fadeInUp">
               <?php $x = 0; ?> 
               <?php foreach($productdetails as $val){ ?>
                  <div id="tab{{++$x}}" class="tab_single_content">
                  <div class="row">
                  <?php foreach($val['product_list'] as $value) { ?>
                     <div class="col-md-6 mb30">
                        <div class="post-menu">
                           <a href="{{url('productdetails/'.$value['id'])}}"><img src="{{env('MEDIA_URL').$value['product_image']}}" class="img-responsive enlarge" alt="img"></a>
                           <div class="sub-item-service meta">
                              <div class="c1"><a href="{{url('productdetails/'.$value['id'])}}">{{$value['name']}}</a></div>
                              <div class="c2"></div>
                              <div class="c3">${{$value['price']}}</div>
                           </div>
                           <div class="service-text meta-content">{{$value['product_description']}}</div>
                        </div>
                     </div>
                     <?php } ?>
                     <div class="clearfix"></div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection