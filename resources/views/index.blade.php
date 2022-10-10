<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>choiceCar</title>

        <script src="{{ asset('/js/app.js') }}" defer></script>
        <link href ="{{asset('/css/app.css')}}" rel="stylesheet">
    </head>
    <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-8">
                <form action="{{route('store')}}" method="post">
                    @csrf
                    <select id="chois-brand" name="chois-brand" class="form-select" aria-label="Default select example" w="10">
                        <option selected disabled>Вибери марку авто</option>
                        @foreach($ar1 as $el)
                            <option value="{{$el->id}}">{{$el->brand}}</option>
                        @endforeach
                    </select>
                    <br>

                    <select disabled id="chois-model" name="chois-model" class="form-select" aria-label="Default select example" w="10">
                        <option selected disabled>Вибери модель авто</option>
                    </select>

                    <br><button id="btn" style="display:none" type="submit" class="btn btn-success">Відправити</button>
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>


    </body>
</html>
