<!DOCTYPE html>
<html>
  <head>
    <title>Minimal 1.3 - Charts & Graphs</title>
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

    <link rel="stylesheet" href="assets/js/vendor/rickshaw/css/rickshaw.min.css">
    <link rel="stylesheet" href="assets/js/vendor/morris/css/morris.css">

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
              <a href="charts.html#">
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
                <a href="charts.html#" class="page-refresh"><i class="fa fa-refresh"></i></a>
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
                
                <a class="dropdown-toggle button" data-toggle="dropdown" href="charts.html#">
                  <i class="fa fa-tasks"></i>
                  <span class="label label-transparent-black">2</span>
                </a>

                <ul class="dropdown-menu wide arrow nopadding bordered">
                  <li><h1>You have <strong>2</strong> new tasks</h1></li>
                  <li>
                    <a href="charts.html#">
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
                    <a href="charts.html#">
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
                    <a href="charts.html#">
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
                    <a href="charts.html#">
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
                    <a href="charts.html#">
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
                  <li><a href="charts.html#">Check all tasks <i class="fa fa-angle-right"></i></a></li>
                </ul>

              </li>

              <li class="dropdown divided">
                
                <a class="dropdown-toggle button" data-toggle="dropdown" href="charts.html#">
                  <i class="fa fa-envelope"></i>
                  <span class="label label-transparent-black">1</span>
                </a>

                <ul class="dropdown-menu wider arrow nopadding messages">
                  <li><h1>You have <strong>1</strong> new message</h1></li>
                  <li>
                    <a class="cyan" href="charts.html#">
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
                    <a class="green" href="charts.html#">
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
                    <a href="charts.html#">
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
                    <a class="red" href="charts.html#">
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
                    <a class="orange" href="charts.html#">
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


                  <li class="topborder"><a href="charts.html#">Check all messages <i class="fa fa-angle-right"></i></a></li>
                </ul>

              </li>

              <li class="dropdown divided">
                
                <a class="dropdown-toggle button" data-toggle="dropdown" href="charts.html#">
                  <i class="fa fa-bell"></i>
                  <span class="label label-transparent-black">3</span>
                </a>

                <ul class="dropdown-menu wide arrow nopadding bordered">
                  <li><h1>You have <strong>3</strong> new notifications</h1></li>
                  
                  <li>
                    <a href="charts.html#">
                      <span class="label label-green"><i class="fa fa-user"></i></span>
                      New user registered.
                      <span class="small">18 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="charts.html#">
                      <span class="label label-red"><i class="fa fa-power-off"></i></span>
                      Server down.
                      <span class="small">27 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="charts.html#">
                      <span class="label label-orange"><i class="fa fa-plus"></i></span>
                      New order.
                      <span class="small">36 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="charts.html#">
                      <span class="label label-cyan"><i class="fa fa-power-off"></i></span>
                      Server restared.
                      <span class="small">45 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="charts.html#">
                      <span class="label label-amethyst"><i class="fa fa-power-off"></i></span>
                      Server started.
                      <span class="small">50 mins</span>
                    </a>
                  </li>

                   <li><a href="charts.html#">Check all notifications <i class="fa fa-angle-right"></i></a></li>
                </ul>

              </li>

              <li class="dropdown divided user" id="current-user">
                <div class="profile-photo">
                  <img src="assets/images/profile-photo.jpg" alt />
                </div>
                <a class="dropdown-toggle options" data-toggle="dropdown" href="charts.html#">
                  John Douey <i class="fa fa-caret-down"></i>
                </a>
                
                <ul class="dropdown-menu arrow settings">

                  <li>
                    
                    <h3>Backgrounds:</h3>
                    <ul id="color-schemes">
                      <li><a href="charts.html#" class="bg-1"></a></li>
                      <li><a href="charts.html#" class="bg-2"></a></li>
                      <li><a href="charts.html#" class="bg-3"></a></li>
                      <li><a href="charts.html#" class="bg-4"></a></li>
                      <li><a href="charts.html#" class="bg-5"></a></li>
                      <li><a href="charts.html#" class="bg-6"></a></li>
                      <li class="title">Solid Backgrounds:</li>
                      <li><a href="charts.html#" class="solid-bg-1"></a></li>
                      <li><a href="charts.html#" class="solid-bg-2"></a></li>
                      <li><a href="charts.html#" class="solid-bg-3"></a></li>
                      <li><a href="charts.html#" class="solid-bg-4"></a></li>
                      <li><a href="charts.html#" class="solid-bg-5"></a></li>
                      <li><a href="charts.html#" class="solid-bg-6"></a></li>
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
                      <li><a href="charts.html#" class="video-bg-1"></a></li>
                      <li><a href="charts.html#" class="video-bg-2"></a></li>
                      <li><a href="charts.html#" class="video-bg-3"></a></li>
                      <li><a href="charts.html#" class="video-bg-4"></a></li>
                      <li><a href="charts.html#" class="video-bg-5"></a></li>
                      <li><a href="charts.html#" class="video-bg-6"></a></li>
                      <li><a href="charts.html#" class="video-bg-7"></a></li>
                      <li><a href="charts.html#" class="video-bg-8"></a></li>
                      <li><a href="charts.html#" class="video-bg-9"></a></li>
                      <li><a href="charts.html#" class="video-bg-10"></a></li>
                    </ul>

                  </li>


                  <li class="divider"></li>

                  <li>
                    <a href="charts.html#"><i class="fa fa-user"></i> Profile</a>
                  </li>

                  <li>
                    <a href="charts.html#"><i class="fa fa-calendar"></i> Calendar</a>
                  </li>

                  <li>
                    <a href="charts.html#"><i class="fa fa-envelope"></i> Inbox <span class="badge badge-red" id="user-inbox">3</span></a>
                  </li>

                  <li class="divider"></li>

                  <li>
                    <a href="charts.html#"><i class="fa fa-power-off"></i> Logout</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="charts.html#mmenu"><i class="fa fa-comments"></i></a>
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
                <a href="charts.html#" class="sidebar-toggle" data-toggle="#navigation">Navigation <i class="fa fa-angle-up"></i></a>
                
                <ul class="menu">
                  
                  <li>
                    <a href="index.html">
                      <i class="fa fa-tachometer"></i> Dashboard
                      <span class="badge badge-red">1</span>
                    </a>
                  </li>

                  <li class="dropdown">
                    <a href="charts.html#" class="dropdown-toggle" data-toggle="dropdown">
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
                    <a href="charts.html#" class="dropdown-toggle" data-toggle="dropdown">
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
                    <a href="charts.html#" class="dropdown-toggle" data-toggle="dropdown">
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
                    <a href="charts.html#" class="dropdown-toggle" data-toggle="dropdown">
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

                  <li>
                    <a href="widgets.html">
                      <i class="fa fa-play-circle"></i> Widgets
                    </a>
                  </li>

                  <li class="active">
                    <a href="charts.html">
                      <i class="fa fa-bar-chart-o"></i> Charts & Graphs
                    </a>
                  </li>

                  <li class="dropdown">
                    <a href="charts.html#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-folder"></i> Menu Levels <b class="fa fa-plus dropdown-plus"></b>
                      <span class="label label-cyan">new</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="charts.html#"><i class="fa fa-caret-right"></i> Menu Level 1.1</a></li>

                      <li class="dropdown">
                        <a href="charts.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 1.2 <b class="fa fa-plus dropdown-plus"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="charts.html#"><i class="fa fa-caret-right"></i> Menu Level 2.1</a></li>
                          <li><a href="charts.html#"><i class="fa fa-caret-right"></i> Menu Level 2.2</a></li>
                          <li class="dropdown">
                            <a href="charts.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 2.3 <b class="fa fa-plus dropdown-plus"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="charts.html#"><i class="fa fa-caret-right"></i> Menu Level 3.1</a></li>
                              <li><a href="charts.html#"><i class="fa fa-caret-right"></i> Menu Level 3.2</a></li>
                              <li class="dropdown">
                                <a href="charts.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 3.3 <b class="fa fa-plus dropdown-plus"></b></a>
                                <ul class="dropdown-menu">
                                  <li><a href="charts.html#"><i class="fa fa-caret-right"></i> Menu Level 4.1</a></li>
                                   <li class="dropdown">
                                      <a href="charts.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 4.2 <b class="fa fa-plus dropdown-plus"></b></a>
                                      <ul class="dropdown-menu">
                                        <li><a href="charts.html#"><i class="fa fa-caret-right"></i> Menu Level 5.1</a></li>
                                        <li><a href="charts.html#"><i class="fa fa-caret-right"></i> Menu Level 5.2</a></li>
                                      </ul>
                                    </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="charts.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 1.3 <b class="fa fa-plus dropdown-plus"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="charts.html#"><i class="fa fa-caret-right"></i> Menu Level 2.1</a></li>
                          <li><a href="charts.html#"><i class="fa fa-caret-right"></i> Menu Level 2.2</a></li>
                          <li class="dropdown">
                            <a href="charts.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 2.3 <b class="fa fa-plus dropdown-plus"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="charts.html#"><i class="fa fa-caret-right"></i> Menu Level 3.1</a></li>
                              <li><a href="charts.html#"><i class="fa fa-caret-right"></i> Menu Level 3.2</a></li>
                              <li><a href="charts.html#"><i class="fa fa-caret-right"></i> Menu Level 3.3</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                    </ul>
                  </li>


                </ul>

              </li>

              <li class="summary" id="order-summary">
                <a href="charts.html#" class="sidebar-toggle underline" data-toggle="#order-summary">Orders Summary <i class="fa fa-angle-up"></i></a>

                <div class="media">
                  <a class="pull-right" href="charts.html#">
                    <span id="sales-chart"></span>
                  </a>
                  <div class="media-body">
                    This week sales
                    <h3 class="media-heading">26, 149</h3>
                  </div>
                </div>

                <div class="media">
                  <a class="pull-right" href="charts.html#">
                    <span id="balance-chart"></span>
                  </a>
                  <div class="media-body">
                    This week balance
                    <h3 class="media-heading">318, 651</h3>
                  </div>
                </div>

              </li>

              <li class="settings" id="general-settings">
                <a href="charts.html#" class="sidebar-toggle underline" data-toggle="#general-settings">General Settings <i class="fa fa-angle-up"></i></a>

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
            

            <h2><i class="fa fa-bar-chart-o" style="line-height: 48px;padding-left: 0;"></i> Charts & Graphs <span>// Place subtitle here...</span></h2>
            

            <div class="breadcrumbs">
              <ol class="breadcrumb">
                <li>You are here</li>
                <li><a href="index.html">Minimal</a></li>
                <li class="active">Charts & Graphs</li>
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
                <section class="tile">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Morris.js</strong> Charts</h1>
                    <div class="controls">
                      <a href="charts.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="charts.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="charts.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <div class="row">
                      
                      <div class="col-md-3">
                        
                        <h5><strong>Line</strong> chart</h5>
                        <div id="line-example" style="height: 250px;"></div>

                      </div>

                      <div class="col-md-3">
                        
                        <h5><strong>Line Area</strong> chart</h5>
                        <div id="line-area-example" style="height: 250px;"></div>
                        

                      </div>

                      <div class="col-md-3">
                        
                        <h5><strong>Bar</strong> chart</h5>
                        <div id="bar-example" style="height: 250px;"></div>

                      </div>

                      <div class="col-md-3">
                        
                        <h5 class="text-left"><strong>Donut</strong> chart</h5>
                        <div id="donut-example" style="height: 250px;"></div>

                      </div>

                    </div>

                  </div>
                  <!-- /tile body -->
                  
                


                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-black textured">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Sparkline</strong> Charts</h1>
                    <div class="controls">
                      <a href="charts.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="charts.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="charts.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <div class="row">
                      
                      <div class="col-md-4">
                        
                        <h5><strong>Line</strong> chart</h5>
                        <span id="sparkline01"></span>

                      </div>

                      <div class="col-md-4">
                        
                        <h5><strong>Bar</strong> chart</h5>
                        <span id="sparkline02" data-values="5,6,7,2,1,-4,-2,4,6,8" data-type="bar" data-height="250px"></span>

                      </div>

                      <div class="col-md-4 text-center">
                        
                        <h5 class="text-left"><strong>Pie</strong> chart</h5>
                        <span id="sparkline03"></span>

                      </div>

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
              
              

              <!-- col 8 -->
              <div class="col-md-8">



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Line</strong> Chart</h1>
                    <div class="controls">
                      <a href="charts.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="charts.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="charts.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <table id="line-chart" class="flot-chart" data-type="lines" data-width="100%" data-height="250px" data-font-color="rgba(255,255,255,.8)" data-tick-color="rgba(255,255,255,.3)" data-legend="hidden" data-tool-tip="show">
                      <thead>
                        <tr>
                          <th></th>
                          <th style="color : #cd97eb;">Sales</th>
                          <th style="color : #a2d200;">Orders</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>JAN</th>
                          <td>254</td>
                          <td>25</td>
                        </tr>
                        <tr>
                          <th>FEB</th>
                          <td>584</td>
                          <td>345</td>
                        </tr>
                        <tr>
                          <th>MAR</th>
                          <td>85</td>
                          <td>120</td>
                        </tr>
                        <tr>
                          <th>APR</th>
                          <td>428</td>
                          <td>654</td>
                        </tr>
                        <tr>
                          <th>MAY</th>
                          <td>512</td>
                          <td>971</td>
                        </tr>
                        <tr>
                          <th>JUN</th>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <th>JUL</th>
                          <td>212</td>
                          <td>356</td>
                        </tr>
                        <tr>
                          <th>AUG</th>
                          <td>684</td>
                          <td>128</td>
                        </tr>
                        <tr>
                          <th>SEP</th>
                          <td>692</td>
                          <td>163</td>
                        </tr>
                        <tr>
                          <th>OCT</th>
                          <td>987</td>
                          <td>354</td>
                        </tr>
                        <tr>
                          <th>NOV</th>
                          <td>1865</td>
                          <td>985</td>
                        </tr>
                        <tr>
                          <th>DEC</th>
                          <td>2158</td>
                          <td>1214</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                  <!-- /tile body -->
                  
                


                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Bar</strong> Chart</h1>
                    <div class="controls">
                      <a href="charts.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="charts.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="charts.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <table id="bar-chart" class="flot-chart" data-type="bars" data-bar-width="0.8" data-tool-tip="show" data-width="100%" data-height="250px" data-font-color="rgba(255,255,255,.8)" data-legend="hidden" data-tick-color="rgba(255,255,255,.3)">
                      <thead>
                        <tr>
                          <th></th>
                          <th style="color : #fff;">Sales</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>JAN</th>
                          <td>254</td>
                        </tr>
                        <tr>
                          <th>FEB</th>
                          <td>584</td>
                        </tr>
                        <tr>
                          <th>MAR</th>
                          <td>85</td>
                        </tr>
                        <tr>
                          <th>APR</th>
                          <td>428</td>
                        </tr>
                        <tr>
                          <th>MAY</th>
                          <td>512</td>
                        </tr>
                        <tr>
                          <th>JUN</th>
                          <td>0</td>
                        </tr>
                        <tr>
                          <th>JUL</th>
                          <td>212</td>
                        </tr>
                        <tr>
                          <th>AUG</th>
                          <td>684</td>
                        </tr>
                        <tr>
                          <th>SEP</th>
                          <td>692</td>
                        </tr>
                        <tr>
                          <th>OCT</th>
                          <td>987</td>
                        </tr>
                        <tr>
                          <th>NOV</th>
                          <td>1865</td>
                        </tr>
                        <tr>
                          <th>DEC</th>
                          <td>2158</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                  <!-- /tile body -->
                  
                


                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-white">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Stacked</strong> Chart</h1>
                    <div class="controls">
                      <a href="charts.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="charts.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="charts.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <table id="stack-chart" class="flot-chart" data-type="bars" data-stack="true" data-tool-tip="show" data-width="100%" data-height="250px" data-font-color="rgba(255,255,255,.8)" data-legend="hidden" data-y-max="3500" data-tick-color="rgba(255,255,255,.3)">
                      <thead>
                        <tr>
                          <th></th>
                          <th style="color : #555;">Sales</th>
                          <th style="color : #FF0066;">Orders</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>JAN</th>
                          <td>254</td>
                          <td>125</td>
                        </tr>
                        <tr>
                          <th>FEB</th>
                          <td>584</td>
                          <td>345</td>
                        </tr>
                        <tr>
                          <th>MAR</th>
                          <td>85</td>
                          <td>120</td>
                        </tr>
                        <tr>
                          <th>APR</th>
                          <td>428</td>
                          <td>654</td>
                        </tr>
                        <tr>
                          <th>MAY</th>
                          <td>512</td>
                          <td>971</td>
                        </tr>
                        <tr>
                          <th>JUN</th>
                          <td>50</td>
                          <td>120</td>
                        </tr>
                        <tr>
                          <th>JUL</th>
                          <td>212</td>
                          <td>356</td>
                        </tr>
                        <tr>
                          <th>AUG</th>
                          <td>684</td>
                          <td>128</td>
                        </tr>
                        <tr>
                          <th>SEP</th>
                          <td>692</td>
                          <td>163</td>
                        </tr>
                        <tr>
                          <th>OCT</th>
                          <td>987</td>
                          <td>354</td>
                        </tr>
                        <tr>
                          <th>NOV</th>
                          <td>1865</td>
                          <td>985</td>
                        </tr>
                        <tr>
                          <th>DEC</th>
                          <td>2158</td>
                          <td>1214</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                  <!-- /tile body -->
                  
                


                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-black textured">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Combined</strong> Chart</h1>
                    <div class="controls">
                      <a href="charts.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="charts.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="charts.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <div id="combined-chart" style="height: 250px;"></div>

                  </div>
                  <!-- /tile body -->
                  
                


                </section>
                <!-- /tile -->




              </div>
              <!-- /col 8 -->



              <!-- col 4 -->
              <div class="col-md-4">



                <!-- tile -->
                <section class="tile color transparent-white">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Pie</strong> Chart</h1>
                    <div class="controls">
                      <a href="charts.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="charts.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="charts.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <table id="pie-chart" class="flot-chart" data-type="pie" data-inner-radius="0.4" data-pie-label="show" data-width="100%" data-height="250px" data-tool-tip="false">
                      <thead>
                        <tr>
                          <th></th>
                          <th style="color : #a2d200;">Sales this month</th>
                          <th style="color : #ffc100;">New Orders</th>                                       
                          <th style="color : #ff4a43;">New Users</th>
                          <th style="color : #22beef;">Visits this month</th>                                        
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th></th>
                          <td>20</td>
                          <td>50</td>
                          <td>10</td>
                          <td>20</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                  <!-- /tile body -->
                  
                


                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-white">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Pie</strong> Chart</h1>
                    <span class="note">Custom Labels</span>
                    <div class="controls">
                      <a href="charts.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="charts.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="charts.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <table id="pie-chart02" class="flot-chart" data-type="pie" data-inner-radius="0.8" data-pie-label="hidden" data-width="100%" data-height="250px" data-tool-tip="show">
                      <thead>
                        <tr>
                          <th></th>
                          <th style="color : #a2d200;">System space</th>
                          <th style="color : #ffc100;">Free Space</th>                                       
                          <th style="color : #ff4a43;">Applications</th>
                          <th style="color : #22beef;">Music</th>
                          <th style="color : #16a085;">Pictures</th>
                          <th style="color : #1693A5;">Movies</th>
                          <th style="color : #555;">Other</th>                                  
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th></th>
                          <td>2</td>
                          <td>44</td>
                          <td>11</td>
                          <td>15</td>
                          <td>10</td>
                          <td>5</td>
                          <td>13</td>
                        </tr>
                      </tbody>
                    </table>

                    <div class="custom-labels" data-target-flot="#pie-chart02"></div>

                  </div>
                  <!-- /tile body -->
                  
                


                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Real-time</strong> Chart</h1>
                    <div class="controls">
                      <a href="charts.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="charts.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="charts.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">    
                    
                    <div id="realtime-chart" style="height: 180px;"></div>

                  </div>
                  <!-- /tile body -->
                  
                


                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Rickshaw</strong> Chart</h1>
                    <div class="controls">
                      <a href="charts.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="charts.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="charts.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile widget -->
                  <div class="tile-widget">

                    <div class="progress-list with-heading">
                      <div class="details">
                        <div class="title"><h2><i class="fa fa-hdd-o"></i> <span class="animate-number" data-value="394" data-animation-duration="1600">0</span> GB</h2></div>
                      </div>
                      <div class="status pull-right bg-transparent-black-1">
                        <span class="animate-number" data-value="42" data-animation-duration="1500">0</span>%
                      </div>
                      <div class="clearfix"></div>
                      <div class="progress progress-little progress-transparent-black" style="margin-bottom: 5px">
                        <div class="progress-bar animate-progress-bar" data-percentage="42%"></div>
                      </div>
                    </div>  
                    <p class="description"><strong>394GB</strong> used of <strong class="white-text">2,048GB</strong> on File Server</p>
                  </div>
                  <!-- /tile widget -->


                  <!-- tile body -->
                  <div class="tile-body paddingtop">
                    <div id="rickshaw-chart"></div>
                  </div>
                  <!-- /tile body -->
                  
                


                </section>
                <!-- /tile -->




              </div>
              <!-- /col 4 -->



            </div>
            <!-- /row -->


            <!-- row -->
            <div class="row">

              

              <!-- col 6 -->
              <div class="col-md-6">



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Easy Pie</strong> Charts</h1>
                    <div class="controls">
                      <a href="charts.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="charts.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="charts.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body text-center">
                    
                    <div class="easypiechart inline" style="width: 110px;height: 110px;line-height: 110px;">
                      <div class="percentage" data-percent="30" data-size="110" data-track-color="rgba(0,0,0,.2)"><span>30</span>%</div>
                      <div class="label">New users</div>
                    </div>

                    <div class="easypiechart inline" style="width: 110px;height: 110px;line-height: 110px;">
                      <div class="percentage" data-percent="45" data-size="110" data-scale-color="false" data-bar-color="#16a085" data-track-color="rgba(0,0,0,.2)"><span>45</span>%</div>
                      <div class="label">New orders</div>
                    </div>

                    <div class="easypiechart inline" style="width: 110px;height: 110px;line-height: 110px;">
                      <div class="percentage" data-percent="8" data-size="110" data-line-cap="butt" data-line-width="8" data-track-color="rgba(0,0,0,.2)"><span>8</span>%</div>
                      <div class="label">Sales</div>
                    </div>

                    <div class="easypiechart inline" style="width: 140px;height: 140px;line-height: 140px;">
                      <div class="percentage" data-percent="24" data-size="140" data-line-cap="round" data-line-width="10" data-scale-color="false" data-bar-color="#A40778" data-track-color="rgba(0,0,0,.2)"><span>24</span>%</div>
                      <div class="label">Visits</div>
                    </div>

                  </div>
                  <!-- /tile body -->
                  
                


                </section>
                <!-- /tile -->



              </div>
              <!-- /col 6 -->



              <!-- col 6 -->
              <div class="col-md-6">



                <!-- tile -->
                <section class="tile color transparent-white">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>JustGage</strong> Charts</h1>
                    <div class="controls">
                      <a href="charts.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="charts.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="charts.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <div class="tile-body text-center">
                      <div id="gauge01" class="inline-block" style="width:180px; height: 160px;"></div>
                      <div id="gauge02" class="inline-block" style="width:180px; height: 160px;"></div>
                      <div id="gauge03" class="inline-block" style="width:180px; height: 160px;"></div>
                      <div id="gauge04" class="inline-block" style="width:180px; height: 160px;"></div>
                    </div>

                  </div>
                  <!-- /tile body -->
                  
                


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
            <li class="active"><a href="charts.html#mmenu-users" data-toggle="tab"><i class="fa fa-users"></i></a></li>
            <li class=""><a href="charts.html#mmenu-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
            <li class=""><a href="charts.html#mmenu-friends" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
            <li class=""><a href="charts.html#mmenu-settings" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
          </ul>
              
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="mmenu-users">
              <h5><strong>Online</strong> Users</h5>

              <ul class="users-list">
                
                <li class="online">
                  <div class="media">
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    <a class="pull-left profile-photo" href="charts.html#">
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
                    <a class="pull-left profile-photo" href="charts.html#">
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

    <script src="assets/js/vendor/flot/jquery.flot.min.js"></script>
    <script src="assets/js/vendor/flot/jquery.flot.categories.min.js"></script>
    <script src="assets/js/vendor/flot/jquery.flot.pie.min.js"></script>
    <script src="assets/js/vendor/flot/jquery.flot.stack.min.js"></script>
    <script src="assets/js/vendor/graphtable/jquery.graphTable-0.3.js"></script>
    <script src="assets/js/vendor/flot/jquery.flot.tooltip.min.js"></script>

    <script src="assets/js/vendor/rickshaw/raphael-min.js"></script> 
    <script src="assets/js/vendor/rickshaw/d3.v2.js"></script>
    <script src="assets/js/vendor/rickshaw/rickshaw.min.js"></script>

    <script src="assets/js/vendor/morris/morris.min.js"></script>

    <script src="assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

    <script src="assets/js/vendor/justgage/justgage.js"></script>

    <script src="assets/js/minimal.min.js"></script>

    <script>
    $(function(){

      // Morris line chart

      Morris.Line({
        element: 'line-example',
        data: [
          { y: '2009', a: 15,  b: 5 },
          { y: '2010', a: 20,  b: 10 },
          { y: '2011', a: 35,  b: 25 },
          { y: '2012', a: 40, b: 30 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        lineColors:['#16a085','#FF0066']
      });

      // Morris line area chart

      Morris.Area({
        element: 'line-area-example',
        data: [
          { y: '2009', a: 10,  b: 3 },
          { y: '2010', a: 14,  b: 5 },
          { y: '2011', a: 8,  b: 2 },
          { y: '2012', a: 20, b: 15 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        lineColors:['#a2d200','#d2d2d2'],
        lineWidth:'0',
        grid: false,
        fillOpacity:'0.5'
      });

      // Morris bar chart

      Morris.Bar({
        element: 'bar-example',
        data: [
          { y: '2009', a: 75,  b: 65 },
          { y: '2010', a: 50,  b: 40 },
          { y: '2011', a: 75,  b: 65 },
          { y: '2012', a: 100, b: 90 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        barColors:['#ff4a43','#1693A5']
      });

      // Morris donut chart

      Morris.Donut({
        element: 'donut-example',
        data: [
          {label: "Download Sales", value: 12},
          {label: "In-Store Sales", value: 30},
          {label: "Mail-Order Sales", value: 20}
        ],
        colors: ['#00a3d8', '#2fbbe8', '#72cae7']
      });

      // Sparkline Line Chart
      $('#sparkline01').sparkline([15,16,18,17,16,18,25,26,23], {
        type: 'line', 
        width: '100%',
        height:'250px',
        fillColor: 'rgba(34, 190, 239, .3)',
        lineColor: 'rgba(34, 190, 239, .5)',
        lineWidth: 2,
        spotRadius: 5,
        valueSpots:[5,6,8,7,6,8,5,4,7],
        minSpotColor: '#eaf9fe',
        maxSpotColor: '#00a3d8',
        highlightSpotColor: '#00a3d8',
        highlightLineColor: '#bec6ca',
        normalRangeMin: 0
      });
      $('#sparkline01').sparkline([1,2,1,3,1,2,4,1,3], {
        type: 'line', 
        composite: true,
        width: '100%',
        height:'250px',
        fillColor: 'rgba(255, 74, 67, .6)',
        lineColor: 'rgba(255, 74, 67, .8)',
        lineWidth: 2,
        minSpotColor: '#ffeced',
        maxSpotColor: '#d90200',
        highlightSpotColor: '#d90200',
        highlightLineColor: '#bec6ca',
        spotRadius: 5,
        valueSpots:[2,3,4,3,1,2,4,1,3],
        normalRangeMin: 0
      }); 

      // Sparkline Bar Chart

      var $el = $('#sparkline02');

      var values = $el.data('values').split(',').map(parseFloat);
      var type = $el.data('type') || 'line' ;
      var height = $el.data('height') || 'auto';

      var parentWidth = $el.parent().width();
      var valueCount = values.length;
      var barSpacing = 5;

      var barWidth = Math.round((parentWidth - ( valueCount - 1 ) * barSpacing ) / valueCount);

      $el.sparkline(values, {
        width:'100%',
        type: type,
        height: height,
        barWidth: barWidth, 
        barSpacing: barSpacing,
        barColor: '#16a085',
        negBarColor: '#FF0066'
      });

      // Sparkline Pie Chart

      $('#sparkline03').sparkline([5,10,20,15 ], {
        type: 'pie',
        width: 'auto',
        height: '250px',
        sliceColors: ['#22beef','#a2d200','#ffc100','#ff4a43']
      });

      // Line Chart

      var bars = false;
      var lines = true;
      var pie = false;

      var initializeFlot = function(){
        
        var el = $('table.flot-chart');

        el.each(function(){
          var data = $(this).data();
          var colors = [];
          var gridColor = data.tickColor || 'rgba(0,0,0,.1)';

          $(this).find('thead th:not(:first)').each(function() {
            colors.push($(this).css('color'));
          });

          if(data.type){
            bars = data.type.indexOf('bars') != -1;
            lines = data.type.indexOf('lines') != -1;
            pie = data.type.indexOf('pie') != -1;
          }

          $(this).graphTable({
            series: 'columns',
            position: 'replace',
            colors: colors,
            width: data.width,
            height: data.height
          },
          {
            series: { 
              stack: data.stack,
              pie: {
                show: pie,
                innerRadius: data.innerRadius || 0,
                label:{ 
                  show: data.pieLabel=='show' ? true:false
                }
              },
              bars: {
                show: bars,
                barWidth: data.barWidth || 0.5,
                fill: data.fill || 1,
                align: 'center'
              },
              lines: { 
                show: lines,
                fill: 0.1,
                lineWidth: 3
              },
              shadowSize: 0,
              points: {
                radius: 4
              }
            },
            xaxis: {
              mode: 'categories',
              tickLength: 0,
              font :{
                lineHeight: 24,
                weight: '300',
                color: data.fontColor,
                size: 14
              } 
            },
            yaxis: { 
              tickColor: gridColor,
              tickFormatter: function number(x) {  var num; if (x >= 1000) { num=(x/1000)+'k'; }else{ num=x; } return num; },
              max: data.yMax,
              font :{
                lineHeight: 13,
                weight: '300',
                color: data.fontColor
              }
            },  
            grid: { 
              borderWidth: {
                top: 0,
                right: 0,
                bottom: 1,
                left: 1
              },
              borderColor: gridColor,
              margin: 13,
              minBorderMargin:0,              
              labelMargin:20,
              hoverable: true,
              clickable: true,
              mouseActiveRadius:6
            },
            legend: { show: data.legend=='show' ? true:false },
            tooltip: data.toolTip=='show' ? true:false,
            tooltipOpts: { content: (pie ? '%p.0%, %s':'<b>%s</b> :  %y') }
          });
        });

        // tooltips showing
        $('.flot-graph').bind("plothover", function (event, pos, item) {
          if (item) {
            var x = item.datapoint[0],
                y = item.datapoint[1];
            $("#flotTip").css({top: item.pageY-30});
          } else {
            $("#flotTip").hide();
          }
        });
        
      };   

      // Pie Chart custom labels

      $('.custom-labels').each(function () {
        var el= $(this);
        var data = el.data();
        var colors = [];
        var info = [];
        var item = '';

        $(data.targetFlot).find('thead th:not(:first)').each(function() {
          colors.push($(this).css('color'));
          info.push($(this).text());
        });

        for(var i=0;i<info.length;i++){
          item += '<li><span class="badge badge-outline" style="border-color:' + colors[i] + '"></span>' + info[i] + ' ' + '<small>' + $(data.targetFlot).find("tbody td").eq(i).text() + '%' + '</small>' + '</li>';
        }

        el.append('<ul class="nolisttypes chart-legend">'+item+'</ul>');
        
      }); 

      initializeFlot();

      // Combined flot chart 
      var d1 = [['JAN', 150], ['FEB', 181], ['Mar', 252], ['APR', 356],['MAY', 851], ['JUN', 1589], ['JUL', 951], ['AUG', 651],['SEP', 591], ['OCT', 382], ['NOV', 951], ['DEC', 741]];
      var d2 = [['JAN', 145], ['FEB', 178], ['Mar', 200], ['APR', 350],['MAY', 212], ['JUN', 486], ['JUL', 841], ['AUG', 546],['SEP', 571], ['OCT', 300], ['NOV', 854], ['DEC', 685]];
      $.plot('#combined-chart', [
      {
        label: 'Last Year',
        data: d1,
        bars: { 
          show: true, 
          barWidth:  0.5, 
          fill:  1, 
          align: 'center'  
        }
      },
      {
        label: 'This Year',
        data: d2,
        lines: { 
          show: true,
          lineWidth: 3
        }
      }],
      {
        colors: ['#418bca' ,'#22beef'],
        xaxis: { 
          mode: 'categories',
          tickLength: 0,
          font :{
            lineHeight: 24,
            weight: '300',
            color: 'rgba(255,255,255,.8)',
            size: 14
          } 
        },
        yaxis: { 
          tickColor: 'rgba(255,255,255,.2)' ,
          tickFormatter: function number(x) {  var num; if (x >= 1000) { num=(x/1000)+'k'; }else{ num=x; } return num; },
          font :{
            lineHeight: 13,
            weight: '300',
            color: 'rgba(255,255,255,.8)'
          }
        },  
        grid: { 
          borderWidth: {
            top: 0,
            right: 0, 
            bottom: 1, 
            left: 1
          },
          margin: 13,
          labelMargin:20,
          hoverable: true,
          clickable: true,
          mouseActiveRadius:6,
          color : 'rgba(255,255,255,.2)' 
        },
        legend: { show: true },
        tooltip: true
      });

      $("#combined-chart div.legend >div").css("background", "transparent");
      $("#combined-chart div.legend table").css("color", "rgba(255,255,255,.8)");

      // tooltips showing
      $('#combined-chart').bind("plothover", function (event, pos, item) {
        if (item) {
          var x = item.datapoint[0],
              y = item.datapoint[1];
          $("#flotTip").css({top: item.pageY-30});
        } else {
          $("#flotTip").hide();
        }
      });

      // Real-Time flot chart
      var realTimeData = [];
      var totalPoints = 30;
      var updateInterval = 3000;

      function getData() {
        realTimeData.shift();

        while (realTimeData.length<totalPoints) {     
          var y = Math.random() * 100;
          var temp = [];
          realTimeData.push(y);
        }

        var temp = [];
        for (var i = 0; i<realTimeData.length; ++i) {
          temp.push([i, realTimeData[i]])
        }
        return temp;

      }

      var plot = $.plot('#realtime-chart', [getData()], 
      {
        colors: ['#a2d200'],
        series: {
          lines: { 
            show: true,
            fill: 0.1 
          },
          shadowSize: 0
        },
        yaxis: { 
          tickColor: 'rgba(255,255,255,.2)',
          min: 0,
          max: 100,
          font :{
            color: 'rgba(255,255,255,.8)'
          }
        },  
        grid: { 
          borderWidth: {
            top: 0,
            right: 0,
            bottom: 1,
            left: 1
          },
          color :  'rgba(255,255,255,.2)' 
        },
        tooltip: false,
        xaxis: { 
          show: false
        }
      });

      function update() {
        plot.setData([getData()]);
        plot.draw();
        setTimeout(update, updateInterval);
      };

      update(); 

      //server load rickshaw chart
      var graph;

      var seriesData = [ [], []];
      var random = new Rickshaw.Fixtures.RandomData(50);

      for (var i = 0; i < 50; i++) {
        random.addData(seriesData);
      }

      graph = new Rickshaw.Graph( {
        element: document.querySelector("#rickshaw-chart"),
        height: 150,
        renderer: 'area',
        series: [
          {
            data: seriesData[0],
            color: '#6e6e6e',
            name:'File Server'
          },{
            data: seriesData[1],
            color: '#fff',
            name:'Mail Server'
          }
        ]
      } );

      var hoverDetail = new Rickshaw.Graph.HoverDetail( {
        graph: graph,
      });

      setInterval( function() {
        random.removeData(seriesData);
        random.addData(seriesData);
        graph.update();

      },1000);


      // Generate easy-pie charts
      var charts = $('.easypiechart .percentage');
      charts.easyPieChart({
        animate: 2000,
        onStart: function(value) {
          $(this.el).find('span').animateNumbers(Math.floor(100*Math.random()));
        }
      });

      //update instance every 5 sec
      window.setInterval(function() {

        // refresh easy pie chart
        charts.each(function() {
          $(this).data('easyPieChart').update(Math.floor(100*Math.random()));
        });

      }, 5000);

      // Generate justGage charts

      var g01 = new JustGage({
        id: "gauge01", 
        value: 67, 
        min: 0,
        max: 100,
        title: "New Users",
        titleFontColor : "rgba(255,255,255,.6)",
        valueFontColor:  "rgba(255,255,255,.8)"
      }); 

      var g02 = new JustGage({
        id: "gauge02",
        value : 30,
        title : "Custom Width",
        min: 0,
        max: 100,
        gaugeWidthScale: .3,
        titleFontColor : "rgba(255,255,255,.6)",
        valueFontColor:  "rgba(255,255,255,.8)"
      }); 

      var g03 = new JustGage({
        id: "gauge03",
        value : 92,
        title : "Animation",
        min: 0,
        max: 100,
        startAnimationType: 'bounce',
        refreshAnimationType: 'bounce',
        refreshAnimationTime: 2500,
        titleFontColor : "rgba(255,255,255,.6)",
        valueFontColor:  "rgba(255,255,255,.8)"
      });

      var g04 = new JustGage({
        id: "gauge04",
        value : 72,
        title : "Donut Style",
        min: 0,
        max: 100,
        donut: true,
        titleFontColor : "rgba(255,255,255,.6)",
        valueFontColor:  "rgba(255,255,255,.8)"
      }); 

      //update instance every 5 sec
      window.setInterval(function() {

        // refresh justGage charts
        g01.refresh(getRandomInt(0, 100));
        g02.refresh(getRandomInt(0, 100));
        g03.refresh(getRandomInt(0, 100));
        g04.refresh(getRandomInt(0, 100));

      }, 5000);
      
    })
      
    </script>
  </body>
</html>
      