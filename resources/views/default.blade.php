<!DOCTYPE html>
<html>
    <head>
        <title>La Passerelle</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato|Raleway:100,400" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="{{asset('js/jquery.js')}}"></script>
        <link rel="stylesheet" href="{{asset('bower/angular-material/angular-material.min.css')}}">

        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body ng-app="PumpkinApp" layout="column" ng-cloak=""> 

        @yield('content')

        <!-- Angularjs libraries -->
        <script src="bower/angular/angular.min.js"></script>

        <!-- Angular Material Design Libraries -->
        
        <script src="bower/angular-animate/angular-animate.min.js"></script>
        <script src="bower/angular-aria/angular-aria.min.js"></script>
        <script src="bower/angular-messages/angular-messages.min.js"></script>
        <script src="bower/angular-material/angular-material.min.js"></script>
        <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-route.min.js'></script>
        <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-114/svg-assets-cache.js'></script>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
