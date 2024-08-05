@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Product <small>
                @if (Auth::check() && Auth::user()->role == "admin")
				<a href="{{ route('products.create') }}" class="btn btn-warning btn-sm">New Product</a>
                @endif
			</small></h3>
			{!! Form::open(['url' => 'products', 'method' => 'get', 'class' => 'form-inline']) !!}
			<div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
				{!! Form::text('q', isset($q) ? $q : null, ['class' => 'form-control', 'placeholder' => 'Type name or model...']) !!}
				{!! $errors->first('q', '<p class="help-block">:message</p>') !!}
			</div>
			{!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
			{!! Form::close() !!}
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th></th>
						<th>Price</th>
						<th>Category</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
					<tr>
						@if(isset($product) && $product->photo !== '')
						<td>
							<div class="col-md-8">
								<div class="thumbnail">
                                    <div class="text-center" style="font-size:180%">
                                        <a href="{{ url('/img/' . $product->photo) }}">
                                            <span class="label label-danger">{{ $product->name }}</span>
                                        <img src="{{ url('/img/' . $product->photo)  }}" width="400px" height="100px" class="img-rounded"></a>
                                    </div>
                                </div>
							</div>
						</td>
						@endif
						<td></td>
						<td>
                            <div style="font-size:150%">
                                <a  class="btn btn-warning btn">
                                 @currency($product->price)
                                </a>
                            </div>
						</td>
						<td>
							@foreach($product->categories as $category)
							<div style="font-size:120%">
							    <a href="{{ route('categories.index', $category) }}" class="fa fa-btn fa-tags">{{ $category->title }}</a>
							<div>
							@endforeach
						</td>
						<td>
							@if (Auth::check() && Auth::user()->role == "admin")
							{!! Form::model($product, ['route' => ['products.destroy', $product], 'method' => 'delete', 'class' => 'form-inline']) !!}
							<div class="btn-group">
								<a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-xs">edit</a>
								{!! Form::submit('delete', ['class' => 'btn btn-xs btn-danger js-submit-comfirm']) !!}
							</div>
							{!! Form::close() !!}
							@endif
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $products->appends(compact('q'))->links() !!}
		</div>
	</div>
</div>
@endsection