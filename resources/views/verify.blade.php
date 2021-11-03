
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ url('/') }}/images/favicon.png" sizes="16x16" type="image/png">
    <meta name="description" content="Vaccine Information Management System"/>

    <meta property="og:title" content="Vaccine Information Management System">
    <meta property="og:description" content="The VIMS-IR is the solution being used to collect the master list of eligble vaccinee. It is use to estimate how many vaccines should be allotted per facility, LGU, and Region">
    <meta property="og:image" content="{{ url('/images/banner.jpg') }}">
    <meta property="og:url" content="{{ url('/') }}">

    <meta property="twitter:title" content="Vaccine Information Management System">
    <meta property="twitter:description" content="The VIMS-IR is the solution being used to collect the master list of eligble vaccinee. It is use to estimate how many vaccines should be allotted per facility, LGU, and Region">
    <meta property="twitter:image" content="{{ url('/images/banner.jpg') }}">
    <link href="{{ url('/css/font-awesome.css') }}" rel="stylesheet">
    <title>LineList Verification</title>


    <!-- Bootstrap core CSS -->
    <link href="{{ url('/') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ url('/') }}/css/register.css" rel="stylesheet">
    <style>
        .alert-circle {
            /*border-radius: 30px;*/
        }
        input {
            height: 45px !important;
            padding: 10px 20px !important;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                    <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body">

                    <div class="text-center mb-1">
                        <img src="{{ url('/') }}/images/logo.png" alt="" width="80">
                    </div>

                    <h5 class="card-title text-center">
                        <span class="font-weight-bold">Vaccine Information<br>Management System<br><small class="text-danger">(Registry Data Validation)</small></span>
                    </h5>
                    @if($msg=='verified')
                        <div class="alert alert-success alert-circle">
                            <div class="float-left text-white mr-2">
                                {!! DNS2D::getBarcodeHTML("$ctrlNo - $data->first_name $data->last_name $data->suffix", 'QRCODE',3,3,'white') !!}
                            </div>
                            {{ $ctrlNo }}<br>
                            <strong>{{ "$data->first_name $data->middle_name $data->last_name" }}</strong><br>
                            {{ ($data->sex=='F') ? 'Female' : 'Male' }}, {{ \Carbon\Carbon::parse($data->birthdate)->diff(\Carbon\Carbon::now())->format('%y') }} y/o
                            <div class="clearfix"></div>
                        </div>

                        <table class="table table-sm table-striped">
                            <tr>
                                <th colspan="3" class="text-center">Vaccination Details</th>
                            </tr>
                            @foreach($vaccination as $vac)
                                @if(!$vac->vaccination_date)
                                    <tr>
                                        <th colspan="2" class="text-center text-danger">*** Waiting for confirmation ***</th>
                                    </tr>
                                @else
                                    <tr>
                                        <td>
                                            @if($vac->dose1=='Y')
                                                1st Dose
                                            @elseif($vac->dose2=='Y')
                                                2nd Dose
                                            @endif
                                        </td>
                                        <td>{{ $vac->manufacturer }}</td>
                                        <td width="50%">{{ date('m/d/y',strtotime($vac->vaccination_date)) }}</td>

                                    </tr>
                                @endif
                            @endforeach
                        </table>
                        <div class="text-center text-danger alert alert-danger-outline">
                            Note: This is not the official VaxCert. Please check status below. Thank you!
                        </div>
                        <label class="text-danger">Status: </label>
                        <?php $progress = 0; ?>
                        @if($data->status == 'inc')
                            <?php $progress = 30; ?>
                            <strong>Incomplete. Click <a class="text-danger" href="{{ url('/upload/'.$data->id) }}">HERE </a> to complete your data. </strong>
                        @elseif($data->status == 'review')
                            <?php $progress = 40; ?>
                            <strong>Data is being reviewed. Please check again later.</strong>
                        @elseif($data->status == 'ready')
                            <?php $progress = 60; ?>
                            <strong>Data is being processed for submission.</strong>
                        @elseif($data->status == 'submit')
                            <?php $progress = 90; ?>
                            <strong>Your data was already submitted to Talisay CHO. Please check after 24 - 48 hours  for your registry to appear in <a href="vaxcert.doh.gov.ph">vaxcert.doh.gov.ph</a> website. Thank you!</strong>
                        @else
                            <strong>Data is being encoded.</strong>
                        @endif
                        <div class="progress">

                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $progress }}%"></div>
                        </div>
                        <hr>
                        <a href="{{ url("/verify") }}"><i class="fa fa-arrow-left"></i> Back to verification page</a>
                    @elseif($msg=='unverified')
                        <div class="alert alert-danger alert-circle text-center">
                            <h3>Oppps. Data not found!</h3>
                            <p class="">Note: Please be reminded that only those vaccinated by <strong>Cebu South Medical Center</strong> will appear in this registry. <font style="color: yellow;">If you think you have been vaccinated by our facility, please click the <strong>Register</strong> Button below. </font> <br>Thank you!</p>
                        </div>
                    @endif
                    @if($msg!='verified')
                        <form class="form-signin p-1" method="post" action="{{ url('/verify') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="fname" id="fname" class="form-control" placeholder="" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lname" id="lname" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Birthdate</label>
                                <input type="date" name="dob" id="dob" class="form-control" placeholder="" required>
                            </div>
                            <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit">Verify</button>
                            @if($msg=='unverified')
                                <a class="btn btn-lg btn-warning btn-block text-uppercase" href="{{ url('/register') }}">Register to CSMC Linelist</a>
                            @endif
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
