<div id="resumeProfessionals" class="bg-light pt-3 my-5">
    <div>
        <h1 class="m-3">Resume Professionals</h1>
        <div class="w-25 d-flex justify-content-around my-2">
            {{-- Create --}}
            <a href="{{getenv('APP_URL')}}/createResumeProfessionals" class="btn btn-success">ADD</a>
            {{-- Delete All --}}
            <form action="{{getenv('APP_URL')}}/destroyAllResumeProfessionals" method="POST">
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
                {{-- <th scope="col">Task 1</th>
                <th scope="col">Task 2</th>
                <th scope="col">Task 3</th>
                <th scope="col">Task 4</th>
                <th scope="col">Task 5</th>
                <th scope="col">Task 6</th> --}}
                {{-- Show --}}
                <th scope="col"> </th>
                {{-- Edit --}}
                <th scope="col"> </th>
                {{-- Delete --}}
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resumeProfessionals as $link)
            <tr>
                <th scope="row">{{$link->id}}</th>
                <td>{{$link->Title}}</td>
                <td>{{$link->date}}</td>
                <td>{{$link->institution}}</td>
                {{-- <td>{{$link->task1}}</td>
                <td>{{$link->task2}}</td>
                <td>{{$link->task3}}</td>
                <td>{{$link->task4}}</td>
                <td>{{$link->task5}}</td>
                <td>{{$link->task6}}</td> --}}
                <td>
                    {{-- Show --}}
                    <a href="{{getenv('APP_URL')}}/showResumeProfessionals/{{$link->id}}" class="btn btn-primary">SHOW</a>
                </td>
                <td>
                    {{-- Edit --}}
                    <a href="{{getenv('APP_URL')}}/editResumeProfessionals/{{$link->id}}" class="btn btn-warning">EDIT</a>
                </td>
                <td>
                    {{-- Delete --}}
                    <form action="{{getenv('APP_URL')}}/destroyResumeProfessionals/{{$link->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
