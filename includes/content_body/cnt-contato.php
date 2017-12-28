	<div class="centred-text transition">
		<h1>Obrigado!</h1>
		<img src="<?php echo DIR_BOBY;?>img/mail.png">
	</div>

	<div style="display: block;" class="form-container contato">
		<div class="close-form">x</div>
		<form class="form-inner">
			<div class="form-left">	
			
				<div class="label-line">
				<span class="span"></span>
				<label class="label transition">Nome</label><input class="input" id="name" autocomplete="off">
				</div>
				
				<div class="label-line">
				<span class="span"></span>
				<label class="label transition">E-mail</label><input class="input" id="mail" autocomplete="off">
				</div>
				
				<div class="label-line textarea">
				<span class="span"></span>
				<label class="label transition">Mensagem</label><textarea class="input" id="text"></textarea>
				</div>
			</div>
			<div class="form-right transition">	
				<div class="message-sent">
						<span></span>
						Mensagem enviada
				</div>
				<div class="button-overlay"></div>
				<div class="button">
					<img src="<?php echo DIR_BOBY;?>img/plane.png">
					<span>Enviar</span>
				</div>
			</div>
		</form>
	</div>