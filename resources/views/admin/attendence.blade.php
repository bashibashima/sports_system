@extends('../admin/layout')
@section('container')

<h3>Attendence</h3>

                       <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Player</th>
                                                <th>Attendence_status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        @foreach($data as $datas)
            <tr>
                <td>{{$datas->id}}</td>
                <td>{{$datas->player}}</td>
                <td>{{$datas->attendence}}</td>            
            
                            </tr>
                            @endforeach    
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                           

                    @endsection


















