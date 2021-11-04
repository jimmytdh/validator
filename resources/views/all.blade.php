@extends('app')
@section('title','Vaccine Administration System (VAS) Data')

@section('css')
    <style>
        td:empty {
            backround: #fac !important;
        }
        td {
            white-space: nowrap;
        }
    </style>
@endsection

@section('content')
    <h2 class="text-success">Vaccine Administration System (VAS) Data</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Unique_Person_ID</th>
                    <th>PWD</th>
                    <th>Indigenous Member</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Suffix</th>
                    <th>Contact No</th>
                    <th>Region</th>
                    <th>Province</th>
                    <th>Municipalit/City</th>
                    <th>Barangay</th>
                    <th>Sex</th>
                    <th>Birthdate</th>
                    <th>Deferral</th>
                    <th>Reason for Deferral/Refusal</th>
                    <th>Vaccination Date</th>
                    <th>Manufacturer</th>
                    <th>Batch No.</th>
                    <th>Lot No.</th>
                    <th>CBCR ID</th>
                    <th>Vaccinator Name</th>
                    <th>1st Dose</th>
                    <th>2nd Dose</th>
                    <th>Adverse Event</th>
                    <th>Adverse Event Condition</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>{{ $row->person_id }}</td>
                    <td>{{ $row->category }}</td>
                    <td>{{ $row->person_unique_id }}</td>
                    <td>{{ $row->pwd }}</td>
                    <td>{{ $row->indigenous_member }}</td>
                    <td>{{ $row->last_name }}</td>
                    <td>{{ $row->first_name }}</td>
                    <td>{{ $row->middle_name }}</td>
                    <td>{{ $row->suffix }}</td>
                    <td>{{ $row->contact_no }}</td>
                    <td>{{ $row->region }}</td>
                    <td>{{ $row->province }}</td>
                    <td>{{ $row->muncity }}</td>
                    <td>{{ $row->brgy }}</td>
                    <td>{{ $row->sex }}</td>
                    <td>{{ $row->birthdate }}</td>
                    <td>Deferral</td>
                    <td>Reason for Deferral/Refusal</td>
                    <td>{{ $row->vaccination_date }}</td>
                    <td>{{ $row->manufacturer }}</td>
                    <td>{{ $row->batch_no }}</td>
                    <td>{{ $row->lot_no }}</td>
                    <td>CBC05596</td>
                    <td>{{ $row->vaccinator }}</td>
                    <td>{{ $row->dose1 }}</td>
                    <td>{{ $row->dose2 }}</td>
                    <td>Adverse Event</td>
                    <td>Adverse Event Condition</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
@endsection

@section('js')
<script>
    var down=false;
    var scrollLeft=0;
    var x = 0;

    $('.table-responsive').mousedown(function(e) {
        down = true;
        scrollLeft = this.scrollLeft;
        x = e.clientX;
    }).mouseup(function() {
        down = false;
    }).mousemove(function(e) {
        if (down) {
            this.scrollLeft = scrollLeft + x - e.clientX;
        }
    }).mouseleave(function() {
        down = false;
    });
</script>
@endsection
