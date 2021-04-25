<div class="container my-6">

	<form action="<?=base_url()?>process_login" method="get">

		<div class="field">
			<label class="label">Email</label>
			<div class="control has-icons-left has-icons-right">
				<input class="input" type="email" placeholder="Email input" value="richard@gmail.com" name="email">
				<span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
				<span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
			</div>
<!--			<p class="help is-danger">This email is invalid</p>-->
		</div>


		<div class="field">
			<label class="label">Password</label>
			<div class="control has-icons-left has-icons-right">
				<input class="input" type="password" placeholder="Password input" name="password" value="123456">
				<span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
				<span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
			</div>
<!--			<p class="help is-danger">The password is invalid</p>-->
		</div>


		<div class="field is-grouped">
			<div class="control">
				<input type="submit" class="button is-link">
			</div>
		</div>

	</form>

</div>
