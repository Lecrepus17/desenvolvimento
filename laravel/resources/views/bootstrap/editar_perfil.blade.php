<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>AmiGo</title>
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
			<a title="" href="newsfeed.html"><img src="images/logo.png" alt=""></a>
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
			<div class="user-img">
				<img src="images/resources/admin.jpg" alt="">
				<span class="status f-online"></span>
				<div class="user-setting">
					<a href="#" title=""><span class="status f-online"></span>online</a>
					<a href="#" title=""><span class="status f-away"></span>away</a>
					<a href="#" title=""><span class="status f-off"></span>offline</a>
					<a href="{{route('perfil')}}" title=""><i class="ti-user"></i> ver perfil</a>
					<a href="{{route('editar_perfil')}}" title=""><i class="ti-pencil-alt"></i>editar perfil</a>
					<a href="#" title=""><i class="ti-power-off"></i>log out</a>
				</div>
			</div>
			<span class="ti-menu main-menu" data-ripple=""></span>
		</div>
	</div><!-- topbar -->

	<section>
		<div class="feature-photo">
			<figure><img src="images/resources/timeline-1.jpg" alt=""></figure>
			<div class="add-btn">
				<span>1205 followers</span>
				<a href="#" title="" data-ripple="">Add Friend</a>
			</div>
			<form class="edit-phto">
				<i class="fa fa-camera-retro"></i>
				<label class="fileContainer">
					Edit Cover Photo
				<input type="file"/>
				</label>
			</form>
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure>
								<img src="{{ asset('storage/' . $user->foto) }}" alt="Foto de Perfil">
								<form class="edit-phto">
									<i class="fa fa-camera-retro"></i>
									<label class="fileContainer">
										Edit Display Photo
										<input type="file"/>
									</label>
								</form>
							</figure>
						</div>
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
								  <h5>Janice Griffith</h5>
								  <span>Group Admin</span>
								</li>
								<li>
									<a class="" href="{{route('perfil')}}" title="" data-ripple="">Início</a>
									<a class="" href="{{route('amigos')}}" title="" data-ripple="">Amigos</a>
									<a class="active" href="{{route('editar_perfil')}}" title="" data-ripple="">Editar</a>
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
										<h4 class="widget-title">Recent Activity</h4>
										<ul class="activitiez">
											<li>
												<div class="activity-meta">
													<i>10 hours Ago</i>
													<span><a title="" href="#">Commented on Video posted </a></span>
													<h6>by <a href="time-line.html">black demon.</a></h6>
												</div>
											</li>
											<li>
												<div class="activity-meta">
													<i>30 Days Ago</i>
													<span><a title="" href="#">Posted your status. “Hello guys, how are you?”</a></span>
												</div>
											</li>
											<li>
												<div class="activity-meta">
													<i>2 Years Ago</i>
													<span><a title="" href="#">Share a video on her timeline.</a></span>
													<h6>"<a href="#">you are so funny mr.been.</a>"</h6>
												</div>
											</li>
										</ul>
									</div>
									<div class="widget stick-widget">
										<h4 class="widget-title">Edit info</h4>
										<ul class="naves">
											<li>
												<i class="ti-info-alt"></i>
												<a href="edit-profile-basic.html" title="">Basic info</a>
											</li>
											<li>
												<i class="ti-mouse-alt"></i>
												<a href="edit-work-eductation.html" title="">Education & Work</a>
											</li>
											<li>
												<i class="ti-heart"></i>
												<a href="edit-interest.html" title="">My interests</a>
											</li>
											<li>
												<i class="ti-settings"></i>
												<a href="edit-account-setting.html" title="">account setting</a>
											</li>
											<li>
												<i class="ti-lock"></i>
												<a href="edit-password.html" title="">change password</a>
											</li>
										</ul>
									</div><!-- settings widget -->
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="editing-info">
										<h5 class="f-title"><i class="ti-info-alt"></i> Edit Basic Information</h5>

										<form method="post" action="{{ route('update.users', ['id' => $user->id]) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
											<div class="form-group ">
											  <input type="text" id="input" name="name"  value="{{ old('name', $user['name'] ?? '') }}"/>
											  <label class="control-label" for="input">First Name</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">
											  <input type="email" name="email"  value="{{ old('email', $user['email'] ?? '') }}"/>
											  <label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
											</div>
                                            <div class="form-group">
                                                <input type="password" id="input"  />
                                                <label class="control-label" for="input">New password</label><i class="mtrl-select"></i>
                                              </div>
                                              <input type="file" name="foto" value="{{ old('foto', $user['foto'] ?? '') }}">
                                              <div class="submit-btns">
                                                  <input type="submit" value="Atualizar">
                                              </div>
                                            </form>
									</div>
								</div>
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
											<h4 class="widget-title">Your page</h4>
											<div class="your-page">
												<figure>
													<a title="" href="#"><img alt="" src="images/resources/friend-avatar9.jpg"></a>
												</figure>
												<div class="page-meta">
													<a class="underline" title="" href="#">My page</a>
													<span><i class="ti-comment"></i>Messages <em>9</em></span>
													<span><i class="ti-bell"></i>Notifications <em>2</em></span>
												</div>
												<div class="page-likes">
													<ul class="nav nav-tabs likes-btn">
														<li class="nav-item"><a data-toggle="tab" href="#link1" class="active">likes</a></li>
														 <li class="nav-item"><a data-toggle="tab" href="#link2" class="">views</a></li>
													</ul>
													<!-- Tab panes -->
													<div class="tab-content">
													  <div id="link1" class="tab-pane active fade show">
														<span><i class="ti-heart"></i>884</span>
														  <a title="weekly-likes" href="#">35 new likes this week</a>
														  <div class="users-thumb-list">
														  	<a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
																<img alt="" src="images/resources/userlist-1.jpg">
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="frank">
																<img alt="" src="images/resources/userlist-2.jpg">
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
																<img alt="" src="images/resources/userlist-3.jpg">
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
																<img alt="" src="images/resources/userlist-4.jpg">
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
																<img alt="" src="images/resources/userlist-5.jpg">
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
																<img alt="" src="images/resources/userlist-6.jpg">
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
																<img alt="" src="images/resources/userlist-7.jpg">
															</a>
														  </div>
													  </div>
													  <div id="link2" class="tab-pane fade">
														  <span><i class="ti-eye"></i>445</span>
														  <a title="weekly-likes" href="#">440 new views this week</a>
														  <div class="users-thumb-list">
														  	<a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
																<img alt="" src="images/resources/userlist-1.jpg">
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="frank">
																<img alt="" src="images/resources/userlist-2.jpg">
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
																<img alt="" src="images/resources/userlist-3.jpg">
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
																<img alt="" src="images/resources/userlist-4.jpg">
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
																<img alt="" src="images/resources/userlist-5.jpg">
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
																<img alt="" src="images/resources/userlist-6.jpg">
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
																<img alt="" src="images/resources/userlist-7.jpg">
															</a>
														  </div>
													  </div>
													</div>
												</div>
											</div>
										</div>
									<div class="widget stick-widget">
										<h4 class="widget-title">Who's follownig</h4>
										<ul class="followers">
											<li>
												<figure><img src="images/resources/friend-avatar2.jpg" alt=""></figure>
												<div class="friend-meta">
													<h4><a href="time-line.html" title="">Kelly Bill</a></h4>
													<a href="#" title="" class="underline">Add Friend</a>
												</div>
											</li>
											<li>
												<figure><img src="images/resources/friend-avatar4.jpg" alt=""></figure>
												<div class="friend-meta">
													<h4><a href="time-line.html" title="">Issabel</a></h4>
													<a href="#" title="" class="underline">Add Friend</a>
												</div>
											</li>
											<li>
												<figure><img src="images/resources/friend-avatar6.jpg" alt=""></figure>
												<div class="friend-meta">
													<h4><a href="time-line.html" title="">Andrew</a></h4>
													<a href="#" title="" class="underline">Add Friend</a>
												</div>
											</li>
											<li>
												<figure><img src="images/resources/friend-avatar8.jpg" alt=""></figure>
												<div class="friend-meta">
													<h4><a href="time-line.html" title="">Sophia</a></h4>
													<a href="#" title="" class="underline">Add Friend</a>
												</div>
											</li>
											<li>
												<figure><img src="images/resources/friend-avatar3.jpg" alt=""></figure>
												<div class="friend-meta">
													<h4><a href="time-line.html" title="">Allen</a></h4>
													<a href="#" title="" class="underline">Add Friend</a>
												</div>
											</li>
										</ul>
									</div><!-- who's following -->
								</aside>
							</div><!-- sidebar -->
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

</body>

</html>
