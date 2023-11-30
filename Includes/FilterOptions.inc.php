<?php
include("Includes/Connection.inc.php");

$conn = new DatabaseConnection("localhost", "root", "Lelouch01", "controlAsistencia");
$conn->connect();
?>

<div class="row justify-content-center align-items-center">
  <div class="col-6 mb-4 text-center">
    <div class="position-relative">
      <i class="bi bi-search fw-bold searchIco"></i>
      <input type="Text" class="form-control form-control-lg normalSt searchInput" id="search" placeholder="Buscar...">
    </div>
  </div>
  <div class="col-6 mb-4 text-center">
    <div class="row justify-content-center align-items-center g-0">
      <div class="col-4 text-end pe-4">
        <label for="" class="fw-bold subText">Filtrar: </label>
      </div>
      <div class="col-8">
        <select id="selectGroup" class="form-select form-select-lg text-center normalSt">
          <?php
          $res = $conn->query("SELECT * FROM Grupo;");
          while ($reg = mysqli_fetch_row($res)) {
            ?>
            <option value="<?php echo $reg[0]; ?>">
              <?php echo $reg[1] . " de " . $reg[2] . "º año."; ?>
            </option>
            <?php
          }
          ?>
        </select>
      </div>
    </div>
  </div>
</div>