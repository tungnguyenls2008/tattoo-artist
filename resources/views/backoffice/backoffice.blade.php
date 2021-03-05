@extends('template.second')

@section('content')
    <section class="container mt-5">
        @include('backoffice.partials.navLinks')
        @include('backoffice.partials.socialLinks')

        @include('backoffice.partials.aboutTitles')
        @include('backoffice.partials.aboutMeImg')
        @include('backoffice.partials.aboutMeContents')
        @include('backoffice.partials.aboutMeInfos')
        @include('backoffice.partials.aboutCounts')
        @include('backoffice.partials.aboutSkills')
        @include('backoffice.partials.aboutInterests')

        @include('backoffice.partials.resumeTitles')
        @include('backoffice.partials.resumeTitles2')
        @include('backoffice.partials.resumePresentations')
        @include('backoffice.partials.resumeInfos')
        @include('backoffice.partials.resumeEducations')
        @include('backoffice.partials.resumeProfessionals')

        @include('backoffice.partials.portfolioTitles')
        @include('backoffice.partials.portfolioFilters')
        @include('backoffice.partials.portfolioDivs')

        @include('backoffice.partials.contactTitles')
        @include('backoffice.partials.contactCards')
        
    </section>
@endsection