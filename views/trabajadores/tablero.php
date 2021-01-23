
    <div class="row">
        <div class="derecha">
            <button type="button" id="boton_nuevo_trabajador" class="btn btn-info">Nuevo trabajador</button>
        </div>
    </div>
    <table class="table table-striped table-responsive">
        <thead>
        <th>Nombre</th>
        <th>Datos de contacto</th>
        <th>Cumpleaños</th>
        <th>Operaciones</th>
        </thead>
        <tbody>
            <?php if(isset($trabajadores) && is_array($trabajadores) && sizeof($trabajadores) > 0):?>
                <?php foreach ($trabajadores as $t): ?><!-- inicia el foreach -->
                <tr>
                    <td><?=$t['nombre']?></td>
                    <td>
                        <strong>Correo:</strong> <?=$t['correo']?><br>
                        <strong>Telefonos:</strong><?=$t['telefono']?>
                    </td>
                    <td><?=$t['cumpleanios']?></td>
                    <td>
                        <button type="button" class="btn btn-warning boton_modificar_trabajador" data-id_trabajador="<?=$t['id']?>">Modificar</button>
                        <button type="button" class="btn btn-danger boton_eliminar_trabajador" data-id_trabajador="<?=$t['id']?>">Eliminar</button>
                    </td>
                </tr>
                <?php endforeach; ?> <!-- termina el foreach -->
            </tbody>
        <?php endif; ?>
    </table>