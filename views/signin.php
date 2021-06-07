<?php
// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php") {
	header("Location:../index.php?view=signin");
	die("");
}

?>
<div class="box-sign">

	<p class="titleForm">Sign In</p>
	<form action="action_signin.php" method="POST">
		<p>E-mail*</p>
		<input type="text" name="email" maxlength="100" />

		<p>Password*</p>
		<input type="password" name="password" maxlength="100" />

		<input type="submit" value="Sign In" onclick="" />
		<input type="button" value="Sign Up" onclick="goPageSignUp()" />
	</form>
</div>