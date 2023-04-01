@extends('../admin/layout')
@section('container')

<div class="card">
                                    <div class="card-header">
                                        <strong>New Players</strong> 
                                    </div>
                                   
                                
                                    <div class="card-body card-block">
                                        <form action="{{route('store_players')}}" method="post"  class="form-horizontal">
                                        @csrf
                                            
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Team Name:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <select name="team_id" id="select" class="form-control">
                                                    @foreach($datas as $data)
                                                    {
                                                         <option value="{{$data->id}}">{{$data->name}}</option>
                                                     }
                                                     @endforeach
                                                    </select>
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="text" name="name" placeholder="Name" value="{{old('name')}}" class="form-control" require>
                                                @if ($errors->has('name'))
                                  <span class="text-danger">{{ $errors->first('name') }}</span>
                              @endif
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Email:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="text" name="email" placeholder="Email" value="{{old('email')}}" class="form-control" require>
                                                @if ($errors->has('email'))
                                  <span class="text-danger">{{ $errors->first('email') }}</span>
                              @endif
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Date of Birth</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="dob" name="dob" placeholder="Date Of Birth" class="form-control" require>
                                                </div>
                                            </div>
                                           
                                            <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                    <input class="form-control" type="password" name="password" placeholder="Password" require>
                                </div>

                               
                                           
                                           
                                        

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i>Create
                                        </button>
                                        
                                    </div>
                                
 </form>
 
@endsection
