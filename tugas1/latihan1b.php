<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
    <?php
    $letterA = 'A';
    $letterB = 'B';
    $letterC = 'C';
    ?>

    <div >
        <div class="row">
            <div class="box"><?php echo $letterA; ?></div>
        </div>
        <div class="row">
            <div class="box"><?php echo $letterA; ?></div>
            <div class="box"><?php echo $letterB; ?></div>
            
        </div>
        <div class="row">
            <div class="box"><?php echo $letterA; ?></div>
            <div class="box"><?php echo $letterB; ?></div>
            <div class="box"><?php echo $letterC; ?></div>
        </div>
    </div>
    <div>
    <style>
       
            

        
        .clear{
            display: flex;
            margin-bottom: 10px;
            align-items: left;
            
        }
        .kotak {
            width: 100px;
            height: 100px;
            border: 1px solid black;
            text-align: center;
            line-height: 100px;
            align-items: left;
           margin: 5px;
            
        }
    </style>
   

    </div>
   
</body>
</html>
