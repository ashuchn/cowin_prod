<?php 


$sessions = "https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByPin?pincode={PINCODE}&date={DATE}";
//https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByPin?pincode=110019&date=31-10-2021
if(isset($_GET['submit']))
{
    $date = $_GET['date'];
    $pincode = $_GET['pincode'];
    $d = explode("/",$date);
    // print_r($d);
    $ddmmyyyy = $d[1]."-";
    $ddmmyyyy .= $d[0]."-";
    $ddmmyyyy .= $d[2];
    // echo $ddmmyyyy;

    // echo $vaccine1 = $_GET['covax'];

    $str = str_replace("{PINCODE}", $pincode , $sessions);
    $str1 = str_replace("{DATE}", $ddmmyyyy , $str); 

    $data = file_get_contents($str1);
    $arr = json_decode($data, TRUE);

    if(empty(($arr['sessions'])))
    {
        echo '<script>';
        echo 'alert("Slots not found")';
        echo '</script>';
        echo '<script>window.location("slots_by_pincode.php")</script>';
        
    }
}
    
    
    // print_r($arr);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

    <script src="/extra/script.js"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Antique&display=swap" rel="stylesheet">

    <script>
        $( function() {
            $( "#date" ).datepicker(
                { minDate: 0, maxDate: "+5D", showButtonPanel: true }
            );
        } );
  </script>

<style>
    *{
        font-family: 'Zen Antique', serif;
    }
    .col{
        width:50%;
    }
</style>

    <title>COWIN || Book Vaccine</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">


<div class="book-cont" style="margin-top: 3%;">
<form action="" method="GET" name="slot_finder_form" id="slot_finder_form" onsubmit="return validate()">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Pincode:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" aria-label="Pincode" name="pincode" id="pincode" placeholder="Enter Pincode" id="pincode" value = "<?php if(isset($_GET['submit'])){ echo $pincode;} ?>">
        
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Date:</span>  
        <input type="text" class="form-control" aria-describedby="basic-addon1" aria-label="Date" name="date" id="date" placeholder="MM/DD/YYYY" autocomplete="off" value = "<?php if(isset($_GET['submit'])){ echo $_GET['date'];} ?>">
        

    </div>
    <div class="row mb-3" style="width: 100%; margin-left: 5%">
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="covax">
                <label class="form-check-label" for="flexCheckDefault">
                    Covaxin
                </label>
            </div>
        </div>
        
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="covi">
                <label class="form-check-label" for="flexCheckDefault">
                    Covishield
                </label>
            </div>
        </div>
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="sput">
                <label class="form-check-label" for="flexCheckDefault">
                    Sputnik
                </label>
            </div>
        </div>
    </div>
    
    <div class="input-group mb-3">
        <input type="submit" class="form-control btn-primary" name="submit" value="Find Slots" >
    </div>
</form>



<br>
<hr>
<?php 



?>
<h3>
    <!-- <span class="badge bg-secondary">Showing <?php //echo $i ;?> entries</span> -->
</h3>

<div class="table-container">
    <table class="table table-striped" style="text-align: center;">
        <thead>
            <tr>
                <!-- <th>Center ID</th> -->
                <th>Center Name/State</th>
                <th>Address</th>
                <th>Vaccine</th>
                <th>Slots Available</th>
                <th>Fees</th>
                <th>Slots</th>
            </tr>
        </thead>
        

        <?php if(isset($_GET['submit'])){ ?>
            <?php 
            foreach($arr['sessions'] as $slots) { 
                 ?>
                <tbody>
                    <tr>
                        <!-- <td><?php //echo $slots['center_id'] ?></td> -->
                        <td><?php echo $slots['name']." / ".  $slots['state_name']  ?></td>
                        <td><?php echo $slots['address'] ?></td>
                        <td><?php echo $slots['vaccine'] ?></td>
                        <td><?php echo $slots['available_capacity'] ?></td>
                        <td><?php echo $slots['fee'] ?></td>
                        <td><?php foreach($slots['slots'] as $timings){?>
                            <input type="hidden" value="<?php echo $slots['name'].",".$slots['vaccine'].",".$timings ?>"> 
                            <a href="send_mail.php?to=<?php echo "ashutosh.chauhan@acem.edu.in"?>&to_name=ashutosh_chauhan&location=<?php echo $slots['name'] ?>&date=<?php echo $slots['date'] ?>&time=<?php echo $timings ?>&vaccine=<?php echo $slots['vaccine'] ?>" target="_blank"><span class="badge rounded-pill bg-secondary"><?php echo $timings ;?></span></a> 
                        <?php } ?></td>
                    </tr>
                    
                </tbody>
            
                <?php  } ?>
            <?php } ?>
        

    </table>

 
</div>

</div>
</div> 
</body>
</html>

