@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-20 col-md-offset-0">
            <div class="panel panel-default">
                <div class="row">
                    <div class="col-md-12">
                        <div class="thumbnail">
                            <a href="{{ route('products.index') }}" rel="nofollow" width="250px" height="200px">
                            <img src="{{ url('/img/cover.jpg')}}" alt="Deskripsi Gambar" title="Deskripsi Gambar" class="img-rounded"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
