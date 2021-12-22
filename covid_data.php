<?php 

// include("navbar.php");


// if(isset($_POST['submit1']))
// {
//     // // print_r($_POST['submit1']);
//     // echo $_POST['country']."<br>";
//     // echo $_POST['date'];
    
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        $(document).ready(function() {
        $('.js-example-basic-single').select2({
            placeholder: 'Select an option',
            theme: "classic"
        })
    });
    </script>
    
    <title>Covid Data</title>
</head>
<body>
    <div class="w3-container">
        <div class="w3-panel w3-padding w3-border w3-round w3-green w3-center">
           <b><h4> Covid Data by Country</h4> </b>
        </div>
        <hr>
        <div class="w3-container" style="width: 40%; margin: auto;">
            
                    <select name="country_list" id="country_list" class="w3-input w3-select js-example-basic-single">
                    </select>
        </div>
       
<br>



<script>
    $(document).ready(function () {
        $.ajax({
        url:"country_list.php",
        method:"GET",
        success:function(data) {
            $('#country_list').html(data);
        }
    });
    });
</script>

<script>
    $(document).ready(function () {
        // $('form').submit(false);
        // alert('hi');
        var info = [] ;
        $("#country_list").on('change', function(){
            var country = document.getElementById("country_list").value;
            // var date = document.getElementById("date").value;
            // alert(country);
            // alert('ho');

            $.ajax({
                type: "POST",
                url: "fetch_covid_data.php",
                data: {country : country},
                // dataType: "dataType",
                success: function (response) {
                    // alert(response);
                    $('#show_response').html(response);  
                }
            });
        })

       


    });

    
</script>
<hr>
    <div class="w3-container w3-center" id="show_response"></div>
<br>
<!-- <canvas id="myChart" style = "width:100%;max-width:700px "></canvas>
<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Confirmed', 'Recovered', 'Deaths'],
        datasets: [{
            label: '# of Votes',
            data: [5, 19, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)' 
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script> -->
    </div>
</body>
</html>

<?php  
// include("footer.php");
?>