<?php 
include("plantilla.php");
?>
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto mt-5">
        <h2>Student</h2>
        <?php
        include_once("./php/connect.php");
        $sql = "SELECT * FROM student";
        $resultado = mysqli_query($mysqli, $sql);

        if (mysqli_num_rows($resultado) > 0) {

          echo "<table class='table table-bordered'>";
          echo "<thead class='thead-dark'>";
          echo "<tr><th>ID</th><th>Name</th><th>First SurName</th><th>Group</th><th>TI</th><th>Tools</th></tr>";
          echo "</thead>";


          while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila["id"] . "</td>";
            echo "<td>" . $fila["name"] . "</td>";
            echo "<td>" . $fila["first_sur"] . "</td>";
            echo "<td>" . $fila["grp"] . "</td>";
            echo "<td>" . $fila["ti"] . "</td>";
            echo '<td> <form method="post" action="./php/functions.php">
            <input type="hidden" name="ti_delete" value='.  $fila["ti"] . ' />
            <button type="submit" class="btn btn-danger">delete</button>
          </form>';
          echo '<form method="post" action="update.php">
            <input type="hidden" name="id_update" value='.  $fila["id"] . ' />
            <button type="submit" class="btn btn-warning">update</button>
          </form></td>';
            echo "</tr>";
          }


          echo "</table>";
          echo "<h2>Attendant</h2>";
        } else {
          echo "No found student.";
          echo "<br><br>";
        }

        $sql2 = "SELECT * FROM attendant";
        $resultado2 = mysqli_query($mysqli, $sql2);

        if (mysqli_num_rows($resultado2) > 0) {

          echo "<table class='table table-bordered'>";
          echo "<tr><th>ID</th><th>Name</th><th>First SurName</th><th>CC</th><th>TI Son</th></tr>";


          while ($fila = mysqli_fetch_assoc($resultado2)) {
            echo "<tr>";
            echo "<td>" . $fila["id"] . "</td>";
            echo "<td>" . $fila["name"] . "</td>";
            echo "<td>" . $fila["first_sur"] . "</td>";
            echo "<td>" . $fila["cc"] . "</td>";
            echo "<td>" . $fila["id_son"] . "</td>";
            echo "</tr>";
          }


          echo "</table>";
        } else {
          echo "No found attendant";
          echo "<br><br>";
        }
        ?>
      </div>
    </div>
  </div>
</body>

</html>