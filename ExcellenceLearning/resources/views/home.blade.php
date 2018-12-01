@include('homecontent')
@include('footer')
@include('bar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="BlackIT">
    <meta name="description" content="ExcellenceLearning">
    <meta name="page-description" content="Home">
    <meta name="mobile-web-app-capable" content="yes">
    <title>Excellence Shcool</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
    <link rel="stylesheet" href="css/excellencelearning.css">
    <link rel="shortchut-icon" href="">
</head>
<body>
    @yield('bar-content')

    @yield('home-content')

    @yield('footer-content')
</body>
</html>