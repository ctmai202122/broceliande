<html>
<footer>
    <div class="container-fluid mt-5">
        <div class="row mt-5">
            <div class="col-sm-6 mt-5">
                <h3>
                    <a href="index.php">Broc&amp;Landes</a>
                </h3>
                <h3>Nous contacter</h3>
                <p> 21 rue du bois<br>
                    56800 Paimpont</p>
                <p>Email: contact@broceLandes.com</p>
            </div>
            <div class="col-sm-6 mt-5">
                <h3>Nos réseaux sociaux</h3>
                <ul class="list-inline text-center">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12">
                <ul>
                    <li><a href="#"> Mentions légales</a></li>
                    <li><a href="index.php"> &copy; Broc&amp;Landes 2023.</a></li>
                </ul>
            </div>
            <div class="row text-center ml-5">
            <a href="?action=administration" class="myButton">Administration</a>&nbsp;
            <?php
                if (isset($_SESSION['admin'])) {
                    echo "<a href='?action=deconnexion' class='myButton'>Déconnexion</a>";
                }
             ?>
            </div>
        </div>
    </div>
</footer>
</body>

</html>