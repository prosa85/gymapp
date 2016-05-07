<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="20">
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet">



</head>
<body>

	<div class="container-fluid">

		<div class="row">
			<div class="bg-primary">
				<h1 class="text-center">Home</h1>
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12 ">
				<div class="panel panel-default">
				  <div class="panel-body">
					Panel content
				  </div>
				  <div class="panel-footer">User stats</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12 ">
				
				<div class="panel panel-default">
					<div class="row">
						<div class="panel-heading"><i class="glyphicon glyphicon-user"></i> Profile</div>
					<div class="col-lg-4 col-md-4 col-xs-6 ">
							<div class="panel-body">
								<div class="thumbnail"> 
									<img class="img-responsive img-thumbnail" src='/{{$path}}'> 
									<div class="text-center">{{$user->name}}</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-xs-6 ">
							<div class="panel-body text-left">
								<div class=""> 
								User data
								</div>
							</div>
						</div>
						
					</div>
					<div class="text-right"><button class="btn btn-success"><span class="glyphicon glyphicon-fire"></span> Track Workout</button></div>
				</div>
				
			</div>
			
			<div class="col-lg-6 col-md-6 col-xs-12 ">
				<div class="panel panel-default">
				<div class="panel-heading"><span class="glyphicon glyphicon-dashboard"></span> Workout History</div>
				  <div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-condensed table-hover">
								<thead><tr> <td>Muscle</td> <td>Exercises</td> <td>Date</td> </tr></thead>
								<tbody>
								<tr> <td>Bla1</td> <td>Bla1</td> <td>Bla1</td> </tr>
								<tr> <td>Bla1</td> <td>Bla1</td> <td>Bla1</td> </tr>
								<tr> <td>Bla1</td> <td>Bla1</td> <td>Bla1</td> </tr>
								</tbody>
							</table>
						</div>
				  </div>
				  
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>