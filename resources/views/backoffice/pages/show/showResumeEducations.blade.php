@extends('template.second')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="py-3 px-4">
            <div class="card text-center" style="width: 50rem;">
                <div class="card-body">
                <h3 class="card-title">Title : {{$show->title}}</h3>
                <h4 class="card-subtitle mb-2 ">Date : {{$show->date}}</h4>
                <h4 class="card-title">Institution : {{$show->institution}}</h4>
                <h6 class="card-title">Description : {{$show->description}}</h6>
                <a href="/backoffice" class="card-link">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection