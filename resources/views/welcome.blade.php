@extends('layouts.site.app')
@section('content')
<section class="hero-section hero-slide d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 text-center mx-auto">
                            <div class="hero-section-text">
                                <small class="section-small-title">Welcome to Moso Interior <i class="hero-icon bi-house"></i></small>

                                <h1 class="hero-title text-white mt-2 mb-4 ">أيام مفعمة بالمغامرة وليالٍ هادئة</h1>

                                <form class="custom-form hero-form" action="#" method="get" role="form">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6 col-12">
                                            <div class="input-group align-items-center">
                                                <label for="product-name">Product</label>

                                                <input type="text" name="product-name" id="product-name" class="form-control" placeholder="Bathroom, Living Room..." required>
                                            </div>
                                        </div>

                                        <div class="col-lg-5 col-md-6 col-12">
                                            <div class="input-group align-items-center">
                                                <label for="last-name">Price</label>

                                                <select name="price-range" class="form-select form-control" id="price-range" aria-label="Default select example">
                                                    <option value="500" selected>$500 to $990</option>
                                                    <option value="1000">$1,000 - 2,900</option>
                                                    <option value="3000">$3,000 - 5,000</option>
                                                    <option value="5000">$5,000 - 10,000</option>
                                                    <option value="11000">$11,000 - 25,000</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-6 col-12">
                                            <button type="submit" class="form-control">Search</button>
                                        </div>
                                    </div>
                                </form>

                                <div class="hero-btn d-flex justify-content-center align-items-center">
                                    <a class="bi-arrow-down hero-btn-link smoothscroll" href="#section_2"></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="about-section section-padding" id="section_2">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-12">
                            <small class="section-small-title">راحتك مسئوليتنا</small>

                            <h2 class="mt-2 mb-4"><span class="text-muted"></span> من نحن</h2>

                            <h4 class="text-muted mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h4>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, consequatur molestiae veniam perspiciatis dicta dignissimos ducimus perferendis fugiat facere maxime sint alias adipisci culpa incidunt reiciendis unde non amet iure?</p>
                        </div>

                        <div class="col-lg-3 col-md-5 col-5 mx-lg-auto">
                            <img src="{{asset('site/images/sharing-design-ideas-with-family.jpg')}}" class="about-image about-image-small img-fluid" alt="">
                        </div>

                        <div class="col-lg-4 col-md-7 col-7">
                            <img src="{{asset('site/images/living-room-interior-wall-mockup-warm-tones-with-leather-sofa-which-is-kitchen-3d-rendering.jpg')}}" class="about-image img-fluid" alt="">
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12">
                            <div class="custom-block featured-custom-block">
                                <h2 class="mt-2 mb-4">Opening Hours</h2>

                                <div class="d-flex">
                                    <i class="featured-icon bi-clock me-3"></i>

                                    <div>
                                        <p class="mb-2">
                                            Mon - Friday ~
                                            <strong class="d-inline">
                                                8:00 AM - 6:00 PM
                                            </strong>
                                        </p>

                                        <p class="mb-2">
                                            Saturday ~
                                            <strong class="d-inline">
                                                10:00 AM - 10:00 PM
                                            </strong>
                                        </p>

                                        <p>Sunday ~ Closed</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="shop-section section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <small class="section-small-title">الوجهات الرائجة</small><br>

                            <h2 class="mt-2 mb-4"><span class="tooplate-red"></span>للمسافرون الذين يبحثون عن إقامات في مصر </h2>
                        </div>

                        <div class="col-lg-5  col-12">
                            <div class="shop-thumb">
                                <div class="shop-image-wrap">
                                    <a href="cairo.html">
                                        <img src="{{asset('site/images/All-phoho/cairo/cairo.jpeg')}}" class="shop-image img-fluid" alt="">
                                    </a>

                                    <!-- <div class="shop-icons-wrap">
                                        <div class="shop-icons d-flex flex-column align-items-center">
                                            <a href="#" class="shop-icon bi-heart"></a>

                                            <a href="#" class="shop-icon bi-bookmark"></a>
                                        </div>

                                        <p class="shop-pricing mb-0 mt-3">
                                            <span class="badge custom-badge">$3,600</span>
                                        </p>
                                    </div> -->

                                    <div class="shop-btn-wrap">
                                        <a href="cairo.html" class="shop-btn custom-btn btn d-flex align-items-center align-items-center">cairo</a>
                                    </div>
                                </div>

                                <div class="shop-body">
                                    <h4>القاهرة</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 offset-lg-2 col-12">
                            <div class="shop-thumb">
                                <div class="shop-image-wrap">
                                    <a href="cairo.html">
                                        <img src="{{asset('site/images/All-phoho/Alexandria/Alexandria2.jpeg')}}" class="shop-image img-fluid" alt="">
                                    </a>

                                    <div class="shop-btn-wrap">
                                        <a href="#" class="shop-btn custom-btn btn d-flex align-items-center align-items-center">Learn more</a>
                                    </div>
                                </div>

                                <div class="shop-body">
                                    <h4>Alexandria</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="shop-thumb">
                                <div class="shop-image-wrap">
                                    <a href="cairo.html">
                                        <img src="{{asset('site/images/All-phoho/Dahab/Dahab.jpeg')}}" class="shop-image img-fluid" alt="">
                                    </a>



                                    <div class="shop-btn-wrap">
                                        <a href="cairo.html" class="shop-btn custom-btn btn d-flex align-items-center align-items-center">Learn more</a>
                                    </div>
                                </div>

                                <div class="shop-body">
                                    <h4>Dahab</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="shop-thumb">
                                <div class="shop-image-wrap">
                                    <a href="cairo.html">
                                        <img src="{{asset('site/images/All-phoho/Hurghada/Hurghada2.jpeg')}}" class="shop-image img-fluid" alt="">
                                    </a>



                                    <div class="shop-btn-wrap">
                                        <a href="cairo.html" class="shop-btn custom-btn btn d-flex align-items-center align-items-center">Learn more</a>
                                    </div>
                                </div>

                                <div class="shop-body">
                                    <h4>Hurghada</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="shop-thumb">
                                <div class="shop-image-wrap">
                                    <a href="cairo.html">
                                        <img src="{{asset('site/images/All-phoho/Sharm-El-Sheikh/Sharm-El-Sheikh2.jpeg')}}" class="shop-image img-fluid" alt="">
                                    </a>



                                    <div class="shop-btn-wrap">
                                        <a href="cairo.html" class="shop-btn custom-btn btn d-flex align-items-center align-items-center">Learn more</a>
                                    </div>
                                </div>

                                <div class="shop-body">
                                    <h4>Sharm-El-Sheikh</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>

                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">1</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">5</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </section>


            <section class="reviews-section section-padding pb-0" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <small class="section-small-title">Happy customers.</small>

                            <h2 class="mt-2 mb-4">Reviews</h2>

                            <div class="owl-carousel reviews-carousel">
                                <div class="reviews-thumb">
                                    <div class="reviews-body">
                                        <h4>Moso Interior is the most suitable website layout.</h4>
                                    </div>

                                    <div class="reviews-bottom reviews-bottom-up d-flex align-items-center">
                                        <img src="{{asset('site/images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg')}}" class="avatar-image img-fluid" alt="">

                                        <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                            <p class="text-white mb-0">
                                                <strong>Sandy</strong>, <small>CEO</small>
                                            </p>

                                            <div class="reviews-icons">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="reviews-thumb">
                                    <div class="reviews-body">
                                        <h4>Explore more HTML Templates to download for your website.</h4>
                                    </div>

                                    <div class="reviews-bottom reviews-bottom-up d-flex align-items-center">
                                        <img src="{{asset('site/images/avatar/studio-portrait-emotional-happy-funny-smiling-boyfriend-man-with-heavy-beard-stands-with-arms-crossed-dressed-red-t-shirt-isolated-blue.jpg')}}" class="avatar-image img-fluid" alt="">

                                        <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                            <p class="text-white mb-0">
                                                <strong>Jack</strong>, <small>Partner</small>
                                            </p>

                                            <div class="reviews-icons">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="reviews-thumb">
                                    <div class="reviews-body">
                                        <h4>Please recommend Tooplate website to your friends.</h4>
                                    </div>

                                    <div class="reviews-bottom reviews-bottom-up d-flex align-items-center">
                                        <img src="{{asset('site/images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg')}}" class="avatar-image img-fluid" alt="">

                                        <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                            <p class="text-white mb-0">
                                                <strong>Helen</strong>, <small>Client</small>
                                            </p>

                                            <div class="reviews-icons">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="reviews-thumb">
                                    <div class="reviews-body">
                                        <h4>This Bootstrap 5 layout is free to use for your website.</h4>
                                    </div>

                                    <div class="reviews-bottom reviews-bottom-up d-flex align-items-center">
                                        <img src="{{asset('site/images/avatar/portrait-young-redhead-bearded-male-wears-white-t-shirt-keeps-his-eyes-closed-smiling-feels-happy-yellow.jpg')}}" class="avatar-image img-fluid" alt="">

                                        <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                            <p class="text-white mb-0">
                                                <strong>Bill</strong>, <small>Designer</small>
                                            </p>

                                            <div class="reviews-icons">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="reviews-thumb">
                                    <div class="reviews-body">
                                        <h4>Thank you for visiting Tooplate to download free templates.</h4>
                                    </div>

                                    <div class="reviews-bottom reviews-bottom-up d-flex align-items-center">
                                        <img src="{{asset('site/images/avatar/portrait-young-beautiful-woman-gesticulating.jpg')}}" class="avatar-image img-fluid" alt="">

                                        <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                            <p class="text-white mb-0">
                                                <strong>Susan</strong>, <small>Boss</small>
                                            </p>

                                            <div class="reviews-icons">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <p class="d-flex justify-content-center align-items-center mt-lg-5">Write some reviews on <a href="#" class="custom-btn btn ms-3"><i class="bi-facebook me-2"></i>facebook</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section" id="section_5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f9f9f9" fill-opacity="1" d="M0,96L40,117.3C80,139,160,181,240,186.7C320,192,400,160,480,149.3C560,139,640,149,720,176C800,203,880,245,960,250.7C1040,256,1120,224,1200,229.3C1280,235,1360,277,1400,298.7L1440,320L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <small class="section-small-title">Ask anything.</small>

                            <h2 class="mb-4">Say Hello</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <form class="custom-form contact-form" action="#" method="post" role="form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="input-group align-items-center">
                                            <label for="first-name">First Name</label>

                                            <input type="text" name="first-name" id="first-name" class="form-control" placeholder="Jack" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="input-group align-items-center">
                                            <label for="last-name">Last Name</label>

                                            <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Doe" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group align-items-center">
                                    <label for="email">Email Address</label>

                                     <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required>
                                </div>

                                <div class="input-group textarea-group">
                                    <label for="message">Message</label>

                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="What can we help you?"></textarea>
                                </div>

                                <div class="col-lg-3 col-md-4 col-6">
                                    <button type="submit" class="form-control">Send</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="custom-block">

                                <h3 class="text-white mb-2">Store</h3>

                                <p class="text-white mb-2">
                                    <i class="contact-icon bi-geo-alt me-1"></i>

                                    102 Utah Road, Berlin, Germany
                                </p>

                                <h3 class="text-white mt-3 mb-2">Contact Info</h3>

                                <div class="d-flex flex-wrap">
                                    <p class="text-white mb-2 me-4">
                                        <i class="contact-icon bi-telephone me-1"></i>

                                        <a href="tel: 090-080-0760" class="text-white">
                                            090-080-0760
                                        </a>
                                    </p>

                                    <p class="text-white">
                                        <i class="contact-icon bi-envelope me-1"></i>

                                        <a href="mailto:info@company.com" class="text-white">
                                            info@company.com
                                        </a>
                                    </p>
                                </div>

                                <iframe class="google-map mt-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4800.184803804974!2d-0.10174304922518053!3d51.5087879746898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487605f6fc62fa3d%3A0xc5a39e7cf4e3a9a4!2sTate%20Modern%20Garden!5e1!3m2!1sen!2smm!4v1679331839559!5m2!1sen!2smm" width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


@endsection
