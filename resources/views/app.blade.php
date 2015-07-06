<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="iBox design studio" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
    <title>Viviendas Americanas El Ombú | Empresa Constructora S.R.L. | Una raza que crece fuerte</title>

    <!-- Stylesheets ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<body class="no-transition stretched">

<!-- Content -->
@yield('mainContent')
<!-- content end -->

<!-- Go To Top ============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- Footer Scripts ============================================= -->
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/plugins.js"></script>
<script type="text/javascript" src="/js/functions.js"></script>
@yield('scripts')

</body>
</html>