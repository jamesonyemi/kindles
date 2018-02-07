<?php include 'header.php'; ?>
<?php 
 function read_more($name ,$value = [])
 {
 
	$r = $name . "-" . implode(" ",$value);
	 print_r($r); 
 }
// return read_more('read_more',[2]);
 ?>
			<!-- Start Header -->
				<header id="mu-header" class="" role="banner">
					<div class="container">
						<nav class="navbar navbar-default mu-navbar">
						  	<div class="container-fluid">
							    <!-- Brand and toggle get grouped for better mobile display -->
							    <div class="navbar-header">
							      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							      </button>

							      <!-- Text Logo -->
							      <a class="navbar-brand" href="index.php"><i class="fa fa-cutlery" aria-hidden="true"></i><?= "\n" ?>Lynz</a>

							      <!-- Image Logo -->
							      <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"></a> -->


							    </div>

							    <!-- Collect the nav links, forms, and other content for toggling -->
							    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							      	<ul class="nav navbar-nav mu-menu navbar-right">
								        <li><a href="#"><?= strtoupper('Home') ?></a></li>
								        <li><a href="#mu-book-overview"><?= strtoupper('Our Team') ?></a></li>
								        <li><a href="#mu-author"><?= strtoupper('Author') ?></a></li>
							            <li><a href="#mu-pricing"><?= strtoupper('Price') ?></a></li>
							            <li><a href="#mu-testimonials"><?= strtoupper('Testimonials') ?></a></li>
							            <li><a href="#mu-contact"><?= strtoupper('Contact') ?></a></li>
							      	</ul>
							    </div><!-- /.navbar-collapse -->
						  	</div><!-- /.container-fluid -->
						</nav>
					</div>
				</header>
				<!-- End Header -->

				<!-- Start Featured Slider -->

				<section id="mu-hero">
					<div class="container">
						<div class="row">

							<div class="col-md-6 col-sm-6 col-sm-push-7">
								<div class="mu-hero-right">
									<img src="http://walnuthillcollege.edu/wp-content/uploads/2016/01/testimonial-one.png" alt="Ebook img">
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-sm-pull-6">
								<div class="mu-hero-left">
									<h1>Lynz Catering Services</h1>
									<p>Have you ever envisioned yourself as a glamorous executive chef who goes to “Iron Chef” and cooks everybody else’s bum to another planet? You are not the only one.

Becoming a chef can be a good career move only if you have the right personality, and it is definitely not as glorious as it seems on TV.

Working under constant pressure to deliver the food fast without sacrificing quality throughout the process, standing on your feet for long hours, enduring cuts and burns, heavy lifting, noise, heat, smokes and fumes, working on evenings, weekends and holidays and almost anytime when the rest of the world is not working are just a few of the things you must go through as a chef.</p>
									<span>
										<a href="#" class="mu-primary-btn">Evelyn Quaye
									(CEO)
								    </a></span>
								</div>
							</div>	

						</div>
					</div>
				</section>


				
				<!-- Start Featured Slider -->
				
				<!-- Start main content -->
					
				<main role="main">

					<!-- Start Counter -->
					<section id="mu-counter">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="mu-counter-area">

										<div class="mu-counter-block">
											<div class="row">

												<!-- Start Single Counter -->
												<div class="col-md-3 col-sm-6">
													<div class="mu-single-counter">
														<i class="fa fa-files-o" aria-hidden="true"></i>
														<div class="counter-value" data-count="650">0</div>
														<h5 class="mu-counter-name">Total Pages</h5>
													</div>
												</div>
												<!-- / Single Counter -->

												<!-- Start Single Counter -->
												<div class="col-md-3 col-sm-6">
													<div class="mu-single-counter">
														<i class="fa fa-file-text-o" aria-hidden="true"></i>
														<div class="counter-value" data-count="422">0</div>
														<h5 class="mu-counter-name">Chapters</h5>
													</div>
												</div>
												<!-- / Single Counter -->

												<!-- Start Single Counter -->
												<div class="col-md-3 col-sm-6">
													<div class="mu-single-counter">
														<i class="fa fa-users" aria-hidden="true"></i>
														<div class="counter-value" data-count="1055">0</div>
														<h5 class="mu-counter-name">Active Readers</h5>
													</div>
												</div>
												<!-- / Single Counter -->

												<!-- Start Single Counter -->
												<div class="col-md-3 col-sm-6">
													<div class="mu-single-counter">
														<i class="fa fa-trophy" aria-hidden="true"></i>
														<div class="counter-value" data-count="03">0</div>
														<h5 class="mu-counter-name">Got Awards</h5>
													</div>
												</div>
												<!-- / Single Counter -->

											</div>
										</div>


									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- End Counter -->

					<!-- Start Book Overview -->
					<section id="mu-book-overview">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="mu-book-overview-area">

										<div class="mu-heading-area">
											<h2 class="mu-heading-title"><?= strtoupper('Our Team') ?></h2>
											<span class="mu-header-dot"></span>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
										</div>

										<!-- Start Book Overview Content -->
										<div class="mu-book-overview-content">
											<div class="row">

												<!-- Book Overview Single Content -->
												<div class="col-md-3 col-sm-6">
													<div class="mu-book-overview-single">
														<span class="mu-book-overview-icon-box">
															<i aria-hidden="true"><img src="assets/images/chef.jpg" alt="Author Signature"></i>
														</span>
														<h4>Chapter One</h4>

														<input type="checkbox" class="read-more-state" id="<?php read_more('more',[1]) ?>" />
														<div class="read-more-wrap">
														  <div class="read-more-target">
														  	<p >He made headlines last month when the New York Times Magazine profiled him and put McGarry on the cover of its annual food issue. He happens to work professionally as a chef, but that's not the first thing you notice when talking to him. McGarry has a level of composure and poise that people twice his age don't possess. And, for someone who could easily be debilitated by his own delusion and the yes-men around him, he's incredibly self-aware. Between all that and the perfectly coiffed hair, you immediately understand why people are fascinated with McGarry and trip over themselves to give him opportunities.</p></div>
														</div>
														<label for="<?php read_more('more',[1]) ?>" class="read-more-trigger mu-order-btn"></label>
													</div>
												</div>

												<div class="col-md-3 col-sm-6">
													<div class="mu-book-overview-single">
														<span class="mu-book-overview-icon-box">
															<i aria-hidden="true"><img src="assets/images/chef.jpg" alt="Author Signature"></i>
														</span>
														<h4>Chapter One</h4>
														<!-- <p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p> -->
														<input type="checkbox" class="read-more-state" id="<?php read_more('more',[2]) ?>" />
														<div class="read-more-wrap">
														  <div class="read-more-target">
														  	<p >He made headlines last month when the New York Times Magazine profiled him and put McGarry on the cover of its annual food issue. He happens to work professionally as a chef, but that's not the first thing you notice when talking to him. McGarry has a level of composure and poise that people twice his age don't possess. And, for someone who could easily be debilitated by his own delusion and the yes-men around him, he's incredibly self-aware. Between all that and the perfectly coiffed hair, you immediately understand why people are fascinated with McGarry and trip over themselves to give him opportunities.</p></div>
														</div>
														<label for="<?php read_more('more',[2]) ?>" class="read-more-trigger mu-order-btn"></label>
													</div>
												</div>

												<div class="col-md-3 col-sm-6">
													<div class="mu-book-overview-single">
														<span class="mu-book-overview-icon-box">
															<i aria-hidden="true"><img src="assets/images/chef.jpg" alt="Author Signature"></i>
														</span>
														<h4>Chapter One</h4>
														<input type="checkbox" class="read-more-state" id="<?php read_more('more',[3]) ?>" />
														<div class="read-more-wrap">
														  <div class="read-more-target">
														  	<p >He made headlines last month when the New York Times Magazine profiled him and put McGarry on the cover of its annual food issue. He happens to work professionally as a chef, but that's not the first thing you notice when talking to him. McGarry has a level of composure and poise that people twice his age don't possess. And, for someone who could easily be debilitated by his own delusion and the yes-men around him, he's incredibly self-aware. Between all that and the perfectly coiffed hair, you immediately understand why people are fascinated with McGarry and trip over themselves to give him opportunities.</p></div>
														</div>
														<label for="<?php read_more('more',[3]) ?>" class="read-more-trigger mu-order-btn"></label>
													</div>
												</div>
												<!-- / Book Overview Single Content -->

												<!-- About Us Single Content -->
												<div class="col-md-3 col-sm-6">
													<div class="mu-book-overview-single">
														<span class="mu-book-overview-icon-box">
															<i aria-hidden="true"><img src="assets/images/black-chef3.jpg" alt="Author Signature"></i>
														</span>
														<h4>Chapter Two</h4>
														<input type="checkbox" class="read-more-state" id="<?php read_more('more',[4]) ?>" />
														<div class="read-more-wrap">
														  <div class="read-more-target">
														  	<p >He made headlines last month when the New York Times Magazine profiled him and put McGarry on the cover of its annual food issue. He happens to work professionally as a chef, but that's not the first thing you notice when talking to him. McGarry has a level of composure and poise that people twice his age don't possess. And, for someone who could easily be debilitated by his own delusion and the yes-men around him, he's incredibly self-aware. Between all that and the perfectly coiffed hair, you immediately understand why people are fascinated with McGarry and trip over themselves to give him opportunities.</p></div>
														</div>
														<label for="<?php read_more('more',[4]) ?>" class="read-more-trigger mu-order-btn"></label>
													</div>
												</div>
												
												<!-- About Us Single Content -->
												<div class="col-md-3 col-sm-6">
													<div class="mu-book-overview-single">
														<span class="mu-book-overview-icon-box">
															<i aria-hidden="true">
																<img src="assets/images/chef.jpg" alt="Author Signature">
															</i>
														</span>
														<h4>Chapter Four</h4>
														<input type="checkbox" class="read-more-state" id="<?php read_more('more',[6]) ?>" />
														<div class="read-more-wrap">
														  <div class="read-more-target">
														  	<p >He made headlines last month when the New York Times Magazine profiled him and put McGarry on the cover of its annual food issue. He happens to work professionally as a chef, but that's not the first thing you notice when talking to him. McGarry has a level of composure and poise that people twice his age don't possess. And, for someone who could easily be debilitated by his own delusion and the yes-men around him, he's incredibly self-aware. Between all that and the perfectly coiffed hair, you immediately understand why people are fascinated with McGarry and trip over themselves to give him opportunities.</p></div>
														</div>
														<label for="<?php read_more('more',[6]) ?>" class="read-more-trigger mu-order-btn"></label>
													</div>
												</div>

												<div class="col-md-3 col-sm-6">
													<div class="mu-book-overview-single">
														<span class="mu-book-overview-icon-box">
															<i aria-hidden="true">
																<img src="assets/images/chef.jpg" alt="Author Signature">
															</i>
														</span>
														<h4>Chapter Four</h4>
														<input type="checkbox" class="read-more-state" id="<?php read_more('more',[7]) ?>" />
														<div class="read-more-wrap">
														  <div class="read-more-target">
														  	<p >He made headlines last month when the New York Times Magazine profiled him and put McGarry on the cover of its annual food issue. He happens to work professionally as a chef, but that's not the first thing you notice when talking to him. McGarry has a level of composure and poise that people twice his age don't possess. And, for someone who could easily be debilitated by his own delusion and the yes-men around him, he's incredibly self-aware. Between all that and the perfectly coiffed hair, you immediately understand why people are fascinated with McGarry and trip over themselves to give him opportunities.</p></div>
														</div>
														<label for="<?php read_more('more',[7]) ?>" class="read-more-trigger mu-order-btn"></label>
													</div>
												</div>

												<div class="col-md-3 col-sm-6">
													<div class="mu-book-overview-single">
														<span class="mu-book-overview-icon-box">
															<i aria-hidden="true">
																<img src="assets/images/chef.jpg" alt="Chef Six">
															</i>
														</span>
														<h4>Chapter Four</h4>
														<input type="checkbox" class="read-more-state" id="<?php read_more('more',[8]) ?>" />
														<div class="read-more-wrap">
														  <div class="read-more-target">
														  	<p >He made headlines last month when the New York Times Magazine profiled him and put McGarry on the cover of its annual food issue. He happens to work professionally as a chef, but that's not the first thing you notice when talking to him. McGarry has a level of composure and poise that people twice his age don't possess. And, for someone who could easily be debilitated by his own delusion and the yes-men around him, he's incredibly self-aware. Between all that and the perfectly coiffed hair, you immediately understand why people are fascinated with McGarry and trip over themselves to give him opportunities.</p></div>
														</div>
														<label for="<?php read_more('more',[8]) ?>" class="read-more-trigger mu-order-btn"></label>
													</div>
												</div>

												<div class="col-md-3 col-sm-6">
													<div class="mu-book-overview-single">
														<span class="mu-book-overview-icon-box">
															<i aria-hidden="true"><img src="assets/images/black-chef3.jpg" alt="Author Signature"></i>
														</span>
														<h4>Chapter Three</h4>
														<input type="checkbox" class="read-more-state" id="<?php read_more('more',[5]) ?>" />
														<div class="read-more-wrap">
														  <div class="read-more-target">
														  	<p >He made headlines last month when the New York Times Magazine profiled him and put McGarry on the cover of its annual food issue. He happens to work professionally as a chef, but that's not the first thing you notice when talking to him. McGarry has a level of composure and poise that people twice his age don't possess. And, for someone who could easily be debilitated by his own delusion and the yes-men around him, he's incredibly self-aware. Between all that and the perfectly coiffed hair, you immediately understand why people are fascinated with McGarry and trip over themselves to give him opportunities.</p></div>
														</div>
														<label for="<?php read_more('more',[5]) ?>" class="read-more-trigger mu-order-btn"></label>
													</div>
												</div>

											</div>
										</div>
										<!-- End Book Overview Content -->

									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- End Book Overview -->

					<!-- Start Video Review -->
					<section id="mu-video-review">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="mu-video-review-area">

										<div class="mu-heading-area">
											<h2 class="mu-heading-title">Check Out Our Video Review</h2>
											<span class="mu-header-dot"></span>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
										</div>

										<!-- Start Video Review Content -->
										<div class="mu-video-review-content">
											<iframe class="mu-video-iframe" width="100%" height="480" src="https://www.youtube.com/embed/T4ySAlBt2Ug" frameborder="0" allowfullscreen></iframe>
										</div>
										<!-- End Video Review Content -->

									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- End Video Review -->

					<!-- Start Author -->
					<section id="mu-author">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="mu-author-area">

										<div class="mu-heading-area">
											<h2 class="mu-heading-title">About The Author</h2>
											<span class="mu-header-dot"></span>
										</div>

										<!-- Start Author Content -->
										<div class="mu-author-content">
											<div class="row">
												<div class="col-md-6">
													<div class="mu-author-image">
														<img src="assets/images/chef.jpg" alt="Author Image">
													</div>
												</div>
												<div class="col-md-6">
													<div class="mu-author-info">
														<h3>Evelyn Quaye</h3>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo suscipit facilis ipsum ullam reiciendis odio error iste neque ratione libero rem accusamus voluptatibus, nihil unde maiores sunt nisi. Assumenda, consectetur.</p>

														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, dolorem error neque! Dolores similique ut iusto odit esse ipsam, nesciunt pariatur animi minima maiores mollitia cupiditate ad ipsum deleniti perspiciatis!</p>
				
														<div></div>
														<div class="mu-social-media">
															<a href="#"><i class="fa fa-facebook"></i></a>
															<a href="#"><i class="fa fa-twitter"></i></a>
															<a href="#"><i class="fa fa-google-plus"></i></a>
															<a href="#"><i class="fa fa-linkedin"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End Author Content -->

									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- End Author -->

					<!-- Start Pricing -->
					<section id="mu-pricing">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="mu-pricing-area">

										<div class="mu-heading-area">
											<h2 class="mu-heading-title">Our Pricing Plans</h2>
											<span class="mu-header-dot"></span>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
										</div>

										<!-- Start Pricing Content -->
										<div class="mu-pricing-content">
											<div class="row">

												<!-- Pricing Single Content -->
												<div class="col-sm-6 col-md-4">
													<div class="mu-pricing-single">

														<div class="mu-pricing-single-head">
															<h4>STANDARD PLAN</h4>
															<p class="mu-price-tag">
																<span>$</span> 15
															</p>
														</div>

														<ul class="mu-price-feature">
															<li> Lorem ipsum dolor sit amet. </li>
															<li> Lorem ipsum dolor sit amet. </li>
															<li> Lorem ipsum dolor sit amet. </li>
															<li> Lorem ipsum dolor sit amet. </li>
														</ul>

														<div class="mu-pricing-single-footer">
															<a href="#" class="mu-order-btn">Order Now!</a>
														</div>

													</div>
												</div>
												<!-- / Pricing Single Content -->

												<!-- Pricing Single Content -->
												<div class="col-sm-6 col-md-4">
													<div class="mu-pricing-single mu-popular-price-tag">


														<div class="mu-pricing-single-head">
															<h4>PROFESSIONAL PLAN</h4>
															<p class="mu-price-tag">
																<span>$</span> 25
															</p>
														</div>

														<ul class="mu-price-feature">
															<li> Lorem ipsum dolor sit amet. </li>
															<li> Lorem ipsum dolor sit amet. </li>
															<li> Lorem ipsum dolor sit amet. </li>
															<li> Lorem ipsum dolor sit amet. </li>
														</ul>

														<div class="mu-pricing-single-footer">
															<a href="#" class="mu-order-btn">Order Now!</a>
														</div>
														

													</div>
												</div>
												<!-- / Pricing Single Content -->

												<!-- Pricing Single Content -->
												<div class="col-sm-6 col-md-4">
													<div class="mu-pricing-single">


														<div class="mu-pricing-single-head">
															<h4>EXCLUSIVE PLAN</h4>
															<p class="mu-price-tag">
																<span>$</span> 45
															</p>
														</div>

														<ul class="mu-price-feature">
															<li> Lorem ipsum dolor sit amet. </li>
															<li> Lorem ipsum dolor sit amet. </li>
															<li> Lorem ipsum dolor sit amet. </li>
															<li> Lorem ipsum dolor sit amet. </li>
														</ul>

														<div class="mu-pricing-single-footer">
															<a href="#" class="mu-order-btn">Order Now!</a>
														</div>
														
														
													</div>
												</div>
												<!-- / Pricing Single Content -->


											</div>
										</div>
										<!-- End Pricing Content -->

									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- End Pricing -->

					<!-- Start Testimonials -->
					<section id="mu-testimonials">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="mu-testimonials-area">
										<div class="mu-heading-area">
											<h2 class="mu-heading-title">What Our Clients Says</h2>
											<span class="mu-header-dot"></span>
										</div>

										<div class="mu-testimonials-block">
											<ul class="mu-testimonial-slide">

												<li>
													<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever."</p>
													<img class="mu-rt-img" src="assets/images/reader-1.jpg" alt="img">
													<h5 class="mu-rt-name"> - Alice Boga</h5>
													<span class="mu-rt-title">CEO, Apple Inc.</span>
												</li>

												<li>
													<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever."</p>
													<img class="mu-rt-img" src="assets/images/reader-2.jpg" alt="img">
													<h5 class="mu-rt-name"> - Jhon Doe</h5>
													<span class="mu-rt-title">Director, Google Inc.</span>
												</li>

												<li>
													<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever."</p>
													<img class="mu-rt-img" src="assets/images/reader-3.jpg" alt="img">
													<h5 class="mu-rt-name"> - Jessica Doe</h5>
													<span class="mu-rt-title">Web Developer</span>
												</li>

											</ul>
										</div>


									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- End Testimonials -->

				
					<!-- Start Contact -->
					<section id="mu-contact">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="mu-contact-area">

										<div class="mu-heading-area">
											<h2 class="mu-heading-title">Drop Us A Message</h2>
											<span class="mu-header-dot"></span>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
										</div>

										<!-- Start Contact Content -->
										<div class="mu-contact-content">

											<div id="form-messages"></div>
											<form method="post" action="<?= 'insert.php'?>" class="mu-contact-form">
												<div class="form-group"> 
												<div class="form-group">                
													<input type="text" class="form-control" placeholder="Subject of Your Message" id="title" name="title" required>
												</div>               
													<input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
												</div>

												<div class="form-group">                
													<input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" required>
												</div>  
												
												<div class="form-group">
													<textarea class="form-control" placeholder="Message" id="message" name="message" required></textarea>
												</div>
												<button type="submit" class="mu-send-msg-btn" name="save"><span><?= strtoupper('send') ?></span></button>
									        </form>

										</div>
										<!-- End Contact Content -->

									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- End Contact -->

					<!-- Start Google Map -->
					<section id="mu-google-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3970.449318737336!2d-0.24280038567519363!3d5.647946034289344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d5.6483929!2d-0.2407444!4m5!1s0xfdf9eb5aa5a6f4b%3A0x5d058445daf5f3c5!2sFolk+St%2C+Taifa%2C+Ghana!3m2!1d5.6484784!2d-0.24087309999999998!5e0!3m2!1sen!2sbd!4v1516803551300" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
					</section>
					<!-- End Google Map -->

				</main>
				
				<!-- End main content -->	
						
						
				<!-- Start footer -->
				<footer id="mu-footer" role="contentinfo">
					<div class="container">
						<div class="mu-footer-area">
							<div class="mu-social-media">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
							<p class="mu-copyright">&copy; <?= gmdate('Y') ?> Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>
						</div>
					</div>

				</footer>
				<!-- End footer -->
<?php include 'footer.php'; ?>