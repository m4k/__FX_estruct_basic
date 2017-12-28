<script>
    function ok() {
        alert("url <?php echo $_SERVER['REMOTE_ADDR'];?>");   
    };
</script> 
<nav>
	<ul role="navigation" class="hidden">
		<li><a href="<?php echo URL_BASE; ?>">home</a></li>
		<li><a href="<?php echo URL_BASE; ?>sobre.php">sobre</a></li>
		<li><a href="<?php echo URL_BASE; ?>para-voce.php">para você</a></li>
        <li><a href="<?php echo URL_BASE; ?>para-empresa.php">para empresa</a></li>
        <li><a href="<?php echo URL_BASE; ?>contato.php">contato</a></li>
        <li><a href="<?php echo URL_BASE; ?>cotacao-e-graficos.php">cotações e gráficos</a></li>
	</ul>
</nav>