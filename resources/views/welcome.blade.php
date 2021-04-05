@extends('layouts.main')
<!--content is use as a id of dynamic part of page-->
@section('dynamiccontent')
<!--Success ADD MESSAGE-->
@if(session('successMsg'))
<div class="container" style="padding:20px 0px">
<div class="alert alert-success" role="alert">
  {{ session('successMsg')}}
</div>
</div>
@endif
<!--Success Update MESSAGE-->
@if(session('successUpdateMsg'))
<div class="container" style="padding:20px 0px">
<div class="alert alert-warning" role="alert">
  {{ session('successUpdateMsg')}}
</div>
</div>
@endif
<!--Success Delete Message-->
@if(session('successDeleteMsg'))
<div class="container" style="padding:20px 0px">
<div class="alert alert-info" role="alert">
  {{ session('successDeleteMsg')}}
</div>
</div>
@endif
<div class="container" style="padding:20px 0px;">
<h1>Student's Detail</h1>
<table id="dt-basic-checkbox" class="table" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">S.No
      </th>
      <th class="th-sm">First Name
      </th>
      <th class="th-sm">Last Name
      </th>
      <th class="th-sm">Email
      </th>
      <th class="th-sm">Phone
      </th>
      </th>
      <th class="th-sm">Action
      </th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
      <td scope="row">{{ $student->id }}</td>
      <td>{{ $student->first_name }}</td>
      <td>{{ $student->last_name }}</td>
      <td>{{ $student->email }}</td>
      <td>{{ $student->phone }}</td>
       <td> <a class="btn btn-raised btn-primary btn-sm" href="{{ route('edit',$student->id) }}"><i class="fa fa-pencil" aria-hidden="true"> Edit</i></a> 
      ||
      <form method="POST" id="delete-form-{{ $student->id}}" action="{{ route('delete',$student->id) }}"
      style="display:none;">
      {{ csrf_field() }}
      {{ method_field('delete') }}
      </form>
      <button onclick="if(confirm('Are you sure to delete this data'))
      {
        event.preventDefault();
        document.getElementById('delete-form-{{ $student->id}}').submit();
      }
      else
      {
        event.preventDefault();
      }
      "
      class='btn btn-raised btn-danger btn-sm' href='#'
      >
       <i class="fa fa-trash" aria-hidden="true"> Delete</i>
      </button>
      </td>
    </tr>
  @endforeach
  </tbody>
  
</table>
</div>

@endsection