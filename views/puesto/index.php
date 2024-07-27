<?php

include_once '../../includes/header.php'; ?>
<div class="container">
    <h1 class="text-center">REGISTRO Y GESTION DE PUESTOS</h1>
    <div class="row justify-content-center mb-3">
        <form class="border bg-light shadow rounded p-4 col-lg-6">
        <input type="hidden" name="pue_id" id="pue_id">
            <div class="row mb-3">
                <div class="col">
                    <label for="pue_nombre">NOMBRE DEL PUESTO</label>
                    <input type="text" name="pue_nombre" id="pue_nombre" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="pue_sueldo">SUELDO A DEVENGAR POR EL EMPLEADO</label>
                    <input type="number" name="pue_sueldo" id="pue_sueldo" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <button type="submit" id="btnGuardar" class="btn btn-success w-100">GUARDAR</button>
                </div>
                <div class="col">
                    <button type="button" id="btnBuscar" class="btn btn-info w-100">BUSCAR</button>
                </div>
                <div class="col">
                    <button type="button" id="btnModificar" class="btn btn-warning w-100">MODIFICAR</button>
                </div>
                <div class="col">
                    <button type="button" id="btnCancelar" class="btn btn-secondary w-100">CANCELAR</button>
                </div>
                <div class="col">
                    <button type="reset" id="btnLimpiar" class="btn btn-secondary w-100">LIMPIAR</button>
                </div>
            </div>
        </form>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 table-responsive">
            <h2 class="text-center">PUESTOS ACTIVOS</h2>
            <table class="table table-bordered table-hover  bg-light" id="tablaPuestos">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nombre</th>
                        <th>Sueldo</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5">NO SE HAN REGISTRADO DATOS</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script defer src="../../src/js/funciones.js"></script>
<script defer src="../../src/js/puestos/index.js"></script>
<?php include_once '../../includes/foother.php'; ?>