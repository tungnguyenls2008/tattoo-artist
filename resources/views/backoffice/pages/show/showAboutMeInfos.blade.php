@extends('template.second')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="py-3 px-4">
            <div class="card text-center" style="width: 70rem;">
                <div class="card-body">
                    <h5 class="card-subtitle mb-2 ">Icon : {{$show->icon}}</h5>
                <h4 class="card-title">Title : {{$show->title}}</h4>
                <h6 class="card-subtitle mb-2 ">Text : {{$show->text}}</h6>
                <a href="{{getenv('APP_URL')}}/backend" class="card-link">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
