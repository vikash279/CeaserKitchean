@extends('layout.masterstore')

@section('title', 'Cart Page')

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
            <h1>My Cart</h1>
            <h2><span>CART</span></h2>
         </div>
      </div>
   </div>
</section>
<!-- subheader close -->
<!-- content begin -->

<div  id="content" class="cart-area pd-bottom-65">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Product</th>
                                    <th scope="col"></th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th class="text-left" colspan="2">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><img src="{!!asset('public/assets/images/menu/beef-three-cheese-bolognese.png')!!}" alt="img"></th>
                                    <td colspan="2" class="item-name"><a href="#">Young Star Smart Watch in Fashion</a>
                                    </td>
                                    <td class="price">$30.00</td>
                                    <td class="table-quantity">
                                        <form>
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus">
                                                <input type="number" class="input-text qty text" step="1" min="1" max="10000" name="quantity" value="1">
                                                <input type="button" value="+" class="plus">
                                            </div>
                                        </form>
                                    </td>
                                    <td>$30.00</td>
                                    <td><a href="#"><i class="fa fa-close"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><img src="{!!asset('public/assets/images/menu/beef-three-cheese-bolognese.png')!!}" alt="img"></th>
                                    <td colspan="2" class="item-name"><a href="#">Young Star Smart Shoe in Fashion</a></td>
                                    <td class="price">$30.00</td>
                                    <td class="table-quantity">
                                        <form>
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus">
                                                <input type="number" class="input-text qty text" step="1" min="1" max="10000" name="quantity" value="1">
                                                <input type="button" value="+" class="plus">
                                            </div>
                                        </form>
                                    </td>
                                    <td>$30.00</td>
                                    <td><a href="#"><i class="fa fa-close"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><img src="{!!asset('public/assets/images/menu/beef-three-cheese-bolognese.png')!!}" alt="img"></th>
                                    <td colspan="2" class="item-name"><a href="#">Young Star Smart Shoe in Fashion</a></td>
                                    <td class="price">$30.00</td>
                                    <td class="table-quantity">
                                        <form>
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus">
                                                <input type="number" class="input-text qty text" step="1" min="1" max="10000" name="quantity" value="1">
                                                <input type="button" value="+" class="plus">
                                            </div>
                                        </form>
                                    </td>
                                    <td>$30.00</td>
                                    <td><a href="#"><i class="fa fa-close"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-btn">
                        <input class="code-input single-input text-center" placeholder="Promotion Code" type="password">
                        <a class="btn btn-black" href="#">APPLY</a>
                        <a class="btn btn-border float-sm-right" href="#">Update Cart</a>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="order-summary">
                                <h5 class="title">ORDER SUMMARY</h5>
                                <div class="subtotal">
                                    <span>Subtotal:</span>
                                    <span class="float-right">$30.00</span>
                                </div>
                                <div class="subtotal">
                                    <span>Shipping Cost:</span>
                                    <span class="float-right">$10.00</span>
                                </div>
                                <div class="total">
                                    <span>Total:</span>
                                    <span class="float-right">$40.00</span>
                                </div>
                                <a class="btn-solid rounded" href="{{url('checkout')}}">PROCEED TO CHECKOUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection