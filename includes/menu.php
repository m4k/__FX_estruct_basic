<script>
    function ok() {
        alert("url <?php echo $_SERVER['REMOTE_ADDR'];?>");   
    };
</script> 
<nav>
	<ul role="navigation" class="hidden">
		<li><a href="<?php echo URL_BASE; ?>">home</a></li>
		<li><a href="<?php echo URL_BASE; ?>sobre">sobre</a></li>
		<li><a href="<?php echo URL_BASE; ?>para-voce">para você</a></li>
        <li><a href="<?php echo URL_BASE; ?>para-empresa">para empresa</a></li>
        <li><a href="<?php echo URL_BASE; ?>contato.php">contato</a></li>
        <li><a href="<?php echo URL_BASE; ?>cotacao-e-graficos">cotações e gráficos</a></li>
	</ul>
</nav>