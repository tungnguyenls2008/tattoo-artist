@extends('template.second')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="py-3 px-4">
            <div class="card text-center" style="width: 30rem;">
                <div class="card-body">
                <h3 class="card-title">Data : {{$show->data}}</h3>
                <h4 class="card-subtitle mb-2 ">Name : {{$show->name}}</h4>
                <a href="{{getenv('APP_URL')}}/backend" class="card-link">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
