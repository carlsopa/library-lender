<script src="{{ asset('js/app.js') }}"></script>
{{-- <script src="{{ asset('js/controls.js')}}" defer></script> --}}
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style>
        .wrapper{
            display: flex;
            width:100vw;
            align-items: stretch;
        }
        #sidenav{
            width:25vw;
        }
        #content{
            width:75vw;
            
        }
    </style>
{{-- @extends('') --}}
{{-- @include('layouts.sidenav') --}}
<nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm">
    
    <div class="container">
        <form id="search_form" method=POST action='/search/'>
            @csrf
            <input type="text" name="search_term" id="term"/>
            <input type="submit" value="Search"
            onclick="
            var term = document.getElementById('term').value;
            document.getElementById('search_form').action='/search/'+term;"/>
        </form>
        <div class="container float-right">
            {{auth::user()->name}}
            <a class="dropdown-item float-right" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</nav>
<div class="wrapper">
    <div id="sidenav">
        @include('layouts.sidenav')
    </div>
    <div id="content">
        @yield('content')
    </div>
</div>
    {{-- @endsection --}}
{{-- @extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
