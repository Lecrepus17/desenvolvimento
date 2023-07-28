<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>AmiGo</title>
    <link rel="logo" href="assets/images/logo.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="assets/css/main.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/color.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea">
					<div class="land-meta">
						<h1>AmiGo</h1>
						<p>
							Torne-se um AmiGo e encontre vários outros amigos.
						</p>
						<div class="friend-logo">
							<span><img src="assets/images/logo-cadastro.png" alt=""></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign">
						<h2 class="log-title">Cadastre-se</h2>
							<p class="highlight-paragraph">
								Já é um amigo? Entre na sua conta <a href="{{ route('index')}}" title="" class="highlight">aqui.</a>
							</p>
							<form method="post" action="/api/CreateUser">
								@csrf
							<div class="form-group">
							  <input type="email" required="required" name="email"/>
							  <label class="control-label" for="input">E-mail</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">
							  <input type="text" required="required" name="name"/>
							  <label class="control-label" for="input">Nome de usuário</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">
							  <input type="password" required="required" name="password"/>
							  <label class="control-label" for="input">Senha</label><i class="mtrl-select"></i>
							</div>
							<div class="submit-btns">
								<input type="submit" value="Criar conta" class="submit-button">
							</div>
						</form>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>

	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js"></script>
	<script src="assets/js/script.js"></script>

</body>

</html>
