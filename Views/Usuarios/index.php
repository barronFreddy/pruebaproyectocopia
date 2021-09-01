<?php include "Views/Templates/header.php";?>
    <div class="col-12 mt-2">
      <button class = "btn btn-primary mb-2">Nuevo</button>
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Usuarios</h4>
            <div class="data-tables">
                <div class="card-body">
                    <div class="data-tables">
                        <table id="tblUsuarios" class="table table-light">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th>indice</th>
                                    <th>usuario</th>
                                    <th>nombre</th>
                                    <th>apellido</th>
                                    <th>caja</th>
                                    <th>estado</th>
                                    <th>acciones</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include "Views/Templates/footer.php";?>