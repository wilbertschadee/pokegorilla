<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pokedex</title>

    <?php include "nav.php" ?>
    <div class="d-flex justify-content-center ">
        <div class="container h-50 row d-flex justify-content-center mb-5 align-items-center bgWhite">
             <div class="d-flex flex-wrap col-10 m-5 p-5 justify-content-around" style="background: white; border-radius:25px;">
                <?php include "getData.php" ?>
                <div class="d-flex justify-content-center mt-5" style="width: 100%;">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="pokedex.php?id=1">1</a></li>
                            <li class="page-item"><a class="page-link" href="pokedex.php?id=2">2</a></li>
                            <li class="page-item"><a class="page-link" href="pokedex.php?id=3">3</a></li>
                            <li class="page-item"><a class="page-link" href="pokedex.php?id=4">4</a></li>
                            <li class="page-item"><a class="page-link" href="pokedex.php?id=5">5</a></li>
                        </ul>
                    </nav>
                </div>
            </div> 
        </div>
    
    </div>
</body>
</html>
