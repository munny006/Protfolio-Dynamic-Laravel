@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"> Create </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> Dashboard </a></li>
            <li class="breadcrumb-item active"> Create </li>
        </ol>
            <form action="{{route('admin.abouts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
        <div class="row">
            <div class="form-group col-md-3 mt-3">
                <h3> Image </h3>
                <img src="{{asset('assets/img/big_img.jpg')}}" style="height: 30vh" class="img-thumbnail">
                
                <input type="file" name="img"class="mt-3">
             </div>
             
            <div class="form-group col-md-4 mt-3">
                <div class="mb-3">
                    <label for="title"> <h4> Title 1</h4></label>
                    <input type="text" name="title1" class="form-control" id="title">

                </div>
                <div class="mb-3">
                    <label for="sub_title"> <h4>  Title 2 </h4></label>
                    <input type="text" name="title2" class="form-control" id="sub_title">

                </div>
            </div>
                <div class="form-group col-md-6 mt-3">
                <h3> Description </h3>
                <textarea type="text" name="description" rows="5" class="form-control"></textarea>
            </div>
            </div>
        <input type="submit" name="submit" class="btn btn-info my-5" value="Submit">

    </div>
</form>
</main>
@endsection