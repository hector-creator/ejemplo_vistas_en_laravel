@extends('../layouts.plantilla')

@section('cabecera')

  INSERTAR REGISTROS

@endsection

@section('contenido')


<form class="" action="/productos" method="post" enctype="multipart/form-data">


  <table>
           <tr>
               <td>
                   <input accept="image/*" type="file" name="file" >
               </td>
           </tr>
       </table>

<table>
  <tr>
    <td>Nombre: </td>
  <td>

  <input type="text" name="NombreArticulo" value="">

  {{csrf_field()}}

</td>
</tr>


<tr>
  <td>Seccion</td>
  <td><input type="text" name="Seccion" value=""></td>
</tr>

<tr>
  <td>Precio</td>
  <td><input type="text" name="Precio" value=""></td>
</tr>

<tr>
  <td>Fecha</td>

  <td><input type="text" name="Fecha" value=""></td>
</tr>

<tr>
  <td>PaisOrigen</td>

  <td><input type="text" name="PaisOrigen" value=""></td>
</tr>


<tr>
<td><input type="submit" name="enviar" value="Enviar"></td>


<td><input type="reset" name="borrar" value="Borrar"></td>
</tr></table>

</form>

@if (count($errors)>0)

<ul>
  @foreach ($errors->all() as $error)

  <li>{{$error}}</li>

  @endforeach
</ul>

@endif

@endsection

@section('pie')

Pinturas Contimex. Todos los derechos reservados

@endsection
