@extends('app')
@section('title',"$person->first_name $person->last_name")

@section('css')
    <style>
        .table-personal th {
            text-align: right;
        }
    </style>
@endsection

@section('content')
    <h2 class="text-success title-header">ID #: CSMC-{{ str_pad($person->id,6,0,STR_PAD_LEFT) }}</h2>
    <div class="row">
        <div class="col-sm-6">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Personal Information</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <small class="text-muted">Full Name:</small><br>
                        <label class="text-success">{{ $person->first_name }} {{ $person->middle_name }} {{ $person->last_name }}</label>
                    </div>
                    <div class="form-group">
                        <small class="text-muted">Date of Birth:</small><br>
                        <label class="text-success">{{ date("M d, Y",strtotime($person->birthdate)) }}</label>
                    </div>
                    <div class="form-group">
                        <small class="text-muted">Sex:</small><br>
                        <label class="text-success">{{ ($person->sex=='M') ? 'Male': 'Female' }}</label>
                    </div>
                    <div class="form-group">
                        <small class="text-muted">Address:</small><br>
                        <label class="text-success">{{ \App\Http\Controllers\VerifyCtrl::address($person) }}</label>
                    </div>
                    <table class="table-personal" width="100%">
                        <tr>
                            <th>Full Name</th>
                            <td>:</td>
                            <td class="text-primary">{{ $person->first_name }} {{ $person->middle_name }} {{ $person->last_name }}</td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td>:</td>
                            <td class="text-primary">{{ date("M d, Y",strtotime($person->birthdate)) }}</td>
                        </tr>
                        <tr>
                            <th>Sex</th>
                            <td>:</td>
                            <td class="text-primary">{{ ($person->sex=='M') ? 'Male': 'Female' }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>:</td>
                            <td class="text-primary">{{ \App\Http\Controllers\VerifyCtrl::address($person) }}</td>
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-sm-6">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Vaccination Details</h3>
                </div>
                <div class="box-body">
                    <table class="table table-sm table-bordered table-hover">
                        <tr>
                            <th>Dose #</th>
                            <th>Date of Vaccination</th>
                            <th>Manufacturer</th>
                        </tr>
                        @if($dose1)
                        <tr>
                            <td>1st</td>
                            <td>{{ date("M d, Y",strtotime($dose1->vaccination_date)) }}</td>
                            <td>{{ $dose1->manufacturer }}</td>
                        </tr>
                        @endif

                        @if($dose2)
                            <tr>
                                <td>2nd</td>
                                <td>{{ date("M d, Y",strtotime($dose2->vaccination_date)) }}</td>
                                <td>{{ $dose2->manufacturer }}</td>
                            </tr>
                        @endif
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection
