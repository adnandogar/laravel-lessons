
 <!--Start sidebar-wrapper-->
 <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="{{ route('dashboard') }}">
      <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">Exam Admin</h5>
    </a>
  </div>
  <div class="user-details">
   <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
     <div class="avatar"><img class="mr-3 side-user-img" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
      <div class="media-body">
      <h6 class="side-user-name">{{ \Auth::user()->name }}</h6>
     </div>
      </div>
    <div id="user-dropdown" class="collapse">
     <ul class="user-setting-menu">
           <li><a href="javaScript:void();"><i class="icon-user"></i>  My Profile</a></li>
           <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li>
     <li><a href="{{ route('logout') }}"><i class="icon-power"></i> Logout</a></li>
     </ul>
    </div>
     </div>
  <ul class="sidebar-menu">
     <li class="sidebar-header">MAIN NAVIGATION</li>
     <li>
       <a href="javaScript:void();" class="waves-effect">
         <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span><i class="fa fa-angle-left pull-right"></i>
       </a>
       <ul class="sidebar-submenu">
         <li><a href="index.html"><i class="zmdi zmdi-dot-circle-alt"></i> eCommerce</a></li>
         <li><a href="dashboard-human-resources.html"><i class="zmdi zmdi-dot-circle-alt"></i> Human Resources</a></li>
         <li><a href="dashboard-digital-marketing.html"><i class="zmdi zmdi-dot-circle-alt"></i> Digital Marketing</a></li>
         <li><a href="dashboard-property-listing.html"><i class="zmdi zmdi-dot-circle-alt"></i> Property Listings</a></li>
         <li><a href="dashboard-service-support.html"><i class="zmdi zmdi-dot-circle-alt"></i> Services & Support</a></li>
         <li><a href="dashboard-logistics.html"><i class="zmdi zmdi-dot-circle-alt"></i> Logistics</a></li>
       </ul>
     </li>

     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Exam</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="/admin/exam/all"><i class="zmdi zmdi-dot-circle-alt"></i> View all</a></li>
          <li><a href="{{ route('exam_create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Create</a></li>
        </ul>
      </li>


     <li>
       <a href="javaScript:void();" class="waves-effect">
         <i class="zmdi zmdi-layers"></i>
         <span>UI Elements</span> <i class="fa fa-angle-left pull-right"></i>
       </a>
       <ul class="sidebar-submenu">
   </ul>

  </div>
  <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
<nav id="header-setting" class="navbar navbar-expand fixed-top">
 <ul class="navbar-nav mr-auto align-items-center">
   <li class="nav-item">
     <a class="nav-link toggle-menu" href="javascript:void();">
      <i class="icon-menu menu-icon"></i>
    </a>
   </li>
   <li class="nav-item">
     <form class="search-bar">
       <input type="text" class="form-control" placeholder="Enter keywords">
        <a href="javascript:void();"><i class="icon-magnifier"></i></a>
     </form>
   </li>
 </ul>

 <ul class="navbar-nav align-items-center right-nav-link">
   <li class="nav-item dropdown-lg">
     <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
     <i class="fa fa-envelope-open-o"></i><span class="badge badge-primary badge-up">12</span></a>
     <div class="dropdown-menu dropdown-menu-right">
       <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center">
         You have 12 new messages
         <span class="badge badge-primary">12</span>
         </li>
         <li class="list-group-item">
         <a href="javaScript:void();">
          <div class="media">
            <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
           <div class="media-body">
           <h6 class="mt-0 msg-title">Jhon Deo</h6>
           <p class="msg-info">Lorem ipsum dolor sit amet...</p>
           <small>Today, 4:10 PM</small>
           </div>
         </div>
         </a>
         </li>
         <li class="list-group-item">
         <a href="javaScript:void();">
          <div class="media">
            <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
           <div class="media-body">
           <h6 class="mt-0 msg-title">Sara Jen</h6>
           <p class="msg-info">Lorem ipsum dolor sit amet...</p>
           <small>Yesterday, 8:30 AM</small>
           </div>
         </div>
         </a>
         </li>
         <li class="list-group-item">
         <a href="javaScript:void();">
          <div class="media">
            <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
           <div class="media-body">
           <h6 class="mt-0 msg-title">Dannish Josh</h6>
           <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>5/11/2018, 2:50 PM</small>
           </div>
         </div>
         </a>
         </li>
         <li class="list-group-item">
         <a href="javaScript:void();">
          <div class="media">
            <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
           <div class="media-body">
           <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
           <p class="msg-info">Lorem ipsum dolor sit amet.</p>
           <small>1/11/2018, 2:50 PM</small>
           </div>
         </div>
         </a>
         </li>
         <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a></li>
       </ul>
       </div>
   </li>
   <li class="nav-item dropdown-lg">
     <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
   <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
     <div class="dropdown-menu dropdown-menu-right">
       <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
         You have 14 Notifications
         <span class="badge badge-info">14</span>
         </li>
         <li class="list-group-item">
         <a href="javaScript:void();">
          <div class="media">
            <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
           <div class="media-body">
           <h6 class="mt-0 msg-title">New Registered Users</h6>
           <p class="msg-info">Lorem ipsum dolor sit amet...</p>
           </div>
         </div>
         </a>
         </li>
         <li class="list-group-item">
         <a href="javaScript:void();">
          <div class="media">
            <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
           <div class="media-body">
           <h6 class="mt-0 msg-title">New Received Orders</h6>
           <p class="msg-info">Lorem ipsum dolor sit amet...</p>
           </div>
         </div>
         </a>
         </li>
         <li class="list-group-item">
         <a href="javaScript:void();">
          <div class="media">
            <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
           <div class="media-body">
           <h6 class="mt-0 msg-title">New Updates</h6>
           <p class="msg-info">Lorem ipsum dolor sit amet...</p>
           </div>
         </div>
         </a>
         </li>
         <li class="list-group-item text-center"><a href="javaScript:void();">See All Notifications</a></li>
       </ul>
     </div>
   </li>
   <li class="nav-item language">
     <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
     <ul class="dropdown-menu dropdown-menu-right">
         <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
         <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
         <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
         <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
       </ul>
   </li>

   {{-- // implmenting user auth --}}

    @php

        $user = \Auth::user();

    @endphp

   <li class="nav-item">
     <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
       <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
     </a>
     <ul class="dropdown-menu dropdown-menu-right">
      <li class="dropdown-item user-details">
       <a href="javaScript:void();">
          <div class="media">
            <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
           <div class="media-body">
           <h6 class="mt-2 user-title">{{ $user->name }}</h6>
           <p class="user-subtitle">{{ $user->email }}</p>
           </div>
          </div>
         </a>
       </li>
       <li class="dropdown-divider"></li>
       <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
       <li class="dropdown-divider"></li>
       <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
       <li class="dropdown-divider"></li>
       <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
       <li class="dropdown-divider"></li>
       <a href="{{ route('logout') }}">
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
       </a>
     </ul>
   </li>


 </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
