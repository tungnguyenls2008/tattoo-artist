<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio - backend</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body style="background: url('{{asset('img/bg.jpg')}}')">
    {{-- Header --}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark my-3 mx-5 fixed-top">
            <a class="navbar-brand" href="/">FrontOffice</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Home
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#navLinks">Nav Links</a>
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#socialLinks">Social Links</a>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#aboutTitles">About Titles</a>
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#aboutMeImg">About MeImage</a>
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#aboutMeContents">About MeContents</a>
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#aboutMeInfos">About MeInfos</a>
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#aboutCounts">About Counts</a>
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#aboutSkills">About Skills</a>
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#aboutInterests">About Interests</a>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Resume
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#resumeTitles">Resume Titles</a>
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#resumeTitles2">Resume Subtitles</a>
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#resumePresentations">Resume Presentation</a>
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#resumeInfos">Resume Infos</a>
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#resumeEducations">Resume Education</a>
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#resumeProfessionals">Resume Professional</a>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Portfolio
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#portfolioTitles">Portfolio Titles</a>
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#portfolioFilters">Portfolio Filters</a>
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#portfolioDivs">Portfolio Divs</a>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contact
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#contactTitles">Contact Titles</a>
                    <a class="dropdown-item" href="{{getenv('APP_URL')}}/backend#contactCards">Contact Cards</a>
                  </div>
                </li>
              </ul>
            </div>
        </nav>
    </header>

    {{-- Content --}}
    @yield('content')


    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
