<div class="left">
            <label for="name_proyect">Nombre del proyecto:</label>
            <input type="text" name="name_proyect" class="form-control" id="name_proyect" value="{{$emprendimiento->name_proyect}}">
            <label for="name_property">Nombre(s) Propietario(s):</label>
            <input type="text" name="name_property" class="form-control" id="name_property" value="{{$emprendimiento->name_property}}>
            <label for="addresses">Direccion:</label>
            <input type="text" name="addresses" class="form-control" id="addresses" value="{{$emprendimiento->addresses}}">
            <label for="phone_number">Telefono:</label>
            <input type="text" NAME="phone_number" class="form-control" id="phone_number" value="{{$emprendimiento->phone_number}}">
            <label for="email">Correo Electronico:</label>
            <input type="text" name="email" class="form-control" id="email" value="{{$emprendimiento->email}}">
            <label for="start_date">Fecha de inicio negocio:</label>
            <input type="date" value="2023-01-01" min="2023-01-01" max="2150-01-01" name="start_date" class="form-control" id="start_date" value="{{$emprendimiento->start_date}}">
            <label for="end_date">Fecha de Fin:</label>
            <input type="date" value="2023-01-01" min="2023-01-01" max="2150-01-01" name="end_date" class="form-control" id="end_date" value="{{$emprendimiento->end_date}}">
            
            <label for="require_trainings">Requiere Capacitaciones:</label>
            <select class="combo" name="require_trainings" onChange="combo(this, 'demo')" id="require_trainings" value="{{$emprendimiento->require_trainings}}">
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
            <textarea name="theme_require_trainings" cols="40" rows="5" class="comment" id="theme_require_trainings" value="{{$emprendimiento->theme_require_trainings}}"></textarea>
            <label for="upload_proyect">Subir el proyecto (PDF):</label>
            <input type="file" name="upload_proyect" accept="application/pdf" class="form-file" id="upload_proyect" value="{{$emprendimiento->upload_proyect}}">
            
            <label for="logo">Logo (JPEG/PNG):</label>
            <div class="PRP-DIV">
              <select class="combo" name="logo" onChange="combo(this, 'demo')" id="logo" value="{{$emprendimiento->logo}}">
                <option value="Si">Si</option>
                <option value="No">No</option>
              </select>
            <input type="file" name="up_image_logo" accept="image/png, image/jpeg" class="form-file LGO-image" id="up_image_logo" value="{{$emprendimiento->up_image_logo}}">
            </div>
          </div>
          <div class="right">

            <label for="main_products">Productos Principales (JPEG/PNG):</label>
            <div class="PRP-DIV">
              <textarea name="main_products" cols="40" rows="5" class="comment" id="main_products" value="{{$emprendimiento->main_products}}"></textarea>
              <input type="file" name="up_image_main_products" accept="image/png, image/jpeg" class="form-file" id="up_image_main_products" value="{{$emprendimiento->up_image_main_products}}">
            </div>
            <label for="main_service">Servicios Principales</label>
            <textarea name="main_service" cols="40" rows="5" class="comment" id="main_service" value="{{$emprendimiento->main_service}}"></textarea>
            <label for="main_investment_source">Fuente de Inversion Principales:</label>
            <input type="text" name="main_investment_source" class="form-control" id="main_investment_source" value="{{$emprendimiento->main_investment_source}}">
            <label for="principal_investment_range">Rango de Inversion Principal:</label>
            <input type="text" name="principal_investment_range" class="form-control" id="principal_investment_range" value="{{$emprendimiento->principal_investment_range}}">
            <label for="mark">Marca (JPEG/PNG):</label>
            <input type="file" name="up_image_main_mark"accept="image/png, image/jpeg" class="form-file" id="mark" value="{{$emprendimiento->up_image_main_mark}}">
            <label for="number_employees">Numero de Empleados:</label>
            <input type="text" name="number_employees" class="form-control" id="number_employees" value="{{$emprendimiento->number_employees}}">
            <input class="primary-button" type="submit" value="Guardar Datos">
          </div>
        </div>