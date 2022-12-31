<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre del Proyecto</th>
            <th>Nombre(s) Propietario(s)</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo Electronico</th>
            <th>Productos Principales</th>
            <th>Imagen del producto principal</th>
            <th>Servicios Principales</th>
            <th>Fuente de Inversion Principal</th>
            <th>Rango de Inversion Principal</th>
            <th>Marca</th>
            <th>Numero de empleados</th>
            <th>Fecha de Inicio</th>
            <th>Fecha de Fin</th>
            <th>Requiere Capacitaciones</th>
            <th>Suba el Proyecto</th>
            <th>Logo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
         @foreach($emprendimiento as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name_proyect}}</td>
            <td>{{$value->name_property}}</td>
            <td>{{$value->addresses}}</td>
            <td>{{$value->phone_number}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->main_products}}</td>
            <td>{{$value->up_image_main_products}}</td>
            <td>{{$value->main_service}}</td>
            <td>{{$value->main_investment_source}}</td>
            <td>{{$value->principal_investment_range}}</td>
            <td>{{$value->up_image_main_mark}}</td>
            <td>{{$value->number_employees}}</td>
            <td>{{$value->start_date}}</td>
            <td>{{$value->end_date}}</td>
            <td>{{$value->theme_require_trainings}}</td>
            <td>{{$value->upload_proyect}}</td>
            <td>{{$value->up_image_logo}}</td>
            <td> <a href="{{url('/emprendimiento/' .$value->id. '/edit')}}">Editar</a> | <form action="{{'/emprendimiento/'.$value->id }}" method="post">
            @csrf
            {{method_field('DELETE') }}
            <input type="submit" onclick="return confirm('Deseas realmente borrar?')" value="Borrar">
            </form>
        </td>        
        </tr>
        @endforeach
    </tbody>
</table>