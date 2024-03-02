@extends('admin.layouts.auth')

@section('title', 'List of products')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-12">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>List of products</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            @include('admin.includes.alert-message')

            <div class="table-responsive">
                <table class="table table-bordered table-hover mb-4">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>category name</th>
                            <th>Menu position</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Last Modified At</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($products) > 0)
                        @foreach ($products as $key => $product)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category_name }}</td>
                            <td>{{ $product->menu_position }}</td>
                            <td><img src="{{ asset($product->image) }}" width="80px" height="30px" alt="Banner Image"></td>
                            <td>{{ $product->status == 1 ? 'Active' : 'Inactive' }}</td>
                            <td>{{ date('d-m-Y', strtotime($product->updated_at)) }}</td>
                            <td class="text-center">
                                <ul class="table-controls">
                                    <li>
                                        <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}"
                                            data-toggle="tooltip" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit text-primary"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{ route('admin.products.destroy', ['product' => $product->id]) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-delete" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure want to delete?');">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger"> <circle cx="12" cy="12" r="10"></circle>  <line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            </button>
                                        </form>
                                    </li>
                               </ul>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="8" class="text-center">No product found</td>
                        </tr>
                        @endif
                    </tbody>
                </table>

                {{ $products->appends(request()->except('page'))->render() }}

            </div>
        </div>
    </div>
</div>
@endsection
