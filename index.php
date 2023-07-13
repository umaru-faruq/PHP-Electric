<?php
$volt=0;
$ampere=0;
$power=0;
$rate=0;
$energy= 0;

$power = ($_POST['volt'] * $_POST['ampere']) / 1000;
$energy = $power;
$rate = $_POST['rate'] / 100  ;
$total = $rate * $power;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
</head>

<body>
    <h1>Electricity Charges</h1>
    <form action="" method="post">
    <div class="col-sm-6">
            <label class="col sm-3 col-form-label">Volt (V)</label>
            <input type="number" step="0.01" class="form-control" name="volt" id="volt" value="">
    </div>
    <div class="col-sm-6">
            <label class="col sm-3 col-form-label">Ampere (A)</label>
            <input type="number" step="0.01" class="form-control" name="ampere" value="">
    </div>
    <div class="col-sm-6">
            <label class="col sm-3 col-form-label">Current Rate (sen/kWh)</label>
            <input type="number" step="0.01" class="form-control" name="rate" value="">
    </div>
    <div class="col-sm-6">
            <button class='btn btn-primary btn-sm' type="submit" name="calculate" id="calculate" >Calculate</button>
    </div>
        <br>
        <br>
        <br>
    <?php
        echo "Power: " . $power . " kW";
        echo "<br>";
        echo "Rate: RM " . $rate ;
        echo "<br>";
        echo "<br>";

        echo '<table class="table"> 
      <tr> 
          <th> <font face="Arial">Hour</font> </th> 
          <th> <font face="Arial">Energy(kWh) </font> </th> 
          <th> <font face="Arial">Total(RM)</font> </th>  
          
      </tr>';
        
        $hour = 1;
        while($hour<25){
      echo "
    
                <tr>
                <td>$hour</td>
                <td>$energy</td>
                <td>$total</td>
                </tr>    
     ";
        
                $hour++;
                $energy += $energy;
                $total += $total;
}
        echo '</table>'


    ?>
    
        
    </form>
</body>
</html>