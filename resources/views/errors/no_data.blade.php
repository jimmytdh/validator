@extends('app')
@section('title','No data found!')

@section('content')
    <div class="text-center">
        <h1 class="text-muted">Oppps! No data found!</h1>
        <hr>
        <p class="">Please be reminded that only those vaccinated by <strong>Cebu South Medical Center</strong> will appear in this registry. <font class="text-success">If you think you have been vaccinated by our facility, please click the <strong>Register Button</strong> below. </font> <br>Thank you!</p>
        <hr>
        <a href="#" class="btn btn-lg btn-success"><i class="fa fa-user-plus"></i> Register</a>
        <a href="#verify" data-toggle="modal" class="btn btn-lg btn-warning"><i class="fa fa-search"></i> Verify Data</a>
    </div>
@endsection
