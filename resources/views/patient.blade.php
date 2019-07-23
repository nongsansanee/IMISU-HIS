@extends('layouts.app')
@section('content')
<h2>Username Login:{{Auth::user()->name}}</h2>


<!-- {{$patients}} -->
<center><h1 class="text-center">PATIENTS</h1></center>
 <table id="dtMaterialDesignExample" class="table table-striped table-bordered">
    <thead>
      <tr>
        
        <th>Patient Name</th>
        <th>DOB</th>
        <th>Division Name</th>
        <th>Last treatment date</th>
        <th>Last treatment name</th>
      <tr>
      <tbody id="myTable">
      @foreach($patients as $patient)
      <tr>
        <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
        <td>{{ $patient->dob }}</td>
        <td>{{ $patient->divisions_name }}</td>
        <td>{{ $patient->treatments_date }}</td>
        <td>{{ $patient->treatments_name }}</td>
      </tr>
      @endforeach

    </tbody>
   
  </table>
 <div class="pagination justify-content-center">
 <!-- {{ $patients->appends(['sort' => 'treatments_date'])->links() }} -->
  {{$patients->links()}}
</div> 
<script>

</script>

@endsection