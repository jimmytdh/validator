
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
                        <span class="font-weight-bold">Vaccine Information<br>Management System<br><small class="text-danger">(Sync Data)</small></span>
                    </h5>
                    <table class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th colspan="3" class="text-center" style="background:#000;color:#fff;">Overall Data</th>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <th>Count</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><a href="{{ url("/list/blank") }}" class="text-danger">Blank</a></th>
                                <td>{{ number_format($blank) }}</td>
                                <td><a href="{{ url('/sync/blank') }}"><i class="fa fa-spin fa-spinner"></i> Sync</a></td>
                            </tr>
                            <tr>
                                <th><a href="{{ url("/list/inc") }}" class="text-danger">Incomplete</a></th>
                                <td>{{ number_format($inc) }}</td>
                                <td><a href="{{ url('/sync/inc') }}"><i class="fa fa-spin fa-spinner"></i> Sync</a></td>
                            </tr>
                            <tr>
                                <th><a href="{{ url("/list/ready") }}" class="text-danger">Ready</a></th>
                                <td>{{ number_format($ready) }}</td>
                                <td><a href="{{ url('/sync/ready') }}"><i class="fa fa-spin fa-spinner"></i> Sync</a></td>
                            </tr>
                            <tr>
                                <th><a href="{{ url("/list/submit") }}" class="text-danger">Submitted</a></th>
                                <td>{{ number_format($submit) }}</td>
                                <td class="text-success"><i class="fa fa-check"></i> Done</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-muted" colspan="3">Last Updated: {{ $lastSync }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
