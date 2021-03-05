<div id="portfolioFilters" class="bg-light pt-3 my-5">
    <div>
        <h1 class="m-3">Portfolio Filters</h1>
        <div class="w-25 d-flex justify-content-around my-2">
            {{-- Create --}}
            <a href="/createPortfolioFilters" class="btn btn-success">ADD</a>
            {{-- Delete All --}}
            <form action="/destroyAllPortfolioFilters" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark">DELETE ALL</button>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Data</th>
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
            @foreach ($portfolioFilters as $link)
            <tr>
                <th scope="row">{{$link->id}}</th>
                <td>{{$link->data}}</td>
                <td>{{$link->name}}</td>
                <td>
                    {{-- Show --}}
                    <a href="/showPortfolioFilters/{{$link->id}}" class="btn btn-primary">SHOW</a>
                </td>
                <td>
                    {{-- Edit --}}
                    <a href="/editPortfolioFilters/{{$link->id}}" class="btn btn-warning">EDIT</a>
                </td>
                <td>
                    {{-- Delete --}}
                    <form action="/destroyPortfolioFilters/{{$link->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>