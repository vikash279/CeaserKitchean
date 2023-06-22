<!DOCTYPE html>
<html lang="en">
       @extends('layout.master')

       @section('title', 'Event Page')

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
                        <h1>MEDIA</h1>
                        <h2><span>Who We Are</span></h2>

                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row article-list gallery_view">
                    <div class="masonry">
                        <div class="col-md-4 mb30 item">
                            <figure class="pic-hover mb10">
                                <span class="center-xy">
                                    <a href="#">
                                        <i class="fa fa-link btn-action btn-action-hide"></i>
                                    </a>
                                </span>
                                <span class="bg-overlay"></span>
                                <img src="{!!asset('public/assets/images/events/1.jpg')!!}" alt="" class="img-responsive">
                            </figure>
                            <div class="post-content">

                                <div class="post-text">
                                    <h3><a href="{{url('index')}}">Barbeque Party</a></h3>
                                    <div class="date-time"><span class="date">20 April 2015</span><span class="time">12:00 - 13:30</span></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 mb30 item">
                            <figure class="pic-hover mb10">
                                <span class="center-xy">
                                    <a href="#">
                                        <i class="fa fa-link btn-action btn-action-hide"></i>
                                    </a>
                                </span>
                                <span class="bg-overlay"></span>
                                <img src="{!!asset('public/assets/images/events/2.jpg')!!}" alt="" class="img-responsive">
                            </figure>
                            <div class="post-content">

                                <div class="post-text">
                                    <h3><a href="{{url('index')}}">Friday Jazz</a></h3>
                                    <div class="date-time"><span class="date">20 April 2015</span><span class="time">12:00 - 13:30</span></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 mb30 item">
                            <figure class="pic-hover mb10">
                                <span class="center-xy">
                                    <a href="#">
                                        <i class="fa fa-link btn-action btn-action-hide"></i>
                                    </a>
                                </span>
                                <span class="bg-overlay"></span>
                                <img src="{!!asset('public/assets/images/events/3.jpg')!!}" alt="" class="img-responsive">
                            </figure>
                            <div class="post-content">

                                <div class="post-text">
                                    <h3><a href="{{url('index')}}">Romantic Dinner</a></h3>
                                    <div class="date-time"><span class="date">20 April 2015</span><span class="time">12:00 - 13:30</span></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 mb30 item">
                            <figure class="pic-hover mb10">
                                <span class="center-xy">
                                    <a href="#">
                                        <i class="fa fa-link btn-action btn-action-hide"></i>
                                    </a>
                                </span>
                                <img src="{!!asset('public/assets/images/events/3.jpg')!!}" alt="" class="img-responsive">
                                <span class="bg-overlay"></span>
                            </figure>

                            <div class="post-text">
                                <h3><a href="{{url('index')}}">Romantic Dinner</a></h3>
                                <div class="date-time"><span class="date">20 April 2015</span><span class="time">12:00 - 13:30</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>

                        </div>

                        <div class="col-md-4 mb30 item">
                            <figure class="pic-hover mb10">
                                <span class="center-xy">
                                    <a href="#">
                                        <i class="fa fa-link btn-action btn-action-hide"></i>
                                    </a>
                                </span>
                                <span class="bg-overlay"></span>
                                <img src="{!!asset('public/assets/images/events/1.jpg')!!}" alt="" class="img-responsive">
                            </figure>
                            <div class="post-content">

                                <div class="post-text">
                                    <h3><a href="{{url('index')}}">Barbeque Party</a></h3>
                                    <div class="date-time"><span class="date">20 April 2015</span><span class="time">12:00 - 13:30</span></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 mb30 item">
                            <figure class="pic-hover mb10">
                                <span class="center-xy">
                                    <a href="#">
                                        <i class="fa fa-link btn-action btn-action-hide"></i>
                                    </a>
                                </span>
                                <span class="bg-overlay"></span>
                                <img src="{!!asset('public/assets/images/events/2.jpg')!!}" alt="" class="img-responsive">
                            </figure>

                            <div class="post-text">
                                <h3><a href="{{url('index')}}">Friday Jazz</a></h3>
                                <div class="date-time"><span class="date">20 April 2015</span><span class="time">12:00 - 13:30</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>

    @endsection