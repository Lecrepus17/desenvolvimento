<!DOCTYPE html>
<html lang="pt-BR">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AmiGo - Feed</title>
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
	<!-- fim da header -->

	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">


					        <!-- atalho de perfil e páginas -->
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
									<div class="widget">
										<h4 class="widget-title">Sua página</h4>
										<div class="your-page">
											<figure>
												<a href="{{route('perfil')}}" title=""><img src="{{ asset('storage/' . $userAuth->foto) }}" alt=""></a>
											</figure>
											<div class="page-meta">
												<a href="{{route('perfil')}}" title="" class="underline">Meu perfil</a>
												<span><i class="ti-comment"></i><a href="{{route('perfil')}}" title="">Posts </a></span>
												<span><i class="ti-bell"></i><a href="{{route('amigos')}}" title="">AmiGos </a></span>
											</div>
										</div>
									</div>
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
									</div>
								</aside>
							</div>
							<!-- fim do atalho de perfil e páginas -->


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
                                               @foreach ($users as $user)
                                				@if ($post->user_fk == $user->id)
											<figure>
												<img src="{{ asset('storage/' . $user->foto) }}"  alt="">
											</figure>
											<div class="friend-name">
												<ins><a href="time-line.html" title="">

                                    {{$user->name}}

                                                </a></ins>
                                            <form action="{{route('create.seguirs')}}" method="post">
                                                <input type="hidden" name="seguido_fk" value="{{$user->id}}">
                                                <input type="hidden" name="seguidor_fk" value="{{$userAuth->id}}">
                                                <input type="submit" value="Se Tornar amigo">
                                            </form>
											</div>
                                          @endif
                                @endforeach
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
														<form method="post">
															<textarea placeholder="faça seu comentário"></textarea>
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
	<script src="js/map-init.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</body>

</html>
