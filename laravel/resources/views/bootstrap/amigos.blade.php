<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AmiGo - Amigos</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">

<div class="topbar stick">
		<div class="logo">
			<a title="" href="{{route('postagens')}}"><img src="assets/images/logo2.png" alt=""></a>
		</div>

		<div class="top-area">
			<ul class="main-menu">
				<li>
					<a href="#" title="">Home</a>
					<ul>
						<li><a href="{{route('postagens')}}" title="">Página incial</a></li>
						<li><a href="{{route('feedSeguindo')}}" title="">Seguindo</a></li>

					</ul>
				</li>
				<li>
					<a href="#" title="">mais</a>
					<ul>
						<li><a href="{{route('perfil')}}" title="">Minhas postagens</a></li>
						<li><a href="{{route('amigos')}}" title="">Meus Amigos</a></li>
					</ul>
				</li>

			</ul>
		</div>
	</div><!-- topbar -->
	<section>
			<div class="feature-photo">
				<figure><img src="images/resources/layout.jpg" alt=""></figure>
				<div class="add-btn">
					<span>1205 followers</span>
					<a href="#" title="" data-ripple="">Add Friend</a>
				</div>
				<div class="container-fluid">
					<div class="row merged">
						<div class="col-lg-2 col-sm-3">
							<div class="user-avatar">
								<figure>
									<img src="images/resources/user-avatar.jpg" alt="">
								</figure>
							</div>
						</div>
						<div class="col-lg-10 col-sm-9">
							<div class="timeline-info">
								<ul>
									<li class="admin-name">
									  <h5>Janice Griffith</h5>
									</li>
									<li>
									<a class="" href="{{route('perfil')}}" title="" data-ripple="">Início</a>
									<a class="active" href="{{route('amigos')}}" title="" data-ripple="">Amigos</a>
									<a class="" href="{{route('editar_perfil')}}" title="" data-ripple="">Editar</a>

								</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- top area -->

	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
								<div class="widget">
										<h4 class="widget-title">Atalhos</h4>
										<ul class="naves">
											<li>
											<img src="assets/images/sinal-aprovado.png" alt="" class="ti-files">
												<a href="{{route('postagens')}}" title="">Recomendados</a>
											</li>
											<li>
												<img src="assets/images/editar-texto.png" alt="" class="ti-files">
												<a href="{{route('perfil')}}" title="">Meus Posts</a>
											</li>
											<li>
											<img src="assets/images/amigos.png" alt="" class="ti-files">
												<a href="{{route('feedSeguindo')}}" title="">Posts dos meus AmiGos</a>
											</li>
											<li>
											<img src="assets/images/sair.png" alt="" class="ti-files">
												<a href="{{route('logout')}}" title="">Sair</a>
											</li>
										</ul>
									</div><!-- Shortcuts -->
										

								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="frnds">
										<ul class="nav nav-tabs">
											 <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">Meus Amigos</a> <span>55</span></li>
											 <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Pedidos de Amizade</a><span>60</span></li>
										</ul>
									
										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active fade show " id="frends" >
											<ul class="nearby-contct">
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">jhon kates</a></h4>
														<a href="#" title="" class="add-butn more-action" data-ripple="">remover</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="images/resources/nearly1.jpg" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">sophia Gate</a></h4>
														<a href="#" title="" class="add-butn more-action" data-ripple="">remover</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="images/resources/nearly2.jpg" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">sara grey</a></h4>
														<a href="#" title="" class="add-butn more-action" data-ripple="">remover</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="images/resources/nearly2.jpg" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">Ema watson</a></h4>
														<a href="#" title="" class="add-butn more-action" data-ripple="">remover</a>
													</div>
												</div>
											</li>
										</ul>
										</div>
										  <div class="tab-pane fade" id="frends-req" >
											<ul class="nearby-contct">
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="images/resources/nearly5.jpg" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">Amy watson</a></h4>
														<a href="#" title="" class="add-butn more-action" data-ripple="">Recusar</a>
														<a href="#" title="" class="add-butn" data-ripple="">Aceitar</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="images/resources/nearly6.jpg" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">caty lasbo</a></h4>
														<a href="#" title="" class="add-butn more-action" data-ripple="">Recusar</a>
														<a href="#" title="" class="add-butn" data-ripple="">Aceitar</a>
													</div>
												</div>
											</li>
										</ul>
										  </div>
										</div>
									</div>
								</div>
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">
									
									
										

								</aside>
							</div><!-- sidebar -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	
</div>
	

	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/map-init.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>


</html>
