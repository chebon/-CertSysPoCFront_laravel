@extends('admin.layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>{{$title}}</h3>
                        </div>
                        <div class="card-content card-padding">
                            <div class="m-b-20">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6 text-right">
                                            <p>
                                                <span class="font-size-20">Averages</span> {{$data->overalls->averages}}
                                            </p>
                                            <p>
                                                <span
                                                    class="font-size-20">Cumulative</span> {{$data->overalls->cumulative}}
                                            </p>
                                            <p>
                                                <span
                                                    class="font-size-20">Admission Number</span> {{$data->overalls->admission_number}}
                                            </p>
                                            <p>
                                                <span
                                                    class="font-size-20">Full Name</span> {{$data->overalls->fullname}}
                                            </p>
                                            <p>
                                                <span
                                                    class="font-size-20">Academic Year</span> {{$data->overalls->academic_year}}
                                            </p>
                                            <p>
                                                <span
                                                    class="font-size-20">Recommendation</span> {{$data->overalls->recommendation}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped text-right">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Code</th>
                                                <th>Description</th>
                                                <th class="text-right">CF</th>
                                                <th class="text-right">Grade</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data->results as $result)
                                                <tr>
                                                    <td class="text-center">{{$result->code}}</td>
                                                    <td class="text-left">{{$result->description}}</td>
                                                    <td>{{$result->cf}}</td>
                                                    <td>{{$result->grade}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-right">
                                        <button onclick="history.go(-1);" type="submit" class="btn btn-primary"><i
                                                class="icmn-checkmark margin-right-5"></i> Back to results
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
