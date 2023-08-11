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
						<li><a href="{{route('perfil', ['id' => $user->id])}}" title="">Minhas postagens</a></li>
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
								<img src="{{ asset('storage/' . $userAuth->foto) }}" alt="">
							</figure>
						</div>
					</div>
					<div class="col-lg-10 col-sm-9">


						<div class="timeline-info">
							<ul>

								<li class="admin-name">
								  <h5>{{$userAuth->name}}</h5>
								</li>

								<li>
									<a class="active" href="{{route('perfil', ['id' => $user->id])}}" title="" data-ripple="">Início</a>
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
												<a href="{{route('perfil', ['id' => $user->id])}}" title="">Meus Posts</a>
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
								<!-- fazer post -->
								<div class="central-meta">
									<div class="new-postbox">
										<figure>
											<img src="{{ asset('storage/' . $userAuth->foto) }}" alt="">
										</figure>
										<div class="newpst-input">
											<form method="post" action="{{ route('createPost') }}">
                                                <input type="hidden" name="user_fk" value="{{$userAuth->id}}">
												<textarea type="text" name="texto" rows="2" placeholder="escreva algo..."></textarea>
												<div class="attachments">
													<ul>
														<li>
															<button type="submit">Postar</button>
														</li>
													</ul>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!-- fim de fazer post -->


                                @foreach ($posts as $post)

								<!-- estrutura dos posts -->
								<div class="central-meta item">
									<div class="user-post">
										<div class="friend-info">

                                				@if ($post->user_fk == $userAuth->id)
											<figure>
												<img src="{{ asset('storage/' . $userAuth->foto) }}"  alt="">
											</figure>
											<div class="friend-name">
												<ins><a href="time-line.html" title="">

                                    {{$userAuth->name}}

                                                </a></ins>
											</div>
                                          @endif
                                            <div class="description">
                                                <p>
                                                    {{$post->texto}}
                                                    </p>
                                            </div>

										</div>

										<!-- área dos comentários -->
										<div class="coment-area">
											<ul class="we-comet">
                                                @foreach ($comentarios as $comentario)
                                                @if ($post->id == $comentario->post_fk)

                                                <li>
                                                    @foreach ($users as $user)
                                                    @if ($comentario->user_fk == $user->id)

													<div class="comet-avatar">
														<img src="{{ asset('storage/' . $user->foto) }}" alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="time-line.html" title="">
                                                                {{$user->name}}
                                                            </a></h5>
														</div>

														<p>
                                                                {{$comentario->texto}}


                                                         </p>
													</div>
                                                    @endif
                                                    @endforeach
												</li>
                                                @endif
                                                @endforeach

												<li class="post-comment">
													<div class="comet-avatar">
														<img src="{{ asset('storage/' . $userAuth->foto) }}" alt="">
													</div>
													<div class="post-comt-box">

														<form method="post" action="{{ route("createComent")}}">
                                                            <input type="hidden" name="user_fk" value="{{ $userAuth->id }}">
                                                            <input type="hidden" name="post_fk" value="{{ $post->id }}">


															<textarea tyepe="text" name="texto" placeholder="faça seu comentário"></textarea>
															<li>
															<button type="submit">Comentar</button>
															</li>
														</form>
													</div>
												</li>
											</ul>
										</div>
										<!-- fim da área dos comentários -->
									</div>
								</div>
								<!-- fim da estrutura dos posts -->
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
