<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
<?php include "nav.php" ?> 

        <div class="d-flex justify-content-center ">
            <div class="container h-50 row d-flex justify-content-center mb-5 align-items-center bgWhite">
                <div class="d-flex flex-wrap col-10 m-5 p-5" style="background: white; border-radius:25px;">
                    <div class="col-lg-8">
                    <p>
                    Hello there! Welcome to the world of POKEMON! My name is OAK!
                    People call me the POKEMON PROF!
                    </p>
                    <p>
                    This world is inhabited by creatures called POKEMON! For some
                    people, POKEMON are pets. Others use them for fights. Myself...
                    I study POKEMON as a profession.
                    </p>
                   
                    <p>
                    First, what is your name?<br>
                    <button onclick="nameFunc()">. . .</button>
                    </p>
                    <p id="demo"></p>

                    </div>
                    <img class="col-lg-4" style="height: 100%;" src="img/Professor_Oak_XY.png" alt="">
                </div>
            </div>
        </div>
        <script>
        function nameFunc() {
    var person = prompt("Please enter your name", "Red");
    if (person != null) {
        document.getElementById("demo").innerHTML =" Right! So your name is " + person + "! <br><br>" + person + "! Your very own POKEMON legend is about to unfold! A world of dreams and adventures with POKEMON awaits! Let's go!";
    }
}
</script>
    </body>
</html>