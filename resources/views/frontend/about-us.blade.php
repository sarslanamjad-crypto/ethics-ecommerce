@extends('frontend.layout.app')

@section('content')
    <!-- hearder section strats here -->
    <header class="header-area header1">
        <div class="header-logo">
            <a href="/"><img alt="image" class="img-fluid" src="assets/image/ethics-logo.svg"></a>
        </div>
        <div class="main-menu">
            <div class="mobile-menu-logo">
                <a href="/"><img alt="image" class="img-fluid" src="assets/image/ethics-logo-dark.svg"></a>
            </div>
            <ul class="menu-list">
                <li class="menu-item-has-children active">
                    <a href="/">HOME </a>
                </li>
                <li><a href="/">MEN</a></li>
                <li><a href="/">WOMEN</a></li>
                <li><a href="/">KIDS</a></li>
                <li><a href="about-us">About Us</a></li>
                <li><a href="faq">FAQ's</a></li>
                <li><a href="cart-page">My Cart</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="my-account">My Account</a></li>
            </ul>
            <div class="d-xl-none d-block">
                <div class="mobile-search-area mb-30">
                    <form>
                        <div class="form-inner">
                            <input type="text" placeholder="Enter your keywords">
                            <button type="submit" class="primary-btn">Search Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="nav-right">
            <ul>
                <li>
                    <div class="search-bar d-xl-flex d-none">
                        <div class="search-btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.20349 1.44849C6.41514 1.45148 4.70089 2.16323 3.43633 3.42779C2.17178 4.69235 1.46003 6.40659 1.45703 8.19494C1.45853 9.9848 2.16943 11.7011 3.43399 12.9678C4.69855 14.2345 6.41364 14.9482 8.20349 14.9527C9.79089 14.9527 11.2536 14.3943 12.4101 13.4702L16.0578 17.1182C16.2002 17.2505 16.3882 17.3225 16.5825 17.3191C16.7768 17.3157 16.9622 17.2372 17.0998 17.0999C17.2374 16.9627 17.3165 16.7775 17.3204 16.5832C17.3243 16.3889 17.2528 16.2007 17.1208 16.058L13.4731 12.4072C14.4325 11.214 14.9556 9.72887 14.9556 8.19778C14.9556 4.47872 11.9225 1.44849 8.20349 1.44849ZM8.20349 2.95085C11.1118 2.95085 13.4533 5.28943 13.4533 8.19494C13.4533 11.1005 11.1118 13.4532 8.20349 13.4532C5.29514 13.4532 2.95656 11.109 2.95656 8.20061C2.95656 5.29227 5.29514 2.95085 8.20349 2.95085Z" />
                            </svg>
                        </div>
                        <div class="search-input">
                            <div class="serch-close"></div>
                            <form>
                                <div class="search-group">
                                    <div class="form-inner2">
                                        <input type="text" placeholder="Enter your keywords">
                                        <button type="submit"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>
                                <div class="quick-search">
                                    <ul>
                                        <li>Quick Search :</li>
                                        <li><a href="services-01">Classic Haircut,</a></li>
                                        <li><a href="services-01">Coloring Services,</a></li>
                                        <li><a href="services-01">Hair Extensions,</a></li>
                                        <li><a href="services-01">Specialty Services,</a></li>
                                        <li><a href="services-01">Haircuts and Styling,</a></li>
                                        <li><a href="services-01">Men's Grooming,</a></li>
                                        <li><a href="services-01">Makeover Package,</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>

            </ul>
            <div class="sidebar-button mobile-menu-btn ">
                <span></span>
            </div>
        </div>
    </header>
    <!-- hearder section ends here -->
    <!-- breadcrumb section strats here -->
    <div class="breadcrumb-section mb-100"
        style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url(assets/image/inner-page/breadcrumb-image3.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="banner-content style-2 text-center">
                        <h1>About us</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="/">Home</a></li>
                            <li><span>/ </span>About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb section ends here -->
    <!-- About us video section strats here -->
    <div class="video-section mb-60 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-section-image">
                        <img src="assets/image/inner-page/video-image.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=MLpWrANjFbI" class="video-area video-player">
                            <div class="icon">
                                <svg class="video-circle" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px"
                                    viewBox="0 0 206 206" style="enable-background:new 0 0 206 206;" xml:space="preserve">
                                    <circle class="circle" stroke-miterlimit="10" cx="103" cy="103" r="100"></circle>
                                    <path class="circle-half top-half" stroke-width="4" stroke-miterlimit="10"
                                        d="M16.4,53C44,5.2,105.2-11.2,153,16.4s64.2,88.8,36.6,136.6"></path>
                                    <path class="circle-half bottom-half" stroke-width="4" stroke-miterlimit="10"
                                        d="M189.6,153C162,200.8,100.8,217.2,53,189.6S-11.2,100.8,16.4,53"></path>
                                </svg>
                                <i class="bi bi-play"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About us video section ends here -->
    <!-- our brand section strats here -->
    <div class="our-brand-section mb-100 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-brand-content text-center">
                        <h2>Welcome to Ethics, where style meets innovation</h2>
                        <p>Founded in 2010, Ethics emerged from a passion for fashion and a desire bring unique, high-quality clothing to the forefront of the e-commerce world. Our journey began with a simple mission: to make fashion accessible, exciting, and inclusive for everyone. What started as a small collection has blossomed into a diverse and expansive range of apparel, accessories, and footwear, all meticulously curated to help you express your unique style.Founded in 2010, Ethics emerged from a passion for fashion and a desire
                            to bring unique, high-quality clothing to the forefront of the e-commerce world. Our journey
                            began with a simple mission: to make fashion accessible, exciting, and inclusive for
                            everyone. What started as a small collection has blossomed into a diverse and expansive
                            range of apparel, accessories, and footwear, all meticulously help you express
                            your unique style.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our brand section ends here -->
    <!-- our value section strats here -->
    <div class="our-value-section mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="our-value-image">
                        <img src="assets/image/inner-page/our-value-image.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center wow animate fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="value-content">
                        <h3>Our Values</h3>
                        <ul>
                            <li>1.Quality: We source the finest materials and partner with skilled artisans to create
                                products
                                that stand the test of time.</li>
                            <li> 2.Sustainability: We are dedicated to promoting a more sustainable fashion industry.
                            </li>
                            <li> 3.Inclusivity: Fashion should be accessible to all. We offer a wide range of sizes and
                                styles to
                                celebrate the diversity of our customers.</li>
                            <li>4.Innovation: We stay ahead of the curve by constantly evolving and innovating.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our value section ends here -->
    <!-- tesimonial section strats here -->
    <div class="testimonial-section mb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mb-50">
                    <div class="section-title text-center">
                        <span>Testimonial</span>
                        <h3> our happy customers</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper testimonial-swiper-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="rating">
                                        <ul>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <p>“I was recommended snaga from a dear friendest onest Gives energy, strength &
                                        mostly youm motivationt goint and WOW!!! Gives energy, strength & mostlydat youm
                                        motivation”</p>
                                    <div class="author-area">
                                        <h5>Jayden Carter</h5>
                                        <span>Fashion designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="rating">
                                        <ul>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <p>“I was recommended snaga from a dear friendest onest Gives energy, strength &
                                        mostly youm motivationt goint and WOW!!! Gives energy, strength & mostlydat youm
                                        motivation”
                                    </p>
                                    <div class="author-area">
                                        <h5>Colton Roman</h5>
                                        <span>Fashion designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="rating">
                                        <ul>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <p>“I was recommended snaga from a dear friendest onest Gives energy, strength &
                                        mostly youm motivationt goint and WOW!!! Gives energy, strength & mostlydat youm
                                        motivation”</p>
                                    <div class="author-area">
                                        <h5>Lincoln Miles</h5>
                                        <span>Fashion designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="rating">
                                        <ul>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <p>“I was recommended snaga from a dear friendest onest Gives energy, strength &
                                        mostly youm motivationt goint and WOW!!! Gives energy, strength & mostlydat youm
                                        motivation”</p>
                                    <div class="author-area">
                                        <h5>Jayden Carter</h5>
                                        <span>Fashion designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="rating">
                                        <ul>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <p>“I was recommended snaga from a dear friendest onest Gives energy, strength &
                                        mostly youm motivationt goint and WOW!!! Gives energy, strength & mostlydat youm
                                        motivation”
                                    </p>
                                    <div class="author-area">
                                        <h5>Colton Roman</h5>
                                        <span>Fashion designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="rating">
                                        <ul>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <p>“I was recommended snaga from a dear friendest onest Gives energy, strength &
                                        mostly youm motivationt goint and WOW!!! Gives energy, strength & mostlydat youm
                                        motivation”</p>
                                    <div class="author-area">
                                        <h5>Lincoln Miles</h5>
                                        <span>Fashion designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="rating">
                                        <ul>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <p>“I was recommended snaga from a dear friendest onest Gives energy, strength &
                                        mostly youm motivationt goint and WOW!!! Gives energy, strength & mostlydat youm
                                        motivation”</p>
                                    <div class="author-area">
                                        <h5>Jayden Carter</h5>
                                        <span>Fashion designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="rating">
                                        <ul>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <p>“I was recommended snaga from a dear friendest onest Gives energy, strength &
                                        mostly youm motivationt goint and WOW!!! Gives energy, strength & mostlydat youm
                                        motivation”
                                    </p>
                                    <div class="author-area">
                                        <h5>Colton Roman</h5>
                                        <span>Fashion designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="rating">
                                        <ul>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <p>“I was recommended snaga from a dear friendest onest Gives energy, strength &
                                        mostly youm motivationt goint and WOW!!! Gives energy, strength & mostlydat youm
                                        motivation”</p>
                                    <div class="author-area">
                                        <h5>Lincoln Miles</h5>
                                        <span>Fashion designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="rating">
                                        <ul>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <p>“I was recommended snaga from a dear friendest onest Gives energy, strength &
                                        mostly youm motivationt goint and WOW!!! Gives energy, strength & mostlydat youm
                                        motivation”</p>
                                    <div class="author-area">
                                        <h5>Lincoln Miles</h5>
                                        <span>Fashion designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center pt-50">
                    <div class="slider-btn-wrap3">
                        <div class="slider-btn testimonial-slider-prev">
                            <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 13C11 10.5 6 8 3 7C6 6 10.5 4.5 12 1" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="fractional-pagination3"></div>
                        <div class="slider-btn testimonial-slider-next">
                            <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1C2 3.5 7 6 10 7C7 8 2.5 9.5 1 13" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tesimonial section ends here -->
    <!-- partner section strats here -->
    <div class="partner-logo-section mb-120 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-wrap">
                        <div class="logo-title">
                            <h5>We have Many Brands & 20+ Trusted Partner</h5>
                        </div>
                        <div class="logo-area mb-60">
                            <div class="marquee_text1">
                                <a href="#"><img src="assets/image/home1/partner-logo.png" alt=""></a>
                                <a href="#"><img src="assets/image/home1/partner-logo2.png" alt=""></a>
                                <a href="#"><img src="assets/image/home1/partner-logo3.png" alt=""></a>
                                <a href="#"><img src="assets/image/home1/partner-logo4.png" alt=""></a>
                                <a href="#"><img src="assets/image/home1/partner-logo5.png" alt=""></a>
                                <a href="#"><img src="assets/image/home1/partner-logo6.png" alt=""></a>
                            </div>
                        </div>
                        <div class="logo-area">
                            <div class="marquee_text2">
                                <a href="#"><img src="assets/image/home1/partner-logo7.png" alt=""></a>
                                <a href="#"><img src="assets/image/home1/partner-logo8.png" alt=""></a>
                                <a href="#"><img src="assets/image/home1/partner-logo9.png" alt=""></a>
                                <a href="#"><img src="assets/image/home1/partner-logo10.png" alt=""></a>
                                <a href="#"><img src="assets/image/home1/partner-logo11.png" alt=""></a>
                                <a href="#"><img src="assets/image/home1/partner-logo12.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partner section ends here -->
    <!-- Blog section strats here -->
    <div class="blog-section mb-120">
        <div class="container">
            <div class="row wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-lg-12 mb-60">
                    <div class="section-title">
                        <h3>OUR FASHION BLOG</h3>
                    </div>
                </div>
            </div>
            <div class="row gy-5 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="blog-card">
                        <div class="blog-image-wrap">
                            <a class="card-img" href="blog-details"><img src="assets/image/inner-page/blog-image.jpg" alt=""></a>
                        </div>
                        <div class="blog-content">
                            <ul>
                                <li><a href="blog-grid">Fashion Trends</a></li>
                                <li><a class="publish-date" href="blog-grid">02 May, 2024</a></li>
                            </ul>
                            <h5><a href="blog-details">Winter Fashion Forecast: What’s Hot This Season</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="blog-card">
                        <div class="blog-image-wrap">
                            <a class="card-img" href="blog-details"><img src="assets/image/inner-page/blog-image2.jpg" alt=""></a>
                        </div>
                        <div class="blog-content">
                            <ul>
                                <li><a href="blog-grid">Fashion and Culture</a></li>
                                <li><a class="publish-date" href="blog-grid">07 May, 2024</a></li>
                            </ul>
                            <h5><a href="blog-details">The Impact of Pop Culture on Fashion Trends</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="blog-card">
                        <div class="blog-image-wrap">
                            <a class="card-img" href="blog-details"><img src="assets/image/home2/home2-blog-image2.jpg" alt=""></a>
                        </div>
                        <div class="blog-content">
                            <ul>
                                <li><a href="blog-grid">Style Guides</a></li>
                                <li><a class="publish-date" href="blog-grid">03 May, 2024</a></li>
                            </ul>
                            <h5><a href="blog-details">The Ultimate Guide to Accessorizing Your Outfits</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog section ends here -->


    <!-- Jquery js link -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <!-- Counterup js link -->
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/jquery.counterup.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Marquee js link -->
    <script src="assets/js/jquery.marquee.min.js"></script>
    <!-- Popper js link -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Swiper js link -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Fancybox js link -->
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Wow js link -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Bootstrap js link -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- MAin js link -->
    <script src="assets/js/main.js"></script>

    <script>
        $(".marquee_text1").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
        $(".marquee_text2").marquee({
            direction: "right",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
    </script>
@endsection
