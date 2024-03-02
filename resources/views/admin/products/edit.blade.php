@extends('admin.layouts.auth')

@section('title', 'Edit - product' )

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Edit product</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name <span>*</span></label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" placeholder="" required />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Category name <span>*</span></label>
                                <select name="category_name" id="category_name" class="form-control" required>
                                    <option value="MICRONUTRIENTS" {{ $product->category_name == 'MICRONUTRIENTS' ? 'selected' : '' }}>MICRONUTRIENTS</option>
                                    <option value="BIO-PESTICIDES" {{ $product->category_name == 'BIO-PESTICIDES' ? 'selected' : '' }}>BIO-PESTICIDES</option>
                                    <option value="PESTICIDES" {{ $product->category_name == 'PESTICIDES' ? 'selected' : '' }}>PESTICIDES</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Menu position<span>*</span></label>
                                <select name="menu_position" id="menu_position" class="form-control" required>
                                    <option value="col1" {{ $product->menu_position == 'col1' ? 'selected' : '' }}>col1</option>
                                    <option value="col2" {{ $product->menu_position == 'col2' ? 'selected' : '' }}>col2</option>
                                    <option value="col3" {{ $product->menu_position == 'col3' ? 'selected' : '' }}>col3</option>
                                    <option value="col4" {{ $product->menu_position == 'col4' ? 'selected' : '' }}>col4</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Micronutrients </label>
                                <input type="text" class="form-control" id="micronutrient" name="micronutrient" value="{{ $product->micronutrient }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Major ingredients</label>
                                <input type="text" class="form-control" id="major_ingredients" name="major_ingredients" value="{{ $product->major_ingredients }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Role and function</label>
                                <input type="text" class="form-control" id="role_and_function" name="role_and_function" value="{{ $product->role_and_function }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Use recommendation</label>
                                <input type="text" class="form-control" id="use_recommendation" name="use_recommendation" value="{{ $product->use_recommendation }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Available pack</label>
                                <input type="text" class="form-control" id="available_pack" name="available_pack" value="{{ $product->available_pack }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ $product->description }}</textarea>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-3 px-0">Product Image<span>*</span></label>
                                <p><span class="badge badge-primary">Format</span> .jpg, .jpeg, .png &nbsp;</p>
                                <div id="image-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            @if (@$product->image)
                                                <img src="{{ asset(@$product->image) }}" alt="image">
                                            @else
                                                <img src="{{ asset('admin/img/noimage.jpg') }}" alt="no image">
                                            @endif
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input name="image" id="image" type="file" accept=".png, .jpg, .jpeg">
                                            </span>
                                            <a href="javascript:void(0);" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.products.index') }}" class="btn ml-2">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
