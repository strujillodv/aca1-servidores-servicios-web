<!-- Template Form -->
<div id="form-contact" class="container-fluid container-form py-5 bg-light">
  <div class="row justify-content-center container">
    <form action="save.php" method="post" class="col-xs-12 col-sm-8 pt-5 pt-sm-0">
      <header>
        <h2 class="mb-3">Agregar contacto</h2>
      </header>
      <section class="row " >
        <div class="col-xs-12 col-md-6">
          <div class="mb-3">
            <label for="name" class="form-label">Nombres:</label>
            <input type="text" id="name" name="name" class="form-control" id="name" placeholder="Fulanito" required>
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Apellidos:</label>
            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Memoria Duarte" required>
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Dirección:</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Cll 00 No. 00-00" required>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="mb-3">
            <label for="workPhone" class="form-label">Telefono Corporativo:</label>
            <input type="text" name="workPhone" class="form-control" id="workPhone" placeholder="300 0000 000" required>
          </div>
          <div class="mb-3">
            <label for="homePhone" class="form-label">Telefono Personal:</label>
            <input type="text" name="homePhone" class="form-control" id="homePhone" placeholder="300 0000 000">
          </div>
          <div class="mb-3">
            <label for="mail" class="form-label">Correo:</label>
            <input type="text" name="mail" class="form-control" id="mail" placeholder="ejemplo@servidor.com" required>
          </div>
        </div>        
      </section>
      <footer>
        <input class="btn btn-primary d-none" type="text" name="action" value="save"/>
        <input class="btn btn-primary" type="submit" name="save_contact" value="Guardar"/>
        <input class="btn btn-ligth mx-3 btn-contact" type="button" name="cancel" value="Cancelar"/>
      </footer>
    </form>
  </div>
</div>
