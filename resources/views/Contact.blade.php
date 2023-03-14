@extends('layouts.main')

@section('main_section')
@push('title')
<title>Contact Us</title>
@endpush

<section class="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="contact-info">
          <h2>Contact Us</h2>
          <p>Feel free to contact us if you have any questions or feedback.</p>
          <div class="info-box">
            <i class="fas fa-map-marker-alt"></i>
            <div class="info-content">
              <h6>Address</h6>
              <p> <b>Headquarters,</b> Midway Centrum, Murree Road, Office 55, 56, 57, Rawalpindi, 46000, PK</p>
            </div>
          </div>
          <div class="info-box">
            <i class="fas fa-phone"></i>
            <div class="info-content">
              <h6>Phone</h6>
              <p>+923010102487</p>
            </div>
          </div>
          <div class="info-box">
            <i class="fas fa-envelope"></i>
            <div class="info-content">
              <h6>Email</h6>
              <p>info@bookies.com</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="contact-form">
          <h2>Get in Touch</h2>
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <textarea class="form-control" id="message" rows="5" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>





@endsection