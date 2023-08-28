@extends('Admin.master')

@section('content')

<div class="row">
    <div class="page-header">
        <div class="page-title">
            <h4>Edit Portfolio</h4>
        </div>
    </div>
</div>


<form class="form-register" action="{{ route('admin.gallery.update', $gall->id) }}"
    method="POST" style="background-color: #fff; padding:20px" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" required value="{{ $gall->name }}">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-select" required="true" aria-required="true" name="category_id">
            @foreach($cats as $cat)
                <option
                    {{ $cat->category_id == $cat->id ? 'selected' : '' }}
                    value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>IMG</label>
        <img src="{{asset($gall->img)}}" alt="" width="100" style="border-radius: 5px">
        <input type="file" class="form-control" name="img" value="{{ $gall->img }}">
    </div>
    <div class="form-group">
        <button class="btn btn-success">Save</button>
    </div>

</form>
</div>




@endsection
