<!-- header start -->
<?php include 'header.php';?>
<!-- header close -->
<!-- subheader -->
<section id="subheader" data-speed="8" data-type="background">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1>My Profile</h1>
            <h2><span>Fresh &amp; Delicious</span></h2>
         </div>
      </div>
   </div>
</section>
<!-- subheader close -->
<!-- content begin -->
<div id="content">
<div class="ltn__product-tab-area">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="ltn__tab-menu-list mb-50">
                           <div class="nav">                                            
                              <a class="active show" data-bs-toggle="tab" href="#ltn_tab_1_1">Dashboard <i class="fas fa-home"></i></a>                              
                              <a data-bs-toggle="tab" href="#ltn_tab_1_3">Address <i class="fas fa-map-marker-alt"></i></a>
                              <a data-bs-toggle="tab" href="#ltn_tab_1_4">Account Details <i class="fas fa-user"></i></a>
                              <a data-bs-toggle="tab" href="#ltn_tab_1_5">My Properties <i class="fa-solid fa-list"></i></a>
                              <a data-bs-toggle="tab" href="#ltn_tab_1_6">Favorited Properties <i class="fa-solid fa-heart"></i></a>                              
                              <a data-bs-toggle="tab" href="#ltn_tab_1_9">Change Password <i class="fa-solid fa-lock"></i></a>
                              <a href="index.php">Logout <i class="fas fa-sign-out-alt"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-8">
                        <div class="tab-content">
                           <div class="tab-pane fade active show" id="ltn_tab_1_1">
                              <div class="ltn__myaccount-tab-content-inner">
                                 <p>Hello <strong>UserName</strong> (not <strong>UserName</strong>? <small><a href="index.php">Log out</a></small> )</p>                                
                                 <div class="ltn__comment-area mb-50">
                                    <div class="ltn-author-introducing clearfix">
                                       <div class="author-img">
                                          <img src="img/blog/author.jpg" alt="Author Image">
                                       </div>
                                       <div class="author-info">
                                          <h6>Agent of Property</h6>
                                          <h2>Rosalina D. William</h2>
                                          <div class="footer-address">
                                             <ul>
                                                <li>
                                                   <div class="footer-address-icon">
                                                      <i class="icon-placeholder"></i>
                                                   </div>
                                                   <div class="footer-address-info">
                                                      <p>Brooklyn, New York, United States</p>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="footer-address-icon">
                                                      <i class="icon-call"></i>
                                                   </div>
                                                   <div class="footer-address-info">
                                                      <p><a href="tel:+0123-456789">+0123-456789</a></p>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="footer-address-icon">
                                                      <i class="icon-mail"></i>
                                                   </div>
                                                   <div class="footer-address-info">
                                                      <p><a href="mailto:example@example.com">example@example.com</a></p>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="ltn_tab_1_3">
                              <div class="ltn__myaccount-tab-content-inner">
                                 <p>The following addresses will be used on the checkout page by default.</p>
                                 <div class="row">
                                    <div class="col-md-6 col-12 learts-mb-30">
                                       <h4>Billing Address <small><a href="#">edit</a></small></h4>
                                       <address>
                                          <p><strong>Alex Tuntuni</strong></p>
                                          <p>1355 Market St, Suite 900 <br>
                                             San Francisco, CA 94103
                                          </p>
                                          <p>Mobile: (123) 456-7890</p>
                                       </address>
                                    </div>
                                    <div class="col-md-6 col-12 learts-mb-30">
                                       <h4>Shipping Address <small><a href="#">edit</a></small></h4>
                                       <address>
                                          <p><strong>Alex Tuntuni</strong></p>
                                          <p>1355 Market St, Suite 900 <br>
                                             San Francisco, CA 94103
                                          </p>
                                          <p>Mobile: (123) 456-7890</p>
                                       </address>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="ltn_tab_1_4">
                              <div class="ltn__myaccount-tab-content-inner">
                                 <p>The following addresses will be used on the checkout page by default.</p>
                                 <div class="ltn__form-box">
                                    <form action="#">
                                       <div class="row mb-50">
                                          <div class="col-md-6">
                                             <label>First name:</label>
                                             <input type="text" name="ltn__name">
                                          </div>
                                          <div class="col-md-6">
                                             <label>Last name:</label>
                                             <input type="text" name="ltn__lastname">
                                          </div>
                                          <div class="col-md-6">
                                             <label>Display Name:</label>
                                             <input type="text" name="ltn__lastname" placeholder="Ethan">
                                          </div>
                                          <div class="col-md-6">
                                             <label>Display Email:</label>
                                             <input type="email" name="ltn__lastname" placeholder="example@example.com">
                                          </div>
                                       </div>
                                       <div class="btn-wrapper">
                                          <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Save Changes</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="ltn_tab_1_5">
                              <div class="ltn__myaccount-tab-content-inner">
                                 <div class="ltn__my-properties-table table-responsive">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th scope="col">My Properties</th>
                                             <th scope="col"></th>
                                             <th scope="col">Date Added</th>
                                             <th scope="col">Actions</th>
                                             <th scope="col">Delete</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td class="ltn__my-properties-img">
                                                <a href="product-details.php"><img src="img/product-3/2.jpg" alt="#"></a>
                                             </td>
                                             <td>
                                                <div class="ltn__my-properties-info">
                                                   <h6 class="mb-10"><a href="product-details.php">sdfasdfdsfsdafs</a></h6>
                                                   <small><i class="icon-placeholder"></i> Brooklyn, New York, United States</small>
                                                   <div class="product-ratting">
                                                      <ul>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                                         <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>Feb 22, 2022</td>
                                             <td><a href="#">Edit</a></td>
                                             <td><a href="#"><i class="fa-solid fa-trash-can"></i></a></td>
                                          </tr>
                                          <tr>
                                             <td class="ltn__my-properties-img">
                                                <a href="product-details.php"><img src="img/product-3/3.jpg" alt="#"></a>
                                             </td>
                                             <td>
                                                <div class="ltn__my-properties-info">
                                                   <h6 class="mb-10"><a href="product-details.php">sdfasdfdsfsdafs</a></h6>
                                                   <small><i class="icon-placeholder"></i> Brooklyn, New York, United States</small>
                                                   <div class="product-ratting">
                                                      <ul>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                                         <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>Feb 22, 2022</td>
                                             <td><a href="#">Edit</a></td>
                                             <td><a href="#"><i class="fa-solid fa-trash-can"></i></a></td>
                                          </tr>
                                          <tr>
                                             <td class="ltn__my-properties-img">
                                                <a href="product-details.php"><img src="img/product-3/7.jpg" alt="#"></a>
                                             </td>
                                             <td>
                                                <div class="ltn__my-properties-info">
                                                   <h6 class="mb-10"><a href="product-details.php">sdfasdfdsfsdafs</a></h6>
                                                   <small><i class="icon-placeholder"></i> Brooklyn, New York, United States</small>
                                                   <div class="product-ratting">
                                                      <ul>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                                         <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>Feb 22, 2022</td>
                                             <td><a href="#">Edit</a></td>
                                             <td><a href="#"><i class="fa-solid fa-trash-can"></i></a></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="ltn__pagination-area text-center">
                                    <div class="ltn__pagination">
                                       <ul>
                                          <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                          <li><a href="#">1</a></li>
                                          <li class="active"><a href="#">2</a></li>
                                          <li><a href="#">3</a></li>
                                          <li><a href="#">...</a></li>
                                          <li><a href="#">10</a></li>
                                          <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="ltn_tab_1_6">
                              <div class="ltn__myaccount-tab-content-inner">
                                 <div class="ltn__my-properties-table table-responsive">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th scope="col">Top Property</th>
                                             <th scope="col"></th>
                                             <th scope="col">Date Added</th>
                                             <th scope="col">Actions</th>
                                             <th scope="col">Delete</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td class="ltn__my-properties-img">
                                                <a href="product-details.php"><img src="img/product-3/2.jpg" alt="#"></a>
                                             </td>
                                             <td>
                                                <div class="ltn__my-properties-info">
                                                   <h6 class="mb-10"><a href="product-details.php">sdfasdfdsfsdafs</a></h6>
                                                   <small><i class="icon-placeholder"></i> Brooklyn, New York, United States</small>
                                                   <div class="product-ratting">
                                                      <ul>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                                         <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>Feb 22, 2022</td>
                                             <td><a href="#">Edit</a></td>
                                             <td><a href="#"><i class="fa-solid fa-trash-can"></i></a></td>
                                          </tr>
                                          <tr>
                                             <td class="ltn__my-properties-img">
                                                <a href="product-details.php"><img src="img/product-3/3.jpg" alt="#"></a>
                                             </td>
                                             <td>
                                                <div class="ltn__my-properties-info">
                                                   <h6 class="mb-10"><a href="product-details.php">sdfasdfdsfsdafs</a></h6>
                                                   <small><i class="icon-placeholder"></i> Brooklyn, New York, United States</small>
                                                   <div class="product-ratting">
                                                      <ul>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                                         <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>Feb 22, 2022</td>
                                             <td><a href="#">Edit</a></td>
                                             <td><a href="#"><i class="fa-solid fa-trash-can"></i></a></td>
                                          </tr>
                                          <tr>
                                             <td class="ltn__my-properties-img">
                                                <a href="product-details.php"><img src="img/product-3/7.jpg" alt="#"></a>
                                             </td>
                                             <td>
                                                <div class="ltn__my-properties-info">
                                                   <h6 class="mb-10"><a href="product-details.php">sdfasdfdsfsdafs</a></h6>
                                                   <small><i class="icon-placeholder"></i> Brooklyn, New York, United States</small>
                                                   <div class="product-ratting">
                                                      <ul>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                         <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                                         <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>Feb 22, 2022</td>
                                             <td><a href="#">Edit</a></td>
                                             <td><a href="#"><i class="fa-solid fa-trash-can"></i></a></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="ltn__pagination-area text-center">
                                    <div class="ltn__pagination">
                                       <ul>
                                          <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                          <li><a href="#">1</a></li>
                                          <li class="active"><a href="#">2</a></li>
                                          <li><a href="#">3</a></li>
                                          <li><a href="#">...</a></li>
                                          <li><a href="#">10</a></li>
                                          <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="ltn_tab_1_9">
                              <div class="ltn__myaccount-tab-content-inner">
                                 <div class="account-login-inner">
                                    <form action="#" class="ltn__form-box contact-form-box">
                                       <h5 class="mb-30">Change Password</h5>
                                       <input type="password" name="password" placeholder="Current Password*">
                                       <input type="password" name="password" placeholder="New Password*">
                                       <input type="password" name="password" placeholder="Confirm New Password*">
                                       <div class="btn-wrapper mt-0">
                                          <button class="theme-btn-1 btn btn-block" type="submit">Save Changes</button>
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
</div>
</div>
<!-- footer start -->
<?php include 'footer.php';?>
<!-- footer end -->