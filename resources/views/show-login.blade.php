<html>

<body>
  <h1> AUTENTICACION </h1>
    <form  method="POST"  action="/bienvenida">
        @csrf <!-- Aseguras que la clave secreta viaje en el método POST -->
        <div>
           <label>Correo</label>
           <input type="text" name="email" required  value="{{old('email')}}"><br>
           @error('email')
              <span  style="color:red">{{$message}}</span>
           @enderror
        </div>
        <div>
            <label>Contraseña</label>
            <input type="password" name="password" required >
         </div>
         @error('password')
         <span  style="color:red">{{$message}}</span><br>
         @enderror
        <button type="submit">Autenticar</button> <!--boton  -- >
    </form>




</body>

</html>