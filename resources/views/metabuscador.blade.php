<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css"
        integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ url('buscar_termino') }}" class="form-horizontal">
        @csrf
        <fieldset>

            <!-- Form Name -->
            <legend class="text-center">Realizar busquedas en varios motores</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">1. Ingrese el termino de busqueda</label>
                <div class="col-md-5">
                    <input id="textinput" name="termino" type="text" placeholder="" class="form-control input-md">
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="motores">2. Seleccione el motor de busqueda</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="motores-0">
                            <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
                            Google
                        </label>
                    </div>
                    <div class="radio">
                        <label for="motores-1">
                            <input type="radio" name="motores" id="motores-1" value="2">
                            Bing
                        </label>
                    </div>
                    <div class="radio">
                        <label for="motores-2">
                            <input type="radio" name="motores" id="motores-2" value="3">
                            Youtube
                        </label>
                    </div>
                    <div class="radio">
                        <label for="motores-3">
                            <input type="radio" name="motores" id="motores-3" value="4">
                            Yahoo
                        </label>
                    </div>
                    <div class="radio">
                        <label for="motores-4">
                            <input type="radio" name="motores" id="motores-4" value="5">
                            Facebook
                        </label>
                    </div>
                    <div class="radio">
                        <label for="motores-5">
                            <input type="radio" name="motores" id="motores-5" value="6">
                            Mercado Libre
                        </label>
                    </div>
                    <div class="radio">
                        <label for="motores-6">
                            <input type="radio" name="motores" id="motores-6" value="7">
                            DuckDuckGo
                        </label>
                    </div>
                    <div class="radio">
                        <label for="motores-7">
                            <input type="radio" name="motores" id="motores-7" value="8">
                            AOL
                        </label>
                    </div>
                    <div class="radio">
                        <label for="motores-8">
                            <input type="radio" name="motores" id="motores-8" value="9">
                            Ask
                        </label>
                    </div>
                    <div class="radio">
                        <label for="motores-9">
                            <input type="radio" name="motores" id="motores-9" value="10">
                            Ecosia
                        </label>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button class="btn btn-success">Buscar</button>
                </div>
            </div>

        </fieldset>
    </form>
</body>

</html>
