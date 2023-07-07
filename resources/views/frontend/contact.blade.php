@extends('frontend.layout.main')
@section('content')
<!-- contact section -->

<section class="contact_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="form_container">
          <div class="heading_container">
            <h2>
              Contact Us
            </h2>
          </div>
          <form class="form form-horizontal" action="{{ route('frontend.contact', ['id' => $id]) }}" method="GET">
    @csrf
            <div>
              <input type="text" placeholder="Full Name " />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone number" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img src="images/contact-img.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end contact section -->
@endsection