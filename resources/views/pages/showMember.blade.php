@extends('layout')
@include('sidenav')
@section('content')
<style>
    table{
        font-size:14px;
    }
    </style>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-6">
        <br><br>
    <h3>Members Information</h3>
        <table class="table table-bordered">
            <thread>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>IC</td>
                    <td>Bank Account Number</td>
                    <td>Bank Company</td>
                    <td>Handphone Number</td>
                    <td>Status</td>
                    <td>Gender</td>
                    <td>Type</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </thread>
            <tbody>
                @foreach($users as $viewMember)
                <tr>
                    <td>{{ $viewMember->name }}</td>
                    <td>{{ $viewMember->email }}</td>
                    <td>{{ $viewMember->ic }}</td>
                    <td>{{ $viewMember->bank_account_number }}</td>
                    <td>{{ $viewMember->bank_company }}</td>
                    <td>{{ $viewMember->handphone_number }}</td>
                    <td>{{ $viewMember->status}}</td>
                    <td>{{ $viewMember->gender }}</td>
                    <td>{{ $viewMember->type }}</td>
                    <td><a href="{{ route('member.edit',['id'=>$viewMember->id]) }}" class="btn btn-warning btn-xs">Edit</a> </td>
                    <td><a href=" {{ route('add.to.blacklist',['id'=>$viewMember->id]) }}" class="btn btn-dark btn-xs">Add to Blacklist</a></td>
                  <!--  <td><a href="#" class="btn btn-danger btn-xs">Delete</a></td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
    </div>
</div>
@endsection