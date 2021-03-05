<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>{{$resumeTitle[0]->title}}</h2>
        <p>{{$resumeTitle[0]->para}}</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">{{$resumeTitles2[0]->title}}</h3>
          <div class="resume-item pb-0">
            <h4>{{$resumePresentation[0]->name}}</h4>
            <p><em>{{$resumePresentation[0]->text}}</em></p>
            <p>
            <ul>
              @foreach ($resumeInfos as $info)
                <li>{{$info->info}}</li>
              @endforeach
            </ul>
            </p>
          </div>

          <h3 class="resume-title">{{$resumeTitles2[1]->title}}</h3>
          @foreach ($resumeEducations as $education)
            <div class="resume-item">
              <h4>{{$education->title}}</h4>
              <h5>{{$education->date}}</h5>
              <p><em>{{$education->institution}}</em></p>
              <p>{{$education->description}}</p>
            </div>
            @endforeach
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">{{$resumeTitles2[2]->title}}</h3>
          @foreach ($resumeProfessionals as $professional)
            <div class="resume-item">
              <h4>{{$professional->title}}</h4>
              <h5>{{$professional->date}}</h5>
              <p><em>{{$professional->institution}} </em></p>
              <p>
              <ul>
                <li>{{$professional->task1}}</li>
                <li>{{$professional->task2}} </li>
                <li>{{$professional->task3}}</li>
                <li>{{$professional->task4}}</li>
              </ul>
              </p>
            </div>
          @endforeach
        </div>
      </div>

    </div>
</section><!-- End Resume Section -->