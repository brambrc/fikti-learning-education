@extends('frontend.partials.master')
@section('content')
<!-- Offcanvas Start -->
<div class="offcanvas offcanvas-start" id="offcanvasMenu">

    <div class="offcanvas-header">
        <!-- Offcanvas Logo Start -->
        <div class="offcanvas-logo">
            <a href="index.html"><img src="{{asset('education')}}/assets/images/logo.png" alt=""></a>
        </div>
        <!-- Offcanvas Logo End -->
        <button class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <div class="offcanvas-menu">
            <ul class="main-menu">
                <li>
                    <a class="active" href="#">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home 01</a></li>
                        <li><a class="active" href="index-2.html">Home 02</a></li>
                        <li><a href="index-3.html">Home 03</a></li>
                        <li><a href="index-4.html">Home 04</a></li>
                        <li><a href="index-5.html">Home 05</a></li>
                        <li><a href="index-6.html">Home 06</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About 01</a></li>
                        <li><a href="about-2.html">About 02</a></li>
                        <li><a href="instructor.html">Instructor</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="login-register.html">Login & Register</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Courses</a>
                    <ul class="sub-menu">
                        <li><a href="course-list.html">Course List</a></li>
                        <li><a href="course-grid.html">Course Grid</a></li>
                        <li><a href="course-details.html">Course Details</a></li>
                    </ul>
                </li>
                <li><a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                        <li><a href="blog-list.html">Blog List</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>

</div>
<!-- Offcanvas End -->

<!-- Slider Start -->
<div class="slider-section section bg-color-2">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <!-- Slider Start -->
                <div class="slider-content">
                    <h5 class="sub-title">developed by top teachers</h5>
                    <h2 class="title">Experience a learning platform that take you next level</h2>
                    <p>World-class training and development programs developed by top teachers</p>
                    <a href="#" class="btn btn-primary btn-hover-heading-color">Explore All Courses</a>
                </div>
                <!-- Slider End -->
            </div>

            <div class="col-md-6 col-sm-8">
                <!-- Slider Images Start -->
                <div class="slider-images-02">

                    <div class="image-shape-01 parallaxed">
                        <img src="{{asset('education')}}/assets/images/shape/shape-11.svg" alt="Shape">
                    </div>
                    <div class="image-shape-02 parallaxed"></div>
                    <div class="image-shape-03 parallaxed"></div>

                    <div class="image">
                        <img src="{{asset('education')}}/assets/images/hero-2.png" alt="Hero">
                    </div>
                </div>
                <!-- Slider Images End -->
            </div>
        </div>
    </div>
</div>
<!-- Slider End -->

<!-- Feature Start -->
<div class="section counter-section feature-section">
    <div class="container">
        <!-- Feature Wrapper Start -->
        <div class="feature-wrapper">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">
                    <!-- Feature Counter Start -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="{{asset('education')}}/assets/images/icon-8.png" alt="Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Over 155,000</h4>
                            <p>Video courses on career skills</p>
                        </div>
                    </div>
                    <!-- Feature Counter End -->
                </div>
                <div class="col">
                    <!-- Feature Counter Start -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="{{asset('education')}}/assets/images/icon-9.png" alt="Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Choose from</h4>
                            <p>Top industry instructors </p>
                        </div>
                    </div>
                    <!-- Feature Counter End -->
                </div>
                <div class="col">
                    <!-- Feature Counter Start -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="{{asset('education')}}/assets/images/icon-10.png" alt="Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Lifetime access</h4>
                            <p>On mobile and desktop</p>
                        </div>
                    </div>
                    <!-- Feature Counter End -->
                </div>
            </div>
        </div>
        <!-- Feature Wrapper End -->
    </div>
</div>
<!-- Feature End -->

<!-- Feature Category Start -->
<div class="section section-padding feature-category-section">
    <div class="container">

        <!-- Feature Category Header Start -->
        <div class="feature-category-header">
            <!-- Section Title Start -->
            <div class="section-title">
                <h2 class="title">Featured topics by category</h2>
            </div>
            <!-- Section Title End -->

            <!-- Feature Category Start -->
            <div class="feature-category-btn">
                <a href="#" class="btn btn-outline-primary">Explore More</a>
            </div>
            <!-- Feature Category End -->
        </div>
        <!-- Feature Category Header End -->

        <!-- Feature Category Body Start -->
        <div class="feature-category-body">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="{{asset('education')}}/assets/images/icon-11.png" alt="">
                            <span class="title">Design</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="{{asset('education')}}/assets/images/icon-12.png" alt="">
                            <span class="title">Chemistry</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="{{asset('education')}}/assets/images/icon-13.png" alt="">
                            <span class="title">Technology</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="{{asset('education')}}/assets/images/icon-14.png" alt="">
                            <span class="title">Medical</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="{{asset('education')}}/assets/images/icon-15.png" alt="">
                            <span class="title">Mathmetics</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="{{asset('education')}}/assets/images/icon-16.png" alt="">
                            <span class="title">Food  & Recipe</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="{{asset('education')}}/assets/images/icon-17.png" alt="">
                            <span class="title">Language</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="{{asset('education')}}/assets/images/icon-18.png" alt="">
                            <span class="title">Art & Block</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                </div>
            </div>
        </div>
        <!-- Feature Category Body End -->

    </div>
</div>
<!-- Feature Category End -->

<!-- Courses Start -->
<div class="section section-padding">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h2 class="title"><span>Top Rated</span> Learning Tutorials</h2>
        </div>
        <!-- Section Title End -->

        <!-- Courses Wrapper Start -->
        <div class="courses-wrapper">

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Courses Start -->
                    <div class="single-course">
                        <div class="courses-image">
                            <a href="course-details.html"><img src="{{asset('education')}}/assets/images/courses/courses-1.jpg" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                            <div class="top-meta">
                                <a class="tag" href="#">Beginner</a>
                                <span class="price">
                                <span class="sale-price">Free</span>
                                </span>
                            </div>
                            <h3 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h3>
                            <p class="author-name">Andrew paker</p>
                        </div>
                        <div class="courses-meta">
                            <p class="student"><i class="fa fa-user-o"></i> Student</p>
                            <div class="rating">
                                <div class="rating-star">
                                    <div class="rating-active" style="width: 60%;"></div>
                                </div>
                                <span>(4.5)</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Courses End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Courses Start -->
                    <div class="single-course">
                        <div class="courses-image">
                            <a href="course-details.html"><img src="{{asset('education')}}/assets/images/courses/courses-2.jpg" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                            <div class="top-meta">
                                <a class="tag" href="#">Beginner</a>
                                <span class="price">
                                <span class="sale-price">Free</span>
                                </span>
                            </div>
                            <h3 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h3>
                            <p class="author-name">Andrew paker</p>
                        </div>
                        <div class="courses-meta">
                            <p class="student"><i class="fa fa-user-o"></i> Student</p>
                            <div class="rating">
                                <div class="rating-star">
                                    <div class="rating-active" style="width: 60%;"></div>
                                </div>
                                <span>(4.5)</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Courses End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Courses Start -->
                    <div class="single-course">
                        <div class="courses-image">
                            <a href="course-details.html"><img src="{{asset('education')}}/assets/images/courses/courses-3.jpg" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                            <div class="top-meta">
                                <a class="tag" href="#">Beginner</a>
                                <span class="price">
                                <span class="sale-price">Free</span>
                                </span>
                            </div>
                            <h3 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h3>
                            <p class="author-name">Andrew paker</p>
                        </div>
                        <div class="courses-meta">
                            <p class="student"><i class="fa fa-user-o"></i> Student</p>
                            <div class="rating">
                                <div class="rating-star">
                                    <div class="rating-active" style="width: 60%;"></div>
                                </div>
                                <span>(4.5)</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Courses End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Courses Start -->
                    <div class="single-course">
                        <div class="courses-image">
                            <a href="course-details.html"><img src="{{asset('education')}}/assets/images/courses/courses-4.jpg" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                            <div class="top-meta">
                                <a class="tag" href="#">Beginner</a>
                                <span class="price">
                                <span class="sale-price">Free</span>
                                </span>
                            </div>
                            <h3 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h3>
                            <p class="author-name">Andrew paker</p>
                        </div>
                        <div class="courses-meta">
                            <p class="student"><i class="fa fa-user-o"></i> Student</p>
                            <div class="rating">
                                <div class="rating-star">
                                    <div class="rating-active" style="width: 60%;"></div>
                                </div>
                                <span>(4.5)</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Courses End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Courses Start -->
                    <div class="single-course">
                        <div class="courses-image">
                            <a href="course-details.html"><img src="{{asset('education')}}/assets/images/courses/courses-5.jpg" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                            <div class="top-meta">
                                <a class="tag" href="#">Beginner</a>
                                <span class="price">
                                <span class="sale-price">Free</span>
                                </span>
                            </div>
                            <h3 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h3>
                            <p class="author-name">Andrew paker</p>
                        </div>
                        <div class="courses-meta">
                            <p class="student"><i class="fa fa-user-o"></i> Student</p>
                            <div class="rating">
                                <div class="rating-star">
                                    <div class="rating-active" style="width: 60%;"></div>
                                </div>
                                <span>(4.5)</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Courses End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Courses Start -->
                    <div class="single-course">
                        <div class="courses-image">
                            <a href="course-details.html"><img src="{{asset('education')}}/assets/images/courses/courses-6.jpg" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                            <div class="top-meta">
                                <a class="tag" href="#">Beginner</a>
                                <span class="price">
                                <span class="sale-price">Free</span>
                                </span>
                            </div>
                            <h3 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h3>
                            <p class="author-name">Andrew paker</p>
                        </div>
                        <div class="courses-meta">
                            <p class="student"><i class="fa fa-user-o"></i> Student</p>
                            <div class="rating">
                                <div class="rating-star">
                                    <div class="rating-active" style="width: 60%;"></div>
                                </div>
                                <span>(4.5)</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Courses End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Courses Start -->
                    <div class="single-course">
                        <div class="courses-image">
                            <a href="course-details.html"><img src="{{asset('education')}}/assets/images/courses/courses-7.jpg" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                            <div class="top-meta">
                                <a class="tag" href="#">Beginner</a>
                                <span class="price">
                                <span class="sale-price">Free</span>
                                </span>
                            </div>
                            <h3 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h3>
                            <p class="author-name">Andrew paker</p>
                        </div>
                        <div class="courses-meta">
                            <p class="student"><i class="fa fa-user-o"></i> Student</p>
                            <div class="rating">
                                <div class="rating-star">
                                    <div class="rating-active" style="width: 60%;"></div>
                                </div>
                                <span>(4.5)</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Courses End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Courses Start -->
                    <div class="single-course">
                        <div class="courses-image">
                            <a href="course-details.html"><img src="{{asset('education')}}/assets/images/courses/courses-8.jpg" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                            <div class="top-meta">
                                <a class="tag" href="#">Beginner</a>
                                <span class="price">
                                <span class="sale-price">Free</span>
                                </span>
                            </div>
                            <h3 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h3>
                            <p class="author-name">Andrew paker</p>
                        </div>
                        <div class="courses-meta">
                            <p class="student"><i class="fa fa-user-o"></i> Student</p>
                            <div class="rating">
                                <div class="rating-star">
                                    <div class="rating-active" style="width: 60%;"></div>
                                </div>
                                <span>(4.5)</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Courses End -->
                </div>
            </div>

            <div class="courses-more text-center">
                <a href="#" class="btn btn-primary btn-hover-heading-color">Explore All Courses</a>
            </div>

        </div>
        <!-- Courses Wrapper End -->
    </div>
</div>
<!-- Courses End -->

<!-- Call To Action Start -->
<div class="section bg-color-2 call-to-action-bg">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-6">
                <!-- Call To Action Content Start -->
                <div class="call-to-action-content-02 section-padding">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="title">Thousands of courses <br> authored by industry experts </h2>
                    </div>
                    <!-- Section Title End -->
                    <ul>
                        <li>Get access to 4,000+ of our top courses </li>
                        <li>Popular topics to learn now </li>
                        <li>Find the right instructor for you </li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-hover-heading-color">Get Started Today</a>
                </div>
                <!-- Call To Action Content End -->
            </div>
            <div class="col-md-6">
                <!-- Call To Action Content Start -->
                <div class="call-to-action-images-02 text-center text-lg-end d-none d-md-block">

                    <div class="call-to-images-shape-01"></div>

                    <img class="call-to-images-shape-02 parallaxed" src="{{asset('education')}}/assets/images/shape/shape-12.svg" alt="">

                    <div class="image">
                        <div class="call-to-action-shape-01"></div>
                        <img src="{{asset('education')}}/assets/images/cta-1.png" alt="Call To Action">
                    </div>
                </div>
                <!-- Call To Action Content End -->
            </div>
        </div>
    </div>

    <div class="call-to-action-shape-01">
        <svg id="svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0, 0, 400,370.35681610247025">
            <g id="svgg">
                <path class="shape-path" id="path0" d="M249.954 0.635 C 240.575 3.389,233.929 9.074,230.209 17.528 C 221.671 36.930,201.468 54.980,166.331 74.599 C 150.321 83.539,133.886 91.550,97.896 107.960 C 60.753 124.895,46.948 131.724,33.211 139.957 C 2.314 158.477,-5.531 173.697,7.558 189.731 C 8.181 190.495,11.285 193.759,14.456 196.984 C 38.336 221.280,50.229 238.507,53.680 253.797 C 54.907 259.234,55.006 266.165,53.979 274.748 C 51.984 291.423,54.149 301.599,62.854 316.468 C 72.588 333.095,83.951 343.673,97.896 349.088 C 107.191 352.698,115.551 354.028,136.688 355.260 C 160.933 356.672,172.530 358.640,186.647 363.738 C 199.456 368.363,216.007 367.283,240.657 360.214 C 277.351 349.690,331.341 324.707,386.917 292.536 C 397.502 286.408,398.745 285.641,398.645 285.304 C 398.595 285.134,396.907 276.638,394.895 266.423 C 371.016 145.183,358.578 74.176,357.552 53.239 C 357.423 50.608,357.277 49.322,356.993 48.307 C 352.156 31.013,314.465 7.243,281.287 0.562 L 278.494 0.000 265.276 0.009 L 252.059 0.017 249.954 0.635 " stroke="none" fill-rule="evenodd"></path>
            </g>
        </svg>
    </div>

    <div class="call-to-action-shape-02 animate-05"></div>

    <div class="call-to-action-shape-03 "></div>
</div>
<!-- Call To Action End -->

<!-- Free Courses Start -->
<div class="section section-padding-02">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h2 class="title">Free Certificaation Lessons</h2>
        </div>
        <!-- Section Title End -->

        <!-- Free Courses Start -->
        <div class="courses-wrapper">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Free Course Start -->
                    <div class="single-free-course">
                        <div class="course-images">
                            <img src="{{asset('education')}}/assets/images/free-course-1.jpg" alt="Course">
                        </div>
                        <div class="course-content">
                            <a href="https://youtu.be/cdZHQFCqK3g" class="play videoLightbox"><i class="fa fa-play"></i></a>
                            <h4 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h4>
                        </div>
                    </div>
                    <!-- Single Free Course End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Free Course Start -->
                    <div class="single-free-course">
                        <div class="course-images">
                            <img src="{{asset('education')}}/assets/images/free-course-2.jpg" alt="Course">
                        </div>
                        <div class="course-content">
                            <a href="https://youtu.be/cdZHQFCqK3g" class="play videoLightbox"><i class="fa fa-play"></i></a>
                            <h4 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h4>
                        </div>
                    </div>
                    <!-- Single Free Course End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Free Course Start -->
                    <div class="single-free-course">
                        <div class="course-images">
                            <img src="{{asset('education')}}/assets/images/free-course-3.jpg" alt="Course">
                        </div>
                        <div class="course-content">
                            <a href="https://youtu.be/cdZHQFCqK3g" class="play videoLightbox"><i class="fa fa-play"></i></a>
                            <h4 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h4>
                        </div>
                    </div>
                    <!-- Single Free Course End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Free Course Start -->
                    <div class="single-free-course">
                        <div class="course-images">
                            <img src="{{asset('education')}}/assets/images/free-course-4.jpg" alt="Course">
                        </div>
                        <div class="course-content">
                            <a href="https://youtu.be/cdZHQFCqK3g" class="play videoLightbox"><i class="fa fa-play"></i></a>
                            <h4 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h4>
                        </div>
                    </div>
                    <!-- Single Free Course End -->
                </div>
            </div>
        </div>
        <!-- Free Courses End -->
    </div>
</div>
<!-- Free Courses End -->

<!-- Testimonial End -->
<div class="section section-padding-02">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h2 class="title">Free Certificaation Lessons</h2>
        </div>
        <!-- Section Title End -->
    </div>

    <div class="testimonial-wrapper-02 testimonial-active-02">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- Single Testimonial Start -->
                    <div class="single-testimonial-02">
                        <div class="testimonial-thumb">
                            <img src="{{asset('education')}}/assets/images/author-4.jpg" alt="Author">
                        </div>
                        <div class="testimonial-text">
                            <p>World-class training and development programs developed by top teachers Connect Fellow to the tools you love.</p>
                        </div>
                        <div class="testimonial-meta">
                            <div class="testimonial-quote">
                                <i class="flaticon-left-quotes-sign"></i>
                            </div>
                            <div class="meta-content">
                                <h5 class="name">Martney Holder</h5>
                                <p class="designation">IT Specailist</p>
                            </div>
                        </div>

                    </div>
                    <!-- Single Testimonial End -->
                </div>
                <div class="swiper-slide">
                    <!-- Single Testimonial Start -->
                    <div class="single-testimonial-02">
                        <div class="testimonial-thumb">
                            <img src="{{asset('education')}}/assets/images/author-5.jpg" alt="Author">
                        </div>
                        <div class="testimonial-text">
                            <p>World-class training and development programs developed by top teachers Connect Fellow to the tools you love.</p>
                        </div>
                        <div class="testimonial-meta">
                            <div class="testimonial-quote">
                                <i class="flaticon-left-quotes-sign"></i>
                            </div>
                            <div class="meta-content">
                                <h5 class="name">Martney Holder</h5>
                                <p class="designation">IT Specailist</p>
                            </div>
                        </div>

                    </div>
                    <!-- Single Testimonial End -->
                </div>
                <div class="swiper-slide">
                    <!-- Single Testimonial Start -->
                    <div class="single-testimonial-02">
                        <div class="testimonial-thumb">
                            <img src="{{asset('education')}}/assets/images/author-1.jpg" alt="Author">
                        </div>
                        <div class="testimonial-text">
                            <p>World-class training and development programs developed by top teachers Connect Fellow to the tools you love.</p>
                        </div>
                        <div class="testimonial-meta">
                            <div class="testimonial-quote">
                                <i class="flaticon-left-quotes-sign"></i>
                            </div>
                            <div class="meta-content">
                                <h5 class="name">Martney Holder</h5>
                                <p class="designation">IT Specailist</p>
                            </div>
                        </div>

                    </div>
                    <!-- Single Testimonial End -->
                </div>
                <div class="swiper-slide">
                    <!-- Single Testimonial Start -->
                    <div class="single-testimonial-02">
                        <div class="testimonial-thumb">
                            <img src="{{asset('education')}}/assets/images/author-2.jpg" alt="Author">
                        </div>
                        <div class="testimonial-text">
                            <p>World-class training and development programs developed by top teachers Connect Fellow to the tools you love.</p>
                        </div>
                        <div class="testimonial-meta">
                            <div class="testimonial-quote">
                                <i class="flaticon-left-quotes-sign"></i>
                            </div>
                            <div class="meta-content">
                                <h5 class="name">Martney Holder</h5>
                                <p class="designation">IT Specailist</p>
                            </div>
                        </div>

                    </div>
                    <!-- Single Testimonial End -->
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Brand Logo End -->
<div class="section">
    <div class="container">
        <!-- Brand Wrapper End -->
        <div class="brand-wrapper section-padding text-center border-0">
            <h3 class="brand-title">We collaborate with <span>200+</span> Leading universities & companies </h3>

            <div class="brand-active">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Single Brand Start -->
                        <div class="swiper-slide single-brand">
                            <img src="{{asset('education')}}/assets/images/brand/brand-1.png" alt="Brand">
                        </div>
                        <!-- Single Brand End -->
                        <!-- Single Brand Start -->
                        <div class="swiper-slide single-brand">
                            <img src="{{asset('education')}}/assets/images/brand/brand-2.png" alt="Brand">
                        </div>
                        <!-- Single Brand End -->
                        <!-- Single Brand Start -->
                        <div class="swiper-slide single-brand">
                            <img src="{{asset('education')}}/assets/images/brand/brand-3.png" alt="Brand">
                        </div>
                        <!-- Single Brand End -->
                        <!-- Single Brand Start -->
                        <div class="swiper-slide single-brand">
                            <img src="{{asset('education')}}/assets/images/brand/brand-4.png" alt="Brand">
                        </div>
                        <!-- Single Brand End -->
                        <!-- Single Brand Start -->
                        <div class="swiper-slide single-brand">
                            <img src="{{asset('education')}}/assets/images/brand/brand-5.png" alt="Brand">
                        </div>
                        <!-- Single Brand End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Wrapper End -->
    </div>
</div>
<!-- Brand Logo End -->
@endsection