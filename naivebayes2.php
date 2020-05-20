<?php
require ('database/dbconnection.php');
$query = "select * from crimetable order by id desc";
$result = mysqli_query($con, $query);
$counter = 0;
// crime variables declaration
$Assault=$Arson=$Bribery=$Burglary=$Child_Abuse=$Child_Pornography=$Credit_Card_Fraud=$Conspiracy=$Cyberbulling=$Disturbing_the_peace=
$Domestic_Violence=$Drug_Possession=$Extortion=$Fraud=$Harassment=$Homicide=$Human_Trafficking=$Identity_Theft=$Kidnapping=$Manslaughter=
$Money_Laundering=$Murder=$Probation_Violation=$Poaching=$Rape=$Robbery=$Sexual_Assault=$Shoplifting=$Stalking=$Tax_Evasion=$Vandalism=
$White_Collar_Crimes=1;
// posterior probability variables declartion
$ppAssault=$ppArson=$ppBribery=$ppBurglary=$ppChild_Abuse=$ppChild_Pornography=$ppCredit_Card_Fraud=$ppConspiracy=$ppCyberbulling=$ppDisturbing_the_peace=
$ppDomestic_Violence=$ppDrug_Possession=$ppExtortion=$ppFraud=$ppHarassment=$ppHomicide=$ppHuman_Trafficking=$ppIdentity_Theft=$ppKidnapping=$ppManslaughter=
$ppMoney_Laundering=$ppMurder=$ppProbation_Violation=$ppPoaching=$ppRape=$ppRobbery=$ppSexual_Assault=$ppShoplifting=$ppStalking=$ppTax_Evasion=$ppVandalism=
$ppWhite_Collar_Crimes=1;
$totalCrimes=32;  // all the crimes that can happen
$numberCrimes=0; // total number of crimes that have happend in that county

// $county = "Nairobi";
$county=ucfirst(trim($_POST['county']));

while ($row = mysqli_fetch_array($result)){

    if($row['county'] ==$county){

      $counter++;

      //count number of crimes in respective county
      if($row['type_of_crime']=='Assault'){ $Assault++; }
      if($row['type_of_crime']=='Arson'){ $Arson++; }
      if($row['type_of_crime']=='Bribery'){ $Bribery++; }
      if($row['type_of_crime']=='Burglary'){ $Burglary++; }
      if($row['type_of_crime']=='Child Abuse'){ $Child_Abuse++; }
      if($row['type_of_crime']=='Child Pornography'){ $Child_Pornography++; }
      if($row['type_of_crime']=='Credit Card Fraud'){ $Credit_Card_Fraud++; }
      if($row['type_of_crime']=='Conspiracy'){ $Conspiracy++; }
      if($row['type_of_crime']=='Cyberbulling'){ $Cyberbulling++; }
      if($row['type_of_crime']=='Conspiracy'){ $Conspiracy++; }
      if($row['type_of_crime']=='Disturbing the peace'){ $Disturbing_the_peace++; }
      if($row['type_of_crime']=='Domestic Violence'){ $Domestic_Violence++; }
      if($row['type_of_crime']=='Drug Possession'){ $Drug_Possession++; }
      if($row['type_of_crime']=='Extortion'){ $Extortion++; }
      if($row['type_of_crime']=='Fraud'){ $Fraud++; }
      if($row['type_of_crime']=='Harassment'){ $Harassment++; }
      if($row['type_of_crime']=='Homicide'){ $Homicide++; }
      if($row['type_of_crime']=='Human Trafficking'){ $Human_Trafficking++; }
      if($row['type_of_crime']=='Identity Theft'){ $Identity_Theft++; }
      if($row['type_of_crime']=='Kidnapping'){ $Kidnapping++; }
      if($row['type_of_crime']=='Manslaughter'){ $Manslaughter++; }
      if($row['type_of_crime']=='Money Laundering'){ $Money_Laundering++; }
      if($row['type_of_crime']=='Murder'){ $Murder++; }
      if($row['type_of_crime']=='Probation Violation'){ $Probation_Violation++; }
      if($row['type_of_crime']=='Poaching'){ $Poaching++; }
      if($row['type_of_crime']=='Rape'){ $Rape++; }
      if($row['type_of_crime']=='Robbery'){ $Robbery++; }
      if($row['type_of_crime']=='Sexual Assault'){ $Sexual_Assault++; }
      if($row['type_of_crime']=='Shoplifting'){ $Shoplifting++; }
      if($row['type_of_crime']=='Stalking'){ $Stalking++; }
      if($row['type_of_crime']=='Tax Evasion'){ $Tax_Evasion++; }
      if($row['type_of_crime']=='White Collar Crimes'){ $White_Collar_Crimes++; }


      // count the number of crimes in the respective county
      $numberCrimes=$Assault+$Arson+$Bribery+$Burglary+$Child_Abuse+$Child_Pornography+$Credit_Card_Fraud+$Conspiracy+$Cyberbulling+$Disturbing_the_peace+
      $Domestic_Violence+$Drug_Possession+$Extortion+$Fraud+$Harassment+$Homicide+$Human_Trafficking+$Identity_Theft+$Kidnapping+$Manslaughter+
      $Money_Laundering+$Murder+$Probation_Violation+$Poaching+$Rape+$Robbery+$Sexual_Assault+$Shoplifting+$Stalking+$Tax_Evasion+$Vandalism+$White_Collar_Crimes;



      $ppAssault= ((1/$totalCrimes) * ($Assault/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppArson= ((1/$totalCrimes) * ($Arson/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppBribery= ((1/$totalCrimes) * ($Bribery/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppBurglary= ((1/$totalCrimes) * ($Burglary/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppChild_Abuse= ((1/$totalCrimes) * ($Child_Abuse/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppChild_Pornography= ((1/$totalCrimes) * ($Child_Pornography/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppCredit_Card_Fraud= ((1/$totalCrimes) * ($Credit_Card_Fraud/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppConspiracy= ((1/$totalCrimes) * ($Conspiracy/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppCyberbulling= ((1/$totalCrimes) * ($Cyberbulling/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppDisturbing_the_peace= ((1/$totalCrimes) * ($Disturbing_the_peace/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppDomestic_Violence= ((1/$totalCrimes) * ($Domestic_Violence/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppDrug_Possession= ((1/$totalCrimes) * ($Drug_Possession/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppExtortion= ((1/$totalCrimes) * ($Extortion/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppFraud= ((1/$totalCrimes) * ($Fraud/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppHarassment= ((1/$totalCrimes) * ($Harassment/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppHomicide= ((1/$totalCrimes) * ($Homicide/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppHuman_Trafficking= ((1/$totalCrimes) * ($Human_Trafficking/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppIdentity_Theft= ((1/$totalCrimes) * ($Identity_Theft/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppKidnapping= ((1/$totalCrimes) * ($Kidnapping/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppManslaughter= ((1/$totalCrimes) * ($Manslaughter/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppMoney_Laundering= ((1/$totalCrimes) * ($Money_Laundering/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppMurder= ((1/$totalCrimes) * ($Murder/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppProbation_Violation= ((1/$totalCrimes) * ($Probation_Violation/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppPoaching= ((1/$totalCrimes) * ($Poaching/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppRape= ((1/$totalCrimes) * ($Rape/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppRobbery= ((1/$totalCrimes) * ($Robbery/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppSexual_Assault= ((1/$totalCrimes) * ($Sexual_Assault/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppShoplifting= ((1/$totalCrimes) * ($Shoplifting/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppStalking= ((1/$totalCrimes) * ($Stalking/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppTax_Evasion= ((1/$totalCrimes) * ($Tax_Evasion/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppVandalism= ((1/$totalCrimes) * ($Vandalism/$numberCrimes)) / (1/$numberCrimes) *100;
      $ppWhite_Collar_Crimes= ((1/$totalCrimes) * ($White_Collar_Crimes/$numberCrimes)) / (1/$numberCrimes) *100;



    }

  }


  // an array to hold all the names of the Crimes
  $crimesArray = array("Assault","Arson","Bribery","Burglary","Child_Abuse","Child_Pornography","Credit_Card_Fraud","Conspiracy","Cyberbulling","Disturbing_the_peace","
  Domestic_Violence","Drug_Possession","Extortion","Fraud","Harassment","Homicide","Human_Trafficking","Identity_Theft","kidnapping","Manslaughter","
  Money_Laundering","Murder","Probation_Violation","Poaching","Rape","Robbery","Sexual_Assault","Shoplifting","Stalking","Tax_Evasion","Vandalism","
  White_Collar_Crimes");


  // an array to hold the postierior probability of all crimes
  $ppArray = array("$ppAssault","$ppArson","$ppBribery","$ppBurglary","$ppChild_Abuse","$ppChild_Pornography","$ppCredit_Card_Fraud","$ppConspiracy","$ppCyberbulling","$ppDisturbing_the_peace","
  $ppDomestic_Violence","$ppDrug_Possession","$ppExtortion","$ppFraud","$ppHarassment","$ppHomicide","$ppHuman_Trafficking","$ppIdentity_Theft","$ppKidnapping","$ppManslaughter","
  $ppMoney_Laundering","$ppMurder","$ppProbation_Violation","$ppPoaching","$ppRape","$ppRobbery","$ppSexual_Assault","$ppShoplifting","$ppStalking","$ppTax_Evasion","$ppVandalism","
  $ppWhite_Collar_Crimes");

  // variable to hold the length of the crimes Array
  $crimesArrayLength = count($crimesArray);

  // variable to hold the length of the posterior probability  array
  $ppArrayLength = count($ppArray);


?>

<!DOCTYPE html>
<html>
<head>
<title>Sort a HTML Table Numerically</title>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
</style>
</head>
<body>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost/websites/train/admin.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">P</a>
        </li>
      </ul>

      <ul class="navbar-nav " >
        <li>
          <a class="nav-link" href="http://localhost/websites/train/logout.php">Log out</a>
        </li>
      </ul>
    </div>
  </nav>




<form action="naivebayes2.php" method="post">
  <!-- Search form -->
  <div class="md-form mt-0">
    <input  type="text" placeholder="County" aria-label="Search" name="county">
    <!-- <select name="county" id="county" class="form-control-sm form-control">

        <option value="Mombasa">Mombasa</option>
        <option value="Kwale">Kwale</option>
        <option value="Kilifi">Kilifi</option>
        <option value="Tana River">Tana River</option>
        <option value="Lamu">Lamu</option>
        <option value="Taita-Taveta">Taita-Taveta</option>
        <option value="Garissa">Garissa</option>
        <option value="Wajir">Wajir</option>
        <option value="Mandera">Mandera</option>
        <option value="Marsabit">Marsabit</option>
        <option value="Isiolo">Isiolo</option>
        <option value="Meru">Meru</option>
        <option value="Tharaka-Nithi">Tharaka-Nithi</option>
        <option value="Embu">Embu</option>
        <option value="Kitui">Kitui</option>
        <option value="Machakos">Machakos</option>
        <option value="Makueni">Makueni</option>
        <option value="Nyandarua">Nyandarua</option>
        <option value="Nyeri">Nyeri</option>
        <option value="Kirinyaga">Kirinyaga</option>
        <option value="Muranga">Muranga</option>
        <option value="Kiambu">Kiambu</option>
        <option value="Turkana">Turkana</option>
        <option value="West Pokot">West Pokot</option>
        <option value="Samburu">Samburu</option>
        <option value="Trans-Nzioa">Trans-Nzioa</option>
        <option value="Uasin Gishu">Uasin Gishu</option>
        <option value="Elgeyo-Marakwet">Elgeyo-Marakwet</option>
        <option value="Nandi">Nandi</option>
        <option value="Baringo">Baringo</option>
        <option value="Laikipia">Laikipia</option>
        <option value="Nakuru">Nakuru</option>
        <option value="Narok">Narok</option>
        <option value="Kajiado">Kajiado</option>
        <option value="Kericho">Kericho</option>
        <option value="Bomet">Bomet</option>
        <option value="Kakamega">Kakamega</option>
        <option value="Vihiga">Vihiga</option>
        <option value="Bungoma">Bungoma</option>
        <option value="Busia">Busia</option>
        <option value="Siaya">Siaya</option>
        <option value="Kisumu">Kisumu</option>
        <option value="Homa Bay">Homa Bay</option>
        <option value="Migori">Migori</option>
        <option value="Kisii">Kisii</option>
        <option value="Nyamira">Nyamira</option>
        <option value="Nairobi">Nairobi</option>
    </select> -->
    <button class="btn btn-primary" type="button" class="btn btn-primary">Search</button>
  </div>


</form>

<h1><p>Now showing result for: <strong><?php echo $county; ?></strong></p></h1>

<p>Click the button to sort the table numerically:</p>
<p><button type="button" class="btn btn-success" onclick="sortTable()">Sort</button></p>


<table id="myTable">
  <tr>
    <th>Possibility(%)</th>
    <th>Crime to be committed</th>
  </tr>
  <?php

  // place variables in a table
  for ($i = 0; $i<$ppArrayLength; $i++){
    echo '<tr><td>'.$ppArray[$i].'</td><td>'.$crimesArray[$i].'</td> </tr>';

  }
?>


</table>

<script>
function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[0];
      y = rows[i + 1].getElementsByTagName("TD")[0];
      //check if the two rows should switch place:
      if (Number(x.innerHTML) < Number(y.innerHTML)) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>


</body>
</html>
