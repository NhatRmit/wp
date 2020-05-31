<!DOCTYPE HTML>
<html>

<head>
    <title>PDO - Update a Record - PHP CRUD Tutorial</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>

<body>

    <div class="container">
        <div class="page-header">
            <h1>Update Product</h1>
        </div>

        <?php
        $id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

        //include database connection
        include 'database.php';

        try {
            $query = "SELECT id, product_name, product_description, Price FROM products WHERE id = ? ";
            $stmt = $con->prepare($query);
            $stmt->bindParam(1, $id);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $name = $row['product_name'];
            $description = $row['product_description'];
            $price = $row['Price'];
        }

        catch (PDOException $exception) {
            die('ERROR: ' . $exception->getMessage());
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id={$id}");?>" method="post">
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Name</td>
                    <td><input type='text' name='product_name' value="<?php echo htmlspecialchars($name, ENT_QUOTES);  ?>" class='form-control' /></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea name='product_description' class='form-control'><?php echo htmlspecialchars($description, ENT_QUOTES);  ?></textarea></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type='text' name='Price' value="<?php echo htmlspecialchars($price, ENT_QUOTES) ;  ?>" class='form-control' /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type='submit' value='Save Changes' class='btn btn-primary' />
                        <a href='index.php' class='btn btn-danger'>Back to read products</a>
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if ($_POST) {
            try {
                $query = "UPDATE products 
                     SET product_name=:product_name, product_description=:product_description, Price=:Price 
                     WHERE id = :id";
                $stmt = $con->prepare($query);
                $name = htmlspecialchars(strip_tags($_POST['product_name']));
                $description = htmlspecialchars(strip_tags($_POST['product_description']));
                $price = htmlspecialchars(strip_tags($_POST['Price']));

                $stmt->bindParam(':product_name', $name);
                $stmt->bindParam(':product_description', $description);
                $stmt->bindParam(':Price', $price);
                $stmt->bindParam(':id', $id);

                if ($stmt->execute()) {
                    echo "<div class='alert alert-success'>Record was updated.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Unable to update record. Please try again.</div>";
                }
            }

            catch (PDOException $exception) {
                die('ERROR: ' . $exception->getMessage());
            }
        }
        ?>
    </div> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>