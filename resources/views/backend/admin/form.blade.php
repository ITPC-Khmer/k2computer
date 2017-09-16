@php
    $base_url = asset('them/backend');
@endphp
<?php
$id = isset($row)?$row->id:0;
$name = isset($row)?$row->name:'';
$email = isset($row)?$row->email:'';
$password = isset($row)?$row->password:'';
$role = isset($row)?$row->role:'';
?>
@extends('layout.backend')
@section('title','User ADD')
@section('content')
    <form action="{{url('backend/user-save')}}" enctype="multipart/form-data" method="post" class="panel form-horizontal">
        {!! csrf_field() !!}
        <input type="hidden" name="id" value="{{$id}}">
        <div class="panel-heading">
            <span class="panel-title">Admin </span>
        </div>
        <br/>

        <div class="panel-body">
             <div class="form-group">
                <label class="col-sm-4 control-label">User Name</label>
                <div class="col-sm-8">
                    <input name='name' required class="form-control" type="text" placeholder="admin" value="{{ $name }}">
                </div>
            </div><div class="form-group">
                <label class="col-sm-4 control-label">Email</label>
                <div class="col-sm-8">
                    <input name='email' class="form-control" required type="email" placeholder="@example.com" value="{{ $email }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Password</label>
                <div class="col-sm-8">
                    <input name='password' required class="form-control" type="password" value="{{ $password }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Status</label>
                <div class="col-sm-8">
                    <select class="form-control" name="role">
                        <option  {!! $role== 'admin'?' selected="selected" ':'' !!} value="admin">Admin</option>
                        <option  {!! $role== 'user'?' selected="selected" ':'' !!} value="user">User</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="panel-footer text-right">
            <button class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection