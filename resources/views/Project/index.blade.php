@include('header')

<div class="container-fluid mt-4">
    <a class="btn btn-primary mb-3" href="/add"><i class="fa fa-plus"></i> Tambah</a>
        <div class="card shadow">

        <table class="table table-borderless">

            <thead>
            <tr>
                <th scope="col">PROJECT NAME</th>
                <th scope="col">CLIENT</th>
                <th scope="col">PROJECT LEADER</th>
                <th scope="col">START DATE</th>
                <th scope="col">END DATE</th>
                <th scope="col">PROGRES</th>
                <th scope="col">ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{$d->project_name}}</td>
                <td>{{$d->clien}}</td>
                <td>{{$d->project_leader}}</td>
                <td>{{$d->start_date}}</td>
                <td>{{$d->end_date}}</td>

                <td >
                    <div class="progress mt-2">
                        <div class="progress-bar @if($d->progres<100)
                                                 bg-danger
                                                 @else
                                                 bg-success
                                                @endif
                        " role="progressbar" style="width: {{$d->progres}}%"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">{{$d->progres}}</div>
                    </div>
                </td>
                <td>
                    <a href="/update/{{$d->id}}" class="btn btn-success btn-circle ">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="/delete/{{$d->id}}" class="btn btn-danger btn-circle ">
                        <i class="fas fa-trash"></i>
                    </a>

                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('footer')
