<?PHP include './inc/header.php'; ?><!-- header section -->
<section class="container py-5 bg-light">
  <form action="save.php" method="post" >
    <header class="d-flex flex-column flex-md-row">
      <h1 class="avatar-contact text-center rounded rounded-circle bg-primary text-light">
        <?PHP if($_SESSION['typeAction']) { echo substr($_SESSION['name'], 0, 1); }?>
      </h1>
      <div class="mx-md-3">
        <?PHP if($_SESSION['typeAction'] == 'edit') { 
          ?><label for="name" class="form-label">Nombre:</label><?PHP
        } ?>
        <input type="text" id="name" name="name" class="display-4 <?PHP if($_SESSION['typeAction'] == 'view') { echo 'form-control-plaintext'; } else { echo 'form-control'; } ?>"
          id="name" required
          <?PHP if($_SESSION['typeAction']) { echo 'value="'.$_SESSION['name'].'"'; } ?>
          <?PHP if($_SESSION['typeAction'] == 'view') { echo 'readonly'; } ?>
        >
      </div>
    </header>
    <section class="row " >
      <div class="col-xs-12 col-md-6">
        <div class="mb-3">
          <label for="lastName" class="form-label">Apellidos:</label>
          <input type="text" name="lastName" class="<?PHP if($_SESSION['typeAction'] == 'view') { echo 'form-control-plaintext'; } else { echo 'form-control'; } ?>" 
            id="lastName" required
            <?PHP if($_SESSION['typeAction']) { echo 'value="'.$_SESSION['lastName'].'"'; } ?>
            <?PHP if($_SESSION['typeAction'] == 'view') { echo 'readonly'; } ?>
          >
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Dirección:</label>
          <input type="text" name="address" class="<?PHP if($_SESSION['typeAction'] == 'view') { echo 'form-control-plaintext'; } else { echo 'form-control'; } ?>"
            id="address" required
            <?PHP if($_SESSION['typeAction']) { echo 'value="'.$_SESSION['address'].'"'; } ?>
            <?PHP if($_SESSION['typeAction'] == 'view') { echo 'readonly'; } ?>
          >
        </div>
        <div class="mb-3">
          <label for="workPhone" class="form-label">Telefono Corporativo:</label>
          <input type="text" name="workPhone" class="<?PHP if($_SESSION['typeAction'] == 'view') { echo 'form-control-plaintext'; } else { echo 'form-control'; } ?>"
            id="workPhone" required
            <?PHP if($_SESSION['typeAction']) { echo 'value="'.$_SESSION['workPhone'].'"'; } ?>
            <?PHP if($_SESSION['typeAction'] == 'view') { echo 'readonly'; } ?>
          >
        </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="mb-3">
          <label for="homePhone" class="form-label">Telefono Personal:</label>
          <input type="text" name="homePhone" class="<?PHP if($_SESSION['typeAction'] == 'view') { echo 'form-control-plaintext'; } else { echo 'form-control'; } ?>"
            id="homePhone"
            <?PHP if($_SESSION['typeAction']) { echo 'value="'.$_SESSION['homePhone'].'"'; } ?>
            <?PHP if($_SESSION['typeAction'] == 'view') { echo 'readonly'; } ?>
          >
        </div>
        <div class="mb-3">
          <label for="mail" class="form-label">Correo:</label>
          <input type="text" name="mail" class="<?PHP if($_SESSION['typeAction'] == 'view') { echo 'form-control-plaintext'; } else { echo 'form-control'; } ?>"
            id="mail" required
            <?PHP if($_SESSION['typeAction']) { echo 'value="'.$_SESSION['mail'].'"'; } ?>
            <?PHP if($_SESSION['typeAction'] == 'view') { echo 'readonly'; } ?>
          >
        </div>
      </div>        
    </section>
    <footer>
      <?PHP if($_SESSION['typeAction'] == 'view') {
        ?>
        <a class="btn btn-primary " href="search.php?id=<?PHP echo $_SESSION['id'] ?>&type=edit">
          <i class="bi-pencil-square"></i>
          Editar
        </a>
        <?PHP
       } else {
        ?>
        <input class="btn btn-primary d-none" type="text" name="action" value="edit"/>
        <input class="btn btn-primary" type="submit" name="save_contact" value="Guardar">
        </input>
        <a class="btn btn-ligth mx-3 " href="search.php?id=<?PHP echo $_SESSION['id'] ?>&type=view">
          Cancelar
        </a>
        <?PHP
       } ?>
    </footer>
  </form>
  <?PHP include './inc/formAddContact.php'; ?><!-- form section -->
</section>
<?PHP include './inc/footer.php'; ?><!-- footer section -->
