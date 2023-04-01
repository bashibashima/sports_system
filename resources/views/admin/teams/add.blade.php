@extends('../admin/layout')
@section('container')

<div class="card">
                                    <div class="card-header">
                                        <strong>New Team</strong> 
                                    </div>
                                   
                                
                                    <div class="card-body card-block">
                                        <form action="{{route('store')}}" method="post"  class="form-horizontal">
                                        @csrf
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Team Name:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="text" name="name" placeholder="Name" value="{{old('name')}}" class="form-control" >
                                                @if ($errors->has('name'))
                                  <span class="text-danger">{{ $errors->first('name') }}</span>
                              @endif
                                                </div>
                                            </div>
                                            
                                           
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i>Create
                                        </button>
                                        
                                    </div>
                                
 </form>
 
@endsection
