@extends('admin-layout')
@section('title','Subscriber List')

@section('dash-content')
<div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Category List</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                   
                                    <th>Email</th>
                                    <th>Action</th>
                                  
                                    
                                </tr>
                            </thead>
                            @if (count($shows) < 1 )

                            <h3 class="box-title">There are no subscriber at the moment. </h3>
                            @else
                            
                            <tbody>
                            @foreach ($shows as $show)
                                <tr>
                                    <td>{{$show->id}}</td>
                                    <td>{{$show->first_name}} {{$show->last_name}}</td>
                                
                                    <td>{{$show->email}}</td>
                                    <td>
                                        @if($show->action = 1)
                                        <button class="btn btn-success">Active</button>
                                        @else
                                        <button class="btn btn-danger">InActive</button>
                                        @endif
                                    </td>
                                  
                                    
                                </tr>
                            @endforeach
                            </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>


@endsection