<?php
    $category = \App\Http\Controllers\OptionCtrl::category();
    $indigenous_member = \App\Http\Controllers\OptionCtrl::IndigenousMember();
?>
@extends('app')

@section('content')
    <div id="svg_wrap"></div>

    <h4>Covid-19 Bakuna Center Registry (CBCR) is tasked to collect all vaccinee data throughout the country. Only those vaccinated by CSMC Vaccination Team will be submitted for vaccination registry.</h4>
    <section>
        <p><strong>Personal information</strong></p>
        <select name="category" id="category">
            <option value="">Select Category...</option>
            @foreach($category as $cat)
            <option value="{{ $cat[0] }}">{{ $cat[0] }} - {{ $cat[1] }}</option>
            @endforeach
        </select>
        <input type="text" placeholder="Unique Person ID" id="unique_person_id" name="unique_person_id" />
        <select name="category" id="category">
            <option value="">PWD?</option>
            <option value="Y">Yes</option>
            <option value="N">No</option>
        </select>
        <select name="indigenous_member" id="indigenous_member">
            <option value="">Indigenous Member?</option>
            @foreach($indigenous_member as $i)
                <option>{{ $i[0] }}</option>
            @endforeach
        </select>
        <input type="text" placeholder="Last Name" name="last_name" id="last_name" />
        <input type="text" placeholder="First Name" name="first_name" id="first_name" />
        <input type="text" placeholder='Middle Name' name="middle_name" id="middle_name" />
        <select name="suffix" id="suffix">
            <option value="">select Suffix...</option>
            <option>JR.</option>
            <option>SR.</option>
            <option>I</option>
            <option>II</option>
            <option>III</option>
            <option>IV</option>
        </select>
        <select name="sex" id="sex">
            <option value="">select Sex...</option>
            <option>M</option>
            <option>F</option>
        </select>
        <input type="text" placeholder="Contact #" name="contact" id="contact" />
        <small class="text-left">Birthdate</small>
        <input type="date" placeholder="Birthdate" name="birthdate" id="birthdate" />
    </section>

    <section>
        <p><strong>Address</strong></p>
        <select name="region" id="region">
            <option value="">Select Region...</option>
        </select>
        <select name="province" id="province">
            <option value="">Select Province...</option>
        </select>
        <select name="muncity" id="muncity">
            <option value="">Select Municipality/City...</option>
        </select>
        <input type="text" placeholder="Barangay" name="brgy" id="brgy" />
    </section>

    <section>
        <p><strong>Vaccination Details</strong></p>
        <select name="manufacturer" id="manufacturer">
            <option value="">Select Manufacturer Name...</option>
            <option>Sinovac</option>
            <option>AZ</option>
            <option>Pfizer</option>
            <option>Moderna</option>
            <option>Gamaleya</option>
            <option>Novavax</option>
            <option>J&J</option>
        </select>
        <hr>
        <small class="text-left">1st Dose Vaccination Date</small>
        <input type="date" placeholder="" name="dose_date1" id="dose_date1" />
        <input type="text" placeholder="Vaccinator (Lastname, Firstname)" name="vaccinator1" id="vaccinator1" />
        <input type="text" placeholder="Batch No." name="batch_no1" id="batch_no1" />
        <input type="text" placeholder="Lot No." name="lot_no1" id="lot_no1" />
        <hr>
        <small class="text-left">2nd Dose Vaccination Date</small>
        <input type="date" placeholder="" name="dose_date2" id="dose_date2" />
        <input type="text" placeholder="Vaccinator (Lastname, Firstname)" name="vaccinator2" id="vaccinator2" />
        <input type="text" placeholder="Batch No." name="batch_no2" id="batch_no2" />
        <input type="text" placeholder="Lot No." name="lot_no2" id="lot_no2" />
    </section>


    <section>
        <p><strong>Review Information</strong></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>

    <div class="button" id="prev">&larr; Previous</div>
    <div class="button" id="next">Next &rarr;</div>
    <div class="button" id="submit">Agree and send application</div>
@endsection
