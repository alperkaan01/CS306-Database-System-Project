<?php 

include "../../navbar.html";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
                body {
        background-color: #BCCEF8;
        width: 100%;
        height: 40rem;
        justify-content: center;
        }


    /* Style by Class */

        .Container {
            position: absolute;
            top: 5rem;
            left: 20%;
            width: 20rem;
            height: 37rem;
            justify-content: center;
            background: #FAF7F0;


            border-top-right-radius: 10%;
        }

        .MainContainer {
            position: absolute;
            width: 17.5rem;
            height: 17rem;
            padding-top: 18rem;
            justify-content: center;
            align-items: center;
        }

        .main-form {
            position: absolute;
            bottom: 5rem;

            z-index: 999;

            width: 17.5rem;
            height: 30rem;
            
        }

        .audience-p {
            position: absolute;
            display: inline-block;
            top: 10rem;
            width: 10rem;

            left: 10px;

            font-family: 'Sacramento', cursive;
        }

        .competitions-p {
            position: absolute;
            display: inline-block;
            top: 15rem;
            width: 10rem;

            left: 10px;

            font-family: 'Sacramento', cursive;
        }

        .submitBtn {
            position: absolute;
            height: 1rem;
            top: 32rem;
            left: 2rem;
            border-color: white;
            background-color: #98A8F8;
            width: 15rem;
            height: 3rem;
            border-bottom-left-radius: 20px;  
            border-top-left-radius: 20px;  
            border-bottom-right-radius: 20px;  
            border-top-right-radius: 20px;  

            border-width: 0;

            font-family: 'Sacramento', cursive;
        }

        .olympic-img {
            position: absolute;
            top: 13rem;
            right: 10%;
            width: 30rem;
            z-index: 0;

        }

        .olympics-header {
            position: absolute;
            top: 8rem;
            right:-1rem;
            width: 30rem;
            z-index: 0;
            font-family: 'Sacramento', cursive;
            text-decoration: underline;
        }


        /* Style by Id */
        #name {
            position: absolute;
            height: 1.7rem;
            top: 13rem;
            left: 2rem;

            padding-left: 1rem;

            background-color: rgba(0,0,0,0.15);
            width: 15rem;
            border-width: 0;
            border-bottom-left-radius: 20px;  
            border-top-left-radius: 20px;  
            border-bottom-right-radius: 20px;  
            border-top-right-radius: 20px;  
        }

        #Competitions {
            position: absolute;
            height: 10rem;
            top: 19rem;
            left: 2rem;

            padding-left: 1rem;

            background-color: rgba(0,0,0,0.15);
            width: 15rem;
            border-width: 0;
            border-bottom-left-radius: 20px;  
            border-top-left-radius: 20px;  
            border-bottom-right-radius: 20px;  
            border-top-right-radius: 20px; 
        }

        @media screen and (max-width: 1100px) {

            .Container {
                position: absolute;
                top: 5rem;
                left: 35%;
                width: 20rem;
                height: 37rem;
                justify-content: center;
                background: #FAF7F0;
            
            
                border-top-right-radius: 10%;
            }

            .olympic-img {
                position: absolute;
                width: 10rem;
                top: 6rem;
                left: 44%;
                z-index: 10;
            }

            .olympics-header {
                display: none;
            }
        }
    </style>

</head>
<body>
    <img src="../../imgs/images-removebg-preview.png" alt="Olympics" class="olympic-img">
    <h1 class="olympics-header">
        Olympics
    </h1>
    <div class='Container'>
        <div class='MainContainer'>
        <p class='audience-p'>
        Audience name:
        </p>
        <p class='competitions-p'>
        Competitions IDs:
        </p>
        <form action="audienceInsertion.php" method="POST" class='main-form'>
            <input type="text" id="name" name="name" >
            <textarea id="Competitions" name="Competitions" rows="4" cols="20" placeholder="Please move to next line after each Competitions"></textarea>
            <input type="submit" value="Submit" class='submitBtn'> 
        </form>
        </div>
    </div>    
</body>
</html>


