<!DOCTYPE html>
<html lang="en-US">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163790381-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-163790381-1');
  </script>
  <script>
    function disableClick() {
      document.onclick = function(event) {
        if (event.button == 2) {
          // alert('Right Click Message');
          return false;
        }
      }
    }
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shonco Power</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/components.css">
  <link rel="stylesheet" href="css/responsee.css">
  <link rel="stylesheet" href="css/icons.css">
  <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="owl-carousel/owl.theme.css">
  <!-- CUSTOM STYLE -->
  <link rel="stylesheet" href="css/template-style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/template-scripts.js"></script>


</head>

<body class="size-1140" onLoad="disableClick()">


  <!-- TOP NAV WITH LOGO -->
  <header>

    <nav>
      <div class="line">
        <div class="s-12 l-2">
          <p class=" logo"><strong>ShoncoPower</strong></p>
        </div>
        <div class="top-nav s-12 l-10">
          <p class="nav-text"></p>
          <ul class="right">
            <li class="active-item"><a href="#">Home</a></li>
            <li class="active-item"><a href="#carousel">Projects</a></li>
            <li class="active-item"><a href="#SolarSolutions">solar Solutions</a></li>
            <li class="active-item"><a href="#EPC">EPC</a></li>
            <!-- <li><a href="#News">News</a></li> -->
            <!-- li><a href="#TEAM">TEAM</a></li -->
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

  </header>
  <section>
    <!-- LANDING SECTION -->
    <div class="landingSection mb-5">
      <div class="container">
        <h1 class="">Providing Reliable <br> Renewable Energy Solutions to <br> Power Africa </h1>
        <p class="mt-5">Headquatered in Nairobi Kenya, <strong>Shonco Power</strong> takes pride in <br> providing renewable energy technology focusing on Solar, <br>Hydro-Power and Biogas to generate energy.
        </p>
        <a href="#contact" class="btn CTA mb-5">Join us</a>

      </div>
      <!-- <img src="img/bottom-curve.svg" alt=""> -->
    </div>
    <!-- FIRST BLOCK -->
    <!-- <div id="first-block">
      <div class="line">
        <h1>ShoncoPower</h1>
        <p>Energy Technology.</p>
        <div class="s-12 m-4 l-2 center"><a class="white-btn" href="#contact">Contacts</a></div>
      </div>
    </div> -->


    <!-- SERVICES/PROJECTS CAROUSEL -->


    <div id="carousel" class="mb-5">
      <div class="container mb-5 text-center">
        <h1 class="mb-5">At ShoncoPower we Provide <br> a range of Energy Solutions</h1>
        <p>We develop, build, own and operate Solar, Hydro-Power <br> and Biogas energy-based Power Plants.<br> All these projects are under development in Africa.</p>
      </div>


      <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item">
          <img src="img/solar_panel_2.jpg" alt="">
          <div class="line">
            <div class="text hide-s">
              <div class="line">
                <div class="prev-arrow hide-s hide-m">
                  <i class="icon-chevron_left"></i>
                </div>
                <div class="next-arrow hide-s hide-m">
                  <i class="icon-chevron_right"></i>
                </div>
              </div>
              <h2>Solar Energy</h2>
              <p>ShoncoPower has over a decade of experience in the development of clean, efficient renewable energy facilitites with the goal of becoming a leading African developer and provider of renewable energy.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/hydro_power.jpg" alt="">
          <div class="line">
            <div class="text hide-s">
              <div class="line">
                <div class="prev-arrow hide-s hide-m">
                  <i class="icon-chevron_left"></i>
                </div>
                <div class="next-arrow hide-s hide-m">
                  <i class="icon-chevron_right"></i>
                </div>
              </div>
              <h2>Hydro-Power</h2>
              <p>ShoncoPower has proven expertise to fully develop, operate and manage high availability power plants for the long-term.<br> We have people and technology to turn challenging projects around and achieve the most efficient energy
                output from existing renewable energy resources.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/biomass.jpg" alt="">
          <div class="line">
            <div class="text hide-s">
              <div class="line">
                <div class="prev-arrow hide-s hide-m">
                  <i class="icon-chevron_left"></i>
                </div>
                <div class="next-arrow hide-s hide-m">
                  <i class="icon-chevron_right"></i>
                </div>
              </div>
              <h2>Biogas Energy</h2>
              <p> </p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div id="currentProjects" class="mb-5">

      <div class="container mt-5">
        <h1 class="text-left">Projects under development</h1>
        <div class="borderBtm mb-3"></div>

        <p>Shonco Power’s project pipeline focuses on small hydro opportunities with <br> local developers and rural communities in Kenya, Rwanda and Burundi.</p>
        <p> Highlighted below is a snapshot of our active and growing Hydro and Solar Projects <br> in the Kenya Region</p>

        <div class="row">
          <div class="col-md-4">
            <div class="card p-3">
              <h3 class="mb-3">Kenya Development Pipeline</h3>
              <ul>
                <li><strong>5-10 MW</strong> active development pipeline of run-of-river small hydro</li>
                <li>Feasibility studies at advanced stages</li>
                <li><strong>100%</strong> clean, renewable energy with low-impact design</li>
                <li>Meaningful community ownership, electrification and employment</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card p-3">
              <h3 class="mb-3">Burundi Development Pipeline</h3>
              <ul>
                <li><strong>10+ MW</strong> active development pipeline of run-of-river small hydro</li>
                <li>Feasibility studies at advanced stages </li>
                <li><strong>100%</strong> clean, renewable energy with low-impact design</li>
                <li>Partnership in Burundi with local co-developers</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card p-3">
              <h3 class="mb-3">Solar Project</h3>
              <ul>
                <li> ShoncoPower is developing a number of industrial and utility scale solar projects in East Afica </li>
                <li> Our Industrial scale projects are in the range of<strong> 0.5 - 5MW</strong> </li>
                <li>The highest utility project is <strong>20MW</strong></li>

              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <!-- <div class="card">

            </div> -->
          </div>

        </div>
      </div>

    </div>

    <!--Solar Solutions --->
    <div id="SolarSolutions">
      <div class="SolarSolutions SECTION">
        <div class="container mb-5 text-center">
          <h1 class="">Solar Solutions</h1>

          <p> We offer a wide range of Solar Solutions tailored for your needs. <br>
            <!--- strong>Shonco Power</strong> takes pride in <br> providing renewable energy technology focusing on Solar, <br>Hydro-Power and Biogas to generate energy. --->
          </p>
          <p>Our Solutions cater for residential energy users and commercial Industrial Sites.<br> Shonco Power Ltd enables businesses to adopt to solar and benefit from <br> immediate savings on their energy costs.<br>We can provide your business
            with clean solar energy<br> either by purchasing outright or through flexible contracts.</p>
          <div class="row justify-content-md-center">
            <div class="col-md-2 text-left">
              <ol>
                <li> Grid Tie PV</li>
                <li> Off-grid PV</li>
                <li> PV Diesel Hybrid</li>
                <li> Solar Water Pumping</li>
              </ol>
            </div>
          </div>


        </div>
        <!-- <img src="img/bottom-curve.svg" alt=""> -->
      </div>
    </div>


    <!--EPC--->
    <div id="EPC">
      <div class="EPC SECTION mb-5">
        <div class="container mb-5 text-center">
          <h1 class="">Engineering, Procurement <br> & Construction </h1>
          <p> <strong>ShoncoPower</strong> through its subsidiary <strong>ShoncoEngineering</strong>,<br> provides full EPC services from the design of the plant <br> to its commissioning
            <!--- strong>Shonco Power</strong> takes pride in <br> providing renewable energy technology focusing on Solar, <br>Hydro-Power and Biogas to generate energy. --->
          </p>
          <p>Our worldwide coverage and best-in-class teams ensure high quality services.<br> Our strong track record and industrial expertise enable us to deliver<br> projects on time while optimizing performance. </p>


        </div>
        <!-- <img src="img/bottom-curve.svg" alt=""> -->
      </div>
    </div>


    <!-- NEWS -->

    <!-- <div id="News" class="container mb-5">

      <div class="row pt-5">
        <div class="col-md-6">
          <h1 class="mt-5">See what's Happening in <br>our Community</h1>
          <span><i class="fab fa-twitter twitterLarge"></i></span>
        </div>
        <div class="col-md-6">
          <span class="twitter">
            <a class="twitter-timeline" href="https://twitter.com/shoncopower?ref_src=twsrc%5Etfw" data-theme="dark" data-width="500" data-height="500">Tweets by shoncopower</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </span>
        </div>

      </div>

    </div> -->

    <!-- TEAM-->
    <!--div id="TEAM" class="container">
      <h1>Meet the minds <br> reshaping this industry</h1>
      <div class="borderBtm mb-3"></div>

      <p>Taking ground-breaking steps to ensuring all projects are quality-driven </p>
      <div class="row">
        <div class="col-md-4">

          <div class="card">
            <img src="img/user.svg" alt="Avatar">
            <div class="container">
              <h4><b></b></h4>
              <p></p>
            </div>
          </div>

        </div>
        <div class="col-md-4">

          <div class="card">
            <img src="img/user.svg" alt="Avatar">
            <div class="container">
              <h4><b></b></h4>
              <p></p>
            </div>
          </div>

        </div>
        <div class="col-md-4">

          <div class="card">
            <img src="img/user.svg" alt="Avatar">
            <div class="container">
              <h4><b></b></h4>
              <p></p>
            </div>
          </div>

        </div>



      </div>


    </div -->


    <!-- CONTACT -->
    <div id="contact">
      <div class="container">

        <h1 class="text-left">Lets Create Progress <br> Together</h1>
        <div class="borderBtm mb-5"></div>


        <div class="row">
          <div class="col-md-4">
            <div class="card p-4">
              <!-- <h4 class="mb-3">Address</h4> -->

              <h4><span><i class="mr-1"></i></span><strong>Kenya Office</strong></h4>
              <h5><span><i class="fas fa-map-marker-alt mr-2"></i></span>332-00507 Viwandani <br> Nairobi, Kenya</h5>


            </div>
          </div>
          <div class="col-md-4">
            <div class="card p-4">

              <h4><span><i class="mr-1"></i></span><strong>Burundi Office</strong></h4>
              <h5><span><i class="mr-1"></i></span>C/O SHONCO ENGINEERING</h5>
              <h5><span><i class="fas fa-map-marker-alt mr-2"></i></span>NO 11, AV DE LA MISSION <br>Rohero, Burundi</h5>


            </div>
          </div>
          <div class="col-md-4">
            <div class="card p-4">

              <h4><span><i class="mr-1"></i></span><strong>Rwanda Office</strong></h4>
              <h5><span><i class="mr-1"></i></span>C/O SHONCO ENGINEERING</h5>
              <h5><span><i class="fas fa-map-marker-alt mr-2"></i></span>Ramera, Gasabo,<br> Umujyi wa Kigali, Rwanda</h5>


            </div>
          </div>
        </div>


        <div class="row mt-5">
          <div class="col-md-6 form">

            <h3>Talk to us directly</h3>
            <div class="borderBtm mb-5"></div>

            <!-- <div class="margin">
              <img src="img/office.jpg" alt="" class="left">
            </div> -->
            <div class="card px-3 py-5">

              <form class="" name="" id="" action="mail.php" method="post">

                <div class="form-group">
                  <label for="fullName">Full Name <span>*</span> </label>
                  <input type="text" class="form-control" id="fullName" name="fullName">
                </div>


                <div class="form-group">
                  <label for="companyName">Company Name <span>*</span> </label>
                  <input type="text" class="form-control" id="companyName" name="companyName">
                </div>

                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                      <label for="email"> Email <span>*</span> </label>
                      <input type="email" class="form-control" id="email" name="email">
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="phone"> Phone Number <span>*</span> </label>
                      <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                  </div>
                </div>





                <div class="form-group">

                  <label for="product">Product <span>*</span> </label>
                  <select class="form-control" id="product" name="product">
                    <option value="hydropower">Hydro Power</option>
                    <option value="solarpower">Solar Power</option>
                    <option value="biomass">Biomass</option>
                  </select>

                </div>

                <div class="form-group">
                  <label for="comments">Comments</label>
                  <textarea class="form-control" id="comments" rows="3" name="comments"></textarea>
                </div>


                <!-- Notifications for 'error' Or 'successfully'-->
                <div class="mailResponse" style="display:none;">
                  <div class="alert alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <p class="mailResponseText"></p>
                  </div>
                </div>

                <button class="btn submitBtn mt-3" type="submit">SUBMIT</button>


              </form>

            </div>


          </div>
          <div class="col-md-6">
            <address>
              <div class="mb-5">


                <!-- <h4 class="mb-3">Direct Contacts</h4>
                <h5><span><i class="fas fa-envelope mr-2"></i></span>info@shoncopower.com </h5>
                <h5><span><i class="fas fa-envelope mr-2"></i></span>shoncopower@gmail.com</h5>
                <h5><span><i class="fas fa-envelope mr-2"></i></span>shoncoengineering@gmail.com</h5> -->
            </address>
          </div>
        </div>

      </div>
    </div>
    </div>
  </section>
  <!-- FOOTER -->
  <footer>

    <div class="container border-bottom pb-2 mb-2">

      <h5 class="social">
        Follow us
      </h5>
      <a href="https://www.facebook.com/shoncopowercom-111570500509095/" target="_blank">
        <span><i class="fab fa-facebook-f"></i> </span>
      </a>
      <a href="https://twitter.com/Shonco_Power?s=09" target="_blank">
        <span><i class="fab fa-twitter"></i></span>
      </a>

    </div>



    <div class="line">
      <div class="s-4 l-6">
        <p style="color:#f1f1f1;">Copyright &copy
          <script>
            var currentYear = new Date().getFullYear();
            document.write(currentYear);
          </script>
          | All Rights Reserved</p>

      </div>
      <div class="s-4 l-6">
        <a class="right" href="#"> ShoncoPower.</a>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="js/responsee.js"></script>
  <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      var theme_slider = $("#owl-demo");
      $("#owl-demo").owlCarousel({
        navigation: false,
        slideSpeed: 500,
        paginationSpeed: 400,
        autoPlay: 6000,
        addClassActive: true,
        // transitionStyle: "fade",
        singleItem: true
      });
      $("#owl-demo2").owlCarousel({
        slideSpeed: 300,
        autoPlay: true,
        navigation: true,
        navigationText: ["&#xf007", "&#xf006"],
        pagination: false,
        singleItem: true
      });

      // Custom Navigation Events
      $(".next-arrow").click(function() {
        theme_slider.trigger('owl.next');
      })
      $(".prev-arrow").click(function() {
        theme_slider.trigger('owl.prev');
      })
    });
  </script>
</body>

</html>
