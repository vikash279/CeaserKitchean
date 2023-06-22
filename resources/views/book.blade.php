
        @extends('layout.masterstore')

        @section('title', 'Book Page')

        @section('content')

        <!-- subheader -->
        <section id="subheader" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Book</h1>
                        <h2><span>Make a Reservation</span></h2>

                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center middle">


                            <h2>We're Open<span class="teaser">Everyday!</span></h2>
                            <p>
                                Monday - Friday<br>
                                <strong>08.00 - 21.00</strong>
                            </p>
                            <span class="small-border"></span>
                            <p>
                                Saturday &amp Sunday<br>
                                <strong>10.00 - 23.00</strong>
                            </p>

                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </section>

            <section id="section-book-form" class="no-top" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="col-md-6 col-md-offset-3">
                        <div data-bgcolor="#18181d" class="padding60 text-center text-light mt-50 mb-50 shadow-soft wow fadeInUp">

                            <div class="row">
                                <form name="contactForm" id='contact_form' method="post" action='https://www.designesia.com/themes/delizus/reservation.php'>
                                    <div class="col-md-4 mb10">
                                        <input type='text' name='date' id='date' class="form-control" placeholder="Date">
                                    </div>
                                    <div class="col-md-4 mb10">
                                        <input type='text' name='time' id='time' class="form-control" placeholder="Time">
                                    </div>
                                    <div class="col-md-4 mb10">
                                        <input type='text' name='person' id='person' class="form-control" placeholder="Person">
                                    </div>
                                    <div class="col-md-6 mb10">
                                        <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6 mb10">
                                        <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-md-12 mb10">
                                        <textarea name='message' id='message' class="form-control" placeholder="Any Message?"></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div id='submit'>
                                            <input type='submit' id='send_message' value='Submit Form' class="btn-solid rounded">
                                        </div>
                                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="spacer-single"></div>

                </div>
            </section>

        </div>
    </div>

    @endsection