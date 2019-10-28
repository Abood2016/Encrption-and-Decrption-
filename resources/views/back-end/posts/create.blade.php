@extends('back-end.layouts.app')

@section('title')
	Create Post
@endsection	

@section('content')

@component('back-end.layouts.header',['nav_title' => 'Post'])
@endcomponent	

	<div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create Post</h4>
                  <p class="card-category">Add new Post</p>
                </div>
                <div class="card-body">
                  <form action="{{route('posts.store')}}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-12" >
		                    <div class="form-group bmd-form-group">
		                          <label class="bmd-label-floating">Post body</label>
		                          <textarea cols="30" rows="5" name ="body" class="form-control" value="{{ old('body') }}"></textarea>
		                          <span class="text-danger">{{ $errors->has('body') ? $errors->first('body') : ''}}</span>
		                   </div>
                		  </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-left">Create</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>

@endsection