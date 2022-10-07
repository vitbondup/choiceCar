<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>choiceCar</title>

        <link href ="{{asset('/css/app.css')}}" rel="stylesheet">

    </head>
    <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-8">
                    <select class="form-select" aria-label="Default select example" w="10">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <form action="#" method="post">
                        @csrf
                        <input type="hidden" name="table" value="{{}}">
                        <br><button type="submit" class="btn btn-success">Отправить</button>
                    </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>

    </body>
</html>
