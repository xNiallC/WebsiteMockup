<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>NHS Patient Database</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <!-- User Stylesheet -->
  <link href="css/user-sheet.css" rel="stylesheet" />
  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<?php
  if(!isset($_COOKIE[$visitedBefore])) {
    // Run the tutorial with the dim screen
    setcookie('visitedBefore')
  }
?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"><img style="max-width: 25%" src='img/nhs.png' /></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="profile.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Profile Page</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Components</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="#">Navbar</a>
            </li>
            <li>
              <a href="#">Cards</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Example Pages</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Login Page</a>
            </li>
            <li>
              <a href="register.html">Registration Page</a>
            </li>
            <li>
              <a href="forgot-password.html">Forgot Password Page</a>
            </li>
            <li>
              <a href="#">Blank Page</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope" data-toggle="tooltip" title="x Unread Messages"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Dr Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">One of your patients is exhibiting interesting symptoms. I would suggest you take a look.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Dr Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell" data-toggle="tooltip" title="Make Emergency Search. Search will be logged."></i>
          </a>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button onclick="location.href='profile.html';" class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div id='my-welcome-message'>
    Welcome to NHSLink. Start by searching for a patient, or checking your tickets.
    Hover over page elements for more information.
  </div>
  <div class="content-wrapper">
    <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboard</li>
          </ol>
          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-support"></i>
                  </div>
                  <div class="mr-5">13 New Tickets!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          <div class="col-lg-4">
          <div class="card mb-3">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Dr Smith</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-9 col-lg-9 ">
                    <table class="table table-user-information">
                      <tbody>
                        <tr>
                          <td>Type:</td>
                          <td>Doctor</td>
                        </tr>
                        <tr>
                          <td>Profile Created</td>
                          <td>06/23/2013</td>
                        </tr>
                        <tr>
                          <td>Date of Birth:</td>
                          <td>01/24/1968</td>
                        </tr>
                        <tr>
                          </tr><tr>
                            <td>Gender:</td>
                            <td>Male</td>
                          </tr>
                        <tr>
                          <td>Home Address:</td>
                          <td>Cardiff, Wales</td>
                        </tr>
                        <tr>
                          <td>Email:</td>
                          <td><a href="mailto:null">put@email.here</a></td>
                        </tr>
                          <tr><td>Phone Number:</td>
                          <td>0123456789</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
              </div>
              </div>
            </div></div><div class="col-lg-4">

            <!-- Example Notifications Card-->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-bell-o"></i> Feed Example</div>
              <div class="list-group list-group-flush small">
                <a class="list-group-item list-group-item-action" href="#">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="" alt="">
                    <div class="media-body">
                      <strong>Admin Staff</strong> have notified you that
                      <strong>Frances Miller's</strong> appointment is today.
                      <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                    </div>
                  </div>
                </a>
                <a class="list-group-item list-group-item-action" href="#">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="" alt="">
                    <div class="media-body">
                      <strong>Dr Miller</strong> sent you a ticket.
                      <div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>
                    </div>
                  </div>
                </a>
                <a class="list-group-item list-group-item-action" href="#">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="" alt="">
                    <div class="media-body">
                      <strong>Dr Doe</strong> added you to a ticket.
                      <div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>
                    </div>
                  </div>
                </a>
                <a class="list-group-item list-group-item-action" href="#">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="" alt="">
                    <div class="media-body">
                      <strong>Jane Smith</strong> accessed her patient information.
                      <div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>
                    </div>
                  </div>
                </a>
                <a class="list-group-item list-group-item-action" href="#">View all activity...</a>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
      </div>
    </div>
  </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Footer Example</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
  <script src="jquery.firstVisitPopup.js"></script>
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
      $('#my-welcome-message').firstVisitPopup({
					cookieName : 'visitedBefore',
					showAgainSelector: '#show-message'
			});
    });
  </script>
</body>

</html>
