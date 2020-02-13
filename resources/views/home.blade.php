@extends('layouts.invoice')

@section('specificpage')
<div class="container" style="margin-top:50px;">
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

                    <br />

                    D.O.B: {{ Auth::user()->dob->formatLocalized('%d %B %Y') }}

                     <br />

                    Humans: {{ Auth::user()->dob->diffForHumans() }}
                    
                    <br />
                    
                    Age: {{ Auth::user()->dob->age }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
