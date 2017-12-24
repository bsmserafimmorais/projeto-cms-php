<h1>Editar Menu</h1>

<form method="POST">
	Nome do menu:<br/><br/>
	<input type="text" name="nome" value="<?php echo utf8_encode($menu['nome']);?>"><br/><br/>
	Url do menu:<br/><br/>
	<input type="text" name="url" value = "<?php echo $menu['url'];?>"/><br/><br/>
	<input type="submit" value="Editar">
</form>