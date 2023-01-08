<style>
    .table {
        background: red;
    }
</style>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>RUC</th>
            <th>Nombre Comercial</th>
            <th>Razon Social</th>
            <th>Numeros de colaboradores</th>
            <th>Formacion del Gerente o Administrador</th>
            <th>Direccion</th>
            <th>Correo Electronico</th>
            <th>Provincia</th>
            <th>Canton</th>
            <th>Parroquia</th>
            <th>Telefonos Contactos</th>
            <th>Titular/Representante Legal</th>
            <th>Genero Representativo</th>
            <th>Logo</th>
            <th>Numero de Establecimientos</th>
            <th>Fecha de inicio del negocio</th>
            <th>Categoria</th>
            <th>Productos o servicios</th>
            <th>Comercio justo</th>
            <th>Comercio Exterior</th>
            <th>Coordenadas</th>
            <th>Imagen</th>
            <th>Comercio Electronico</th>
            <th>Requiere Capcitacion</th>
            <th>Pagina Web</th>
            <th>Redes Sociales</th>
            <th>Whatsapp</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mipymes as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->RUC}}</td>
            <td>{{$value->Business_name}}</td>
            <td>{{$value->Trade_name}}</td>
            <td>{{$value->Number_of_collaborators}}</td>
            <td>{{$value->Formation_of_manager}}</td>
            <td>{{$value->Address}}</td>
            <td>{{$value->E_mail_address}}</td>
            <td>{{$value->Province}}</td>
            <td>{{$value->County}}</td>
            <td>{{$value->Parish}}</td>
            <td>{{$value->Contact_telephone_number}}</td>
            <td>{{$value->Owner_Legal_representative}}</td>
            <td>{{$value->Gender_Representative}}</td>
            <td>{{$value->up_image_logo}}</td>
            <td>{{$value->Number_of_establishments}}</td>
            <td>{{$value->Business_start_date}}</td>
            <td>{{$value->Category}}</td>
            <td>{{$value->Products_or_services_details}}</td>
            <td>{{$value->Fair_trade_products}}</td>
            <td>{{$value->Foreign_trade}}</td>
            <td>{{$value->Coordinates}}</td>
            <td>{{$value->image}}</td>
            <td>{{$value->E_commerce}}</td>
            <td>{{$value->Requires_training}}</td>
            <td>{{$value->Web_page}}</td>
            <td>{{$value->social_media}}</td>
            <td>{{$value->Whatsapp}}</td>
            <td> <a href="{{url('/mipyme/' .$value->id. '/edit')}}">Editar</a> | <form action="{{'/mipyme/'.$value->id }}" method="post">
                    @csrf
                    {{method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('Deseas realmente borrar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>