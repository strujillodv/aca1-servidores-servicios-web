<?PHP
$query = "SELECT * FROM Contacts ORDER BY name ASC";
$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) == 0) {
  
  include './inc/no-content.php';
} 
else {?>
  <table class="table table-borderless">
    <thead class="border-bottom border-primary">
      <tr>
        <th scope="col"></th>
        <th scope="col"><h6> Nombre</h6></th>
        <th class="d-none d-md-table-cell" scope="col"><h6>Apellido</h6></th>
        <th class="d-none d-lg-table-cell" scope="col"><h6>Dirección</h6></th>
        <th class="d-none d-lg-table-cell" scope="col"><h6>Telefono <br/> Corporativo</h6></th>
        <th class="d-none d-lg-table-cell" scope="col"><h6>Telefono <br/> Personal</h6></th>
        <th class="d-none d-lg-table-cell" scope="col"><h6>Correo</h6></th>
      </tr>
    </thead>
    <tbody class="container-contacts">
      <?PHP while($data = mysqli_fetch_array($result)) {?>
        <tr>
          <td class="align-middle" scope="row" style="width: 100px;">
            <h1 class="avatar-contact text-center rounded rounded-circle bg-primary text-light"><?PHP echo substr($data['name'], 0, 1); ?></h1>
          </td>
          <td class="align-middle text-secondary" ><?PHP echo $data['name'] ?></td>
          <td class="d-none d-md-table-cell align-middle text-secondary" ><?PHP echo $data['lastName'] ?></td>
          <td class="d-none d-lg-table-cell align-middle text-secondary" ><?PHP echo $data['address'] ?></td>
          <td class="d-none d-lg-table-cell align-middle text-secondary" ><?PHP echo $data['workPhone'] ?></td>
          <td class="d-none d-lg-table-cell align-middle text-secondary" ><?PHP echo $data['homePhone'] ?></td>
          <td class="d-none d-lg-table-cell align-middle text-secondary" ><?PHP echo $data['mail'] ?></td>
          <td class="align-middle" style="width: 100px;">
            <div >
              <a class="d-block my-1 py-1" href="search.php?id=<?PHP echo $data['id'] ?>&type=view">
                <i class=" bi bi-eye"></i> Ver
              </a>
              <a class="d-block my-1 py-1" href="search.php?id=<?PHP echo $data['id'] ?>&type=edit">
                <i class="bi-pencil-square"></i> Editar
              </a>
              <a class="d-block my-1 py-1" href="delete.php?id=<?PHP echo $data['id'] ?>">
                <i class="bi bi-trash"></i> Borrar
              </a>
            </div>
          </td>
        </tr>
      <?PHP } ?>        
    </tbody>
  </table>    
<?PHP } ?>
