@extends('master')

@section('om')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Pasword</th>
                <th>Phone Number</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($okInfos as $OkInfo)

            <tr>

                <td>{{$OkInfo->name}}</td>
                <td>{{$OkInfo->email}}</td>
                <td>{{$OkInfo->password}}</td>
                <td>{{$OkInfo->phone}}</td>

            </tr>

            @endforeach


        </tbody>
    </table>
</div>
@endsection
