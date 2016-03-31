<?php
$pageTitle ="admin";
include('inc/header.php');

?>
<body>


<div id="wrapper" ng-app="mainApp">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Start Bootstrap
                </a>
            </li>
            <li>
                <a href="#">Dashboard</a>
            </li>
            <li>
                <a href="#">Add Appointment</a>
            </li>
            <li>
                <a href="#">Update/Cancel</a>
            </li>
            <li>
                <a href="<?php echo "admin.php#!/breeds"?>">Dog Breeds</a>
            </li>
            <li>
                <a href=<?php echo "admin.php#!/list"?>>Customer List</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div ng-view>

    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Menu  Script -->
<script src="https://rawgit.com/angular/bower-angular/master/angular.min.js"></script>
<script src="http://code.angularjs.org/1.3.15/angular-route.js"></script>
   <script> angular.module('mainApp', ["ngRoute"]);
    angular.module('mainApp')
        .controller('routeCtrl', function($routeProvider){
        })
        .config(function($routeProvider){
            $routeProvider
            // route to different templates
                .when('/', {
                    templateUrl: 'pages/all.php',
                })
                .when('/list', {
                    templateUrl: 'pages/list.php',
                })
                .when('/breeds', {
                    templateUrl: 'pages/breeds.html',

                })
                .otherwise('/');
        })
</script>



</body>

</html>
