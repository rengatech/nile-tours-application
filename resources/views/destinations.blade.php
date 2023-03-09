
@include('/partials/header')

@include('/partials/navbar')



<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_3.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Packages</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Destination</h1>
        </div>
      </div>
    </div>
  </div>

  <div style="display: flex;position: sticky;top: 0;z-index: 100000;">
      <a href="https://wa.link/zt2tjo"> <img src="./images/whatsapp.png" class="whatsapp"  ></a>
   </div>
   <div style="display: flex;position: sticky;top: 0;z-index: 100000;">
      <a href="#booknow1"> <img src="./images/Book-Now.png" class="booknow blink"  ></a>
   </div>
   <div class="bookForm" id="booknow1">
      <div class="d-flex justify-content-end">
          <img src="./images/close-outline.svg" width="50px" class="call-btn">
      </div>

      <h2 style="color: #0D7A3B;">GET A CALL BACK</h2>
      <small>I'll get back to you as quickly as possible</small>

      <form action="#">
        <input placeholder="Name" type="text" required />
        <input placeholder="Email" type="email" required />
        <input placeholder="Mobile Number" type="text" required />
        <input placeholder="Travel Date" type="date" required />
        <input placeholder="Number Of Members" type="number" required />
        <textarea placeholder="Message"></textarea>
        <input class="formBtn" type="submit" />
        <input class="formBtn" type="reset" />
      </form>
  </div>

<!-- destination Start-->
<section class="ftco-section ftco-destination">
	<div class="container">
		<div class="row justify-content-start mb-5 pb-3">
	  <div class="col-md-7 heading-section ftco-animate">
		  <span class="subheading">Featured</span>
		<h2 class="mb-4"><strong>Featured</strong> Destination</h2>
	  </div>
	</div>
		<div class="row">
			<div class="col-md-12">
				<div class="destination-slider owl-carousel ftco-animate">
					<div class="item">
						<div class="destination">
							<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Ooty</a></h3>
								<span class="listing">Place name</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="destination">
							<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-2.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Ooty</a></h3>
								<span class="listing"> Place name</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="destination">
							<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-3.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Mysore</a></h3>
								<span class="listing">Place name</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="destination">
							<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-4.png);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Ooty</a></h3>
								<span class="listing">Place name</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="destination">
							<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-5.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Mysore</a></h3>
								<span class="listing">Place name</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="destination">
							<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-6.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Ooty</a></h3>
								<span class="listing">Place name</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- destination end -->

@include('/partials/footer')
