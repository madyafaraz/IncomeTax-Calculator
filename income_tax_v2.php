<?php

    //set income variable
	$income = filter_input(INPUT_POST, 'income', FILTER_VALIDATE_INT);
	
	//define tax rate array
	define ('TAX_RATES',
	  array(
		'Single' => array(
		  'Rates' => array(10,15,25,28,33,35,39.6),
		  'Ranges' => array(0,9275,37650,91150,190150,413350,415050),
		  'MinTax' => array(0,927.50,5183.75,18558.75,46278.75,119934.75,120529.75)
		  ),
		'Married_Jointly' => array(
		  'Rates' => array(10,15,25,28,33,35,39.6),
		  'Ranges' => array(0,18550,75300,151900,231450,413350,466950),
		  'MinTax' => array(0,1855.00,10367.50,29517.50,51791.50,111818.50,130578.50)
		  ),
		'Married_Separately' => array(
		  'Rates' => array(10,15,25,28,33,35,39.6),
		  'Ranges' => array(0,9275,37650,75950,115725,206675,233475),
		  'MinTax' => array(0,927.50,5183.75,14758.75,25895.75,55909.25,65289.25)
		  ),
		'Head_Household' => array(
		  'Rates' => array(10,15,25,28,33,35,39.6),
		  'Ranges' => array(0,13250,50400,130150,210800,413350,441000),
		  'MinTax' => array(0,1325.00,6897.50,26835.00,49417,116258.50,125936)
		  )
		)
	);

	//calculate Income tax bracket
	function incomeTax($income, $status){
	  $ranges = TAX_RATES[$status]['Ranges'];
	  $minTax = TAX_RATES[$status]['MinTax'];
	  $rate = TAX_RATES[$status]['Rates'];
		if ($income > $ranges[6]) {
		  $calculatedIncome = $minTax[6] + (($income - $ranges[6]) * (($rate[6]) * .01));
		  return number_format($calculatedIncome, 2); 
		}
	  foreach ($ranges as $key => $range) {
	    if (($range > $income) && ($ranges[$key-1] < $income)){
		  $calculatedIncome = $minTax[$key] + (($income - $ranges[$key]) * (($rate[$key-1]) * .01));
		  return number_format($calculatedIncome, 2); 
		  break;
		}  
	  }  
	};
	
?>
	
<!DOCTYPE html>
<html>
<head>
  <title>Income Tax Calculator</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>

<body>
	<h2 class="text-info"> INCOME TAX CALCULATOR </h2>
    <?php if (!empty($error)) { ?>
        <p><?php echo htmlspecialchars($error); ?></p>
    <?php } ?>
	<form action="income_tax_v2.php" method="post">
			<div id="data">
				<label>Your Net Income:</label>
				<input type="text" name="income" placeholder="Taxable Income" class="form-control" value=""><br>
            </div> 
                <div id="buttons">
					<label>&nbsp;</label>
					<input type="submit" value="Submit" class="btn btn-info"><br>
				</div>
    </form>
    <p>  </p>
<?php if($income) : ?>
    <p> With a net taxable income of $ <?php echo number_format($income, 2,'.', ',') ?></p>
        <div class="container">
            <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Status</th>
                    <th>Tax</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (TAX_RATES as $status => $value) : ?>
                <tr>
                    <td><?php echo $status; ?></td>
                    <td>$<?php echo incomeTax($income, $status); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>
</div>
<div class="taxTables">
<h1>2016 Tax Tables</h1>
    <?php foreach (TAX_RATES as $status => $value) : ?>
        <h3><?php echo $status; ?></h3>
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Taxable Income</th>
                    <th>Tax Rate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$<?php echo number_format(TAX_RATES[$status]['Ranges'][0]); ?> - $<?php echo number_format(TAX_RATES[$status]['Ranges'][1]); ?></td>
                    <td><?php echo TAX_RATES[$status]['Rates'][0]; ?>%</td>
                </tr>
                    <?php for ($i = 1; $i<6; $i++) { ?>
                <tr>
                    <td>$<?php echo number_format(TAX_RATES[$status]['Ranges'][$i] + 1); ?> - $<?php echo number_format(TAX_RATES[$status]['Ranges'][$i + 1]); ?></td>
                    <td>$<?php echo number_format(TAX_RATES[$status]['MinTax'][$i], 2); ?> plus <?php echo TAX_RATES[$status]['Rates'][$i]; ?>% of the amount over $<?php echo number_format(TAX_RATES[$status]['Ranges'][$i]); ?></td>
                </tr>
                    <?php } ?>
                <tr>
                    <td>$<?php echo number_format(TAX_RATES[$status]['Ranges'][6]); ?> or more</td>
                    <td>$<?php echo number_format(TAX_RATES[$status]['MinTax'][6], 2); ?> plus <?php echo TAX_RATES[$status]['Rates'][6]; ?>% of the amount over $<?php echo number_format(TAX_RATES[$status]['Ranges'][6]); ?></td>
                </tr>
            </tbody>
        </table>
    <?php endforeach; ?>




</body>
</html>