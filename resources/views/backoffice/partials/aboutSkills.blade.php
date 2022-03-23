<div id="aboutSkills" class="bg-light pt-3 my-5">
    <div>
        <h1 class="m-3">About Skills</h1>
        <div class="w-25 d-flex justify-content-around my-2">
            {{-- Create --}}
            <a href="{{getenv('APP_URL')}}/createAboutSkills" class="btn btn-success">ADD</a>
            {{-- Delete All --}}
            <form action="{{getenv('APP_URL')}}/destroyAllAboutSkills" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark">DELETE ALL</button>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Skill</th>
                <th scope="col">Level</th>
                {{-- <th scope="col">Value</th> --}}
                {{-- Show --}}
                <th scope="col"> </th>
                {{-- Edit --}}
                <th scope="col"> </th>
                {{-- Delete --}}
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($aboutSkills as $link)
            <tr>
                <th scope="row">{{$link->id}}</th>
                <td>{{$link->skill}}</td>
                <td>{{$link->iValue}}</td>
                {{-- <td>{{$link->ariaValue}}</td> --}}
                <td>
                    {{-- Show --}}
                    <a href="{{getenv('APP_URL')}}/showAboutSkills/{{$link->id}}" class="btn btn-primary">SHOW</a>
                </td>
                <td>
                    {{-- Edit --}}
                    <a href="{{getenv('APP_URL')}}/editAboutSkills/{{$link->id}}" class="btn btn-warning">EDIT</a>
                </td>
                <td>
                    {{-- Delete --}}
                    <form action="{{getenv('APP_URL')}}/destroyAboutSkills/{{$link->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
