@extends('template.second')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="py-3 px-4">
            <div class="card text-center" style="width: 70rem;">
                <div class="card-body">
                <h4 class="card-title">Src : {{$show->src}}</h4>
                <h5 class="card-subtitle mb-2 ">Description : {{$show->alt}}</h5>
                <a href="/backoffice" class="card-link">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection