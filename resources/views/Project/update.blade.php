@include('header')
<div class="container-fluid mt-4">

    <div class="card shadow m-2">
        <h3>Tambah Data</h3>

        <form class="" method="POST"  action="/update">
            @csrf
            <div class="form-group m-3">
                <label>Project Name</label>
                <input type="hidden" name="id" value="{{$data->id}}" >
                <input type="text" class="form-control"  placeholder="Project Name" name="project_name" value="{{$data->project_name}}">
            </div>
            <div class="form-group m-3">
                <label for="exampleInputPassword1">Client</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Client" name="client" value="{{$data->clien}}">
            </div>
            <div class="form-group m-3">
                <label for="exampleInputPassword1">Project Leader</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Project Leader" name="leader" value="{{$data->project_leader}}">
            </div>
            <div class="form-group m-3">
                <label for="exampleInputPassword1">Start Date</label>
                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Start Date" name="start" value="{{$data->start_date}}">
            </div>
            <div class="form-group m-3">
                <label for="exampleInputPassword1">End Terakhir</label>
                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="End Terakhir" name="end" value="{{$data->end_date}}">
            </div>
            <div class="form-group m-3">
                <label for="exampleInputPassword1">Progres</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Progres" name="progres" value="{{$data->progres}}">
            </div>
            <button type="submit" class="btn btn-primary m-3">Submit</button>
        </form>

    </div>
</div>
@include('footer')
