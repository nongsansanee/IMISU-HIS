@extends('layouts.app')
@section('content')

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

<h2>Username Login:{{Auth::user()->name}}</h2>

<!-- <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css"> -->
<!-- <script type="text/javascript" charset="utf8" src="/js/jquery-3.4.1.min.js"></script>  
<script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script> -->

 <!-- {{$patients}}  -->



<center><h1 class="text-center">PATIENTS</h1></center>
 <table id="example" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Patient Name</th>
        <th>DOB</th>
        <th>Division Name</th>
        <th>Last treatment date</th>
        <th>Last treatment name</th>
      <tr>
    </thead> 
    <tbody >
  
      @foreach($patients as $patient)
     
      <tr>
        <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
        <td>
          {{ $patient->dob->format('M-d-Y')}}
        </td>
        <td>  
        {{ $patient->division->name }}  
        </td>
        <td>  {{ $patient->treatments->first()->created_at}}</td>
        <td> {{ $patient->treatments->first()->name }} </td> 
      
      </tr>
      
      @endforeach

    </tbody>
   
  </table>
  <div class="pagination justify-content-center">
  {{$patients->links()}}
</div>
<script>
$(document).ready( function () {
 // alert("aaaaaaaaaa");
    $('#example').DataTable();
} );
</script>

@endsection