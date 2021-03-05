<div id="contactCards" class="bg-light pt-3 my-5">
    <div>
        <h1 class="m-3">Contact Cards</h1>
        <div class="w-25 d-flex justify-content-around my-2">
            {{-- Create --}}
            <a href="/createContactCards" class="btn btn-success">ADD</a>
            {{-- Delete All --}}
            <form action="/destroyAllContactCards" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark">DELETE ALL</button>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                {{-- <th scope="col">Margin</th> --}}
                {{-- <th scope="col">Icon</th> --}}
                <th scope="col">Title</th>
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
            @foreach ($contactCards as $link)
            <tr>
                <th scope="row">{{$link->id}}</th>
                {{-- <td>{{$link->divColClass}}</td> --}}
                {{-- <td>{{$link->iClass}}</td> --}}
                <td>{{$link->title}}</td>
                <td>{{$link->description}}</td>
                <td>
                    {{-- Show --}}
                    <a href="/showContactCards/{{$link->id}}" class="btn btn-primary">SHOW</a>
                </td>
                <td>
                    {{-- Edit --}}
                    <a href="/editContactCards/{{$link->id}}" class="btn btn-warning">EDIT</a>
                </td>
                <td>
                    {{-- Delete --}}
                    <form action="/destroyContactCards/{{$link->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>