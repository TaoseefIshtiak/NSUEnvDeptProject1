<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Flood Affected Data Collection</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-firestore.js"></script>

        <script type="text/javascript" src="{{ URL::asset('js/table2excel.js') }}"></script>
    </head>

    <body>
        <div class="container">
            <h1 id="bigTextEvaluationStudents">Flood Affected Data Collection</h1>
            <table class="table table-striped" id="userInfoTable">
                <caption>User Information Table</caption>
                <thead>
    			    <tr>
                        <th>User Phone</th>
                        <th>Name</th>
    				    <th>Number of Family Members</th>
                        <th>Educational Qualification</th>
                        <th>Occupation</th>
                        <th>Number of Earning Family Members</th>
                        <th>Monthly Income</th>
                        <th>Monthly Expenditure</th>
                        <th>Owns Farming Land?</th>
                        <th>Farming Land Area</th>
                        <th>Farming Land Area Unit</th>
                        <th>Dwelling Type</th>
                        <th>Number of Duck</th>
                        <th>Number of Chickens</th>
                        <th>Number of Cows</th>
                        <th>Number of Goats</th>
                        <th>Farms Fish?</th>
                        <th>Income from fish farming</th>
    			    </tr>
    		    </thead>
    		    <tbody id="userInfoTableBody">
    		    </tbody>
    	    </table>

            <button class="btn btn1" id="userInfoXLSX">Export User Info to XLSX</button>
            <br><br><br><br><br>

            <table class="table table-striped" id="damageInfoTable">
                <caption>Damage Information Table</caption>
                <thead>
                <tr>
                    <th>User Phone</th>
                    <th>Housing Damage?</th>
                    <th>Magnitude of Housing Damage</th>
                    <th>Housing Damage in Taka</th>
                    <th>Farm Land Damage?</th>
                    <th>Magnitude of Farm Land Damage</th>
                    <th>Farm Land Damage in Taka</th>
                    <th>Crop Damage?</th>
                    <th>Crop Damage in Taka</th>
                    <th>Fish Culture Damage?</th>
                    <th>Fish Culture Damage in Taka</th>
                    <th>Other Damage?</th>
                    <th>What kind of other Damage?</th>
                    <th>Other Damage in Taka</th>
                    <th>Expected Aid Type</th>
                    <th>Expected Aid Period</th>
                    <th>Expected Aid From</th>
                    <th>Expected Aid in Taka</th>
                    <th>Expected Other type of Aid</th>
                </tr>
                </thead>
                <tbody id="damageInfoTableBody">
                </tbody>
            </table>

            <button class="btn btn1" id="damageInfoXLSX">Export Damage Info to XLSX</button>

        </div>
         <script type="text/javascript" src="{{ URL::asset('js/firebase.js') }}"></script>
        <script>
            $("#userInfoXLSX").click(function(e){
                let table2excel = new Table2Excel();
                let filename = "userInfo" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls";
                table2excel.export(document.getElementById("userInfoTable"), filename);
            });

            $("#damageInfoXLSX").click(function(e){
                let table2excel = new Table2Excel();
                let filename = "damageInfo" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls";
                table2excel.export(document.getElementById("damageInfoTable"), filename);
            });
        </script>
    </body>

</html>
