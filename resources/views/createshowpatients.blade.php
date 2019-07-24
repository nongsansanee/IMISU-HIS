<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5 - Column sorting with pagination example from scratch</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<!-- 'name', 'dob','division_name','last_treat_date','last_treat_name' -->
<!-- $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->date('dob');
            $table->string('division_name');
            $table->date('last_treat_date');
            $table->string('last_treat_name'); -->

<div class="container">
    <h3 class="text-center">Laravel 5 - Column sorting with pagination example from scratch</h3>
    <table class="table table-bordered">
        <tr>
            <th width="80px">@sortablelink('id')</th>
            <th>@sortablelink('name')</th>
            <th>@sortablelink('dob')</th>
            <th>@sortablelink('division_name')</th>
            <th>@sortablelink('last_treat_date')</th>
            <th>@sortablelink('last_treat_name')</th>
        </tr>
        <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>1990/05/02</td>
                <td>bbbbbbbbbbbbb</td>
                <td>2011/04/25</td>
                <td>vvvvvvvvvvvvv</td>
            </tr>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>1990/05/02</td>
                <td>ddddddddddddddd</td>
                <td>2011/04/25</td>
                <td>hhhhhhhhhhhhhh</td>
            </tr>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>1990/05/02</td>
                <td>kkkkkkkkkkkkkkk</td>
                <td>2011/04/25</td>
                <td>mmmmmmmmmmmmmmm</td>
            </tr>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>1990/05/02</td>
                <td>yyyyyyyyyyyyyyy</td>
                <td>2011/04/25</td>
                <td>eeeeeeeeeeeeeee</td>
            </tr>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>1990/05/02</td>
                <td>pppppppppppppp</td>
                <td>2011/04/25</td>
                <td>wwwwwwwwwwwwww</td>
            </tr>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>1990/05/02</td>
                <td>ssssssssssssss</td>
                <td>2011/04/25</td>
                <td>zzzzzzzzzzzzz</td>
            </tr>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>1990/05/02</td>
                <td>ggggggggggggggg</td>
                <td>2011/04/25</td>
                <td>ffffffffffff</td>
            </tr>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>1990/05/02</td>
                <td>ssssssssssssss</td>
                <td>2011/04/25</td>
                <td>qqqqqqqqqqqqqq</td>
            </tr>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>1990/05/02</td>
                <td>dddddddddddddd</td>
                <td>2011/04/25</td>
                <td>ttttttttttttttt</td>
            </tr>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>1990/05/02</td>
                <td>uuuuuuuuuuuuuuuu</td>
                <td>2011/04/25</td>
                <td>yyyyyyyyyyyyyy</td>
            </tr>
    </table>
   
</div>


</body>


</html>