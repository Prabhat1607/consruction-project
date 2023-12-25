<?php
    include_once('header.php');

        $sql_service = "SELECT * FROM service_tbl";
        $rs_service = mysqli_query($con, $sql_service);
        if (!$rs_service) 
        {
            die('service not Found.' . mysqli_error($con));
        }
                

?>
    
	
	<!-- Main -->
	<section id="main" class="category-page">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="post-wrap">
						<article class="post">
                        <?php
					
					while ($row_service = mysqli_fetch_array($rs_service)) 
					{
                        ?>
							<div class="thumb">
								<a href="#"><img src="../admin-pro/photos/service-image/<?php echo $row_service['profile']; ?>" alt="img" style="width: 364px; height: 244px;"></a>
							</div>
							<div class="content">
								<div class="cat">
									<a href="#"><?php echo $row_service['service_type']; ?></a>
								</div>
								<h3><a href="#"><?php echo $row_service['title']; ?></a></h3>
								<p class="excerpt-entry"><?php echo $row_service['description']; ?></p>
								<!-- <div class="activity">
									<span class="views">345</span><span class="comment"><a href="#">15</a></span>
								</div> -->
							</div>
                            <?php
                    }
                    ?>
						</article><!--  /.post -->
						
						
					</div><!-- /.social-media-posts -->
				</div><!-- /.col-md-8 -->
				<div class="col-md-4">
					<div class="sidebar-widget-1">
						<div class="widget widget-tabs2">
							<div class="tabs style2">
								<ul class="menu-tab">
									<li class="active"><a href="#">5 Most Popular</a></li>
								   	<li><a href="#">5 Most Emailed</a></li>
								</ul><!-- /.menu-tab -->
								<div class="content-tab">
								   	<div class="content">
										<ul class="most-popular">
											<li>
												<div class="order">1</div>
												<p><a href="#">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
											</li>
											<li>
												<div class="order">2</div>
												<p><a href="#">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
											</li>
											<li>
												<div class="order">3</div>
												<p><a href="#">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
											</li>
											<li>
												<div class="order">4</div>
												<p><a href="#">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
											</li>
											<li>
												<div class="order">5</div>
												<p><a href="#">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
											</li>
										</ul>
								   	</div><!-- /.content-list -->
								   	<div class="content">
										<ul class="most-popular">
											<li>
												<div class="order">1</div>
												<p><a href="#">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
											</li>
											<li>
												<div class="order">2</div>
												<p><a href="#">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
											</li>
										</ul>
								   	</div><!-- /.comments -->
								</div><!-- /.content-tab -->
							</div><!-- /.tabs -->
						</div><!-- /.widget-tabs2 -->
						<div class="widget widget-ads">
							<a href="#"><img src="images/ad.jpg" alt="image"></a>
							<p class="text-ad">Advertisement</p>
						</div><!-- /.widget-ads -->
						<div class="widget widget-tabs">
							<div class="tabs">
								<ul class="menu-tab">
									<li class="active"><a href="#">Comments</a></li>
								   	<li><a href="#">Popular</a></li>
								   	<li><a href="#">Tags</a></li>
								</ul><!-- /.menu-tab -->
								<div class="content-tab">
								   	<div class="content">
										<ul class="comments">
											<li>
												<div class="avatar">
													<a href="#"><img src="images/user.jpg" alt="image"></a>
												</div>
												<p><a href="#">Jack</a> on <a href="#">I think your best bet would be to start or join a startup.</a> 2 hours</p>
											</li>	
											<li>
												<div class="avatar">
													<a href="#"><img src="images/user.jpg" alt="image"></a>
												</div>
												<p><a href="#">Jack</a> on <a href="#">I think your best bet would be to start or join a startup.</a> 2 hours</p>
											</li>
											<li>
												<div class="avatar">
													<a href="#"><img src="images/user.jpg" alt="image"></a>
												</div>
												<p><a href="#">Jack</a> on <a href="#">I think your best bet would be to start or join a startup.</a> 2 hours</p>
											</li>
											<li>
												<div class="avatar">
													<a href="#"><img src="images/user.jpg" alt="image"></a>
												</div>
												<p><a href="#">Jack</a> on <a href="#">I think your best bet would be to start or join a startup.</a> 2 hours</p>
											</li>
											<li>
												<div class="avatar">
													<a href="#"><img src="images/user.jpg" alt="image"></a>
												</div>
												<p><a href="#">Jack</a> on <a href="#">I think your best bet would be to start or join a startup.</a> 2 hours</p>
											</li>
										</ul>
								   	</div><!-- /.comments -->
								   	<div class="content">
										<ul class="pop-posts">
											<li>
												<div class="thumb">
													<a href="#"><img alt="" src="images/thumbs/1.jpg"></a>
												</div>
												<div class="text">
													<a href="#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div>
											</li>
											<li>
												<div class="thumb">
													<a href="#"><img alt="" src="images/thumbs/1.jpg"></a>
												</div>
												<div class="text">
													<a href="#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div>
											</li>
											<li>
												<div class="thumb">
													<a href="#"><img alt="" src="images/thumbs/1.jpg"></a>
												</div>
												<div class="text">
													<a href="#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div> 
											</li>
											<li>
												<div class="thumb">
													<a href="#"><img alt="" src="images/thumbs/1.jpg"></a>
												</div>
												<div class="text">
													<a href="#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div> 
											</li>
											<li>
												<div class="thumb">
													<a href="#"><img alt="" src="images/thumbs/1.jpg"></a>
												</div>
												<div class="text">
													<a href="#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div>
											</li>
										</ul>
								   	</div><!-- /.comments -->
								   	<div class="content">
										<div class="tags">
											<a href="#">business</a>
											<a href="#">themeforest</a>
											<a href="#">good news</a>
											<a href="#">startups</a>
											<a href="#">red</a>
											<a href="#">politics</a>
											<a href="#">europe</a>
											<a href="#">asia</a>
										</div>
								   	</div><!-- /.comments -->
								</div><!-- /.content-tab -->
							</div><!-- /.tabs -->
						</div><!-- /.widget-tabs -->
						<div class="widget widget-follow-us">
							<h5 class="widget-title text-dark">Follow Us</h5>
							<div class="socials">
								<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
								<a class="google" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="youtube" href="#"><i class="fa fa-youtube"></i></a>
								<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
							</div>
						</div><!-- /.widget-follow-us -->
						<div class="widget widget-categories">
							<h5 class="widget-title">Archives</h5>
							<ul class="cat-list">
								<li><a href="#">December 2013 <span>(0)</span></a></li>
								<li><a href="#">November 2013 <span>(22)</span></a></li>
								<li><a href="#">October 2013 <span>(17)</span></a></li>
								<li><a href="#">June 2013 <span>(16)</span></a></li>
								<li><a href="#">May 2013 <span>(14)</span></a></li>
								<li><a href="#">April 2013 <span>(10)</span></a></li>
								<li><a href="#">March 2013 <span>(1)</span></a></li>
								<li><a href="#">December 2012 <span>(1)</span></a></li>
							</ul>
						</div><!-- /.widget-categories -->
						<div class="widget widget-subscribe">
							<h5 class="widget-title">Good News Newsetter</h5>
							<p>Subscribe to our email newsletter for good news, sent out every Monday.</p>
							<form method="post" action="#" id="subscribe-form" data-mailchimp="true">
								<div id="subscribe-content">
									<div class="input">
									   <input type="text" id="subscribe-email" name="subscribe-email" placeholder="Email">
									</div>
									<div class="button">
									   <button type="button" id="subscribe-button" class="" title="Subscribe now">Subscribe</button>
									</div>
								</div>
								<div id="subscribe-msg"></div>
							</form>
						</div><!-- /.widget-subscribe -->
					</div><!-- /.sidebar -->
				</div><!-- /.col-md-4 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>


<?php
    include_once('Footer.php');
?>