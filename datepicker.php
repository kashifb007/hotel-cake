<html lang="en" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Angular Material style sheet -->
<!--  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">-->
  <link rel='stylesheet prefetch' href='https://cdn.gitcdn.link/cdn/angular/bower-material/v1.1.3/angular-material.css'>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div id="slides">
	<div class="slides-container">
        <img src="images/hotel1.jpg" alt="">
        <img src="images/hotel2.jpg" alt="">
        <img src="images/hotel3.jpg" alt="">
    </div>
</div>
 <div id="search-availability" ng-app="MyApp" ng-controller="AppCtrl">
  <md-content>
  <div id="check-in" class="col-xs-12 col-sm-2">
    <md-datepicker ng-model="checkInDate" md-placeholder="Check In Date" md-open-on-focus=""></md-datepicker>
    </div>
  <div id="check-in" class="col-xs-12 col-sm-2">
    <md-datepicker ng-model="checkOutDate" md-placeholder="Check Out Date" md-open-on-focus=""></md-datepicker>
    </div>    
  </md-content>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
<script src="js/angular-material.js"></script>
<script src='js/assets-cache.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js'></script>
<script>
var language = window.navigator.userLanguage || window.navigator.language;

angular.module('MyApp')
    .controller('AppCtrl', function($scope) {})

.config(function($mdDateLocaleProvider) {
	// Can change week display to start on Monday.
  $mdDateLocaleProvider.firstDayOfWeek = 1;
  
if(language=="en-GB") //if GB date format
{
  $mdDateLocaleProvider.formatDate = function(date) {
    return date ? moment(date).format('DD/MM/YYYY') : '';
  };
  
  $mdDateLocaleProvider.parseDate = function(dateString) {
    var m = moment(dateString, 'DD/MM/YYYY', true);
    return m.isValid() ? m.toDate() : new Date(NaN);
  };
}
});
</script>
  <script src="js/jquery.superslides.min.js"></script>
<script>
	$('#slides').superslides({
      animation: 'fade',
	  play: 5000
    });  
</script>
</body>
</html>

<!--
Copyright 2016 Google Inc. All Rights Reserved. 
Use of this source code is governed by an MIT-style license that can be in foundin the LICENSE file at http://material.angularjs.org/license.
-->