@extends('template.second')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="py-3 px-4">
            <div class="card text-center" style="width: 70rem;">
                <div class="card-body">
                <h3 class="card-title">Title : {{$show->title}}</h3>
                <h3 class="card-title">Date : {{$show->date}}</h3>
                <h3 class="card-title">Institution : {{$show->institution}}</h3>
                <h5 class="card-title">Task 1 : {{$show->task1}}</h5>
                <h5 class="card-title">Task 2 : {{$show->task2}}</h5>
                <h5 class="card-title">Task 3 : {{$show->task3}}</h5>
                <h5 class="card-title">Task 4 : {{$show->task4}}</h5>
                <h5 class="card-title">Task 5 : {{$show->task5}}</h5>
                <h5 class="card-title">Task 6 : {{$show->task6}}</h5>
                <a href="/backoffice" class="card-link">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection