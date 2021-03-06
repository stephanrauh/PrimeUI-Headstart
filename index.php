<html ng-app>
 <head>
    <title>PrimeUI + PHP+ Angular</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript" src="primeui-1.0/development/primeui-1.0.js"></script>
			
	<link href="primeui-1.0/development/primeui-1.0.css" rel="stylesheet">
	<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
	<link href="primeui-1.0/themes/aristo/theme.css" rel="stylesheet">
	<link href="sh.css" rel="stylesheet">
	<link href="all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
    <script src="angularComments.js"></script>
  </head>
<body style="margin:20px">
   <h2>PrimeUI + AngularJS + PHP</h2>
   <p>This is an example inspired by the comment forms one often finds in blogs. </p>
   <p>Press the button below to show open the comment dialog.</p>
  <button id="btn-show" type="button">leave a comment</button>
  <div id="dlg" title="Comment" ng-controller="commentControl">
    <p>
      Your name (appears above the comment):<br> 
      <input id="commentatorsNameID" type="text" ng-model="yourName" placeholder="Anonymous" />
    </p>
    <p>
      Your website: <br>
      <input id="commentatorsWebSiteID" type="text" ng-model="website" placeholder="advertise your website here"/>
    </p>
    <p>
      Your comment:<br>
      <textarea id="commentID" type="text" ng-model="comment" placeholder="feel free to leave your comment here"></textarea>
      <br> <span id="restZeichenID">dd</span>
    </p>
    <div style="display:{{previewVisible()}}">
    <p>Preview:</p>
    {{commentator()}} said:<br>
    {{commentPreview()}}
    </div>
  </div>
</body>
</html>