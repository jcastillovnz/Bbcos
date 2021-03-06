<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
     <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bbcos Distribuye">
    <meta name="author" content="Jose Castillo">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css"  crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script type="text/javascript" src="js/script.js" defer></script>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<link rel="stylesheet" href="/css/sweetalert2.scss">

<title>Bbcos Distribuye </title>



<div class="text-center logo-header">
 <img  class="mt-3 mb-3 " src="img/logo bbcos.png" >
</div>




<img width="100%" id="encabezado-lg"  class="img-fluid" src="img/enabezado.png" >

<img width="100%" id="encabezado-sm"  class="img-fluid" src="img/KeratinColor07.png" >






  </head>
  <body>






<div class="container"  id="app">
<!-- TITULO -->
<div id="titulo"  class="mx-auto text-center my-5">
<h1>SE PARTE DE NUESTRA RED DE DISTRIBUIDORES EN ARGENTINA
</div>
<!-- TITULO -->



  <div class="row mt-4">
    <div   class="col-sm-6  ">
      <p  class="text-left">
        <h2>
  Calidad, creatividad, flexibilidad
  </h2>
      </p>

<p  class="text-left ">
La calidad de productos de altísimo nivel; creados, estudiados y realizados completamente en Italia. Nacidos a partir de principios activos puros y materias primas certificadas, garantizan un estándar realmente elevado y constante en el tiempo, apto para cualquier uso profesional. garantizan un estándar realmente elevado y constante en el tiempo, apto para cualquier uso profesional.
</p>




<p class="text-left ">
<h2>
Se parte de nuestra familia
</h2>
</p>

<p class="text-left">
Entrar en el grupo BBCOS no es sólo esto: quiere decir entrar en una auténtica familia, atenta a las necesidades y a las exigencias de sus socios. Quiere decir trabajar con un personal preparado y profesional, listo para ofrecer formación técnica y ayuda en todo momento, y disponible a organizar eventos en todo el mundo gracias a la colaboración con nuestros estilistas del cabello de confianza.
</p>



<p class="text-left ">
<h2>
Exclusividad zonal para distribuir
</h2>
</p>

<p class="text-left">
En BBCOS Argentina sabemos lo importante que son nuestros socios distribuidores para llegar a los clientes amantes del buen estilo. Por lo que les ofrecemos exclusividad zonal, sin competencia entre distribuidores y expansión por canales digitales.
</p>









    </div>
    <div class="col-sm-6 ">
      <p class="text-left">
        <h2>
Completa el formulario
  </h2>
      </p>




<div class="container">
  

 <form @submit.prevent="enviar()" >
    <div class="form-group">
      <label >Nombre y apellido</label>
      <input  required="" type="text" class="form-control input form-control-lg"   v-model="nombre">
    </div>
    <div  class="form-group">
      <label >Correo electronico</label>
      <input required="" type="email" class="form-control input form-control-lg"  v-model="email">
    </div>

    <div class="form-group">
      <label >Numero celular</label>
      <input required="" type="phone" class="form-control input form-control-lg"   v-model="numero_celular">
    </div>


    <div class="form-group">
      <label >Ciudad</label>
      <input required="" type="text" class="form-control input form-control-lg"   v-model="ciudad">
    </div>


    <div class="form-group">
      <label >Provincia</label>
      <input required="" type="text" class="form-control input form-control-lg"   v-model="provincia">
    </div>



<div id="contenedor" class=" col-xs-2 ">
    <button type="submit" class="btn btn-dark  btn-lg">

<div v-show="loader==1" class="spinner-border spinner-border-sm" role="status">
<span  class="sr-only">Loading...</span>
</div>   


Enviar formulario</button>
</div>




  </form>
    </div>
    </div>

  </div>


</div>

<br>
<footer class="container pt-5 mt-5 mb-5">
  




<div class="row">

<div class="col-sm-6">

<div id="contenedor" >
<img  id="logo-footer"  src="img/logos cc hair pro.png"> 
</div>


</div>

<div class="col-sm-6">

<p>

  Importa, distribuye y comercializa en forma exclusiva en todo el territorio de la República Argentina. 
</p>
<p>

  General Alvear 280 - Córdoba (5000) - Pcia. Córdoba - Argentina.

</p>


</div>





</div>

</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>














