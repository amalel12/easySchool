<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#0288d1">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/vendor.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/easyschool.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/application.min.css">
  </head>
  <body class="layout layout-header-fixed">
    <div class="layout-header">
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand navbar-brand-center" href="index-2.html">
            <img class="navbar-brand-logo" src="<?= base_url(); ?>assets/img/logo-inverse.svg" alt="easyschool">
          </a>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
            <span class="sr-only">Toggle navigation</span>
            <span class="bars">
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
            </span>
            <span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
          </button>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="arrow-up"></span>
            <span class="ellipsis ellipsis-vertical">
              <img class="ellipsis-object" width="32" height="32" src="<?= base_url(); ?>assets/img/0180441436.jpg" alt="Teddy Wilson">
            </span>
          </button>
        </div>
        <div class="navbar-toggleable">
          <nav id="navbar" class="navbar-collapse collapse">
            <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
                <span class="bar-line bar-line-4 in"></span>
                <span class="bar-line bar-line-5 in"></span>
                <span class="bar-line bar-line-6 in"></span>
              </span>
            </button>
            <ul class="nav navbar-nav navbar-right">
              <li class="visible-xs-block">
                <h4 class="navbar-text text-center">Hi, Teddy Wilson</h4>
              </li>
              <li class="hidden-xs hidden-sm">
                <form class="navbar-search navbar-search-collapsed">
                  <div class="navbar-search-group">
                    <input class="navbar-search-input" type="text" placeholder="Search for people, companies, and more&hellip;">
                    <button class="navbar-search-toggler" title="Expand search form ( S )" aria-expanded="false" type="submit">
                      <span class="icon icon-search icon-lg"></span>
                    </button>
                    <button class="navbar-search-adv-btn" type="button">Advanced</button>
                  </div>
                </form>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                  <span class="icon-with-child hidden-xs">
                    <span class="icon icon-envelope-o icon-lg"></span>
                    <span class="badge badge-danger badge-above right">8</span>
                  </span>
                  <span class="visible-xs-block">
                    <span class="icon icon-envelope icon-lg icon-fw"></span>
                    <span class="badge badge-danger pull-right">8</span>
                    Messages
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                  <div class="dropdown-header">
                    <a class="dropdown-link" href="compose.html">New Message</a>
                    <h5 class="dropdown-heading">Recent messages</h5>
                  </div>
                  <div class="dropdown-body">
                    <div class="list-group list-group-divided custom-scrollbar">
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="<?= base_url(); ?>assets/img/0299419341.jpg" alt="Harry Jones">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">16 min</small>
                            <h5 class="notification-heading">Harry Jones</h5>
                            <p class="notification-text">
                              <small class="truncate">Hi Teddy, Just wanted to let you know we got the project! We should be starting the planning next week. Harry</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="<?= base_url(); ?>assets/img/0310728269.jpg" alt="Daniel Taylor">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">2 hr</small>
                            <h5 class="notification-heading">Daniel Taylor</h5>
                            <p class="notification-text">
                              <small class="truncate">Teddy Boyyyy, label text isn't vertically aligned with value text in grid forms when using .form-control... DT</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="<?= base_url(); ?>assets/img/0460697039.jpg" alt="Charlotte Harrison">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">Sep 20</small>
                            <h5 class="notification-heading">Charlotte Harrison</h5>
                            <p class="notification-text">
                              <small class="truncate">Dear Teddy, Can we discuss the benefits of this approach during our Monday meeting? Best regards Charlotte Harrison</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="<?= base_url(); ?>assets/img/0531871454.jpg" alt="Ethan Walker">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">Sep 19</small>
                            <h5 class="notification-heading">Ethan Walker</h5>
                            <p class="notification-text">
                              <small class="truncate">If you need any further assistance, please feel free to contact us. We are always happy to assist you. Regards, Ethan</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="<?= base_url(); ?>assets/img/0601274412.jpg" alt="Sophia Evans">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">Sep 18</small>
                            <h5 class="notification-heading">Sophia Evans</h5>
                            <p class="notification-text">
                              <small class="truncate">Teddy, Please call me when you finish your work! I have many things to discuss. Don't forget call me !! Sophia</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="<?= base_url(); ?>assets/img/0777931269.jpg" alt="Harry Walker">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">Sep 17</small>
                            <h5 class="notification-heading">Harry Walker</h5>
                            <p class="notification-text">
                              <small class="truncate">Thank you for your message. I am currently out of the office, with no email access. I will be returning on 20 Jun.</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="<?= base_url(); ?>assets/img/0872116906.jpg" alt="Emma Lewis">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">Sep 15</small>
                            <h5 class="notification-heading">Emma Lewis</h5>
                            <p class="notification-text">
                              <small class="truncate">Teddy, Please find the attached report. I am truly sorry and very embarrassed about not finishing the report by the deadline.</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="<?= base_url(); ?>assets/img/0980726243.jpg" alt="Eliot Morgan">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">Sep 15</small>
                            <h5 class="notification-heading">Eliot Morgan</h5>
                            <p class="notification-text">
                              <small class="truncate">Dear Teddy, Please accept this message as notification that I was unable to work yesterday, due to personal illness.m</small>
                            </p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="dropdown-footer">
                    <a class="dropdown-btn" href="#">See All</a>
                  </div>
                </div>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                  <span class="icon-with-child hidden-xs">
                    <span class="icon icon-bell-o icon-lg"></span>
                    <span class="badge badge-danger badge-above right">7</span>
                  </span>
                  <span class="visible-xs-block">
                    <span class="icon icon-bell icon-lg icon-fw"></span>
                    <span class="badge badge-danger pull-right">7</span>
                    Notifications
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                  <div class="dropdown-header">
                    <a class="dropdown-link" href="#">Mark all as read</a>
                    <h5 class="dropdown-heading">Recent Notifications</h5>
                  </div>
                  <div class="dropdown-body">
                    <div class="list-group list-group-divided custom-scrollbar">
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <span class="icon icon-exclamation-triangle bg-warning rounded sq-40"></span>
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">35 min</small>
                            <h5 class="notification-heading">Update Status</h5>
                            <p class="notification-text">
                              <small class="truncate">Failed to get available update data. To ensure the proper functioning of your application, update now.</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <span class="icon icon-flag bg-success rounded sq-40"></span>
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">43 min</small>
                            <h5 class="notification-heading">Account Contact Change</h5>
                            <p class="notification-text">
                              <small class="truncate">A contact detail associated with your account teddy.wilson, has recently changed.</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <span class="icon icon-exclamation-triangle bg-warning rounded sq-40"></span>
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">1 hr</small>
                            <h5 class="notification-heading">Failed Login Warning</h5>
                            <p class="notification-text">
                              <small class="truncate">There was a failed login attempt from "192.98.19.164" into the account teddy.wilson.</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="<?= base_url(); ?>assets/img/0310728269.jpg" alt="Daniel Taylor">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">4 hr</small>
                            <h5 class="notification-heading">Daniel Taylor</h5>
                            <p class="notification-text">
                              <small class="truncate">Like your post: "Everything you know about Bootstrap is wrong".</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="<?= base_url(); ?>assets/img/0872116906.jpg" alt="Emma Lewis">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">8 hr</small>
                            <h5 class="notification-heading">Emma Lewis</h5>
                            <p class="notification-text">
                              <small class="truncate">Like your post: "Everything you know about Bootstrap is wrong".</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="<?= base_url(); ?>assets/img/0601274412.jpg" alt="Sophia Evans">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">8 hr</small>
                            <h5 class="notification-heading">Sophia Evans</h5>
                            <p class="notification-text">
                              <small class="truncate">Like your post: "Everything you know about Bootstrap is wrong".</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="img/0180441436.jpg" alt="Teddy Wilson">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">9 hr</small>
                            <h5 class="notification-heading">Teddy Wilson</h5>
                            <p class="notification-text">
                              <small class="truncate">Published a new post: "Everything you know about Bootstrap is wrong".</small>
                            </p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="dropdown-footer">
                    <a class="dropdown-btn" href="#">See All</a>
                  </div>
                </div>
              </li>
              <li class="dropdown hidden-xs">
                <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
                  <img class="rounded" width="36" height="36" src="<?= base_url(); ?>assets/img/0180441436.jpg" alt="Teddy Wilson"> Teddy Wilson
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="divider"></li>
                  <li class="navbar-upgrade-version">Version: 1.0.0</li>
                  <li class="divider"></li>
                  <li><a href="contacts.html">Contacts</a></li>
                  <li><a href="profile.html">Profile</a></li>
                  <li><a href="<?= base_url(); ?>authentication/logout/">Sign out</a></li>
                </ul>
              </li>
              <li class="visible-xs-block">
                <a href="contacts.html">
                  <span class="icon icon-users icon-lg icon-fw"></span>
                  Contacts
                </a>
              </li>
              <li class="visible-xs-block">
                <a href="profile.html">
                  <span class="icon icon-user icon-lg icon-fw"></span>
                  Profile
                </a>
              </li>
              <li class="visible-xs-block">
                <a href="<?= base_url(); ?>authentication/logout/">
                  <span class="icon icon-power-off icon-lg icon-fw"></span>
                  Sign out
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="layout-main">
      <div class="layout-sidebar">
        <div class="layout-sidebar-backdrop"></div>
        <div class="layout-sidebar-body">
          <div class="custom-scrollbar">
            <nav id="sidenav" class="sidenav-collapse collapse">
              <ul class="sidenav">
                <li class="sidenav-search hidden-md hidden-lg">
                  <form class="sidenav-form" action="http://demo.naksoid.com/">
                    <div class="form-group form-group-sm">
                      <div class="input-with-icon">
                        <input class="form-control" type="text" placeholder="Search…">
                        <span class="icon icon-search input-icon"></span>
                      </div>
                    </div>
                  </form>
                </li>
                <li class="sidenav-heading">Navigation</li>
                <li class="sidenav-item active">
                  <a href="dashboard-1.html">
                    <span class="sidenav-icon icon icon-home"></span>
                    <span class="sidenav-label">Dashboards</span>
                  </a>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-briefcase"></span>
                    <span class="sidenav-label">Configuration</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Configuration</li>
                    <li><a href="arrows.html">Class</a></li>
                    <li><a href="badges.html">Fee</a></li>
                    <li><a href="buttons.html">Subject</a></li>
                    <li><a href="cards.html">Promotion</a></li>
                  </ul>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-edit"></span>
                    <span class="sidenav-label">Employee</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Employee</li>
                    <li><a href="cropper.html">Add New</a></li>
                    <li><a href="form-controls.html">List</a></li>
                    <li><a href="form-controls.html">Inactive List</a></li>
                    <li><a href="form-layouts.html">Salary</a></li>
                  </ul>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-list"></span>
                    <span class="sidenav-label">Students</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Add New</li>
                    <li><a href="static-tables.html">List</a></li>
                    <li><a href="responsive-tables.html">Inactive List</a></li>
                  </ul>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-pie-chart"></span>
                    <span class="sidenav-label">Fee</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Collect Fee</li>
                    <li><a href="peity.html">Fee Settings</a></li>
                  </ul>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-map-marker"></span>
                    <span class="sidenav-label">Attendance</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Students</li>
                    <li><a href="vector-maps.html">Staff</a></li>
                  </ul>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-lock"></span>
                    <span class="sidenav-label">Time Table</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Time Table</li>
                    <li><a href="signup-1.html" target="_blank">Period &emp; Time Slots</a></li>
                    <li><a href="signup-2.html" target="_blank">Time Sheduling</a></li>
                    <li><a href="signup-3.html" target="_blank">Sheduling Report</a></li>
                    <li><a href="login-1.html" target="_blank">Lession Plan</a></li>
                    <li><a href="login-2.html" target="_blank">Lession Plan Report</a></li>
                  </ul>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-lock"></span>
                    <span class="sidenav-label">Exam</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Exam</li>
                    <li><a href="signup-1.html" target="_blank">Scheduling</a></li>
                    <li><a href="signup-2.html" target="_blank">Time Table</a></li>
                    <li><a href="signup-3.html" target="_blank">Detail</a></li>
                    <li><a href="login-1.html" target="_blank">Generate Result</a></li>
                    <li><a href="login-2.html" target="_blank">Result</a></li>
                    <li><a href="login-2.html" target="_blank">Admit Card</a></li>
                  </ul>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-envelope"></span>
                    <span class="sidenav-label">Reports</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Reports</li>
                    <li><a href="mail.html">Promotion</a></li>
                    <li><a href="inbox.html">Transfer Certificate</a></li>
                    <li><a href="compose.html">Character Certificate</a></li>
                  </ul>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-shopping-cart"></span>
                    <span class="sidenav-label">HomeWork</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">HomeWork</li>
                    <li><a href="store.html">Define HomeWork</a></li>
                    <li><a href="shopping-cart.html">Show HomeWork</a></li>
                  </ul>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-files-o"></span>
                    <span class="sidenav-label">Stock</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Stock</li>
                    <li><a href="blank-page.html">Stock Entry</a></li>
                    <li><a href="404.html" target="_blank">Selling</a></li>
                    <li><a href="500.html" target="_blank">Print Reciept</a></li>
                    <li><a href="invoice.html">Edit Bill</a></li>
                  </ul>
                </li>


                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-files-o"></span>
                    <span class="sidenav-label">Messaging</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Messaging</li>
                    <li><a href="blank-page.html">Notice/Alert</a></li>
                    <li><a href="404.html" target="_blank">Short Message</a></li>
                    <li><a href="404.html" target="_blank">Mailing</a></li>
                  </ul>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-files-o"></span>
                    <span class="sidenav-label">Mobile Messaging</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Mobile Messaging</li>
                    <li><a href="blank-page.html">Setting</a></li>
                    <li><a href="404.html" target="_blank">Notice (indivisual)</a></li>
                    <li><a href="404.html" target="_blank">Parent Message</a></li>
                    <li><a href="404.html" target="_blank">Announcement</a></li>
                    <li><a href="404.html" target="_blank">Greeting</a></li>
                    <li><a href="404.html" target="_blank">Class Wise</a></li>
                  </ul>
                </li>

                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-files-o"></span>
                    <span class="sidenav-label">Accounting</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Accounting</li>
                    <li><a href="blank-page.html">DayBook</a></li>
                    <li><a href="404.html" target="_blank">Transaction</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <?php $this->load->view($body); ?>

      <div class="layout-footer">
        <div class="layout-footer-body">
          <small class="version">Version 0.0.1</small>
          <small class="copyright">2017 &copy; EasySchool By <a href="javascript:void(0);">Kanchan</a></small>
        </div>
      </div>
    </div>
    <div class="theme">
      <div class="theme-panel theme-panel-collapsed">
        <div class="theme-panel-body">
          <div class="custom-scrollbar">
            <div class="custom-scrollbar-inner">
              <ul class="theme-settings">
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Header fixed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-header-fixed" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Sidebar fixed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-sidebar-fixed" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Sidebar sticky*</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-sidebar-sticky" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Sidebar collapsed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-sidebar-collapsed" data-sync="false">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Footer fixed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-footer-fixed" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?= base_url(); ?>assets/js/vendor.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/easyschool.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/application.min.js"></script>
  </body>
</html>