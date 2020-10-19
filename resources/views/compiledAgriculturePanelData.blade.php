<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>বন্যায় দুর্গতদের ক্ষয়ক্ষতি সম্পর্কিত তথ্য</title>
    <link rel="stylesheet" href="/resources/views/style.css">
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
        <th>মাসিক ব্যয়</th>
        <th>মাসিক আয়</th>
        <th>কৃষি জমি আছে কিনা? </th>
        <th>পরিমানঃ </th>
        <th>কৃষি জমি পরিমাণ একক </th>
        <th>বসত ভিটার ধরণ</th>
        <th>গবাদি পশুর সংখ্যাঃ হাঁস </th>
        <th>গবাদি পশুর সংখ্যাঃ মুরগি </th>
        <th>গবাদি পশুর সংখ্যাঃ গরু </th>
        <th>গবাদি পশুর সংখ্যাঃ ছাগল </th>
        <th>পুকুরে মাছ চাষ করে কিনা?  </th>
        <th>মাছ থেকে বছরে আনুমানিক কত আয় করেন? </th>
        <th>বসত বাড়ি </th>
        <th>কি ধরনের ক্ষতিঃ </th>
        <th>ক্ষতির পরিমান টাকায়ঃ </th>
        <th>কৃষি জমিঃ </th>
        <th>কি ধরনের ক্ষতিঃ </th>
        <th>ক্ষতির পরিমান টাকায়ঃ </th>
        <th>ফসলের ক্ষতি </th>
        <th>ফসলের ক্ষতির পরিমাণ টাকায়</th>
        <th>পুকুরে মাছের ক্ষতি</th>
        <th>পুকুরে মাছের ক্ষতির পরিমাণ টাকায়</th>
        <th>অন্যান্য ক্ষতির ধরণ</th>
        <th>অন্যান্য ক্ষতির পরিমাণ টাকায়</th>
        <th>প্রত্যাশিত সহায়তা</th>
        <th>আর্থিক কত টাকা</th>
        <th>সহায়তার ধরণ</th>
        <th>কার কাছ থেকে আশা করেন</th>
        <th>কি ধরণের সহায়রা আশা করেন</th>
        <th>মোট কত টাকার ক্ষতি</th>
        <th>চাষির ধরন</th>

    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "taoseefhere", "drmdjakariyaresearchlabnsu");
    //$int = (int)$num;

    // Check connection
    mysqli_set_charset($conn, 'utf8');
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT
  id
  mashik_bey,
  mashik_ay,
  krishijomi_ache_kina,
  krishijomi_promian,
  krishijomi_promian_unit,
  boshot_bhitar_dhoron,
  gobadi_poshu_songkha_hash,
  gobadi_poshu_songkha_murgi,
  gobadi_poshu_songkha_goru,
  gobadi_poshu_songkha_chagol,
  pukure_mach_chash_kore_kina,
  mach_theke_bochore_koto_ay_kore,
  boshot_bari_khoy_khoti_yesorno,
  boshot_bari_khoy_khotir_dhoron,
  boshot_bari_khoy_khotir_poriman,
  krishi_jomir_khoti_hoyeche_kina,
  krishi_jomir_ki_dhoroner_khoti,
  krishi_jomir_ki_poriman_khoti_takay,
  fosholer_khoti,
  fosholer_khotir_poriman_takay,
  pukure_macher_khoti,
  pukure_macher_khotir_poriman_takay,
  onnanno_khotir_dhoron,
  onnanno_khotir_poriman_takay,
  prottashito_shohayota,
  arthik_koto_taka,
  shohayotar_dhoron,
  kar_kach_theke_asha_koren,
  onnanno_ki_dhoroner_shoyayota,
  chashir_dhoron
 FROM articles";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $totalDamage = (int)$row["boshot_bari_khoy_khotir_poriman"]  + (int)$row["krishi_jomir_ki_poriman_khoti_takay"] + (int)$row["fosholer_khotir_poriman_takay"] + (int)$row["pukure_macher_khotir_poriman_takay"] + (int)$row["onnanno_khotir_poriman_takay"]  ;
            echo "<tr><td>" . $row["mashik_bey"]. "</td>
<td>" . $row["mashik_ay"] . "</td>
<td>". $row["krishijomi_ache_kina"]. "</td>
<td>" . $row["krishijomi_promian"] . "</td>
<td>" . $row["krishijomi_promian_unit"] . "</td>
<td>" . $row["boshot_bhitar_dhoron"] . "</td>
<td>" . $row["gobadi_poshu_songkha_hash"] . "</td>
<td>" . $row["gobadi_poshu_songkha_murgi"] . "</td>
<td>" . $row["gobadi_poshu_songkha_goru"] . "</td>
<td>" . $row["gobadi_poshu_songkha_chagol"] . "</td>
<td>" . $row["pukure_mach_chash_kore_kina"] . "</td>
<td>" . $row["mach_theke_bochore_koto_ay_kore"] . "</td>
<td>" . $row["boshot_bari_khoy_khoti_yesorno"] . "</td>
<td>" . $row["boshot_bari_khoy_khotir_dhoron"] . "</td>
<td>" . $row["boshot_bari_khoy_khotir_poriman"] . "</td>
<td>" . $row["krishi_jomir_khoti_hoyeche_kina"] . "</td>
<td>" . $row["krishi_jomir_ki_dhoroner_khoti"] . "</td>
<td>" . $row["krishi_jomir_ki_poriman_khoti_takay"] . "</td>
<td>" . $row["fosholer_khoti"] . "</td>
<td>" . $row["fosholer_khotir_poriman_takay"] . "</td>
<td>" . $row["pukure_macher_khoti"] . "</td>
<td>" . $row["pukure_macher_khotir_poriman_takay"] . "</td>
<td>" . $row["onnanno_khotir_dhoron"] . "</td>
<td>" . $row["onnanno_khotir_poriman_takay"] . "</td>
<td>" . $row["prottashito_shohayota"] . "</td>
<td>" . $row["arthik_koto_taka"] . "</td>
<td>" . $row["shohayotar_dhoron"] . "</td>
<td>" . $row["kar_kach_theke_asha_koren"] . "</td>
<td>" . $row["onnanno_ki_dhoroner_shoyayota"] . "</td>
<td>" . $totalDamage .  "</td>
<td>" . $row["chashir_dhoron"] .  "</td>
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
<button class="btn btn2"><a href="{{url('/showKrishiJomi')}}">কৃষি জমি আছে কয়জনের</button>
<!-- <button class="btn btn2"><a href="compiledHash.php">হাঁস পালন করে কয়জন</button>
<button class="btn btn2"><a href="compiledMurgi.php">মুরগি পালন করে কয়জন</button>
<button class="btn btn2"><a href="compiledGoru.php">গরু পালন করে কয়জন</button>
<button class="btn btn2"><a href="compiledChagol.php">ছাগল পালন করে কয়জন</button>
<button class="btn btn2"><a href="compiledPukur.php">পুকুর আছে কয়জনের</button>
<button class="btn btn2"><a href="compiledAgriculturePanelData.php">প্যানেল ডেটা</button> -->
<button class="btn btn2"><a href="{{url('/showBoroChashi')}}">বড় চাষীর তালিকা</button>
<!-- <button class="btn btn2"><a href="/compiledMajhariChashi.php">মাঝারি চাষীর তালিকা</button> -->
<button class="btn btn2"><a href="{{url('/showChotoChashi')}}">ছোট চাষীর তালিকা</button>
<button class="btn btn2"><a href="{{url('/showBorgaChashi')}}">বর্গাচাষীর তালিকা</button>
<button class="btn btn2"><a href="{{url('/showFloodVuln')}}">বন্যায় আক্রান্ত প্যানেল ডেটা</button>
<button class="btn btn2"><a href="{{url('/showAgriVuln')}}">vulnerability score</button>
<button class="btn btn2"><a href="{{url('/showMap')}}">Show Hit Map</button>

</body>
</html>
