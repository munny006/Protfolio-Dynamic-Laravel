@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"> Create </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> Dashboard </a></li>
            <li class="breadcrumb-item active"> Create </li>
        </ol>
            <form action="{{route('admin.protfolios.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
        <div class="row">
            <div class="form-group col-md-3 mt-3">
                <h3> Big Image </h3>
                <img src="{{asset('assets/img/big_img.jpg')}}" style="height: 30vh" class="img-thumbnail">
                
                <input type="file" name="big_img"class="mt-3">
             </div>
             <div class="form-group col-md-3 mt-3">
                <h3> Small Image </h3>
                <img src="{{asset('assets/img/small_img.jpg')}}" style="height: 20vh" class="img-thumbnail">
                <input type="file" name="small_img" class="mt-3">

            </div>
            <div class="form-group col-md-4 mt-3">
                <div class="mb-3">
                    <label for="title"> <h4>Title </h4></label>
                    <input type="text" name="title" class="form-control" id="title">

                </div>
                <div class="mb-3">
                    <label for="sub_title"> <h4> Sub Title </h4></label>
                    <input type="text" name="sub_title" class="form-control" id="sub_title">

                </div>
            </div>
                <div class="form-group col-md-6 mt-3">
                <h3> Description </h3>
                <textarea type="text" name="description" rows="5" class="form-control"></textarea>
            </div>
                <div class="form-group col-md-4 mt-3">
                <div class="mb-3">
                    <label for="title"> <h4> Client </h4></label>
                    <input type="text" name="client" class="form-control">

                </div>
                <div class="mb-3">
                    <label for="sub_title"> <h4> Category </h4></label>
                    <input type="text" name="category" class="form-control">

                </div>
            </div>

        

        </div>
        <input type="submit" name="submit" class="btn btn-warning my-5" value="Submit">

    </div>
</form>
</main>
@endsection