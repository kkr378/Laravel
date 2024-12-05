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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($form1 as $ForFom)
            <tr>
                <td>{{$ForFom->full_name}}</td>
                <td>{{$ForFom->email_address}}</td>
                <td>{{$ForFom->password}}</td>
                <td>{{$ForFom->phone_number}}</td>
                <td>{{$ForFom->image}}</td>
                <td class="d-flex gap-2">
                    <a href="{{route('form.edit', $ForFom->id) }}"><button class="btn btn-primary">Edit</button></a>
                    <form action="{{route('form.destroy', $ForFom->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"  onclick="return confirm('Are you sure want to delete?')" type="submit">Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach


        </tbody>
    </table>
</div>
@endsection
