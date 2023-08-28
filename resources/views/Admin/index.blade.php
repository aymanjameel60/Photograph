@extends('Admin.master')

@section('content')
<div class="row">
     <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count">
            <div class="dash-counts">
                <h4 ><span class="counters" data-count="00">$</span></h4>
                <h5>Customers</h5>
            </div>
            <div class="dash-imgs">
                <i data-feather="user"></i> 
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count das1">
            <div class="dash-counts">
                <h4 ><span class="counters" data-count=".00">$.00</span></h4>
                <h5>Shipments</h5>
            </div>
            <div class="dash-imgs">
                <i data-feather="user-check"></i> 
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count das2">
            <div class="dash-counts">
                <h4 ><span class="counters" data-count=".00">$.00</span></h4>
                <h5>Delivered Shipment</h5>
            </div>
            <div class="dash-imgs">
                <i data-feather="file-text"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count das3">
            <div class="dash-counts">
                <h4><span class="counters" data-count="1.00">$1.00</span></h4>
                <h5>Sales Invoice</h5>
            </div>
            <div class="dash-imgs">
                <i data-feather="file"></i>  
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->
 @endsection
