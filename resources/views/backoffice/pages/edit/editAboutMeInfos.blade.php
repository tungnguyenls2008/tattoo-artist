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

            <form action="{{getenv('APP_URL')}}/updateAboutMeInfos/{{$edit->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Icon : </label>
                    <input type="text" name="icon" value="{{old('icon') ? old('icon') : $edit->icon}}">
                </div>
                <div class="form-group">
                    <label for="">Title : </label>
                    <input type="text" name="title" value="{{old('title') ? old('title') : $edit->title}}">
                </div>
                <div class="form-group">
                    <label for="">Text : </label>
                    <input type="text" name="text" value="{{old('text') ? old('text') : $edit->text}}">
                </div>
                <button type="submit" class="btn btn-success my-3">UPDATE</button>
            </form>
        </div>
    </div>

@endsection
