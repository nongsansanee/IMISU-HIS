<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

 <table id="example"  class="display" style="width:100%">
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
        <td>{{ $patient->first_name }} </td>
        <td>{{ $patient->dob }}</td>
        <td>{{ $patient->divisions_name }}</td>
        <td>{{ $patient->treatments_date }}</td>
        <td>{{ $patient->treatments_name }}</td>
      </tr>
      @endforeach

    </tbody>
   
  </table>

<script>
$(document).ready( function () {
  alert("aaaaaaaaaa");
    //$('#example').DataTable();
    $('#example').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>