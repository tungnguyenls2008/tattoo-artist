@extends('template.second')

@section('content')

    <div class="container mt-5 pt-5">
        <div class="bg-light py-3 px-4">
            <div class="mb-4">
                <h1>Add an element</h1>
            </div>

            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
    
            <form action="/storeResumeProfessionals" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Title : </label>
                    <input type="text" name="title" value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label for="">Date : </label>
                    <input type="text" name="date" value="{{old('date')}}">
                </div>
                <div class="form-group">
                    <label for="">Institution : </label>
                    <input type="text" name="institution" value="{{old('institution')}}">
                </div>
                <div class="form-group">
                    <label for="">Task 1 : </label>
                    <input type="text" name="task1" value="{{old('task1')}}">
                </div>
                <div class="form-group">
                    <label for="">Task 2 : </label>
                    <input type="text" name="task2" value="{{old('task2')}}">
                </div>
                <div class="form-group">
                    <label for="">Task 3 : </label>
                    <input type="text" name="task3" value="{{old('task3')}}">
                </div>
                <div class="form-group">
                    <label for="">Task 4 : </label>
                    <input type="text" name="task4" value="{{old('task4')}}">
                </div>
                <div class="form-group">
                    <label for="">Task 5 : </label>
                    <input type="text" name="task5" value="{{old('task5')}}">
                </div>
                <div class="form-group">
                    <label for="">Task 6 : </label>
                    <input type="text" name="task6" value="{{old('task6')}}">
                </div>
    
                <button type="submit" class="btn btn-success my-3">ADD</button>
            </form>
        </div>
    </div>
    
@endsection