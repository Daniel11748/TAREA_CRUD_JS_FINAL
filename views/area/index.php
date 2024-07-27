<?php

include_once '../../includes/header.php'; ?>
<div class="container">
    <h1 class="text-center">REGISTRO DE AREAS</h1>
    <div class="row justify-content-center mb-3">
        <form class="border bg-light shadow rounded p-4 col-lg-6">
        <input type="hidden" name="are_id" id="are_id">        <div class="row mb-3">
            <div class="col">
                <label for="are_nombre">NOMBRE DEL AREA</label>
                <input type="text" name="are_nombre" id="are_nombre" class="form-control" required>
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
            <h2 class="text-center">AREAS ACTIVAS</h2>
            <table class="table table-bordered table-hover  bg-light" id="tablaAreas">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nombre</th>
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
<script defer src="../../src/js/areas/index.js"></script>
<?php include_once '../../includes/foother.php'; ?>