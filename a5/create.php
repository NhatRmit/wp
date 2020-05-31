      <!DOCTYPE html>
      <html lang="en">

      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
          <title>Create Page</title>
      </head>

      <body>

          <?php
            include 'database.php';
            if ($_POST) {
                try {

                    $query = "INSERT INTO products SET product_name=:product_name, product_description=:product_description, Price=:Price, product_image=:product_image";

                    $stmt = $con->prepare($query);

                    $name = htmlspecialchars(strip_tags($_POST['product_name']));
                    $description = htmlspecialchars(strip_tags($_POST['product_description']));
                    $price = htmlspecialchars(strip_tags($_POST['Price']));
                    $image = htmlspecialchars("product_image");

                    $image = !empty($_FILES["product_image"]["name"])
                        ? sha1_file($_FILES["product_image"]['tmp_name']) . "-" . basename($_FILES["product_image"]["name"])
                        : "";

                    if ($image) {
                        $dir = "uploads/";
                        $file = $dir . $image;
                        $type = pathinfo($file, PATHINFO_EXTENSION);
                        $errormsg = "";
                    }
                    $check = getimagesize($_FILES["product_image"]["tmp_name"]);
                    if ($check != false) {
                    } else {
                        $errormsg .= "<div>Submitted file is not an image.</div>";
                    }
                    if ($_FILES['product_image']['size'] > (1024000)) {
                        $errormsg .= "<div>Image must be less than 1 MB in size.</div>";
                    }
                    if (!is_dir($dir)) {
                        mkdir($dir, 0777, true);
                    }
                    if (empty($errormsg)) {
                        if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $file)) {
                        } else {
                            echo "<div class='alert alert-danger'>";
                            echo "<div>Unable to upload photo.</div>";
                            echo "</div>";
                        }
                    } else {
                        echo "<div class='alert alert-danger'>";
                        echo "<div>{$errormsg}</div>";
                        echo "<div>Update the record to upload photo.</div>";
                        echo "</div>";
                    }

                    $stmt->bindParam(':product_name', $name);
                    $stmt->bindParam(':product_description', $description);
                    $stmt->bindParam(':Price', $price);
                    $stmt->bindParam(':product_image', $image);

                    if ($stmt->execute()) {
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
                  <h1>Add new product</h1>
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
                          <td>Photo</td>
                          <td><input type="file" name='product_image' class='form-control' /></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td>
                              <input type='submit' value='Save' class='btn btn-primary' />
                              <a href='index.php' class='btn btn-danger'>Back to Index</a>
                          </td>
                      </tr>
                  </table>
              </form>
          </div>

      </body>

      </html>