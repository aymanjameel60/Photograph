@extends('Admin.master')

@section('content')

<div class="row">
    <div class="page-header">
        <div class="page-title">
            <h4>Add New Category</h4>
        </div>
    </div>
</div>
 

        <form class="form-register" action="{{route('admin.category.store')}}" method="POST" style="background-color: #fff; padding:20px" enctype="multipart/form-data">
            @csrf
            @method('POST')
                <div class="form-group">
                    <label >Category Name</label>
                    <input type="text" class="form-control" name="name"  required>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Save</button>
                </div>

        </form>
</div>




@endsection
