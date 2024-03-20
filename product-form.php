
<?php 
       include("dbconn.php");
       include("header.php");  
     
?>  


<!--
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
     
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
             <div class="col-lg-12">
                  <h2>Add new </h2>
                      <div class="col-lg-6">

                        <form  method="POST" action="test.php">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Product Name" name="pname">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Price" name="price">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Product detail" name="pdetail">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="category" name="category">
                            </div> 
                          
                            <button type="submit" class="btn btn-primary">Save Record</button>

                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body> 

</html>

<?php include("footer.php"); ?>

