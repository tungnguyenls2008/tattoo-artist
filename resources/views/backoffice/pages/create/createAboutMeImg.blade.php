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

            <form action="{{getenv('APP_URL')}}/storeAboutMeImg" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Src : </label>
                    <input type="text" name="src" value="{{old('src')}}">
                </div>
                <div class="form-group">
                    <label for="">Description : </label>
                    <input type="text" name="alt" value="{{old('alt')}}">
                </div>
                <button type="submit" class="btn btn-success my-3">ADD</button>
            </form>
        </div>
    </div>

@endsection
