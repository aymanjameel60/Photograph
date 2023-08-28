
<div class="container">
    @if ($errors->any())
    <div class="row mt-3">
        @foreach ($errors->all() as $error)
            <li style="list-style: none">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Danger</strong> {{$error}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </li>
        @endforeach
    </div>
    @endif

    @if (session('success'))
    <div class="row mt-3">
    <div class="col-md-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                {{-- <i class="fa fa-close"  class="myclose"></i> --}}
            </button>
            <span>
            <b> Success - </b> {{session('success')}}</span>
        </div>
    </div>
    </div>
    @endif
    @if (session('error'))
    <div class="row mt-3">
    <div class="alert alert-danger">
        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
            <i class="fa fa-close" class="myclose"></i>
        </button>
        <span>
            <b> Danger - </b> {{session('error')}}</span>
    </div>
    </div>
    @endif
</div>
