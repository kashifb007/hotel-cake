<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>validation</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>

<body ng-app="">
<p>Try writing in the input field:</p>

<form name="myForm">
<input type="number" min="0" max="99" name="myInput" ng-model="myInput" required>
</form>

<p>The input's valid state is:</p>
<h1>{{myForm.myInput.$valid}}</h1>
</body>
</html>