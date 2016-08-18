
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

<!--         <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
 -->        
        <script type="text/javascript" src="/js/jquery-1.12.0.min.js"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <link rel="stylesheet" href="/css/bootstrap.css" />
        <link rel="stylesheet" href="/css/style.css">
        
        
        
        
        @yield ('header')

    </head> 
    <body>
     <span> <h3> My first laravel project </h3> </span>
    
    	@yield ('content')


    </body>

  </html>