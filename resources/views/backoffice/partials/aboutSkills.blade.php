<div id="aboutSkills" class="bg-light pt-3 my-5">
    <div>
        <h1 class="m-3">About Skills</h1>
        <div class="w-25 d-flex justify-content-around my-2">
            {{-- Create --}}
            <a href="/createAboutSkills" class="btn btn-success">ADD</a>
            {{-- Delete All --}}
            <form action="/destroyAllAboutSkills" method="POST">
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
                    <a href="/showAboutSkills/{{$link->id}}" class="btn btn-primary">SHOW</a>
                </td>
                <td>
                    {{-- Edit --}}
                    <a href="/editAboutSkills/{{$link->id}}" class="btn btn-warning">EDIT</a>
                </td>
                <td>
                    {{-- Delete --}}
                    <form action="/destroyAboutSkills/{{$link->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>