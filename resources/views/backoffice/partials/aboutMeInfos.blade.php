<div id="aboutMeInfos" class="bg-light pt-3 my-5">
    <div>
        <h1 class="m-3">About MeInfos</h1>
        <div class="w-25 d-flex justify-content-around my-2">
            {{-- Create --}}
            <a href="/createAboutMeInfos" class="btn btn-success">ADD</a>
            {{-- Delete All --}}
            <form action="/destroyAllAboutMeInfos" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark">DELETE ALL</button>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Icon</th>
                <th scope="col">Title</th>
                <th scope="col">Text</th>
                {{-- Show --}}
                <th scope="col"> </th>
                {{-- Edit --}}
                <th scope="col"> </th>
                {{-- Delete --}}
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($aboutMeInfos as $link)
            <tr>
                <th scope="row">{{$link->id}}</th>
                <td>{{$link->icon}}</td>
                <td>{{$link->title}}</td>
                <td>{{$link->text}}</td>
                <td>
                    {{-- Show --}}
                    <a href="/showAboutMeInfos/{{$link->id}}" class="btn btn-primary">SHOW</a>
                </td>
                <td>
                    {{-- Edit --}}
                    <a href="/editAboutMeInfos/{{$link->id}}" class="btn btn-warning">EDIT</a>
                </td>
                <td>
                    {{-- Delete --}}
                    <form action="/destroyAboutMeInfos/{{$link->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>