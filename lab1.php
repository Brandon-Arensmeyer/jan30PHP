<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1</title>
</head>
<body>
    <h3>PHP basics lab</h3>
    <?php
        $head1 = 'Catalog Number';
        $head2 = 'Description';
        $head3 = 'Cost';

        $catNum = array('T001', 'T002', 'C001', 'R001');
        $desc = array('2N2222 Transistor', '2N3904 Transistor', '10 uF Electrolytic Cap', '180 Ohm 1/4 watt resistor');
        $cost = array('0.16', '0.21', '0.12', '0.06');
        
        
        $catLen = count($catNum);

        echo "<table align='left' border='1' style='width:25%'>";
        echo "<tr>";
        echo "<th>$head1</th>";
        echo "<th>$head2</th>";
        echo "<th>$head3</th>";
        echo "</tr>";
        for($i = 0; $i < $catLen; $i++){
            echo "<tr>";
            echo "<td>$catNum[$i]</td>";
            echo "<td>$desc[$i]</td>";
            echo "<td>$cost[$i]</td>";
            echo "</tr><br />";
        }
        echo "</table>"
    ?>
</body>
</html>