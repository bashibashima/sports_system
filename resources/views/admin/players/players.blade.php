@extends('../admin/layout')
@section('container')

<h3>Players</h3>
<a href="{{route('Add_players')}}">
        <input class="btn btn-success" type="submit" value="Add New Players">
</a><br><br>
                       <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Players Name</th>
                                                <th>Team Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
        @foreach ($players as $player)
            <tr>
                <td>{{ $player->id }}</td>
                <td>{{ $player->name }}</td>
                <td>{{ $player->team_id }}</td>
            <td>
      

                                <div class="table-data-feature">
                                                        <a href="" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                        <a href="" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                                    </table>
                                </div>
                            </div> 
                           

                    @endsection































