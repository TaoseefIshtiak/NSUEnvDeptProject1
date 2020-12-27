<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sanitation Sytem All Data Projection</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <script src="bower_components\jquery\dist\jquery.min.js"></script>
    <script src="bower_components\jquery-table2excel\dist\jquery.table2excel.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th, td {
            background-color: #588c7e;
            color: white;
            border: 1px solid orange;
            padding: 10px;
            text-align: left;
        }
        a, u {
            color:#3498db;
            text-decoration:none;
            cursor:pointer;
        }
        a:hover,.u:hover{
            color: #fff;
        }
        .button {
            border: 1px solid #3498db;
            background: none;
            padding: 10px 20px;
            font-size: 20px;
            font-family: "montserrat";
            cursor: pointer;
            margin: 10px;
            transition: 0.8s;
            position: relative;
            overflow: hidden;
        }

        .button:hover {
            background-color: #4CAF50; /* Green */
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
</head>
<body>
<table class="table2excel" data-tableName="Test Table 1">
    <tr>
        <th>Address</th>
        <th>Head of the Family</th>
        <th>Number of Family Members</th>
        <th>Ages</th>
        <th>Tank ID</th>
    </tr>
    
   
<tr><td>6, Paschimgaon</td>
<td>Rasel Ahmed</td>
<td>3</td>
<td>35, 33, 10,</td>
<td>ST15231</td></tr>
<tr><td>9, Paschimgaon</td>
<td>Bilal</td>
<td>5</td>
<td>53, 49, 19, 15, 7</td>
<td>ST15232</td></tr>

</table>

<button class="btn btn1">Export to XLS</button>

<script>
    $(function() {
        $(".btn").click(function(e){
            var table = $(this).prev('.table2excel');
            if(table && table.length){
                var preserveColors = (table.hasClass('table2excel_with_colors') ? true : false);
                $(table).table2excel({
                    exclude: ".noExl",
                    name: "Excel Document Name",
                    filename: "myFileName" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
                    fileext: ".xls",
                    exclude_img: true,
                    exclude_links: true,
                    exclude_inputs: true,
                    preserveColors: preserveColors
                });
            }
        });

    });
</script>

<button class="btn btn2"><a href="{{url('/showMap')}}">Show Spatial Locations</button>

</body>
</html>
