<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Winku Social Network Toolkit</title>
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
									<img src="images/resources/user-avatar.jpg" alt="">
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
									<a class="active" href="{{route('amigos')}}" title="" data-ripple="">Amigos</a>
									<a class="" href="{{route('sobre_perfil')}}" title="" data-ripple="">Informações</a>
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
											<h4 class="widget-title">Shortcuts</h4>
											<ul class="naves">
												<li>
													<i class="ti-clipboard"></i>
													<a href="newsfeed.html" title="">News feed</a>
												</li>
												<li>
													<i class="ti-mouse-alt"></i>
													<a href="inbox.html" title="">Inbox</a>
												</li>
												<li>
													<i class="ti-files"></i>
													<a href="fav-page.html" title="">My pages</a>
												</li>
												<li>
													<i class="ti-user"></i>
													<a href="timeline-friends.html" title="">friends</a>
												</li>
												
												<li>
													<i class="ti-power-off"></i>
													<a href="landing.html" title="">Logout</a>
												</li>
											</ul>
										</div><!-- Shortcuts -->
										<div class="widget">
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
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="frnds">
										<ul class="nav nav-tabs">
											 <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">My Friends</a> <span>55</span></li>
											 <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Friend Requests</a><span>60</span></li>
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
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
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
														<span>tv actresses</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
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
														<span>work at IBM</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="images/resources/nearly3.jpg" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">Sexy cat</a></h4>
														<span>Student</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="images/resources/nearly4.jpg" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">Sara grey</a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="images/resources/nearly5.jpg" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">Amy watson</a></h4>
														<span>Study in university</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
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
														<span>work as dancers</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
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
														<span>personal business</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
													</div>
												</div>
											</li>
										</ul>
											<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
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
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
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
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
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
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">jhon kates</a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
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
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="images/resources/nearly4.jpg" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">Sara grey</a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="images/resources/nearly3.jpg" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">Sexy cat</a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">jhon kates</a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
													</div>
												</div>
											</li>
										</ul>
											  <button class="btn-view btn-load-more"></button>
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
