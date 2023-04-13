<?php 
include("plantilla.php");
?>
  <div class="container-fluid p-3">
    <form method="Post" action="/php/functions.php">
      <div class="mx-auto col-lg-6 col-sm-12 item-center mt-3 mb-3">
        <h2>Student</h2>
        <div class="form-group"> <!-- Full Name -->
          <label for="full_name_id" class="control-label">Full Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group"> <!-- First surname -->
          <label for="last_name" class="control-label">First Surname</label>
          <input type="text" class="form-control" id="fne" name="fne" required>
        </div>

        <div class="form-group"> <!-- Second surname -->
          <label for="last_name" class="control-label">Second Surname</label>
          <input type="text" class="form-control" id="sne" name="sne" required>
        </div>

        <div class="form-group"> <!-- TI -->
          <label for="TI" class="control-label">T.I</label>
          <input type="number" class="form-control" id="ti" name="ti" required>
        </div>

        <div class="form-group"> <!-- Gruop -->
          <label for="last_name" class="control-label">Group</label>
          <input type="text" class="form-control" id="gr" name="gr" required>
        </div>

        <div class="form-group"> <!-- Birth Date -->
          <label for="last_name" class="control-label">Birth Date</label>
          <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <h2 class="mt-3 mb-3">Attendant</h2>

        <div class="form-group"> <!-- Full Name -->
          <label for="full_name_id" class="control-label">Full Name</label>
          <input type="text" class="form-control" id="name2" name="name2" required>
        </div>

        <div class="form-group"> <!-- First surname -->
          <label for="last_name" class="control-label">First Surname</label>
          <input type="text" class="form-control" id="fna" name="fna" required>
        </div>

        <div class="form-group"> <!-- Second surname -->
          <label for="last_name" class="control-label">Second Surname</label>
          <input type="text" class="form-control" id="sna" name="sna" required>
        </div>

        <div class="form-group"> <!-- CC -->
          <label for="TI" class="control-label">T.I</label>
          <input type="number" class="form-control" id="cc" name="cc" required>
        </div>

        <div class="form-group"> <!-- Phone -->
          <label for="phone" class="control-label">Phone</label>
          <input type="text" class="form-control" id="ph" name="ph" placeholder="+57" required>
        </div>


        <div class="form-group mt-3"> <!-- Submit Button -->
          <button type="submit" name="submit_add" id="submit_add" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>