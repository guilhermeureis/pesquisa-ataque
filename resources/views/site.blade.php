<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rede social</title>

    <link rel="stylesheet" href="css/assets/demo.css">
    <link rel="stylesheet" href="css/assets/form-login.css">



</head>

<div class="main-content">


    <form class="form-login" method="post" action="#">

        <div class="form-sign-in-with-social">

            <div class="form-row form-title-row">
                <span class="form-title">Entrar com</span>
            </div>

            <a href="{{route('instagram')}}" class="form-instagram-button">Instagram</a>
            <a href="{{route('facebook')}}" class="form-facebook-button">Facebook</a>

        </div>

    </form>

</div>

</body>

</html>
