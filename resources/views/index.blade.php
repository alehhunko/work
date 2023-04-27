<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <div class="bg-image" style="background-image:url('{{ Vite::asset('/resources/img/main.png') }}'); -webkit-background-size: 100% 100%;
        -moz-background-size: 100% 100%; -o-background-size: 100% 100%; background-size: 100% 100%; height: 800px;">
            <component-header></component-header>
        </div>
        <component-main></component-main>
        <!-- Map section-->
        <section class="bg-image">
            <img style="filter: grayscale(100%); background-size: cover; height: 800px;"
                src="{{ Vite::asset('/resources/img/map.png') }}" class="img-fluid">
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-light">
            <div class="container px-5">
                <p class="m-0 text-center text-black">Политика АО «КОМПАНИЯ» в области обработки и обеспечения
                    безопасности
                    персональных <br />данных <br />ИНН: 99999999999 ОГРН: 9999999999999 <br />ООО «КОМПАНИЯ»</p>
            </div>
        </footer>

        <!-- Modal -->
        <component-modal></component-modal>
    </div>

</body>

</html>