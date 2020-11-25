<div class="container">
	<form action="<?php echo base_url(); ?>/Accounts/create" method="post">
		<div class="form-group">
   	 		<label for="name">Name:</label>
    		<input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
  		</div>
  		<div class="form-group">
   	 		<label for="cmp">Company:</label>
    		<input type="text" class="form-control" placeholder="Enter company name" id="cmp" name="cmp">
  		</div>
  		<div class="form-group">
    		<label for="phone">Phone Number:</label>
    		<input type="number" class="form-control" placeholder="Enter phone number" id="phone" name="phone">
  		</div>
  		<div class="form-group">
    		<label for="email">Email:</label>
    		<input type="email" class="form-control" placeholder="Enter Email" id="email" name="email">
  		</div>
  		
  		<button type="submit" class="btn btn-primary" id="register" name="register">Add Contact</button>
	</form>
</div>