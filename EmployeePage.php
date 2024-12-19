<?php
  session_start();

  $welcomeMessage = "";

  if($_SESSION['isLoggiedIn']){
    $welcomeMessage = "Welcome to the Witch's Employee Page";
  }
  else{
    //$welcomeMessage
    $welcomeMessage = "You are not logged in.";
    header('Location: Login.php');
  }
?>

<!DOCTYPE html>
<html lang="EN">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="EmployeePage.css">
<link rel="icon" type="image/x-icon" href="https://static.vecteezy.com/system/resources/previews/043/988/840/non_2x/mystic-sphere-isolated-object-transparent-background-ai-generative-free-png.png">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<title>Employee Page</title>
  </head>
  <body>
    
    <!--In Home-->
  <?php include 'Home.php' ?>  
      
      <header>
      <h2><?php echo $welcomeMessage ?></h2>
    </header>
 <!--Data will be displayed here-->
 <h2>Creatures who have entered Sweepstakes:</h2>
 <div id="div_data">
    </div>

    <script>
        //this code will not run until the HTML elements have loaded
        $(document).ready(function(){
            //function to fetch the JSON fata from the data.php page using ajax
            function fetchdata(){
                $.ajax({
                    url:'data.php',
                    type: 'GET',
                    datatype:'json',
                    success: function(data){
                        displayData(data); //success will pass the data in to custom display data function
                    },
                    error: function(xhr, status, error){
                        console.error('Error fetching the data', status, error);
                    }
                });
            }

            //function to loop through the JSON data to display on page
            function displayData(data){
                var html = '';
                //know our data is a 2-d array, loop through it
                for(var i = 0; i < data.length; i++){
                    html += '<p>' + data[i].name + ': ' + data[i].value + '</p>';
                }

                //add the html string to the div on our page
                $('#div_data').html(html);
            }
            //call the fetchdata function when the page loads to get JSON data and update when our page loads
            fetchdata();
        });
    </script>

  </body>
</html>