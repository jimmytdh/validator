@extends('app')
@section('title',$title)

@section('css')
    <style>
        td:empty {
            backround: #fac !important;
        }
    </style>
@endsection

@section('content')
    <h2 class="text-success">{{ $title }}</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <th>ID</th>
                <th>Unique ID</th>
                <th>Full Name</th>
                <th>Contact No.</th>
                <th>Vaccination Date(1)</th>
                <th>Manufacturer(1)</th>
                <th>Batch No(1)</th>
                <th>Vaccinator(1)</th>
                <th>Vaccination Date(2)</th>
                <th>Manufacturer(2)</th>
                <th>Batch No(2)</th>
                <th>Vaccinator(2)</th>
            </thead>
            <tbody>
                @foreach($data as $row)
                <?php
                    $dose1 = \App\Vaccination::where('person_id',$row->id)->where("dose1",'Y')->first();
                    $dose2 = \App\Vaccination::where('person_id',$row->id)->where("dose2",'Y')->first();
                ?>
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->unique_person_id }}</td>
                    <td>{{ "$row->first_name $row->middle_name $row->last_name $row->suffix" }}</td>
                    <td>{{ $row->contact_no }}</td>
                    <td>{{ ($dose1) ? date('M d, Y',strtotime($dose1->vaccination_date)) :'' }}</td>
                    <td>{{ ($dose1) ? $dose1->manufacturer :'' }}</td>
                    <td>{{ ($dose1) ? $dose1->batch_no :'' }}</td>
                    <td>{{ ($dose1) ? $dose1->vaccinator :'' }}</td>
                    <td>{{ ($dose2) ? date('M d, Y',strtotime($dose2->vaccination_date)) :'' }}</td>
                    <td>{{ ($dose2) ? $dose2->manufacturer :'' }}</td>
                    <td>{{ ($dose2) ? $dose2->batch_no :'' }}</td>
                    <td>{{ ($dose2) ? $dose2->vaccinator :'' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
@endsection
