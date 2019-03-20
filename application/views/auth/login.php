<h1 class="h2">Welcome Back &#x1f44b;</h1>
<p class="lead">Log in to your account to continue</p>

<div id="infoMessage"><?php echo $message;?></div>

<form action="login" method="post">
	<div class="form-group">
		<input class="form-control" name="identity" type="email" placeholder="Email Address" />
	</div>
	<div class="form-group">
		<input class="form-control" type="password" placeholder="Password" name="password" />
		<div class="text-right">
			<small><a href="#">Forgot password?</a>
			</small>
		</div>
	</div>
	<button class="btn btn-lg btn-block btn-primary" role="button" type="submit">
		Log in
	</button>
	<small>Don't have an account yet? <a href="register">Create one</a>
	</small>
</form>