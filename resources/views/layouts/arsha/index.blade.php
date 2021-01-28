@extends('layouts.arsha.template')

@section('title', 'The Property Manager')

@section('nav-bar')
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">
    <h1 class="logo mr-auto"><a href="/">The Property Manager</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    {{-- <a href="index.html" class="logo mr-auto"><img src="{{ asset('/arsha/assets/img/logo.png') }}" alt="" class="img-fluid"></a> --}}
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
          <li><a target="_blank" href="http://bedspace.online/blog">Blogs</a></li>
          <li><a target="_blank" href="http://bedspace.online">Listings</a></li>
        </ul>
      </nav>
      <!-- .nav-menu -->
      <a href="/login"  target="_blank" class="get-started-btn scrollto">Login</a>
    </div>
</header>
@endsection
@section('front-screen')
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Simplifying Property Management</h1>
        <h2></h2>
        <div class="d-lg-flex">
          <a href="/#pricing" class="btn-get-started scrollto">Get Started For Free</a>
    
          <a href="#myModal"  style="display:none" data-toggle="modal"> Watch Demo <i class="icofont-play-alt-2"></i></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="{{ asset('/arsha/assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->
@endsection

@section('content')

    <!-- ======= Cliens Section ======= -->
    <section id="clients" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('/arsha/assets/img/clients/client-1.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('/arsha/assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End Cliens Section -->

    

    <!-- ======= Why Us Section ======= -->
    <section id="quick" class="why-us">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>How it works? </strong></h3>
              <p>
               
              </p> 
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> Add your property <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                        enter your property details.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> Assign users <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
                         add and assign other users such as admin, billing, treasury, and ap.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> Add rooms <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                           add the rooms and its pertinent details.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-4" class="collapsed"><span>04</span> Add tenants <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-parent=".accordion-list">
                    <p>
                        movein tenants and enter contract information.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-5" class="collapsed"><span>05</span>Bulk billing <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-5" class="collapse" data-parent=".accordion-list">
                    <p>
                          bill rent, water, lights, and other charges then email to tenant or print for distribution.
                    </p>
                  </div>
                </li>
                
                <li>
                  <a data-toggle="collapse" href="#accordion-list-5" class="collapsed"><span>05</span> Record payments <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-5" class="collapse" data-parent=".accordion-list">
                    <p>
                          record the tenants payments.
                    </p>
                  </div>
                </li>
              

              </ul>
              
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{ asset('/arsha/assets/img/quick.png') }}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
      
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset('/arsha/assets/img/skills.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
             <h3>Current Statistics</h3> 
            <p class="font-italic">
              {{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. --}}
            </p>

            <div class="skills-content">

              <div class="progress">
                <h4 class="skill">Properties <i class="val">10</i></h4>
                {{-- <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div> --}}
              </div>

              <div class="progress">
                <h4 class="skill">Users <i class="val">33</i></h4>
                {{-- <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div> --}}
              </div>

              <div class="progress">
                <h4 class="skill">Rooms <i class="val">1450</i></h4>
                {{-- <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div> --}}
              </div>

              <div class="progress">
                <h4 class="skill">Tenants <i class="val">300</i></h4>
                {{-- <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div> --}}
              </div>

            </div>
           

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container text-center" data-aos="fade-up">

        <div class="section-title">
          <h2>Features</h2>
          <p>We offer a full suite of property management tools to  rental property owners and landlords. Let us help you make your work simple so you can relax knowing your property is running smoothly...</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-building-house"></i></div>
              <h4><a href="">Room management</a></h4>
              <p class="">monitors status of the rooms and views up-to-date information and status for marketing.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-user-plus"></i></div>
              <h4><a href="">Tenant management</a></h4>
               <p>records the movein and moveout of the tenant and keep track all the previous tenants.</p> 
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-user"></i></div>
              <h4><a href="">Owner management</a></h4>
              <p>adds multiple owners, transfers the title, and views transaction and sales history.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-store-alt"></i></div>
              <h4><a href="">Listings and marketing services</a></h4>
              <p>automatically adds vacant rooms in the listings to find possible tenants.</p>
            </div>
          </div>

        </div>
        <br>

        <div class="row">
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4><a href="">Bulk billing</a></h4>
                <p>adds, sends recurring bills to tenants in one click, and exports ready to print SOA.</p>
              </div>
            </div>
  
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-collection"></i></div>
                <h4><a href="">Payment history</a></h4>
                <p>records payments, exports ready to print receipt, and monitors payments daily and monthly. </p>
              </div>
            </div>
  
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
     
                <h4><a href="">Financials monitoring</a></h4>
                <p>views collections, expenses, and income report in a monthly basis.</p>
              </div>
            </div>
  
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-credit-card"></i></div>
                <h4><a href="">Payment integration</a></h4>
                <p>accepts payments from tenants and owners through GCash, Debit card, credit card, and etc.</p>
              </div>
            </div>
  
          </div>

          <br>

          <div class="row">

         
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-user-voice"></i></div>
                <h4><a href="">Tenants concern tracker</a></h4>
                <p>adds, monitors, rate a concern when resolved.</p>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-help-circle"></i></div>
                <h4><a href="">Job order tracker</a></h4>
                <p>files a job order from a tenant concern tracker.</p>
              </div>
            </div>
  
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-user-circle"></i></div>
                <h4><a href="">Tenant portal</a></h4>
                <p>provides login credentials to tenant to view their bills, payments, report concerns.</p>
              </div>
            </div>

         

  
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-user-circle"></i></div>
                <h4><a href="">Owner portal</a></h4>
                <p>provides login credentials to owner to view their bills, payments, report concerns.</p>
              </div>
            </div>
  
           
  
          </div>

          <br>
          
          <div class="row">
             <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-folder-open"></i></div>
                <h4><a href="">Portfolio managment</a></h4>
                <p>monitors and compares multiple properties.</p>
              </div>
            </div>
  
    

     
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
             <div class="icon-box">
              <div class="icon"><i class="bx bx-help-circle"></i></div>
               <h4><a href="">Concierge services</a></h4>
               <p>allows tenants to request, order, and book for restaurants, taxis, and etc.</p>
             </div>
           </div>

           <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
             <div class="icon"><i class="bx bx-user"></i></div>
              <h4><a href="">User management</a></h4>
              <p>creates and gives different access level to each user (manager, admin, billing, treasury, and etc.). </p>
            </div>
          </div>
 

          </div>
  
      </div>
    </section><!-- End Services Section -->
{{-- 
        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
          <div class="container" data-aos="zoom-in">
    
            <div class="row">
              <div class="col-lg-9 text-center text-lg-left">
                <h3>Call To Action</h3>
                <p>Register your property now to get your free 7 days trial.</p>
              </div>
              <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="/register">Register for FREE</a>
              </div>
            </div>
    
          </div>
        </section><!-- End Cta Section --> --}}

    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonies</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('/arsha/assets/img/team/.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hanimary </h4>
                <span>Marketing Specialist at Courtyards Condominium</span>
                <p class="font-italic">"As a marketing specialist, being able to access and monitor the status of the rooms are central to my job. 
                  Through the PMO, I am able to provide accurate information and options for tenants for selecting rooms."</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="{{ asset('/arsha/assets/img/team-1/.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Kate </h4>
                <span>Admin at North Cambridge Condominium</span>
                <p class="font-italic">"It makes my life less stressful because the application provides an easy way for tenants to report concerns, and as I resolve the concern, it provides an option for them 
                  to monitor its status in real-time."</p>
               
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Select the plan that is right for your property.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Starter</h3>
              <h4><sup>₱</sup>600<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> 1 property</li>
                <li><i class="bx bx-check"></i> <20 rooms</li>
                  <li><i class="bx bx-check"></i> Room management</li>
                  <li><i class="bx bx-check"></i> Tenant management</li>
                  <li><i class="bx bx-check"></i> Bulk billing for rent, utilities, and etc.</li>
                  <li><i class="bx bx-check"></i> Record payments</li>
                  <li><i class="bx bx-check"></i> Concern tracker</li>
                  <li><i class="bx bx-check"></i> Job order</li>
                  <li><i class="bx bx-check"></i> Marketing services</span></li>
                  <li><i class="bx bx-check"></i> Owner portal</li>
                  <li><i class="bx bx-check"></i> Tenant portal</li>
                  <li><i class="bx bx-check"></i> Online payment</li>
                  <li><i class="bx bx-check"></i> Concierge services</li>
                  <li class="na"><i class="bx bx-x"></i> <span>Portforlio management</span></li>
              </ul>
              <form action="/register" method="GET">
                <input type="hidden" name="plan" value="starter">
                <button type="submit" href="/register" class="buy-btn">Get Started for Free</button>
              </form>
              
            </div>
          </div>
       
         

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="box featured">
              <h3>Basic</h3>
              <h4><sup>₱</sup>950<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> 1 property</li>
                <li><i class="bx bx-check"></i> 20-30 rooms</li>
                <li><i class="bx bx-check"></i> Room management</li>
                <li><i class="bx bx-check"></i> Tenant management</li>
                <li><i class="bx bx-check"></i> Bulk billing for rent, utilities, and etc.</li>
                <li><i class="bx bx-check"></i> Record payments</li>
                <li><i class="bx bx-check"></i> Concern tracker</li>
                <li><i class="bx bx-check"></i> Job order</li>
                <li><i class="bx bx-check"></i> Marketing services</span></li>
                <li><i class="bx bx-check"></i> Owner portal</li>
                <li><i class="bx bx-check"></i> Tenant portal</li>
                <li><i class="bx bx-check"></i> Online payment</li>
                <li><i class="bx bx-check"></i> Concierge services</li>
                <li class="na"><i class="bx bx-x"></i> <span>Portforlio management</span></li>
              </ul>
              <form action="/register" method="GET">
                <input type="hidden" name="plan" value="basic">
                <button type="submit" href="/register" class="buy-btn">Get Started for Free</button>
              </form>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Large</h3>
              <h4><sup>₱</sup>1400<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> 1 property</li>
                <li><i class="bx bx-check"></i> 31-50 rooms</li>
                <li><i class="bx bx-check"></i> Room management</li>
                <li><i class="bx bx-check"></i> Tenant management</li>
          
                <li><i class="bx bx-check"></i> Bulk billing for rent, utilities, and etc.</li>
                <li><i class="bx bx-check"></i> Record payments</li>
                <li><i class="bx bx-check"></i> Concern tracker</li>
                <li><i class="bx bx-check"></i> Job order</li>
                <li><i class="bx bx-check"></i> Marketing services</span></li>
                <li><i class="bx bx-check"></i> Owner portal</li>
                <li><i class="bx bx-check"></i> Tenant portal</li>
                <li><i class="bx bx-check"></i> Online payment</li>
                <li><i class="bx bx-check"></i> Concierge services</li>
                <li class="na"><i class="bx bx-x"></i> <span>Portforlio management</span></li>
              </ul>
              <form action="/register" method="GET">
                <input type="hidden" name="plan" value="large">
                <button type="submit" href="/register" class="buy-btn">Get Started for Free</button>
              </form>
            </div>
          </div>

   

        </div>

        
        <div class="row">
          
          <div class="col-lg-4 mt-4 mt-lg-0 mx-auto" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <h3>Advanced</h3>
              <h4><sup>₱</sup>2400<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> 2 properties</li>
                <li><i class="bx bx-check"></i> 51-75 rooms</li>
                <li><i class="bx bx-check"></i> Room management</li>
                <li><i class="bx bx-check"></i> Tenant management</li>
          
                <li><i class="bx bx-check"></i> Bulk billing for rent, utilities, and etc.</li>
                <li><i class="bx bx-check"></i> Record payments</li>
                <li><i class="bx bx-check"></i> Concern tracker</li>
                <li><i class="bx bx-check"></i> Job order</li>
                <li><i class="bx bx-check"></i> Marketing services</span></li>
                <li><i class="bx bx-check"></i> Owner portal</li>
                <li><i class="bx bx-check"></i> Tenant portal</li>
                <li><i class="bx bx-check"></i> Online payment</li>
                <li><i class="bx bx-check"></i> Concierge services</li>
                <li><i class="bx bx-check"></i>Portforlio management</li>
              </ul>
         
              <form action="/register" method="GET">
                <input type="hidden" name="plan" value="advanced">
                <button type="submit" href="/register" class="buy-btn">Get Started for Free</button>
              </form>
            </div>
          </div>
          
          <div class="col-lg-4 mt-4 mt-lg-0 mx-auto" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <h3>Enterprise</h3>
              <h4><sup>₱</sup>N<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> 2+ properties</li>
                <li><i class="bx bx-check"></i> 76+ rooms</li>
                <li><i class="bx bx-check"></i> Room management</li>
                <li><i class="bx bx-check"></i> Tenant management</li>
               
                <li><i class="bx bx-check"></i> Bulk billing for rent, utilities, and etc.</li>
                <li><i class="bx bx-check"></i> Record payments</li>
              <li><i class="bx bx-check"></i> Concern tracker</li>
              <li><i class="bx bx-check"></i> Job order</li>
              <li><i class="bx bx-check"></i> <span>Marketing services</span></li>
              <li><i class="bx bx-check"></i> <span>Owner portal</span></li>
              <li><i class="bx bx-check"></i> <span>Tenant portal</span></li>
              <li><i class="bx bx-check"></i> <span>Online payment</span></li>
              <li><i class="bx bx-check"></i> <span>Concierge services</span></li>
              <li><i class="bx bx-check"></i> <span>Portforlio Management</span></li>
              </ul>
              <form action="/register" method="GET">
                <input type="hidden" name="plan" value="enterprise">
                <button type="submit" href="/register" class="buy-btn">Get Started for Free</button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="50">
            <img src="{{ asset('/arsha/assets/img/about.png') }}" class="img-fluid" alt="">
          </div>
          
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p class="text-justify">

              We are property managers with about a thousand listings, we were using traditional marketing and many steps of leasing procedures, 
              paper and pen to sign up tenant info sheets, contracts, billing statements and receipts. We monitor transactions through spreadsheets 
              and it takes a day to process a report. At one point, our operations are so wrapped up into administrative work that we are spending less 
              time strengthening our customer relations. We spend so much time looking for documents and less time on satisfying customer requests. 
              We realize that if we want to stay in this business and grow, we need to automate our processes so we can focus on the more important 
              aspects of the business like providing good customer service experience while maintaining efficient operations and that’s how thepropertymanager.online was born. 
            </p>
            {{-- <a href="#quick" class="btn-learn-more">Quick Start</a> --}}
           
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

     <!-- Modal HTML -->
 <div id="myModal" class="modal fade">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Watch Demo</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
             
              <iframe id="openWatchDemo" class="embed-responsive-item" frameborder="0" height="100%" width="100%" src="//youtube.com/embed/BMIt10slYgs?autoplay=1&controls=1&showinfo=0&autohide=1" allowfullscreen allow="autoplay"></iframe>
            </div>
          </div>
      </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
    $(window).on('load',function(){
      $('#myModal').modal('show');
  });

  $(document).ready(function(){
      /* Get iframe src attribute value i.e. YouTube video url
      and store it in a variable */
      var url = $("#openWatchDemo").attr('src');
      
      /* Assign empty url value to the iframe src attribute when
      modal hide, which stop the video playing */
      $("#myModal").on('hide.bs.modal', function(){
          $("#open").attr('src', '');
      });
      
      /* Assign the initially stored url back to the iframe src
      attribute when modal is displayed again */
      $("#myModal").on('show.bs.modal', function(){
          $("#openWatchDemo").attr('src', url);
      });
  });
  </script>
@endsection



