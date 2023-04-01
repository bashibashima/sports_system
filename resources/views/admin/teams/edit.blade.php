@extends('../admin/layout')
@section('container')

<div class="card">
                                    <div class="card-header">
                                        <strong>Edit Team</strong> 
                                    </div>
                                    
                         
                           
                                
                                    <div class="card-body card-block"> 
                                        <form action="{{route('update',$data->id)}}" method="post"  class="form-horizontal">
                                        @csrf
                                            
                                            <div class="row form-group">

                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Team Name:</label>
                                                </div>  

                                                <div class="col-12 col-md-9">
                                                 <input type="text" name="name" placeholder="Name" value="{{ $data->name}}" class="form-control" >
                                                </div>

                                            </div>
                                            
                                           
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i>save
                                        </button>
                                        
                                    </div>
                                
 </form>  
 
@endsection
