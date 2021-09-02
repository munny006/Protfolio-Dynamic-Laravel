@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"> List oF Abouts  </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> Dashboard </a></li>
            <li class="breadcrumb-item active"> List oF Abouts </li>
        </ol>
        <table class="table table-bordered">
            <tr class="text-center">
                <th>ID</th>
                <th>Title 1</th>
                <th>Title 2</th>
                <th>Image</th>
                <th>Description</th>
                 <th>Action</th>
            </tr>
            @if(count($abouts) > 0)
            @foreach($abouts as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->title1}}</td>
                <td>{{$row->title2}}</td>
                <td><img src="{{url($row->img)}}" style="height: 10vh"></td>
                <td width="10">{{$row->description}}</td>
                
                <td>
                   
                          <a href="{{route('admin.abouts.edit',$row->id)}}" class="btn btn-primary btn-sm">Edit</a>  

                          <a href="{{route('admin.abouts.delete',$row->id)}}" class="btn btn-danger btn-sm">Delete</a> 
                      
                   
                </td>
            </tr>
            @endforeach
            @endif
        </table>
</main>
@endsection