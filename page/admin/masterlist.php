<?php include 'plugins/navbar.php';?>
<?php include 'plugins/sidebar/masterlistbar.php';?>
  <!-- Main Sidebar Container -->

 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Book Masterlist</h1>
            <br>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Book Masterlist</li>
            </ol>
          </div><!-- /.col -->
           <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
             <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#add_book">Add Book</a>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">
                  <input type="hidden" name="" id="student_id_list" value="<?=$name;?>">
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                   <div class="row">
                    <div class="col-3">
                    <label>Book Title:</label> <input type="text" name="book_title" id="book_title" class="form-control">
                    </div>
                    <div class="col-2">
                    <label>Author:</label> <input type="text" name="author_search" id="author_search" class="form-control">
                    </div>
                    <div class="col-3">
                    <label>Category:</label> <input type="text" name="category_search" id="category_search" class="form-control">
                    </div>
                    <div class="col-3">
                    <label>Description:</label> <input type="text" name="description_search" id="description_search" class="form-control">
                    </div>
                     <div class="col-1">
                      <span style="visibility:hidden;">.</span>
                      <p style="text-align:right;"><a href="#" class="btn btn-primary" onclick="load_books()">Search <i class="fa fa-search"></a></i></p>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-12">
                       <div class="card-body table-responsive p-0" style="height: 420px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="">
                <thead style="text-align:center;">
                    <th>#</th>
                    <th>Accession No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Author</th>
                    <th>Date Publish</th>
                    <th>Category</th>
                    <th>Type of Book</th>
                    <th>Quantity of Book</th>
                    <th>Location</th>
                    <th>Shelf</th>  
            </thead>
            <tbody id="list_of_books" style="text-align:center;"></tbody>
                </table>
              </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                
                </div>
              </form>
            </div>
            <!-- /.card -->

</div>
</div>
</div>
</section>
</div>

<?php include 'plugins/footer.php';?>
<?php include 'plugins/javascript/masterlist_script.php';?>
