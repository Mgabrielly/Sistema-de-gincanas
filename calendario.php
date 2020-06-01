<!DOCTYPE html>
<html lang="en">

<head>
<head>
<meta charset="UTF-8">
<title>Calendário</title>
<meta name="robots" content="noindex">
<link rel="canonical" href="https://codepen.io/jaflo/pen/oKfeg">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<style class="INLINE_PEN_STYLESHEET_ID">
    html, body {
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
  font-weight: 300;
  font-size: 16px;
  margin: 0;
  padding: 10px;
}

/*!
 * FullCalendar v1.6.4 Stylesheet
 * Docs & License: http://arshaw.com/fullcalendar/
 * (c) 2013 Adam Shaw
 */


.fc {
  direction: ltr;
  text-align: left;
  max-width: 480px;
  margin: auto;
  }

.fc table thead {
  border: 0;
  }
  
html .fc,
.fc table {
  font-size: 1em;
  }
  
.fc td,
.fc th {
  padding: 0;
  vertical-align: top;
  }



/* Header
------------------------------------------------------------------------*/

.fc-header td {
  white-space: nowrap;
  }

.fc-header-left {
  width: 25%;
  text-align: left;
  }
  
.fc-header-center {
  text-align: center;
  }
  
.fc-header-right {
  width: 25%;
  text-align: right;
  }
  
.fc-header-title {
  display: inline-block;
  vertical-align: top;
  }
  
.fc-header-title h2 {
  margin-top: 0;
  white-space: nowrap;
  font-weight: 300;
  }
  
.fc .fc-header-space {
  padding-left: 10px;
  }
  
.fc-header .fc-button {
  margin-bottom: 1em;
  vertical-align: top;
  }
  
/* buttons edges butting together */

.fc-header .fc-button {
  margin-right: -1px;
  }
  
.fc-header .fc-corner-right,  /* non-theme */
.fc-header .ui-corner-right { /* theme */
  margin-right: 0; /* back to normal */
  }
  
/* button layering (for border precedence) */
  
.fc-header .fc-state-hover,
.fc-header .ui-state-hover {
  z-index: 2;
  }
  
.fc-header .fc-state-down {
  z-index: 3;
  }

.fc-header .fc-state-active,
.fc-header .ui-state-active {
  z-index: 4;
  }
  
  
  
/* Content
------------------------------------------------------------------------*/
  
.fc-content {
  clear: both;
  zoom: 1; /* for IE7, gives accurate coordinates for [un]freezeContentHeight */
  }
  
.fc-view {
  width: 100%;
  overflow: hidden;
  }
  
  

/* Cell Styles
------------------------------------------------------------------------*/

.fc-widget-header {
  border-width: 0 0 1px 0 !important;
  padding-bottom: 10px !important;
  }
  
.fc-widget-header,    /* <th>, usually */
.fc-widget-content {  /* <td>, usually */
  border: 1px solid #ddd;
  }
  
.fc-state-highlight { /* <td> today cell */ /* TODO: add .fc-today to <th> */
  background: #fcf8e3;
  }
  
.fc-cell-overlay { /* semi-transparent rectangle while dragging */
  background: #bce8f1;
  opacity: .3;
  filter: alpha(opacity=30); /* for IE */
  }
  


/* Buttons
------------------------------------------------------------------------*/

.fc-button {
  position: relative;
  display: inline-block;
  padding: 0 5px;
  overflow: hidden;
  height: 1.9em;
  line-height: 1.9em;
  white-space: nowrap;
  cursor: pointer;
  }
  
.fc-state-default { /* non-theme */
  border: 1px solid;
  }

.fc-state-default.fc-corner-left { /* non-theme */
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
  }

.fc-state-default.fc-corner-right { /* non-theme */
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
  }

/*
  Our default prev/next buttons use HTML entities like &lsaquo; &rsaquo; &laquo; &raquo;
  and we'll try to make them look good cross-browser.
*/

.fc-text-arrow {
  margin: 0 .1em;
  font-size: 2em;
  font-family: "Courier New", Courier, monospace;
  vertical-align: baseline; /* for IE7 */
  }

.fc-button-prev .fc-text-arrow,
.fc-button-next .fc-text-arrow { /* for &lsaquo; &rsaquo; */
  font-weight: bold;
  }
  
/* icon (for jquery ui) */
  
.fc-button .fc-icon-wrap {
  position: relative;
  float: left;
  top: 50%;
  }
  
.fc-button .ui-icon {
  position: relative;
  float: left;
  margin-top: -50%;
  *margin-top: 0;
  *top: -50%;
  }
  
/*
  button states
  borrowed from twitter bootstrap (https://twitter.github.com/bootstrap/)
*/

.fc-state-default {
  background-color: #f5f5f5;
  border-color: #bfbfbf;
  border-color: rgba(0, 0, 0, 0.2);
  color: #333;
  }

.fc-state-hover,
.fc-state-down,
.fc-state-active,
.fc-state-disabled {
  color: #333333;
  background-color: #e6e6e6;
  }

.fc-state-hover {
  color: #333333;
  text-decoration: none;
  }

.fc-state-down,
.fc-state-active {
  background-color: #cccccc;
  background-image: none;
  outline: 0;
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
  }

.fc-state-disabled {
  cursor: default;
  background-image: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  box-shadow: none;
  }

  

/* Global Event Styles
------------------------------------------------------------------------*/

.fc-event-container > * {
  z-index: 8;
  }

.fc-event-container > .ui-draggable-dragging,
.fc-event-container > .ui-resizable-resizing {
  z-index: 9;
  }
   
.fc-event {
  border: 1px solid #3a87ad; /* default BORDER color */
  background-color: #3a87ad; /* default BACKGROUND color */
  color: #fff;               /* default TEXT color */
  font-size: .85em;
  cursor: default;
  }

a.fc-event {
  text-decoration: none;
  }
  
a.fc-event,
.fc-event-draggable {
  cursor: pointer;
  }
  
.fc-rtl .fc-event {
  text-align: right;
  }

.fc-event-inner {
  width: 100%;
  height: 100%;
  overflow: hidden;
  }
  
.fc-event-time,
.fc-event-title {
  padding: 0 1px;
  }
  
.fc .ui-resizable-handle {
  display: block;
  position: absolute;
  z-index: 99999;
  overflow: hidden; /* hacky spaces (IE6/7) */
  font-size: 300%;  /* */
  line-height: 50%; /* */
  }
  
  
  
/* Horizontal Events
------------------------------------------------------------------------*/

.fc-event-hori {
  border-width: 1px 0;
  margin-bottom: 1px;
  }

.fc-ltr .fc-event-hori.fc-event-start,
.fc-rtl .fc-event-hori.fc-event-end {
  border-left-width: 1px;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  }

.fc-ltr .fc-event-hori.fc-event-end,
.fc-rtl .fc-event-hori.fc-event-start {
  border-right-width: 1px;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  }
  
/* resizable */
  
.fc-event-hori .ui-resizable-e {
  top: 0           !important; /* importants override pre jquery ui 1.7 styles */
  right: -3px      !important;
  width: 7px       !important;
  height: 100%     !important;
  cursor: e-resize;
  }
  
.fc-event-hori .ui-resizable-w {
  top: 0           !important;
  left: -3px       !important;
  width: 7px       !important;
  height: 100%     !important;
  cursor: w-resize;
  }
  
.fc-event-hori .ui-resizable-handle {
  _padding-bottom: 14px; /* IE6 had 0 height */
  }
  
  
  
/* Reusable Separate-border Table
------------------------------------------------------------*/

table.fc-border-separate {
  border-collapse: separate;
  }
  
.fc-border-separate th,
.fc-border-separate td {
  border-width: 1px 0 0 1px;
  }
  
.fc-border-separate th.fc-last,
.fc-border-separate td.fc-last {
  border-right-width: 1px;
  }
  
.fc-border-separate tr.fc-last th,
.fc-border-separate tr.fc-last td {
  border-bottom-width: 1px;
  }
  
.fc-border-separate tbody tr.fc-first td,
.fc-border-separate tbody tr.fc-first th {
  border-top-width: 0;
  }
  
  

/* Month View, Basic Week View, Basic Day View
------------------------------------------------------------------------*/

.fc-grid th {
  text-align: center;
  }

.fc .fc-week-number {
  max-width: 22px;
  text-align: center;
  }

.fc .fc-week-number div {
  padding: 0 2px;
  }
  
.fc-grid .fc-day-number {
  text-align: center;
  line-height: 55px;
  }
  
.fc-grid .fc-other-month .fc-day-number {
  opacity: 0.3;
  filter: alpha(opacity=30); /* for IE */
  /* opacity with small font can sometimes look too faded
     might want to set the 'color' property instead
     making day-numbers bold also fixes the problem */
  }
  
.fc-grid .fc-day-content {
  clear: both;
  padding: 2px 2px 1px; /* distance between events and day edges */
  }
  
/* event styles */
  
.fc-grid .fc-event-time {
  font-weight: bold;
  }
  
/* right-to-left */
  
.fc-rtl .fc-grid .fc-day-number {
  float: left;
  }
  
.fc-rtl .fc-grid .fc-event-time {
  float: right;
  }
  
  

/* Agenda Week View, Agenda Day View
------------------------------------------------------------------------*/

.fc-agenda table {
  border-collapse: separate;
  }
  
.fc-agenda-days th {
  text-align: center;
  }
  
.fc-agenda .fc-agenda-axis {
  width: 50px;
  padding: 0 4px;
  vertical-align: middle;
  text-align: right;
  white-space: nowrap;
  font-weight: normal;
  }

.fc-agenda .fc-week-number {
  font-weight: bold;
  }
  
.fc-agenda .fc-day-content {
  padding: 2px 2px 1px;
  }
  
/* make axis border take precedence */
  
.fc-agenda-days .fc-agenda-axis {
  border-right-width: 1px;
  }
  
.fc-agenda-days .fc-col0 {
  border-left-width: 0;
  }
  
/* all-day area */
  
.fc-agenda-allday th {
  border-width: 0 1px;
  }
  
.fc-agenda-allday .fc-day-content {
  min-height: 34px; /* TODO: doesnt work well in quirksmode */
  _height: 34px;
  }
  
/* divider (between all-day and slots) */
  
.fc-agenda-divider-inner {
  height: 2px;
  overflow: hidden;
  }
  
.fc-widget-header .fc-agenda-divider-inner {
  background: #eee;
  }
  
/* slot rows */
  
.fc-agenda-slots th {
  border-width: 1px 1px 0;
  }
  
.fc-agenda-slots td {
  border-width: 1px 0 0;
  background: none;
  }
  
.fc-agenda-slots td div {
  height: 20px;
  }
  
.fc-agenda-slots tr.fc-slot0 th,
.fc-agenda-slots tr.fc-slot0 td {
  border-top-width: 0;
  }

.fc-agenda-slots tr.fc-minor th,
.fc-agenda-slots tr.fc-minor td {
  border-top-style: dotted;
  }
  
.fc-agenda-slots tr.fc-minor th.ui-widget-header {
  *border-top-style: solid; /* doesn't work with background in IE6/7 */
  }
  


/* Vertical Events
------------------------------------------------------------------------*/

.fc-event-vert {
  border-width: 0 1px;
  }

.fc-event-vert.fc-event-start {
  border-top-width: 1px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  }

.fc-event-vert.fc-event-end {
  border-bottom-width: 1px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  }
  
.fc-event-vert .fc-event-time {
  white-space: nowrap;
  font-size: 10px;
  }

.fc-event-vert .fc-event-inner {
  position: relative;
  z-index: 2;
  }
  
.fc-event-vert .fc-event-bg { /* makes the event lighter w/ a semi-transparent overlay  */
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #fff;
  opacity: .25;
  filter: alpha(opacity=25);
  }
  
.fc .ui-draggable-dragging .fc-event-bg, /* TODO: something nicer like .fc-opacity */
.fc-select-helper .fc-event-bg {
  display: none\9; /* for IE6/7/8. nested opacity filters while dragging don't work */
  }
  
/* resizable */
  
.fc-event-vert .ui-resizable-s {
  bottom: 0        !important; /* importants override pre jquery ui 1.7 styles */
  width: 100%      !important;
  height: 8px      !important;
  overflow: hidden !important;
  line-height: 8px !important;
  font-size: 11px  !important;
  font-family: monospace;
  text-align: center;
  cursor: s-resize;
  }
  
.fc-agenda .ui-resizable-resizing { /* TODO: better selector */
  _overflow: hidden;
  }
  
  
  </style>
<script src="https://static.codepen.io/assets/editor/iframe/iframeConsoleRunner-dc0d50e60903d6825042d06159a8d5ac69a6c0e9bcef91e3380b17617061ce0f.js"></script>
<script src="https://static.codepen.io/assets/editor/iframe/iframeRefreshCSS-e03f509ba0a671350b4b363ff105b2eb009850f34a2b4deaadaa63ed5d970b37.js"></script>
<script src="https://static.codepen.io/assets/editor/iframe/iframeRuntimeErrors-29f059e28a3c6d3878960591ef98b1e303c1fe1935197dae7797c017a3ca1e82.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Gincana JMF - Pagina Principal</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style=" background-color: #20c9a6;
  background-image: linear-gradient(180deg, #20c9a6 10%, #20c9a6 100%);
  background-size: cover;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Gincanas <sup>JMF</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Página Principal</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Cadastro</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="atividades.php"><i class="fas fa-gamepad"></i> Atividades</a>
            <a class="collapse-item" href="turmas.php"><i class="fas fa-users"></i>     Turmas</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="calendario.php">
         <i class="far fa-calendar"></i>
          <span>Calendário</span></a>
      </li>
      
<li class="nav-item">
        <a class="nav-link" href="ranking.php">
         <i class="fas fa-flag-checkered"></i>
          <span>Ranking</span></a>
      </li>
      <!--
      <li class="nav-item">
        <a class="nav-link" href="lista de atividades.php">
        <i class="fas fa-gamepad"></i>
          <span>Lista de Atividades</span></a>
      </li>-->
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            
          </button>
           <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
           <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                <!-- Counter - Alerts -->
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <!-- Nav Item - perfilTurma -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="perfilTurma.php" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               
                <!-- Counter - perfilTurma -->
              </a>
              <!-- Dropdown - perfilTurma -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown" >
                
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Grêmio Estudantil</span>
                <img class="img-profile rounded-circle" src="img/logo.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="perfil.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      <div id="calendar"></div>
      <div class="container theme-showcase">
  <h1>Calendário</h1>
<div id="holder" class="row" ></div>
</div>
<center>
<div id="calendar" class="fc fc-ltr"><table class="fc-header" style="width:100%"><tbody><tr><td class="fc-header-right"><span class="fc-header-title"><h2>March 2020</h2></span></td><td class="fc-header-center"></td><td class="fc-header-right"><span class="fc-button fc-button-today fc-state-default fc-corner-left fc-corner-right fc-state-disabled" unselectable="on">today</span><span class="fc-header-space"><button type="button" class="fc-button fc-button-next fc-state-default fc-corner-left"  unselectable="on" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>
                        <button type="button" id="show-next-image" class="fc-button fc-button-next fc-state-default fc-corner-right"><i class="fa fa-arrow-right"></i>
                        </button></span></td></tr></tbody></table><div class="fc-content" style="position: relative;"><div class="fc-view fc-view-month fc-grid" style="position:relative" unselectable="on"><div class="fc-event-container" style="position:absolute;z-index:8;top:0;left:0"></div><table class="fc-border-separate" style="width:100%" cellspacing="0"><thead><tr class="fc-first fc-last"><th class="fc-day-header fc-sun fc-widget-header fc-first" style="width: 58px;">Sun</th><th class="fc-day-header fc-mon fc-widget-header" style="width: 58px;">Mon</th><th class="fc-day-header fc-tue fc-widget-header" style="width: 58px;">Tue</th><th class="fc-day-header fc-wed fc-widget-header" style="width: 58px;">Wed</th><th class="fc-day-header fc-thu fc-widget-header" style="width: 58px;">Thu</th><th class="fc-day-header fc-fri fc-widget-header" style="width: 58px;">Fri</th><th class="fc-day-header fc-sat fc-widget-header fc-last">Sat</th></tr></thead><tbody><tr class="fc-week fc-first"><td class="fc-day fc-sun fc-widget-content fc-past fc-first" data-date="2020-03-01"><div style="min-height: 46px;"><div class="fc-day-number">1</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-past" data-date="2020-03-02"><div><div class="fc-day-number">2</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-past" data-date="2020-03-03"><div><div class="fc-day-number">3</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-past" data-date="2020-03-04"><div><div class="fc-day-number">4</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-past" data-date="2020-03-05"><div><div class="fc-day-number">5</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-past" data-date="2020-03-06"><div><div class="fc-day-number">6</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-past fc-last" data-date="2020-03-07"><div><div class="fc-day-number">7</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-past fc-first" data-date="2020-03-08"><div style="min-height: 45px;"><div class="fc-day-number">8</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-past" data-date="2020-03-09"><div><div class="fc-day-number">9</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-past" data-date="2020-03-10"><div><div class="fc-day-number">10</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-past" data-date="2020-03-11"><div><div class="fc-day-number">11</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-past" data-date="2020-03-12"><div><div class="fc-day-number">12</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-past" data-date="2020-03-13"><div><div class="fc-day-number">13</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-past fc-last" data-date="2020-03-14"><div><div class="fc-day-number">14</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-past fc-first" data-date="2020-03-15"><div style="min-height: 45px;"><div class="fc-day-number">15</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-past" data-date="2020-03-16"><div><div class="fc-day-number">16</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-past" data-date="2020-03-17"><div><div class="fc-day-number">17</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-past" data-date="2020-03-18"><div><div class="fc-day-number">18</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-past" data-date="2020-03-19"><div><div class="fc-day-number">19</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-past" data-date="2020-03-20"><div><div class="fc-day-number">20</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-past fc-last" data-date="2020-03-21"><div><div class="fc-day-number">21</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-past fc-first" data-date="2020-03-22"><div style="min-height: 45px;"><div class="fc-day-number">22</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-past" data-date="2020-03-23"><div><div class="fc-day-number">23</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-past" data-date="2020-03-24"><div><div class="fc-day-number">24</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-past" data-date="2020-03-25"><div><div class="fc-day-number">25</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-past" data-date="2020-03-26"><div><div class="fc-day-number">26</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-past" data-date="2020-03-27"><div><div class="fc-day-number">27</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-past fc-last" data-date="2020-03-28"><div><div class="fc-day-number">28</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-past fc-first" data-date="2020-03-29"><div style="min-height: 45px;"><div class="fc-day-number">29</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-past" data-date="2020-03-30"><div><div class="fc-day-number">30</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-today fc-state-highlight" data-date="2020-03-31"><div><div class="fc-day-number">31</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-other-month fc-future" data-date="2020-04-01"><div><div class="fc-day-number">1</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-other-month fc-future" data-date="2020-04-02"><div><div class="fc-day-number">2</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-other-month fc-future" data-date="2020-04-03"><div><div class="fc-day-number">3</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-other-month fc-future fc-last" data-date="2020-04-04"><div><div class="fc-day-number">4</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td></tr><tr class="fc-week fc-last"><td class="fc-day fc-sun fc-widget-content fc-other-month fc-future fc-first" data-date="2020-04-05"><div style="min-height: 44px;"><div class="fc-day-number">5</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-other-month fc-future" data-date="2020-04-06"><div><div class="fc-day-number">6</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-other-month fc-future" data-date="2020-04-07"><div><div class="fc-day-number">7</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-other-month fc-future" data-date="2020-04-08"><div><div class="fc-day-number">8</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-other-month fc-future" data-date="2020-04-09"><div><div class="fc-day-number">9</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-other-month fc-future" data-date="2020-04-10"><div><div class="fc-day-number">10</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-other-month fc-future fc-last" data-date="2020-04-11"><div><div class="fc-day-number">11</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td></tr></tbody></table></div></div>
                      </div>
                         </center>



<hr>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Gincanas-JMF 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pronto para partir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para encerrar sua sessão atual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="index.php">Sair</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
