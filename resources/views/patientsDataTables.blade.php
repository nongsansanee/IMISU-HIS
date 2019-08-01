<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

<!-- {{$patients}} -->
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
              <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
                <td>
                  {{ $patient->dob->format('M-d-Y')}}
                </td>
                <td>  
                    {{ $patient->division->name }} 
                </td>
                <td>  {{ $patient->treatments->first()->created_at}}</td>
                <td>{{ $patient->treatments->first()->name }} </td> 
      
       </tr>
      @endforeach

    </tbody>
      <tfoot>
            <tr>
                <th>Patient Name</th>
                <th>DOB</th>
                <th>Division Name</th>
                <th>Last treatment date</th>
                <th>Last treatment name</th>
            </tr>
        </tfoot>
  </table>

<script>
$(document).ready( function () {
  //alert("aaaaaaaaaa");
    $('#example').DataTable();
    // $('#example').DataTable( {
    //     "order": [[ 5, "desc" ]]
    // } );
} );
</script>