@extends('layout.master')
@section('Student','active')
@section('title','Student')
@section('student','active')
@Section('content')
<link rel="stylesheet" href="{{asset('/CSS/style.css')}}">
<div class="btnAdd">
<h2>Students</h2>
<div>
  <a href="{{url('/student/add')}}"  type="button" class="btnAdd btn btn-success btn-sm"><i class="bi bi-person-plus-fill"></i>&nbsp;Add</a>
</div>
</div>
<div class="table-responsive small">
  
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">FullName</th>
        <th scope="col">Gender</th>
        <th scope="col">DOB</th>
        <th scope="col">Phone</th>
        <th scope="col">Subject</th>
        <th width="140px" scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>001</td>
        <td>Kosal</td>
        <td>Male</td>
        <td>01-01-2001</td>
        <td>0123456789</td>
        <td>IT</td>
        <td>
          <span class="btn_edit"><a  class="text-primary" href="#">Edit &nbsp;<i class="bi bi-pencil-square "></i>&nbsp;</a></span>
          <span class="btn_edit"><a class="text-danger" href="#">Delete &nbsp;<i class="bi bi-trash3-fill"></i></a></span>
          
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endSection
    
{{-- @endsection --}}