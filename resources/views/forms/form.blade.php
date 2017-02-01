<html>
<head>
	<title>Laravel</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

   <div class="col-lg-3">
     
   <br><br>

		<form method="POST" action="get">
		   <div class="form-group">
		   	  <label for="usr" class="control-label">Name:</label>
		      <input type="text" class="form-control" name="username" placeholder="Enter Username" id="usr">
		   </div>

		   <div class="form-group">
		      <input type="submit" class="btn btn-default" name="submit" value="submit">
		   </div>

		   <input type="hidden" name="_token" value="{{ Session::token() }}">
		</form>

   </div>

</body>
</html>





