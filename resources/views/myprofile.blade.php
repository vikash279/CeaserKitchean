@extends('layout.masterstore')

@section('title', 'My Profile Page')

@section('content')
<style>
    #subheader {
        <?php if ($banner==null) {
            ?>background: url(./public/assets/images/background/subheader-6.jpg) top fixed;
            <?php
        }

        else {
            ?>background: url(<?php echo env('MEDIA_URL').$banner[0]['image'] ?>) top fixed;
            <?php
        }

        ?>
    }

</style>
<!-- subheader -->
<section id="subheader" data-speed="8" data-type="background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>My Profile</h1>
                <h2><span>My &amp; Account</span></h2>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->
<!-- content begin -->
<div id="content">
    <div class="container myprofile">
        <div class="col-md-3">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'dashboard')" id="defaultOpen">Dashboard <i
                        class="fa fa-home"></i></button>
                <button class="tablinks" onclick="openCity(event, 'address')">Address <i
                        class="fa fa-map-marker"></i></button>
                <button class="tablinks" onclick="openCity(event, 'myorder')">My Order's <i
                        class="fa fa-shopping-bag"></i></button>
                <button class="tablinks" onclick="openCity(event, 'accountdetails')">Account Details <i
                        class="fa fa-user"></i></button>
                <button class="tablinks" onclick="openCity(event, 'changepassword')">Change Password <i
                        class="fa fa-lock"></i></button>
                <a href="{{ url('logout') }}"><button class="tablinks" style="color: #ca8e46;">Logout
                        <i class="fa fa-sign-out flot-right"></i></button></a>
            </div>
        </div>
        <div class="col-md-9">
            <div id="dashboard" class="tabcontent">
                <div class="contact-form-box">
                    <div class="dashboard-user-name">
                        <h1 class="mb-30 text-left">My Dashboard</h1>
                        <h6 class="text-content web-text-color">Hello, <b class="text-title">Vicki E. Pope</b></h6>
                        <p class="text-content">From your My Account Dashboard you have the ability to
                            view a snapshot of your recent account activity and update your account
                            information. Select a link below to view or edit information.
                        </p>
                    </div>
                </div>
            </div>
            <div id="address" class="tabcontent">
                <div class="contact-form-box">
                    <h1 class="mb-30 text-left">Your Address</h1>
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
            <div id="myorder" class="tabcontent">
                <div class="contact-form-box">
                    <h1 class="mb-30 text-left">My Order</h1>
                    <div class="product-order-detail">
                        <a href="#" class="order-image">
                            <img src="{!!asset('public/assets/images/menu/beef-three-cheese-bolognese-300x257.png')!!}"
                                class="blur-up lazyloaded" alt="">
                        </a>
                        <div class="order-wrap">
                            <div class="order-container">
                                <div class="order-detail">
                                    <h4 class="panding">Delivere <span>Panding</span></h4>
                                </div>
                            </div>
                            <a href="#">
                                <h3>Young Star Smart Watch in Fashion</h3>
                            </a>
                            <p class="text-content">Cheddar dolcelatte gouda. Macaroni cheese
                                cheese strings feta halloumi cottage cheese jarlsberg cheese
                                triangles say cheese.
                            </p>
                            <ul class="product-size">
                                <li>
                                    <div class="size-box">
                                        <h6 class="text-content">Price : </h6>
                                        <h5>$30.00</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="size-box">
                                        <h6 class="text-content">Quantity : </h6>
                                        <h5>250 G</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="product-order-detail">
                        <a href="#" class="order-image">
                            <img src="{!!asset('public/assets/images/menu/beef-three-cheese-bolognese-300x257.png')!!}"
                                class="blur-up lazyloaded" alt="">
                        </a>
                        <div class="order-wrap">
                            <div class="order-container">
                                <div class="order-detail">
                                    <h4 class="succes">Delivere <span>Panding</span></h4>
                                </div>
                            </div>
                            <a href="#">
                                <h3>Young Star Smart Watch in Fashion</h3>
                            </a>
                            <p class="text-content">Cheddar dolcelatte gouda. Macaroni cheese
                                cheese strings feta halloumi cottage cheese jarlsberg cheese
                                triangles say cheese.
                            </p>
                            <ul class="product-size">
                                <li>
                                    <div class="size-box">
                                        <h6 class="text-content">Price : </h6>
                                        <h5>$30.00</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="size-box">
                                        <h6 class="text-content">Quantity : </h6>
                                        <h5>250 G</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="accountdetails" class="tabcontent">
                <div class="contact-form-box">
                    <h1 class="mb-30 text-left">Profile About &nbsp; <small><a href="#">edit</a></small></h1>
                    <div class="accountdetailstable table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Gender :</td>
                                    <td>Female</td>
                                </tr>
                                <tr>
                                    <td>Birthday :</td>
                                    <td>21/05/1997</td>
                                </tr>
                                <tr>
                                    <td>Phone Number :</td>
                                    <td>
                                        <a href="javascript:void(0)"> +91 846 - 547 -
                                            210</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Address :</td>
                                    <td>549 Sulphur Springs Road, Downers, IL</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="changepassword" class="tabcontent">
                <div class="contact-form-box">
                    <form action="#">
                        <h1 class="mb-30 text-left">Change Password</h1>
                        <input type="password" name="password" placeholder="Current Password*" aria-autocomplete="list">
                        <input type="password" name="password" placeholder="New Password*">
                        <input type="password" name="password" placeholder="Confirm New Password*">
                        <div class="btn-wrapper mt-0">
                            <button class="btn-solid rounded" type="submit">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- footer start -->
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

</script>
@endsection
