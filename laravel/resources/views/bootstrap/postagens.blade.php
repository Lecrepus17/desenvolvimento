<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AmiGo</title>
    <link rel="icon" href="assets/images/favicon.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
<div class="theme-layout">

<!-- header -->
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
	</div>
<!-- header -->

	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
									<div class="widget">
									<h4 class="widget-title">Sua página</h4>
										<div class="your-page">
											<figure>
												<a href="{{route('perfil')}}" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
											</figure>
											<div class="page-meta">
												<a href="{{route('perfil')}}" title="" class="underline">Meu perfil</a>
												<span><i class="ti-comment"></i><a href="insight.html" title="">Posts <em>##</em></a></span>
												<span><i class="ti-bell"></i><a href="insight.html" title="">AmiGos <em>##</em></a></span>
											</div>
										</div>
									</div><!-- page like widget -->
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
											<img src="images/resources/admin2.jpg" alt="">
										</figure>
										<div class="newpst-input">
											<form method="post">
												<textarea rows="2" placeholder="escreva algo..."></textarea>
												<div class="attachments">
													<ul>
														<li>
															<i class="fa fa-image"></i>
															<label class="fileContainer">
																<input type="file">
															</label>
														</li>
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
												<img src="images/resources/friend-avatar10.jpg" alt="">
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
														<script>
															const likeButton = document.querySelector('.like');
															const likeCount = likeButton.querySelector('ins');
															let hasLiked = false; // Variável para rastrear se o botão foi clicado

															likeButton.addEventListener('click', function () {
																if (!hasLiked) {
																	let currentLikes = parseFloat(likeCount.textContent);
																	currentLikes += 1;

																	// Verifica se o número é inteiro
																	if (currentLikes % 1 === 0) {
																		likeCount.textContent = currentLikes; // Exibe o número sem decimais
																	} else {
																		likeCount.textContent = currentLikes.toFixed(1); // Exibe o número com 1 casa decimal
																	}

																	hasLiked = true; // Atualiza o estado para indicar que o botão foi clicado
																	likeButton.classList.add('liked'); // Adiciona uma classe para estilo visual
																} else {
																	let currentLikes = parseFloat(likeCount.textContent);
																	currentLikes -= 1;

																	// Verifica se o número é inteiro
																	if (currentLikes % 1 === 0) {
																		likeCount.textContent = currentLikes; // Exibe o número sem decimais
																	} else {
																		likeCount.textContent = currentLikes.toFixed(1); // Exibe o número com 1 casa decimal
																	}

																	hasLiked = false; // Botão foi deslikado
																	likeButton.classList.remove('liked'); // Remove a classe de estilo visual
																}
															});
														</script>


															<style>
    														.liked i{
       															 color: red;
 															   }
															</style>
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
															<span>1 year ago</span>
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
												<li class="post-comment">
													<div class="comet-avatar">
														<img src="images/resources/comet-1.jpg" alt="">
													</div>
													<div class="post-comt-box">
														<form method="post">
															<textarea placeholder="Faça seu comentário"></textarea>
															<li>
															<button type="submit">Postar</button>
															</li>
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
	<script src="js/map-init.js"></script>

</body>

</html>
