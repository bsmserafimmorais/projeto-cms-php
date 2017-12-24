<h1>Editar Página</h1>

<form method="POST">

	Titulo da página:<br/><br/>
	<input type="text" name="titulo" value="<?php echo utf8_encode($pagina['titulo']);?>"><br/><br/>
	Url da pagina:<br/><br/>
	<input type="text" name="url" value = "<?php echo utf8_encode($pagina['url']);?>"/><br/><br/>

	Corpo da página:<br/><br/>
	<textarea name="corpo" id="corpo"><?php echo utf8_encode($pagina['corpo']);?></textarea><br/>
	<input type="submit" value="Salvar">
</form>

<script type="text/javascript" src="<?php echo BASE;?>ckeditor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	window.onload = function(){
		CKEDITOR.replace("corpo");
	}
</script>