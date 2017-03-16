<html lang="en" >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet prefetch' href='https://cdn.gitcdn.link/cdn/angular/bower-material/v1.1.3/angular-material.css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">      
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    
</head>
<body ng-app="MyApp">
<div id="slides">
	<div class="slides-container">
        <img src="images/hotel1.jpg" alt="">
        <img src="images/hotel2.jpg" alt="">
        <img src="images/hotel3.jpg" alt="">
    </div>
</div>
<div id="mainContainer">
	<div class="container">
    	<div class="row">        	
            <div class="col-sm-12 main-heading">
            	<h1>Welcome to Hotel Booking (beta)</h1>
                <h2>Online Booking</h2>
            </div>
        </div>
        <div class="row">       
	        <div id="search-availability">
	            <form id="search" name="bookingForm" ng-controller="AppCtrl">                
                    <md-content>
                        <div id="check-in" class="col-xs-12 col-sm-2">
                            <md-datepicker ng-model="checkInDate" md-placeholder="Check In Date" md-open-on-focus="" name="checkInDate" required></md-datepicker>
                        </div>
                        <div id="check-out" class="col-xs-12 col-sm-2">
                            <md-datepicker ng-model="checkOutDate" md-placeholder="Check Out Date" md-open-on-focus="" name="checkOutDate" required></md-datepicker>
                        </div>        
                        <div id="rooms" class="col-xs-12 col-sm-2 has-feedback">
                            <input class="form-control" placeholder="Rooms" name="rooms" ng-model="rooms" type="number" min="1" max="50" required/>
                            <i class="glyphicon glyphicon-bed form-control-feedback"></i>  
                        </div>
                        <div id="adults" class="col-xs-12 col-sm-2 has-feedback">
                            <input class="form-control" placeholder="Adults (18+)" name="adults" ng-model="adults" type="number" min="1" max="50" required/>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>        
                        <div id="children" class="col-xs-12 col-sm-2 has-feedback">
                            <input class="form-control" placeholder="Children (3+)" name="children" ng-model="children" type="number" min="0" max="50"/>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div id="infants" class="col-xs-12 col-sm-2 has-feedback">
                            <input class="form-control" placeholder="Infants" name="infants" ng-model="infants" type="number" min="0" max="50"/>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div> 
                        <div class="col-xs-12 col-sm-12">
                        	<p class="error" ng-show="bookingForm.checkInDate.$invalid && !bookingForm.checkInDate.$pristine">Please enter a valid Check In date.</p>
                        	<p class="error" ng-show="bookingForm.checkOutDate.$invalid && !bookingForm.checkOutDate.$pristine">Please enter a valid Check Out date.</p>                            
                        	<p class="error" ng-show="bookingForm.rooms.$invalid && !bookingForm.rooms.$pristine">Please enter a valid Number of rooms (1-50).</p>
                        	<p class="error" ng-show="bookingForm.adults.$invalid && !bookingForm.adults.$pristine">Please enter a valid number of adults (1-50).</p>                            
                        	<p class="error" ng-show="bookingForm.children.$invalid && !bookingForm.children.$pristine">Please enter a valid Number of children (0-50).</p>
                        	<p class="error" ng-show="bookingForm.infants.$invalid && !bookingForm.infants.$pristine">Please enter a valid number of infants (0-50).</p>                            
                    </div>  
                    </md-content>      
                    <div class="col-xs-12 col-sm-12">
                    	<div id="search-button">
		                    <button type="submit" class="btn btn-primary" ng-disabled="bookingForm.$invalid">Search For Rooms</button>                              
                        </div>
                    </div>                         
                </form>          
            </div>       	
        </div>
    </div>
</div>      
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