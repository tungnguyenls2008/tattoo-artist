<div id="portfolioDivs" class="bg-light pt-3 my-5">
    <div>
        <h1 class="m-3">Portfolio Divs</h1>
        <div class="w-25 d-flex justify-content-around my-2">
            {{-- Create --}}
            <a href="/createPortfolioDivs" class="btn btn-success">ADD</a>
            {{-- Delete All --}}
            <form action="/destroyAllPortfolioDivs" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark">DELETE ALL</button>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                {{-- <th scope="col">Filter</th> --}}
                {{-- <th scope="col">Src</th> --}}
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                {{-- <th scope="col">Title</th> --}}
                <th scope="col">Link</th>
                {{-- Show --}}
                <th scope="col"> </th>
                {{-- Edit --}}
                <th scope="col"> </th>
                {{-- Delete --}}
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portfolioDivs as $link)
            <tr>
                <th scope="row">{{$link->id}}</th>
                {{-- <td>{{$link->filter}}</td> --}}
                {{-- <td>{{$link->imgsrc}}</td> --}}
                <td>{{$link->title}}</td>
                <td>{{$link->description}}</td>
                {{-- <td>{{$link->a1Title}}</td> --}}
                <td>{{$link->a2href}}</td>
                <td>
                    {{-- Show --}}
                    <a href="/showPortfolioDivs/{{$link->id}}" class="btn btn-primary">SHOW</a>
                </td>
                <td>
                    {{-- Edit --}}
                    <a href="/editPortfolioDivs/{{$link->id}}" class="btn btn-warning">EDIT</a>
                </td>
                <td>
                    {{-- Delete --}}
                    <form action="/destroyPortfolioDivs/{{$link->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>