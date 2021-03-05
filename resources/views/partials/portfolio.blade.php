<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>{{$portfolioTitle[0]->title}}</h2>
        <p>{{$portfolioTitle[0]->para}}</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            @foreach ($portfolioFilters as $filter)
              <li data-filter="{{$filter->data}}">{{$filter->name}}</li>
            @endforeach
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        @foreach ($portfolioDivs as $div)
          <div class="col-lg-4 col-md-6 portfolio-item {{$div->filter}}">
            <div class="portfolio-wrap">
              <img src="{{asset($div->imgsrc)}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$div->title}}</h4>
                <p>{{$div->description}}</p>
                <div class="portfolio-links">
                  <a href="{{asset($div->imgsrc)}}" data-gall="portfolioGallery" class="venobox" title="{{$div->a1Title}}"><i class="bx bx-plus"></i></a>
                  <a href="{{$div->a2href}}" target="_blank" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        @endforeach

      </div>

    </div>
</section><!-- End Portfolio Section -->