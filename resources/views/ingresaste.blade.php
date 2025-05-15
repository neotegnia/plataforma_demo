<html>
   <head>
      @vite([ 'resources/css/app.css' , 'resources/js/app.js'])
      <title> Bienvenida </title>
   </head>
   <script>
   
   </script>
<body class="bg-light">
     <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
        <div class="container-fluid"> 
          <a class="navbar-brand" href="#">CARTAGO</a>
           
          <span class="navbar-text text-white me-3">
            <i  class="fa fa-user"><i>   {{auth()->user()->name}}
          </span>


        </div> 
     </nav>


  <div class="container-fluid">
      <div class="row">
         <div class="col-md-3 col-lg-2 bg-white border-end vh-100 p-3">
              <h6> Mi menu </h6>
              <ul class="nav flex-column">
               <li class="nav-item"> <a href="/miperfil">Mi perfil</a> </li>
               <li class="nav-item"> <a href="#"></a> Opcion 1</li>
               <li class="nav-item"> <a href="#"></a> Opcion 2</li>
               <li class="nav-item"> <a href="#"></a> Opcion 3 </li>
               <li class="nav-item"> <a href="#"></a> Opcion 4</li>

           </ul>
         </div> 
      
 




     <div class="col-md-9 col-lg-10  p-4">
        <h1> HOLA   {{auth()->user()->name}}  BIENVENIDO A LA PLATAFORMA  </h1>
      <a href="/miperfil">  IR A MI PERFIL   </a>
      <a href="/salir">  Salir de sesion   </a>
     </div>
   
   </div>
</div>
      <footer class="bg-primary text-white text-center py-3 mt-auto">
         <div class="containter">
           <small>&copy;{{date('Y-m')}} CARTAGO -Derechos reservados
         </div>
       </footer>


</body>


<html>