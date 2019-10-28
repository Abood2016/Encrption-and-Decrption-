@extends('back-end.layouts.app')

@section('title')
   Posts
@endsection	

@section('content')

@component('back-end.layouts.header',['nav_title' => 'Posts'])
@endcomponent	


<div class="row">
		       <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                	
                  <div class="row">
                		<div class="col-md-8">
                			<h4 class="card-title ">Posts</h4>
                		  <p class="card-category"> List of Posts</p>
                        </div>
                        <div class="col-md-4 text-right">
                      <a href="{{route('posts.create')}}" class="btn btn-white btn-round">Add New Post</a>
                    </div>
                	</div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>
                          Post
                        </th>
                      
                          <th>
                        Registration at
                        </th>
                          <th class="text-right">
                          Action
                        </th>
                      </thead>
                      <tbody>
                        @foreach($posts as $post)
                        	<tr>
                        	<td>{{$post->id}}</td>
                            <td>
                              
                              {{$post->body}}
                            </td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
	                        <td class="td-actions text-right">
	                           @include('back-end.posts.Buttons.edit')
	                           @include('back-end.posts.Buttons.delete')
                            </td>
                        	</tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
	     </div>

@endsection

