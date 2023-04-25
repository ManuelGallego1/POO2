<?php
include_once("template_01.php");
include_once("template_navbar.php");
?>

<body>
    <div class="container-fluid bg-secondary text-white vh-100 p-5 ">
        <div class="table-responsive">
            <table class='table table-bordered bg-dark text-white'>
                <h2>Student</h2>
                <thead class='thead-dark'>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>First SurName</th>
                        <th>Group</th>
                        <th>TI</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once('./config/DatabaseProces.php');
                    $users = new DatabaseProcess();
                    $usuarios = $users->getAll();
                    if (!empty($usuarios)) {
                        foreach ($usuarios as $usuario) {
                            echo "<tr>";
                            echo "<td>" . $usuario["id"] . "</td>";
                            echo "<td>" . $usuario["name"] . "</td>";
                            echo "<td>" . $usuario["f_surname"] . "</td>";
                            echo "<td>" . $usuario["program"] . "</td>";
                            echo "<td>" . $usuario["dni"] . "</td>";
                            echo '<td>
                            <form method="post" action="./config/Process.php">
                            <input type="hidden" name="id_delete" value=' . $usuario["dni"] . ' />
                            <button type="submit" name="submit_delete" class="btn btn-danger">delete</button>
                            </form>
                            <form method="post" action="update.php">
                            <input type="hidden" name="id_update" value=' . $usuario["id"] . ' />
                            <button type="submit" class="btn btn-warning">update</button>
                            </form>
                            </td>';
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No found student.</td></tr>";
                    } ?>
        </div>
        </tbody>
        </table>
        <h2>Accudent</h2>
        <div class="table-responsive">
            <table class='table table-bordered bg-dark text-white'>
                <thead class='thead-dark'>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>First SurName</th>
                        <th>ID Son</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $accudent = new DatabaseProcess();
                    $accudents = $accudent->getAll2();
                    if (!empty($accudents)) {
                        foreach ($accudents as $accudent) {
                            echo "<tr>";
                            echo "<td>" . $accudent["id"] . "</td>";
                            echo "<td>" . $accudent["name"] . "</td>";
                            echo "<td>" . $accudent["f_surname"] . "</td>";
                            echo "<td>" . $accudent["dni_son"] . "</td>";
                            echo "<td>" . $accudent["phone"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr>
                        <td colspan='6'>No found student.</td>
                    </tr>";
                    }
                    ?>
        </div>
        </tbody>
        </table>
    </div>
</body>

</html>