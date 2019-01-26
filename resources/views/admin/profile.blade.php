@extends('admin.layout')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form method="post" action="/profile/create" class="form-horizontal">
                            @csrf
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Profile Verification</h4>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Profile Verification</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" name="fullname" value="{{ old('fullname') }}"
                                                           class="form-control"
                                                           placeholder="fullname">
                                                    <span class="material-input"></span></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" name="admission_number"
                                                           value="{{ old('admission_number') }}" class="form-control"
                                                           placeholder="admission number">
                                                    <span class="material-input"></span></div>
                                            </div>
                                            <div class="col-md-5">
                                                <button class="btn btn-primary btn-round">
                                                    <i class="material-icons">search</i> Search
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

