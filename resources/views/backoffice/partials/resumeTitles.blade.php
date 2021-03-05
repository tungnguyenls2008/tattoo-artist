<div id="resumeTitles" class="bg-light pt-3 my-5">
    <div>
        <h1 class="m-3">Resume Titles</h1>
        <div class="w-25 d-flex justify-content-around my-2">
            {{-- Create --}}
            <a href="/createResumeTitles" class="btn btn-success">ADD</a>
            {{-- Delete All --}}
            <form action="/destroyAllResumeTitles" method="POST">
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
            @foreach ($resumeTitles as $link)
            <tr>
                <th scope="row">{{$link->id}}</th>
                <td>{{$link->title}}</td>
                <td>{{$link->para}}</td>
                <td>
                    {{-- Show --}}
                    <a href="/showResumeTitles/{{$link->id}}" class="btn btn-primary">SHOW</a>
                </td>
                <td>
                    {{-- Edit --}}
                    <a href="/editResumeTitles/{{$link->id}}" class="btn btn-warning">EDIT</a>
                </td>
                <td>
                    {{-- Delete --}}
                    <form action="/destroyResumeTitles/{{$link->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>