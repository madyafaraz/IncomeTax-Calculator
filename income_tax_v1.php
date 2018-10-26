<?php 
if(isset($_POST['income'])) {
    $income = $_POST['income'];
    $singleTax='';
    $marriedJointTax ='';
    $marriedSeperateTax = '';
    $marriedHouseholdTax = '';
   
    //calculate incomeTaxSingle
    function incomeTaxSingle($income) {
       if($income >= 0 && $income <= 9275){
           $itSingle = (($income * 10)/100);
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";
           
       } elseif($income >= 9276 && $income <= 37650){
           $itSingle = ((($income - 9275) * 15)/ 100) + 927.50;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 37651 && $income <= 91150){
           $itSingle = ((($income - 37650) * 25)/ 100) + 5183.75;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 91151 && $income <= 190150){
           $itSingle = ((($income - 91150) * 28)/ 100) + 18558.75;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 190151 && $income <= 413350){
           $itSingle = ((($income - 190150) * 33)/ 100) + 46278.75;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 413351 && $income <= 415050){
           $itSingle = ((($income - 413350) * 35)/ 100) + 119934.75;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 415051){
           $itSingle = ((($income - 415050) * 39.6)/ 100) + 120529.75;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } else
           echo "Please enter a valid salary.";

   }


   //calculate incomeTaxMarriedJointly
   function incomeTaxMarriedJointly($income) {
       if($income >= 0 && $income <= 18550){
           $itSingle = (($income * 10)/100);
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";
           
       } elseif($income >= 18551 && $income <= 75300){
           $itSingle = ((($income - 18550) * 15)/ 100) + 1855;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 75301 && $income <= 151900){
           $itSingle = ((($income - 75300) * 25)/ 100) + 10367.50;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 151901 && $income <= 231450){
           $itSingle = ((($income - 151900) * 28)/ 100) + 29517.50;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 231451 && $income <= 413350){
           $itSingle = ((($income - 231450) * 33)/ 100) + 51791.50;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 413351 && $income <= 466950){
           $itSingle = ((($income - 413350) * 35)/ 100) + 111818.50;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 466951){
           $itSingle = ((($income - 466950) * 39.6)/ 100) + 130578.50;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } else
           echo "Please enter a valid salary.";

   }

   //calculate incomeTaxMarriedSeparately
   function incomeTaxMarriedSeparately($income) {
       if($income >= 0 && $income <= 9275){
           $itSingle = (($income * 10)/100);
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";
           
       } elseif($income >= 9276 && $income <= 37650){
           $itSingle = ((($income - 9275) * 15)/ 100) + 927.50;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 37651 && $income <= 75950){
           $itSingle = ((($income - 37650) * 25)/ 100) + 5183.75;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 75951 && $income <= 115725){
           $itSingle = ((($income - 75950) * 28)/ 100) + 14758.75;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 115726 && $income <= 206675){
           $itSingle = ((($income - 115725) * 33)/ 100) + 25895.75;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 206676 && $income <= 233475){
           $itSingle = ((($income - 206675) * 35)/ 100) + 55909.25;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 233476){
           $itSingle = ((($income - 233475) * 39.6)/ 100) + 65289.25;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } else
           echo "Please enter a valid salary.";
   }

   //calculate ncomeTaxHeadOfHousehold
   function incomeTaxHeadOfHousehold($income) {
       if($income >= 0 && $income <= 13250){
           $itSingle = (($income * 10)/100);
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";
           
       } elseif($income >= 13251 && $income <= 50400){
           $itSingle = ((($income - 13250) * 15)/ 100) + 1325;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 50401 && $income <= 130150){
           $itSingle = ((($income - 50400) * 25)/ 100) + 6897.50;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 130151 && $income <= 210800){
           $itSingle = ((($income - 130150) * 28)/ 100) + 26835;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 210801 && $income <= 413350){
           $itSingle = ((($income - 210800) * 33)/ 100) + 49417;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 413351 && $income <= 441000){
           $itSingle = ((($income - 413350) * 35)/ 100) + 116258.50;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } elseif($income >= 441001){
           $itSingle = ((($income - 441000) * 39.6)/ 100) + 125936;
           $itSingle = number_format($itSingle, 2, '.', ',');
           echo "$$itSingle";

       } else
           echo "Please enter a valid salary.";

   }

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>

<body>
    <h2 class="text-info"> INCOME TAX CALCULATOR </h2>
    <form action="income_tax_v1.php" method="post">
    <div id="data">
                <label>Your Net Income:</label>
                <input type="text" class="form-control" name="income" placeholder="Taxable Income"><br>
    </div>
    <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Submit" class="btn btn-info"><br>
    </div>
    </form>
    <p></p>
<div class="container">
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
?>
<p>With a net taxable income of $<?php echo number_format($income, 2, '.', ',');?> </p>
<table class="table table-striped">
<thead class="thead-light">
<tr>
  <th>Status</th>
  <th>Tax</th>
</tr>
</thead>
<tr>
  <td>Single</td>
  <td><?php if(isset($_POST['income'])) { echo incomeTaxSingle($_POST['income']);} ?></td>
</tr>
<tr>
  <td>Married Filing Jointly</td>
  <td><?php if(isset($_POST['income'])) { echo incomeTaxMarriedJointly($_POST['income']);} ?></td>
</tr>
<tr>
  <td>Married Filing Separately</td>
  <td><?php if(isset($_POST['income'])) { echo incomeTaxMarriedSeparately($_POST['income']);} ?></td>
</tr>
<tr>
  <td>Heade of Household</td>
  <td><?php if(isset($_POST['income'])) { echo incomeTaxHeadOfHousehold($_POST['income']);}  ?></td>
</tr>
</table>
<?php
    }
?>
</div>

</body>
</html>