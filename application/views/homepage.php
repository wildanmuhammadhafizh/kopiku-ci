<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="<?=base_url()?>resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      :root {
        --bs-primary: #C8A27A !important;
      }
      .hero-background {
        --x: 0;
        --y: 0;
        --bg-img: '';
        background-repeat: no-repeat;
        background-size: cover;
        background-position: var(--x) var(--y);
        width: 100%;
        height: 100vh;
        }
        @media (min-width: 576px) {
            .hero-background {
                height: 40vh;
              background-size: 110% auto;
            }
        }

        @media (min-width: 992px) {
            .hero-background {
                height: 50vh;
            }
        }
        @media (min-width:1100px){
            .hero-background {
                height: 100vh;
            }
        }
        @media (min-width:1400px){
            .hero-background {
                height: 100vh;
            }
        }
      .btn-primary{
        background-color: #C8A27A;
        border-color: #C8A27A
      }
      .btn-primary:hover{
        background-color: #C8A27ADD;
        border-color: #C8A27ADD
      }
      .border{
        --bs-border-color: #F3F4F6
      }
      .img-card{
        position: relative;
      }
      .img-card .hover{
        color: white;
        display: none;
        justify-content: center;
        align-items:center;
        position: absolute;
        top: 0;
        bottom:0;
        left:0;
        right:0;
        background-color: #3334;
      }
      .img-card:hover .hover{
        display: flex;
        gap: .5rem
      }
      .nav-link:focus, .nav-link:hover {
        --bs-nav-link-hover-color: #C8A27A
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
      <div class="container position-relative py-2">
        <a class="navbar-brand position-absolute" href="#"><img src="<?php echo base_url('resources/img/logo.png');?>" height="55px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto">
            <a class="nav-link" aria-current="page" href="#about">About</a>
            <a class="nav-link" href="#our-coffee">Our Coffee</a>
            <a class="nav-link" href="#instagram">Instagram</a>
            <a class="nav-link" href="#location">Location</a>
            <a class="nav-link" href="#gallery">Gallery</a>
          </div>
        </div>
        <div class="position-absolute d-flex align-items-center" style="right:0; top: 0; bottom:0">
          <a class="btn btn-primary rounded-0" href="https://grandjatijunction.sawala.xyz/contact/"> 
            Order Now        
          </a>
        </div>
      </div>
    </nav>

    <!-- hero -->
    <header class="container pt-5">
      <h1 class="mb-5 fw-bolder text-uppercase text-center">Boost your day with <br> a cup of coffee</h1>
      <div class="d-flex justify-content-center">
        <img src="<?php echo base_url('resources/img/hero2.png');?>">
      </div>
    </header>
    
    <!-- About -->
    <section id="about" style="background-color:#F3F4F6; margin-top:-80px; padding-top: 80px">
      <div class="container py-4">
        <div class="row">
          <div class="col-6 d-flex justify-content-center">
            <img height="600px" src="<?php echo base_url('resources/img/about.png');?>" alt="">
          </div>
          <div class="col-6 col-6 d-flex justify-content-center align-items-center">
            <div>
              <p>Aliquet arcu in etiam ornare eget libero, felis mi eget. Pulvinar sollicitudin lacus, lacus, hendrerit elit etiam. Tempus neque, vel sit morbi at interdum odio aenean. Auctor a pellentesque est dictum. Ullamcorper vel interdum nibh in ultricies amet. Suspendisse sed posuere sit ut aenean massa. Auctor a lorem pellentesque est dictum. Ullamcorper vel interdum nibh in ultricies amets uspendisse.</p>
              <button class="btn btn-primary rounded-0 mt-3" type="button">READ MORE</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Coffe -->
    <section id="our-coffee">
      <div class="container py-5">
        <h1 class="text-center mb-5">Our Coffee</h1>
        <div class="row mb-5" style="--bs-gutter-x: 4rem">
          <div class="col-4">
            <div class="img-card">
              <img width="100%" src="<?php echo base_url('resources/img/coffee 1.png'); ?>">
              <div class="hover">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17 9H1M9 1V17V1Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>See Description<span>
              </div>
            </div>
            <div class="py-3 text-center"> Luwak Coffe</div>
          </div>
          <div class="col-4">
            <div class="img-card">
              <img width="100%" src="<?php echo base_url('resources/img/coffee 2.png'); ?>">
              <div class="hover">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17 9H1M9 1V17V1Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>See Description<span>
              </div>
            </div>
            <div class="py-3 text-center">Caramel Latte</div>
          </div>
          <div class="col-4">
            <div class="img-card">
              <img width="100%" src="<?php echo base_url('resources/img/coffee 3.png'); ?>">
              <div class="hover">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17 9H1M9 1V17V1Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>See Description<span>
              </div>
            </div>
            <div class="py-3 text-center"> Cappucino</div>
          </div>
        </div>
        <div class="text-center">
          <a class="btn btn-primary rounded-0 mt-3">ALL MENU</a>
        </div>
      </div>
    </section>

    <!-- Instagram -->
    <section id="instagram" style="background-color:#F3F4F6;">
      <div class="container py-5">
        <div class="row mb-5" style="--bs-gutter-x: 2rem; --bs-gutter-y: 2rem">
          <div class="col-4 d-flex align-items-center">
            <div>
              <h2>Lets check our <br> Instagram account</h2>
              <span class="text-gray">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.99999 6.87579C8.27968 6.87579 6.87577 8.2797 6.87577 10C6.87577 11.7203 8.27968 13.1242 9.99999 13.1242C11.7203 13.1242 13.1242 11.7203 13.1242 10C13.1242 8.2797 11.7203 6.87579 9.99999 6.87579ZM19.3703 10C19.3703 8.70626 19.382 7.42423 19.3094 6.13283C19.2367 4.63283 18.8945 3.30158 17.7976 2.2047C16.6984 1.10548 15.3695 0.765639 13.8695 0.692982C12.5758 0.620326 11.2937 0.632045 10.0023 0.632045C8.70858 0.632045 7.42655 0.620326 6.13515 0.692982C4.63515 0.765639 3.3039 1.10783 2.20702 2.2047C1.1078 3.30392 0.767958 4.63283 0.695302 6.13283C0.622645 7.42658 0.634364 8.70861 0.634364 10C0.634364 11.2914 0.622645 12.5758 0.695302 13.8672C0.767958 15.3672 1.11015 16.6985 2.20702 17.7953C3.30624 18.8945 4.63515 19.2344 6.13515 19.307C7.4289 19.3797 8.71093 19.368 10.0023 19.368C11.2961 19.368 12.5781 19.3797 13.8695 19.307C15.3695 19.2344 16.7008 18.8922 17.7976 17.7953C18.8969 16.6961 19.2367 15.3672 19.3094 13.8672C19.3844 12.5758 19.3703 11.2938 19.3703 10ZM9.99999 14.807C7.33983 14.807 5.19296 12.6602 5.19296 10C5.19296 7.33986 7.33983 5.19298 9.99999 5.19298C12.6601 5.19298 14.807 7.33986 14.807 10C14.807 12.6602 12.6601 14.807 9.99999 14.807ZM15.0039 6.11876C14.3828 6.11876 13.8812 5.6172 13.8812 4.99611C13.8812 4.37501 14.3828 3.87345 15.0039 3.87345C15.625 3.87345 16.1266 4.37501 16.1266 4.99611C16.1267 5.14359 16.0978 5.28966 16.0415 5.42595C15.9851 5.56224 15.9024 5.68607 15.7981 5.79036C15.6939 5.89464 15.57 5.97733 15.4337 6.03368C15.2974 6.09004 15.1514 6.11895 15.0039 6.11876Z" fill="#9CA3AF"/></svg>
                your-instagram
              </span>
            </div>
          </div>
          <div class="col-4">
            <img width="100%" src="<?php echo base_url('resources/img/ig 1.png'); ?>">
          </div>
          <div class="col-4">
            <img width="100%" src="<?php echo base_url('resources/img/ig 2.png'); ?>">
          </div>
          <div class="col-4">
            <img width="100%" src="<?php echo base_url('resources/img/ig 3.png'); ?>">
          </div>
          <div class="col-4">
            <img width="100%" src="<?php echo base_url('resources/img/ig 4.png'); ?>">
          </div>
          <div class="col-4">
            <img width="100%" src="<?php echo base_url('resources/img/ig 5.png'); ?>">
          </div>
        </div>
      </div>
    </section>

    <!-- Location -->
    <section id="location">
      <div class="container py-5">
        <div class="row border p-5" style="--bs-border-width: 7px; --bs-gutter-x: 2rem;">
          <div class="col-6 d-flex justify-content-center">
            <img width="100%" src="<?php echo base_url('resources/img/location.png');?>" alt="">
          </div>
          <div class="col-6 col-6 d-flex justify-content-center align-items-center">
            <div>
              <h2>Let’s come and drink</h2>
              <div class="text-muted d-flex gap-4 mt-4">
                <div>
                  <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.9375 2C10.568 2.0028 8.29633 2.94532 6.62083 4.62082C4.94533 6.29632 4.0028 8.56799 4.00001 10.9375C3.99717 12.8739 4.62968 14.7577 5.80051 16.3C5.80051 16.3 6.04426 16.6209 6.08407 16.6672L12.9375 24.75L19.7942 16.6632C19.8299 16.6201 20.0745 16.3 20.0745 16.3L20.0753 16.2976C21.2456 14.7559 21.8778 12.873 21.875 10.9375C21.8722 8.56799 20.9297 6.29632 19.2542 4.62082C17.5787 2.94532 15.307 2.0028 12.9375 2ZM12.9375 14.1875C12.2947 14.1875 11.6664 13.9969 11.1319 13.6398C10.5974 13.2827 10.1809 12.7751 9.9349 12.1812C9.68892 11.5874 9.62456 10.9339 9.74996 10.3035C9.87536 9.67302 10.1849 9.09392 10.6394 8.6394C11.0939 8.18488 11.673 7.87535 12.3035 7.74995C12.9339 7.62455 13.5874 7.68891 14.1812 7.93489C14.7751 8.18088 15.2827 8.59744 15.6398 9.1319C15.9969 9.66636 16.1875 10.2947 16.1875 10.9375C16.1864 11.7991 15.8437 12.6251 15.2344 13.2344C14.6252 13.8437 13.7991 14.1864 12.9375 14.1875Z" fill="#C8A27A"/></svg>
                </div>
                <div>
                  JL. Eros id eget dolor, non gravida lobortis sed varius. Et eget urna enim amet, platea orci arcu volutpat. In sit molestie etiam fermentum dictum venenatis elementum.</div>
                </div>
              <div class="text-muted d-flex gap-4 mt-4">
                <div>
                  <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.25 0C4.736 0 0.25 4.486 0.25 10C0.25 15.514 4.736 20 10.25 20C15.764 20 20.25 15.514 20.25 10C20.25 4.486 15.764 0 10.25 0ZM16 11H9.25V4H11.25V9H16V11Z" fill="#C8A27A"/></svg>
                </div>              
                  <div>Opens at 09.00 AM - 22.00 PM</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery -->
    <section id="gallery">
      <div class="row" style="--bs-gutter-x: 0rem;">
        <div class="col-4">
          <img width="100%" src="<?php echo base_url('resources/img/gallery 1.png'); ?>">
        </div>
        <div class="col-4">
          <img width="100%" src="<?php echo base_url('resources/img/gallery 2.png'); ?>">
        </div>
        <div class="col-4">
          <img width="100%" src="<?php echo base_url('resources/img/gallery 3.png'); ?>">
        </div>
      </div>
    </section>

    <!-- Footer Banner -->
    <section style="background-color:#F3F4F6; background-image:url(<?php echo base_url('resources/img/bg-footer.png')?>); background-position: bottom center; background-repeat: no-repeat">
      <div class="text-center" style="padding-top: 7rem; padding-bottom: 7rem;">
        <h1>Coffee with a friend is like capturing happiness in a cup.</h1>
      </div>
    </section>

    <!-- Footer -->
    <footer style="background-color:#C8A27A;">
      <div class="container py-5">
        <div class="row">
          <div class="col-6">
            <span class="text-white">© 2022 Cofeeku, Inc. All rights reserved.</span>
          </div>
          <div class="col-6 d-flex justify-content-end gap-4">
          <a href="#" class="">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.16 4.84024C15.28 0.400244 9.40001 -0.919756 4.84001 1.84024C0.40001 4.60024 -1.03999 10.6002 1.84001 15.0402L2.08001 15.4002L1.12001 19.0002L4.72001 18.0402L5.08001 18.2802C6.64001 19.1202 8.32001 19.6002 10 19.6002C11.8 19.6002 13.6 19.1202 15.16 18.1602C19.6 15.2802 20.92 9.40024 18.16 4.84024V4.84024ZM15.64 14.0802C15.16 14.8002 14.56 15.2802 13.72 15.4002C13.24 15.4002 12.64 15.6402 10.24 14.6802C8.20001 13.7202 6.52001 12.1602 5.32001 10.3602C4.60001 9.52024 4.24001 8.44024 4.12001 7.36024C4.12001 6.40024 4.48001 5.56024 5.08001 4.96024C5.32001 4.72024 5.56001 4.60024 5.80001 4.60024H6.40001C6.64001 4.60024 6.88001 4.60024 7.00001 5.08024C7.24001 5.68024 7.84001 7.12024 7.84001 7.24024C7.96001 7.36024 7.96001 7.60024 7.84001 7.72024C7.96001 7.96024 7.84001 8.20024 7.72001 8.32024C7.60001 8.44024 7.48001 8.68024 7.36001 8.80024C7.12001 8.92024 7.00001 9.16024 7.12001 9.40024C7.60001 10.1202 8.20001 10.8402 8.80001 11.4402C9.52001 12.0402 10.24 12.5202 11.08 12.8802C11.32 13.0002 11.56 13.0002 11.68 12.7602C11.8 12.5202 12.4 11.9202 12.64 11.6802C12.88 11.4402 13 11.4402 13.24 11.5602L15.16 12.5202C15.4 12.6402 15.64 12.7602 15.76 12.8802C15.88 13.2402 15.88 13.7202 15.64 14.0802V14.0802Z" fill="white"/></svg>
          </a>
          <a href="#" class="">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.315 0C12.745 0 13.099 0.0129999 14.123 0.0599999C15.187 0.109 15.914 0.278 16.55 0.525C17.2175 0.775874 17.8222 1.16936 18.322 1.678C18.8306 2.17777 19.2241 2.7825 19.475 3.45C19.722 4.086 19.891 4.813 19.94 5.877C19.988 6.944 20 7.284 20 10V10.08C20 12.723 19.988 13.067 19.94 14.123C19.891 15.187 19.722 15.914 19.475 16.55C19.2241 17.2175 18.8306 17.8222 18.322 18.322C17.8222 18.8306 17.2175 19.2241 16.55 19.475C15.914 19.722 15.187 19.891 14.123 19.94C13.056 19.988 12.716 20 10 20H9.92C7.277 20 6.933 19.988 5.877 19.94C4.813 19.891 4.086 19.722 3.45 19.475C2.7825 19.2241 2.17777 18.8306 1.678 18.322C1.16936 17.8222 0.775874 17.2175 0.525 16.55C0.278 15.914 0.109 15.187 0.0599999 14.123C0.0129999 13.099 0 12.744 0 10.315V9.685C0 7.255 0.0129999 6.901 0.0599999 5.877C0.109 4.813 0.278 4.086 0.525 3.45C0.775874 2.7825 1.16936 2.17777 1.678 1.678C2.17777 1.16936 2.7825 0.775874 3.45 0.525C4.086 0.278 4.813 0.109 5.877 0.0599999C6.901 0.0129999 7.256 0 9.685 0H10.315ZM10.234 1.802H9.766C7.31 1.802 6.982 1.813 5.959 1.86C4.984 1.905 4.455 2.067 4.102 2.204C3.635 2.386 3.302 2.602 2.952 2.952C2.602 3.302 2.386 3.635 2.204 4.102C2.067 4.455 1.904 4.984 1.86 5.959C1.813 6.982 1.802 7.31 1.802 9.766V10.234C1.802 12.69 1.813 13.018 1.86 14.041C1.905 15.016 2.067 15.545 2.204 15.898C2.386 16.364 2.603 16.698 2.952 17.048C3.302 17.398 3.635 17.614 4.102 17.796C4.455 17.933 4.984 18.096 5.959 18.14C7.013 18.188 7.329 18.198 10 18.198H10.08C12.677 18.198 12.997 18.188 14.04 18.14C15.016 18.095 15.545 17.933 15.898 17.796C16.364 17.614 16.698 17.398 17.048 17.048C17.398 16.698 17.614 16.365 17.796 15.898C17.933 15.545 18.096 15.016 18.14 14.041C18.188 12.986 18.198 12.671 18.198 10V9.92C18.198 7.323 18.188 7.003 18.14 5.96C18.095 4.984 17.933 4.455 17.796 4.102C17.6358 3.66757 17.3802 3.2746 17.048 2.952C16.7254 2.61986 16.3324 2.36426 15.898 2.204C15.545 2.067 15.016 1.904 14.041 1.86C13.018 1.813 12.69 1.802 10.234 1.802ZM10 4.865C10.6743 4.865 11.3421 4.99782 11.9651 5.25588C12.5881 5.51394 13.1542 5.89218 13.631 6.36901C14.1078 6.84584 14.4861 7.41191 14.7441 8.03492C15.0022 8.65793 15.135 9.32566 15.135 10C15.135 10.6743 15.0022 11.3421 14.7441 11.9651C14.4861 12.5881 14.1078 13.1542 13.631 13.631C13.1542 14.1078 12.5881 14.4861 11.9651 14.7441C11.3421 15.0022 10.6743 15.135 10 15.135C8.63811 15.135 7.33201 14.594 6.36901 13.631C5.40601 12.668 4.865 11.3619 4.865 10C4.865 8.63811 5.40601 7.33201 6.36901 6.36901C7.33201 5.40601 8.63811 4.865 10 4.865ZM10 6.667C9.11603 6.667 8.26827 7.01815 7.64321 7.64321C7.01815 8.26827 6.667 9.11603 6.667 10C6.667 10.884 7.01815 11.7317 7.64321 12.3568C8.26827 12.9818 9.11603 13.333 10 13.333C10.884 13.333 11.7317 12.9818 12.3568 12.3568C12.9818 11.7317 13.333 10.884 13.333 10C13.333 9.11603 12.9818 8.26827 12.3568 7.64321C11.7317 7.01815 10.884 6.667 10 6.667ZM15.338 3.462C15.6563 3.462 15.9615 3.58843 16.1865 3.81347C16.4116 4.03852 16.538 4.34374 16.538 4.662C16.538 4.98026 16.4116 5.28548 16.1865 5.51053C15.9615 5.73557 15.6563 5.862 15.338 5.862C15.0197 5.862 14.7145 5.73557 14.4895 5.51053C14.2644 5.28548 14.138 4.98026 14.138 4.662C14.138 4.34374 14.2644 4.03852 14.4895 3.81347C14.7145 3.58843 15.0197 3.462 15.338 3.462Z" fill="white"/></svg>
          </a>
          <a href="#" class="">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 10C20 4.477 15.523 0 10 0C4.477 0 0 4.477 0 10C0 14.991 3.657 19.128 8.438 19.878V12.891H5.898V10H8.438V7.797C8.438 5.291 9.93 3.907 12.215 3.907C13.309 3.907 14.453 4.102 14.453 4.102V6.562H13.193C11.95 6.562 11.563 7.333 11.563 8.124V10H14.336L13.893 12.89H11.563V19.878C16.343 19.128 20 14.991 20 10Z" fill="white"/></svg>
          </a>
          <a href="#" class="">
            <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.29 16.2534C13.837 16.2534 17.965 10.0004 17.965 4.5784C17.965 4.4004 17.965 4.2234 17.953 4.0484C18.7562 3.46693 19.4493 2.74701 20 1.9224C19.2511 2.2544 18.4566 2.47216 17.643 2.5684C18.4996 2.05546 19.1408 1.24875 19.447 0.298398C18.6417 0.776285 17.7607 1.11313 16.842 1.2944C16.2234 0.636163 15.405 0.200233 14.5136 0.0541031C13.6222 -0.0920265 12.7075 0.0597974 11.9111 0.486067C11.1147 0.912337 10.4811 1.58927 10.1083 2.41206C9.7355 3.23485 9.64437 4.15758 9.849 5.0374C8.21759 4.95564 6.6216 4.53172 5.16465 3.79317C3.70769 3.05461 2.42233 2.01792 1.392 0.750398C0.867318 1.6536 0.706589 2.72282 0.942536 3.74036C1.17848 4.75791 1.79337 5.64728 2.662 6.2274C2.00926 6.2085 1.37063 6.0329 0.8 5.7154V5.7674C0.800389 6.71469 1.1284 7.6327 1.7284 8.36576C2.3284 9.09881 3.16347 9.60179 4.092 9.7894C3.48781 9.95411 2.85389 9.97806 2.239 9.8594C2.50116 10.6749 3.01168 11.388 3.69913 11.899C4.38658 12.41 5.21657 12.6934 6.073 12.7094C5.22212 13.378 4.24779 13.8722 3.20573 14.1639C2.16367 14.4556 1.07432 14.539 0 14.4094C1.8766 15.6137 4.06019 16.2525 6.29 16.2494" fill="white"/></svg>
          </a>
          </div>
        </div>
      </div>
    </footer>

    <script src="<?=base_url()?>resources/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
