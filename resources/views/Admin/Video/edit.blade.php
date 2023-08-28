@extends('Admin.master')

@section('content')

<div class="row">
    <div class="page-header">
        <div class="page-title">
            <h4>Edit Video</h4>
        </div>
    </div>
</div>


<form class="form-register" action="{{ route('admin.video.update', $gall->id) }}"
    method="POST" style="background-color: #fff; padding:20px" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Video</label>
        <img src="{{asset($gall->img)}}" width="100" style="border-radius: 5px">
        <video src="{{asset($gall->video)}}" width="100" style="border-radius: 5px"></video>
        <input type="file" class="form-control" name="img"  >
        <input type="file" class="form-control" name="video"  >
    </div>
    <div class="form-group">
        <button class="btn btn-success">Save</button>
    </div>

</form>
</div>




@endsection
