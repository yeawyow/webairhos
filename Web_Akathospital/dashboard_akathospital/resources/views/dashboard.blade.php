@extends('admin.mainDashboard')

@section('content')

    <div class="container" style="margin-top: 6rem; margin-left: 2rem; width: 100%;">
        <div class="row">
            <div class="col-md-8">
                <div class="card" id="card_dashboard">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{__('You are logged in! as admin')}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection