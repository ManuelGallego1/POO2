<?php
include('template_01.php');
?>
<body>
<section class="vh-100 gradient-custom img-bg">
  <form action="config/Process.php" method="post">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                <div class="form-outline form-white mb-4">
                  <input type="text" id="typeEmailX" class="form-control form-control-lg" name="user" required />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" class="form-control form-control-lg" name="pass"
                    required />
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>



                <button class="btn btn-outline-light btn-lg px-5" name="submit_login" type="submit">Login</button>

              </div>



            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
</body>