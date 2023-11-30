<div class="row justify-content-center g-0 studentInstance">
  <div class="col-11 col-md-10 col-lg-8 mb-4 mt-2 borderPanel">
    <div class="extraForm">
      <div class="row justify-content-center align-items-center g-0">
        <div class="col-12 col-md-6">
          <div class="row justify-content-center align-items-center g-0">
            <!-- Student personal Information-->
            <div class="col-6">
              <img id="studentImg" src="Images/StudentAccount/ChristianMilanes.jpg" class="img-fluid imgSt"
                alt="Fotografía del estudiante">
            </div>
            <div class="col-6 ps-4 text-start">
              <?php
              $res2 = $conn->query("SELECT Grupo.nombreGrupo, Grupo.anyoEscolar FROM Grupo, Alumno
              WHERE Grupo.idGrupo = Alumno.idGrupo AND Alumno.idAlumno = $reg[0];");
              $groupRow = $res2->fetch_row();
              ?>
              <p class="p-2 parr fw-bold studentGroupName">
                <?php echo $groupRow[0] . " de " . $groupRow[1] . "º año."; ?>
              </p>
              <p class="p-2 parr fw-bold studentName">
                <?php echo $reg[1] . " " . $reg[2] ?>
              </p>
            </div>
          </div>
          <div class="row align-items-center g-2">
            <div class="col-11 mt-4 borEx"></div>
          </div>
          <div class="row justify-content-center g-0">
            <div class="col-12 text-start mt-2">
              <p class="h3 fw-bold subtitle">Observaciones</p>
              <p class="parr">15% de las ausecias quitan el derecho a la envaluación continua</p>
            </div>
          </div>
        </div>
        <!-- Students graphics -->
        <div class="col-12 col-md-6">
          <div class="row align-items-center g-0 separator">
            <div class="col-11 mt-4 mb-4 borEx"></div>
          </div>
          <div class="row justify-content-center align-items-end g-0">
            <div class="col-8 mb-3">
              <!-- Select module -->
              <select class="form-select form-select-lg text-center selectModules">
                <?php
                $res2 = $conn->query("SELECT Modulo.idModulo, Modulo.nombreModulo FROM Modulo,AlumnoModulo
                  WHERE Modulo.idModulo = AlumnoModulo.idModulo And AlumnoModulo.idAlumno = $reg[0];");
                while ($reg2 = mysqli_fetch_row($res2)) {
                  ?>
                  <option value="<?php echo $reg2[0]; ?>">
                    <?php echo $reg2[1]; ?>
                  </option>
                  <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="row justify-content-center align-items-center g-0">
            <div class="col-12 text-center">
              <!-- Ausencias -->
              <div class="percentage" style="--percentage: 80">
                <svg>
                  <circle r="42%" cx="50%" cy="50%" pathlength="100"></circle>
                  <circle r="42%" cx="50%" cy="50%" pathlength="100"></circle>
                </svg>
                <span class="percentageS fw-bold">00%</span>
              </div>
            </div>
          </div>

          <div class="row justify-content-end align-items-center g-0 mt-5">
            <div class="col-1 text-end">
              <div id="square"></div>
            </div>
            <div class="col-4 text-start pt-3">
              <p class="subtitle fw-bold" id="lack">Ausencias</p>
            </div>
            <div class="col-1 text-end">
              <div id="square2"></div>
            </div>
            <div class="col-4 text-start pt-3">
              <p class="subtitle fw-bold" id="assistance">Asistencia</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-1 ps-2 mt-3">
    <form action="">
      <input type="hidden" name="idStudent" class="idValue"  value="<?php echo $reg[0]; ?>">
      <input type="hidden" name="idStudent" class="moduleValue"  value="0">
      <button class="btnMore" type="submit"><i class="bi bi-three-dots-vertical align-baseline moreDetails"></i></button>
    </form>
  </div>

</div>