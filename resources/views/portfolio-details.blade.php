<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SEO</title>
  <meta content="Aprenda técnicas de SEO com os maiores nomes do mercado. Aumente o ranqueamento do seu site e faça seu CTR ir às alturas!" name="description">
  <meta content="seo, ranqueamento, taxa de cliques, performance" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v3.0.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <!-- Start: Google Structured Data Markup -->
<script type="application/ld+json" class="yoast-schema-graph">
  {
   "@context":"https://schema.org",
   "@graph":[
   {
   
   "@type":"Organization",
   "@id":"{{route('home')}}",
   "name":"Empresa",
   "url":"{{route('home')}}",
   "sameAs":[
   "https://www.facebook.com/SEOProject",
   "https://www.instagram.com/SEOProject/",
   "https://www.linkedin.com/company/SEOProject"
   ],
   "logo":{
   "@type":"ImageObject",
   "@id":"{{ asset('assets/logo.png') }}",
   "inLanguage":"pt-BR",
   "url":"{{ asset('assets/logo.png') }}",
   "width":350, 
   "height":116,
   "caption":"SEOProject"
   }
   },
   {
   "@type":"WebSite",
   "@id":"{{route('home')}}",
   "url":"{{route('home')}}",
   "name":"SEOProject",
   "description":"Projeto realiazado pela empresa Adapti Soluções Web 
   afim de trazer uma maio otimizção dos seu sites e seus sistemas, além de capacitar seus membros",
   "publisher":{
   "@id":"{{route('home')}}"
   },
   "inLanguage":"pt-BR"
   },
   {
   "@type":"ImageObject",
  "@id":"{{ asset(`assets/img/{$nomeDaImagem}`)}}",
   "inLanguage":"pt-BR",
   "url":"{{ asset(`assets/img/{$nomeDaImagem}`)}}",
   "width":2048,
   "height":1365
   },
   {
   "@type":"WebPage",
   "@id":"{{route('blog')}}",
   "url":"{{route('blog')}}",
   "name":"{$title}",
   "isPartOf":{
   "@type": "WebSite",
   "@id":"{{route('home')}}"
   },
   "primaryImageOfPage":{
  "@id":"{{route('home')}}"
   },
   "datePublished":"2020-11-30T17:57:50+00:00",
   "dateModified":"2020-12-01T12:15:21+00:00",
   "description":"Descrição do assunto do post",
   "inLanguage":"pt-BR",
   "potentialAction":[{
   "@type":"ReadAction",
   "target":["{{route('blog')"]
   }]
   },
   {
   "@type":"Article",
   "@id":"{{route('blog')}}",
   "isPartOf":{
   "@id":"{{route('home')}}"
   },
   "author":{
   "@type": "$authorName",
   "name": "$authorName",
   "@id":"https://www.empresa.com.br/#/schema/person/"
   },
   "headline":"{$title}",
   "datePublished":"2020-11-30T17:57:50+00:00",
   "dateModified":"2020-12-01T12:15:21+00:00",
   "mainEntityOfPage":{
   "@type": "WebPage",
  "@id":"https://www.empresa.com.br/link-do-post//#webpage"
   },
   "commentCount":0,
   "publisher":{
   "@type": "Organization",
   "name": "SEO Project",
   "@id":"{{ route('home')}}",
   "logo": {
   "@type": "ImageObject",
   "url": "{{ asset('assets/logo.png') }}"
   }
   },
   "image":{
  "@id":"{{route('blog')}}" 
   },
   "keywords":"SEO, Dados estruturados, site fácil",
   "articleSection":"Blog, Post",
   "inLanguage":"pt-BR",
   "potentialAction":[{
   "@type":"CommentAction",
   "name":"Comment",
  "target":["https://www.empresa.com.br/link-do-post//#respond"]
   }]
   },
   {
   "@type":"Person",
  direicionada ao post -->
  "@id":"{{route('home')}}",
   "name":"{$authorName}",
   "image":{
   "@type":"ImageObject",
   "@id":"https://www.empresa.com.br/#personlogo",
   "inLanguage":"pt-BR",
  "url":"https://secure.gravatar.com/avatar/f683cfca4910730f7e946931262e8
  a35?s=96&d=mm&r=g",
   "caption":"$authorName"
   },
   "description":"Alguma descrição sobre a pessoa!",
   "sameAs":["http://www.www.empresa.com.br"]
   }
   ] 
  }</script>
  <!-- End: Google Structured Data Markup --> 

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">SEO<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li> </li>
          <li><a href="#about">Sobre Nós</a></li> <!--#portifolio-->
          <li> </li>
          <li><a href="#team">Equipe</a></li> <!--#about-->
          <li> </li>
          <li><a href="#contact">Localização</a></li> <!-- #services-->
          <li> </li>
          <li><a href="#contact">Contato</a></li> <!--#portifolio  -->
          <li> </li>
          <li><a href="#footer">Newsletter</a></li> <!--#portifolio  -->
      </nav><!-- .nav-menu -->

      <a href="#services" class="get-started-btn scrollto">Blog</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog - SEO</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Aumente sua taxa de cliques</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="assets/img/portfolio/cliques.png" class="img-fluid" alt="">
            <!--<img src="assets/img/portfolio/portfolio-details-2.jpg" class="img-fluid" alt="">
            <img src="assets/img/portfolio/portfolio-details-3.jpg" class="img-fluid" alt="">
            -->
          </div>
          <!--
          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Web design</li>
              <li><strong>Client</strong>: ASU Company</li>
              <li><strong>Project date</strong>: 01 March, 2020</li>
              <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
            </ul>
          </div>
        -->

        </div>

        <div class="portfolio-description">
          <h2>Aumente sua taxa de cliques</h2>
          <p>
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
          </p>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>SEO<span>.</span></h3>
              <p>
                Rodovia BR 101 Norte, KM 60  <br>
                Bairro Litorâneo, São Mateus – ES<br><br>
                <strong>Telefone:</strong> (27) 3312-1708<br>
                <strong>Email:</strong> contato@adapti.info<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://github.com/adaptiOficial" class="twitter"><i class="bx bxl-github"></i></a> 
                <a href="https://www.facebook.com/AdaptiEmpresaJr" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/adaptiempresajr/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>  -->
                <a href="https://www.linkedin.com/company/adaptiempresajr/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Sobre Nós</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Equipe</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Localização</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contato</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Posts do Blog</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">SEO e sua imporancia</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Divisão SEO</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Implantação SEO</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing & SEO</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">SEO - Conceito</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Assine nossa Newsletter</h4>
            <p>Assine e fique por dentro de todas novidades sobre SEO.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SEO</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://www.adapti.info/">Adapti</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>