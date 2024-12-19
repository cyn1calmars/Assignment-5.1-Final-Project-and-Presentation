<!DOCTYPE html>
<html lang="EN">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link rel="stylesheet" href="PotionClass.css">
<link rel="icon" type="image/x-icon" href="https://static.vecteezy.com/system/resources/previews/043/988/840/non_2x/mystic-sphere-isolated-object-transparent-background-ai-generative-free-png.png">
<title>Home Page</title>
</head>
<body>
    
<?php include 'Home.php' ?>  

    <div class="side">
        <img src="https://i.pinimg.com/originals/23/0d/6f/230d6fe581cf3f5131979c7a9c9ded35.gif">
            <a class="btns" href="jsonwebapp.php">Events</a>
    </div>
<h1>Wanna Take Potion Classes?</h1>
    <!--Information-->
        <div class="column">
            <p>Potions classes and wizadry all right here for you to learn</p>
        </div>
        <div class="column">
            <p>Magic 101 will teach you spells and enchantments </p>
        </div>
        <div class="column">
            <p>Deadly Potions will teach you all you need to know about the worst potions made</p>
        </div>
        <div class="column">
            <p>Holiday potions will give you special powers from any holiday of your choosing</p>
        </div>
        <div class="column">
            <p>Potion Class will give you strength against enemies and empower your skills</p>
        </div>
        <div class="column">
            <p>Forbidden Spells class will teach you the forbidden magic of the world</p>
        </div>
        
    <!--POTIONS FORM-->
    <form name="frm_potion_class" id="frm_potion_class" method="post" action="PotionClass.php">
        
        <!-- Drop down list / select for what class you want to take -->
         <label for="sel_class">What class would you like to take?</label>
         <select id="sel_class" name="sel_class">
            <option value="">Select an option</option>
            <option value="basic_potions">Basic Potions</option>
            <option value="deadly_potions">Deadly Potions</option>
            <option value="forbidden_spells">Forbidden Spells</option>
            <option value="magic_101">Magic 101</option>
            <option value="holiday_potions">Holiday Potions</option>
         </select>
         
        <label for="sel_allergy">Do you have any potion allergies?</label>
        <div id="sel_allergy">
            <!-- Puts the yes and no options on the same line -->
          <label>Yes<input type="radio"  name="sel_allergy" value="Yes">
          No<input type="radio"  name="sel_allergy" value="No"></label>
        </div>

         <div id="div_allergy" class="hidden">
            <label for="txt_reason">What allergies do you have? </label>
            <textarea id="txt_reason"name="txt_reason" rows="4" placeholder="List them here..."></textarea>
         </div>

         <label for="txt_comments">Any skills or potions you would like to go over?</label>
         <textarea id="txt_comments" name="txt_comments" rows="4" placeholder="Add your comments here..."></textarea>
         <div class="char-counter" id="div_char_counter">0/250 characters</div>

         <button type="submit">Submit Form</button>

    </form>
<script>
    $(document).ready(function(){
        //show the div allergy and textarea if the customer has allergies
        $('input[name="sel_allergy"]').change(function(){
            if($(this).val() == "Yes"){
                //the div will appear
                $('#div_allergy').slideDown();
            } //if user has allergies
            else{ //div will dissapear
                $('#div_allergy').slideUp();
            }
        }); // closing yes/no  change event listener

        //add a character counter for the comments textarea
        $('#txt_comments').on('input', function(){
            var max_length = 250; //max length allowed
            var char_count = $(this).val().length; // current number of characters

            // update the current characters / total characters remaining
            $('#div_char_counter').text(`${char_count}/${max_length} characters`);
            
            // change the counter color when around the limit of charactes
            if (char_count > max_length){
                $('#div_char_counter').css('color', 'red');
            }
            else{
                $('#div_char_counter').css('color', 'black');
            }
        });
    }); //closing document.ready
</script>
</body>
</html>