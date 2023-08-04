<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>AmiGo</title>
    <link rel="icon" href="assets/images/favicon.png" type="image/png" sizes="16x16">

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
							Seja bem-vindo AmiGo!
						</p>
						<div class="friend-logo">
						<span><img src="assets/images/logo.png" alt=""></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign">
						<h2 class="log-title">Login</h2>
						<p class="highlight-paragraph">
          Ainda não é um AmiGo? Torne-se um amigo <a href="{{ route('register')}}" title="" class="highlight">aqui.</a>
        </p>
						<form method="post" action="{{ route('login.user')}}">
							@csrf
							<div class="form-group" >
							  <input type="text" id="input" required="required"/>
							  <label class="control-label" for="input">Nome de usuário</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">
							  <input type="password" required="required"/>
							  <label class="control-label" for="input">Senha</label><i class="mtrl-select"></i>
							</div>
							<div class="submit-btns">

								<input type="submit" value="Entrar na conta" class="submit-button">

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
