<!-- header start -->
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Caesar&#039;s Kitchen - Caesar&rsquo;s Kitchen - Chef Inspired Frozen Meals</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Caesar&#039;s Kitchen - Caesar&rsquo;s Kitchen - Chef Inspired Frozen Meals">
      <meta name="keywords" content="restaurant,cafe,event.multipurpose,onepage,responsive,minimal,bootstrap,theme">
      <meta name="author" content="">
      <link rel="icon" href="{!!asset('public/assets/images/favicon.png')!!}" type="image/png">
      <!-- CSS Files ===== -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="{!!asset('public/assets/css/bootstrap.css')!!}" type="text/css">
      <link rel="stylesheet" href="{!!asset('public/assets/css/login.css')!!}" type="text/css">
   </head>
   <body>
      <section class="ftco-section">
         <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
               <div class="login-wrap p-4 p-md-5">
                  <div class="icon d-flex align-items-center justify-content-center">
                     <span class="fa fa-user-o"></span>
                  </div>
                  <h3 class="text-center mb-4">Have an account?</h3>
                  <form action="#" class="login-form mt-4">
                     <div class="form-group">
                        <input type="text" class="form-control rounded-left" placeholder="Username" required>
                     </div>
                     <div class="form-group d-flex">
                        <input type="password" class="form-control rounded-left" placeholder="Password" required>
                     </div>
                     <div class="form-group d-md-flex">
                        <div class="w-50">
                           <label class="checkbox-wrap checkbox-primary">Remember Me
                           <input type="checkbox" checked>
                           <span class="checkmark"></span>
                           </label>
                        </div>
                        <div class="w-50 text-md-right">
                           <a href="#"><b>Forgot Password</b></a>
                        </div>
                     </div>
                     <div class="form-group mb-4">
                        <button type="submit" class="btn btn-primary submit p-3 px-5">Sign In Now</button>
                     </div>
                     <p class="text-center"><b>Don't have a account? <a href="{{url('signup')}}">Create One</a></b> </p>
                  </form>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>
<!-- footer end -->