@extends('Admin.master')

@section('content')

<div class="row">
    <div class="page-header">
        <div class="page-title">
            <h4>Add New Video</h4>
        </div>
    </div>
</div>
 

        <form class="form-register" action="{{route('admin.video.store')}}" method="POST" style="background-color: #fff; padding:20px" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label>Thumnail Img</label>
                <input type="file" class="form-control" name="img"  required>
            </div>
            <div class="form-group">
                <label >Video</label>
                <input type="file" class="form-control" name="video"  required>
            </div>
        <div class="form-group">
                    <button class="btn btn-success">Save</button>
                </div>

        </form>
</div>




@endsection
