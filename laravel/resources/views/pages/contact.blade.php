@extends('layout1')

@section('seoTitle')
    Contact Us
@endsection

@section('content')
<section style="padding: 200px 200px;
      display: block;">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="rectangle" id="container">
            <h3> office nr</h3>
          </div>
        </div>
        <div class="col">
          <div class="rectangle" id="container">
            <h3>Street Nr,</h3>
          </div>
        </div>
        <div class="col">
          <div class="rectangle" id="container">
            <h3>City Country</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h2 class="about-title featured-text text-center">Message us!</h2>
          <form action= "\contact" method="post" >
                @csrf
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                <input class="form-control" name="name" placeholder="Name" type="text" required />
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                <input class="form-control" name="email" placeholder="Email" type="email" required />
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                <input class="form-control" name="subject" placeholder="Subject" type="text" required />
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <textarea style="resize:vertical; padding-bottom: 10px;" class="form-control" placeholder="Message..."
                  rows="6" name="content" required>
                    </textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                <div class="g-recaptcha brochure__form__captcha"
                  data-sitekey="6LfCi7EaAAAAABY_xhgci0ngqXmYs4Bb4z3KNSK9"></div>

                <button type="submit" class="btn btn-primary" style="padding-top: 10px;">Send</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col">
          <h2 class="about-title featured-text text-center">Find us</h2>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21761.17515673568!2d28.83816997963868!3d47.017721566187355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c3c9a3d3673%3A0x3411e6e82e1629c!2sMagazinul%20Universal%20Central%20(UNIC)!5e0!3m2!1sen!2s!4v1618837573328!5m2!1sen!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>
@endsection
