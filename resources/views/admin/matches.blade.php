@extends('../admin/layout')
@section('container')

<h3>Matches</h3>

                       <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Team_1</th>
                                                <th>Team_2</th>
                                                <th>Venue</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        @foreach($data as $datas)
            <tr>
                <td>{{$datas->id}}</td>
                <td>{{$datas->team1}}</td>
                <td>{{$datas->team2}}</td>
                <td>{{$datas->venue}}</td>
                <td>{{$datas->date}}</td>
                <td>{{$datas->time}}</td>
            
                            </tr>
                            @endforeach    
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                           

                    @endsection


















