@extends('Admin.master')

@section('content')

<div class="row">
    <div class="filter-control">
        <div class=" ">

            <div class="col-12">
                <div class="Shipments-title">
                    <h1 style="float: left;"> Portfolio</h1>
                    <a href="{{route('admin.gallery.create')}}"><button class="btn btn-primary" style="float: right;">Create</button></a>
                </div>
            </div>
         </div>
    </div>
    <!-- datatable Start-->
    <div class="shipmwnts-table">
        <div class="" style="padding: 0 30px">
            <div class="row">
                <table id="data-tables-shipments" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>img</th>
                            <th style="text-align: center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cats as $cat)
                            <tr>
                                <td>{{$cat->id}}</td>
                                <td>{{$cat->name}}</td>
                                <td>
                                    <img src="{{asset($cat->img)}}" width="100px" style="height: 100px;border-radius: 5px" alt="" style="border-radius: 5px">
                                     </td>
                                <td style="text-align: center">
                                    <a href="{{route('admin.gallery.edit', $cat->id)}}"><button class="btn btn-primary">Edit</button></a>
                                    <form action="{{route('admin.gallery.destroy', $cat->id)}}" style="float: auto;display: inline;;margin-left : 10px" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">Delete</button></td>
                                    </form>
                                </td>
                            </tr>                            
                        @endforeach
                     </tbody>

                </table>

            </div>
        </div>
    </div>



 
</div>
 @endsection
