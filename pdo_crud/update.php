<?php
include("template_01.php");
include("template_navbar.php");
?>
<div class="container-fluid p-3 bg-secondary">
    <form method="Post" action="config/Process.php">
        <div class="mx-auto col-lg-6 col-sm-12 item-center mt-3 mb-3 rounded bg-dark text-white rounded-5">
            <div class="container-fluid p-4 mb-4">
                <h2>Student</h2>
                <?php
                $id = $_POST['id_update'];
                    print '<input type="hidden" name="id_update" value=' . $id . ' />'
                ?>
                <div class="form-group mb-3 mt-3 mx-auto"> <!-- Full Name -->
                    <label for="full_name_id" class="control-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group  mb-3 mt-3 mx-auto"> <!-- First surname -->
                    <label for="last_name" class="control-label">First Surname</label>
                    <input type="text" class="form-control" id="fne" name="fne" required>
                </div>

                <div class="form-group  mb-3 mt-3 mx-auto"> <!-- Second surname -->
                    <label for="last_name" class="control-label">Second Surname</label>
                    <input type="text" class="form-control" id="sne" name="sne" required>
                </div>

                <div class="form-group mb-3 mt-3 mx-auto"> <!-- TI -->
                    <label for="TI" class="control-label">T.I</label>
                    <input type="number" class="form-control" id="ti" name="ti" required>
                </div>

                <div class="form-group mb-3 mt-3 mx-auto"> <!-- Gruop -->
                    <label for="last_name" class="control-label">Program</label>
                    <input type="text" class="form-control" id="gr" name="program" required>
                </div>

                <div class="form-group mb-3 mt-3 mx-auto"> <!-- Birth Date -->
                    <label for="last_name" class="control-label">Birth Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
            </div>

            <div class="container-fluid p-3 mb-3">
                <h2 class="mt-3 mb-3">Attendant</h2>

                <div class="form-group mb-3 mt-3 mx-auto"> <!-- Full Name -->
                    <label for="full_name_id" class="control-label">Full Name</label>
                    <input type="text" class="form-control" id="name2" name="name2" required>
                </div>

                <div class="form-group mb-3 mt-3 mx-auto"> <!-- First surname -->
                    <label for="last_name" class="control-label">First Surname</label>
                    <input type="text" class="form-control" id="fna" name="fna" required>
                </div>

                <div class="form-group mb-3 mt-3 mx-auto"> <!-- Second surname -->
                    <label for="last_name" class="control-label">Second Surname</label>
                    <input type="text" class="form-control" id="sna" name="sna" required>
                </div>

                <div class="form-group mb-3 mt-3 mx-auto"> <!-- CC -->
                    <label for="TI" class="control-label">T.I</label>
                    <input type="number" class="form-control" id="cc" name="cc" required>
                </div>

                <div class="form-group mb-3 mt-3 mx-auto"> <!-- Phone -->
                    <label for="phone" class="control-label">Phone</label>
                    <input type="text" class="form-control" id="ph" name="ph" placeholder="+57" required>
                    <div class="form-group mt-3"> <!-- Submit Button -->
                        <button type="submit" name="submit_update" id="submit_add" class="btn btn-light">Submit</button>
                    </div>
                </div>

            </div>

        </div>
    </form>
</div>
</body>

</html>