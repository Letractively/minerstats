<h1><?php echo ACTIVATION; ?></h1>

<div class="info">
	<?php echo ACTIVATION_WARNING; ?>	
</div>

<div class="info error hidden"></div>
<div class="info-label hidden" name="activation">Activation r&eacute;ussie, vous pouvez vous connecter.</div>


<form class="signup">
	
	<label>Adresse e-mail</label>
	<input type="text" name="email" class="textbox">
	
	<label>Minecraft ID</label>
	<input type="text" name="playerID" class="textbox" title="<?php echo ACTIVATION_CASE_TOOLTIP; ?>">
	
	<label>Mot de passe</label>
	<input type="password" name="password1" class="textbox" title="<?php echo ACTIVATION_PASSWORD_TOOLTIP; ?>">
	
	<label>Confirmez le mot de passe</label>
	<input type="password" name="password2" class="textbox">
	
	<br />
	
	<input type="button" name="activation" value="<?php echo ACTIVATION_SUBMIT; ?>" class="submit">
	
</form>