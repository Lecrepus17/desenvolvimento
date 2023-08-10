<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AmiGo - Seu Perfil</title>
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
				<span>1205 AmiGos</span>
				<a href="#" title="" data-ripple="">Adicionar AmiGo</a>
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
									<a class="active" href="{{route('perfil')}}" title="" data-ripple="">Início</a>
									<a class="" href="{{route('amigos')}}" title="" data-ripple="">Amigos</a>
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
									<div class="new-postbox">
										<figure>
											<img src="{{ asset('storage/' . $userAuth->foto) }}" alt="">
										</figure>
										<div class="newpst-input">
											<form method="post" action="{{route('perfil')}}">
												<textarea name="texto" rows="2" placeholder="escreva algo..."></textarea>
												<div class="attachments">
													<ul>
														<!--<li>
															<i class="fa fa-image"></i>
															<label class="fileContainer">
																<input type="file">
															</label>
														</li>-->
														<li>
															<button type="submit">Postar</button>
														</li>
													</ul>
												</div>
											</form>
										</div>
									</div>
								</div><!-- add post new box -->

									@foreach ($posts as $post)


									<div class="central-meta item">
										<div class="user-post">
											<div class="friend-info">
											<figure>
											<img src="{{ asset('storage/' . $userAuth->foto) }}" alt="">
											</figure>
												<div class="friend-name">
												<ins><a href="time-line.html" title="">
												@foreach ($users as $user)
													@if ($post->user_fk == $user->id)
														{{$user->name}}
													@endif
												@endforeach
												</a></ins>
			</div>
			<div class="description">
				<p>
					{{$post->texto}}
					</p>
			</div>
			<div class="post-meta">
				<div class="we-video-info">
					<ul>
					<li>
							<span class="like" data-toggle="tooltip" title="like">
								<i class="ti-heart"></i>
								<ins>{{$post->like}}</ins>
							</span>
						</li>
						<li>
							<span class="comment" data-toggle="tooltip" title="Comments">
								<i class="fa fa-comments-o"></i>
								<ins>52</ins>
							</span>
						</li>
														<!-- botão de curtir -->
														<script>
															const likeButton = document.querySelector('.like');
															const likeCount = likeButton.querySelector('ins');
															let hasLiked = false;

															likeButton.addEventListener('click', function () {
															if (!hasLiked) {
																let currentLikes = parseFloat(likeCount.textContent);
																currentLikes += 1;

																likeCount.textContent = Math.round(currentLikes);

																hasLiked = true;
																likeButton.classList.add('liked');
															} else {
																let currentLikes = parseFloat(likeCount.textContent);
																currentLikes -= 1;

																if (currentLikes < 1) {
																likeCount.textContent = '0';
																} else {
																likeCount.textContent = Math.round(currentLikes);
																}

																hasLiked = false;
																likeButton.classList.remove('liked');
															}
															});
  														</script>
															<style>
    															.liked i{
       															 color: red;
 															    }
															</style>
														<!-- fim do botão de curtir -->
					</ul>
				</div>

			</div>
		</div>
		<div class="coment-area">
			<ul class="we-comet">
				<li>
					<div class="comet-avatar">
						<img src="images/resources/comet-1.jpg" alt="">
					</div>
					<div class="we-comment">
						<div class="coment-head">
							<h5><a href="time-line.html" title="">Jason borne</a></h5>
						</div>
						<p>
							 @foreach ($comentarios as $comentario)
							@if ($post->id == $comentario->post_fk)
								{{$comentario->texto}}
							@endif
							@endforeach
						 </p>
					</div>

				</li>
				<li>
					<div class="comet-avatar">
						<img src="images/resources/comet-1.jpg" alt="">
					</div>
					<div class="we-comment">
						<div class="coment-head">
							<h5><a href="time-line.html" title="">Donald Trump</a></h5>
						</div>
						<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel
							<i class="em em-smiley"></i>
						</p>
					</div>
				</li>
				<li class="post-comment">
					<div class="comet-avatar">
						<img src="images/resources/comet-1.jpg" alt="">
					</div>
					<div class="post-comt-box">
						<form method="post">
							<textarea placeholder="Post your comment"></textarea>
							<button type="submit"></button>
						</form>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
@endforeach



						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js"></script>
	<script src="js/script.js"></script>

</body>

</html>
