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
    
            <form action="/updateAboutSkills/{{$edit->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Skill : </label>
                    <input type="text" name="skill" value="{{old('skill') ? old('skill') : $edit->skill}}">
                </div>
                <div class="form-group">
                    <label for="">Level : </label>
                    <input type="text" name="iValue" value="{{old('iValue') ? old('iValue') : $edit->iValue}}">
                </div>
                <div class="form-group">
                    <label for="">Number : </label>
                    <input type="text" name="ariaValue" value="{{old('ariaValue') ? old('ariaValue') : $edit->ariaValue}}">
                </div>
                
                <button type="submit" class="btn btn-success my-3">UPDATE</button>
            </form>
        </div>
    </div>
    
@endsection