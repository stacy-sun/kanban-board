<?php require "login/loginheader.php"; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kanban Board</title>
  <!-- reset stylesheet -->
  <link rel="stylesheet" href="css/reset.css">
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
 <!--  jquery ui -->
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- linear icon -->
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	 <!-- Fontawesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
 <!--  bootstrap -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <!-- local stylesheet -->
  <link rel="stylesheet" href="css/global.css">


</head>
<body>

	<nav class="navbar navbar-default">
		<a class="navbar-brand" href="index.php"><img src="img/logo.svg">KANBAN BOARD</a>
		<a href="login/logout.php" class="btn btn-primary">Log out</a>		
	  </nav>


<div class="page-wrapper">

	<div class="main-container">
		<div  class="project-name">
			<h1 contenteditable="true">Project Name</h1>
			<!-- <button type="button" class="btn btn-primary add-column">Add New Column</button> -->

		</div>	

		
			<div class="row container">
				<div class="to-do-panel col-sm-4 col-lg-4 column">
					<h2>To Do</h2>
					<span class="lnr lnr-plus-circle button-toggle plus-sign"></span>
					<!-- the else condition is not working  -->
					<!-- <div class="alert alert-success">
							<strong>Success!</strong> Indicates a successful or positive action.
					</div> -->
					<form class="new-item-panel">
							<input placeholder="Add item" class="input-title form-control">
							<textarea placeholder="Add content" class="textarea-content form-control" rows="5"></textarea>
							<!-- <input class="input-img" type="file" name="pic" accept="image/*"> -->
							<button type="button" class="btn btn-primary add-item float-right">Add</button>
					</form>

					<ul id="sortable1" class="connectedSortable">
						<li class="ui-state-default list-item">
							<!-- <img src="img/pic-1.jpeg" alt="projects" class="header-img"> -->
							<div class="item-container">
								<div class="color-circle"></div>
								<h3>Illustration</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Felis imperdiet proin fermentum leo vel. Pellentesque diam volutpat commodo sed egestas.  </p>
								<!-- <span class="ui-icon ui-icon-circle-minus"></span> -->
								<hr>
									<img src="img/profile-img.png" class="user-img" alt="profile photo">
									<span class="lnr lnr-trash"></span>
							</div>
						</li>
					</ul>
				</div> 

				<div class="doing-panel col-sm-4 col-lg-4 column">
					<h2>In Progress</h2>
					<span class="lnr lnr-plus-circle button-toggle plus-sign"></span>
					
					<form class="new-item-panel">
							<input placeholder="Add item" class="input-title form-control">
							<textarea placeholder="Add content" class="textarea-content form-control" rows="5"></textarea>
							<button type="button" class="btn btn-primary add-item float-right">Add</button>
					</form>

					<ul id="sortable2" class="connectedSortable">
							<li class="ui-state-default list-item">
									<!-- <img src="img/pic-2.jpeg" alt="projects" class="header-img"> -->
									<div class="item-container">
										<div class="color-circle"></div>
										<h3>Logo Design</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Felis imperdiet proin fermentum leo vel. Pellentesque diam volutpat commodo sed egestas. </p>
										<!-- <span class="ui-icon ui-icon-circle-minus"></span> -->
										<hr>
											<img src="img/profile-img.png" class="user-img" alt="profile photo">
											<span class="lnr lnr-trash"></span>
									</div>
									
								</li>
					</ul>
				</div>


				<div class="done-panel col-sm-4 col-lg-4 column">
					<h2>Complete</h2>
					<span class="lnr lnr-plus-circle button-toggle plus-sign"></span>
					
					<form class="new-item-panel">
							<input placeholder="Add item" class="input-title form-control">
							<textarea placeholder="Add content" class="textarea-content form-control" rows="5"></textarea>
							<button type="button" class="btn btn-primary add-item float-right">Add</button>
					</form>

					<ul id="sortable3" class="connectedSortable">
							<li class="ui-state-default list-item">
									<!-- <img src="img/pic-3.jpeg" alt="projects" class="header-img"> -->
									<div class="item-container">
										<div class="color-circle"></div>
										<h3>Poster Design</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Felis imperdiet proin fermentum leo vel. Pellentesque diam volutpat commodo sed egestas. </p>
										<!-- <span class="ui-icon ui-icon-circle-minus"></span> -->
										<hr>
											<img src="img/profile-img.png" class="user-img" alt="profile photo">
											<span class="lnr lnr-trash"></span>
									</div>
								</li>
					</ul>
				</div>

			</div>
		</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- local javascript -->
<script src="js/javascript.js"></script>
 
</body>
</html>