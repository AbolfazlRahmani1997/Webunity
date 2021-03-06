@extends('layout.app')
@section('content')
    <body class="single-project"  id="home" itemscope itemtype="http://schema.org/WebPage">

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            "Loading..."
        </div>
    </div>

    <!-- Header -->
    <header class="nav nav--pattern" itemtype="http://schema.org/WPHeader" itemscope>

        <div class="nav__holder nav--sticky nav--align-center">
            <div class="container-fluid container-semi-fluid">
                <div class="flex-parent">

                    <div class="nav__header clearfix">
                        <!-- Logo -->
                        <div class="logo-wrap local-scroll">
                            <a href="index.html" class="logo__url">
                                <img class="logo" src="img/logo/logo.png" srcset="img/logo/logo.png 1x, img/logo/logo@2x.png 2x" alt="logo" itemtype="http://schema.org/Organization" itemscope>
                            </a>
                        </div>

                        <button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="nav__icon-toggle-bar"></span>
                            <span class="nav__icon-toggle-bar"></span>
                            <span class="nav__icon-toggle-bar"></span>
                        </button>
                    </div> <!-- end nav-header -->

                    <!-- Navbar -->
                    <nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse" itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope">
                        <ul class="nav__menu local-scroll" id="onepage-nav">
                            <li class="nav__dropdown">
                                <a href="index.html#home" class="nav-link" aria-haspopup="true">Home</a>
                                <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                                <ul class="nav__dropdown-menu">
                                    <li>
                                        <a href="index.html">
                                            <span class="nav__dropdown-menu-label">Hero Image</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-video-bg.html">
                                            <span class="nav__dropdown-menu-label">HTML Video</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-creative.html">
                                            <span class="nav__dropdown-menu-label">Hero Creative</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-youtube-bg.html">
                                            <span class="nav__dropdown-menu-label">Youtube Video</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-vimeo-bg.html">
                                            <span class="nav__dropdown-menu-label">Vimeo Video</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-projects-showcase.html">
                                            <span class="nav__dropdown-menu-label">Projects Showcase</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.html#services" class="nav-link">Services</a>
                            </li>
                            <li>
                                <a href="index.html#about" class="nav-link">About</a>
                            </li>
                            <li>
                                <a href="index.html#works" class="nav-link">Works</a>
                            </li>
                            <li>
                                <a href="index.html#blog" class="nav-link">Blog</a>
                            </li>
                            <li class="nav__dropdown">
                                <a href="#" class="nav-link active" aria-haspopup="true">Pages</a>
                                <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                                <ul class="nav__dropdown-menu">
                                    <li>
                                        <a href="projects.html">
                                            <span class="nav__dropdown-menu-label">Projects</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-project.html">
                                            <span class="nav__dropdown-menu-label">Single Project</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog.html">
                                            <span class="nav__dropdown-menu-label">Blog</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-post.html">
                                            <span class="nav__dropdown-menu-label">Single Post</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.html#contact" class="nav-link">Contact</a>
                            </li>
                        </ul> <!-- end menu -->


                        <!-- Mobile Socials -->
                        <div class="nav__mobile-socials d-lg-none">
                            <div class="socials">
                                <a href="#" class="social social-behance" aria-label="behance" title="behance" target="_blank"><i class="ui-behance"></i></a>
                                <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                                <a href="#" class="social social-linkedin" aria-label="linkedin" title="linkedin" target="_blank"><i class="ui-linkedin"></i></a>
                            </div>
                        </div>

                    </nav> <!-- end nav-wrap -->

                    <!-- Socials -->
                    <div class="nav__socials flex-child d-none d-lg-block">
                        <div class="socials right">
                            <a href="#" class="social social-behance" aria-label="behance" title="behance" target="_blank"><i class="ui-behance"></i></a>
                            <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                            <a href="#" class="social social-linkedin" aria-label="linkedin" title="linkedin" target="_blank"><i class="ui-linkedin"></i></a>
                        </div>
                    </div>

                </div> <!-- end flex-parent -->
            </div> <!-- end container -->

        </div>
    </header> <!-- end navigation -->

    <main class="main-wrap">
        <div class="content-wrap">

            <!-- Page Title -->
            <section class="page-title bg-pattern">
                <div class="container relative">
                    <h1 class="page-title__title white">Our Insights</h1>
                    <p class="page-title__subtitle">The latest studio news, work and insights.</p>
                </div>
            </section> <!-- end page title -->

            <!-- Blog -->
            <section class="section-blog">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="animate">
                                <div class="animate-container">
                                    <article class="entry" itemscope itemtype="http://schema.org/Article">
                                        <div class="entry__header hover-shrink">
                                            <a href="single-post.html" class="entry__img-url hover-shrink--shrink">
                                                <img src="img/blog/blog_preview_1.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
                                            </a>
                                        </div>
                                        <div class="entry__body">
                                            <div class="entry__meta">
                                                <span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2019-11-13">11/13/2019</span>
                                                <span class="entry__meta-item entry__meta-category">
													<span>in </span>
													<a href="#" class="entry__meta-category-url">Business</a>
												</span>
                                            </div>
                                            <h4 class="entry__title title-underline">
                                                <a href="single-post.html" itemprop="headline">Business Mistakes to Avoid When Starting a Business</a>
                                            </h4>
                                            <div class="entry__meta">
												<span class="entry__meta-item entry__meta-author">
													<span>by</span>
													<a href="#" class="entry__meta-author-url">
														<span class="entry__meta-author-name" itemprop="author">Camille Alforque</span>
													</a>
												</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="animate">
                                <div class="animate-container">
                                    <article class="entry" itemscope itemtype="http://schema.org/Article">
                                        <div class="entry__header hover-shrink">
                                            <a href="single-post.html" class="entry__img-url hover-shrink--shrink">
                                                <img src="img/blog/blog_preview_2.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
                                            </a>
                                        </div>
                                        <div class="entry__body">
                                            <div class="entry__meta">
                                                <span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2019-11-13">11/13/2019</span>
                                                <span class="entry__meta-item entry__meta-category">
													<span>in </span>
													<a href="#" class="entry__meta-category-url">Innovation</a>
												</span>
                                            </div>
                                            <h4 class="entry__title title-underline">
                                                <a href="single-post.html" itemprop="headline">The Hyper Flexible Seamlessly Connected Modern Working</a>
                                            </h4>
                                            <div class="entry__meta">
												<span class="entry__meta-item entry__meta-author">
													<span>by</span>
													<a href="#" class="entry__meta-author-url">
														<span class="entry__meta-author-name" itemprop="author">Camille Alforque</span>
													</a>
												</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="animate">
                                <div class="animate-container">
                                    <article class="entry" itemscope itemtype="http://schema.org/Article">
                                        <div class="entry__header hover-shrink">
                                            <a href="single-post.html" class="entry__img-url hover-shrink--shrink">
                                                <img src="img/blog/blog_preview_3.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
                                            </a>
                                        </div>
                                        <div class="entry__body">
                                            <div class="entry__meta">
                                                <span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2019-11-13">11/13/2019</span>
                                                <span class="entry__meta-item entry__meta-category">
													<span>in </span>
													<a href="#" class="entry__meta-category-url">Productivity</a>
												</span>
                                            </div>
                                            <h4 class="entry__title title-underline">
                                                <a href="single-post.html" itemprop="headline">Are you a design superstar-in-the-making?</a>
                                            </h4>
                                            <div class="entry__meta">
												<span class="entry__meta-item entry__meta-author">
													<span>by</span>
													<a href="#" class="entry__meta-author-url">
														<span class="entry__meta-author-name" itemprop="author">Camille Alforque</span>
													</a>
												</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="animate">
                                <div class="animate-container">
                                    <article class="entry" itemscope itemtype="http://schema.org/Article">
                                        <div class="entry__header hover-shrink">
                                            <a href="single-post.html" class="entry__img-url hover-shrink--shrink">
                                                <img src="img/blog/blog_preview_4.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
                                            </a>
                                        </div>
                                        <div class="entry__body">
                                            <div class="entry__meta">
                                                <span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2019-11-13">11/13/2019</span>
                                                <span class="entry__meta-item entry__meta-category">
													<span>in </span>
													<a href="#" class="entry__meta-category-url">Jobs</a>
												</span>
                                            </div>
                                            <h4 class="entry__title title-underline">
                                                <a href="single-post.html" itemprop="headline">Radium studio sounds 2019</a>
                                            </h4>
                                            <div class="entry__meta">
												<span class="entry__meta-item entry__meta-author">
													<span>by</span>
													<a href="#" class="entry__meta-author-url">
														<span class="entry__meta-author-name" itemprop="author">Camille Alforque</span>
													</a>
												</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="animate">
                                <div class="animate-container">
                                    <article class="entry" itemscope itemtype="http://schema.org/Article">
                                        <div class="entry__header hover-shrink">
                                            <a href="single-post.html" class="entry__img-url hover-shrink--shrink">
                                                <img src="img/blog/blog_preview_5.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
                                            </a>
                                        </div>
                                        <div class="entry__body">
                                            <div class="entry__meta">
                                                <span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2019-11-13">11/13/2019</span>
                                                <span class="entry__meta-item entry__meta-category">
													<span>in </span>
													<a href="#" class="entry__meta-category-url">Innovation</a>
												</span>
                                            </div>
                                            <h4 class="entry__title title-underline">
                                                <a href="single-post.html" itemprop="headline">The Hyper Flexible Seamlessly Connected Modern Working...</a>
                                            </h4>
                                            <div class="entry__meta">
												<span class="entry__meta-item entry__meta-author">
													<span>by</span>
													<a href="#" class="entry__meta-author-url">
														<span class="entry__meta-author-name" itemprop="author">Camille Alforque</span>
													</a>
												</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="animate">
                                <div class="animate-container">
                                    <article class="entry" itemscope itemtype="http://schema.org/Article">
                                        <div class="entry__header hover-shrink">
                                            <a href="single-post.html" class="entry__img-url hover-shrink--shrink">
                                                <img src="img/blog/blog_preview_6.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
                                            </a>
                                        </div>
                                        <div class="entry__body">
                                            <div class="entry__meta">
                                                <span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2019-11-13">11/13/2019</span>
                                                <span class="entry__meta-item entry__meta-category">
													<span>in </span>
													<a href="#" class="entry__meta-category-url">UX</a>
												</span>
                                            </div>
                                            <h4 class="entry__title title-underline">
                                                <a href="single-post.html" itemprop="headline">Are you a design superstar-in-the-making?</a>
                                            </h4>
                                            <div class="entry__meta">
												<span class="entry__meta-item entry__meta-author">
													<span>by</span>
													<a href="#" class="entry__meta-author-url">
														<span class="entry__meta-author-name" itemprop="author">Camille Alforque</span>
													</a>
												</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="animate">
                                <div class="animate-container">
                                    <article class="entry" itemscope itemtype="http://schema.org/Article">
                                        <div class="entry__header hover-shrink">
                                            <a href="single-post.html" class="entry__img-url hover-shrink--shrink">
                                                <img src="img/blog/blog_preview_7.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
                                            </a>
                                        </div>
                                        <div class="entry__body">
                                            <div class="entry__meta">
                                                <span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2019-11-13">11/13/2019</span>
                                                <span class="entry__meta-item entry__meta-category">
													<span>in </span>
													<a href="#" class="entry__meta-category-url">Jobs</a>
												</span>
                                            </div>
                                            <h4 class="entry__title title-underline">
                                                <a href="single-post.html" itemprop="headline">These Were The Most-Used E-Commerce Apps In Southeast Asia In Q3</a>
                                            </h4>
                                            <div class="entry__meta">
												<span class="entry__meta-item entry__meta-author">
													<span>by</span>
													<a href="#" class="entry__meta-author-url">
														<span class="entry__meta-author-name" itemprop="author">Camille Alforque</span>
													</a>
												</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="animate">
                                <div class="animate-container">
                                    <article class="entry" itemscope itemtype="http://schema.org/Article">
                                        <div class="entry__header hover-shrink">
                                            <a href="single-post.html" class="entry__img-url hover-shrink--shrink">
                                                <img src="img/blog/blog_preview_8.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
                                            </a>
                                        </div>
                                        <div class="entry__body">
                                            <div class="entry__meta">
                                                <span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2019-11-13">11/13/2019</span>
                                                <span class="entry__meta-item entry__meta-category">
													<span>in </span>
													<a href="#" class="entry__meta-category-url">Innovation</a>
												</span>
                                            </div>
                                            <h4 class="entry__title title-underline">
                                                <a href="single-post.html" itemprop="headline">Dealing With Recurring Tasks? This Highly-Reviewed App Is a Manager's Best Friend</a>
                                            </h4>
                                            <div class="entry__meta">
												<span class="entry__meta-item entry__meta-author">
													<span>by</span>
													<a href="#" class="entry__meta-author-url">
														<span class="entry__meta-author-name" itemprop="author">Camille Alforque</span>
													</a>
												</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="animate">
                                <div class="animate-container">
                                    <article class="entry" itemscope itemtype="http://schema.org/Article">
                                        <div class="entry__header hover-shrink">
                                            <a href="single-post.html" class="entry__img-url hover-shrink--shrink">
                                                <img src="img/blog/blog_preview_9.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
                                            </a>
                                        </div>
                                        <div class="entry__body">
                                            <div class="entry__meta">
                                                <span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2019-11-13">11/13/2019</span>
                                                <span class="entry__meta-item entry__meta-category">
													<span>in </span>
													<a href="#" class="entry__meta-category-url">UX</a>
												</span>
                                            </div>
                                            <h4 class="entry__title title-underline">
                                                <a href="single-post.html" itemprop="headline">3 Ways Your Business Can Start 2020 Strong</a>
                                            </h4>
                                            <div class="entry__meta">
												<span class="entry__meta-item entry__meta-author">
													<span>by</span>
													<a href="#" class="entry__meta-author-url">
														<span class="entry__meta-author-name" itemprop="author">Camille Alforque</span>
													</a>
												</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination text-center">
                        <nav class="pagination__nav clearfix" itemscope itemtype="http://schema.org/SiteNavigationElement">
                            <a href="#" class="pagination__page"><i class="ui-arrow-left"></i></a>
                            <span class="pagination__page pagination__page--active">1</span>
                            <a href="#" class="pagination__page">2</a>
                            <a href="#" class="pagination__page">3</a>
                            <a href="#" class="pagination__page">4</a>
                            <a href="#" class="pagination__page"><i class="ui-arrow-right"></i></a>
                        </nav>
                    </div>

                </div>
            </section> <!-- end blog -->

        </div> <!-- end content wrap -->

        <!-- Footer -->
        <footer class="footer bg-dark bg-pattern" itemtype="http://schema.org/WPFooter" itemscope>
            <div class="container">
                <div class="footer__widgets">
                    <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="widget widget-about-us">
                                <span class="widget-about-us__text">We???d love to hear from you</span>
                                <a href="mailto:hello@jueveagency.com" class="widget-about-us__email">hello@jueveagency.com</a>
                                <a href="tel:021-5395-6573" class="widget-about-us__phone">021 5395 6573</a>
                                <div class="socials mt-32">
                                    <a href="#" class="social social-behance" aria-label="behance" title="behance" target="_blank"><i class="ui-behance"></i></a>
                                    <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                                    <a href="#" class="social social-google-plus" aria-label="linkedin" title="linkedin" target="_blank"><i class="ui-linkedin"></i></a>
                                    <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                                </div>
                            </div>
                        </div> <!-- end about us -->


                        <div class="col-lg-4 col-md-6">
                            <div class="widget text-center text-md-left">
                                <h3 class="widget-cta__title white mb-32">Got a project in mind?</h3>
                                <a href="#" class="btn btn--lg btn--stroke contact-form-trigger" data-toggle="modal" data-target="#contact-form-modal">
                                    <span>Start a Project</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="widget widget-address">
                                <address class="widget-address__address">Studio 8E, Stamford<br>
                                    WorksGillett Square, Dalston<br>
                                    London, N16 8JH</address>
                                <a href="https://www.google.bg/maps/place/1702+Olympic+Blvd,+Santa+Monica,+CA+90404,+USA/data=!4m2!3m1!1s0x80c2bb3056a299ef:0x94f425adda595d69?sa=X&ved=0ahUKEwje-u2zobfPAhXFthQKHXdEBY4Q8gEIGTAA" class="widget-address__url" target="_self">Get Directions</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end container -->

            <div class="footer__bottom">
                <div class="container">
                    <div class="copyright-wrap text-center">
						<span class="copyright">
							&copy; 2019 Jueve, Made by <a href="https://deothemes.com">DeoThemes.</a> All rights reserved.
						</span>
                    </div>
                </div>
            </div> <!-- end footer bottom -->
        </footer> <!-- end footer -->

        <div class="footer-placeholder" id="contact"></div>

        <!-- Contact Form -->
        <div class="modal fade contact-form-modal" id="contact-form-modal" role="dialog" aria-label="Contact Form Modal" aria-hidden="true">
            <div class="modal-dialog contact-form-modal__dialog" role="document">
                <div class="modal-content contact-form-modal__content">

                    <button type="button" class="close contact-form-modal__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>

                    <div class="modal-body contact-form-modal__body">
                        <form id="contact-form" class="contact-form" action="#">
                            <div class="row row-16">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Name<abbr>*</abbr></label>
                                        <input type="text" name="NAME" id="name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Email<abbr>*</abbr></label>
                                        <input type="email" name="EMAIL" id="email" required="">
                                    </div>
                                </div>
                            </div>

                            <label for="message">Message<abbr>*</abbr></label>
                            <textarea name="MESSAGE" id="message" rows="6"></textarea>
                            <div class="gdpr-checkbox">
                                <label class="gdpr-checkbox__label">
                                    <input class="gdpr-checkbox__input" name="AGREE_TO_TERMS" type="checkbox" value="1" required="">
                                    <span class="gdpr-checkbox__text">I agree to storage of my email according to <a href="#" target="_blank">Privacy Policy</a>
									</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <input id="contact-form__submit" type="submit" class="btn btn--lg btn--color" value="Send Message">
                            </div>

                            <div id="contact-form__message" class="contact-form__message" role="alert"></div>

                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- end contact form -->


        <div id="back-to-top">
            <a href="#top"><i class="ui-arrow-up"></i></a>
        </div>

    </main> <!-- end main wrapper -->


    <!-- jQuery Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/scripts.min.js"></script>

    </body>
@endsection
