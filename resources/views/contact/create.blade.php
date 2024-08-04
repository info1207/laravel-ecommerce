@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Contact</h3></div>
                    <h3><div class="panel-body">
                    <a href="{{ route('contact.index') }}" class="btn btn-warning btn-xs">Your message has been sent!</a>
                    </div></h3>
            </div>
        </div>
    </div>
</div>
@endsection