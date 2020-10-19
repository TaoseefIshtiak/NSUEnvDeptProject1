<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <title>বন্যায় দুর্গতদের ক্ষয়ক্ষতি সম্পর্কিত তথ্য</title>
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
  <th>ছোট চাষীর তালিকা</th>
  <th>নাম</th> 
  <th>সময়কাল</th> 
  <th>মোট জমির পরিমাণ</th> 
  <th>চাষক্রত জমির পরিমাণ </th>
  <th>পতিত জমির পরিমাণ </th>
  <th>মৌসুমে কতবার বীজ ক্রয় </th>
  <th>একাধিকবার বীজক্রয়ে কারণ</th>
  <th>বীজের পিছনে খরচ </th>
  <th>ইউরিয়া সারের পিছনে খরচ</th>
  <th>টি এস পি সারের পিছনে খরচ</th>
  <th>এম্পি সারের পিছনে খরচ</th>
  <th>ডি এ পি সারের পিছনে খরচ</th>  
  <th>কীটনাশকের পিছনে খরচ</th>
  <th>সেচ সুবিধা পায় কিনা</th>
  <th>কীটনাশকের পরিমাণ সারের পরিমাণ</th>
  <th>সেচ বাবদ খরচ</th>
  <th>নিজস্ব যন্ত্রপাতি আছে কিনা?</th>
  <th>চাষাবাদ বাবদ খরচ</th>
  <th>ধানের চারা লাগানো বাবদ খরচ</th>
  <th>ধান মাড়াই লাগানো বাবদ খরচ</th>
  <th>মোট উৎপাদিত ধানের পরিমান</th>
  <th>মোট ধান বিক্রি বাবদ প্রাপ্ত টাকা</th>
  <th>মোট আয়</th>
  <th>নীট মুনাফা</th>
  <th>বি, সি, আর</th>
 </tr>
 <?php
    $conn = mysqli_connect("localhost", "root", "taoseefhere", "drmdjakariyaresearchlabnsu");

  // Check connection
  mysqli_set_charset($conn, 'utf8');
  if($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT id FROM articles WHERE chashir_dhoron ='ছোট চাষী'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>" . $row["id"] . "</td>
    <td>" . "সুলেমান" . "</td>
    <td>" . "বোরো" . "</td>
    <td>" . 10 . "</td>
    <td>" . 10 . "</td>
    <td>" . 10 . "</td>
    <td>" . 2 . "</td>
    <td>" . "জলাবদ্ধতা" . "</td>
    <td>" . 20 . "</td>
    <td>" . 20 . "</td>
    <td>" . 20 . "</td>
    <td>" . 20 . "</td>
    <td>" . 20 . "</td>
    <td>" . 20 . "</td>
    <td>" . "হ্যা" . "</td>
    <td>" . $row["id"] . "</td>
    <td>" . 20 . "</td>
    <td>" . "হ্যা" . "</td>
    <td>" . 20 . "</td>
    <td>" . 20 . "</td>
    <td>" . 20 . "</td>
    <td>" . 100 . "</td>
    <td>" . 3 . "</td>
    <td>" . 300 . "</td>
    <td>" . 100 . "</td>
    <td>" . "***" . "</td>
     </tr>";
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
    
</body>
</html>
