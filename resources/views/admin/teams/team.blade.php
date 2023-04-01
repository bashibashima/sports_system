@extends('../admin/layout')
@section('container')

<h3>Team</h3>
<a href="{{route('Add_team')}}">
        <input class="btn btn-success" type="submit" value="Add New Team">
</a><br><br>
                       <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Team Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datas as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>

                                    <div class="table-data-feature">
                                                        <a href="{{ route('edit', $data->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                        <a href="{{ route('delete', $data->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach    
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                           

                    @endsection































