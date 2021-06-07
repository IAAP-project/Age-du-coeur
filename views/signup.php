<?php
// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php") {
	header("Location:../index.php?view=signup");
	die("");
}


?>
<div class="box-sign">
	<p class="titleForm">Sign Up</p>
	<form action="action_signup.php" method="POST">
		<p>First Name*</p>
		<input required type="text" name="firstNameSignup" maxlength="100" />

		<p>Last Name*</p>
		<input required type="text" name="lastNameSignup" maxlength="100" />

		<p>Date of Birthday*</p>
		<input required type="date" name="dateSignup" maxlength="100" />

		<p>E-mail*</p>
		<input required type="text" name="emailSignup" maxlength="100" />

		<p>Password*</p>
		<input required type="password" name="passwordSignup" maxlength="100" />

		<p>Sexe*</p>
		<div>
			<div>
				<input required type="radio" name="gender" value="F">
				<label for="F">F</label>
				<input required type="radio" name="gender" value="M">
				<label for="M">M</label></br>
			</div>
		</div>

		<input type="submit" value="Sign Up" onclick="" />
		<input type="button" value="Back" onclick="goPageSignIn();" />
	</form>
</div>