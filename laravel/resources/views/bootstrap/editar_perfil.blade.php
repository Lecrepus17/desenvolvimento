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
									<a class="" href="{{route('amigos')}}" title="" data-ripple="">Amigos</a>
									<a class="" href="{{route('sobre_perfil')}}" title="" data-ripple="">Informações</a>
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

										<form method="post" action="{{ route('update.user') }}">
											<div class="form-group half">
											  <input type="text" id="input" required="required"/>
											  <label class="control-label" for="input">First Name</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group half">
											  <input type="text" required="required"/>
											  <label class="control-label" for="input">Last Name</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">
											  <input type="text" required="required"/>
											  <label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4b0e262a22270b">[email&#160;protected]</a></label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">
											  <input type="text" required="required"/>
											  <label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
											</div>
											<div class="dob">
												<div class="form-group">
													<select>
														<option value="Day">Day</option>
														  <option>1</option>
														  <option>2</option>
														  <option>3</option>
														  <option>4</option>
														  <option>5</option>
														  <option>6</option>
														  <option>7</option>
														  <option>8</option>
														  <option>9</option>
														  <option>10</option>
														  <option>11</option>
														  <option>12</option>
														  <option>13</option>
														  <option>14</option>
														  <option>15</option>
														  <option>16</option>
														  <option>17</option>
														  <option>18</option>
														  <option>19</option>
														  <option>20</option>
														  <option>21</option>
														  <option>22</option>
														  <option>23</option>
														  <option>24</option>
														  <option>25</option>
														  <option>26</option>
														  <option>27</option>
														  <option>28</option>
														  <option>29</option>
														  <option>30</option>
														  <option>31</option>
													</select>
												</div>
												<div class="form-group">
													<select>
														<option value="month">Month</option>
														  <option>Jan</option>
														  <option>Feb</option>
														  <option>Mar</option>
														  <option>Apr</option>
														  <option>May</option>
														  <option>Jun</option>
														  <option>Jul</option>
														  <option>Aug</option>
														  <option>Sep</option>
														  <option>Oct</option>
														  <option>Nov</option>
														  <option>Dec</option>
													</select>
												</div>
												<div class="form-group">
													<select>
													  <option value="year">Year</option>
													  <option>2000</option>
													  <option>2001</option>
													  <option>2002</option>
													  <option>2004</option>
													  <option>2005</option>
													  <option>2006</option>
													  <option>2007</option>
													  <option>2008</option>
													  <option>2009</option>
													  <option>2010</option>
													  <option>2011</option>
													  <option>2012</option>
													</select>
												</div>
											</div>
											<div class="form-radio">
											  <div class="radio">
												<label>
												  <input type="radio" checked="checked" name="radio"><i class="check-box"></i>Male
												</label>
											  </div>
											  <div class="radio">
												<label>
												  <input type="radio" name="radio"><i class="check-box"></i>Female
												</label>
											  </div>
											</div>
											<div class="form-group">
											  <input type="text" required="required"/>
											  <label class="control-label" for="input">City</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">
											  <select>
												<option value="country">Country</option>
												  <option value="AFG">Afghanistan</option>
												  <option value="ALA">Ƭand Islands</option>
												  <option value="ALB">Albania</option>
												  <option value="DZA">Algeria</option>
												  <option value="ASM">American Samoa</option>
												  <option value="AND">Andorra</option>
												  <option value="AGO">Angola</option>
												  <option value="AIA">Anguilla</option>
												  <option value="ATA">Antarctica</option>
												  <option value="ATG">Antigua and Barbuda</option>
												  <option value="ARG">Argentina</option>
												  <option value="ARM">Armenia</option>
												  <option value="ABW">Aruba</option>
												  <option value="AUS">Australia</option>
												  <option value="AUT">Austria</option>
												  <option value="AZE">Azerbaijan</option>
												  <option value="BHS">Bahamas</option>
												  <option value="BHR">Bahrain</option>
												  <option value="BGD">Bangladesh</option>
												  <option value="BRB">Barbados</option>
												  <option value="BLR">Belarus</option>
												  <option value="BEL">Belgium</option>
												  <option value="BLZ">Belize</option>
												  <option value="BEN">Benin</option>
												  <option value="BMU">Bermuda</option>
												  <option value="BTN">Bhutan</option>
												  <option value="BOL">Bolivia, Plurinational State of</option>
												  <option value="BES">Bonaire, Sint Eustatius and Saba</option>
												  <option value="BIH">Bosnia and Herzegovina</option>
												  <option value="BWA">Botswana</option>
												  <option value="BVT">Bouvet Island</option>
												  <option value="BRA">Brazil</option>
												  <option value="IOT">British Indian Ocean Territory</option>
												  <option value="BRN">Brunei Darussalam</option>
												  <option value="BGR">Bulgaria</option>
												  <option value="BFA">Burkina Faso</option>
												  <option value="BDI">Burundi</option>
												  <option value="KHM">Cambodia</option>
												  <option value="CMR">Cameroon</option>
												  <option value="CAN">Canada</option>
												  <option value="CPV">Cape Verde</option>
												  <option value="CYM">Cayman Islands</option>
												  <option value="CAF">Central African Republic</option>
												  <option value="TCD">Chad</option>
												  <option value="CHL">Chile</option>
												  <option value="CHN">China</option>
												  <option value="CXR">Christmas Island</option>
												  <option value="CCK">Cocos (Keeling) Islands</option>
												  <option value="COL">Colombia</option>
												  <option value="COM">Comoros</option>
												  <option value="COG">Congo</option>
												  <option value="COD">Congo, the Democratic Republic of the</option>
												  <option value="COK">Cook Islands</option>
												  <option value="CRI">Costa Rica</option>
												  <option value="CIV">C𴥠d'Ivoire</option>
												  <option value="HRV">Croatia</option>
												  <option value="CUB">Cuba</option>
												  <option value="CUW">Cura袯</option>
												  <option value="CYP">Cyprus</option>
												  <option value="CZE">Czech Republic</option>
												  <option value="DNK">Denmark</option>
												  <option value="DJI">Djibouti</option>
												  <option value="DMA">Dominica</option>
												  <option value="DOM">Dominican Republic</option>
												  <option value="ECU">Ecuador</option>
												  <option value="EGY">Egypt</option>
												  <option value="SLV">El Salvador</option>
												  <option value="GNQ">Equatorial Guinea</option>
												  <option value="ERI">Eritrea</option>
												  <option value="EST">Estonia</option>
												  <option value="ETH">Ethiopia</option>
												  <option value="FLK">Falkland Islands (Malvinas)</option>
												  <option value="FRO">Faroe Islands</option>
												  <option value="FJI">Fiji</option>
												  <option value="FIN">Finland</option>
												  <option value="FRA">France</option>
												  <option value="GUF">French Guiana</option>
												  <option value="PYF">French Polynesia</option>
												  <option value="ATF">French Southern Territories</option>
												  <option value="GAB">Gabon</option>
												  <option value="GMB">Gambia</option>
												  <option value="GEO">Georgia</option>
												  <option value="DEU">Germany</option>
												  <option value="GHA">Ghana</option>
												  <option value="GIB">Gibraltar</option>
												  <option value="GRC">Greece</option>
												  <option value="GRL">Greenland</option>
												  <option value="GRD">Grenada</option>
												  <option value="GLP">Guadeloupe</option>
												  <option value="GUM">Guam</option>
												  <option value="GTM">Guatemala</option>
												  <option value="GGY">Guernsey</option>
												  <option value="GIN">Guinea</option>
												  <option value="GNB">Guinea-Bissau</option>
												  <option value="GUY">Guyana</option>
												  <option value="HTI">Haiti</option>
												  <option value="HMD">Heard Island and McDonald Islands</option>
												  <option value="VAT">Holy See (Vatican City State)</option>
												  <option value="HND">Honduras</option>
												  <option value="HKG">Hong Kong</option>
												  <option value="HUN">Hungary</option>
												  <option value="ISL">Iceland</option>
												  <option value="IND">India</option>
												  <option value="IDN">Indonesia</option>
												  <option value="IRN">Iran, Islamic Republic of</option>
												  <option value="IRQ">Iraq</option>
												  <option value="IRL">Ireland</option>
												  <option value="IMN">Isle of Man</option>
												  <option value="ISR">Israel</option>
												  <option value="ITA">Italy</option>
												  <option value="JAM">Jamaica</option>
												  <option value="JPN">Japan</option>
												  <option value="JEY">Jersey</option>
												  <option value="JOR">Jordan</option>
												  <option value="KAZ">Kazakhstan</option>
												  <option value="KEN">Kenya</option>
												  <option value="KIR">Kiribati</option>
												  <option value="PRK">Korea, Democratic People's Republic of</option>
												  <option value="KOR">Korea, Republic of</option>
												  <option value="KWT">Kuwait</option>
												  <option value="KGZ">Kyrgyzstan</option>
												  <option value="LAO">Lao People's Democratic Republic</option>
												  <option value="LVA">Latvia</option>
												  <option value="LBN">Lebanon</option>
												  <option value="LSO">Lesotho</option>
												  <option value="LBR">Liberia</option>
												  <option value="LBY">Libya</option>
												  <option value="LIE">Liechtenstein</option>
												  <option value="LTU">Lithuania</option>
												  <option value="LUX">Luxembourg</option>
												  <option value="MAC">Macao</option>
												  <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
												  <option value="MDG">Madagascar</option>
												  <option value="MWI">Malawi</option>
												  <option value="MYS">Malaysia</option>
												  <option value="MDV">Maldives</option>
												  <option value="MLI">Mali</option>
												  <option value="MLT">Malta</option>
												  <option value="MHL">Marshall Islands</option>
												  <option value="MTQ">Martinique</option>
												  <option value="MRT">Mauritania</option>
												  <option value="MUS">Mauritius</option>
												  <option value="MYT">Mayotte</option>
												  <option value="MEX">Mexico</option>
												  <option value="FSM">Micronesia, Federated States of</option>
												  <option value="MDA">Moldova, Republic of</option>
												  <option value="MCO">Monaco</option>
												  <option value="MNG">Mongolia</option>
												  <option value="MNE">Montenegro</option>
												  <option value="MSR">Montserrat</option>
												  <option value="MAR">Morocco</option>
												  <option value="MOZ">Mozambique</option>
												  <option value="MMR">Myanmar</option>
												  <option value="NAM">Namibia</option>
												  <option value="NRU">Nauru</option>
												  <option value="NPL">Nepal</option>
												  <option value="NLD">Netherlands</option>
												  <option value="NCL">New Caledonia</option>
												  <option value="NZL">New Zealand</option>
												  <option value="NIC">Nicaragua</option>
												  <option value="NER">Niger</option>
												  <option value="NGA">Nigeria</option>
												  <option value="NIU">Niue</option>
												  <option value="NFK">Norfolk Island</option>
												  <option value="MNP">Northern Mariana Islands</option>
												  <option value="NOR">Norway</option>
												  <option value="OMN">Oman</option>
												  <option value="PAK">Pakistan</option>
												  <option value="PLW">Palau</option>
												  <option value="PSE">Palestinian Territory, Occupied</option>
												  <option value="PAN">Panama</option>
												  <option value="PNG">Papua New Guinea</option>
												  <option value="PRY">Paraguay</option>
												  <option value="PER">Peru</option>
												  <option value="PHL">Philippines</option>
												  <option value="PCN">Pitcairn</option>
												  <option value="POL">Poland</option>
												  <option value="PRT">Portugal</option>
												  <option value="PRI">Puerto Rico</option>
												  <option value="QAT">Qatar</option>
												  <option value="REU">R궮ion</option>
												  <option value="ROU">Romania</option>
												  <option value="RUS">Russian Federation</option>
												  <option value="RWA">Rwanda</option>
												  <option value="BLM">Saint Barthꭥmy</option>
												  <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
												  <option value="KNA">Saint Kitts and Nevis</option>
												  <option value="LCA">Saint Lucia</option>
												  <option value="MAF">Saint Martin (French part)</option>
												  <option value="SPM">Saint Pierre and Miquelon</option>
												  <option value="VCT">Saint Vincent and the Grenadines</option>
												  <option value="WSM">Samoa</option>
												  <option value="SMR">San Marino</option>
												  <option value="STP">Sao Tome and Principe</option>
												  <option value="SAU">Saudi Arabia</option>
												  <option value="SEN">Senegal</option>
												  <option value="SRB">Serbia</option>
												  <option value="SYC">Seychelles</option>
												  <option value="SLE">Sierra Leone</option>
												  <option value="SGP">Singapore</option>
												  <option value="SXM">Sint Maarten (Dutch part)</option>
												  <option value="SVK">Slovakia</option>
												  <option value="SVN">Slovenia</option>
												  <option value="SLB">Solomon Islands</option>
												  <option value="SOM">Somalia</option>
												  <option value="ZAF">South Africa</option>
												  <option value="SGS">South Georgia and the South Sandwich Islands</option>
												  <option value="SSD">South Sudan</option>
												  <option value="ESP">Spain</option>
												  <option value="LKA">Sri Lanka</option>
												  <option value="SDN">Sudan</option>
												  <option value="SUR">Suriname</option>
												  <option value="SJM">Svalbard and Jan Mayen</option>
												  <option value="SWZ">Swaziland</option>
												  <option value="SWE">Sweden</option>
												  <option value="CHE">Switzerland</option>
												  <option value="SYR">Syrian Arab Republic</option>
												  <option value="TWN">Taiwan, Province of China</option>
												  <option value="TJK">Tajikistan</option>
												  <option value="TZA">Tanzania, United Republic of</option>
												  <option value="THA">Thailand</option>
												  <option value="TLS">Timor-Leste</option>
												  <option value="TGO">Togo</option>
												  <option value="TKL">Tokelau</option>
												  <option value="TON">Tonga</option>
												  <option value="TTO">Trinidad and Tobago</option>
												  <option value="TUN">Tunisia</option>
												  <option value="TUR">Turkey</option>
												  <option value="TKM">Turkmenistan</option>
												  <option value="TCA">Turks and Caicos Islands</option>
												  <option value="TUV">Tuvalu</option>
												  <option value="UGA">Uganda</option>
												  <option value="UKR">Ukraine</option>
												  <option value="ARE">United Arab Emirates</option>
												  <option value="GBR">United Kingdom</option>
												  <option value="USA" selected>United States</option>
												  <option value="UMI">United States Minor Outlying Islands</option>
												  <option value="URY">Uruguay</option>
												  <option value="UZB">Uzbekistan</option>
												  <option value="VUT">Vanuatu</option>
												  <option value="VEN">Venezuela, Bolivarian Republic of</option>
												  <option value="VNM">Viet Nam</option>
												  <option value="VGB">Virgin Islands, British</option>
												  <option value="VIR">Virgin Islands, U.S.</option>
												  <option value="WLF">Wallis and Futuna</option>
												  <option value="ESH">Western Sahara</option>
												  <option value="YEM">Yemen</option>
												  <option value="ZMB">Zambia</option>
												  <option value="ZWE">Zimbabwe</option>
											  </select>
											</div>
											<div class="form-group">
											  <textarea rows="4" id="textarea" required="required"></textarea>
											  <label class="control-label" for="textarea">About Me</label><i class="mtrl-select"></i>
											</div><br><br>
                                            <p><i>Editar senha</i></p>
                                            <div class="form-group">
                                                <input type="password" id="input" required="required"/>
                                                <label class="control-label" for="input">New password</label><i class="mtrl-select"></i>
                                              </div>
                                              <div class="form-group">
                                                <input type="password" required="required"/>
                                                <label class="control-label" for="input">Confirm password</label><i class="mtrl-select"></i>
                                              </div>
                                              <div class="form-group">
                                                <input type="password" required="required"/>
                                                <label class="control-label" for="input">Current password</label><i class="mtrl-select"></i>
                                              </div>
                                              <a class="forgot-pwd underline" title="" href="#">Forgot Password?</a>
                                              <div class="submit-btns">
                                                  <button type="button" class="mtr-btn"><span>Cancel</span></button>
                                                  <button type="button" class="mtr-btn"><span>Update</span></button>
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
