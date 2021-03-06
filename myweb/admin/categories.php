<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">
       
        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <?php include "includes/admin_page_heading.php"; ?>
                <!-- /.row -->
                
                <div class="col-xs-6">
                   <?php //insert
                       insert_category();
                   ?>
                   <form action="" method="post">
                      <div class="form-group">
                          <label for="cat_title">Add Category</label>
                          <input type="text" class="form-control" name="cat_title">
                      </div>
                      <div class="form-group">
                          <input type="submit" class="btn btn-primary" name="add" value="Add Category">
                      </div>    
                   </form>
                   
                   
                <?php //update
                   if(isset($_GET['update'])){
                       include "includes/update_categories.php";
                   }
                ?>
                   
                </div><!-- Add&update Category-->
                
                <div class="col-xs-6">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category Title</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php //Find all categories
                    find_all_categories();
                    ?>
                    <?php //delete category
                    delete_category();
                    ?>
                    </tbody>   
                </table> 
                </div>    

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include "includes/admin_footer.php"; ?>
 
