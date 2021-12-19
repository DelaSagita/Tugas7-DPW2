<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>My Profil</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{url('public/dist')}}/assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="{{url('public/dist')}}/assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="{{url('public/dist')}}/assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="{{url('public/dist')}}/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="{{url('public/dist')}}/assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="{{url('public/dist')}}/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="{{url('public/dist')}}/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{url('public/dist')}}/assets/css/sleek.css" />

  

  <!-- FAVICON -->
  <link href="{{url('public/dist')}}/assets/img/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{url('public/dist')}}/assets/plugins/nprogress/nprogress.js"></script>
</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">DS. WOMEN'S SHOES
                </span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                <li  class="nav-item active" >
                  <a class="sidenav-item-link" href="{{url('admin')}}">
                    <i class="mdi mdi-view-dashboard-outline"></i>
                    <span class="nav-text">Dashboard</span> 
                  </a>
               
                </li>

                <li  class="nav-item active" >
                  <a class="sidenav-item-link" href="{{url('shoes')}}">
                    <i class="mdi mdi-view-dashboard-outline"></i>
                    <span class="nav-text">Produk</span> 
                  </a>
               
                </li>

                <li  class="has-sub active expand" >
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                    aria-expanded="false" aria-controls="dashboard">
                    <i class="mdi mdi-view-dashboard-outline"></i>
                    <span class="nav-text">Kategori</span> 
                  </a>
               
                </li>

                <li  class="nav-item active" >
                  <a class="sidenav-item-link" href="{{url('user')}}">
                    <i class="mdi mdi-view-dashboard-outline"></i>
                    <span class="nav-text">user profil</span> 
                  </a>
               
                </li>


              
            </ul>

            </div>              
                        

                        
                        
                         

            <hr class="separator" />

            <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                  Cpu Uses <span class="float-right">40%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar active"
                    style="width: 40%;"
                    role="progressbar"
                  ></div>
                </div>
                <h6 class="text-uppercase">
                  Memory Uses <span class="float-right">65%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar progress-bar-warning"
                    style="width: 65%;"
                    role="progressbar"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </aside>

      

      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                
                  <li class="dropdown notifications-menu">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="{{ url('public/dist') }}/assets/img/user/user1.jpg" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">Dela Sagita</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="{{ url('public/dist') }}/assets/img/user/u9.jpg" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          Dela Sagita <small class="pt-1">delasagita947@gmail.com</small>
                        </div>
                      </li>

                      <li>
                        <a href="{{url('my profil')}}">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                     
                      <li class="dropdown-footer">
                        <a href="{{url('Login')}}"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>


        <div class="content-wrapper">
          <div class="content">							<div class="bg-white border rounded">
								<div class="row no-gutters">
									<div class="col-lg-4 col-xl-3">
										<div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
											<div class="card text-center widget-profile px-0 border-0">
												<div class="card-img mx-auto rounded-circle">
													<img src="{{ url('public/dist') }}/assets/img/user/u9.jpg" alt="user image">
												</div>
												<div class="card-body">
													<h4 class="py-2 text-dark">Dela Sagita</h4>
													<p>delasagita947@gmail.com</p>
													<a class="btn btn-primary btn-pill btn-lg my-4" href="#">Follow</a>
												</div>
											</div>
											<div class="d-flex justify-content-between ">
												<div class="text-center pb-4">
													<h6 class="text-dark pb-2">1733</h6>
													<p>Friends</p>
												</div>
												<div class="text-center pb-4">
													<h6 class="text-dark pb-2">3000</h6>
													<p>Followers</p>
												</div>
												<div class="text-center pb-4">
													<h6 class="text-dark pb-2">1200</h6>
													<p>Following</p>
												</div>
											</div>
											
										</div>
									</div>
									<div class="col-lg-8 col-xl-9">
							
											<div class="tab-content px-3 px-xl-5" id="myTabContent">
												<div class="tab-pane fade show active" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
													<div class="media mt-5 profile-timeline-media">
														<div class="align-self-start iconbox-45 overflow-hidden mr-3">
															<img  src="{{ url('public/dist') }}/assets/img/user/u10.jpg" alt="Generic placeholder image">
														</div>
														<div class="media-body">
															<h6 class="mt-0 text-dark">Dela Sagita</h6>
															<span>Admin</span>
															<span class="float-right"></span>
															<p><hr class="w-100">
											<div class="contact-info pt-4">
												<h5 class="text-dark mb-1">Contact Information</h5>
												<p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
												<p>delasagita947@gmail.com</p>
												<p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
												<p>+62 822 5648 1720</p>
												<p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
												<p>10 juni 2002</p>
												<p class="text-dark font-weight-medium pt-4 mb-2">Social Profile</p>
												<p class="pb-3 social-button">
													<a href="#" class="mb-1 btn btn-outline btn-twitter rounded-circle">
														<i class="mdi mdi-twitter"></i>
													</a>
													<a href="#" class="mb-1 btn btn-outline btn-linkedin rounded-circle">
														<i class="mdi mdi-linkedin"></i>
													</a>
													<a href="#" class="mb-1 btn btn-outline btn-facebook rounded-circle">
														<i class="mdi mdi-facebook"></i>
													</a>
													<a href="#" class="mb-1 btn btn-outline btn-skype rounded-circle">
														<i class="mdi mdi-skype"></i>
													</a>
												</p>
											</div></p>
															
												</div>
												<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
												<div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
											</div>
										</div>
									</div>
								</div>
							</div></div>

          


        </div>

                  <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year">2019</span> Online Shop Women's Shoes by
                <a
                  class="text-primary"
                  href="http://www.iamabdus.com/"
                  target="_blank"
                  >DS. WOMEN'S SHOES</a
                >.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

      </div>
    </div>

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="{{url('public/dist')}}/assets/plugins/jquery/jquery.min.js"></script>
<script src="{{url('public/dist')}}/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('public/dist')}}/assets/plugins/toaster/toastr.min.js"></script>
<script src="{{url('public/dist')}}/assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="{{url('public/dist')}}/assets/plugins/charts/Chart.min.js"></script>
<script src="{{url('public/dist')}}/assets/plugins/ladda/spin.min.js"></script>
<script src="{{url('public/dist')}}/assets/plugins/ladda/ladda.min.js"></script>
<script src="{{url('public/dist')}}/assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="{{url('public/dist')}}/assets/plugins/select2/js/select2.min.js"></script>
<script src="{{url('public/dist')}}/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="{{url('public/dist')}}/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="{{url('public/dist')}}/assets/plugins/daterangepicker/moment.min.js"></script>
<script src="{{url('public/dist')}}/assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="{{url('public/dist')}}/assets/plugins/jekyll-search.min.js"></script>
<script src="{{url('public/dist')}}/assets/js/sleek.js"></script>
<script src="{{url('public/dist')}}/assets/js/chart.js"></script>
<script src="{{url('public/dist')}}/assets/js/date-range.js"></script>
<script src="{{url('public/dist')}}/assets/js/map.js"></script>
<script src="{{url('public/dist')}}/assets/js/custom.js"></script>




  </body>
</html>
