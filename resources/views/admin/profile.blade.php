@extends('admin.layout')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form method="post" action="/profile/search" class="form-horizontal">
                            @csrf
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Profile Verification</h4>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        @if (session('status'))

                                            <div class="alert alert-danger">
                                                <button type="button" aria-hidden="true" class="close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>
                                            <b> Error - </b> {{ session('status') }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
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
                                    @if (session('data'))
                                        <label class="col-sm-2 label-on-left"
                                               style="text-align: center;font-size: 19px;color: #e20505;">Results</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="card-content table-responsive">
                                                        <table class="table table-hover">
                                                            <thead class="text-success">
                                                            <tr>
                                                                <th>Name</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach(session('data') as $key => $value)
                                                                <tr>
                                                                    <td>
                                                                        <a href="/get-transcript/{{$value}}/{{$key}}">
                                                                            {{$key}}
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

