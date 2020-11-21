<?php
    if(isset($_SESSION['user'])){
            header('Location: index.php');
        }
?>

<?php require '../objects.php'; ?>

<?php require '../partials/header.php'; ?>

<?php require '../partials/navbar.php'; ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
            <h1 class="display-4">Registracija</h1>
    </div>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-3">
        </div> 
        <div class="col-6">
            <form action="../files/register.php" method="POST">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Naziv korisnika" class="form-control" required><br>
                    <input type="text" name="email" placeholder="Email" class="form-control" required><br>
                    <input type="password" name="password" placeholder="Password" class="form-control" required><br>
                </div>
                <button type="submit" name="register">Registruj se</button>
            </form>
            <br>
            <?php if(isset($_GET['userRegistered']) && $_GET['userRegistered']==true): ?>
                <div class="alert alert-success" role="alert">Registracija uspešna. Uloguj se <a href="login.view.php">Log in</a></div>
            <?php endif; ?>

            <?php if(isset($_GET['userRegistered']) && $_GET['userRegistered']==false): ?>
                <div class="alert alert-danger" role="alert">Registracija nije uspela!</div>
            <?php endif; ?>
        </div>
        <div class="col-3">
        </div> 
    </div>
</div>

<?php require '../partials/footer.php'; ?>