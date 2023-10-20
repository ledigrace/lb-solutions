@extends('layouts.app')

@section('title')
    LB SOLUTIONS | HOME PAGE
@endsection

@section('content')

<!-- section hero page -->
<section class="home">
    <div class="swiper bg-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets/images/lb-banner-trial4.jpeg" alt="">
          
          <div class="text-content">
            <h2 class="title">LB<span>SOLUTIONS</span></h2>
            <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis alias necessitatibus odio nemo, porro fugit suscipit consectetur nulla. Vel corporis tempora aut deleniti perspiciatis </p> -->
            <button class="read-btn">READ MORE <i class="bi bi-arrow-right"></i></button>
          </div>
        </div>

        <div class="swiper-slide dark-layer">
          <img src="assets/images/lb-banner-trial2.jpeg" alt="">
          <div class="text-content">
            <h2 class="title">LB<span>SOLUTIONS</span></h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis alias necessitatibus odio nemo, porro fugit suscipit consectetur nulla. Vel corporis tempora aut deleniti perspiciatis</p>
            <button class="read-btn">READ MORE <i class="bi bi-arrow-right"></i></button>
          </div>
        </div>

        <div class="swiper-slide dark-layer">
          <img src="assets/images/lb-banner-trial6.jpeg" alt="">
          <div class="text-content">
            <h2 class="title">LB<span>SOLUTIONS</span></h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis alias necessitatibus odio nemo, porro fugit suscipit consectetur nulla. Vel corporis tempora aut deleniti perspiciatis</p>
            <button class="read-btn">READ MORE <i class="bi bi-arrow-right"></i></button>
          </div>
        </div>

        <div class="swiper-slide">
          <img src="assets/images/lb-solutions-banner-3.jpeg" alt="">
          <div class="text-content">
            <h2 class="title">LB<span>SOLUTIONS</span></h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis alias necessitatibus odio nemo, porro fugit suscipit consectetur nulla. Vel corporis tempora aut deleniti perspiciatis</p>
            <button class="read-btn">READ MORE <i class="bi bi-arrow-right"></i></button>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-slider-thumbs">
      <div class="swiper-wrapper thumbs-container">
        <img class="swiper-slide" src="assets/images/lb-banner-trial4.jpeg" alt="">
        <img class="swiper-slide" src="assets/images/lb-banner-trial2.jpeg" alt="">
        <img class="swiper-slide" src="assets/images/lb-banner-trial6.jpeg" alt="">
        <img class="swiper-slide" src="assets/images/lb-solutions-banner-3.jpeg" alt="">
      </div>
    </div>
  </section>
  <!-- end of section hero page -->

  <!-- about section -->
  <section class="section">
  <div class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>ABOUT US</h1>
          <p>At LuxeBeaute Solutions Inc., we bridge the gap between creativity and technology to propel businesses into the digital future. Our foundation is built on providing innovative marketing and IT solutions tailored to meet the unique needs of our clientele. As a sibling venture to the award-winning LuxeBeaute International Academy Inc., a revered institution for permanent makeup education, we inherit a legacy of excellence and a keen understanding of the beauty industry.</p>
          <button class="read-btn mx-auto">MORE ABOUT US <i class="bi bi-arrow-right"></i></button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end of about section -->

<!-- services -->
<section class="services">
      <div class="container">
        <div class="row">
         <div class="col-md-12">
          <h1><span style="color: #175738;">SERV</span>ICES</h1>
        </div>
          <div class="col-md-3 mt-3">
              <div class="container-1">
                <div class="box" style="--clr:#ff0000">
                    <div class="container mt-4">
                    <div class="row">
                      <div class="col-s-12 text-center">
                  <img class="" width="60" height="60" src="/assets/images/icons8-digital-marketing.png"/>
                </div>
                  <h2 class="mt-2">DIGITAL MARKETING</h2>
                  <h2><p>-SEARCH ENGINE OPTIMIZATION (SEO)</p></h2>
                  <h2><p>-PAY-PER-CLICK ADVERTISING (PPC)</p></h2>
                  <h2><p>-SOCIAL MEDIA MANAGEMENT & ADVERTISING</p></h2>
                  <h2><p>-CONTENT CREATION <br>& STRATEGY</p></h2>
                </div>
                </div>
                
                  <div class="clip">
                    <span>HOVER HERE</span>
                    <span>HOVER HERE</span>
                    <span>HOVER HERE</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-3">
              <div class="container-1">
                <div class="box" style="--clr:#ff0000">
                    <div class="container mt-4">
                    <div class="row">
                      <div class="col-s-12 text-center">
                        <img width="60" height="60" src="/assets/images/icons8-design-thinking.png" alt="external-design-design-thinking2-sbts2018-solid-sbts2018-2"/>
                </div>
                  <h2 class="mt-2">BRANDING & DESIGN</h2>
                  <h2><p>-LOGO & GRAPHIC DESIGN</p></h2>
                  <h2><p>-WEB DESIGN & DEVELOPMENT</p></h2>
                  <h2><p>-VIDEO PRODUCTION <br>& ANIMATION</p></h2>
                  
                </div>
                </div>
                
                  <div class="clip">
                    <span>HOVER HERE</span>
                    <span>HOVER HERE</span>
                    <span>HOVER HERE</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-3">
              <div class="container-1">
                <div class="box" style="--clr:#ff0000">
                    <div class="container mt-4">
                    <div class="row">
                      <div class="col-s-12 text-center">
                        <img width="60" height="60" src="/assets/images/icons8-e-commerce.png" alt="e-commerce"/>
                </div>
                  <h2 class="mt-2">E-COMMERCE SOLUTIONS</h2>
                  <h2><p>-PLATFORM SETUP & CUSTOMIZATION</p></h2>
                  <h2><p>-INVENTORY MANAGEMENT <br>SYSTEMS</p></h2>
                  <h2><p>-PAYMENT GATEWAY INTEGRATION</p></h2>
                  <h2><p>-ENROLLMENT SYSTEM</p></h2>
                </div>
                </div>
                
                  <div class="clip">
                    <span>HOVER HERE</span>
                    <span>HOVER HERE</span>
                    <span>HOVER HERE</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-3">
              <div class="container-1">
                <div class="box" style="--clr:#ff0000">
                    <div class="container mt-4">
                    <div class="row">
                      <div class="col-s-12 text-center">
                        <img width="50" height="50" src="/assets/images/icons8-marketing.png" alt="camera--v1"/>

                        
                </div>
                  <h2 class="mt-2">MARKETING PHOTOGRAPHY & VIDEOGRAPHY</h2>
                  <h2><p>-PRODUCT PHOTOGRAPHY</p></h2>
                  <h2><p>-PROMOTIONAL VIDEO CREATION</p></h2>
                  <h2><p>-CONTENT STRATEGY STORY BOARDING FOR VISUAL MEDIA</p></h2>
                </div>
                </div>
                
                  <div class="clip">
                    <span>HOVER HERE</span>
                    <span>HOVER HERE</span>
                    <span>HOVER HERE</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-4 text-center">
              <button class="read-btn mx-auto">SEE MORE<i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
      </div>
    </section>

  <!-- end of about services -->

  <!-- metrics -->
<section class="metrics">
  <div class="container">
    <div class="col-md-12">
      <div class="container_metrics">
        <div class="card__container">
          <div class="card__bx" style="color: #c9a232;">
            <div class="card__data">
              <div class="card__icon">
                <img width="50" height="50" src="assets/images/icons8-marketing.gif" alt="commercial"/>
              </div>
              <div class="card__content">
                <h3 class="num" data-val="100">000<sup>%</sup></h3>
                <p>TOP NOTCH IN MARKETING</p>
              </div>
            </div>
          </div>
          <div class="card__bx" style="color: #c9a232;">
            <div class="card__data">
              <div class="card__icon">
                <img width="50" height="50" src="assets/images/icons8-people.gif" alt="external-business-partnership-startups-tanah-basah-glyph-tanah-basah"/>
              </div>
              <div class="card__content">
                <h3 class="num" data-val="3200">0000<sup>+</sup></h3>
                <p>BUSINESS PARTNERS</p>
                
              </div>
            </div>
          </div>
          <div class="card__bx" style="color: #c9a232;">
            <div class="card__data">
              <div class="card__icon">
                <img width="50" height="50" style="background: #fff;" src="assets/images/ezgif.com-crop.gif" alt="external-business-partnership-startups-tanah-basah-glyph-tanah-basah"/>
              </div>
              <div class="card__content">
                <h3 class="num" data-val="100">000<sup>hello</sup></h3>
                <p>AWARD WINNING COMPANY</p>
                
              </div>
            </div>
          </div>
      
        </div>
      
      </div>
    </div>
  </div>
  </section>
  <!-- end of metrics -->


  <!-- project section -->
  <section class="projects mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 img-bg-1">
          <h4 class="text-center">LUXEBEAUTE INTERNATIONAL ACADEMY</h4>
          <img class="img-fluid mx-auto" src="assets/images/Screenshot 2023-10-14 at 4.51.44 PM.png" alt="">
        </div>
        <div class="col-md-6 mt-5 bg-1-p">
          <h1>OUR PROJECTS</h1>
          <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia qui consectetur rem molestias voluptate voluptatibus id corrupti, molestiae facilis. Accusamus alias laudantium quasi harum sapiente dolorem molestiae ut dicta, accusantium officia dolore possimus? Dolores quam accusamus officiis aliquid eius inventore magni, </p>

          <button class="read-btn mx-auto">SEE MORE PROJECTS<i class="bi bi-arrow-right"></i></button>
        </div>
      </div>
    </div>
  </section>
  <!-- end of project section -->
@endsection