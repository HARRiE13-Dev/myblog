@extends('layouts.main_template')
@section('title')
    รยชื่อพนักกงาน
@endsection
@section('content')

<div class="jumbotron">
    <div class="container pt-5">
        <h2 class="display-3 head-title">เกี่ยวกับ</h2>
    </div>
</div>

<div class="container">
    <table class='table table-borderred'>
        <thead>
            <tr class="text-white bg-primary">
                <th>ID</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Age</th>
                <th>Address</th>
                <th>Avatar</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $emp)
            <tr>
                <td>{{ $emp->id }}</td>
                <td>{{ $emp->fullname }}</td>
                <td>{{ $emp->gender }}</td>
                <td>{{ $emp->email }}</td>
                <td>{{ $emp->tel }}</td>
                <td>{{ $emp->age }}</td>
                <td>{{ $emp->address }}</td>
                <td>{{ $emp->avatar }}</td>
                <td>{{ $emp->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$employees->links('pagination::bootstrap-4')}}
    
</div>


@endsection