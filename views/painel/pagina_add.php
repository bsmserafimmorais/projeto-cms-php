<h1>Adicionar Página</h1>

<form method="POST">

	Titulo da página:<br/><br/>
	<input type="text" name="titulo" "><br/><br/>
	Url da pagina:<br/><br/>
	<input type="text" name="url" /><br/><br/>
	Criar Menu automaticamente<br/>
	<input type="checkbox" name="add_menu" value="sim"/><br/><br/>

	Corpo da página:<br/><br/>
	<textarea name="corpo" id="corpo"></textarea><br/>
	<input type="submit" value="Salvar">
</form>

<script type="text/javascript" src="<?php echo BASE;?>ckeditor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	window.onload = function(){
		CKEDITOR.replace("corpo");
	}
</script>