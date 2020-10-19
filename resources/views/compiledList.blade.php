<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <title>বন্যায় দুর্গতদের ক্ষয়ক্ষতি সম্পর্কিত তথ্য</title>
 <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">s
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
  <th>নিম্নোক্ত আইডি ধারকদের নিজস্ব কৃষি জমি আছে</th> 
  
 </tr>
 <?php
    $conn = mysqli_connect("localhost", "root", "taoseefhere", "drmdjakariyaresearchlabnsu");

  // Check connection
  mysqli_set_charset($conn, 'utf8');
  if($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT id FROM articles WHERE krishijomi_ache_kina ='হ্যাঁ'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . implode($row). "</td> </tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
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
    <button class="btn btn2"><a href="compiledList.html">Compiled List</button>
</body>
</html>
