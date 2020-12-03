<?php
  $title = 'Register Page';
  $r_active = 'active';
  include_once('includes/header.html');
?>
<br />
<div id="all">
    <div id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">

              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Other Pages</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column">
                    <li><a href="index.php" class="nav-link">Home</a></li>
                    <li><a href="register.php" class="nav-link active">Register</a></li>
                  </ul>
                </div>
              </div>

            </div>
            <div class="col-lg-9">
                <div class="box">
                  <h1>Registration Page</h1>
                  <p class="lead">Want to register? Fill the form below.</p>
                  <p class="text-muted">If you have any further query, please feel free to <a href="#">contact us</a>, our customer service center is open for you 24/7. We are pleased to serve you.</p>
                  <hr>
                  <form action="register.php" method="post" id="regForm">
                    <?php
                      require_once('register_action.php');
                    ?>
                    <div class="tab">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <select id="title" class="form-control validate"  oninput="this.className = ''" name="title" >
                          <option value="Mr">Mr.</option>
                          <option value="Miss">Miss.</option>
                          <option value="Mrs">Mrs.</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="first_name">First Name</label>
                          <input id="first_name" type="text" class="form-control validate"  oninput="this.className = ''" name="first_name" >
                      </div>
                      <div class="form-group">
                          <label for="other_name">Other Name(s)</label>
                          <input id="other_name" type="text" class="form-control" oninput="this.className = ''" name="other_name" >
                      </div>
                      <div class="form-group">
                          <label for="last_name">Last Name</label>
                          <input id="last_name" type="text" class="form-control validate"  oninput="this.className = ''" name="last_name" >
                      </div>
                      <div class="form-group">
                          <label for="email">Email</label>
                          <input id="email" type="email" name="email" class="form-control validate"  oninput="this.className = ''" >
                          <span id="emailMsg"></span>
                      </div>
                  </div>

                  <div class="tab">
                    <div class="form-group">
                        <label for="mmn">Mother Maiden Name</label>
                        <input id="mmn" type="text" class="form-control validate"  oninput="this.className = ''" name="mmn" >
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select id="gender" class="form-control validate"  oninput="this.className = ''" name="gender" >
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="marital">Marital Status</label>
                        <select id="marital" class="form-control validate"  oninput="this.className = ''" name="marital" >
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input id="dob" type="date" class="form-control validate"  oninput="this.className = ''" name="dob" >
                    </div>
                    <div class="form-group">
                        <label for="pob">Place of Birth</label>
                        <input id="pob" type="text" class="form-control validate"  oninput="this.className = ''" name="pob" >
                    </div>
                    <div class="form-group">
                        <label for="nationality">Nationality</label>
                        <input id="nationality" type="text" class="form-control validate"  oninput="this.className = ''" name="nationality" >
                    </div>
                  </div>
                  <div class="tab">
                    <div class="form-group">
                        <label for="soo">State of Origin</label>
                        <input id="soo" type="text" class="form-control validate"  oninput="this.className = ''" name="soo" >
                    </div>
                    <div class="form-group">
                          <label for="address">Contact Address</label>
                          <input id="address" type="text" class="form-control validate"  oninput="this.className = ''" name="address" >
                      </div>
                      <div class="form-group">
                          <label for="tin">Tax Identification Number</label>
                          <input id="tin" type="text" class="form-control validate"  oninput="this.className = ''" name="tin" >
                      </div>
                      <div class="form-group">
                          <label for="name">Phone Number</label>
                          <input id="phone" name="phone" type="number" pattern='^\+?\d{0,13}' placeholder="08123456789" class="form-control validate"  oninput="this.className = ''" >
                      </div>
                      <div class="form-group">
                          <label for="bvn">BVN</label>
                          <input id="bvn" type="number" pattern='^\+?\d{0,13}[11]' name="bvn" class="form-control validate"  oninput="this.className = ''" >
                      </div>
                      <div class="clearfix"></div>
                  </div>
                  <div style="overflow:auto;">
                    <div class="float-sm-left">
                      <button type="button" class="btn btn-primary btn-lg" id="prevBtn" onclick="nextPrev(-1)" >Back</button>
                    </div>
                    <div class="float-sm-right">
                      <button type="button" class="btn btn-primary btn-lg" id="nextBtn" onclick="nextPrev(1)" >Next</button>
                    </div>
                  </div>
                  <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                  </div>
                </form>
              </div>
            </div>
        </div>
     </div>
   </div>
</div>

<?php
  include_once('includes/jq.html');
  include_once('includes/footer.html');
?>