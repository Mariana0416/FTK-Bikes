<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('\principal.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>BMX SHOP</title>
  </head>
  <body>
    <header>
        <style> h1{color:black;}</style>
        <h1 id="Bmx">BMX</h1>
        <h1 id="Shop">SHOP</h1>
    </header>
    <nav class="Menu">
        <ul>
            <a href="\principal"><li id="Prin">Principal</li></a>
            <a href="\proveedor"><li id="Prov">Proveedor</li></a>
            <a href="\cliente"><li id="Clie">Cliente</li></a>
            <a href="\compra"><li id="Comp">Compra</li></a>
            <a href="\articulo"><li id="Art">Articulos</li></a>
         </ul> 
    </nav>
      <main>
        <div class="container">
            @yield('contenido')
        </div>
      </main>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>