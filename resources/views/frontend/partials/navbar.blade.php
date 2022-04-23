<!-- Header Start  -->
<div id="header" class="header section">
    <div class="container">

        <!-- Header Wrapper Start  -->
        <div class="header-wrapper">

            <!-- Header Logo Start -->
            <div class="header-logo">
                <a href="index.html"><img src="{{asset('education')}}/assets/images/logo.png" alt=""></a>
            </div>
            <!-- Header Logo End -->

            <!-- Header Menu Start -->
            <div class="header-menu d-none d-lg-block">
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
            <!-- Header Menu End -->

            <!-- Header Meta Start -->
            <div class="header-meta">

                <div class="header-search d-none d-lg-block">
                    <form action="#">
                        <input type="text" placeholder="Search Courses">
                        <button><i class="flaticon-loupe"></i></button>
                    </form>
                </div>

                <div class="header-cart dropdown">
                    <button class="cart-btn" data-bs-toggle="dropdown">
                        <i class="flaticon-shopping-cart"></i>
                        <span class="count">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-cart">
                        <!-- Cart Items Start -->
                        <div class="cart-items">
                            <!-- Single Cart Item Start -->
                            <div class="single-cart-item">
                                <div class="item-image">
                                    <img src="{{asset('education')}}/assets/images/shop-cart-1.jpg" alt="Cart">
                                </div>
                                <div class="item-content">
                                    <h4 class="title"><a href="#">Smart Gear Watch</a></h4>
                                    <span class="quantity"> 2 x $59.99 </span>
                                </div>
                                <button class="btn-close"></button>
                            </div>
                            <!-- Single Cart Item End -->
                            <!-- Single Cart Item Start -->
                            <div class="single-cart-item">
                                <div class="item-image">
                                    <img src="{{asset('education')}}/assets/images/shop-cart-2.jpg" alt="Cart">
                                </div>
                                <div class="item-content">
                                    <h4 class="title"><a href="#">Smart Gear Watch</a></h4>
                                    <span class="quantity"> 2 x $59.99 </span>
                                </div>
                                <button class="btn-close"></button>
                            </div>
                            <!-- Single Cart Item End -->
                            <!-- Single Cart Item Start -->
                            <div class="single-cart-item">
                                <div class="item-image">
                                    <img src="{{asset('education')}}/assets/images/shop-cart-3.jpg" alt="Cart">
                                </div>
                                <div class="item-content">
                                    <h4 class="title"><a href="#">Smart Gear Watch</a></h4>
                                    <span class="quantity"> 2 x $59.99 </span>
                                </div>
                                <button class="btn-close"></button>
                            </div>
                            <!-- Single Cart Item End -->
                        </div>
                        <!-- Cart Items End -->

                        <!-- Cart Total Start -->
                        <div class="cart-total">
                            <span class="label">Subtotal:</span>
                            <span class="value">$229.95</span>
                        </div>
                        <!-- Cart Total End -->

                        <!-- Cart Button Start -->
                        <div class="cart-btns">
                            <a href="#" class="btn btn-primary btn-hover-white">View Cart</a>
                            <a href="#" class="btn btn-white btn-hover-primary">Checkout</a>
                        </div>
                        <!-- Cart Button End -->
                    </div>
                </div>

                <div class="header-login d-none d-lg-flex">
                    <a class="link" href="login-register.html"><i class="fa fa-user-o"></i> Login</a>
                    <a class="link" href="login-register.html">Register</a>
                </div>

                <div class="header-toggle d-lg-none">
                    <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

            </div>
            <!-- Header Meta End -->

        </div>
        <!-- Header Wrapper End -->

    </div>
</div>
<!-- Header End -->