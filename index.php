<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo NOME_EMPRESA ?></title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>estilo/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

	<meta name="description" content="Gere links de mensagem para seu whatsapp de maneira rápida!"/>
	<meta name="keywords" content="link whatsapp,gerador de link,whatsapp,desenvolvimento web,seo,marketing digital,programação,pacajus" />
    <meta name="robots" content="index,follow" />
	<meta name="author" content="Francisco André | Dev. Web, mobile">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/402/402729.png">

	<script src="https://kit.fontawesome.com/aef07dbb17.js" crossorigin="anonymous"></script>
</head>
<body>

	<div class="msg">
		<h4>Seu link foi copiado com sucesso!!</h4>
	</div><!-- msgLogin -->

	<form class="baseForme">
		<div class="container">

			<h3>Crie mensagens preprontas para seus contatos!</h3>
				

			<span>Número:</span>
			<input type="text" name="linkmsg" class="numMsg" />
			
			<span>Escreva a mensagem:</span>
			<textarea name="mensagem" class="mensagem"></textarea>
			
			<span>Seu link para whatsapp:</span>
			<input type="text" name="linkmsg" class="linkmsg" />

			<button class="copy"><i class="fas fa-copy"></i></button>

			<input type="submit" class="btnIr" value="Conversar direto!" />

			<div class="clear"></div><!-- clear -->

			<div class="dica">
				<p>1 - Escreva o número e a mensagem</p>
				<p>2 - Clique no botão de copiar</p>
				<p>3 - Pronto, agora é só compartilhar</p>
				<p>*Se preferir clique em "Conversar direto" para ir com o link até o whatsapp*</p>
			</div><!-- dica -->
		</div><!-- container -->
	</form><!-- baseforme -->


<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="<?php echo INCLUDE_PATH ?>js/func.js"></script>
<script src="<?php echo INCLUDE_PATH ?>js/jquery.mask.js"></script>
</body>
</html>