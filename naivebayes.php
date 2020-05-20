<?php
require ('database/dbconnection.php');
$query = "select * from crimetable order by id desc";
$result = mysqli_query($con, $query);
$counter = 0;
$Assault=$Arson=$Bribery=$Burglary=$Child_Abuse=$Child_Pornography=$Credit_Card_Fraud=$Conspiracy=$Cyberbulling=$Disturbing_the_peace=
$Domestic_Violence=$Drug_Possession=$Extortion=$Fraud=$Harassment=$Homicide=$Human_Trafficking=$Identity_Theft=$Kidnapping=$Manslaughter=
$Money_Laundering=$Murder=$Probation_Violation=$Poaching=$Rape=$Robbery=$Sexual_Assault=$Shoplifting=$Stalking=$Tax_Evasion=$Vandalism=
$White_Collar_Crimes=1;
// posterior probability
$ppAssault=$ppArson=$ppBribery=$ppBurglary=$ppChild_Abuse=$ppChild_Pornography=$ppCredit_Card_Fraud=$ppConspiracy=$ppCyberbulling=$ppDisturbing_the_peace=
$ppDomestic_Violence=$ppDrug_Possession=$ppExtortion=$ppFraud=$ppHarassment=$ppHomicide=$ppHuman_Trafficking=$ppIdentity_Theft=$ppKidnapping=$ppManslaughter=
$ppMoney_Laundering=$ppMurder=$ppProbation_Violation=$ppPoaching=$ppRape=$ppRobbery=$ppSexual_Assault=$ppShoplifting=$ppStalking=$ppTax_Evasion=$ppVandalism=
$ppWhite_Collar_Crimes=1;
$totalCrimes=32;  // all the crimes that can happen
$numberCrimes=0; // total number of crimes that have happend in that county
while ($row = mysqli_fetch_array($result)){

    if($row['county'] =='Nairobi'){

      $counter++;

      //count number of crimes in respective count
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



      $numberCrimes=$Assault+$Arson+$Bribery+$Burglary+$Child_Abuse+$Child_Pornography+$Credit_Card_Fraud+$Conspiracy+$Cyberbulling+$Disturbing_the_peace+
      $Domestic_Violence+$Drug_Possession+$Extortion+$Fraud+$Harassment+$Homicide+$Human_Trafficking+$Identity_Theft+$Kidnapping+$Manslaughter+
      $Money_Laundering+$Murder+$Probation_Violation+$Poaching+$Rape+$Robbery+$Sexual_Assault+$Shoplifting+$Stalking+$Tax_Evasion+$Vandalism+$White_Collar_Crimes;



      $ppAssault= ((1/$totalCrimes) * ($Assault/$numberCrimes)) / (1/$numberCrimes);
      $ppArson= ((1/$totalCrimes) * ($Arson/$numberCrimes)) / (1/$numberCrimes);
      $ppBribery= ((1/$totalCrimes) * ($Bribery/$numberCrimes)) / (1/$numberCrimes);
      $ppBurglary= ((1/$totalCrimes) * ($Burglary/$numberCrimes)) / (1/$numberCrimes);
      $ppChild_Abuse= ((1/$totalCrimes) * ($Child_Abuse/$numberCrimes)) / (1/$numberCrimes);
      $ppChild_Pornography= ((1/$totalCrimes) * ($Child_Pornography/$numberCrimes)) / (1/$numberCrimes);
      $ppCredit_Card_Fraud= ((1/$totalCrimes) * ($Credit_Card_Fraud/$numberCrimes)) / (1/$numberCrimes);
      $ppConspiracy= ((1/$totalCrimes) * ($Conspiracy/$numberCrimes)) / (1/$numberCrimes);
      $ppCyberbulling= ((1/$totalCrimes) * ($Cyberbulling/$numberCrimes)) / (1/$numberCrimes);
      $ppDisturbing_the_peace= ((1/$totalCrimes) * ($Disturbing_the_peace/$numberCrimes)) / (1/$numberCrimes);
      $ppDomestic_Violence= ((1/$totalCrimes) * ($Domestic_Violence/$numberCrimes)) / (1/$numberCrimes);
      $ppDrug_Possession= ((1/$totalCrimes) * ($Drug_Possession/$numberCrimes)) / (1/$numberCrimes);
      $ppExtortion= ((1/$totalCrimes) * ($Extortion/$numberCrimes)) / (1/$numberCrimes);
      $ppFraud= ((1/$totalCrimes) * ($Fraud/$numberCrimes)) / (1/$numberCrimes);
      $ppHarassment= ((1/$totalCrimes) * ($Harassment/$numberCrimes)) / (1/$numberCrimes);
      $ppHomicide= ((1/$totalCrimes) * ($Homicide/$numberCrimes)) / (1/$numberCrimes);
      $ppHuman_Trafficking= ((1/$totalCrimes) * ($Human_Trafficking/$numberCrimes)) / (1/$numberCrimes);
      $ppIdentity_Theft= ((1/$totalCrimes) * ($Identity_Theft/$numberCrimes)) / (1/$numberCrimes);
      $ppKidnapping= ((1/$totalCrimes) * ($Kidnapping/$numberCrimes)) / (1/$numberCrimes);
      $ppManslaughter= ((1/$totalCrimes) * ($Manslaughter/$numberCrimes)) / (1/$numberCrimes);
      $ppMoney_Laundering= ((1/$totalCrimes) * ($Money_Laundering/$numberCrimes)) / (1/$numberCrimes);
      $ppMurder= ((1/$totalCrimes) * ($Murder/$numberCrimes)) / (1/$numberCrimes);
      $ppProbation_Violation= ((1/$totalCrimes) * ($Probation_Violation/$numberCrimes)) / (1/$numberCrimes);
      $ppPoaching= ((1/$totalCrimes) * ($Poaching/$numberCrimes)) / (1/$numberCrimes);
      $ppRape= ((1/$totalCrimes) * ($Rape/$numberCrimes)) / (1/$numberCrimes);
      $ppRobbery= ((1/$totalCrimes) * ($Robbery/$numberCrimes)) / (1/$numberCrimes);
      $ppSexual_Assault= ((1/$totalCrimes) * ($Sexual_Assault/$numberCrimes)) / (1/$numberCrimes);
      $ppShoplifting= ((1/$totalCrimes) * ($Shoplifting/$numberCrimes)) / (1/$numberCrimes);
      $ppStalking= ((1/$totalCrimes) * ($Stalking/$numberCrimes)) / (1/$numberCrimes);
      $ppTax_Evasion= ((1/$totalCrimes) * ($Tax_Evasion/$numberCrimes)) / (1/$numberCrimes);
      $ppVandalism= ((1/$totalCrimes) * ($Vandalism/$numberCrimes)) / (1/$numberCrimes);
      $ppWhite_Collar_Crimes= ((1/$totalCrimes) * ($White_Collar_Crimes/$numberCrimes)) / (1/$numberCrimes);



    }

  }

  echo $counter;
  echo '<br/>

  </br/>';

  echo  $ppMurder; echo '<br/>';

  echo '$Assault->'; echo $Assault; echo ' $ppAssault ->'; echo $ppAssault; echo '<br  />';
  echo '$Arson->'; echo $Arson; echo ' $ppArson ->'; echo $ppArson; echo '<br/>';
  echo '$Bribery->'; echo $Bribery; echo ' $ppBribery ->'; echo $ppBribery; echo '<br/>';
  echo '$Burglary->'; echo $Burglary; echo ' $ppBurglary ->'; echo $ppBurglary; echo '<br/>';
  echo '$Child_Abuse->'; echo $Child_Abuse; echo ' $ppChild_Abuse ->'; echo $ppChild_Abuse; echo '<br/>';
  echo '$Child_Pornography->'; echo $Child_Pornography; echo ' $ppChild_Pornography ->'; echo $ppChild_Pornography; echo '<br/>';
  echo '$Credit_Card_Fraud->'; echo $Credit_Card_Fraud; echo ' $ppCredit_Card_Fraud ->'; echo $ppCredit_Card_Fraud; echo '<br/>';
  echo '$Conspiracy->'; echo $Conspiracy; echo ' $ppConspiracy ->'; echo $ppConspiracy; echo '<br/>';
  echo '$Cyberbulling->'; echo $Cyberbulling; echo ' $ppCyberbulling ->'; echo $ppCyberbulling; echo '<br/>';
  echo '$Disturbing_the_peace->'; echo $Disturbing_the_peace; echo ' $ppDisturbing_the_peace ->'; echo $ppDisturbing_the_peace; echo '<br/>';
  echo '$Domestic_Violence->'; echo $Domestic_Violence; echo ' $ppDomestic_Violence ->'; echo $ppDomestic_Violence; echo '<br/>';
  echo '$Drug_Possession->'; echo $Drug_Possession; echo ' $ppDrug_Possession ->'; echo $ppDrug_Possession; echo '<br/>';
  echo '$Extortion->'; echo $Extortion; echo ' $ppExtortion ->'; echo $ppExtortion; echo '<br/>';
  echo '$Fraud->'; echo $Fraud; echo ' $ppFraud ->'; echo $ppFraud; echo '<br/>';
  echo '$Harassment->'; echo $Harassment; echo ' $ppHarassment ->'; echo $ppHarassment; echo '<br/>';
  echo '$Homicide->'; echo $Homicide; echo ' $ppHomicide ->'; echo $ppHomicide; echo '<br/>';
  echo '$Human_Trafficking->'; echo $Human_Trafficking; echo ' $ppHuman_Trafficking ->'; echo $ppHuman_Trafficking; echo '<br/>';
  echo '$Identity_Theft->'; echo $Identity_Theft; echo ' $ppIdentity_Theft ->'; echo $ppIdentity_Theft; echo '<br/>';
  echo '$Kidnapping->'; echo $Kidnapping; echo ' $ppKidnapping ->'; echo $ppKidnapping; echo '<br/>';
  echo '$Manslaughter->'; echo $Manslaughter; echo ' $ppManslaughter ->'; echo $ppManslaughter; echo '<br/>';
  echo '$Money_Laundering->'; echo $Money_Laundering; echo ' $ppMoney_Laundering ->'; echo $ppMoney_Laundering; echo '<br/>';
  echo '$Murder->'; echo $Murder; echo ' $ppMurder ->'; echo $ppMurder; echo '<br/>';
  echo '$Probation_Violation->'; echo $Probation_Violation; echo ' $ppProbation_Violation ->'; echo $ppProbation_Violation; echo '<br/>';
  echo '$Poaching->'; echo $Poaching; echo ' $ppPoaching ->'; echo $ppPoaching; echo '<br/>';
  echo '$Rape->'; echo $Rape; echo ' $ppRape ->'; echo $ppRape; echo '<br/>';
  echo '$Robbery->'; echo $Robbery; echo ' $ppRobbery ->'; echo $ppRobbery; echo '<br/>';
  echo '$Sexual_Assault->'; echo $Sexual_Assault; echo ' $ppSexual_Assault ->'; echo $ppSexual_Assault; echo '<br/>';
  echo '$Shoplifting->'; echo $Shoplifting; echo ' $ppShoplifting ->'; echo $ppShoplifting; echo '<br/>';
  echo '$Stalking->'; echo $Stalking; echo ' $ppStalking ->'; echo $ppStalking; echo '<br/>';
  echo '$Tax_Evasion->'; echo $Tax_Evasion; echo ' $ppTax_Evasion ->'; echo $ppTax_Evasion; echo '<br/>';
  echo '$Vandalism->'; echo $Vandalism; echo ' $ppVandalism ->'; echo $ppVandalism; echo '<br/>';
  echo '$White_Collar_Crimes->'; echo $White_Collar_Crimes; echo ' $ppWhite_Collar_Crimes ->'; echo $ppWhite_Collar_Crimes; echo '<br/>';

  // $Assault=$Arson=$Bribery=$Burglary=$Child_Abuse=$Child_Pornography=$Credit_Card_Fraud=$Conspiracy=$Cyberbulling=$Disturbing_the_peace=
  // $Domestic_Violence=$Drug_Possession=$Extortion=$Fraud=$Harassment=$Homicide=$Human_Trafficking=$Identity_Theft=$Kidnapping=$Manslaughter=
  // $Money_Laundering=$Murder=$Probation_Violation=$Poaching=$Rape=$Robbery=$Sexual_Assault=$Shoplifting=$Stalking=$Tax_Evasion=$Vandalism=
  // $White_Collar_Crimes



?>
