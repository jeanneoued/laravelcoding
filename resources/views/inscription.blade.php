<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>Inscription</title>
</head>
<body>
    

<div class="wrapper">
        <form action="{{ route('store')}}" method="POST">
            @csrf
            <div class="h5 font-weight-bold text-center mb-3">Registration</div>
            <div class="form-group d-flex align-items-center">
                <div class="icon"><span class="far fa-user"></span></div>
                <input autocomplete="off" type="text" name="nom" class="form-control" placeholder="Entrez votre nom">
            </div>
            <div class="form-group d-flex align-items-center">
                <div class="icon"><span class="far fa-envelope"></span></div>
                <input autocomplete="off" type="email" name="email" class="form-control" placeholder="Entrez votre Email">
            </div>
            <div class="form-group d-flex align-items-center">
                <div class="icon"><span class="fas fa-phone"></span></div>
                <input autocomplete="off" type="tel" name="telephone" class="form-control" placeholder="Entrez votre numero">
            </div>
            <div class="form-group d-flex align-items-center">
                <div class="icon"><span class="fas fa-map-marker-alt"></span></div>
                <input autocomplete="off" type="text" name="ville" class="form-control" placeholder="Entrez votre ville">
            </div>
            <div class="form-group d-flex align-items-center">
                <div class="icon"><span class="fas fa-key"></span></div>
                <input autocomplete="off" type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe">
                <div class="icon btn"><span class="fas fa-eye-slash"></span></div>
            </div>
            <div class="mb-2">
                <label class="option">Remember me
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div>
                <input type="submit" class="btn btn-primary mb-3" value="Inscrire">
            </div>
            <div class="terms mb-2">
                By clicking "Signup", you acknowledge that you have read the
                <a href="#">Privacy Policy</a> and agree to the
                <a href="#">Terms of Service</a>.
            </div>
            <div class="connect border-bottom mt-4 mb-4"></div>
            <ul class="p-0 social-links">
                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                <li><a href="#"><span class="fab fa-google"></span></a></li>
                <li><a href="#"><span class="fab fa-github"></span></a></li>
            </ul>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>