@extends('backend/layout/app')
@section('title','Dashboard/work')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mt-4">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            <span>{{session()->get('success')}}</span>
                        </div>
                    @endif
                    @if(session()->has('danger'))
                        <div class="alert alert-danger">
                            <span>{{session()->get('danger')}}</span>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header bg-primary text-white"><i class="fas fa-plus"></i> Add Work</div>
                        <div class="card-body">
                            <form action="{{route('store.work')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                @csrf
                            	<div class="row">
                            		<div class="col-md-5">
                            			<div class="form-group">
		                                    <label for="name" class="control-label mb-1">Work Title <span class="text text-danger">(optional)</span> </label>
		                                    <input id="name" name="title" type="text" class="form-control" value="{{$title}}">
                                            <input type="hidden" name="id" value="{{$id}}">
		                                </div>
                                        
                            		</div>
                            		<div class="col-md-5">
                            			<div class="form-group">
		                                    <label for="name" class="control-label mb-1">Work Image <span class="text text-danger">*</span></label>
		                                    <input id="name" name="image" type="file" class="form-control" >
                                            @error('image')
                                            <div class="alert alert-danger">
                                                <span>{{$message}}</span>
                                            </div>
                                            @enderror
                                            <!-- display edit image -->
                                            @if($id)
                                                <img src="{{asset($image)}}" style="width: 120px;height: auto;">
                                            @endif
		                                </div>
                            		</div>
                                    <div class="col-md-2 mt-4 p pt-1">
                                    @if($id)
                                    <button type="submit" class="btn btn-primary btn-sm">
                                     <i class="fa fa-check-circle"></i> Update
                                    </button>
                                    @else
                                    <button type="submit" class="btn btn-primary btn-sm">
                                     <i class="fa fa-check-circle"></i> Add
                                    </button>
                                    @endif   
                                    </div>
                            	</div>
                                
                                  
                            </form>
                        	</div>
                    	</div>
                	</div>
            	</div>
            	<div class="row m-t-30">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($works as $work)
                                    <tr>
                                        <td>1</td>
                                        @if($work->title)
                                        <td>{{$work->title}}</td>
                                        @else
                                        <td>Don`t have</td>
                                        @endif
                                        
                                        <td><img src="{{asset($work->image)}}" style="width: 120px;height: auto;"></td>
                                        <td>
                                             <a href="{{url('dashboard/destroy-work')}}/{{$work->id}}" class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>

                                            <a href="{{url('/dashboard/add-work')}}/{{$work->id}}" class="btn btn-sm btn-outline-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection


