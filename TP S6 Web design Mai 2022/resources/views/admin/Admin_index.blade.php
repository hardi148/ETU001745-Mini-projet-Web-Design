<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="A propos de AI- articles">
  <title>A propos de AI- articles</title>
        <link rel="stylesheet" href="assets/Login/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/Login/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="assets/Login/css/Ludens-Users---2-Register.css">
        <link rel="stylesheet" href="assets/Login/css/styles.css">
    </head>
<body>
<style>
    body {
  background-color: #f8f9fa;
}

.form-container {
  background-color: #fff;
  padding: 40px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.image-holder {
  background-size: cover;
  background-position: center;
  height: 100%;
  width: 100%;
}

.form-group {
  margin-bottom: 25px;
}

.form-control {
  border-radius: 20px;
  border: none;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  padding: 20px;
  font-size: 16px;
  font-weight: 400;
}

.btn-primary {
  background-color: #007bff;
  border: none;
  border-radius: 20px;
  font-weight: 600;
  transition: all 0.3s ease-in-out;
}

.btn-primary:hover {
  background-color: #0069d9;
  cursor: pointer;
}

</style>    
    <section class="register-photo" style="background-color: transparent;">
        <div class="form-container">
            <div class="image-holder" style="background: url(&quot;<?php echo asset('assets/Login/img/RH.jpg');?>&quot;);"></div>
            <form action="{{ url('/log_admin') }}" method="post" autocomplete="off">
            {{ csrf_field() }}
                <div class="form-group mb-3"><input class="form-control" type="text" name="mail" value="irina" required placeholder="Email"></div>
                <div class="form-group mb-3"><input class="form-control" type="password" id="password" name="mdp" value="irina" placeholder="Mot de passe"></div>

                <div id="passwordsError" style="display: none;margin-bottom: 16.5px;"><span id="errorMessage" class="text-danger" style="font-size:13px;"></span></div>
                <div class="form-group mb-3"><button class="btn btn-primary d-block w-100" id="submitButton" type="submit" style="color: rgb(5, 201, 201);background: var(--bs-gray);font-weight: bold;">SE CONNECTER</button></div>
                @IF (isset($erreur))
                <div class="alert alert-success flash animated" role="alert" style="background: rgb(255,255,255);text-align: center;border-style:none;"><span style="color: var(--bs-red);"><i class="fas fa-exclamation"></i><strong>&nbsp;</strong>{{$erreur}}</span></div>
                @ENDIF
            </form>        
        </div>
    </section>
    <script src="assets/Login/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/Login/js/bs-init.js"></script>

</body>
</html>
