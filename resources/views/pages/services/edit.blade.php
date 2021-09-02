@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"> Create </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> Dashboard </a></li>
            <li class="breadcrumb-item active"> Create </li>
        </ol>
        <form action="{{route('admin.services.update',$service->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
          
        <div class="row">
           <div class="form-group col-md-4 mt-3">
                <div class="mb-3">
                    <label for="icon"> <h4> Font Awesome Icon  </h4></label>
                    <input type="text" name="icon" class="form-control" id="icon" value="{{$service->icon}}">

                </div>
                <div class="mb-3">
                    <label for="title"> <h4> Title </h4></label>
                    <input type="text" name="title" class="form-control" id="title" value="{{$service->title}}">

                </div>
                    <div class="mb-3">
                    <label for="description"> <h4> Description  </h4></label>
                   <textarea type = "text" class="form-control" id="description" name="description"> value="{{$service->description}}"</textarea>

                </div>
                

            </div>

        </div>
        <input type="submit" name="submit" class="btn btn-primary mt-5" value="Submit">

    </div>
</form>
</main>
@endsection