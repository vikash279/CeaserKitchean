       @extends('layout.master')

       @section('title', 'Blog Page')

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
                        <h1>Blog</h1>
                        <h2><span>Latest From Us</span></h2>

                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <ul class="blog-list">
                        <?php foreach($blogdetails as $val){ ?>    
                            <li>
                                <div class="post-content">
                                    <div class="post-image">
                                        <img src="{{env('MEDIA_URL').$val['blog_image']}}" alt="" />
                                    </div>


                                    <div class="date-box">
                                        <div class="day">{{date('d', strtotime($val['created_at']));}}</div>
                                        <div class="month">{{date('M', strtotime($val['created_at']))}}</div>
                                    </div>

                                    <div class="post-text">
                                        <h3><a href="{{url('menu')}}">{{$val['blog_title']}}</a></h3>
                                        <p>{{$val['blog_description']}}</p>
                                    </div>

                                    <!--<a href="#" class="btn-more">Read More</a>-->
                                </div>
                            </li>
                           <?php } ?>

                        </ul>

                        <!--<div class="text-center">-->
                        <!--    <ul class="pagination">-->
                        <!--        <li><a href="#">Prev</a></li>-->
                        <!--        <li class="active"><a href="#">1</a></li>-->
                        <!--        <li><a href="#">2</a></li>-->
                        <!--        <li><a href="#">3</a></li>-->
                        <!--        <li><a href="#">4</a></li>-->
                        <!--        <li><a href="#">5</a></li>-->
                        <!--        <li><a href="#">Next</a></li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>

                    <div id="sidebar" class="col-md-3">
                        <div class="widget widget-post">
                            <h4>Recent Posts</h4>
                            <div class="small-border"></div>
                            <ul>
                                <?php foreach($blogdetails as $value){ ?> 
                                <li><span class="post-date">{{date('d-M', strtotime($value['created_at']))}}</span><a href="#">{{$value['blog_title']}}</a></li>
                               <?php } ?>
                            </ul>
                        </div>

                        <!--<div class="widget widget-text">-->
                        <!--    <h4>About Us</h4>-->
                        <!--    <div class="small-border"></div>-->
                        <!--    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni                    -->
                        <!--</div>-->
                        <!--<div class="widget widget_tags">-->
                        <!--    <h4>Tags</h4>-->
                        <!--    <div class="small-border"></div>-->
                        <!--    <ul>-->
                        <!--        <li><a href="#link">Art</a></li>-->
                        <!--        <li><a href="#link">Application</a></li>-->
                        <!--        <li><a href="#link">Design</a></li>-->
                        <!--        <li><a href="#link">Entertainment</a></li>-->
                        <!--        <li><a href="#link">Internet</a></li>-->
                        <!--        <li><a href="#link">Marketing</a></li>-->
                        <!--        <li><a href="#link">Multipurpose</a></li>-->
                        <!--        <li><a href="#link">Music</a></li>-->
                        <!--        <li><a href="#link">Print</a></li>-->
                        <!--        <li><a href="#link">Programming</a></li>-->
                        <!--        <li><a href="#link">Responsive</a></li>-->
                        <!--        <li><a href="#link">Website</a></li>-->
                        <!--    </ul>-->
                        <!--</div>-->

                    </div>
                </div>
            </div>
        </div>

        @endsection