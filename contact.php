<?php
include_once('inc/header.php');
?>
<body>
    <div class="container">
       <div class="Back">
            <i class="fa fa-arrow-left" onclick="Back()"></i>
        </div>
        <p class="h2 text-center">Formulaire de contact</p>
        <form action="" method="post">
            <div class="preview text-center">
            
                </div>
                
                </div>
            <div class="form-group">
                <label>Nom + Prénom</label>
                <input class="form-control" type="text" name="fullname" required placeholder="Enter Your Full Name"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="email" name="email" required placeholder="Enter Your Email"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input class="form-control" type="password" name="password" required placeholder="Enter Password"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Gender:</label><br/>
                <label><input type="radio" name="gender" required value="Male" checked /> Homme</label>
                <label><input type="radio" name="gender" required value="Female" /> Femme</label>
                <label><input type="radio" name="gender" required value="Other" /> Hermaphrodite</label>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" value="Submit"/>
            </div>
        </form>
    </div>

</html>
<?php
include_once('inc/footer.php');
?>