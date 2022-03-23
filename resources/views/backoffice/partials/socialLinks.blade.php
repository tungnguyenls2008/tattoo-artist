<div id="socialLinks" class="bg-light pt-3 my-5">
    <div>
        <h1 class="m-3">Social Links</h1>
        <div class="w-25 d-flex justify-content-around my-2">
            {{-- Create --}}
            <a href="{{getenv('APP_URL')}}/createSocialLinks" class="btn btn-success">ADD</a>
            {{-- Delete All --}}
            <form action="{{getenv('APP_URL')}}/destroyAllSocialLinks" method="POST">
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
            {{-- <th scope="col">Icon</th> --}}
            {{-- Show --}}
            <th scope="col"> </th>
            {{-- Edit --}}
            <th scope="col"> </th>
            {{-- Delete --}}
            <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($socialLinks as $link)
            <tr>
                <th scope="row">{{$link->id}}</th>
                <td>{{$link->href}}</td>
                <td>{{$link->aClass}}</td>
                {{-- <td>{{$link->iClass}}</td> --}}
                <td>
                    {{-- Show --}}
                    <a href="{{getenv('APP_URL')}}/showSocialLinks/{{$link->id}}" class="btn btn-primary">SHOW</a>
                </td>
                <td>
                    {{-- Edit --}}
                    <a href="{{getenv('APP_URL')}}/editSocialLinks/{{$link->id}}" class="btn btn-warning">EDIT</a>
                </td>
                <td>
                    {{-- Delete --}}
                    <form action="{{getenv('APP_URL')}}/destroySocialLinks/{{$link->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
