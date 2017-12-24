
<div class="home_banner" style="background-image:url('<?php echo BASE.'assets/images/'.$this->config['home_banner'];?>')	 ">	
</div>
<div class="home_banner_txt"><?php echo $this->config['home_welcome'];?></div>

<div class="home_depo">
	<h3>Depoimentos de clientes</h3>
	<?php foreach ($depoimentos as $depItem): ?>

		<strong><?php echo $depItem['nome'];?></strong><br/>
		<?php echo utf8_encode($depItem['texto']);?>
		<hr/>
	<?php endforeach; ?>
</div>
<div class="home_cta">
	Deseja Conferir nossos serviços?<br/>
	<a href="<?php echo BASE.'servicos';?>"><div>Confira nossos serviços</div></a>
</div>