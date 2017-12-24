<h1>Páginas</h1>
<a href="<?php echo BASE?>painel/pagina_add">Adicionar página</a><br/><br/>
<table border="0" width="100%">
	<tr>
		<th align="left">ID</th>
		<th align="left">TITULO</th>
		<th align="left">URL</th>
		<th align="left">AÇÕES</th>
	</tr>

	<?php foreach($paginas as $pagina): ?>
		<tr>
			<td><?php echo utf8_encode($pagina['id']);?></td>
			<td><?php echo utf8_encode($pagina['titulo']);?></td>
			<td><?php echo utf8_encode($pagina['url']);?></td>
			<td>
				<a href="<?php echo BASE?>painel/pagina_edit/<?php echo $pagina['id']?>">Editar</a>-
				<a href="<?php echo BASE?>painel/pagina_del/<?php echo $pagina['id']?>">Deletar</a>
			</td>
		</tr>
	<?php endforeach;?>
</table>