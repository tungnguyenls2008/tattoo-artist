<div id="resumeEducations" class="bg-light pt-3 my-5">
    <div>
        <h1 class="m-3">Resume Educations</h1>
        <div class="w-25 d-flex justify-content-around my-2">
            {{-- Create --}}
            <a href="/createResumeEducations" class="btn btn-success">ADD</a>
            {{-- Delete All --}}
            <form action="/destroyAllResumeEducations" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark">DELETE ALL</button>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col">Institution</th>
                {{-- <th scope="col">Description</th> --}}
                {{-- Show --}}
                <th scope="col"> </th>
                {{-- Edit --}}
                <th scope="col"> </th>
                {{-- Delete --}}
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resumeEducations as $link)
            <tr>
                <th scope="row">{{$link->id}}</th>
                <td>{{$link->title}}</td>
                <td>{{$link->date}}</td>
                <td>{{$link->institution}}</td>
                {{-- <td>{{$link->description}}</td> --}}
                <td>
                    {{-- Show --}}
                    <a href="/showResumeEducations/{{$link->id}}" class="btn btn-primary">SHOW</a>
                </td>
                <td>
                    {{-- Edit --}}
                    <a href="/editResumeEducations/{{$link->id}}" class="btn btn-warning">EDIT</a>
                </td>
                <td>
                    {{-- Delete --}}
                    <form action="/destroyResumeEducations/{{$link->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>