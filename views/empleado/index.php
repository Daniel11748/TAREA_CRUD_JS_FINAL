<?php

include_once '../../includes/header.php'; 
require_once '../../modelos/Puesto.php';

$puesto = new Puesto();

// Obtener todos los puestos
$puestos = $puesto->buscarTodos('pue_id', 'pue_nombre');
?>

<h1 class="text-center">FORMULARIO DE EMPLEADOS</h1>
<div class="row justify-content-center">
    <form action="../../controladores/empleados/guardar.php" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <label for="emp_nombre">NOMBRE</label>
                <input type="text" name="emp_nombre" id="emp_nombre" class="form-control" required>
            </div>
            <div class="col">
                <label for="emp_dpi">DPI</label>
                <input type="text" name="emp_dpi" id="emp_dpi" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="pue_nombre">PUESTO</label>
                <select name="pue_nombre" id="pue_nombre" class="form-select" required>
                    <option value="" selected>SELECCIONAR UN PUESTO</option>
                    <?php foreach ($puestos as $puesto) : ?>
                        <option value="<?php echo $puesto['pue_id']; ?>"><?php echo $puesto['pue_nombre']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col">
                <label for="emp_edad">EDAD</label>
                <input type="number" name="emp_edad" id="emp_edad" class="form-control" required>
            </div>
            <div class="col">
                <label for="emp_sexo">SEXO</label>
                <select name="emp_sexo" class="form-select" aria-label="Default select example">
                    <option selected>SELECCIONAR UN SEXO</option>
                    <option value="1">MASCULINO</option>
                    <option value="2">FEMENINO</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-success w-100">GUARDAR</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="../../controladores/empleados/buscar.php" class="btn btn-secondary w-100">BUSCAR</a>

            </div>
        </div>
    </form>
</div>


<script>
    let x = 5;
    var y = 5;
    if(x == 5){
        y = 6 
        console.log('hola' + y)
    } else {
        console.log('Guate' + y)
    }
</script>


<?php include_once '../../includes/foother.php'; ?>