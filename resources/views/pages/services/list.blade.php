@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"> List oF Services  </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> Dashboard </a></li>
            <li class="breadcrumb-item active"> List oF Services </li>
        </ol>
        <table class="table table-bordered">
            <tr class="text-center">
                <th width="15%">ID</th>
                <th width="15%">Icon</th>
                <th width="15%">Title</th>
                   <th width="40%">Description</th>
                   <th>Action</th>
            </tr>
            @if(count($service) > 0)
            @foreach($service as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->icon}}</td>
                <td>{{$row->title}}</td>
                <td>{{$row->description}}</td>
                <td>
                   
                          <a href="{{route('admin.services.edit',$row->id)}}" class="btn btn-primary">Edit </a>  

                          <a href="{{route('admin.services.delete',$row->id)}}" class="btn btn-danger">Delete </a> 
                      
                   
                </td>
            </tr>
            @endforeach
            @endif
        </table>
</main>
@endsection