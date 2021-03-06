<?php 
	$PAGE_ID = 'home';
	$PAGE_TITLE = 'Welcome!';
	require('_header.php'); 
?>

		<!-- START BODY -->
		
		<div id="hero" class="flexslider">
            <ul class="slides">
				<!-- <li class="perfectfit">
					<iframe id="player_1" src="http://player.vimeo.com/video/51695756?api=1&player_id=player_1" width="1024" height="480" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</li> -->
              <li>
                <img src="http://farm9.staticflickr.com/8174/7983096533_0f3bd868f7_b.jpg" alt="">
              </li>
              <li>
                <img src="http://farm8.staticflickr.com/7121/7689743550_868edcd791_b.jpg" alt="">
              </li>
              <li>
                <img src="http://farm6.staticflickr.com/5328/6939445374_4ec92ccd41_b.jpg" alt="">
              </li>
            </ul>
<!--
            <a class="left carousel-control" href="#hero" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#hero" data-slide="next">&rsaquo;</a>
-->
        </div> <!-- /.flexslider -->
	
		<div class="container">
			<div class="row">
				<div id="main" class="span12 clearfix">
					<h2>Welcome to Gracepoint Riverside</h2>
						<p class="lead">Whether you are looking for a church to call home, or are new to Christianity, we invite you to join us!</p>
						<p class="hidden-phone">Find out more about us, when and where we meet, or view some of the things we've done recently:</p>
				</div> <!-- /#main -->

				<div class="buttons">

					<div id="date" class="span4">
						<a href="time-location.php">
							<div id="gradient" class="button">								
								<div id="clock">
									<p><?php echo $SERVICE_TIME; ?></p>
								</div>	
							</div>
						</a>
						<div class="subtext">
							<p><?php echo date('l, F jS', $NEXTSERVICE_TIMESTAMP); ?></p>
						</div>
					</div>
	
					<div id="address" class="span4">
						<a href="time-location.php">
							<div class="button">
								<?php if ($LOCATION[$USE_LOCATION_INDEX]['line1']) {
									echo '<p class="small">' . $LOCATION[$USE_LOCATION_INDEX]['line1'] . '<br />' .  $LOCATION[$USE_LOCATION_INDEX]['line2'] . '</p>'; 
									}
									else echo '<p>' . $LOCATION[$USE_LOCATION_INDEX]['name'] . '</p>';
								?>
							</div>
						</a>
						<div class="subtext">
							<p><?php if ($RIDES_TIME) { ?>
								We also provide rides!
								<?php } else { ?>
								No rides this week!
								<?php } ?>
							</p>
						</div>
					</div>
	
					<div id="events" class="span4">
						<a href="events.php">
							<div class="button">
								<p>Recent Events</p>
							</div>
						</a>
						<div class="subtext">
							<p>See what we've been up to</p>
						</div>
					</div>					
	
					<div id="learn" class="span6">
						<a href="aboutus.php">
							<div class="button">
								<p>Learn More About Us</p>
							</div>
						</a>
						<div class="subtext">
							<p>Get to know us, and learn what to expect</p>
						</div>
					</div>
					
					<div id="contact" class="span6">
						<a href="mailto:<?php echo $CONTACT_EMAIL; ?>">
							<div class="button">
								<div id="stamp">
									<p>Contact Us</p>
								</div>	
							</div>
						</a>
						<div class="subtext">
							<p>Got questions or concerns? Shoot us an email!</p>
						</div>
					</div>
					
				</div> <!-- /.buttons -->
					
			</div> <!-- /.row (outer) -->
			
			<div class="row"><div id="gp-biglogo" class="span12"></div></div>
	
		</div> <!-- /.container -->
		<!--END BODY -->

<?php require('_footer.php'); ?>
