<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<body>
    <?php
    var_dump($_POST);
    ?>
    <div>
        <form action="#" method="post">
            <label for="">First Name</label>
            <input type="text" name="first_name">
            <br>
            <label for="">Last Name</label>
            <input type="text" name="last_name">
            <br>
            <label for="">Email</label>
            <input type="email" name="email" id="email">
            <br>



            <label for="">Apple</label>
            <input type="radio" name="fruit"value="Apple"> 
            <br>
            <label for="">Orange</label>
            <input type="radio" name="fruit"value="Apple">
            <br>
            <label for="">Pearl</label>
            <input type="radio" name="fruit"value="Apple">
            <br>



            <label for="">Salt</label>
            <input type="checkbox" name="Spice"value="Salt"> 
            <br>
            <label for="">Pepper</label>
            <input type="checkbox" name="Spice"value="Pepper">
            <br>
            <label for="">Chili</label>
            <input type="checkbox" name="Spice"value="Chili">
            <br>

            <textarea name="Description" id="description" cols="30" rows="10">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam, nulla officia. Architecto inventore error nobis necessitatibus. Deserunt totam ad explicabo natus ducimus. Facere quasi repudiandae doloremque sunt! Incidunt, quae odio.</textarea>
            
            <input type="submit" value="send">

        </form>
    </div> 
    <script> 
        jQuery( "#email" ).change(function() {
            var email=jQuery("#email").val();//Get to the value of the email field   
    
            console.log("email",email);
        });
    </script>   
</body>
</html>