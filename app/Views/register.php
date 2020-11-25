

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Contact System</h1>
    <p class="lead">This is a system for storing contact details.</p>
  </div>
</div>

<div class="container">
	<form action="<?php echo base_url(); ?>/Accounts/create" method="post">
		<div class="form-group">
   	 		<label for="name">Name:</label>
    		<input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
  		</div>
  		<div class="form-group">
   	 		<label for="email">Email address:</label>
    		<input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
  		</div>
  		<div class="form-group">
    		<label for="pwd">Password:</label>
    		<input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd">
  		</div>
  		<div class="form-group">
    		<label for="cpwd">Confirm Password:</label>
    		<input type="password" class="form-control" placeholder="Confirm password" id="cpwd" name="cpwd">
  		</div>
  		
  		<a href="login"><button type="button" class="btn btn-primary">Back</button></a>
  		<button type="submit" class="btn btn-success" id="register" name="register">Register</button>
	</form>
</div>

