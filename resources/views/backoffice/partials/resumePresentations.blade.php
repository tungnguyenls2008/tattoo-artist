<div id="resumePresentations" class="bg-light pt-3 my-5">
    <div>
        <h1 class="m-3">Resume Presentations</h1>
        <div class="w-25 d-flex justify-content-around my-2">
            {{-- Create --}}
            <a href="/createResumePresentations" class="btn btn-success">ADD</a>
            {{-- Delete All --}}
            <form action="/destroyAllResumePresentations" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark">DELETE ALL</button>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
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
            @foreach ($resumePresentations as $link)
            <tr>
                <th scope="row">{{$link->id}}</th>
                <td>{{$link->name}}</td>
                {{-- <td>{{$link->text}}</td> --}}
                <td>
                    {{-- Show --}}
                    <a href="/showResumePresentations/{{$link->id}}" class="btn btn-primary">SHOW</a>
                </td>
                <td>
                    {{-- Edit --}}
                    <a href="/editResumePresentations/{{$link->id}}" class="btn btn-warning">EDIT</a>
                </td>
                <td>
                    {{-- Delete --}}
                    <form action="/destroyResumePresentations/{{$link->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>