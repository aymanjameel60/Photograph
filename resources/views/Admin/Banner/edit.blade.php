@extends('Admin.master')

@section('content')

<div class="row">
    <div class="page-header">
        <div class="page-title">
            <h4>Edit Banner</h4>
        </div>
    </div>
</div>
 
        <img src="{{asset($banner->img)}}" style="width: 50%;display: block;text-align: center;margin: auto;padding: 40px" alt="">
        <form class="form-register" action="{{route('admin.banner.store')}}" method="POST" style="background-color: #fff; padding:20px" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label >Banner</label>
                <input type="file" class="form-control" name="img"    value="{{$banner->face}}">
            </div>
            <div class="form-group">
                <label >Facebook</label>
                <input type="text" class="form-control" name="face"  required value="{{$banner->face}}">
            </div>
            <div class="form-group">
                <label >Twitter</label>
                <input type="text" class="form-control" name="twit"  required value="{{$banner->twit}}">
            </div>
            <div class="form-group">
                <label >TikTok</label>
                <input type="text" class="form-control" name="tiktok"  required value="{{$banner->tiktok}}">
            </div>
            <div class="form-group">
                <label >InstaGram</label>
                <input type="text" class="form-control" name="insta"  required value="{{$banner->insta}}">
            </div>
            <div class="form-group">
            <button class="btn btn-success">Save</button>
        </div>

        </form>
</div>




@endsection
