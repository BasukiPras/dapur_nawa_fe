<img src="images/slider-01.jpg" width="1150" height="450" alt="">
	<div class="map-full">
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contact</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.320258389491!2d112.63819211086523!3d-7.965817178
			5983365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62835e1ade5f5%3A0xa2b57a790d814bb2!2sJl.%20Sa
			mpian%20No.33%2C%20Bunulrejo%2C%20Kec.%20Blimbing%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065126!5e0!3
			m2!1sid!2sid!4v1665548267096!5m2!1sid!2sid" width="1250" height="500"style="border:0;" allowfullscreen="" 
			loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
			<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. A, tempore? Nobis perspiciatis nostrum facilis, a rerum libero adipisci voluptatem corrupti, necessitatibus impedit fuga sunt excepturi incidunt placeat enim quam minima totam quas quos eos sequi suscipit vero officia? Enim quasi eveniet laboriosam tempore repellendus consectetur atque? Quod officiis dolores labore quia facere praesentium, nihil, corporis amet accusamus earum tempore similique dolore magnam. Iste vel voluptate nemo magnam quos incidunt. Perferendis, ipsa quas alias laboriosam eligendi amet dolorum aliquid beatae quasi accusamus cumque provident. Nemo molestias, aliquid blanditiis tempore quo facilis suscipit quasi possimus omnis! Ipsum at pariatur quaerat saepe ex.</p>
			<br>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form id="contactForm">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<select class="custom-select d-block form-control" id="guest" required data-error="Please Select Person">
									<option disabled selected>Please Select Person*</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									</select>
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">
									<button class="btn btn-common" id="submit" type="submit">Send Message</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
								</div>
							</div>
						</div>            
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							082144367052
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							dapoernawa@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							Jl. Sampiyan No.33 Malang,Indonesia.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$('.map-full').mapify({
			points: [
				{
					lat: 40.7143528,
					lng: -74.0059731,
					marker: true,
					title: 'Marker title',
					infoWindow: 'Dapoer Nawa'
				}
			]
		});	
	</script>
</body>
</html>