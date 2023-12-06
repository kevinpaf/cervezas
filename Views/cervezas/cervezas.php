<!-- vista_cervezas.php -->
<?php require_once('../html/head2.php') ?>

<div class="row">
    <div class="col-lg-8 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Lista de Cervezas</h5>

                <div class="table-responsive">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_cerveza">
                        Nueva Cerveza
                    </button>
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">#</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">nombre</h6>
                                </th>
                                <!-- Agrega las demás columnas según la estructura de tu base de datos -->
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">tipo</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">alcohol</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">ibu</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Opciones pruebota</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="tabla_cervezas">
                            <!-- Aquí se cargarán los datos de la tabla mediante JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ventana Modal -->
<div class="modal fade" id="Modal_cerveza" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="form_cervezas">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cervezas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Agrega los campos del formulario según tu estructura de base de datos -->
                    <div class="form-group">
                        <label for="nombre">nombre</label>
                        <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="nombre">
                    </div>
                    <div class="form-group">
                        <label for="tipo">tipo</label>
                        <input type="text" required class="form-control" id="tipo" name="tipo" placeholder="tipo">
                    </div>
                    <div class="form-group">
                        <label for="alcohol">alcohol</label>
                        <input type="text" required class="form-control" id="alcohol" name="alcohol" placeholder="alcohol">
                    </div>
                    <div class="form-group">
                        <label for="ibu">ibu</label>
                        <input type="text" required class="form-control" id="ibu" name="ibu" placeholder="ibu">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Grabar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('../html/script2.php') ?>

<script src="cervezas.controller.js"></script>
<script src="cervezas.model.js"></script>
