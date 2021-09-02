@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"> Edit </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> Dashboard </a></li>
            <li class="breadcrumb-item active"> Edit </li>
        </ol>
        <form action="{{route('admin.abouts.update',$abouts->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
          
        <div class="row">
            <div class="form-group col-md-3 mt-3">
                <h3> Image </h3>
                <img src="{{url($abouts->img)}}" style="height: 30vh" class="img-thumbnail">
                
                <input type="file" name="img"class="mt-3">
             </div>
             
            <div class="form-group col-md-4 mt-3">
                <div class="mb-3">
                    <label for="title1"> <h4>Title 1</h4></label>
                    <input type="text" name="title1" class="form-control" id="title" value="{{$abouts->title1}}">

                </div>
                <div class="mb-3">
                    <label for="title2"> <h4>  Title 2</h4></label>
                    <input type="text" name="title2" class="form-control" id="sub_title" value="{{$abouts->title2}}">

                </div>
            </div>
                <div class="form-group col-md-6 mt-3">
                <h3> Description </h3>
                <textarea type="text" name="description" rows="5" class="form-control">{{$abouts->description}}</textarea>
            </div>
                

        

        </div>
        <input type="submit" name="submit" class="btn btn-warning my-5" value="Submit">

    </div>
</form>
</main>
@endsection