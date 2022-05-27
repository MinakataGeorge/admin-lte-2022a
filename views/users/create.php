<?php include '../../layouts/header.php' ?>
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6"></div><!-- /.col -->
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
                                    <i class="fas fa-user-plus mr-1"></i>
                                    Crear
                                </h3>
                                </div><!-- /.card-header -->

                                <form action="#" class="get">
                                    <div class="card-body">
                                    
                                    <div class="row">
                                        <div class="col-5">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="name" class="form-control">
                                        </div>
                                        <div class="col-5">
                                            <label for="email">E-Mail</label>
                                            <input type="text" id="email" name="email" class="form-control">
                                        </div>
                                        <div class="col-2">
                                            <label for="username">Username</label>
                                            <input type="text" id="username" name="username" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" name="password" class="form-control">
                                        </div>
                                        <div class="col-3">
                                            <label for="confirm">Conrim password</label>
                                            <input type="password" id="confirm" name="confirm" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <label for="address">Address</label>
                                            <input type="text" id="address" name="address" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-2">
                                            <label for="city">City</label>
                                            <input type="text" id="city" name="city" class="form-control">
                                        </div>
                                        <div class="col-2">
                                            <label for="state">State</label>
                                            <select id="state" name="state" class="form-control">
                                                <option value="">--Select your state--</option>
                                                <option value="jalisco">Jalisco</option>
                                                <option value="tijuana">Tijuana</option>
                                                <option value="queretaro">Queretaro</option>
                                                <option value="monterrey">Monterrey</option>
                                            </select>
                                        </div>
                                        <div class="col-2">
                                            <label for="zip">Zip code</label>
                                            <input type="number" id="zip" name="zip" class="form-control">
                                        </div>
                                    </div>

                                    </div><!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                        <button type="reset" class="btn btn-default">Cancel</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        
<?php include '../../layouts/footer.php' ?>