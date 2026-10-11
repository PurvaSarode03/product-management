<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD']==='POST'){


    $name=$_POST['pname'];
    $category=$_POST['category'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $brand=$_POST['brand'];
    $desc=$_POST['desc'];

$sql=$con->prepare('insert into products (product_name,category,price,quantity,brand,description) values (?,?,?,?,?,?)');
$sql->bind_param('sssiss',$name,$category,$price,$quantity,$brand,$desc);
if($sql->execute()){
    header('Location:home.php');
}
}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <center>
                <h1>
                    Insert a product
                </h1>
            </center>

            <div
                class="container col-5 border shadow p-3 mt-4"
            >
             <form action="" method="POST">
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="pname"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">product Name</label>
                </div>
                 <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="category"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Category</label>
                 </div>
                 <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="price"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Price</label>
                 </div>
                  <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="quantity"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Quantity</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="brand"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Brand</label>
                  </div>
                   <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="desc"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Description</label>
                   </div>
                   
                   <button
                    type="submit"
                    class="btn btn-primary"
                   >
                    Insert
                   </button>
                   
             </form>
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
