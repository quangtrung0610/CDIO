<div class="row">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">User Management</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Avatar</th>
              <th>Username</th>
              <th>Type</th>
              <th>Full name</th>
              <th>Phone number</th>
              <th>Address</th>
              <th>Email</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            require_once(dirname(__FILE__) . '/users-read.php');
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>