
@include('/partials/header')

@include('/partials/navbar')

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">

    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Gallery</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Gallery</h1>
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
<!-- Gallery Start-->
<section>
<div  class="container">
  <span class="subheading">Gallery</span>
  <h2 class="mb-4"><strong>Gallery</strong> Place and Hotels</h2>
</div>

<div class="container container--gallery">
  <div class="row">


    <div class="col-sm-6">
      <a class="photo-zoom" href="images/destination-1.jpg">
        <img src="images/destination-1.jpg" alt="" />
      </a>
    </div>

    <div class="col-sm-6">
      <a class="photo-zoom" href="images/destination-2.jpg">
        <img src="images/destination-2.jpg" alt="" />
      </a>
    </div>

    <div class="col-sm-4">
      <a class="photo-zoom" href="images/destination-3.jpg">
        <img src="images/destination-3.jpg" alt="" />
      </a>
    </div>

    <div class="col-sm-4">
      <a class="photo-zoom" href="images/destination-5.jpg">
        <img src="images/destination-5.jpg" alt="" />
      </a>
    </div>

    <div class="col-sm-4">
      <a class="photo-zoom" href="images/destination-4.png">
        <img src="images/destination-4.png" alt="" />
      </a>
    </div>

    <div class="col-sm-6">
      <a class="photo-zoom" href="images/destination-6.jpg">
        <img src="images/destination-6.jpg" alt="" />
      </a>
    </div>

    <div class="col-sm-6">
      <a class="photo-zoom" href="images/hotel-3.jpg">
        <img src="images/hotel-3.jpg" alt="" />
      </a>
    </div>

    <div class="col-sm-5">
      <a class="photo-zoom" href="images/hotel-1.jpg">
        <img src="images/hotel-1.jpg" alt="" />
      </a>
    </div>

    <div class="col-sm-7">
      <a class="photo-zoom" href="images/hotel-4.jpg">
        <img src="images/hotel-4.jpg" alt="" />
      </a>
    </div>


  </div>
</div>
</section>
<!-- Gallery End-->

@include('/partials/footer')
