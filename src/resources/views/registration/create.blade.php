
<h2>Register</h2>
<form action = "/register" method = "post">
	{{ csrf_field() }}
	<div class='form-group'>
		<label for='name'> Name: </label>
		<input type = "text" name = 'form-control' id='name' name='name'>
	</div>
	<div class='form-group'>
		<label for='email'> Email: </label>
		<input type = 'email' name = "form-control" id='email' name='email'>
	</div>
	
	<div class='form-group'>
		<label for='password'> Password: </label>
		<input type = 'password' name = 'form-control' id='password' name='password'>
	</div>
	
	<div class='form-group'>
		<button style='curosor:pointer' type='submit' class='btn btn-primary'> Submit </button>
	</div>
</form>
