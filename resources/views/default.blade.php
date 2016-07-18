<!DOCTYPE html>
<html lang="en" ng-app="StarterApp">
  <head>
  <link href="https://fonts.googleapis.com/css?family=Lato|Raleway:100,400" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
  </head>
  <body layout="row" ng-controller="AppCtrl" ng-cloak="">

        @yield('content')

        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular-animate.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular-aria.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.js"></script>
        <script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script> 

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
