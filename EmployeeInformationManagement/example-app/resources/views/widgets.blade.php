<!DOCTYPE html>
<html>
  <head>
    <title>Minimal 1.3 - Widgets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
    <!-- Bootstrap -->
    <link href="assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendor/animate/animate.css">
    <link type="text/css" rel="stylesheet" media="all" href="assets/js/vendor/mmenu/css/jquery.mmenu.all.css" />
    <link rel="stylesheet" href="assets/js/vendor/videobackground/css/jquery.videobackground.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap-checkbox.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap/bootstrap-dropdown-multilevel.css">

    <link rel="stylesheet" href="assets/js/vendor/summernote/css/summernote.css">
    <link rel="stylesheet" href="assets/js/vendor/summernote/css/summernote-bs3.css">
    <link rel="stylesheet" href="assets/js/vendor/chosen/css/chosen.min.css">
    <link rel="stylesheet" href="assets/js/vendor/chosen/css/chosen-bootstrap.css">
    <link rel="stylesheet" href="assets/js/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/js/vendor/owl-carousel/css/owl.theme.css">
    <link rel="stylesheet" href="assets/js/vendor/flipclock/css/flipclock.css">

    <!-- blueimp Gallery styles -->
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="assets/js/vendor/jquery-file-upload/css/jquery.fileupload.css">
    <link rel="stylesheet" href="assets/js/vendor/jquery-file-upload/css/jquery.fileupload-ui.css">
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript><link rel="stylesheet" href="assets/js/vendor/jquery-file-upload/css/jquery.fileupload-noscript.css"></noscript>
    <noscript><link rel="stylesheet" href="assets/js/vendor/jquery-file-upload/css/jquery.fileupload-ui-noscript.css"></noscript>

    <link href="assets/css/minimal.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="bg-1">

    <!-- Preloader -->
    <div class="mask"><div id="loader"></div></div>
    <!--/Preloader -->

    <!-- Wrap all page content here -->
    <div id="wrap">

      


      <!-- Make page fluid -->
      <div class="row">
        




        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top" role="navigation" id="navbar">
          


          <!-- Branding -->
          <div class="navbar-header col-md-2">
            <a class="navbar-brand" href="index.html">
              <strong>MIN</strong>IMAL
            </a>
            <div class="sidebar-collapse">
              <a href="widgets.html#">
                <i class="fa fa-bars"></i>
              </a>
            </div>
          </div>
          <!-- Branding end -->


          <!-- .nav-collapse -->
          <div class="navbar-collapse">
                        
            <!-- Page refresh -->
            <ul class="nav navbar-nav refresh">
              <li class="divided">
                <a href="widgets.html#" class="page-refresh"><i class="fa fa-refresh"></i></a>
              </li>
            </ul>
            <!-- /Page refresh -->

            <!-- Search -->
            <div class="search" id="main-search">
              <i class="fa fa-search"></i> <input type="text" placeholder="Search...">
            </div>
            <!-- Search end -->

            <!-- Quick Actions -->
            <ul class="nav navbar-nav quick-actions">
              
              <li class="dropdown divided">
                
                <a class="dropdown-toggle button" data-toggle="dropdown" href="widgets.html#">
                  <i class="fa fa-tasks"></i>
                  <span class="label label-transparent-black">2</span>
                </a>

                <ul class="dropdown-menu wide arrow nopadding bordered">
                  <li><h1>You have <strong>2</strong> new tasks</h1></li>
                  <li>
                    <a href="widgets.html#">
                      <div class="task-info">
                        <div class="desc">Layout</div>
                        <div class="percent">80%</div>
                      </div>
                      <div class="progress progress-striped progress-thin">
                        <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                          <span class="sr-only">40% Complete (success)</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="widgets.html#">
                      <div class="task-info">
                        <div class="desc">Schemes</div>
                        <div class="percent">15%</div>
                      </div>
                      <div class="progress progress-striped active progress-thin">
                        <div class="progress-bar progress-bar-cyan" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                          <span class="sr-only">45% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="widgets.html#">
                      <div class="task-info">
                        <div class="desc">Forms</div>
                        <div class="percent">5%</div>
                      </div>
                      <div class="progress progress-striped progress-thin">
                        <div class="progress-bar progress-bar-orange" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
                          <span class="sr-only">5% Complete (warning)</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="widgets.html#">
                      <div class="task-info">
                        <div class="desc">JavaScript</div>
                        <div class="percent">30%</div>
                      </div>
                      <div class="progress progress-striped progress-thin">
                        <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                          <span class="sr-only">30% Complete (danger)</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="widgets.html#">
                      <div class="task-info">
                        <div class="desc">Dropdowns</div>
                        <div class="percent">60%</div>
                      </div>
                      <div class="progress progress-striped progress-thin">
                        <div class="progress-bar progress-bar-amethyst" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li><a href="widgets.html#">Check all tasks <i class="fa fa-angle-right"></i></a></li>
                </ul>

              </li>

              <li class="dropdown divided">
                
                <a class="dropdown-toggle button" data-toggle="dropdown" href="widgets.html#">
                  <i class="fa fa-envelope"></i>
                  <span class="label label-transparent-black">1</span>
                </a>

                <ul class="dropdown-menu wider arrow nopadding messages">
                  <li><h1>You have <strong>1</strong> new message</h1></li>
                  <li>
                    <a class="cyan" href="widgets.html#">
                      <div class="profile-photo">
                        <img src="assets/images/ici-avatar.jpg" alt />
                      </div>
                      <div class="message-info">
                        <span class="sender">Ing. Imrich Kamarel</span>
                        <span class="time">12 mins</span>
                        <div class="message-content">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a class="green" href="widgets.html#">
                      <div class="profile-photo">
                        <img src="assets/images/arnold-avatar.jpg" alt />
                      </div>
                      <div class="message-info">
                        <span class="sender">Arnold Karlsberg</span>
                        <span class="time">1 hour</span>
                        <div class="message-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="widgets.html#">
                      <div class="profile-photo">
                        <img src="assets/images/profile-photo.jpg" alt />
                      </div>
                      <div class="message-info">
                        <span class="sender">John Douey</span>
                        <span class="time">3 hours</span>
                        <div class="message-content">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a class="red" href="widgets.html#">
                      <div class="profile-photo">
                        <img src="assets/images/peter-avatar.jpg" alt />
                      </div>
                      <div class="message-info">
                        <span class="sender">Peter Kay</span>
                        <span class="time">5 hours</span>
                        <div class="message-content">Ut enim ad minim veniam, quis nostrud exercitation</div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a class="orange" href="widgets.html#">
                      <div class="profile-photo">
                        <img src="assets/images/george-avatar.jpg" alt />
                      </div>
                      <div class="message-info">
                        <span class="sender">George McCain</span>
                        <span class="time">6 hours</span>
                        <div class="message-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
                      </div>
                    </a>
                  </li>


                  <li class="topborder"><a href="widgets.html#">Check all messages <i class="fa fa-angle-right"></i></a></li>
                </ul>

              </li>

              <li class="dropdown divided">
                
                <a class="dropdown-toggle button" data-toggle="dropdown" href="widgets.html#">
                  <i class="fa fa-bell"></i>
                  <span class="label label-transparent-black">3</span>
                </a>

                <ul class="dropdown-menu wide arrow nopadding bordered">
                  <li><h1>You have <strong>3</strong> new notifications</h1></li>
                  
                  <li>
                    <a href="widgets.html#">
                      <span class="label label-green"><i class="fa fa-user"></i></span>
                      New user registered.
                      <span class="small">18 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="widgets.html#">
                      <span class="label label-red"><i class="fa fa-power-off"></i></span>
                      Server down.
                      <span class="small">27 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="widgets.html#">
                      <span class="label label-orange"><i class="fa fa-plus"></i></span>
                      New order.
                      <span class="small">36 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="widgets.html#">
                      <span class="label label-cyan"><i class="fa fa-power-off"></i></span>
                      Server restared.
                      <span class="small">45 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="widgets.html#">
                      <span class="label label-amethyst"><i class="fa fa-power-off"></i></span>
                      Server started.
                      <span class="small">50 mins</span>
                    </a>
                  </li>

                   <li><a href="widgets.html#">Check all notifications <i class="fa fa-angle-right"></i></a></li>
                </ul>

              </li>

              <li class="dropdown divided user" id="current-user">
                <div class="profile-photo">
                  <img src="assets/images/profile-photo.jpg" alt />
                </div>
                <a class="dropdown-toggle options" data-toggle="dropdown" href="widgets.html#">
                  John Douey <i class="fa fa-caret-down"></i>
                </a>
                
                <ul class="dropdown-menu arrow settings">

                  <li>
                    
                    <h3>Backgrounds:</h3>
                    <ul id="color-schemes">
                      <li><a href="widgets.html#" class="bg-1"></a></li>
                      <li><a href="widgets.html#" class="bg-2"></a></li>
                      <li><a href="widgets.html#" class="bg-3"></a></li>
                      <li><a href="widgets.html#" class="bg-4"></a></li>
                      <li><a href="widgets.html#" class="bg-5"></a></li>
                      <li><a href="widgets.html#" class="bg-6"></a></li>
                      <li class="title">Solid Backgrounds:</li>
                      <li><a href="widgets.html#" class="solid-bg-1"></a></li>
                      <li><a href="widgets.html#" class="solid-bg-2"></a></li>
                      <li><a href="widgets.html#" class="solid-bg-3"></a></li>
                      <li><a href="widgets.html#" class="solid-bg-4"></a></li>
                      <li><a href="widgets.html#" class="solid-bg-5"></a></li>
                      <li><a href="widgets.html#" class="solid-bg-6"></a></li>
                    </ul>


                  </li>

                  <li class="divider"></li>



                  <li>

                    <div class="form-group videobg-check">
                      <label class="col-xs-8 control-label">Video BG</label>
                      <div class="col-xs-4 control-label">
                        <div class="onoffswitch greensea small">
                          <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="videobg-check">
                          <label class="onoffswitch-label" for="videobg-check">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <ul id="videobackgrounds">
                      <li class="title">Choose type:</li>
                      <li><a href="widgets.html#" class="video-bg-1"></a></li>
                      <li><a href="widgets.html#" class="video-bg-2"></a></li>
                      <li><a href="widgets.html#" class="video-bg-3"></a></li>
                      <li><a href="widgets.html#" class="video-bg-4"></a></li>
                      <li><a href="widgets.html#" class="video-bg-5"></a></li>
                      <li><a href="widgets.html#" class="video-bg-6"></a></li>
                      <li><a href="widgets.html#" class="video-bg-7"></a></li>
                      <li><a href="widgets.html#" class="video-bg-8"></a></li>
                      <li><a href="widgets.html#" class="video-bg-9"></a></li>
                      <li><a href="widgets.html#" class="video-bg-10"></a></li>
                    </ul>

                  </li>


                  <li class="divider"></li>

                  <li>
                    <a href="widgets.html#"><i class="fa fa-user"></i> Profile</a>
                  </li>

                  <li>
                    <a href="widgets.html#"><i class="fa fa-calendar"></i> Calendar</a>
                  </li>

                  <li>
                    <a href="widgets.html#"><i class="fa fa-envelope"></i> Inbox <span class="badge badge-red" id="user-inbox">3</span></a>
                  </li>

                  <li class="divider"></li>

                  <li>
                    <a href="widgets.html#"><i class="fa fa-power-off"></i> Logout</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="widgets.html#mmenu"><i class="fa fa-comments"></i></a>
              </li>
            </ul>
            <!-- /Quick Actions -->



            <!-- Sidebar -->
            <ul class="nav navbar-nav side-nav" id="sidebar">
              
              <li class="collapsed-content"> 
                <ul>
                  <li class="search"><!-- Collapsed search pasting here at 768px --></li>
                </ul>
              </li>

              <li class="navigation" id="navigation">
                <a href="widgets.html#" class="sidebar-toggle" data-toggle="#navigation">Navigation <i class="fa fa-angle-up"></i></a>
                
                <ul class="menu">
                  
                  <li>
                    <a href="index.html">
                      <i class="fa fa-tachometer"></i> Dashboard
                      <span class="badge badge-red">1</span>
                    </a>
                  </li>

                  <li class="dropdown">
                    <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-list"></i> Forms <b class="fa fa-plus dropdown-plus"></b>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="form-elements.html">
                          <i class="fa fa-caret-right"></i> Common Elements
                        </a>
                      </li>
                      <li>
                        <a href="validation-elements.html">
                          <i class="fa fa-caret-right"></i> Validation
                        </a>
                      </li>
                      <li>
                        <a href="form-wizard.html">
                          <i class="fa fa-caret-right"></i> Form Wizard
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="dropdown">
                    <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-pencil"></i> Interface <b class="fa fa-plus dropdown-plus"></b>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="ui-elements.html">
                          <i class="fa fa-caret-right"></i> UI Elements
                        </a>
                      </li>
                      <li>
                        <a href="typography.html">
                          <i class="fa fa-caret-right"></i> Typography
                        </a>
                      </li>
                      <li>
                        <a href="tiles.html">
                          <i class="fa fa-caret-right"></i> Tiles
                        </a>
                      </li>
                      <li>
                        <a href="portlets.html">
                         <i class="fa fa-caret-right"></i> Portlets
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                        <a href="nestable.html">
                          <i class="fa fa-caret-right"></i> Nestable Lists
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li>
                    <a href="buttons.html">
                      <i class="fa fa-tint"></i> Buttons & Icons
                    </a>
                  </li>
                  <li>
                    <a href="grid.html">
                      <i class="fa fa-th"></i> Grid Layout
                    </a>
                  </li>

                  <li class="dropdown">
                    <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-th-large"></i> Tables <b class="fa fa-plus dropdown-plus"></b>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="tables.html">
                          <i class="fa fa-caret-right"></i> Bootstrap Tables
                        </a>
                      </li>
                      <li>
                        <a href="datatables.html">
                          <i class="fa fa-caret-right"></i> DataTables
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="dropdown">
                    <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-desktop"></i> Example Pages <b class="fa fa-plus dropdown-plus"></b>
                      <span class="label label-greensea">mails</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="login.html">
                          <i class="fa fa-caret-right"></i> Login Page
                        </a>
                      </li>
                      <li>
                        <a href="calendar.html">
                          <i class="fa fa-caret-right"></i> Calendar
                        </a>
                      </li>
                      <li>
                        <a href="page404.html">
                          <i class="fa fa-caret-right"></i> Page 404
                        </a>
                      </li>
                      <li>
                        <a href="page500.html">
                          <i class="fa fa-caret-right"></i> Page 500
                        </a>
                      </li>
                      <li>
                        <a href="page-offline.html">
                          <i class="fa fa-caret-right"></i> Page Offline
                        </a>
                      </li>
                      <li>
                        <a href="invoice.html">
                          <i class="fa fa-caret-right"></i> Invoice
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                        <a href="blank-page.html">
                          <i class="fa fa-caret-right"></i> Blank Page
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                        <a href="locked-screen.html">
                          <i class="fa fa-caret-right"></i> Locked Screen
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                        <a href="gallery.html">
                          <i class="fa fa-caret-right"></i> Gallery
                        </a>
                      </li>
                      <li>
                        <a href="timeline.html">
                          <i class="fa fa-caret-right"></i> Timeline
                        </a>
                      </li>
                      <li>
                        <a href="chat.html">
                          <i class="fa fa-caret-right"></i> Chat
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                        <a href="search-results.html">
                          <i class="fa fa-caret-right"></i> Search Results
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                      <li>
                        <a href="profile-page.html">
                          <i class="fa fa-caret-right"></i> Profile Page
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                        <a href="weather-page.html">
                          <i class="fa fa-caret-right"></i> Weather Page
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                        <a href="frontpage/index.html">
                          <i class="fa fa-caret-right"></i> Front Page
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                        <a href="mail.html">
                          <i class="fa fa-caret-right"></i> Vertical Mail
                          <span class="badge badge-red">5</span>
                        </a>
                      </li>
                      <li>
                        <a href="mail-horizontal.html">
                          <i class="fa fa-caret-right"></i> Horizontal Mail
                          <span class="label label-greensea">mails</span>
                        </a>
                      </li>
                      <li>
                        <a href="vector-maps.html">
                          <i class="fa fa-caret-right"></i> Vector Maps
                        </a>
                      </li>
                      <li>
                        <a href="google-maps.html">
                          <i class="fa fa-caret-right"></i> Google Maps
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="active">
                    <a href="widgets.html">
                      <i class="fa fa-play-circle"></i> Widgets
                    </a>
                  </li>

                  <li>
                    <a href="charts.html">
                      <i class="fa fa-bar-chart-o"></i> Charts & Graphs
                    </a>
                  </li>

                  <li class="dropdown">
                    <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-folder"></i> Menu Levels <b class="fa fa-plus dropdown-plus"></b>
                      <span class="label label-cyan">new</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 1.1</a></li>

                      <li class="dropdown">
                        <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 1.2 <b class="fa fa-plus dropdown-plus"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 2.1</a></li>
                          <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 2.2</a></li>
                          <li class="dropdown">
                            <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 2.3 <b class="fa fa-plus dropdown-plus"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 3.1</a></li>
                              <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 3.2</a></li>
                              <li class="dropdown">
                                <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 3.3 <b class="fa fa-plus dropdown-plus"></b></a>
                                <ul class="dropdown-menu">
                                  <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 4.1</a></li>
                                   <li class="dropdown">
                                      <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 4.2 <b class="fa fa-plus dropdown-plus"></b></a>
                                      <ul class="dropdown-menu">
                                        <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 5.1</a></li>
                                        <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 5.2</a></li>
                                      </ul>
                                    </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 1.3 <b class="fa fa-plus dropdown-plus"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 2.1</a></li>
                          <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 2.2</a></li>
                          <li class="dropdown">
                            <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 2.3 <b class="fa fa-plus dropdown-plus"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 3.1</a></li>
                              <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 3.2</a></li>
                              <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 3.3</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                    </ul>
                  </li>

                  <li class="dropdown">
                    <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-folder"></i> Menu Levels <b class="fa fa-plus dropdown-plus"></b>
                      <span class="label label-cyan">new</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 1.1</a></li>

                      <li class="dropdown">
                        <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 1.2 <b class="fa fa-plus dropdown-plus"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 2.1</a></li>
                          <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 2.2</a></li>
                          <li class="dropdown">
                            <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 2.3 <b class="fa fa-plus dropdown-plus"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 3.1</a></li>
                              <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 3.2</a></li>
                              <li class="dropdown">
                                <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 3.3 <b class="fa fa-plus dropdown-plus"></b></a>
                                <ul class="dropdown-menu">
                                  <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 4.1</a></li>
                                   <li class="dropdown">
                                      <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 4.2 <b class="fa fa-plus dropdown-plus"></b></a>
                                      <ul class="dropdown-menu">
                                        <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 5.1</a></li>
                                        <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 5.2</a></li>
                                      </ul>
                                    </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 1.3 <b class="fa fa-plus dropdown-plus"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 2.1</a></li>
                          <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 2.2</a></li>
                          <li class="dropdown">
                            <a href="widgets.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 2.3 <b class="fa fa-plus dropdown-plus"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 3.1</a></li>
                              <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 3.2</a></li>
                              <li><a href="widgets.html#"><i class="fa fa-caret-right"></i> Menu Level 3.3</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                    </ul>
                  </li>


                </ul>

              </li>

              <li class="summary" id="order-summary">
                <a href="widgets.html#" class="sidebar-toggle underline" data-toggle="#order-summary">Orders Summary <i class="fa fa-angle-up"></i></a>

                <div class="media">
                  <a class="pull-right" href="widgets.html#">
                    <span id="sales-chart"></span>
                  </a>
                  <div class="media-body">
                    This week sales
                    <h3 class="media-heading">26, 149</h3>
                  </div>
                </div>

                <div class="media">
                  <a class="pull-right" href="widgets.html#">
                    <span id="balance-chart"></span>
                  </a>
                  <div class="media-body">
                    This week balance
                    <h3 class="media-heading">318, 651</h3>
                  </div>
                </div>

              </li>

              <li class="settings" id="general-settings">
                <a href="widgets.html#" class="sidebar-toggle underline" data-toggle="#general-settings">General Settings <i class="fa fa-angle-up"></i></a>

                <div class="form-group">
                  <label class="col-xs-8 control-label">Switch ON</label>
                  <div class="col-xs-4 control-label">
                    <div class="onoffswitch greensea">
                      <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch-on" checked="">
                      <label class="onoffswitch-label" for="switch-on">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-xs-8 control-label">Switch OFF</label>
                  <div class="col-xs-4 control-label">
                    <div class="onoffswitch greensea">
                      <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch-off">
                      <label class="onoffswitch-label" for="switch-off">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                      </label>
                    </div>
                  </div>
                </div>

              </li>

              
            </ul>
            <!-- Sidebar end -->





          </div>
          <!--/.nav-collapse -->





        </div>
        <!-- Fixed navbar end -->
        




        
        <!-- Page content -->
        <div id="content" class="col-md-12">
          








          <!-- page header -->
          <div class="pageheader">
            

            <h2><i class="fa fa-play-circle" style="line-height: 48px;padding-left: 0;"></i> Widgets <span>// Place subtitle here...</span></h2>
            

            <div class="breadcrumbs">
              <ol class="breadcrumb">
                <li>You are here</li>
                <li><a href="index.html">Minimal</a></li>
                <li class="active">Widgets</li>
              </ol>
            </div>


          </div>
          <!-- /page header -->
          
          




          <!-- content main container -->
          <div class="main">




            <!-- row -->
            <div class="row">

              <!-- col 12 -->
              <div class="col-md-12">



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>jQuery</strong> File Upload</h1>
                    <div class="controls">
                      <a href="widgets.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="widgets.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="widgets.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <blockquote class="filled withoutHeader">
                      <p>
                        File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery.<br>
                        Supports cross-domain, chunked and resumable file uploads and client-side image resizing.<br>
                        Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.
                      </p>
                    </blockquote>

                    <!-- The file upload form used as target for the file upload widget -->
                    <form id="fileupload" action="http://jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
                      <!-- Redirect browsers with JavaScript disabled to the origin page -->
                      <noscript><input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/"></noscript>
                      <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                      
                      <div class="row fileupload-buttonbar">
                        <div class="col-lg-7">
                            
                            <!-- The fileinput-button span is used to style the file input field as button -->
                            <span class="btn btn-green fileinput-button">
                              <i class="fa fa-plus"></i>
                              <span> Add files...</span>
                              <input type="file" name="files[]" multiple>
                            </span>

                            <button type="submit" class="btn btn-cyan start">
                              <i class="fa fa-upload"></i>
                              <span> Start upload</span>
                            </button>

                            <button type="reset" class="btn btn-orange cancel">
                              <i class="fa fa-power-off"></i>
                              <span> Cancel upload</span>
                            </button>

                            <button type="button" class="btn btn-red delete">
                              <i class="fa fa-trash-o"></i>
                              <span> Delete</span>
                            </button>

                            <div class="checkbox check-transparent inline">
                              <input type="checkbox" value="1" id="delete-all" class="toggle">
                              <label for="delete-all"></label>
                            </div>

                            <!-- The global file processing state -->
                            <span class="fileupload-process"></span>

                        </div>

                        <!-- The global progress state -->
                        <div class="col-lg-5 fileupload-progress fade">
                            <!-- The global progress bar -->
                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                            </div>
                            <!-- The extended global progress state -->
                            <div class="progress-extended">&nbsp;</div>
                        </div>
                      </div>
                      <!-- The table listing the files available for upload/download -->
                      <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                    </form>
                    <br>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Demo Notes</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>The maximum file size for uploads in this demo is <strong>5 MB</strong> (default file size is unlimited).</li>
                                <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in this demo (by default there is no file type restriction).</li>
                                <li>Uploaded files will be deleted automatically after <strong>5 minutes</strong> (demo setting).</li>
                                <li>You can <strong>drag &amp; drop</strong> files from your desktop on this webpage (see <a href="https://github.com/blueimp/jQuery-File-Upload/wiki/Browser-support">Browser support</a>).</li>
                                <li>Please refer to the <a href="https://github.com/blueimp/jQuery-File-Upload">project website</a> and <a href="https://github.com/blueimp/jQuery-File-Upload/wiki">documentation</a> for more information.</li>
                                <li>Built with Twitter's <a href="http://twitter.github.com/bootstrap/">Bootstrap</a> CSS framework and Icons from <a href="http://glyphicons.com/">Glyphicons</a>.</li>
                            </ul>
                        </div>
                    </div>




                    <!-- The blueimp Gallery widget -->
                    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                        <div class="slides"></div>
                        <h3 class="title"></h3>
                        <a class="prev">‹</a>
                        <a class="next">›</a>
                        <a class="close">×</a>
                        <a class="play-pause"></a>
                        <ol class="indicator"></ol>
                    </div>

                  </div>
                  <!-- /tile body -->
                  
                


                </section>
                <!-- /tile -->




              </div>
              <!-- /col 12 -->


              
            </div>
            <!-- /row -->



            <!-- row -->
            <div class="row">
              


              <!-- /col 6 -->
              <div class="col-md-6">
                
                

                <div class="row">



                  <div class="col-sm-6">



                    <!-- tile -->
                    <section class="tile transparent">




                      <!-- tile header -->
                      <div class="tile-header color redbrown rounded-top-corners text-center">               
                        <button class="btn pull-left btn-black-transparent" type="button"><i class="fa fa-caret-square-o-down"></i></button>
                        <h2><strong>Todo</strong> List</h2>
                        <div class="controls">
                          <a href="widgets.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                          <a href="widgets.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                          <a href="widgets.html#" class="remove"><i class="fa fa-times"></i></a>
                        </div>
                      </div>
                      <!-- /tile header -->

                      <!-- tile body -->
                      <div class="tile-body color transparent-black rounded-bottom-corners">
                        <input type="text" placeholder="Add new todo..." class="w100p bottommargin form-control">
                        <ul class="nolisttypes" id="todolist">
                          <li>
                            <div class="checkbox check-transparent">
                              <input type="checkbox" value="1" id="todo-01">
                              <label for="todo-01">Make a backup</label>
                            </div>
                          </li>
                          <li>
                            <div class="checkbox check-transparent">
                              <input type="checkbox" checked="checked" value="1" id="todo-02">
                              <label for="todo-02" class="done">Send e-mail to Ici</label>
                            </div>
                          </li>
                          <li>
                            <div class="checkbox check-transparent">
                              <input type="checkbox" value="1" id="todo-03">
                              <label for="todo-03">Buy tickets</label>
                            </div>
                          </li>
                          <li>
                            <div class="checkbox check-transparent">
                              <input type="checkbox" value="1" id="todo-04">
                              <label for="todo-04">Resolve issues</label>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <!-- /tile body -->
                    


                    </section>
                    <!-- /tile -->



                    <!-- tile -->
                    <section class="tile transparent">




                      <!-- tile header -->
                      <div class="tile-header nopadding">               
                        <div class="controls">
                          <a href="widgets.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                          <a href="widgets.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                          <a href="widgets.html#" class="remove"><i class="fa fa-times"></i></a>
                        </div>
                      </div>
                      <!-- /tile header -->

                      <!-- tile body -->
                      <div class="tile-body color transparent-black rounded-corners nopadding">
                        <div id="owl-example" class="owl-carousel">
                          
                          <div class="text-center">
                            <h3><strong>John</strong> Douey</h3>
                            <img src="assets/images/profile-photo.jpg" alt class="img-circle">
                            <p class="bg-slategray">Lorem Ipsum dolor sit amet...</p>
                          </div>

                          <div class="text-center">
                            <h3><strong>Arnold</strong> Karlsberg</h3>
                            <img src="assets/images/arnold-avatar.jpg" alt class="img-circle">
                            <p class="bg-slategray">Ut enim ad minim veniam...</p>
                          </div>

                          <div class="text-center">
                            <h3><strong>Peter</strong> Kay</h3>
                            <img src="assets/images/peter-avatar.jpg" alt class="img-circle">
                            <p class="bg-slategray">Duis aute irure dolor in...</p>
                          </div>

                          <div class="text-center">
                            <h3><strong>Anna</strong> Opichia</h3>
                            <img src="assets/images/random-avatar8.jpg" alt class="img-circle">
                            <p class="bg-slategray">Excepteur sint occaecat...</p>
                          </div>

                        </div>
                      </div>
                      <!-- /tile body -->
                    


                    </section>
                    <!-- /tile -->



                  </div>


                  <div class="col-sm-6">


                    <!-- tile -->
                    <section class="tile transparent">




                      <!-- tile header -->
                      <div class="tile-header nopadding">               
                        <div class="controls">
                          <a href="widgets.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                          <a href="widgets.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                          <a href="widgets.html#" class="remove"><i class="fa fa-times"></i></a>
                        </div>
                      </div>
                      <!-- /tile header -->

                      <!-- tile widget -->
                      <div class="tile-widget color greensea rounded-top-corners">
                        <div class="text-center">
                          <canvas id="clear-day" width="100" height="100"></canvas>
                        </div>
                      </div>
                      <!-- /tile widget -->

                      <!-- tile body -->
                      <div class="tile-body color transparent-black rounded-bottom-corners">
                        <h2 class="text-center"><span class="animate-number" data-value="26" data-animation-duration="800">0</span>°C</h2>
                        <p class="text-center text-muted"><i class="fa fa-map-marker"></i> Bratislava, SK</p>
                      </div>
                      <!-- /tile body -->
                    


                    </section>
                    <!-- /tile -->



                    <!-- tile -->
                    <section class="tile transparent">




                      <!-- tile header -->
                      <div class="tile-header nopadding">               
                        <div class="controls">
                          <a href="widgets.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                          <a href="widgets.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                          <a href="widgets.html#" class="remove"><i class="fa fa-times"></i></a>
                        </div>
                      </div>
                      <!-- /tile header -->

                      <!-- tile widget -->
                      <div class="tile-widget color cyan rounded-top-corners">

                        <div class="fa fa-twitter watermark"></div>
                        
                        <div class="media social-feed">        
                          <span class="pull-left">
                            <img src="assets/images/profile-photo.jpg" alt class="img-circle">
                          </span>

                          <div class="media-body">
                            <h4 class="media-heading"><strong>John</strong> Douey</h4>
                            <small><a href="widgets.html#">john.douey@minimal.com</a></small>
                          </div>
                        </div>

                        

                      </div>
                      <!-- /tile widget -->

                      <!-- tile body -->
                      <div class="tile-body color transparent-black rounded-bottom-corners">
                        <ul class="inline divided social-feed">
                          <li>
                            <h4>126</h4>
                            Tweets
                          </li>
                          <li>
                            <h4>324</h4>
                            Following
                          </li>
                          <li>
                            <h4>1254</h4>
                            Followers
                          </li>
                        </ul>
                      </div>
                      <!-- /tile body -->
                    


                    </section>
                    <!-- /tile -->


                  </div>


                </div>


                <div class="row">
                  
                  <div class="col-md-12">
                    


                    <!-- tile -->
                    <section class="tile transparent">


                      <!-- tile body -->
                      <div class="tile-body nopadding rounded-corners">

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                              <img src="assets/images/carousel/carousel1.jpg" alt>
                              <div class="carousel-caption">
                                <h3>First Thumbnail label</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                              </div>
                            </div>
                            <div class="item">
                              <img src="assets/images/carousel/carousel2.jpg" alt>
                              <div class="carousel-caption">
                                <h3>Second Thumbnail label</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                              </div>
                            </div>
                            <div class="item">
                              <img src="assets/images/carousel/carousel3.jpg" alt>
                              <div class="carousel-caption">
                                <h3>Third Thumbnail label</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                              </div>
                            </div>
                            <div class="item">
                              <img src="assets/images/carousel/carousel4.jpg" alt>
                              <div class="carousel-caption">
                                <h3>Fourth Thumbnail label</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                              </div>
                            </div>
                          </div>

                          <!-- Controls -->
                          <a class="left carousel-control" href="widgets.html#carousel-example-generic" data-slide="prev">
                            <i class="fa fa-chevron-left fa-lg left-side"></i>
                          </a>
                          <a class="right carousel-control" href="widgets.html#carousel-example-generic" data-slide="next">
                            <i class="fa fa-chevron-right fa-lg right-side"></i>
                          </a>
                        </div>

                      </div>
                      <!-- /tile body -->
                    
                    


                    </section>
                    <!-- /tile -->



                  </div>

                </div>

              </div>
              <!-- /col 6 -->



              <!-- /col 6 -->
              <div class="col-md-6">
                
                <!-- tile -->
                <section class="tile transparent">




                  <!-- tile header -->
                  <div class="tile-header nopadding">               
                    <div class="controls">
                      <a href="widgets.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="widgets.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="widgets.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->



                  <!-- tile widget -->
                  <div class="tile-widget color transparent-black rounded-top-corners">
                    <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <label for="message-to" class="col-sm-2 control-label font-slab">Recipients</label>
                        <div class="col-sm-10">
                          <select data-placeholder="Select recipients..." multiple="" tabindex="3" class="chosen-select form-control chosen-transparent" id="message-to">
                            <option value="ici@gmail.com">ici@gmail.com</option>
                            <option value="johny@gmail.com">johny@gmail.com</option>
                            <option value="arnie@gmail.com">arnie@gmail.com</option>
                            <option value="pete@gmail.com">pete@gmail.com</option>
                            <option value="gorge@gmail.com">gorge@gmail.com</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group no-bottom-margin">
                        <label for="subject" class="col-sm-2 control-label font-slab">Subject</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control transparent" id="subject" placeholder="Type subject here...">
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /tile widget -->



                  <!-- tile body -->
                  <div class="tile-body nopadding">
                    <div id="quick-message-content"></div>
                  </div>
                  <!-- /tile body -->


                  <!-- tile footer -->
                  <div class="tile-footer rounded-bottom-corners text-right">
                    <a class="submit font-slab" href="widgets.html#"><strong>Send</strong> message <i class="fa fa-comment"></i></a>
                  </div>
                  <!-- /tile footer -->

                


                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-white">



                  <!-- tile body -->
                  <div class="tile-body text-center">
                    <div id="myClock"></div>
                  </div>
                  <!-- /tile body -->



                </section>
                <!-- /tile -->




                <!-- tile -->
                <section class="tile transparent no-shadow">

                
                  <h1 class="timeline-heading"><strong>This</strong> month</h1>
            
                  <ol class="timeline timeline-mini">

                    <li class="color transparent-black">
                      <div class="pointer slategray">
                        <i class="fa fa-clock-o"></i>
                      </div>
                      <div class="el-container">
                        <div class="content">
                          <span class="time"><i class="fa fa-clock-o"></i> Today, 04:24pm</span>
                          <h1><strong>Meeting</strong> with Imrich</h1>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                      </div>
                    </li>

                    <li class="color transparent-black textured">
                      <div class="pointer slategray">
                        <i class="fa fa-hdd-o"></i>
                      </div>
                       <div class="el-container">
                        <div class="content">
                          <span class="time"><i class="fa fa-clock-o"></i> Yestarday, 02:18pm</span>
                          <h1><strong>Backup</strong> server data</h1>
                          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                      </div>
                    </li>

                    <li class="color transparent-white">
                      <div class="pointer slategray">
                        <i class="fa fa-folder"></i>
                      </div>
                       <div class="el-container">
                        <div class="content">
                          <span class="time"><i class="fa fa-clock-o"></i> March 23, 08:59am</span>
                          <h1><strong>Upload</strong> update</h1>
                          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                      </div>
                    </li>                                       

                  </ol>

                  <h1 class="timeline-heading"><strong>Older</strong></h1>


                </section>
                <!-- /tile -->

              

              </div>
              <!-- /col 6 -->




            </div>
            <!-- /row -->


          </div>
          <!-- /content container -->






        </div>
        <!-- Page content end -->




        <div id="mmenu" class="right-panel">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-justified">
            <li class="active"><a href="widgets.html#mmenu-users" data-toggle="tab"><i class="fa fa-users"></i></a></li>
            <li class=""><a href="widgets.html#mmenu-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
            <li class=""><a href="widgets.html#mmenu-friends" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
            <li class=""><a href="widgets.html#mmenu-settings" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
          </ul>
              
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="mmenu-users">
              <h5><strong>Online</strong> Users</h5>

              <ul class="users-list">
                
                <li class="online">
                  <div class="media">
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/ici-avatar.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Ing. Imrich <strong>Kamarel</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Ulaanbaatar, Mongolia</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="online">
                  <div class="media">
                    
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/arnold-avatar.jpg" alt>
                    </a>
                    <span class="badge badge-red unread">3</span>

                    <div class="media-body">
                      <h6 class="media-heading">Arnold <strong>Karlsberg</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Bratislava, Slovakia</small>
                      <span class="badge badge-outline status"></span>
                    </div>

                  </div>
                </li>

                <li class="online">
                  <div class="media">
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/peter-avatar.jpg" alt>

                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Peter <strong>Kay</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Kosice, Slovakia</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="online">
                  <div class="media">
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/george-avatar.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">George <strong>McCain</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Prague, Czech Republic</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="busy">
                  <div class="media">
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/random-avatar1.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Lucius <strong>Cashmere</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Wien, Austria</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="busy">
                  <div class="media">
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/random-avatar2.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Jesse <strong>Phoenix</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Berlin, Germany</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

              </ul>

              <h5><strong>Offline</strong> Users</h5>

              <ul class="users-list">
                
                <li class="offline">
                  <div class="media">
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/random-avatar4.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Dell <strong>MacApple</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Paris, France</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="offline">
                  <div class="media">
                    
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/random-avatar5.jpg" alt>
                    </a>

                    <div class="media-body">
                      <h6 class="media-heading">Roger <strong>Flopple</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Rome, Italia</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                    
                  </div>
                </li>

                <li class="offline">
                  <div class="media">
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/random-avatar6.jpg" alt>

                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Nico <strong>Vulture</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Kyjev, Ukraine</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="offline">
                  <div class="media">
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/random-avatar7.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Bobby <strong>Socks</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Moscow, Russia</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="offline">
                  <div class="media">
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/random-avatar8.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Anna <strong>Opichia</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Budapest, Hungary</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

              </ul>

            </div>

            <div class="tab-pane" id="mmenu-history">
              <h5><strong>Chat</strong> History</h5>

              <ul class="history-list">
                
                <li class="online">
                  <div class="media">
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/ici-avatar.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Ing. Imrich <strong>Kamarel</strong></h6>
                      <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="busy">
                  <div class="media">
                    
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/arnold-avatar.jpg" alt>
                    </a>
                    <span class="badge badge-red unread">3</span>

                    <div class="media-body">
                      <h6 class="media-heading">Arnold <strong>Karlsberg</strong></h6>
                      <small>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</small>
                      <span class="badge badge-outline status"></span>
                    </div>

                  </div>
                </li>

                <li class="offline">
                  <div class="media">
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/peter-avatar.jpg" alt>

                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Peter <strong>Kay</strong></h6>
                      <small>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit </small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

              </ul>
                
            </div>

            <div class="tab-pane" id="mmenu-friends">
              <h5><strong>Friends</strong> List</h5>
                <ul class="favourite-list">
                
                <li class="online">
                  <div class="media">
                    
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/arnold-avatar.jpg" alt>
                    </a>
                    <span class="badge badge-red unread">3</span>

                    <div class="media-body">
                      <h6 class="media-heading">Arnold <strong>Karlsberg</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Bratislava, Slovakia</small>
                      <span class="badge badge-outline status"></span>
                    </div>

                  </div>
                </li>

                <li class="offline">
                  <div class="media">
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/random-avatar8.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Anna <strong>Opichia</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Budapest, Hungary</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="busy">
                  <div class="media">
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/random-avatar1.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Lucius <strong>Cashmere</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Wien, Austria</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="online">
                  <div class="media">
                    <a class="pull-left profile-photo" href="widgets.html#">
                      <img class="media-object" src="assets/images/ici-avatar.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Ing. Imrich <strong>Kamarel</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Ulaanbaatar, Mongolia</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

              </ul>
            </div>

            <div class="tab-pane pane-settings" id="mmenu-settings">
              <h5><strong>Chat</strong> Settings</h5>

              <ul class="settings">
               
                <li>
                  <div class="form-group">
                    <label class="col-xs-8 control-label">Show Offline Users</label>
                    <div class="col-xs-4 control-label">
                      <div class="onoffswitch greensea">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-offline" checked="">
                        <label class="onoffswitch-label" for="show-offline">
                          <span class="onoffswitch-inner"></span>
                          <span class="onoffswitch-switch"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <label class="col-xs-8 control-label">Show Fullname</label>
                    <div class="col-xs-4 control-label">
                      <div class="onoffswitch greensea">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-fullname">
                        <label class="onoffswitch-label" for="show-fullname">
                          <span class="onoffswitch-inner"></span>
                          <span class="onoffswitch-switch"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <label class="col-xs-8 control-label">History Enable</label>
                    <div class="col-xs-4 control-label">
                      <div class="onoffswitch greensea">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-history" checked="">
                        <label class="onoffswitch-label" for="show-history">
                          <span class="onoffswitch-inner"></span>
                          <span class="onoffswitch-switch"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <label class="col-xs-8 control-label">Show Locations</label>
                    <div class="col-xs-4 control-label">
                      <div class="onoffswitch greensea">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-location" checked="">
                        <label class="onoffswitch-label" for="show-location">
                          <span class="onoffswitch-inner"></span>
                          <span class="onoffswitch-switch"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <label class="col-xs-8 control-label">Notifications</label>
                    <div class="col-xs-4 control-label">
                      <div class="onoffswitch greensea">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-notifications">
                        <label class="onoffswitch-label" for="show-notifications">
                          <span class="onoffswitch-inner"></span>
                          <span class="onoffswitch-switch"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <label class="col-xs-8 control-label">Show Undread Count</label>
                    <div class="col-xs-4 control-label">
                      <div class="onoffswitch greensea">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-unread" checked="">
                        <label class="onoffswitch-label" for="show-unread">
                          <span class="onoffswitch-inner"></span>
                          <span class="onoffswitch-switch"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

              </ul>
                
            </div><!-- tab-pane -->
              
          </div><!-- tab-content -->
        </div>






      </div>
      <!-- Make page fluid-->




    </div>
    <!-- Wrap all page content end -->



    <section class="videocontent" id="video"></section>



     <!-- The template to display files available for upload -->
    <script id="template-upload" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-upload fade">
          <td>
            <span class="preview"></span>
          </td>
          <td>
            <p class="name nomargin">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
          </td>
          <td class="upload">
            <div class="progress-list">
              <div class="details">
                <div class="title">&nbsp;</div>
                <div class="description">Upload progress</div>
              </div>
              <div class="status pull-right">
                <span class="animate-number size" data-value="0" data-animation-duration="1500">Processing...</span>
              </div>
              <div class="clearfix"></div>
              <div class="progress progress-striped active progress-little nomargin" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
            </div>
            
          </td>
          <td class="text-right actions">
            {% if (!i && !o.options.autoUpload) { %}
              <button class="btn btn-cyan start btn-sm" disabled>
                <i class="fa fa-upload"></i>
                <span> Start</span>
              </button>
            {% } %}
            {% if (!i) { %}
              <button class="btn btn-orange cancel btn-sm">
                <i class="fa fa-times"></i>
                <span> Cancel</span>
              </button>
            {% } %}
          </td>
        </tr>
      {% } %}
    </script>

    <!-- The template to display files available for download -->
    <script id="template-download" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-download fade">
          <td>
            <span class="preview">
              {% if (file.thumbnailUrl) { %}
                <a href="http://tattek.sk/minimal/{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="http://tattek.sk/minimal/{%=file.thumbnailUrl%}"></a>
              {% } %}
            </span>
          </td>
          <td>
            <p class="name nomargin">
              {% if (file.url) { %}
                  <a href="http://tattek.sk/minimal/{%=file.url%}" class="white" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
              {% } else { %}
                  <span>{%=file.name%}</span>
              {% } %}
            </p>
            {% if (file.error) { %}
              <div><span class="label label-red">Error</span> {%=file.error%}</div>
            {% } %}
          </td>
          <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
          </td>
          <td class="text-right actions">
            {% if (file.deleteUrl) { %}
              <div class="checkbox inline">
                <input type="checkbox" value="1" id="delete-{%=file.name%}" class="toggle">
                <label for="delete-{%=file.name%}"></label>
              </div>
              <button class="btn btn-red btn-sm delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                <i class="fa fa-trash-o"></i>
                <span> Delete</span>
              </button>
            {% } else { %}
              <button class="btn btn-orange btn-sm cancel">
                <i class="fa fa-times"></i>
                <span> Cancel</span>
              </button>
            {% } %}
          </td>
        </tr>
      {% } %}
    </script>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/vendor/bootstrap/bootstrap-dropdown-multilevel.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&amp;skin=sons-of-obsidian"></script>
    <script type="text/javascript" src="assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>
    <script type="text/javascript" src="assets/js/vendor/videobackground/jquery.videobackground.js"></script>
    <script type="text/javascript" src="assets/js/vendor/blockui/jquery.blockUI.js"></script>

    <script src="assets/js/vendor/skycons/skycons.js"></script>

    <script src="assets/js/vendor/summernote/summernote.min.js"></script>

    <script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>

    <script src="assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>

    <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src="assets/js/vendor/jquery-file-upload/vendor/jquery.ui.widget.js"></script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="http://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
    <!-- blueimp Gallery script -->
    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="assets/js/vendor/jquery-file-upload/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="assets/js/vendor/jquery-file-upload/jquery.fileupload.js"></script>
    <!-- The File Upload processing plugin -->
    <script src="assets/js/vendor/jquery-file-upload/jquery.fileupload-process.js"></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="assets/js/vendor/jquery-file-upload/jquery.fileupload-image.js"></script>
    <!-- The File Upload audio preview plugin -->
    <script src="assets/js/vendor/jquery-file-upload/jquery.fileupload-audio.js"></script>
    <!-- The File Upload video preview plugin -->
    <script src="assets/js/vendor/jquery-file-upload/jquery.fileupload-video.js"></script>
    <!-- The File Upload validation plugin -->
    <script src="assets/js/vendor/jquery-file-upload/jquery.fileupload-validate.js"></script>
    <!-- The File Upload user interface plugin -->
    <script src="assets/js/vendor/jquery-file-upload/jquery.fileupload-ui.js"></script>
    <!-- The main application script -->
    <script src="assets/js/vendor/jquery-file-upload/fileupload-main.js"></script>

    <script src="assets/js/vendor/flipclock/flipclock.min.js"></script>

    <script src="assets/js/minimal.min.js"></script>

    <script>
    $(function(){

      //todo's
      $('#todolist li label').click(function() {
        $(this).toggleClass('done');
      });

      //weather icons
      var icons = new Skycons({"color": "white"});
      icons.set("clear-day", Skycons.CLEAR_DAY);
      icons.play();

      //owl carousel
      $("#owl-example").owlCarousel({
        singleItem: true,
        autoPlay: true,
        navigation: true,
        slideSpeed: 400,
        paginationSpeed: 500,
        navigationText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>']
      });

      //load wysiwyg editor
      $('#quick-message-content').summernote({
        toolbar: [
          //['style', ['style']], // no style button
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
          //['insert', ['picture', 'link']], // no insert buttons
          //['table', ['table']], // no table button
          //['help', ['help']] //no help button
        ],
        height: 295   //set editable area's height
      });

      //multiselect input
      $(".chosen-select").chosen({disable_search_threshold: 10});

      //initialize flipClock

      var clock = $('#myClock').FlipClock(3600 * 24 * 3, {
        clockFace: 'DailyCounter',
        countdown: true
      });
      
    })
      
    </script>
  </body>
</html>
      