<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        </head>
    <body>
        <div id="app">
       
        <App></App>
        </div>
         
<script>
 window.Laravel = <?php echo json_encode([
   'csrfToken' => csrf_token(),
   ]); ?>

 if(window.location.href.indexOf("?") > -1) {    window.history.pushState("object or string", "Title", "/" );

}
</script>
  <script src="{{asset('js/app.js')}}"></script>  

    </body>
</html>
