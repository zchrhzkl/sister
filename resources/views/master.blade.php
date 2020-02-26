<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SISTER - @yield('page_title')</title>

  <link rel="shortcut icon" href="{{ URL::asset('/favicon.ico') }}" type="image/x-icon"/>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <!-- JavaScripts -->
  <script type="text/javascript" src="{{ asset('/js/uikit.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/uikit-icons.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/uikit.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/icon.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700&display=swap" rel="stylesheet">


</head>

<body>

  <div class="uk-grid-collapse uk-text-center" uk-grid>
    <div class="uk-width-1-1@s uk-width-1-5@m uk-box-shadow-medium sidebar">
      <!-- SIDEBAR -->
      <div class="uk-height-viewport uk-visible@m" uk-sticky>
        <div class="uk-padding uk-padding-remove-bottom@m">
          <img src="{{ asset('assets/images/logo.png') }}" alt="">
        </div>
        <div class="uk-padding-small">
          <p class="uk-text-left uk-text-muted uk-text-small uk-margin-remove">NAVIGATION</p>
          <ul class="uk-nav-default uk-nav-parent-icon uk-margin-small-left uk-text-left" uk-nav>
            <li class=""><a href="/dashboard"><i class="fas fa-home"></i>Home</a></li>
            <li class="uk-parent">
              <a href="#"><i class="fas fa-inbox"></i>Incoming Mail</a>
              <ul class="uk-nav-sub">
                <li><a href="/createIncoming">Input Incoming Mail</a></li>
                <li><a href="#">View All Incoming Mail</a></li>
              </ul>
            </li>
            <li class="uk-parent">
              <a href="#"><i class="fas fa-paper-plane"></i>Outgoing Mail</a>
              <ul class="uk-nav-sub">
                <li><a href="/createOutgoing">Create Outgoing Mail</a></li>
                <li><a href="#">View All Outgoing Mail</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fas fa-archive"></i>Archive</a></li>
            <li class="uk-parent">
              <a href="#"><i class="fas fa-user"></i>Profile</a>
              <ul class="uk-nav-sub">
                <li><a href="#">Edit Profile</a></li>
              </ul>
            </li>
            <li class="uk-parent">
              <a href="#"><i class="fas fa-users-cog"></i>Admin</a>
              <ul class="uk-nav-sub">
                <li><a href="#">Create New User</a></li>
                <li><a href="#">Manage Users</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
          </ul>
          <hr>
          <p class="uk-text-left uk-text-muted uk-text-small uk-margin-remove">DOCUMENTATION</p>
        </div>
      </div>


      <!-- MOBILE -->
      <div class="uk-padding-small uk-height-1-1 uk-hidden@m">
        <div class="uk-padding uk-padding-remove-bottom@m">
          <img src="{{ asset('assets/images/logo.png') }}" alt="">
        </div>
        <p class="uk-text-left uk-text-muted uk-text-small uk-margin-remove">NAVIGATION</p>
        <ul class="uk-nav-default uk-nav-parent-icon uk-margin-small uk-text-left" uk-nav>
          <li class=""><a href="/dashboard"><i class="fas fa-home"></i>Home</a></li>
          <li class="uk-parent">
            <a href="#"><i class="fas fa-inbox"></i>Incoming Mail</a>
            <ul class="uk-nav-sub">
              <li><a href="/createIncoming">Input Incoming Mail</a></li>
              <li><a href="#">View All Incoming Mail</a></li>
            </ul>
          </li>
          <li class="uk-parent">
            <a href="#"><i class="fas fa-paper-plane"></i>Outgoing Mail</a>
            <ul class="uk-nav-sub">
              <li><a href="/createOutgoing">Create Outgoing Mail</a></li>
              <li><a href="#">View All Outgoing Mail</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fas fa-archive"></i>Archive</a></li>
          <li class="uk-parent">
            <a href="#"><i class="fas fa-user"></i>Profile</a>
            <ul class="uk-nav-sub">
              <li><a href="#">Edit Profile</a></li>
            </ul>
          </li>
          <li class="uk-parent">
            <a href="#"><i class="fas fa-users-cog"></i>Admin</a>
            <ul class="uk-nav-sub">
              <li><a href="#">Create New User</a></li>
              <li><a href="#">Manage Users</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul>
      </div>
    </div>

    <div class="uk-width-expand@m">
      <div class="dashboard">
        <!-- CONTENT SECTION -->
        @yield('content')
      </div>
    </div>
  </div>
</body>

</html>
