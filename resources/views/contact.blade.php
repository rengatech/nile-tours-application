@include('/partials/header')

@include('/partials/navbar')


<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
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

      <section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h4">Contact Information</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3">
          <p><span>Address:</span> 20/4, OOty estate</p>
        </div>
        <div class="col-md-3">
          <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Email:</span> <a href="mailto:info@yoursite.com">example@email.com</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Website</span> <a href="#">yoursite.com</a></p>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

        <div class="col-md-6">
          <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62575.03261385947!2d76.65840187028057!3d11.411934660077936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8bd84b5f3d78d%3A0x179bdb14c93e3f42!2sOoty%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1676632868106!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>


@include('/partials/footer')
