@extends('layout.master')
@section('title', 'WHERE TO FIND')
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
            <h1>HERE'S WHERE TO FIND US</h1>
            <h2><span>Let's take this offline</span></h2>
         </div>
      </div>
   </div>
</section>
<!-- subheader close -->
<!-- content begin -->
<div id="content">
   <div class="container">
      <div class="row">
         <div class="col-md-5">
            <div class="map-search">
               <div class="search-box" id="Searchsection">
                  <div class="row">
                     <div class="col-md-1">
                        <div class="bars"><i class="fa fa-bars" onClick="showHideDiv('divMsg')" ></i></div>
                     </div>
                     <div class="col-md-9">
                        <div class="text-panel">
                           <input id="SearchBox" type="text" class="form-control" name="SearchBox" placeholder="Enter a Location" autocomplete="off">
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="go-btn">
                           <button type="go" value="Go" class="btn btn-danger btn-block">Go</button>
                        </div>
                     </div>
                     <div class="col-md-12 mt-3">
                        <div id="divMsg" class="radius" style="display:none">
                           <label>Radius</label>
                           <select class="form-control" name="radiusSelect" id="radiusSelect">
                              <option value="1">1 Mile</option>
                              <option value="3">3 Miles</option>
                              <option value="5">5 Miles</option>
                              <option value="10" selected="">10 Miles</option>
                              <option value="25">25 Miles</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="search-list">
                  <h3 class="search-list-title">Caesar's Kitchen Retail Store Locations</h3>
                  <div class="search-list-box">
                     <div class="row">
                        <div class="col-md-9">
                           <div class="search-list-all">
                              <p class="search-list-store">Sprouts Farmers Market</p>
                              <p class="search-list-phone"><i class="fa fa-mobile"></i> 918-516-6656</p>
                              <p class="search-list-des"><i class="fa fa-map-marker"></i> 9601 North 133rd East Avenue</p>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="locationListArrow">
                              <a href="#"><i class="fa fa-angle-double-right"></i></a>
                              <p>55.45 Miles</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="search-list-box">
                     <div class="row">
                        <div class="col-md-9">
                           <div class="search-list-all">
                              <p class="search-list-store">King Cash Saver</p>
                              <p class="search-list-phone"><i class="fa fa-mobile"></i> 620-421-6560</p>
                              <p class="search-list-des"><i class="fa fa-map-marker"></i> 2020 Main StreetAvenue</p>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="locationListArrow">
                              <a href="#"><i class="fa fa-angle-double-right"></i></a>
                              <p>29.97 Miles</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="search-list-box">
                     <div class="row">
                        <div class="col-md-9">
                           <div class="search-list-all">
                              <p class="search-list-store">Reasor's</p>
                              <p class="search-list-phone"><i class="fa fa-mobile"></i> 918-371-6400</p>
                              <p class="search-list-des"><i class="fa fa-map-marker"></i> 11550 North 135th East Avenue</p>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="locationListArrow">
                              <a href="#"><i class="fa fa-angle-double-right"></i></a>
                              <p>73.24 Miles</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="search-list-box">
                     <div class="row">
                        <div class="col-md-9">
                           <div class="search-list-all">
                              <p class="search-list-store">Reasor's</p>
                              <p class="search-list-phone"><i class="fa fa-mobile"></i> 918-516-6656</p>
                              <p class="search-list-des"><i class="fa fa-map-marker"></i> 1000 West Will Rogers Boulevard</p>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="locationListArrow">
                              <a href="#"><i class="fa fa-angle-double-right"></i></a>
                              <p>74.61 Miles</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="search-list-box">
                     <div class="row">
                        <div class="col-md-9">
                           <div class="search-list-all">
                              <p class="search-list-store">Target</p>
                              <p class="search-list-phone"><i class="fa fa-mobile"></i> 918-401-8000</p>
                              <p class="search-list-des"><i class="fa fa-map-marker"></i> 9010 North 121st East Avenue</p>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="locationListArrow">
                              <a href="#"><i class="fa fa-angle-double-right"></i></a>
                              <p>92.41  Miles</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="search-list-box">
                     <div class="row">
                        <div class="col-md-9">
                           <div class="search-list-all">
                              <p class="search-list-store">GreenAcres Market</p>
                              <p class="search-list-phone"><i class="fa fa-mobile"></i> 316-634-1088</p>
                              <p class="search-list-des"><i class="fa fa-map-marker"></i> 8141 East 21st Street North</p>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="locationListArrow">
                              <a href="#"><i class="fa fa-angle-double-right"></i></a>
                              <p>94.56 Miles</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="filter-locaton-desk-panel">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="filter"><a data-toggle="modal" data-target="#exampleModal"><i class="fa fa-filter"></i><br>Email Results</a></div>
                     </div>
                     <div class="col-md-3">
                        <div class="location"><a data-toggle="modal" data-target="#suggestLocation"><i class="fa fa-map-marker"></i><br>Suggest Location</a></div>
                     </div>
                     <div class="col-md-3">
                        <div class="filter"><a data-toggle="modal" data-target="#productSearch"><i class="fa fa-filter"></i><br>Product Search</a></div>
                     </div>
                     <div class="col-md-3">
                        <div class="location"><a href="#Searchsection"><i class="fa fa-map-marker"></i><br>Nearby Locations</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-7">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26548056.25296246!2d-117.0296683466655!3d35.683661403073174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1673637309785!5m2!1sen!2sin" width="100%" height="600" style="border-radius:10px; border: 3px solid #ca8e46;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </div>
</div>
<!-- modal section-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-body">
            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="text-danger">&times;</span>
            </button>
            <br>
            <h3 class="text-info">Enter tha Email is for Email Results</h3>
            <input type="text" class="form-control4" name="EmailResult" id="EmailResult" placeholder="abcd@mail.com">
         </div>
         <div class="row">
            <div class="col-md-12 text-center">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Send Mail Id</button>
               <br><br>
            </div>
         </div>
      </div>
   </div>
</div>
<!--  -->
<div class="modal fade" id="suggestLocation" tabindex="-1" role="dialog" aria-labelledby="suggestLocation" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-body">
            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="text-danger">&times;</span>
            </button>
            <br>
            <h3 class="text-info">Suggest a Location</h3>
            <input type="text" class="form-control4" name="suggest_location_name" id="suggest_location_name" placeholder="Your name">
            <input type="text" class="form-control4" name="suggest_location_email" id="suggest_location_email" placeholder="Your email">
            <textarea cols="10" rows="5" class="form-control4" name="suggest_location_details" id="suggest_location_details" placeholder="Location details"></textarea>
         </div>
         <div class="row">
            <div class="col-md-12 text-center">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Send Details</button>
               <br><br>
            </div>
         </div>
      </div>
   </div>
</div>
<!--  -->
<div class="modal fade" id="productSearch" tabindex="-1" role="dialog" aria-labelledby="productSearch" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-body">
            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="text-danger">&times;</span>
            </button>
            <br>
            <h3 class="text-info">Filter Stores by Product</h3>
            <br>
            <h4 class="text-info">Bistro Bowl</h4>
            <label class="form-check-label" for="exampleCheck1"><input type="checkbox" class="form-check-input" id="exampleCheck1"> Chicken Enchilada Cauliflower Bowl, 9 OZ</label>
            <label class="form-check-label" for="exampleCheck2"><input type="checkbox" class="form-check-input" id="exampleCheck2"> Creamy Garlic Chicken Cauliflower Bowl, 9 OZ</label>
            <label class="form-check-label" for="exampleCheck3"><input type="checkbox" class="form-check-input" id="exampleCheck3"> Lemon Chicken Cauliflower Bowl, 9 OZ </label>
            <br>
            <h4 class="text-info">Caesar's Kitchen Made With Organic</h4>
            <label class="form-check-label" for="exampleCheck11"><input type="checkbox" class="form-check-input" id="exampleCheck11"> Braised Brisket Ravioli</label>
            <label class="form-check-label" for="exampleCheck12"><input type="checkbox" class="form-check-input" id="exampleCheck12"> Chorizzo Sausage Mac & Cheese</label>
            <label class="form-check-label" for="exampleCheck13"><input type="checkbox" class="form-check-input" id="exampleCheck13"> Spicy Chicken Meatball Spaccatelli Pasta</label>
            <label class="form-check-label" for="exampleCheck14"><input type="checkbox" class="form-check-input" id="exampleCheck14"> Spring Snap Pea Reginetti Pasta</label>
         </div>
         <div class="row">
            <div class="col-md-12 text-center">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Search</button>
               <br><br>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- modal end -->
<script type="text/javascript">
   function showHideDiv(ele) {
   	var srcElement = document.getElementById(ele);
   	if (srcElement != null) {
   		if (srcElement.style.display == "block") {
   			srcElement.style.display = 'none';
   		}
   		else {
   			srcElement.style.display = 'block';
   		}
   		return false;
   	}
   }
</script>
@endsection