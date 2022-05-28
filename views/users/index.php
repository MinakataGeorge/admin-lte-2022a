<?php include '../../layouts/header.php' ?>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                  </div><!-- /.col -->
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content"> 
            <div class="container-fluid"> 
                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">
                                <i class="fas fa-list mr-1"></i>
                                List
                              </h3>
                            </div><!-- /.card-header -->

                            <div class="card-body">

                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Name</th>
                                    <th>Progress</th>
                                    <th style="width: 40px"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>Jhon</td>
                                    <td>
                                      <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="btn-group">
                                        <button type="button" class="btn btn-default">Action</button>
                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                                          <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                          <a class="dropdown-item text-info" href="#"><i class="fas fa-info mr-3"></i> See</a>
                                          <a class="dropdown-item text-success" href="#"><i class="fas fa-edit mr-3"></i> Edit</a>
                                          <div class="dropdown-divider"></div>
                                          <button class="dropdown-item text-danger" onclick="remove('Jhon')"><i class="fas fa-trash mr-3"></i>Erase</button>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Juan</td>
                                    <td>
                                      <div class="progress progress-xs">
                                        <div class="progress-bar bg-warning" style="width: 70%"></div>
                                      </div>
                                    </td>
                                    <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default">Action</button>
                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                                          <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                          <a class="dropdown-item text-info" href="#"><i class="fas fa-info mr-3"></i> See</a>
                                          <a class="dropdown-item text-success" href="#"><i class="fas fa-edit mr-3"></i> Edit</a>
                                          <div class="dropdown-divider"></div>
                                          <button class="dropdown-item text-danger" onclick="remove('Juan')"><i class="fas fa-trash mr-3"></i>Erase</button>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>Cron</td>
                                    <td>
                                      <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar bg-primary" style="width: 30%"></div>
                                      </div>
                                    </td>
                                    <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default">Action</button>
                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                                          <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                          <a class="dropdown-item text-info" href="#"><i class="fas fa-info mr-3"></i> See</a>
                                          <a class="dropdown-item text-success" href="#"><i class="fas fa-edit mr-3"></i> Edit</a>
                                          <div class="dropdown-divider"></div>
                                          <button class="dropdown-item text-danger" onclick="remove('Cron')"><i class="fas fa-trash mr-3"></i>Erase</button>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>Ale</td>
                                    <td>
                                      <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar bg-success" style="width: 90%"></div>
                                      </div>
                                    </td>
                                    <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default">Action</button>
                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                                          <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                          <a class="dropdown-item text-info" href="#"><i class="fas fa-info mr-3"></i> See</a>
                                          <a class="dropdown-item text-success" href="#"><i class="fas fa-edit mr-3"></i> Edit</a>
                                          <div class="dropdown-divider"></div>
                                          <button class="dropdown-item text-danger" onclick="remove('Ale')"><i class="fas fa-trash mr-3"></i>Erase</button>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                            </div><!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

<script>
  
  function remove(name) {
    Swal.fire({
  title: 'Are you sure to remove'+name+'?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#d33',
  cancelButtonColor: '#3085d6',
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'User erase!',
      '',
      'success'
    )
  }
})
}
  
</script>

<?php include '../../layouts/footer.php' ?>
  