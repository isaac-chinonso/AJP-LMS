<!DOCTYPE html>
<html lang="en">
<!-- BEGIN: Head -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <link href="dist/images/logo.svg" rel="shortcut icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Ajayi Polytechnic Learning Management System" />
    <meta name="keywords" content="Learning Management System" />
    <meta name="author" content="Dcode Arena" />
    <title>@yield('title')</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="assets/css/app.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">
@yield('content')
 <!-- BEGIN: JS Assets-->
 <script src="assets/js/app.js"></script>
         <!-- END: JS Assets-->
     </body>
 </html>