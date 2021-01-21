<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>@yield('title') | Rencana Pertumbuhan Hijau Jambi</title>
  <link rel = "icon" href = "images/favicon.ico" type = "image/x-icon"> 
  <!-- CSS  -->
  <!--link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"-->
  <link href="{{ url('/assets/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ url('/assets/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  {{-- <script src="{{ url('/assets/js/collapsible.js') }}"></script> --}}
  <style type="text/css">
    html {
      font-family: GillSans, Calibri, Trebuchet, sans-serif;
    }  
  </style>

  
  <style type="text/css">
    main, header { padding-left: 300px; }
    @media only screen and (max-width : 992px) {
      header, main { padding-left: 0; }
    }

    /*.section.content { padding-left: 25px; padding-right: 25px; }*/
    .section.content { padding: 0 25px 1rem }
    .input-field label { font-weight: bold;  }
    
    .content img { margin: 3px 10px; }
    img.border { border: 1px solid grey; }
    .content-heading { background-color: #8bc34a; color: #FFF; font-size: 1.64rem; text-align: right; padding: 5px 15px; /*text-transform: capitalize;*/ }
    .content-box { margin-bottom: 15px; background: #ddd }

    td.left-align { text-align: left !important; }
    td.center-align { text-align: center !important; }
    td.text-indent { text-indent: 25px; }

    /* Custom CSS for left menu */
    /*.userView.header { padding-bottom: 32px; margin-bottom: 0px; box-shadow: 0 0 5px 0; }*/
    .userView.header { padding: 6px 16px 8px 16px; margin-bottom: 0px; box-shadow: 0 2px 3px 0 #999; }
    .banner-color { color:#000000; }
    .banner-header { color: #fff; }
    h3.banner-header { margin: 0 16px; padding: 15px 0 0px 0; }
    h3.banner-header a { font-size: 2.92rem; line-height: 110%; }

    .collapsible-body li a { font-weight: normal; line-height: inherit; height: inherit; font-size: 12px; }
    .collapsible-body li { line-height: 32px; height: 32px; }
    .side-nav .divider { margin: 0 }
    .side-nav li a { padding-left: 16px; }
    .side-nav.fixed .collapsible-header, .side-nav.fixed .collapsible-header.active { background-color: #fff; }

    nav ul a { padding: 0 10px; }

    ul.standard-list { list-style-type: disc; padding: 0; padding-left: 40px; }
    ul.standard-list li { list-style-type: disc; }

    /*div.submenu li a { padding-left: 54px !important; font-style: italic; font-size: 12px; border-bottom: 1px solid #f1f1f1; }*/
    div.submenu li a { padding-left: 54px !important; }
    div.submenu li a::before { content: "»"; margin-right: 10px; }
    /*div.submenu li:first-child { border-top: 1px solid #f1f1f1; }*/

    .chart-container .card-content { text-align: center; background-color: transparent; box-shadow: none; font-size: 24px; margin: 0; }

  </style>

</head>
<body>

  <!-- Homepage Banner -->
 
  <!-- Content Left menu -->
  
  @yield('header')
 
  <!-- Main content -->
  
  @yield('main')


  <!-- Main Scripts -->
  <script src="{{ url('/assets/js/jquery-2.1.1.min.js') }}"></script>
  <script src="{{ url('/assets/js/materialize.js') }}"></script>
  <script src="{{ url('/assets/js/init.js') }}"></script>
  
  <!-- Custom Scripts -->
  <div class="hiddendiv common"></div>

  </body>
</html>
