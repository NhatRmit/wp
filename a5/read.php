<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>

<body>


    <!-- container -->
    <div class="container">

        <div class="page-header">
            <h1>Product Information</h1>
        </div>

        <?php

        $id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

        include 'database.php';

        try {
            $query = "SELECT id, product_name, product_description, Price, product_image FROM products WHERE id = ? ";
            $stmt = $con->prepare($query);
            $stmt->bindParam(1, $id);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $name = $row['product_name'];
            $description = $row['product_description'];
            $price = $row['Price'];
            $image = $row['product_image'];
        } catch (PDOException $exception) {
            die('ERROR: ' . $exception->getMessage());
        }
        ?>
        <table class='table table-hover table-responsive table-bordered'>
            <tr>
                <td>Name</td>
                <td><?php echo htmlspecialchars($name, ENT_QUOTES);  ?></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><?php echo htmlspecialchars($description, ENT_QUOTES);  ?></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><?php echo htmlspecialchars($price, ENT_QUOTES);  ?></td>
            </tr>
            <tr>
                <td>Image</td>
                <td>
                    <?php echo htmlspecialchars($image, ENT_QUOTES) ? "<img src='uploads/{$image}' style='width:300px;' />" : "No image found.";  ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <a href='index.php' class='btn btn-danger'>Back to read products</a>
                </td>
            </tr>
        </table>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>