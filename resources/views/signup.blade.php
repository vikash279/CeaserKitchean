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
                    <h3 class="text-center mb-4">Create a account?</h3>
                    @if($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ url('dosignup') }}" method="post" enctype="multipart/form-data"
                        class="login-form mt-4">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control rounded-left" name="name" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control rounded-left" name="phone"
                                placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control rounded-left" id="email" name="email"
                                placeholder="Email" onchange="validateEmail()" required>
                        </div>
                        <div class="form-group d-flex">
                            <input type="password" class="form-control rounded-left" id="password" name="password"
                                placeholder="Password" required>
                        </div>
                        <div class="form-group d-flex">
                            <input type="password" class="form-control rounded-left" id="confirm_password"
                                name="confirm_password" onchange="validatePasswords()" placeholder="Confirm Password"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control rounded-left" name="address" placeholder="Address">
                        </div>
                        <!-- <div class="form-group d-md-flex">
                            <div class="">
                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div> -->
                        <div class="form-group mb-4">
                            <button type="submit" class="btn btn-primary submit p-3 px-5">Sign Up Now</button>
                        </div>
                        <p class="text-center"><b>You are a member? <a
                                    href="{{ url('login') }}">Login</a></b> </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        function validateEmail() {
            var emailInput = document.getElementById('email');
            var email = emailInput.value;
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (emailPattern.test(email)) {
                document.querySelector('.submit').removeAttribute('disabled');
                // alert('Email is valid!');
            } else {
                document.querySelector('.submit').setAttribute('disabled', 'disabled');
                alert('Invalid email!');
            }
        }

        function validatePasswords() {
            var passwordInput = document.getElementById('password');
            var confirmPasswordInput = document.getElementById('confirm_password');

            var password = passwordInput.value;
            var confirmPassword = confirmPasswordInput.value;

            if (password === confirmPassword) {
                document.querySelector('.submit').removeAttribute('disabled');
                // alert('Passwords match!');
            } else {
                document.querySelector('.submit').setAttribute('disabled', 'disabled');
                alert('Passwords do not match!');
            }
        }

    </script>
</body>

</html>
<!-- footer end -->
