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
                <th>ID</th>
                <th>Title</th>
                <th>Sub Title</th>
                <th>Big Image</th>
                <th>Small Image</th>
                   <th>Description</th>
                   <th> Client</th>
                   <th>Category</th>
                   <th>Action</th>
            </tr>
            @if(count($protfolios) > 0)
            @foreach($protfolios as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->title}}</td>
                <td>{{$row->sub_title}}</td>
                <td><img src="{{url($row->big_img)}}" style="height: 10vh"></td>
                <td><img src="{{url($row->small_img)}}"style="height: 10vh"></td>
                <td width="10">{{$row->description}}</td>
                <td>{{$row->client}}</td>
                <td>{{$row->category}}</td>
                <td>
                   
                          <a href="{{route('admin.protfolios.edit',$row->id)}}" class="btn btn-primary btn-sm">Edit</a>  

                          <a href="{{route('admin.protfolios.delete',$row->id)}}" class="btn btn-danger btn-sm">Delete</a> 
                      
                   
                </td>
            </tr>
            @endforeach
            @endif
        </table>
</main>
@endsection