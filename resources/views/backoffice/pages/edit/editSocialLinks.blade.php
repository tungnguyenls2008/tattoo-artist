@extends('template.second')

@section('content')

    <div class="container mt-5 pt-5">
        <div class="bg-light py-3 px-4">
            <div class="mb-4">
                <h1>Update the link</h1>
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
    
            <form action="/updateSocialLinks/{{$edit->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Link : </label>
                    <input type="text" name="href" value="{{old('href') ? old('href') : $edit->href}}">
                </div>
                <div class="form-group">
                    <label for="">Name : </label>
                    <input type="text" name="aClass" value="{{old('aClass') ? old('aClass') : $edit->aClass}}">
                </div>
                <div class="form-group">
                    <label for="">Icon : </label>
                    <input type="text" name="iClass" value="{{old('iClass') ? old('iClass') : $edit->iClass}}">
                </div>
    
                <button type="submit" class="btn btn-success my-3">UPDATE</button>
            </form>
        </div>
    </div>
    
@endsection