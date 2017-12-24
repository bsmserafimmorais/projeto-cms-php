<h1>Menus</h1>
<a href="<?php echo BASE;?>painel/menu_add">Adicionar Menu</a><br/><br/>
<table border="0" width="100%">
	<tr>
		<th align="left">ID</th>
		<th align="left">Nome</th>
		<th align="left">Url</th>
		<th align="left">AÇÕES</th>
	</tr>

	<?php foreach($menus as $menu): ?>
		<tr>
			<td><?php echo utf8_encode($menu['id']);?></td>
			<td><?php echo utf8_encode($menu['nome']);?></td>
			<td><?php echo utf8_encode($menu['url']);?></td>
			<td>
				<a href="<?php echo BASE;?>painel/menu_edit/<?php echo $menu['id']?>">Editar</a>-
				<a href="<?php echo BASE;?>painel/menu_del/<?php echo $menu['id']?>">Excluir</a><br/><br/>

			</td>
		</tr>
	<?php endforeach;?>
</table>