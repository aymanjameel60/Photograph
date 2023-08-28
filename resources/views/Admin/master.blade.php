@include('Admin.layouts.head')
    @include('Admin.layouts.header')
        @include('Admin.layouts.sidebar')
        <div class="page-wrapper">
            <div class="content">
                @include('Admin.layouts.messages')
                @yield('content')

            </div>
        </div>
        {{-- <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    @include('Admin.layouts.messages')
                    @yield('content')
                </div>
            </div>
        </div> --}}
@include('Admin.layouts.footer')
