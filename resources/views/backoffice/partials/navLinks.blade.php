<div id="navLinks" class="pt-3 my-5">
    <div class="bg-light my-5 p-2">
        <div>
            <h1 class="m-3">Nav Links</h1>
            <div class="w-25 d-flex justify-content-around my-2">
                {{-- Create --}}
                <a href="/createNavLinks" class="btn btn-success">ADD</a>
                {{-- Delete All --}}
                <form action="/destroyAllNavLinks" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark">DELETE ALL</button>
                </form>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Link</th>
                    <th scope="col">Name</th>
                    {{-- Show --}}
                    <th scope="col"> </th>
                    {{-- Edit --}}
                    <th scope="col"> </th>
                    {{-- Delete --}}
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($navLinks as $link)
                <tr>
                    <th scope="row">{{$link->id}}</th>
                    <td>{{$link->href}}</td>
                    <td>{{$link->name}}</td>
                    <td>
                        {{-- Show --}}
                        <a href="/showNavLinks/{{$link->id}}" class="btn btn-primary">SHOW</a>
                    </td>
                    <td>
                        {{-- Edit --}}
                        <a href="/editNavLinks/{{$link->id}}" class="btn btn-warning">EDIT</a>
                    </td>
                    <td>
                        {{-- Delete --}}
                        <form action="/destroyNavLinks/{{$link->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>