<div class="row">
	<div class="span6">
		<form id="login_form" class="form-horizontal" method="post" action="<?=site_url('api/login')?>"> 
			
			<div class="control-group">  
				<label class="control-label"> Login </label>
				<div class="controls">
					<input type="text" name="login" class="input-xlarge" />
				</div>
			</div>

			<div class="control-group"> 
				<label class="control-label"> Senha </label>
				<div class="controls">
					<input type="password" name="password" class="input-xlarge" />
				</div>
			</div>

			<div class="control-group"> 
				<div class="controls">
					<input type="submit" value="Login" class="btn btn-primary" />
				</div>
			</div>

		</form>

		<a href="<?=site_url('home/register')?>"> Registro </a>

	</div>   
</div>         

<script type="text/javascript"> //Script JQuery. Pode ser no começo ou no fim do documento.
	$(function(){
		$("#login_form").submit(function(evt){ //'evt' refere ao evento que vai ocorrer ao apertar o botão 'submeter' do formulário "login_form"
			evt.preventDefault(); //evento previne a ação padrão do botão. Nesse caso, previne que o formulario seja submetido.
			var url = $(this).attr('action'); //se refere a ação 'action' do formulário, que define o que vai ocorrer ao clicar o botão 'submeter'.
			var postData = $(this).serialize(); //serializa os comandos como uma string

			$.post(url, postData, function(o) { //função JQuery para POST, nesse caso envia o URL a variável 'postData' e uma função callback
				if (o.result == 1) {
					window.location.href = '<?=site_url('dashboard')?>'; // Ajax para redirecionar caso o login seja correto.
					//alert('Good Login'); // Mensagem de alerta pra teste do login de sucesso
				} else {
					alert('Invalid Login');
				}
			}, 'json'); //retorna os dados em 'json'
		});

	});
</script>        