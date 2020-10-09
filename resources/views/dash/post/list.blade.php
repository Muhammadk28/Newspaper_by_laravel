@extends('admin-layout')
@section('title','All Post List')

@section('dash-content')

<div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Category List</h3>
                    <div class="table-responsive">
                        <table class="table " >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Post Title</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    
                                </tr>
                            </thead>
                            @if (count($shows) < 1 )

                            <h3 class="box-title">There are no category list at the moment. Please Add Category</h3>
                            @else
                            
                            <tbody>
                            @foreach ($shows as $show)
                                <tr >
                                    <td>{{$show->id}}</td>
                                    <td><a href="/single_post/{{$show->id}}/{{$show->post_url}}">{{$show->post_title}}</a></td>
                                    <td>{{$show->category->category_name}}</td>
                                    <td>{{$show->user->username}}</td>
                                    <td> 
                                       <a class="btn btn-info" href="/edit-post/{{$show->id}}">Edit</a>
                                       <a class="btn btn-danger" href="/delete-post/{{$show->id}}">Delete</a>
                                    </td>
                                    
                                </tr>
                            @endforeach
                            </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection