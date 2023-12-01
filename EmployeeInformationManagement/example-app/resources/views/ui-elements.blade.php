<!DOCTYPE html>
<html>
  <head>
    <title>Minimal 1.3 - UI Elements</title>
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

    <link rel="stylesheet" href="assets/js/vendor/jgrowl/css/jquery.jgrowl.min.css">
    <link rel="stylesheet" href="assets/js/vendor/chosen/css/chosen.min.css">
    <link rel="stylesheet" href="assets/js/vendor/chosen/css/chosen-bootstrap.css">
    <link rel="stylesheet" href="assets/js/vendor/typeahead/css/typeahead.js-bootstrap.css">
    <link rel="stylesheet" href="assets/js/vendor/datepicker/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" href="assets/js/vendor/no-ui-slider/css/jquery.nouislider.min.css">
    <link rel="stylesheet" href="assets/js/vendor/tabdrop/css/tabdrop.css">
    <link rel="stylesheet" href="assets/js/vendor/modals/css/component.css">

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

    <!-- Custom Modals -->
    <div class="md-modal md-effect-1 md-cyan colorize-overlay" id="modal-1">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

          <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

          <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

          <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

          <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
          <button class="md-close btn btn-default">Close me!</button>
        </div>
      </div>
    </div>
    
    <div class="md-modal md-effect-2 md-red colorize-overlay" id="modal-2">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close btn btn-default">Close me!</button>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-3 md-green colorize-overlay" id="modal-3">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close btn btn-default">Close me!</button>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-4 md-orange colorize-overlay" id="modal-4">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close btn btn-default">Close me!</button>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-5 md-amethyst colorize-overlay" id="modal-5">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close btn btn-default">Close me!</button>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-6 md-slategray colorize-overlay" id="modal-6">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close btn btn-default">Close me!</button>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-7 md-dutch colorize-overlay" id="modal-7">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close btn btn-default">Close me!</button>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-8 md-hotpink colorize-overlay" id="modal-8">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close btn btn-default">Close me!</button>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-9 md-drank colorize-overlay" id="modal-9">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close btn btn-default">Close me!</button>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-10 md-blue colorize-overlay" id="modal-10">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close btn btn-default">Close me!</button>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-11 md-redbrown colorize-overlay" id="modal-11">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close btn btn-default">Close me!</button>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-12 md-greensea colorize-overlay" id="modal-12">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close btn btn-default">Close me!</button>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-13 md-greensea colorize-overlay" id="modal-13">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close btn btn-default">Close me!</button>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-14 md-greensea colorize-overlay" id="modal-14">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close btn btn-default">Close me!</button>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-15 md-greensea colorize-overlay" id="modal-15">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close btn btn-default">Close me!</button>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-16 md-greensea colorize-overlay" id="modal-16">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close btn btn-default">Close me!</button>
        </div>
      </div>
    </div>

    <div class="md-overlay"></div><!-- the overlay element -->
    <!-- /Custom Modals -->



    <!--  Modals -->
    <div class="modal fade" id="modalDialog" tabindex="-1" role="dialog" aria-labelledby="modalDialogLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
            <h3 class="modal-title" id="modalDialogLabel"><strong>Modal</strong> title</h3>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="modalConfirm" tabindex="-1" role="dialog" aria-labelledby="modalConfirmLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
            <h3 class="modal-title" id="modalConfirmLabel"><strong>Modal</strong> title</h3>
          </div>
          <div class="modal-body">
            <form role="form">
              
              <div class="form-group">
                <label for="exampleInput">Normal input field</label>
                <input type="text" class="form-control" id="exampleInput">
              </div>

              <div class="form-group">
                <label for="passwordInput">Password input field</label>
                <input type="password" class="form-control" id="passwordInput">
              </div>

              <div class="form-group">
                <label for="placeholderInput">Input with placeholder</label>
                <input type="text" class="form-control" id="placeholderInput" placeholder="This is a placeholder...">
              </div>

              <div class="form-group">
                <label>Normal textarea</label>
                <textarea class="form-control" rows="3"></textarea>
              </div>

            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-red" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-green">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->   
    <!-- / Modals --> 




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
              <a href="ui-elements.html#">
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
                <a href="ui-elements.html#" class="page-refresh"><i class="fa fa-refresh"></i></a>
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
                
                <a class="dropdown-toggle button" data-toggle="dropdown" href="ui-elements.html#">
                  <i class="fa fa-tasks"></i>
                  <span class="label label-transparent-black">2</span>
                </a>

                <ul class="dropdown-menu wide arrow nopadding bordered">
                  <li><h1>You have <strong>2</strong> new tasks</h1></li>
                  <li>
                    <a href="ui-elements.html#">
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
                    <a href="ui-elements.html#">
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
                    <a href="ui-elements.html#">
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
                    <a href="ui-elements.html#">
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
                    <a href="ui-elements.html#">
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
                  <li><a href="ui-elements.html#">Check all tasks <i class="fa fa-angle-right"></i></a></li>
                </ul>

              </li>

              <li class="dropdown divided">
                
                <a class="dropdown-toggle button" data-toggle="dropdown" href="ui-elements.html#">
                  <i class="fa fa-envelope"></i>
                  <span class="label label-transparent-black">1</span>
                </a>

                <ul class="dropdown-menu wider arrow nopadding messages">
                  <li><h1>You have <strong>1</strong> new message</h1></li>
                  <li>
                    <a class="cyan" href="ui-elements.html#">
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
                    <a class="green" href="ui-elements.html#">
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
                    <a href="ui-elements.html#">
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
                    <a class="red" href="ui-elements.html#">
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
                    <a class="orange" href="ui-elements.html#">
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


                  <li class="topborder"><a href="ui-elements.html#">Check all messages <i class="fa fa-angle-right"></i></a></li>
                </ul>

              </li>

              <li class="dropdown divided">
                
                <a class="dropdown-toggle button" data-toggle="dropdown" href="ui-elements.html#">
                  <i class="fa fa-bell"></i>
                  <span class="label label-transparent-black">3</span>
                </a>

                <ul class="dropdown-menu wide arrow nopadding bordered">
                  <li><h1>You have <strong>3</strong> new notifications</h1></li>
                  
                  <li>
                    <a href="ui-elements.html#">
                      <span class="label label-green"><i class="fa fa-user"></i></span>
                      New user registered.
                      <span class="small">18 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="ui-elements.html#">
                      <span class="label label-red"><i class="fa fa-power-off"></i></span>
                      Server down.
                      <span class="small">27 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="ui-elements.html#">
                      <span class="label label-orange"><i class="fa fa-plus"></i></span>
                      New order.
                      <span class="small">36 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="ui-elements.html#">
                      <span class="label label-cyan"><i class="fa fa-power-off"></i></span>
                      Server restared.
                      <span class="small">45 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="ui-elements.html#">
                      <span class="label label-amethyst"><i class="fa fa-power-off"></i></span>
                      Server started.
                      <span class="small">50 mins</span>
                    </a>
                  </li>

                   <li><a href="ui-elements.html#">Check all notifications <i class="fa fa-angle-right"></i></a></li>
                </ul>

              </li>

              <li class="dropdown divided user" id="current-user">
                <div class="profile-photo">
                  <img src="assets/images/profile-photo.jpg" alt />
                </div>
                <a class="dropdown-toggle options" data-toggle="dropdown" href="ui-elements.html#">
                  John Douey <i class="fa fa-caret-down"></i>
                </a>
                
                <ul class="dropdown-menu arrow settings">

                  <li>
                    
                    <h3>Backgrounds:</h3>
                    <ul id="color-schemes">
                      <li><a href="ui-elements.html#" class="bg-1"></a></li>
                      <li><a href="ui-elements.html#" class="bg-2"></a></li>
                      <li><a href="ui-elements.html#" class="bg-3"></a></li>
                      <li><a href="ui-elements.html#" class="bg-4"></a></li>
                      <li><a href="ui-elements.html#" class="bg-5"></a></li>
                      <li><a href="ui-elements.html#" class="bg-6"></a></li>
                      <li class="title">Solid Backgrounds:</li>
                      <li><a href="ui-elements.html#" class="solid-bg-1"></a></li>
                      <li><a href="ui-elements.html#" class="solid-bg-2"></a></li>
                      <li><a href="ui-elements.html#" class="solid-bg-3"></a></li>
                      <li><a href="ui-elements.html#" class="solid-bg-4"></a></li>
                      <li><a href="ui-elements.html#" class="solid-bg-5"></a></li>
                      <li><a href="ui-elements.html#" class="solid-bg-6"></a></li>
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
                      <li><a href="ui-elements.html#" class="video-bg-1"></a></li>
                      <li><a href="ui-elements.html#" class="video-bg-2"></a></li>
                      <li><a href="ui-elements.html#" class="video-bg-3"></a></li>
                      <li><a href="ui-elements.html#" class="video-bg-4"></a></li>
                      <li><a href="ui-elements.html#" class="video-bg-5"></a></li>
                      <li><a href="ui-elements.html#" class="video-bg-6"></a></li>
                      <li><a href="ui-elements.html#" class="video-bg-7"></a></li>
                      <li><a href="ui-elements.html#" class="video-bg-8"></a></li>
                      <li><a href="ui-elements.html#" class="video-bg-9"></a></li>
                      <li><a href="ui-elements.html#" class="video-bg-10"></a></li>
                    </ul>

                  </li>


                  <li class="divider"></li>

                  <li>
                    <a href="ui-elements.html#"><i class="fa fa-user"></i> Profile</a>
                  </li>

                  <li>
                    <a href="ui-elements.html#"><i class="fa fa-calendar"></i> Calendar</a>
                  </li>

                  <li>
                    <a href="ui-elements.html#"><i class="fa fa-envelope"></i> Inbox <span class="badge badge-red" id="user-inbox">3</span></a>
                  </li>

                  <li class="divider"></li>

                  <li>
                    <a href="ui-elements.html#"><i class="fa fa-power-off"></i> Logout</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="ui-elements.html#mmenu"><i class="fa fa-comments"></i></a>
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
                <a href="ui-elements.html#" class="sidebar-toggle" data-toggle="#navigation">Navigation <i class="fa fa-angle-up"></i></a>
                
                <ul class="menu">
                  
                  <li>
                    <a href="index.html">
                      <i class="fa fa-tachometer"></i> Dashboard
                      <span class="badge badge-red">1</span>
                    </a>
                  </li>

                  <li class="dropdown">
                    <a href="ui-elements.html#" class="dropdown-toggle" data-toggle="dropdown">
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

                  <li class="dropdown open active">
                    <a href="ui-elements.html#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-pencil"></i> Interface <b class="fa fa-plus dropdown-plus"></b>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="active">
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
                    <a href="ui-elements.html#" class="dropdown-toggle" data-toggle="dropdown">
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
                    <a href="ui-elements.html#" class="dropdown-toggle" data-toggle="dropdown">
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

                  <li>
                    <a href="charts.html">
                      <i class="fa fa-bar-chart-o"></i> Charts & Graphs
                    </a>
                  </li>


                </ul>

              </li>

              <li class="summary" id="order-summary">
                <a href="ui-elements.html#" class="sidebar-toggle underline" data-toggle="#order-summary">Orders Summary <i class="fa fa-angle-up"></i></a>

                <div class="media">
                  <a class="pull-right" href="ui-elements.html#">
                    <span id="sales-chart"></span>
                  </a>
                  <div class="media-body">
                    This week sales
                    <h3 class="media-heading">26, 149</h3>
                  </div>
                </div>

                <div class="media">
                  <a class="pull-right" href="ui-elements.html#">
                    <span id="balance-chart"></span>
                  </a>
                  <div class="media-body">
                    This week balance
                    <h3 class="media-heading">318, 651</h3>
                  </div>
                </div>

              </li>

              <li class="settings" id="general-settings">
                <a href="ui-elements.html#" class="sidebar-toggle underline" data-toggle="#general-settings">General Settings <i class="fa fa-angle-up"></i></a>

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
            

            <h2><i class="fa fa-puzzle-piece" style="line-height: 48px;padding-left: 5px;"></i> UI Elements <span>// Place subtitle here...</span></h2>
            

            <div class="breadcrumbs">
              <ol class="breadcrumb">
                <li>You are here</li>
                <li><a href="index.html">Minimal</a></li>
                <li><a href="ui-elements.html">Interface</a></li>
                <li class="active">UI Elements</li>
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
                <section class="tile transparent">



                  <div class="jumbotron bg-transparent-black-3">

                    <div class="container text-center">
                      <h1>Hello, world!</h1>
                      <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                      <p><a class="btn btn-red btn-large">Learn more</a></p>
                    </div>

                  </div>


                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile transparent">



                  <!-- tile header -->
                  <div class="tile-header transparent">
                    <h1><strong>Two-sided</strong> Cards</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body color transparent-black rounded-corners">
                    
                    <!-- cards -->
                    <div class="row cards">
                      
                      <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                        <div class="card card-redbrown hover">
                          <div class="front"> 

                            <div class="media">        
                              <span class="pull-left">
                                <i class="fa fa-users media-object"></i>
                              </span>

                              <div class="media-body">
                                <small>New Users</small>
                                <h2 class="media-heading animate-number" data-value="3659" data-animation-duration="1500">0</h2>
                              </div>
                            </div> 

                            <div class="progress-list">
                              <div class="details">
                                <div class="title">This month plan %</div>
                              </div>
                              <div class="status pull-right bg-transparent-black-1">
                                <span class="animate-number" data-value="83" data-animation-duration="1500">0</span>%
                              </div>
                              <div class="clearfix"></div>
                              <div class="progress progress-little progress-transparent-black">
                                <div class="progress-bar animate-progress-bar" data-percentage="83%"></div>
                              </div>
                            </div>

                          </div>
                          <div class="back">
                            <a href="ui-elements.html#">
                              <i class="fa fa-bar-chart-o fa-4x"></i>
                              <span>Check Summary</span>
                            </a>  
                          </div>
                        </div>
                      </div>


                      <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                        <div class="card card-blue hover">
                          <div class="front">        
                            
                            <div class="media">                  
                              <span class="pull-left">
                                <i class="fa fa-shopping-cart media-object"></i>
                              </span>

                              <div class="media-body">
                                <small>New Orders</small>
                                <h2 class="media-heading animate-number" data-value="19214" data-animation-duration="1500">0</h2>
                              </div>
                            </div> 

                            <div class="progress-list">
                              <div class="details">
                                <div class="title">This month plan %</div>
                              </div>
                              <div class="status pull-right bg-transparent-black-1">
                                <span class="animate-number" data-value="100" data-animation-duration="1500">0</span>%
                              </div>
                              <div class="clearfix"></div>
                              <div class="progress progress-little progress-transparent-black">
                                <div class="progress-bar animate-progress-bar" data-percentage="100%"></div>
                              </div>
                            </div>

                          </div>
                          <div class="back">
                            <a href="ui-elements.html#">
                              <i class="fa fa-bar-chart-o fa-4x"></i>
                              <span>Check Summary</span>
                            </a>
                          </div>
                        </div>
                      </div>



                      <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                        <div class="card card-greensea hover">
                          <div class="front">        
                            
                            <div class="media">
                              <span class="pull-left">
                                <i class="fa fa-usd media-object"></i>
                              </span>

                              <div class="media-body">
                                <small>Sales</small>
                                <h2 class="media-heading animate-number" data-value="169541" data-animation-duration="1500">0</h2>
                              </div>
                            </div>

                            <div class="progress-list">
                              <div class="details">
                                <div class="title">This month plan %</div>
                              </div>
                              <div class="status pull-right bg-transparent-black-1">
                                <span class="animate-number" data-value="42" data-animation-duration="1500">0</span>%
                              </div>
                              <div class="clearfix"></div>
                              <div class="progress progress-little progress-transparent-black">
                                <div class="progress-bar animate-progress-bar" data-percentage="42%"></div>
                              </div>
                            </div>

                          </div>
                          <div class="back">
                            <a href="ui-elements.html#">
                              <i class="fa fa-bar-chart-o fa-4x"></i>
                              <span>Check Summary</span>
                            </a>
                          </div>
                        </div>
                      </div>


                      <div class="card-container col-lg-3 col-sm-6 col-xs-12">
                        <div class="card card-slategray hover">
                          <div class="front"> 

                            <div class="media">                   
                              <span class="pull-left">
                                <i class="fa fa-eye media-object"></i>
                              </span>

                              <div class="media-body">
                                <small>Visits</small>
                                <h2 class="media-heading animate-number" data-value="9634" data-animation-duration="1500">0</h2>
                              </div>
                            </div> 

                            <div class="progress-list">
                              <div class="details">
                                <div class="title">This month plan %</div>
                              </div>
                              <div class="status pull-right bg-transparent-black-1">
                                <span class="animate-number" data-value="25" data-animation-duration="1500">0</span>%
                              </div>
                              <div class="clearfix"></div>
                              <div class="progress progress-little progress-transparent-black">
                                <div class="progress-bar animate-progress-bar" data-percentage="25%"></div>
                              </div>
                            </div>

                          </div>
                          <div class="back">
                            <a href="ui-elements.html#">
                              <i class="fa fa-bar-chart-o fa-4x"></i>
                              <span>Check Summary</span>
                            </a>
                          </div>
                        </div>
                      </div>


                    </div>
                    <!-- /cards -->

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

              <!-- col 6 -->
              <div class="col-md-6">


                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Alert</strong> Dialogs</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">

                    <div class="alert alert-warning alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <strong>Warning!</strong> This is the dismissable alert dialog.
                    </div>

                    <div class="alert alert-success">
                      <strong>Heads up!</strong> This <a href="ui-elements.html#" class="alert-link">alert needs your attention</a>, but it's not super important.
                    </div>

                    <div class="alert alert-info">
                      <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                    </div>

                    <div class="alert alert-big alert-danger alert-dismissable fade in">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4>Oh snap! You got an error!</h4>
                      <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                      <p>
                        <button type="button" class="btn btn-danger">Take this action</button>
                        <button type="button" class="btn btn-default">Or do this</button>
                      </p>
                    </div>

                    <div class="alert alert-red">
                      <strong>Heads up!</strong> This alert have class <em>.alert-red</em>.
                    </div>

                    <div class="alert alert-cyan">
                      <strong>Heads up!</strong> This alert have <a href="ui-elements.html#" class="alert-link">class</a> <em>.alert-cyan</em>.
                    </div>

                    <div class="alert alert-green">
                      <strong>Heads up!</strong> This alert have class <em>.alert-green</em>.
                    </div>

                    <div class="alert alert-greensea">
                      <strong>Heads up!</strong> This alert have class <em>.alert-greensea</em>.
                    </div>

                    <div class="alert alert-big alert-redbrown alert-dismissable fade in">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><strong>Heads up!</strong> This alert have class <em>.alert-redbrown</em></h4>
                      <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                      <p>
                        <button type="button" class="btn btn-danger">Take this action</button>
                        <button type="button" class="btn btn-default">Or do this</button>
                      </p>
                    </div>

                  </div>
                  <!-- /tile body -->


                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Modal</strong> Dialogs</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">

                    <a href="ui-elements.html#modalDialog" role="button" class="btn btn-cyan" data-toggle="modal">Open Modal Dialog</a>
                    <a href="ui-elements.html#modalConfirm" role="button" class="btn btn-red" data-toggle="modal">Open Modal Confirmation</a>            

                  </div>
                  <!-- /tile body -->

                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Progress</strong> Bars</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">

                    <h5><strong>Basic</strong> Progress Bars</h5>
                    <div class="progress progress-transparent-black">
                      <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <span class="sr-only">40% Complete (success)</span>
                      </div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80% Complete</span>
                      </div>
                    </div>

                    <h5><strong>Striped</strong> Progress Bars</h5>
                    <div class="progress progress-striped">
                      <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <span class="sr-only">40% Complete</span>
                      </div>
                    </div>
                    <div class="progress progress-striped">
                      <div class="progress-bar progress-bar-cyan" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>

                    <h5><strong>Animated</strong> Progress Bars</h5>
                    <div class="progress progress-striped active">
                      <div class="progress-bar progress-bar-orange" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <span class="sr-only">40% Complete</span>
                      </div>
                    </div>
                    <div class="progress progress-striped active">
                      <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>

                    <h5><strong>Stacked</strong> Progress Bar</h5>
                    <div class="progress">
                      <div class="progress-bar progress-bar-amethyst" style="width: 35%">
                        <span class="sr-only">35% Complete</span>
                      </div>
                      <div class="progress-bar progress-bar-greensea" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                      </div>
                      <div class="progress-bar progress-bar-dutch" style="width: 10%">
                        <span class="sr-only">10% Complete</span>
                      </div>
                    </div>

                    <h5><strong>Other</strong> Variations</h5>
                    
                     <div>
                      <div class="progress-info">
                        <div class="desc"><code>class="progress progress-striped progress-thin"</code></div>
                      </div>
                      <div class="progress progress-striped progress-thin">
                        <div class="progress-bar progress-bar-hotpink" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                          <span class="sr-only">25% Complete</span>
                        </div>
                      </div>
                    </div>

                    <div>
                      <div class="progress-info">
                        <div class="desc"><code>class="progress progress-striped progress-little"</code></div>
                      </div>
                      <div class="progress progress-striped progress-little">
                        <div class="progress-bar progress-bar-drank" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </div>

                    <div>
                      <div class="progress-info">
                        <div class="desc"><code>class="progress progress-striped progress-thin no-radius"</code></div>
                      </div>
                      <div class="progress progress-striped progress-thin no-radius">
                        <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>

                    <div>
                      <div class="progress-info">
                        <div class="desc"><code>&lt;div class="percent"&gt;20%&lt;/div&gt;</code></div>
                        <div class="percent">20%</div>
                      </div>
                      <div class="progress progress-striped progress-thin">
                        <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </div>

                    <div class="progress-list">
                      <div class="details">
                        <div class="title"><strong>Value</strong> in container</div>
                        <div class="description">animated progress bar load</div>
                      </div>
                      <div class="status pull-right">
                        <span class="animate-number" data-value="40" data-animation-duration="1500">0</span>%
                      </div>
                      <div class="clearfix"></div>
                      <div class="progress progress-little no-radius">
                        <div class="progress-bar progress-bar-orange animate-progress-bar" data-percentage="40%"></div>
                      </div>
                    </div>



                  </div>
                  <!-- /tile body -->


                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Tooltip</strong> Types</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">

                    <button id="topTooltip" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Tooltip on top</button>
                    <button id="rightTooltip" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Tooltip on right</button>
                    <button id="bottomTooltip" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Tooltip on bottom</button>
                    <button id="leftTooltip" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Tooltip on left</button>

                  </div>
                  <!-- /tile body -->


                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Growl</strong> Notifications</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">

                    <button class="btn btn-default bottommargin" id="defaultGrowl">Default growl notification</button> 
                    <button class="btn btn-info bottommargin" id="stickyGrowl">Sticky growl notification</button>   
                    <button class="btn btn-danger bottommargin" id="headerGrowl">Growl notification with header</button>   
                    <button class="btn btn-success bottommargin" id="longerGrowl">Growl notification with longer live</button> 
                    <button class="btn btn-warning bottommargin" id="specialGrowl">Growl notification with callback</button>     

                  </div>
                  <!-- /tile body -->

                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Pagination</strong> Types</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">

                    <div class="row">

                      <div class="col-md-6">
                        
                        <h4><strong>Default</strong> Pagination</h4>
                        
                        <div>
                          <ul class="pagination pagination-lg">
                            <li class="disabled"><a href="ui-elements.html#">«</a></li>
                            <li class="active"><a href="ui-elements.html#">1</a></li>
                            <li><a href="ui-elements.html#">2</a></li>
                            <li><a href="ui-elements.html#">3</a></li>
                            <li><a href="ui-elements.html#">4</a></li>
                            <li><a href="ui-elements.html#">5</a></li>
                            <li><a href="ui-elements.html#">»</a></li>
                          </ul>
                        </div>

                        <div>
                          <ul class="pagination">
                            <li class="disabled"><a href="ui-elements.html#">«</a></li>
                            <li class="active"><a href="ui-elements.html#">1</a></li>
                            <li><a href="ui-elements.html#">2</a></li>
                            <li><a href="ui-elements.html#">3</a></li>
                            <li><a href="ui-elements.html#">4</a></li>
                            <li><a href="ui-elements.html#">5</a></li>
                            <li><a href="ui-elements.html#">»</a></li>
                          </ul>
                        </div>

                        <div>
                          <ul class="pagination pagination-sm">
                            <li class="disabled"><a href="ui-elements.html#">«</a></li>
                            <li class="active"><a href="ui-elements.html#">1</a></li>
                            <li><a href="ui-elements.html#">2</a></li>
                            <li><a href="ui-elements.html#">3</a></li>
                            <li><a href="ui-elements.html#">4</a></li>
                            <li><a href="ui-elements.html#">5</a></li>
                            <li><a href="ui-elements.html#">»</a></li>
                          </ul>
                        </div>

                        <div>
                          <ul class="pagination pagination-xs">
                            <li class="disabled"><a href="ui-elements.html#">«</a></li>
                            <li class="active"><a href="ui-elements.html#">1</a></li>
                            <li><a href="ui-elements.html#">2</a></li>
                            <li><a href="ui-elements.html#">3</a></li>
                            <li><a href="ui-elements.html#">4</a></li>
                            <li><a href="ui-elements.html#">5</a></li>
                            <li><a href="ui-elements.html#">»</a></li>
                          </ul>
                        </div>
                      </div>


                      <div class="col-md-6">
                        
                        <h4><strong>Custom</strong> Pagination</h4>

                        <div>
                          <ul class="pagination pagination-lg pagination-custom">
                            <li class="disabled"><a href="ui-elements.html#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="active"><a href="ui-elements.html#">1</a></li>
                            <li><a href="ui-elements.html#">2</a></li>
                            <li><a href="ui-elements.html#">3</a></li>
                            <li><a href="ui-elements.html#">4</a></li>
                            <li><a href="ui-elements.html#">5</a></li>
                            <li><a href="ui-elements.html#"><i class="fa fa-angle-double-right"></i></a></li>
                          </ul>
                        </div>

                        <div>
                          <ul class="pagination pagination-custom">
                            <li class="disabled"><a href="ui-elements.html#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="active"><a href="ui-elements.html#">1</a></li>
                            <li><a href="ui-elements.html#">2</a></li>
                            <li><a href="ui-elements.html#">3</a></li>
                            <li><a href="ui-elements.html#">4</a></li>
                            <li><a href="ui-elements.html#">5</a></li>
                            <li><a href="ui-elements.html#"><i class="fa fa-angle-double-right"></i></a></li>
                          </ul>
                        </div>

                        <div>
                          <ul class="pagination pagination-sm pagination-custom">
                            <li class="disabled"><a href="ui-elements.html#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="active"><a href="ui-elements.html#">1</a></li>
                            <li><a href="ui-elements.html#">2</a></li>
                            <li><a href="ui-elements.html#">3</a></li>
                            <li><a href="ui-elements.html#">4</a></li>
                            <li><a href="ui-elements.html#">5</a></li>
                            <li><a href="ui-elements.html#"><i class="fa fa-angle-double-right"></i></a></li>
                          </ul>
                        </div>

                        <div>
                          <ul class="pagination pagination-xs pagination-custom">
                            <li class="disabled"><a href="ui-elements.html#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="active"><a href="ui-elements.html#">1</a></li>
                            <li><a href="ui-elements.html#">2</a></li>
                            <li><a href="ui-elements.html#">3</a></li>
                            <li><a href="ui-elements.html#">4</a></li>
                            <li><a href="ui-elements.html#">5</a></li>
                            <li><a href="ui-elements.html#"><i class="fa fa-angle-double-right"></i></a></li>
                          </ul>
                        </div>

                      </div>

                    </div>  

                  </div>
                  <!-- /tile body -->


                </section>
                <!-- /tile -->




                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Accordion</strong> Types</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">

                    <div class="panel-group accordion" id="accordion">
                      <div class="panel panel-default active">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="ui-elements.html#collapseOne">
                              <strong>Collapsible Group</strong> Item #1
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-hotpink">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="ui-elements.html#collapseTwo">
                              <strong>Collapsible Group</strong> Item #2
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-greensea">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="ui-elements.html#collapseThree">
                              <strong>Collapsible Group</strong> Item #3
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
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
                <section class="tile color transparent-black">

                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Notification</strong> Dialogs</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">

                    <div class="notification no-top-margin">
                      <h4>Normal Notification Field</h4>
                      <p><a href="ui-elements.html#">This notification</a>, have this classes <code>class="notification"</code>.</p>
                    </div>

                    <div class="notification notification-warning">
                      <h4>Warning Notification Field</h4>
                      <p><a href="ui-elements.html#">This notification</a>, have this classes <code>class="notification notification-warning"</code>.</p>
                    </div>

                    <div class="notification notification-danger">
                      <h4>Danger Notification Field</h4>
                      <p><a href="ui-elements.html#">This notification</a>, have this classes <code>class="notification notification-danger"</code>.</p>
                    </div>

                    <div class="notification notification-success">
                      <h4>Success Notification Field</h4>
                      <p><a href="ui-elements.html#">This notification</a>, have this classes <code>class="notification notification-success"</code>.</p>
                    </div>

                    <div class="notification notification-info">
                      <h4>Info Notification Field</h4>
                      <p><a href="ui-elements.html#">This notification</a>, have this classes <code>class="notification notification-info"</code>.</p>
                    </div>

                    <div class="notification notification-red">
                      <h4>Red Notification Field</h4>
                      <p><a href="ui-elements.html#">This notification</a>, have this classes <code>class="notification notification-red"</code>.</p>
                    </div>

                    <div class="notification notification-green">
                      <h4>Green Notification Field</h4>
                      <p><a href="ui-elements.html#">This notification</a>, have this classes <code>class="notification notification-green"</code>.</p>
                    </div>

                    <div class="notification notification-orange">
                      <h4>Orange Notification Field</h4>
                      <p><a href="ui-elements.html#">This notification</a>, have this classes <code>class="notification notification-orange"</code>.</p>
                    </div>

                    <div class="notification notification-amethyst">
                      <h4>Amethyst Notification Field</h4>
                      <p><a href="ui-elements.html#">This notification</a>, have this classes <code>class="notification notification-amethyst"</code>.</p>
                    </div>

                  </div>
                  <!-- /tile body -->


                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Labels</strong> & Badges</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->


                  <!-- tile body -->
                  <div class="tile-body">


                    <div class="panel panel-transparent-black panel-example">
                      <div class="panel-heading">
                        <span class="label label-default">Default</span>
                        <span class="label label-primary">Primary</span>
                        <span class="label label-success">Success</span>
                        <span class="label label-info">Info</span>
                        <span class="label label-warning">Warning</span>
                        <span class="label label-danger">Danger</span>
                        <span class="label label-cyan">Cyan</span>
                        <span class="label label-red">Red</span>
                        <span class="label label-green">Green</span>
                        <span class="label label-orange">Orange</span>
                        <span class="label label-amethyst">Amethyst</span>
                        <span class="label label-greensea">Greensea</span>
                        <span class="label label-dutch">Dutch</span>
                        <span class="label label-hotpink">Hotpink</span>
                        <span class="label label-drank">Drank</span>
                        <span class="label label-blue">Blue</span>
                        <span class="label label-slategray">Slategray</span>
                        <span class="label label-redbrown ">Redbrown</span>
                      </div>
                      <div class="panel-body">
<pre class="prettyprint">
&lt;span class="label label-default"&gt;Default&lt;/span&gt;
&lt;span class="label label-primary"&gt;Primary&lt;/span&gt;
&lt;span class="label label-success"&gt;Success&lt;/span&gt;
&lt;span class="label label-info"&gt;Info&lt;/span&gt;
&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;
&lt;span class="label label-danger"&gt;Danger&lt;/span&gt;
&lt;span class="label label-cyan"&gt;Cyan&lt;/span&gt;
&lt;span class="label label-red"&gt;Red&lt;/span&gt;
&lt;span class="label label-green"&gt;Green&lt;/span&gt;
&lt;span class="label label-orange"&gt;Orange&lt;/span&gt;
&lt;span class="label label-amethyst"&gt;Amethyst&lt;/span&gt;
&lt;span class="label label-greensea"&gt;Greensea&lt;/span&gt;
&lt;span class="label label-dutch"&gt;Dutch&lt;/span&gt;
&lt;span class="label label-hotpink"&gt;Hotpink&lt;/span&gt;
&lt;span class="label label-drank"&gt;Drank&lt;/span&gt;
&lt;span class="label label-blue"&gt;Blue&lt;/span&gt;
&lt;span class="label label-slategray"&gt;Slategray&lt;/span&gt;
&lt;span class="label label-redbrown "&gt;Redbrown&lt;/span&gt;
</pre>
                      </div>
                    </div>

                    <div class="panel panel-transparent-black panel-example">
                      <div class="panel-heading">
                        <span class="badge">1</span>
                        <span class="badge badge-primary">2</span>
                        <span class="badge badge-success">3</span>
                        <span class="badge badge-info">4</span>
                        <span class="badge badge-warning">5</span>
                        <span class="badge badge-danger">6</span>
                        <span class="badge badge-cyan">7</span>
                        <span class="badge badge-red">8</span>
                        <span class="badge badge-green">9</span>
                        <span class="badge badge-orange">10</span>
                        <span class="badge badge-amethyst">11</span>
                        <span class="badge badge-greensea">12</span>
                        <span class="badge badge-dutch">13</span>
                        <span class="badge badge-hotpink">14</span>
                        <span class="badge badge-drank">15</span>
                        <span class="badge badge-blue">16</span>
                        <span class="badge badge-slategray">17</span>
                        <span class="badge badge-redbrown">18</span>
                      </div>
                      <div class="panel-body">
<pre class="prettyprint">
&lt;span class="badge"&gt;1&lt;/span&gt;
&lt;span class="badge badge-primary"&gt;2&lt;/span&gt;
&lt;span class="badge badge-success"&gt;3&lt;/span&gt;
&lt;span class="badge badge-info"&gt;4&lt;/span&gt;
&lt;span class="badge badge-warning"&gt;5&lt;/span&gt;
&lt;span class="badge badge-danger"&gt;6&lt;/span&gt;
&lt;span class="badge badge-cyan"&gt;7&lt;/span&gt;
&lt;span class="badge badge-red"&gt;8&lt;/span&gt;
&lt;span class="badge badge-green"&gt;9&lt;/span&gt;
&lt;span class="badge badge-orange"&gt;10&lt;/span&gt;
&lt;span class="badge badge-amethyst"&gt;11&lt;/span&gt;
&lt;span class="badge badge-greensea"&gt;12&lt;/span&gt;
&lt;span class="badge badge-dutch"&gt;13&lt;/span&gt;
&lt;span class="badge badge-hotpink"&gt;14&lt;/span&gt;
&lt;span class="badge badge-drank"&gt;15&lt;/span&gt;
&lt;span class="badge badge-blue"&gt;16&lt;/span&gt;
&lt;span class="badge badge-slategray"&gt;17&lt;/span&gt;
&lt;span class="badge badge-redbrown"&gt;18&lt;/span&gt;
</pre>
                      </div>
                    </div>

                  </div>
                  <!-- /tile body -->


                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Pager</strong> Types</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">

                    <div class="row">

                      <div class="col-md-6">
                        
                        <h5>Default example</h5>
                        <ul class="pager">
                          <li><a href="ui-elements.html#">Previous</a></li>
                          <li><a href="ui-elements.html#">Next</a></li>
                        </ul>

                        <h5>Default aligned links</h5>
                        <ul class="pager">
                          <li class="previous"><a href="ui-elements.html#">&larr; Older</a></li>
                          <li class="next"><a href="ui-elements.html#">Newer &rarr;</a></li>
                        </ul>

                        <h5>Default optional disabled state</h5>
                        <ul class="pager">
                          <li class="previous disabled"><a href="ui-elements.html#">&larr; Older</a></li>
                          <li class="next"><a href="ui-elements.html#">Newer &rarr;</a></li>
                        </ul>

                      </div>

                      <div class="col-md-6">
                        
                        <h5>Custom example</h5>
                        <ul class="pager pager-custom">
                          <li><a href="ui-elements.html#">Previous</a></li>
                          <li><a href="ui-elements.html#">Next</a></li>
                        </ul>

                        <h5>Custom aligned links</h5>
                        <ul class="pager pager-custom">
                          <li class="previous"><a href="ui-elements.html#"><i class="fa fa-angle-left"></i> Older</a></li>
                          <li class="next"><a href="ui-elements.html#">Newer <i class="fa fa-angle-right"></i></a></li>
                        </ul>

                        <h5>Custom optional disabled state</h5>
                        <ul class="pager pager-custom">
                          <li class="previous disabled"><a href="ui-elements.html#"><i class="fa fa-angle-left"></i> Older</a></li>
                          <li class="next"><a href="ui-elements.html#">Newer <i class="fa fa-angle-right"></i></a></li>
                        </ul>

                      </div>

                        

                    </div>

                  </div>
                  <!-- /tile body -->


                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Multi</strong> Accordion</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">

                    <div class="panel-group accordion" id="multi-accordion">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" href="ui-elements.html#multicollapseOne">
                              <strong>Multi-Collapsible</strong> Group Item #1
                            </a>
                          </h4>
                        </div>
                        <div id="multicollapseOne" class="panel-collapse collapse">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-dutch">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" href="ui-elements.html#multicollapseTwo">
                              <strong>Multi-Collapsible</strong> Group Item #2
                            </a>
                          </h4>
                        </div>
                        <div id="multicollapseTwo" class="panel-collapse collapse">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-drank">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" href="ui-elements.html#multicollapseThree">
                              <strong>Multi-Collapsible</strong> Group Item #3
                            </a>
                          </h4>
                        </div>
                        <div id="multicollapseThree" class="panel-collapse collapse">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <!-- /tile body -->


                </section>
                <!-- /tile -->



              </div>
              <!-- /col 6 -->


              
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">



              <!-- col12 -->
              <div class="col-md-12">


                <!-- tile -->
                <section class="tile color transparent-white">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Custom</strong> Modals</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                       
                    <div class="row">
                      <div class="col-md-4">
                        <h5><strong>Fade and Slide</strong> effects</h5>
                        <button class="btn btn-red bottommargin md-trigger" data-modal="modal-1">Fade in &amp; Scale</button>
                        <button class="btn btn-red bottommargin md-trigger" data-modal="modal-2">Slide in (right)</button>
                        <button class="btn btn-red bottommargin md-trigger" data-modal="modal-3">Slide in (bottom)</button>
                      </div>
                      <div class="col-md-4">
                        <h5><strong>Flip and Rotate</strong> effects</h5>
                        <button class="btn btn-greensea bottommargin md-trigger" data-modal="modal-8">3D Flip (horizontal)</button>
                        <button class="btn btn-greensea bottommargin md-trigger" data-modal="modal-9">3D Flip (vertical)</button>
                        <button class="btn btn-greensea bottommargin md-trigger" data-modal="modal-10">3D Sign</button>
                        <button class="btn btn-greensea bottommargin md-trigger" data-modal="modal-14">3D Rotate Bottom</button>
                        <button class="btn btn-greensea bottommargin md-trigger" data-modal="modal-15">3D Rotate In Left</button>
                        <button class="btn btn-greensea bottommargin md-trigger" data-modal="modal-13">3D Slit</button>
                      </div>
                      <div class="col-md-4">
                        <h5><strong>Other</strong> effects</h5>
                        <button class="btn btn-drank bottommargin md-trigger" data-modal="modal-4">Newspaper</button>
                        <button class="btn btn-drank bottommargin md-trigger" data-modal="modal-5">Fall</button>
                        <button class="btn btn-drank bottommargin md-trigger" data-modal="modal-6">Side Fall</button>
                        <button class="btn btn-drank bottommargin md-trigger" data-modal="modal-7">Sticky Up</button>
                        <button class="btn btn-drank bottommargin md-trigger" data-modal="modal-11">Super Scaled</button>
                        <button class="btn btn-drank bottommargin md-trigger" data-modal="modal-12">Just Me</button>
                        <button class="btn btn-drank bottommargin md-trigger" data-modal="modal-16">Blur</button>
                      </div>
                    </div>



                  </div>
                  <!-- /tile body -->

                </section>
                <!-- /tile -->



              </div>
              <!-- /col12 -->




              <!-- col12 -->
              <div class="col-md-12">


                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Tab</strong> Navigation</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                       
                    <h5>Normal Tabs</h5> 
                    <ul class="nav nav-tabs nav-separated">
                      <li class="active"><a href="ui-elements.html#">Home</a></li>
                      <li><a href="ui-elements.html#">Profile</a></li>
                      <li><a href="ui-elements.html#">Messages</a></li>
                      <li class="disabled"><a href="ui-elements.html#">Disabled link</a></li>
                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="ui-elements.html#">
                          Dropdown <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="ui-elements.html#">Action</a></li>
                          <li><a href="ui-elements.html#">Another action</a></li>
                          <li><a href="ui-elements.html#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="ui-elements.html#">Separated link</a></li>
                        </ul>
                      </li>
                    </ul>

                    <h5>Normal Tabs with TabDrop</h5> 
                    <ul class="nav nav-tabs nav-separated tabdrop">
                      <li class="active"><a href="ui-elements.html#">Tab 1</a></li>
                      <li><a href="ui-elements.html#">Tab 2</a></li>
                      <li><a href="ui-elements.html#">Tab 3</a></li>
                      <li><a href="ui-elements.html#">Tab 4</a></li>
                      <li><a href="ui-elements.html#">Tab 5</a></li>
                      <li><a href="ui-elements.html#">Tab 6</a></li>
                      <li><a href="ui-elements.html#">Tab 7</a></li>
                      <li><a href="ui-elements.html#">Tab 8</a></li>
                      <li><a href="ui-elements.html#">Tab 9</a></li>
                      <li><a href="ui-elements.html#">Tab 10</a></li>
                      <li><a href="ui-elements.html#">Tab 11</a></li>
                      <li><a href="ui-elements.html#">Tab 12</a></li>
                      <li><a href="ui-elements.html#">Tab 13</a></li>
                      <li><a href="ui-elements.html#">Tab 14</a></li>
                      <li><a href="ui-elements.html#">Tab 15</a></li>
                      <li><a href="ui-elements.html#">Tab 16</a></li>
                      <li><a href="ui-elements.html#">Tab 17</a></li>
                      <li><a href="ui-elements.html#">Tab 18</a></li>
                      <li><a href="ui-elements.html#">Tab 19</a></li>
                      <li><a href="ui-elements.html#">Tab 20</a></li>
                    </ul>

                    <h5>Justified Tabs</h5>
                    <ul class="nav nav-tabs nav-separated nav-justified">
                      <li class="active"><a href="ui-elements.html#">Home</a></li>
                      <li><a href="ui-elements.html#">Profile</a></li>
                      <li><a href="ui-elements.html#">Messages</a></li>
                    </ul>

                  </div>
                  <!-- /tile body -->

                </section>
                <!-- /tile -->



              </div>
              <!-- /col12 -->


            </div>
            <!-- /row -->


            
            <!-- row -->
            <div class="row">



              <!-- col3 -->
              <div class="col-lg-3 col-md-6">

                
                <!-- tile -->
                <section class="tile transparent">

                  <!-- tile widget -->
                  <div class="tile-widget nopadding color transparent-black rounded-top-corners">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="ui-elements.html#">Tab 1</a></li>
                      <li><a href="ui-elements.html#">Tab 2</a></li>
                      <li><a href="ui-elements.html#">Tab 3</a></li>
                    </ul>
                    <!-- / Nav tabs -->
                  </div>
                  <!-- /tile widget -->


                  <!-- tile body -->
                  <div class="tile-body rounded-bottom-corners">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                  </div>
                  <!-- /tile body -->
                


                </section>
                <!-- /tile -->


              </div>
              <!-- /col3 -->



              <!-- col3 -->
              <div class="col-lg-3 col-md-6">

                
                <!-- tile -->
                <section class="tile transparent">


                  <!-- tile body -->
                  <div class="tile-body rounded-top-corners">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                  </div>
                  <!-- /tile body -->

                  <!-- tile footer -->
                  <div class="tile-footer nopadding color transparent-black rounded-bottom-corners">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-bottom">
                      <li class="active"><a href="ui-elements.html#">Tab 1</a></li>
                      <li><a href="ui-elements.html#">Tab 2</a></li>
                      <li><a href="ui-elements.html#">Tab 3</a></li>
                    </ul>
                    <!-- / Nav tabs -->
                  </div>
                  <!-- /tile footer -->                


                </section>
                <!-- /tile -->


              </div>
              <!-- /col3 -->



              <!-- col3 -->
              <div class="col-lg-3 col-md-6">

                
                <!-- tile -->
                <section class="tile left-nav transparent">

                  <!-- tile left-side -->
                  <div class="tile-left-side nopadding color transparent-black rounded-left-corners">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-left">
                      <li class="active"><a href="ui-elements.html#">Tab 1</a></li>
                      <li><a href="ui-elements.html#">Tab 2</a></li>
                      <li><a href="ui-elements.html#">Tab 3</a></li>
                    </ul>
                    <!-- / Nav tabs -->
                  </div>
                  <!-- /tile left-side -->


                  <!-- tile body -->
                  <div class="tile-body rounded-right-corners">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                  </div>
                  <!-- /tile body -->
                


                </section>
                <!-- /tile -->



              </div>
              <!-- /col3 -->



              <!-- col3 -->
              <div class="col-lg-3 col-md-6">

                
                <!-- tile -->
                <section class="tile right-nav transparent">


                  <!-- tile body -->
                  <div class="tile-body rounded-left-corners">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer</p>
                  </div>
                  <!-- /tile body -->


                  <!-- tile right-side -->
                  <div class="tile-right-side nopadding color transparent-black rounded-right-corners">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-right">
                      <li class="active"><a href="ui-elements.html#">Tab 1</a></li>
                      <li><a href="ui-elements.html#">Tab 2</a></li>
                      <li><a href="ui-elements.html#">Tab 3</a></li>
                    </ul>
                    <!-- / Nav tabs -->
                  </div>
                  <!-- /tile right-side -->
                


                </section>
                <!-- /tile -->


              </div>
              <!-- /col3 -->


            </div>
            <!-- /row -->



            <!-- row -->
            <div class="row">


              <!-- col12 -->
              <div class="col-md-12">


                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Pills</strong> Navigation</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                        
                    <h5>Normal Pills</h5> 
                    <ul class="nav nav-pills">
                      <li class="active"><a href="ui-elements.html#">Home</a></li>
                      <li><a href="ui-elements.html#">Profile</a></li>
                      <li><a href="ui-elements.html#">Messages</a></li>
                      <li class="disabled"><a href="ui-elements.html#">Disabled link</a></li>
                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="ui-elements.html#">
                          Dropdown <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="ui-elements.html#">Action</a></li>
                          <li><a href="ui-elements.html#">Another action</a></li>
                          <li><a href="ui-elements.html#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="ui-elements.html#">Separated link</a></li>
                        </ul>
                      </li>
                    </ul>

                    <h5>Normal Pills with TabDrop</h5>
                    <ul class="nav nav-pills tabdrop">
                      <li class="active"><a href="ui-elements.html#">Pill 1</a></li>
                      <li><a href="ui-elements.html#">Pill 2</a></li>
                      <li><a href="ui-elements.html#">Pill 3</a></li>
                      <li><a href="ui-elements.html#">Pill 4</a></li>
                      <li><a href="ui-elements.html#">Pill 5</a></li>
                      <li><a href="ui-elements.html#">Pill 6</a></li>
                      <li><a href="ui-elements.html#">Pill 7</a></li>
                      <li><a href="ui-elements.html#">Pill 8</a></li>
                      <li><a href="ui-elements.html#">Pill 9</a></li>
                      <li><a href="ui-elements.html#">Pill 10</a></li>
                      <li><a href="ui-elements.html#">Pill 11</a></li>
                      <li><a href="ui-elements.html#">Pill 12</a></li>
                      <li><a href="ui-elements.html#">Pill 13</a></li>
                      <li><a href="ui-elements.html#">Pill 14</a></li>
                      <li><a href="ui-elements.html#">Pill 15</a></li>
                      <li><a href="ui-elements.html#">Pill 16</a></li>
                      <li><a href="ui-elements.html#">Pill 17</a></li>
                      <li><a href="ui-elements.html#">Pill 18</a></li>
                      <li><a href="ui-elements.html#">Pill 19</a></li>
                      <li><a href="ui-elements.html#">Pill 20</a></li>
                    </ul>

                    <h5>Justified Pills</h5>
                    <ul class="nav nav-pills nav-justified">
                      <li class="active"><a href="ui-elements.html#">Home</a></li>
                      <li><a href="ui-elements.html#">Profile</a></li>
                      <li><a href="ui-elements.html#">Messages</a></li>
                    </ul>

                    <h5>Stacked Pills</h5>
                    <ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
                      <li class="active"><a href="ui-elements.html#">Home</a></li>
                      <li><a href="ui-elements.html#">Profile</a></li>
                      <li><a href="ui-elements.html#">Messages</a></li>
                    </ul>

                  </div>
                  <!-- /tile body -->

                </section>
                <!-- /tile -->


                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Breadcrumbs</strong> Navigation</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                        
                    <ol class="breadcrumb">
                      <li class="active">Home</li>
                    </ol>

                    <ol class="breadcrumb transparent-black">
                      <li><a href="ui-elements.html#">Home</a></li>
                      <li class="active">Library</li>
                    </ol>

                    <ol class="breadcrumb" style="margin-bottom: 5px;">
                      <li><a href="ui-elements.html#">Home</a></li>
                      <li><a href="ui-elements.html#">Library</a></li>
                      <li class="active">Data</li>
                    </ol>

                  </div>
                  <!-- /tile body -->

                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Panel</strong> Types</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">

                    <div class="row">

                      <div class="col-lg-3 col-md-6">
                        
                        <div class="panel panel-default">
                          <div class="panel-body">
                            Basic panel example
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading">Panel heading without title</div>
                          <div class="panel-body">
                            Panel content
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                          </div>
                          <div class="panel-body">
                            Panel content
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-body">
                            Panel content
                          </div>
                          <div class="panel-footer">Panel footer</div>
                        </div>

                      </div>

                      <div class="col-lg-3 col-md-6">

                        <div class="panel panel-primary">
                          <div class="panel-heading">
                            <h3 class="panel-title">Primary Panel title</h3>
                          </div>
                          <div class="panel-body">
                            Panel can have these color classes:<br/> <em class="little-thin">.panel-primary/.panel-success/.panel-danger/.panel-info/.panel-warning/.panel-red/.panel-cyan/.panel-green/.panel-orange/.panel-amethyst/.panel-greensea/.panel-dutch/.panel-hotpink/.panel-drank/.panel-transparent-black/.panel-transparent-white/.panel-blue/.panel-redbrown/.panel-slategray</em>
                          </div>
                        </div>

                        <div class="panel panel-greensea">
                          <div class="panel-heading">
                            <h3 class="panel-title">Greensea Panel title</h3>
                          </div>
                          <div class="panel-body">
                            Panel content
                          </div>
                        </div>

                        <div class="panel panel-transparent-black">
                          <div class="panel-heading">
                            <h3 class="panel-title">Transparent Panel title</h3>
                          </div>
                          <div class="panel-body">
                            Panel content
                          </div>
                        </div>                        

                      </div>

                      <div class="col-lg-3 col-md-6">

                        <div class="panel panel-default">
                          <!-- Default panel contents -->
                          <div class="panel-heading">Panel with table heading</div>
                          <div class="panel-body">
                            <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                          </div>

                          <!-- Table -->
                          <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Ici</td>
                                <td>Kamarel</td>
                                <td>@icko</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        

                      </div>

                      <div class="col-lg-3 col-md-6">
                        
                        <div class="panel panel-default">
                          <!-- Default panel contents -->
                          <div class="panel-heading">Panel with list group heading</div>
                          <div class="panel-body">
                            <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                          </div>

                          <!-- List group -->
                          <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                          </ul>
                        </div>
                        
                      </div>
                        

                    </div>

                  </div>
                  <!-- /tile body -->

                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>List</strong> Groups</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">

                    <div class="row">

                      <div class="col-lg-3 col-md-6">
                        
                        <ul class="list-group">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Morbi leo risus</li>
                          <li class="list-group-item">Porta ac consectetur ac</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>

                      </div>

                      <div class="col-lg-3 col-md-6">
                       
                        <ul class="list-group">
                          <li class="list-group-item"><span class="badge badge-red">14</span> Cras justo odio</li>
                          <li class="list-group-item"><span class="badge badge-cyan">12</span> Dapibus ac facilisis in</li>
                          <li class="list-group-item"><span class="badge badge-greensea">26</span> Morbi leo risus</li>
                          <li class="list-group-item"><span class="badge badge-hotpink">19</span> Porta ac consectetur ac</li>
                          <li class="list-group-item"><span class="badge badge-green">36</span> Vestibulum at eros</li>
                        </ul>

                      </div>

                      <div class="col-lg-3 col-md-6">

                        <div class="list-group">
                          <a href="ui-elements.html#" class="list-group-item active">
                            Cras justo odio
                          </a>
                          <a href="ui-elements.html#" class="list-group-item">Dapibus ac facilisis in</a>
                          <a href="ui-elements.html#" class="list-group-item">Morbi leo risus</a>
                          <a href="ui-elements.html#" class="list-group-item">Porta ac consectetur ac</a>
                          <a href="ui-elements.html#" class="list-group-item">Vestibulum at eros</a>
                        </div>

                      </div>

                      <div class="col-lg-3 col-md-6">

                        <div class="list-group">
                          <a href="ui-elements.html#" class="list-group-item active">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                          </a>
                          <a href="ui-elements.html#" class="list-group-item">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                          </a>
                          <a href="ui-elements.html#" class="list-group-item">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                          </a>
                        </div>                        
                                              
                      </div>
                        

                    </div>

                  </div>
                  <!-- /tile body -->

                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Other</strong> Elements</h1>
                    <div class="controls">
                      <a href="ui-elements.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="ui-elements.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="ui-elements.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">

                    <div class="row">

                      <div class="col-lg-4 col-md-12">
                        
                        <form role="form">
                              
                          <div class="form-group">
                            <label for="typeahead">TypeAhead</label>
                            <input type="text" class="form-control" id="typeahead">
                          </div>

                        </form>

                        <!-- row -->
                        <div class="row">
                          <div class="col-md-6">
                            
                            <h5><strong>Toggle</strong> Switches</h5>
                            <ul class="inline">
                              <li>
                                <div class="onoffswitch">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch green">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch01">
                                  <label class="onoffswitch-label" for="myonoffswitch01">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch red">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch03" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch03">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch greensea">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch04" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch04">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch dutch">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch05" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch05">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch slategray">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch23" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch23">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                              </li>
                              <li>
                                <div class="onoffswitch cyan">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch06" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch06">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch orange">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch07" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch07">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch amethyst">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch08" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch08">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch hotpink">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch09" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch09">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch drank">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch10" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch10">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch blue">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch24" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch24">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>
                              </li>
                            </ul>


                            <h5><strong>Dropdown</strong> Menu</h5>
                            <ul class="dropdown-menu example" role="menu">
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="ui-elements.html#">Action</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="ui-elements.html#">Another action</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="ui-elements.html#">Something else here</a></li>
                              <li role="presentation" class="divider"></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="ui-elements.html#">Separated link</a></li>
                            </ul>

                          </div>

                          <div class="col-md-6">
                            <h5><strong>Toggle Switches</strong> with labels</h5>
                            <ul class="inline">
                              <li>
                                <div class="onoffswitch labeled">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch11" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch11">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch labeled green">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch12">
                                  <label class="onoffswitch-label" for="myonoffswitch12">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch labeled red">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch13" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch13">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch labeled greensea">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch14" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch14">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch labeled dutch">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch15" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch15">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch labeled redbrown">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch21" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch21">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="onoffswitch labeled cyan">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch16" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch16">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch labeled orange">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch17" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch17">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch labeled amethyst">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch18" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch18">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch labeled hotpink">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch19" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch19">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch labeled drank">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch20" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch20">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>

                                <div class="onoffswitch labeled blue">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch22" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch22">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                  </label>
                                </div>
                              </li>
                            </ul>

                            <h5><strong>Dropdown Menu</strong> with headers</h5>
                            <ul class="dropdown-menu example" role="menu">
                              <li role="presentation" class="dropdown-header">Dropdown header</li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="ui-elements.html#">Action</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="ui-elements.html#">Another action</a></li>
                              <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="ui-elements.html#">Something else here</a></li>
                              <li role="presentation" class="divider"></li>
                              <li role="presentation" class="dropdown-header">Dropdown header</li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="ui-elements.html#">Separated link</a></li>
                            </ul>

                          </div>
                        </div>
                        <!-- /row -->               
              
                        
                      
                      </div>

                      <div class="col-lg-4 col-md-12">
                       
                        <form role="form">
                              
                          <div class="form-group">
                            <label for="datepicker">Datetimepicker</label>
                            <input type="text" class="form-control" id="datepicker">
                          </div>

                        </form>

                        <h5><strong>Range</strong> Slider</h5>
                        <div class="noUiSlider rangeSlider connect-greensea" id="rangeSlider"></div>

                        <h5><strong>One Handle</strong> Slider</h5>
                        <div class="noUiSlider" id="slider"></div>

                        <h5><strong>Vertical</strong> Sliders</h5>
                        <div id="colorslider">
                          <div class="noUiSlider slider red" id="red"></div>
                          <div class="noUiSlider slider green" id="green"></div>
                          <div class="noUiSlider slider cyan" id="blue"></div>
                          
                          <div class="result"></div>
                        </div>

                      </div>


                      <div class="col-lg-4 col-md-12">
                       
                        <form role="form">
                              
                          <div class="form-group">
                            <label for="chosen">Chosen Multiple-Select</label>
                            <select data-placeholder="Select recipients..." multiple="" tabindex="3" class="chosen-select form-control" id="chosen">
                              <option value="ici@gmail.com">ici@gmail.com</option>
                              <option value="johny@gmail.com">johny@gmail.com</option>
                              <option value="arnie@gmail.com">arnie@gmail.com</option>
                              <option value="pete@gmail.com">pete@gmail.com</option>
                              <option value="gorge@gmail.com">gorge@gmail.com</option>
                            </select>
                          </div>

                        </form>

                        <h5><strong>Row</strong> Select</h5>

                        <ul class="nolisttypes inlineSelect rowSelect green">
                          <li class="title"><h5>Options:</h5></li>
                          <li>
                            <div class="checkbox">
                              <input type="checkbox" value="1" id="opt01">
                              <label for="opt01">Option 1</label>
                            </div>
                          </li>
                          <li>
                            <div class="checkbox">
                              <input type="checkbox" checked="checked" value="1" id="opt02">
                              <label for="opt02">Option 2</label>
                            </div>
                          </li>
                          <li>
                            <div class="checkbox">
                              <input type="checkbox" value="1" id="opt03">
                              <label for="opt03">Option 3</label>
                            </div>
                          </li>
                          <li>
                            <div class="checkbox">
                              <input type="checkbox" value="1" id="opt04">
                              <label for="opt04">Option 4</label>
                            </div>
                          </li>
                        </ul>

                        <h5><strong>Inline</strong> Select</h5>
                        <ul class="nolisttypes inlineSelect inline cyan">
                          <li class="title"><h5>Options:</h5></li>
                          <li>
                            <div class="checkbox">
                              <input type="checkbox" value="1" id="opt05">
                              <label for="opt05">Option 1</label>
                            </div>
                          </li>
                          <li>
                            <div class="checkbox">
                              <input type="checkbox" checked="checked" value="1" id="opt06">
                              <label for="opt06">Option 2</label>
                            </div>
                          </li>
                          <li>
                            <div class="checkbox">
                              <input type="checkbox" value="1" id="opt07">
                              <label for="opt07">Option 3</label>
                            </div>
                          </li>
                        </ul>

                        <h5><strong>Wells</strong></h5>
                        <div class="well">
                          Look, I'm in a well!
                        </div>

                        <div class="well well-lg well-slategray">
                          Look, I'm in a large well with slategray background!
                        </div>

                        <div class="well well-sm well-cyan">
                          Look, I'm in a small well with cyan background!
                        </div>

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


          </div>
          <!-- /content container -->






        </div>
        <!-- Page content end -->




        <div id="mmenu" class="right-panel">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-justified">
            <li class="active"><a href="ui-elements.html#mmenu-users" data-toggle="tab"><i class="fa fa-users"></i></a></li>
            <li class=""><a href="ui-elements.html#mmenu-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
            <li class=""><a href="ui-elements.html#mmenu-friends" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
            <li class=""><a href="ui-elements.html#mmenu-settings" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
          </ul>
              
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="mmenu-users">
              <h5><strong>Online</strong> Users</h5>

              <ul class="users-list">
                
                <li class="online">
                  <div class="media">
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
                    <a class="pull-left profile-photo" href="ui-elements.html#">
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
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&amp;skin=sons-of-obsidian"></script>
    <script type="text/javascript" src="assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>
    <script type="text/javascript" src="assets/js/vendor/videobackground/jquery.videobackground.js"></script>
    <script type="text/javascript" src="assets/js/vendor/blockui/jquery.blockUI.js"></script>

    <script src="assets/js/vendor/jgrowl/jquery.jgrowl.min.js"></script>
    <script src="assets/js/vendor/typeahead/typeahead.min.js"></script>
    <script src="assets/js/vendor/momentjs/moment-with-langs.min.js"></script>
    <script src="assets/js/vendor/datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>
    <script src="assets/js/vendor/no-ui-slider/jquery.nouislider.min.js"></script>
    <script src="assets/js/vendor/tabdrop/bootstrap-tabdrop.min.js"></script>
    <script src="assets/js/vendor/modals/classie.js"></script>
    <script src="assets/js/vendor/modals/modalEffects.js"></script>
    <script>
      // this is important for IEs
      var polyfilter_scriptpath = '/assets/js/vendor/modals/';
    </script>
    <script src="assets/js/vendor/modals/cssParser.js"></script>
    <script src="assets/js/vendor/modals/css-filters-polyfill.js"></script>

    <script src="assets/js/minimal.min.js"></script>

    <script>
    $(function(){

      // Initialize card flip
      $('.card.hover').hover(function(){
        $(this).addClass('flip');
      },function(){
        $(this).removeClass('flip');
      });

      //show tooltips
      $('#topTooltip, #rightTooltip, #bottomTooltip, #leftTooltip').tooltip();

      //jGrowl notifications
      $("#defaultGrowl").click(function() {
        $.jGrowl("Hello world!");
      });

      $("#stickyGrowl").click(function() {
        $.jGrowl("Stick this!", { sticky: true });
      });

      $("#headerGrowl").click(function() {
        $.jGrowl("A message with a header", { header: 'Important' });
      });

      $("#longerGrowl").click(function() {
        $.jGrowl("A message that will live a little longer.", { life: 10000 });
      });

      $("#specialGrowl").click(function() {
        $.jGrowl("A message with a beforeClose callback and a different opening animation.", {
          beforeClose: function(e,m) {
            alert('About to close this notification!');
          },
          animateOpen: {
            height: 'show'
          }
        });
      });

      // Initialize tabDrop
      $('.tabdrop').tabdrop({text: '<i class="fa fa-th-list"></i>'});

      //initialize typeahead
      $('#typeahead').typeahead({
        name: 'States',
        local: ["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]
      });

      //initialize datepicker
      $('#datepicker').datetimepicker({
        icons: {
          time: "fa fa-clock-o",
          date: "fa fa-calendar",
          up: "fa fa-arrow-up",
          down: "fa fa-arrow-down"
        }
      });

      $("#datepicker").on("dp.show",function (e) {
        var newtop = $('.bootstrap-datetimepicker-widget').position().top - 45;      
        $('.bootstrap-datetimepicker-widget').css('top', newtop + 'px');
      });

      //initialize chosen
      $(".chosen-select").chosen({disable_search_threshold: 10});

      //initialize range slider
      $('#rangeSlider').noUiSlider({
        range: [10,40],
        start: [20,30],
        connect: true
      });

      //initialize slider
      $('#slider').noUiSlider({
        range: [0,100],
        start: [20],
        handles: 1
      });

      //initialize color picker sliders
      $('.slider').noUiSlider({
         range: [0,255]
        ,start: 127
        ,handles: 1
        ,connect: "lower"
        ,orientation: "vertical"
        ,serialization: {
          resolution: 1
        }
        ,slide: function(){

          var color = 'rgb(' + $("#red").val()
             + ',' + $("#green").val()
             + ',' + $("#blue").val()
             + ')';

          $(".result").css({
             background: color
            ,color: color
          });
        }
      });

      //set width for label on Inline Select
      var setLabelWidth = function() {
        var parentWidth = $('.inlineSelect.inline').width();
        var childrenLength = $('.inlineSelect.inline li').length;

        $('.inlineSelect.inline li label, .inlineSelect.inline li.title').css('width', ((parentWidth / childrenLength)) + 'px');
      }

      setLabelWidth();

      $(window).resize(function() {
        setLabelWidth();
      });

      //accordion class active toggling
      $('#accordion .panel-heading .panel-title a').click(function() {

        var $previous = $( '#accordion .panel.active' );

        $previous.removeClass('active');
        $(this).parent().parent().parent().stop().addClass('active');

        if($(this).parent().parent().parent().hasClass('active')) {
          $previous.removeClass('active');
        }
      });

      //multi-accordion class active toggling
      $('#multi-accordion .panel-heading .panel-title a').click(function() {
        $(this).parent().parent().parent().stop().toggleClass('active');
      });
      
    })
      
    </script>
  </body>
</html>
      