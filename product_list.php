<?php
    include("dbconn.php");
    include("header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="col-lg-12">
                        <h2>List of Product</h2> 
               <form class="se" action="index.php?kw=<?php=$_POST['search'];?>">            
                    <a href="product-form.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a>
                    &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
               </form>          
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th class="containerid">  ID <?php echo ' <a  type="button" class="btn btn-xs btn-primary" href="index.php?order=ID&sort=DESC"> <span class="glyphicon glyphicon-chevron-down"></span></a> '; ?>
                                        <?php echo ' <a  type="button" class="btn btn-xs btn-primary" href="index.php?order=ID&sort=ASC"> <span class="glyphicon glyphicon-chevron-up"></span></a> '; ?>
                                    </th>
                                    <th>PRODUCT NAME<?php echo ' <a  type="button" class="btn btn-xs btn-primary" href="index.php?order=bname&sort=DESC"> <span class="glyphicon glyphicon-chevron-down"></span></a> '; ?>
                                        <?php echo ' <a  type="button" class="btn btn-xs btn-primary" href="index.php?order=bname&sort=ASC"> <span class="glyphicon glyphicon-chevron-up"></span></a> '; ?>
                                    </th>
                                    <th>Price<?php echo ' <a  type="button" class="btn btn-xs btn-primary" href="index.php?order=author&sort=DESC"> <span class="glyphicon glyphicon-chevron-down"></span></a> '; ?>
                                        <?php echo ' <a  type="button" class="btn btn-xs btn-primary" href="index.php?order=author&sort=ASC"> <span class="glyphicon glyphicon-chevron-up"></span></a> '; ?>
                                    </th>
                                    <th> Product Detail<?php echo ' <a  type="button" class="btn btn-xs btn-primary" href="index.php?order=publisher&sort=DESC"> <span class="glyphicon glyphicon-chevron-down"></span></a> '; ?>
                                        <?php echo ' <a  type="button" class="btn btn-xs btn-primary" href="index.php?order=publisher&sort=ASC"> <span class="glyphicon glyphicon-chevron-up"></span></a> '; ?>
                                    </th>
                                    <th>Category<?php echo ' <a  type="button" class="btn btn-xs btn-primary" href="index.php?order=isbn&sort=DESC"> <span class="glyphicon glyphicon-chevron-down"></span></a> '; ?>
                                        <?php echo ' <a  type="button" class="btn btn-xs btn-primary" href="index.php?order=isbn&sort=ASC"> <span class="glyphicon glyphicon-chevron-up"></span></a> '; ?>
                                    </th>                                 
                                    </tr>
                                </thead>
                            <tbody>
                                <?php       
                                    if($order == '') {
                                        $query = 'SELECT * FROM book';
                                    }

                                        $order = isset($_GET['order']) ? $_GET['order'] : $_GET['order'];
                                        $sort = isset($_GET['sort']) ? $_GET['sort'] : 'ASC';
                                        $sort = ($sort == 'ASC') ? 'DESC': 'ASC';
                                        $prefix=$_GET['search'];
                                    
                                        if($prefix!=NULL)  {   $query = 'SELECT * FROM book where bname LIKE "%'.$prefix.'%" or author LIKE "%'.$prefix.'%" or publisher LIKE "%'.$prefix.'%" or isbn LIKE "%'.$prefix.'%"  '; 
                                    
                                        }     
                            
                                    if($order!=NULL) {
                                        $query = 'SELECT * FROM book ORDER by '.$order.' '.$sort;
                                    }    
                                                    //   echo $query;   // For check syntax
                                         $result = mysqli_query($db, $query) or die (mysqli_error($db));
                                
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                            
                                                echo '<tr>';
                                                echo '<td>'. $row['ID'].'</td>';
                                                echo '<td>'. $row['bname'].'</td>';
                                                echo '<td>'. $row['author'].'</td>';
                                                echo '<td>'. $row['publisher'].'</td>';
                                                echo '<td>'. $row['isbn'].'</td>';
                                                echo '<td>  ';
                                                //  echo '<td> <a type="button" class="btn btn-xs btn-info" href="searchfrm.php?action=edit & id='.$row['ID'] . '" > SEARCH </a> ';
                                                echo ' <a  type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id='.$row['ID'] . '"> EDIT </a> ';
                                                echo ' &nbsp; &nbsp; &nbsp; <a  type="button" class="btn btn-xs btn-danger" href="del.php?type=people&delete & id=' . $row['ID'] . '">DELETE </a> </td>';
                                                echo '</tr> ';
                                            }
                                ?>   
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
                
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
</div>
</body>
</html>
<?php  include("footer.php"); ?>

