@extends('admin.layouts.auth')

@section('title', 'Edit - Gallery' )

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Edit Gallery</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.galleries.update', ['gallery' => $gallery->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-3 px-0"> Gallery Image</label>
                                <p><span class="badge badge-primary">Format</span> .jpg, .jpeg, .png &nbsp;</p>
                                <div id="image-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            @if (@$gallery->image)
                                                <img src="{{ asset(@$gallery->image) }}" alt="image">
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

                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.galleries.index') }}" class="btn ml-2">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
