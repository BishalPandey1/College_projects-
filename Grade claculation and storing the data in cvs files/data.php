<?php
$name=$_POST['name'];
$english=$_POST['english'];
$nepali=$_POST['nepali'];
$science=$_POST['science'];
$computer=$_POST['computer'];
$math=$_POST['math'];

$total=($english+$nepali+$science+$computer+$math);
// echo $total;
$per=$total/100;
$f=fopen("data.csv","w");
if($per>90)
{
    $grade >= "A";
}
else if($per>=80)
{
    $grade="A-";
}
else if($per>=70)
{
    $grade= "B+";
}
else if($per>= 60)
{
    $grade="B";
}
else if($per>= 50)
{
    $grade= "B-";
}
else{
    $grade="Fail";
    
}
fputcsv($f,array($name,$english,$nepali,$science,$computer,$math,$total,$per."%",$grade));
fclose($f);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
       *{
            text-align: center;
        }
        /* #more{
            text
        }
        table{
            border:3px solid black;
            display:flex;
            justify-content: center;
        } */
        body{
            border:rgb(122,30,200) solid;
        } 
    </style>
</head>
<body>
    <div id="id">
        <h1>Sukuna Multiple Campus</h1>
        <h2>Sundharharicha-12,Morang</h2>
        <h2>Grade Sheet of class practice.</h2>
    </div>
    <div id="more">
        <p>The Grade Secured By:<?php echo $name; ?></p>
        <P>Grade: <?php echo $grade; ?>
        <p1> MARKSHEET </P1>
    </div>
    <center>
    <table border="3px">
            <tr>
                <th>Subject-Code</th>
                <th>Subject</th>
                <th>Marks</th>
            </tr>
            <tr>
                <td>0001</td>
                <td>English</td>
                <td><?php $english?></td>
            </tr>
            <tr>
                <td>0002</td>
                <td>Nepali</td>
                <td><?php $nepali?></td>
            </tr>
            <tr>
                <td>0003</td>
                <td>Science</td>
                <td><?php $science?></td>
            </tr>
            <tr>
                <td>0004</td>
                <td>Computer</td>
                <td><?php $computer?></td>
            </tr>
            <tr>
                <td>0005</td>
                <td>Math</td>
                <td><?php $math?></td>
            </tr>
            <tr>
                <td colspan="2">Total:</td>
                <td><?php echo $total; ?></td>
            </tr>
            <tr>
                <td colspan="2">Percentage</td>
                <td><?php echo $per."%"?></td>
            </tr>
    </table>
    <div class="lasd">
        Prepared By: Bishal Pandey<br>
        checked By: santosh Dahal

    </div>
</body>
</html>
