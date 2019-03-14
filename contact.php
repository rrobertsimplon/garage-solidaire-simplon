<?php
include_once('inc/header.php');
?>
<body>
    <div class="container">
       <div class="Back">
            <i class="fa fa-arrow-left" onclick="Back()"></i>
        </div>
        <h1 class="h2 text-center">Formulaire de contact</h1>
        <form action="" method="post">
            <div class="preview text-center">
            
                </div>
                
                </div>
            <div class="form-group">
                <label>Nom & Prénom</label>
                <input class="form-control" type="text" name="fullname" required placeholder="Nom & prénom"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="email" name="email" required placeholder="Email"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input class="form-control" type="password" name="password" required placeholder="Mot de passe"/>
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
                <input class="btn btn-primary btn-block" type="submit" value="Envoyer"/>
            </div>
        </form>
    </div>

</html>
<?php
include_once('inc/footer.php');
?>