<div id="aboutCounts" class="bg-light my-5 p-2">
    <div>
        <h1 class="m-3">About Counts</h1>
        <div class="w-25 d-flex justify-content-around my-2">
            {{-- Create --}}
            <a href="/createAboutCounts" class="btn btn-success">ADD</a>
            {{-- Delete All --}}
            <form action="/destroyAllAboutCounts" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark">DELETE ALL</button>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                {{-- <th scope="col">Margins</th>
                <th scope="col">Icon</th> --}}
                <th scope="col">Numbers</th>
                <th scope="col">Description</th>
                {{-- Show --}}
                <th scope="col"> </th>
                {{-- Edit --}}
                <th scope="col"> </th>
                {{-- Delete --}}
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($aboutCounts as $link)
            <tr>
                <th scope="row">{{$link->id}}</th>
                {{-- <td>{{$link->divColClass}}</td>
                <td>{{$link->iClass}}</td> --}}
                <td>{{$link->number}}</td>
                <td>{{$link->description}}</td>
                <td>
                    {{-- Show --}}
                    <a href="/showAboutCounts/{{$link->id}}" class="btn btn-primary">SHOW</a>
                </td>
                <td>
                    {{-- Edit --}}
                    <a href="/editAboutCounts/{{$link->id}}" class="btn btn-warning">EDIT</a>
                </td>
                <td>
                    {{-- Delete --}}
                    <form action="/destroyAboutCounts/{{$link->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>