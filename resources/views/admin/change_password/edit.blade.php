@extends('admin.layouts.auth')

@section('title', 'Change Password')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Change Password</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.change-password.submit') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Current Password <span>*</span></label>
                                <input type="password" class="form-control" id="current_password" name="current_password" autocomplete="off" placeholder="" required="" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>New Password <span>*</span></label>
                                <input type="password" class="form-control" id="new_password" name="new_password" autocomplete="off" placeholder="" required="" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Confirm Password <span>*</span></label>
                                <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" autocomplete="off" placeholder="" required="" />
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Change Password</button>
                </form>
            </div>
        </div>
    </div>
@endsection
