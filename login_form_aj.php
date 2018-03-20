<?php include("../Includes/eg_header.php");
 ?>

	<body>
		<div class="container-fluid">

		<header class = "row head">
			<div id = "head1">
				<h1>e-Get</h1>
				<img src = "../img/logo_ut2j.png"/>
			</div>
			<div id = "head2">
				<h3>Login</h3>
			</div>
		</header>
		
		<div class = "row" id = "milieu">
			
			<form class="form-horizontal" action="/action_page.php">
				<div class="form-group">
					<label class="control-label col-sm-3" for="email">Identifiant:</label>
					<div class="col-sm-6 eltR1">
						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="pwd">Mot de passe:</label>
					<div class="col-sm-6 eltR1">          
						<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
					</div>
				</div>
				<div class="form-group" id = "check">        
					<div class="col-sm-6">
						<div class="checkbox">
							<label class="control-label">
								<input type="checkbox" name="remember"> Se souvenir de moi
							</label>
							<a href = "#"><p>Mot de passe oublié?</p></a>
						</div>
					</div>
				</div>
				
				<div class="form-group">        
					<button type="submit" class="btn btn-warning">Se connecter</button> 
				</div>
			</form>
		</div>

		<!-- Footer : mentions légales et crédits -->
			<?php include("eg_footer.php") ?>