<header>
     <div class="container">
          <div class="navbar navbar-default" role="navigation">
               <div class="navbar-header">
                    <a class="navbar-brand" href="/">
                         <img src="/assets/img/sc-logo.png" alt="optional logo" height="90" width='202'>
                    </a>
                    <a class="btn btn-navbar btn-default navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="nb_left pull-left">
                              <span class="fa fa-reorder"></span>
                         </span>
                         <span class="nb_right pull-right">
                              menu
                         </span>
                    </a>
               </div>
               <div class="collapse navbar-collapse">
                    <ul class="nav pull-right navbar-nav">
                         <li class="active"><a href="/">Home</a></li>
                         <li><a href="about-us">About Us</a></li>
                         <li class="dropdown">
                              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                   Caddy In Action
                                   <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                   <li><a href="{{URL::route('assisted-purchase')}}">Assisted Purchase</a></li>
                                   <li><a href="{{URL::route('forwarding')}}">Forwarding Service</a></li>
                              </ul>
                         </li>
                         <li class="dropdown">
                              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                   Need Help?
                                   <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                   <li><a href="#">FAQs</a></li>
                                   <li><a href="#">Services & Charges</a></li>
                                   <li><a href="#">Shipping Calculator</a></li>
                                   <li><a href="#">Prohibited Items</a></li>
                                   <li><a href="#">Terms and Conditions</a></li>
                                   <li><a href="#">Privacy Policy</a></li>
                              </ul>
                         </li>
                         <li class="dropdown">
                              <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">
                                   My Account
                                   <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                   <li><a href="/credits">Prepaid Credits</a></li>
                                   <li><a href="/account">Modify Account</a></li>
                                   <li><a href="#">Change Password</a></li>
                                   <li><a href="#">Logout</a></li>
                              </ul>
                         </li>
                         <li><a href="contact">Contact Us</a></li>
                    </ul>
               </div>
          </div>
     </div>
</header>