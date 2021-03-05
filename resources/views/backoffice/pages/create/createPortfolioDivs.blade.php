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
    
            <form action="/storePortfolioDivs" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Filter : </label>
                    <input type="text" name="filter" value="{{old('filter')}}">
                </div>
                <div class="form-group">
                    <label for="">Src : </label>
                    <input type="text" name="imgsrc" value="{{old('imgsrc')}}">
                </div>
                <div class="form-group">
                    <label for="">Title : </label>
                    <input type="text" name="title" value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label for="">Description : </label>
                    <input type="text" name="description" value="{{old('description')}}">
                </div>
                <div class="form-group">
                    <label for="">Title : </label>
                    <input type="text" name="a1Title" value="{{old('a1Title')}}">
                </div>
                <div class="form-group">
                    <label for="">Link : </label>
                    <input type="text" name="a2href" value="{{old('a2href')}}">
                </div>
    
                <button type="submit" class="btn btn-success my-3">ADD</button>
            </form>
        </div>
    </div>
    
@endsection