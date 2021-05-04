<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>@yield('title') - {{ config('app.name') }}</title>

        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" id="css-main" href="css/oneui.min.css">
    </head>

    <body>

        <!--START Page Container-->
            <div id="page-container">
                @yield('content')
            </div>
        <!-- END Page Container -->

        <script src="js/oneui.core.min.js"></script>
        <script src="js/oneui.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="js/pages/op_auth_signin.min.js"></script>
    </body>
</html>
