
<html>
<head>
   @vite([ 'resources/css/app.css' , 'resources/js/app.js'])
   <title> Auntenticación </title>
</head>
<script>

</script>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
   
   <div class="card shadow p-4 " style="width:100%; max-width:400px;">
      <span class="mi-letra-verde"> AUTENTICACION </span>

    <form  method="POST"  action="/bienvenida">
        @csrf <!-- Aseguras que la clave secreta viaje en el método POST -->
        <div>
           <label>Correo</label>
           <input  class="form-control" type="text" name="email" required  value="{{old('email')}}"><br>
           @error('email')
              <span  style="color:red">{{$message}}</span>
           @enderror
        </div>
        <div>
            <label>Contraseña</label>
            <input  class="form-control" type="password" name="password" required >
         </div>
         @error('password')
         <span  style="color:red">{{$message}}</span><br>
         @enderror
         <div class="d-grid mt-4" >
        <button  class="btn btn-info" type="submit">Autenticar</button> <!--boton  -- >
        </div>
    </form>
   </div>



</body>

</html>