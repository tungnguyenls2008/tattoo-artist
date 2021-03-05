@extends('template.second')

@section('content')

    <div class="container mt-5 pt-5">
        <div class="bg-light py-3 px-4">
            <div class="mb-4">
                <h1>Update the element</h1>
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
    
            <form action="/updateResumeProfessionals/{{$edit->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Title : </label>
                    <input type="text" name="title" value="{{old('title') ? old('title') : $edit->title}}">
                </div>
                <div class="form-group">
                    <label for="">Date : </label>
                    <input type="text" name="date" value="{{old('date') ? old('date') : $edit->date}}">
                </div>
                <div class="form-group">
                    <label for="">Institution : </label>
                    <input type="text" name="institution" value="{{old('institution') ? old('institution') : $edit->institution}}">
                </div>
                <div class="form-group">
                    <label for="">Task 1 : </label>
                    <input type="text" name="task1" value="{{old('task1') ? old('task1') : $edit->task1}}">
                </div>
                <div class="form-group">
                    <label for="">Task 2 : </label>
                    <input type="text" name="task2" value="{{old('task2') ? old('task2') : $edit->task2}}">
                </div>
                <div class="form-group">
                    <label for="">Task 3 : </label>
                    <input type="text" name="task3" value="{{old('task3') ? old('task3') : $edit->task3}}">
                </div>
                <div class="form-group">
                    <label for="">Task 4 : </label>
                    <input type="text" name="task4" value="{{old('task4') ? old('task4') : $edit->task4}}">
                </div>
                <div class="form-group">
                    <label for="">Task 5 : </label>
                    <input type="text" name="task5" value="{{old('task5') ? old('task5') : $edit->task5}}">
                </div>
                <div class="form-group">
                    <label for="">Task 6 : </label>
                    <input type="text" name="task6" value="{{old('task6') ? old('task6') : $edit->task6}}">
                </div>
    
                <button type="submit" class="btn btn-success my-3">UPDATE</button>
            </form>
        </div>
    </div>
    
@endsection