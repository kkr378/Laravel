@extends('master')

@section('om')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Image</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->email}}</td>
                <td>
                    @if($contact->image)
                        <img src="{{ asset($contact->image) }}" alt="Profile Image" width="100">
                    @else
                        <p>No Image</p>
                    @endif
                </td>


            </tr>

            @endforeach


        </tbody>
    </table>
</div>
@endsection
