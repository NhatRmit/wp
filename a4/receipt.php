<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <?php include 'tools.php' ?>
    <title>Invoice</title>
</head>

<body>
    <div class="container bg-light">
        <img src="media/Logo-02.png" style="height: 100px" alt="Logo">
        <p>RMAXXX Cinema <br> Phone: 0909090909</p>
    </div>
    <div class="container bg-light">
        <h3 style="text-align:center; margin:auto">Invoice</h3>
        <br>

        <?php
            $seatsSTA = $_REQUEST['seatsSTA'];
            $seatsSTP = $_REQUEST['seatsSTP'];
            $seatsSTC = $_REQUEST['seatsSTC'];
            $seatsFCA = $_REQUEST['seatsFCA'];
            $seatsFCP = $_REQUEST['seatsFCP'];
            $seatsFCC = $_REQUEST['seatsFCC'];

            $custname = $_REQUEST['custname'];
            $custemail = $_REQUEST['custemail'];
            $custmobile = $_REQUEST['custmobile'];
            $custcard = $_REQUEST['custcard'];
            $custexpiryYear = $_REQUEST['custexpiryYear'];
            $custexpiryMonth = $_REQUEST['custexpiryMonth'];

            $movieid = $_REQUEST['movieid'];
            $movieday = $_REQUEST['movieday'];
            $moviehour = $_REQUEST['moviehour'];

            $group = array ("Standard","First Class","Standard and First Class");
            $Type = array("STA","STP","STC","FCA","FCP","FCC");

            if 
             (
             !empty($seatsFCA) && !empty($seatsSTA)|| 
             !empty($seatsFCA) && !empty($seatsSTP)||
             !empty($seatsFCA) && !empty($seatsSTC)||  
             !empty($seatsFCP) && !empty($seatsSTP)|| 
             !empty($seatsFCP) && !empty($seatsSTA)|| 
             !empty($seatsFCP) && !empty($seatsSTC)|| 
             !empty($seatsFCC) && !empty($seatsSTC)||
             !empty($seatsFCC) && !empty($seatsSTA)||
             !empty($seatsFCC) && !empty($seatsSTP)  
             )
            {
                $seatDetail = $seatsSTA; 
                $SeatQ = $seatsSTA + $seatsSTP + $seatsSTC +$seatsFCA + $seatsFCP +$seatsFCP;
                $groupseat = $group[2];
            } 
            else if
            (!empty($seatsSTA) || !empty($seatsSTP) || !empty($seatsSTC)) 
            {
                $SeatQ = $seatsSTA + $seatsSTP + $seatsSTC;
                $groupseat = $group[0];
            } 
            else if(!empty($seatsFCA) || !empty($seatsFCP) || !empty($seatsFCC)) 
            {
                $SeatQ = $seatsFCA + $seatsFCP +$seatsFCP;
                $groupseat = $group[1];
            }
                


            $prices = array("STA"=>"19.80","STP"=>"17.50","STC"=>"15.30","FCA"=>"30.00","FCP"=>"27.00","FCC"=>"24.00");
            $pricesDisc = array("STA"=>"15.84","STP"=>"14.00","STC"=>"12.24","FCA"=>"24.00","FCP"=>"21.60","FCC"=>"19.20");       
            if ($movieday == 'MON' && $moviehour == 'T12' || $movieday == 'TUE' && $moviehour == 'T12' || $movieday == 'WED' && $moviehour == 'T12' || $movieday == 'THU' && $moviehour == 'T12' || $movieday == 'FRI' && $moviehour == 'T12') {
                $prices=$pricesDisc;
            } 
            $Sub = $prices['STA']*$seatsSTA + $prices['STP']*$seatsSTP + $prices['STC']*$seatsSTC + $prices['FCA']*$seatsFCA + $prices['FCP']*$seatsFCP + $prices['FCC']*$seatsFCC; 
            
            ?>
        <?php
            echo ("<h4>Customer Information</h4>");
            echo ("Name: " . $custname);
            echo ("<br>Email: " . $custemail);
            echo ("<br>Mobile: " . $custmobile);
            echo ("<br>Card: " . $custcard);
            echo ("<br>Expiry date: " . $custexpiryYear . "/" . $custexpiryMonth);
            echo ("<br>---------------------------------------------------------------");
        ?>
        
        <?php echo ("<h4>Movie Information</h4>");?>
        <table class="table table-bordered table-striped" >
            <thead>
                <tr>
                    <th>Movie Title</th>
                    <th>Day</th>
                    <th>Hour</th>
                </tr>
            </thead>
            <tr>
                <td><?php echo ($movieid); ?></td>
                <td><?php echo ($movieday); ?></td>
                <td><?php echo ($moviehour); ?></td>
            </tr>

        </table>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Type of SEAT</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tr>
                <td><?php echo $Type[0]?></td>
                <td><?php echo $prices['STA'];?></td>
                <td><?php echo ($seatsSTA);?></td>
            </tr>
            <tr>
                <td><?php echo $Type[1]?></td>
                <td><?php echo $prices['STP'];?></td>
                <td><?php echo ($seatsSTP);?></td>
            </tr>
            <tr>
                <td><?php echo $Type[2]?></td>
                <td><?php echo $prices['STC'];?></td>
                <td><?php echo ($seatsSTC);?></td>
            </tr>
            <tr>
                <td><?php echo $Type[3]?></td>
                <td><?php echo $prices['FCA'];?></td>
                <td><?php echo ($seatsFCA);?></td>
            </tr>
            <tr>
                <td><?php echo $Type[4]?></td>
                <td><?php echo $prices['FCP'];?></td>
                <td><?php echo ($seatsFCP);?></td>
            </tr>
            <tr>
                <td><?php echo $Type[5]?></td>
                <td><?php echo $prices['FCC'];?></td>
                <td><?php echo ($seatsFCC);?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><?php echo ("TotalSeats: " . $TotalQty = $seatsSTA + $seatsSTP +$seatsSTC +$seatsFCA +$seatsFCP +$seatsFCC );?></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><?php echo ("Subtotal: $" . number_format($Sub, 2, '.', ',')); ?></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><?php echo ("VAT: $" . number_format($VAT=$Sub*0.1, 2, '.', ',')); ?></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><?php echo ("Total: $" . number_format($Total=$Sub - $VAT, 2, '.', ',')); ?></td>
            </tr>
            
        </table>
    </div>

    <div class="container bg-light">
    <h3 style="text-align:center; margin:auto">Ticket</h3>
    <br>

    <?php 

        echo("Movie Title: ".$movieid . " " . "Day: ".$movieday . " " . "Hour: " . $moviehour);
        echo("<br>");
        echo("Seat Quantity: " . $SeatQ);
        echo("<br>");
        echo("Group Seat: " .  $groupseat);
    ?>

    </div>
</body>

<footer style="position:fixed; bottom:0px">
</footer>

</html>