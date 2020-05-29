      <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
       <title>Document</title>
   </head>

   <body>

       <?php
        include 'database.php';
        if ($_POST) {
            try {

                $query = "INSERT INTO products SET product_name=:product_name, product_description=:product_description, Price=:Price";

                $stmt = $con->prepare($query);

                $name = htmlspecialchars(strip_tags($_POST['product_name']));
                $description = htmlspecialchars(strip_tags($_POST['product_description']));
                $price = htmlspecialchars(strip_tags($_POST['Price']));

                

                $stmt->bindParam(':product_name', $name);
                $stmt->bindParam(':product_description', $description);
                $stmt->bindParam(':Price', $price);
               

                if ($stmt->execute()) 
                {
                    echo "<div class='alert alert-success'>Record was saved.</div>";

                    
                } else {
                    echo "<div class='alert alert-danger'>Unable to save record.</div>";
                } 
            } catch (PDOException $exception) {
                die('ERROR: ' . $exception->getMessage());
            }
        }
        ?>

       <div class="container">
           <div class="page-header">
               <h1>Create Product</h1>
           </div>

           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
               <table class='table table-hover table-responsive table-bordered'>
                   <tr>
                       <td>Name</td>
                       <td><input type='text' name='product_name' class='form-control' /></td>
                   </tr>
                   <tr>
                       <td>Description</td>
                       <td><textarea name='product_description' class='form-control'></textarea></td>
                   </tr>
                   <tr>
                       <td>Price</td>
                       <td><input type='text' name='Price' class='form-control' /></td>
                   </tr>
                  
                   <tr>
                       <td></td>
                       <td>
                           <input type='submit' value='Save' class='btn btn-primary' />
                           <a href='index.php' class='btn btn-danger'>Back to read products</a>
                       </td>
                   </tr>
               </table>
           </form>
       </div>

   </body>

   </html>