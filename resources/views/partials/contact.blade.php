<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>{{$contactTitle[0]->title}}</h2>
        <p>{{$contactTitle[0]->para}}</p>
      </div>

      <div class="row mt-2">

        @foreach ($contactCards as $card)
          <div class="col-md-6 {{$card->divColClass}} d-flex align-items-stretch">
            <div class="info-box">
              <i class="{{$card->iClass}}"></i>
              <h3>{{$card->title}}</h3>
              <span style="display: none">{{$contactCount++}}</span>

              @if (($contactCount>2) || ($contactCount<2))
                <p>{{$card->description}}</p>
              @elseif ($contactCount == 2)
                <div class="social-links">
                  @foreach ($socialLinks as $link)
                    <a href="{{$link->href}}" target="_blank" class="{{$link->aClass}}"><i class="{{$link->iClass}}"></i></a>
                  @endforeach
                </div>
              @endif
              
            </div>
          </div>
        @endforeach

      </div>

      {{-- Action Form à changer --}}
      <form action="{{asset('forms/contact.php')}}" method="post" role="form" class="php-email-form mt-4">
        <div class="form-row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validate"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
</section><!-- End Contact Section -->