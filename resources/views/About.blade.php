@extends('layouts.main')

@section('main_section')
@push('title')
    <title>About</title>
    @endpush
  <section class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('icon/about.png') }}" alt="About Us">
        </div>
        <div class="col-md-6">
          <h2>About Us</h2>
          <p>Reading is an incredible way to gain knowledge, explore new ideas, and discover different perspectives. It allows us to expand our minds, empathize with others, and connect with the world around us. As such, we believe that books are not just a source of entertainment, but a powerful tool for personal growth and development.

At Bookies, we are passionate about helping our customers find the perfect books to suit their interests and needs. Our extensive collection includes everything from classic literature to contemporary bestsellers, and we are constantly adding new titles to keep up with the latest trends and developments in the literary world.</p>
<p>We also believe in the importance of community and connection, which is why we strive to create a welcoming and inclusive atmosphere for all of our customers. Whether you are a seasoned bookworm or just getting started on your reading journey, our knowledgeable and friendly staff are always here to help you find your next great read.

So if you are looking for a place to discover new worlds, expand your horizons, and connect with like-minded individuals, look no further than Bookies. We are dedicated to providing you with the best possible reading experience, and we can't wait to help you find your next favorite book.</p>



        </div>
      </div>
    </div>
  </section>
@endsection
