@extends('layout.master')
@Section('title','Subject')
@section('subject','active')
@Section('content')
<link rel="stylesheet" href="{{asset('/CSS/subject.css')}}">
<div class="btnAdd">
  <h2>Suject</h2>
  <div>
    <a href="{{url('/subject/add')}}"  type="button" class="btnAdd btn btn-success btn-sm"><i class="bi bi-person-plus-fill"></i>&nbsp;Add</a>
  </div>
  </div>
  <div class="table-responsive small">
    
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Code</th>
          <th scope="col">Name</th>
          <th width="250px" scope="col">Note</th>
          <th width="140px" scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>001</td>
          <td>1001</td>
          <td>IT</td>
          <td>Information Technology</td>
          <td>
            <span class="btn_edit"><a  class="text-primary" href="#">Edit &nbsp;<i class="bi bi-pencil-square "></i>&nbsp;</a></span>
            <span class="btn_edit"><a class="text-danger" href="#">Delete &nbsp;<i class="bi bi-trash3-fill"></i></a></span>
            
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endSection
