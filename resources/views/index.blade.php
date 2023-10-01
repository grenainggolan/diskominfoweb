<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Multipurpose Saas Startup HTML Template">
        <meta name="author" content="DynamicLayers">
       
        <title>Dinas Kominfo-SP Kabupaten Pangkep</title>
        
		<link rel="shortcut icon" type="image/x-icon" href="{{url('public/frontend/img/logo-kominfo.png')}}">
		
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/fontawesome.min.css') }}">
        <!-- Themify Icons CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/themify-icons.css')}} ">
        <!-- Elegant Line Icons CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/elegant-line-icons.css') }} ">
        <!-- Elegant Icons CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/elegant-font-icons.css') }}">
        <!-- Saasbiz Icons CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/saasbiz-icons.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/animate.min.css')}}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/nice-select.css')}}">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/bootstrap.min.css')}}">
        <!-- Slicknav CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/slicknav.min.css')}}">
        <!-- Pricing CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/pricing-table.css')}}">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/odometer.min.css')}}">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/venobox/venobox.css')}}">
		<!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/owl.carousel.css')}}">
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/main.css')}}">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/responsive.css')}}">

        <script src="{{url('public/frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>
    <body data-spy="scroll" data-target="#navmenu" data-offset="70">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div><!-- Preloader -->
        
        <header id="header" class="header-section">
            <div class="container">
                <nav class="navbar ">
                    <a href="{{url('/')}}" class="navbar-brand"><img src="{{url('public/frontend/img/logo-dark.png')}}" alt="Saasbiz"></a>
                    <div class="d-flex menu-wrap">
                       <div id="mainmenu" class="mainmenu">
                           <ul class="nav">
                               <li><a data-scroll class="nav-link active" href="{{url('/')}}">Home<span class="sr-only">(current)</span></a> 
                                    {{-- <ul>
                                       <li><a href="index.html">Home Design Studio</a></li>
                                       <li><a href="index-2.html">Home Web hosting</a></li>
                                       <li><a href="index-3.html">Home Support Desk</a></li>
                                       <li><a href="index-4.html">Home Apps Landing</a></li>
                                       <li><a href="index-5.html">Home Cloud Based Saas</a></li>
                                    </ul> --}}
                                </li>
                                <li><a href="#">Profil</a> 
                                    <ul>
                                       <li><a href="{{url('struktur')}}">Struktur Organisasi</a></li>
                                       <li><a href="{{url('visi')}}">Sejarah dan Visi Misi</a></li>
                                       <li><a href="{{url('tupoksi')}}">Tupoksi</a></li>
                                       <li><a href="{{url('program')}}">Program dan Kegiatan</a></li>
                                       <li><a href="{{url('pegawai')}}">Daftar Pegawai</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('news')}}">Berita</a> 
                                </li>
                                <li><a href="#">Informasi</a> 
                                    <ul>
                                       <li><a href="{{url('dokumen')}}">Dokumen</a></li>
                                       <li><a href="{{url('agenda')}}">Agenda</a></li>
                                       <li><a href="{{url('pengumuman')}}">Pengumuman</a></li>
                                       <li><a href="{{url('tower')}}">Info Lokasi Tower</a></li>
                                       <li><a href="{{url('aplikasi')}}">Daftar Aplikasi</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Layanan</a> 
                                    <ul>
                                       <li><a href="{{url('hosting')}}">Subdomain dan Hosting</a></li>
                                       <li><a href="{{url('zoom')}}">Zoom Meeting</a></li>
                                       <li><a href="{{url('tte')}}">Sertifikat Elektronik</a></li>
                                       <li><a href="{{url('reqdata')}}">Permintaan Data</a></li>
                                       <li><a href="{{url('emailinst')}}">Email Instansi</a></li>
                                       {{-- <li><a href="register.html">Register</a></li>
                                       <li><a href="faq.html">FAQ's</a></li>
                                       <li><a href="404.html">404 Error</a></li> --}}
                                    </ul>
                                </li>
                                <li><a href="https://ppid.pangkepkab.go.id/">PPID</a> 
                                    {{-- <ul>
                                       <li><a href="blog-grid.html">Blog Grid</a></li>
                                       <li><a href="blog-classic.html">Blog Classic</a></li>
                                       <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul> --}}
                                </li>
                                {{-- <li><a href="contact.html">Contact</a></li> --}}
                            </ul>
                       </div>
                       {{-- <div class="header-right">
                           <div class="cart-icon"><i class="fa fa-shopping-basket"></i><span class="count">0</span></div>
                       </div> --}}
                    </div>
                </nav>
            </div>
		</header> <!--.header-section -->
		
        <div class="header-height"></div>
        
        <section class="hero-section bg-grey d-flex align-items-center bd-bottom">
            <div class="hero-bg-shape"></div>
            <div class="anim-elements">
                <div class="anim-element"></div>
                <div class="anim-element"></div>
                <div class="anim-element"></div>
                <div class="anim-element"></div>
                <div class="anim-element"></div>
            </div>
            <div class="container">
                <div class="row hero-wrap d-flex align-items-center">
                    <div class="col-lg-6 sm-padding">
                        <div class="hero-content">
                            <h1>Drive More Customers <br>Through Digital.</h1>
                            <p>We provide marketing services to startups and small businesses to looking for a partner of their digital media, design & development, lead generation and communications requirents.</p>
                            <div class="btn-group">
                                <a href="#" class="default-btn">Get Started</a>
                                <a href="#" class="play-btn"><i class="fas fa-play"></i>How It Works</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 sm-padding">
                        <img src="{{url('public/frontend/img/hero-1.png')}}" alt="hero">
                    </div>
                </div>
            </div>
        </section><!--/.hero-section-->
        
        <section class="promo-section bd-bottom padding">
            <div class="container">
                <div class="row promo-wrap">
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="promo-item wow fadeInUp" data-wow-delay="200ms">
                            <i class="sb sb-chart"></i>
                            <i class="sb sb-chart transparent"></i>
                            <h3>Subdomain & Hosting</h3>
                            <p>We provide marketing service to startups businesses to looking for a partner digital media.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="promo-item wow fadeInUp" data-wow-delay="300ms">
                                <i class="sb sb-stats"></i>
                                <i class="sb sb-stats transparent"></i>
                            <h3>Zoom Meeting</h3>
                            <p>We provide marketing service to startups businesses to looking for a partner digital media.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="promo-item wow fadeInUp" data-wow-delay="400ms">
                                <i class="sb sb-hours"></i>
                                <i class="sb sb-hours transparent"></i>
                            <h3>Sertifikat Elektronik</h3>
                            <p>We provide marketing service to startups businesses to looking for a partner digital media.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="promo-item wow fadeInUp" data-wow-delay="500ms">
                            <i class="sb sb-target"></i>
                            <i class="sb sb-target transparent"></i>
                            <h3>Data Sektoral</h3>
                            <p>We provide marketing service to startups businesses to looking for a partner digital media.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.promo-section-->
        
        
        <section class="project-section bd-bottom padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <span>Lainnya</span>
                    <h2>Layanan Informasi Dinas Kominfo-SP</h2>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 sm-padding">
                        <div id="project-carousel" class="project-carousel owl-carousel">
                            <div class="project-item">
                                <img src="{{url('public/frontend/img/logo-fb-tes.jpg')}}" alt="img">
                                <div class="project-content">
                                    <h3><a href="#">Lapor SP4N</a></h3>
                                    <span>Twice profit than before you ever got in business.</span>
                                    <a href="#" class="read-more"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                            <div class="project-item">
                                <img src="{{url('public/frontend/img/logo-fb-tes.jpg')}}" alt="img">
                                <div class="project-content">
                                    <h3><a href="#">Pangkep TV</a></h3>
                                    <span>Conduct more customer in a fast better way.</span>
                                    <a href="#" class="read-more"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                            <div class="project-item">
                                <img src="{{url('public/frontend/img/logo-fb-tes.jpg')}}" alt="img">
                                <div class="project-content">
                                    <h3><a href="#">Satu Data</a></h3>
                                    <span>Help customers in real-time across all your channels.</span>
                                    <a href="#" class="read-more"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.project-section-->
        
		
        <section class="widget-section bg-dark padding">
           <div class="left-design"></div>
           <div class="right-design"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="widget-content">
                            <a href="#"><img src="{{url('public/frontend/img/logo-light.png')}}" alt="brand"></a>
                            <p>Dinas Komunikasi, Informatika, Statistik, dan Persandian <br>Kabupaten Pangkajene dan Kepulauan</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="widget-content">
                            <h4>Alamat Kantor</h4>
                            <p>Jl. Sultan Hasanuddin (Kantor Bupati Pangkep), Kabupaten Pangkajene dan Kepulauan, Sulawesi Selatan</p>
                            <span>diskominfo@pangkepkab.go.id</span>
                            <span>(0410) 21004</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 sm-padding">
                        <div class="widget-content">
                            <h4>Newslatter Subscription</h4>
                            <p>Subscribe and get 10% off from our <br>architecture company.</p>
                            <div class="subscribe-box clearfix">
                                <div class="subscribe-form-wrap">
                                    <form action="#" class="subscribe-form">
                                        <input type="email" name="email" id="subs-email" class="form-input" placeholder="Enter Your Email Address...">
                                        <button type="submit" class="submit-btn">Subscribe</button>
                                        <div id="subscribe-result">
                                            <p class="subscription-success"></p>
                                            <p class="subscription-error"></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.widget-section-->
        
		<footer class="footer-section bg-dark align-center">
			<div class="container">
				<p>&copy; <script> document.write(new Date().getFullYear())</script> Saasbiz Powered by DynamicLayers</p>
			</div>
		</footer><!-- /.footer-section -->

		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>
	
		<!-- jQuery Lib -->
		<script src="{{url('public/frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="{{url('public/frontend/js/vendor/bootstrap.min.js')}}"></script>
		<!-- Tether JS -->
		<script src="{{url('public/frontend/js/vendor/tether.min.js')}}"></script>
		<!-- Slicknav JS -->
		<script src="{{url('public/frontend/js/vendor/jquery.slicknav.min.js')}}"></script>
		<!-- OWL-Carousel JS -->
		<script src="{{url('public/frontend/js/vendor/owl.carousel.min.js')}}"></script>
		<!-- Smooth Scroll JS -->
		<script src="{{url('public/frontend/js/vendor/smooth-scroll.min.js')}}"></script>
        <!-- Venobox JS -->
        <script src="{{url('public/frontend/js/vendor/venobox.min.js')}}"></script>
		<!-- Ajaxchimp JS -->
		<script src="{{url('public/frontend/js/vendor/jquery.ajaxchimp.min.js')}}"></script>
		<!--YTPlayer Js-->
		<script src="{{url('public/frontend/js/vendor/jquery.mb.YTPlayer.min.js')}}"></script>
		<!-- Nice Select JS -->
        <script src="{{url('public/frontend/js/vendor/jquery.nice-select.min.js')}}"></script>
        <!-- Pricing Switcher JS -->
        <script src="{{url('public/frontend/js/vendor/pricing-switcher.js')}}"></script>
        <!-- Waypoints JS -->
        <script src="{{url('public/frontend/js/vendor/waypoints.min.js')}}"></script>
        <!-- Odometer JS -->
        <script src="{{url('public/frontend/js/vendor/odometer.min.js')}}"></script>
		<!-- Wow JS -->
		<script src="{{url('public/frontend/js/vendor/wow.min.js')}}"></script>
		<!-- Main JS -->
		<script src="{{url('public/frontend/js/main.js')}}"></script>

    </body>
</html>