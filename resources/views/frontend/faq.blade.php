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
        style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url(assets/image/inner-page/faq-breadcrumb.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="banner-content style-2 text-center">
                        <h1>Faq</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="/">Home</a></li>
                            <li><span>/ </span>Faq</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb section ends here -->
    <!-- Faq section strats here -->
    <div class="faq-section mb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="faq-wrap">
                        @foreach ($faqs as $faq)
                            <div class="accordion" id="accordionGeneral">
                                <div class="accordion-item wow animate fadeInDown" data-wow-delay="100ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="faqheadingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faqcollapseOne" aria-expanded="true"
                                            aria-controls="faqcollapseOne">
                                            {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="faqcollapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="faqheadingOne" data-bs-parent="#accordionGeneral">
                                        <div class="accordion-body">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq section ends here -->
    <!-- Enquiry section Start here -->
    <div class="enquery-section mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="enquery-form-wrapper">
                        <form>
                            <div class="form-title">
                                <h4>Ask us anytime , Any things</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-30">
                                    <div class="form-inner">
                                        <label>first name <span>*</span></label>
                                        <input type="text" placeholder="Mr. Daniel">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="form-inner">
                                        <label>last name</label>
                                        <input type="text" placeholder="Scoot">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="form-inner">
                                        <label>phone number</label>
                                        <input type="text" placeholder="+99 (0) *** ** ***">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="form-inner">
                                        <label>email address <span>*</span></label>
                                        <input type="email" placeholder="info@example.com">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-15">
                                    <div class="form-inner">
                                        <label>message</label>
                                        <textarea placeholder="Write your enquiry..."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <button class="primary-btn" type="submit">
                                            SUBMIT here
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Enquiry section ends here -->

    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/range-slider.js"></script>
    <!-- Jquery js link -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
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
        $(".marquee_text2").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
    </script>
@endsection
