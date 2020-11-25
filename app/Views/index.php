<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Contact System</h1>
    <p class="lead">This is a system for storing contact details.</p>
  </div>
</div>

<div class="container">
	<form action="<?php echo base_url(); ?>/Accounts/login" method="post">
  		<div class="form-group">
   	 		<label for="email">Email address:</label>
    		<input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
  		</div>
  		<div class="form-group">
    		<label for="pwd">Password:</label>
    		<input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd">
  		</div>
  		<div class="form-group">
    		<label class="">
      		No account yet? <a href="register">Click Here</a> to Register
    		</label>
  		</div>
  		
  		<button type="submit" class="btn btn-primary">Login</button>
	</form>
</div>