@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Category <small>
            @if (Auth::check() && Auth::user()->role == "admin")
                <a href="{{ route('categories.create') }}" class="btn btn-warning btn-sm">New Category</a>
            @endif
            </small></h3>
            {!! Form::open(['url' => 'categories', 'method' => 'get', 'class' => 'form-inline']) !!}
                <div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
                    {!! Form::text('q', isset($q) ? $q : null, ['class' => 'form-control', 'placeholder' => 'Type category...']) !!}
                    {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
                </div>
                {!! Form::submit('Serach', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>
                            @foreach($category->products as $product)
                                    <span class="label label-warning "></i>{{ $product->name }}</span>
                            @endforeach
                            </td>
                            <td>
                                <span class="label label-primary"><i class="fa fa-btn fa-tags"></i>{{ $category->title }}</span>
                            </td>
                            <td>{{ $category->parent ? $category->parent->title : '' }}</td>
                            <td>
                                @if (Auth::check() && Auth::user()->role == "admin")
                                {!! Form::model($category, ['route' => ['categories.destroy', $category], 'method' => 'delete', 'class' => 'form-inline']) !!}
                                    <div class="btn-group">
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-xs btn-warning">Edit</a>
                                        {!! Form::submit('delete', ['class' => 'btn btn-xs btn-danger js-submit-confirm']) !!}
                                    </div>
                                {!! Form::close() !!}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->appends(compact('q'))->links() }}
        </div>
    </div>
</div>
@endsection