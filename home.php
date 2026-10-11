<?php

include 'db.php';

$result=$con->query('select * from products');
$product=$result->fetch_assoc();

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
           <nav
            class="navbar navbar-expand-sm navbar-light bg-light"
           >
            <div class="container">
                <a class="navbar-brand" href="#">hello <?php echo $_SESSION['name']  ?></a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            
                        </li>
                        
                       
                   
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                       <a
                        name=""
                        id=""
                        class="btn btn-outline-success my-2 my-sm-0"
                        href="csv.php"
                        role="button"
                        >Generate csv</a
                       >
                       <a
                        name=""
                        id=""
                        class="btn btn-outline-success my-2 my-sm-0"
                        href="pdf.php"
                        role="button"
                        >Generate pdf</a
                       >
                        <a
                        name=""
                        id=""
                        class="btn btn-outline-success my-2 my-sm-0"
                        href="logout.php"
                        role="button"
                        >LOGOUT</a
                       >
                        
                    </form>
                </div>
            </div>
           </nav>
           
        </header>
        <main>
            <center><h1>Product Management</h1></center>
<br>
<br>
            <center>
                <a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="insert.php"
                    role="button"
                    >insert</a
                >
                
            </center>


            <div
                class="container"
            >
           <div
            class="table-responsive"
           >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">Product id</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Category</th>
                         <th scope="col">Price</th>
                            <th scope="col">Quantity</th>   
                            <th scope="col">Brand</th> 
                             <th scope="col">Description</th>
                              <th scope="col">edit</th> 
                              <th scope="col">delete</th>


                    </tr>
                </thead>
                <tbody>
                    <?php while($row=$result->fetch_assoc()){?>
                    <tr class="">
                        <td scope="row"><?php echo $row['product_id']?></td>
                        <td><?php echo $row['product_name']?></td>
                         <td><?php echo $row['category']?></td>
                          <td><?php echo $row['price']?></td>
                           <td><?php echo $row['quantity']?></td>
                            <td><?php echo $row['brand']?></td>
                             <td><?php echo $row['description']?></td>
                              <td>
                                <a
                                    name=""
                                    id=""
                                    class="btn btn-primary"
                                    href="edit.php?name=<?php echo $product['product_name']?>"
                                    role="button"
                                    value=""
                                    >Edit</a
                                >
                                
                              </td>
                               <td>
                                <a
                                    name=""
                                    id=""
                                    class="btn btn-primary"
                                    href="delete.php?id=<?php echo $product['product_id']?>"
                                    role="button"
                                    value=""
                                    >Delete</a
                                >
                                
                              </td>

                    </tr>
                   <?php } ?>
                </tbody>
            </table>
           </div>
           
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
