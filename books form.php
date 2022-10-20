<?php include 'conection.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-info fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Shuvo</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/books form.html"><button class="btn btn-info">Books</button></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Add Book</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#">Action 1</a>
                                    <a class="dropdown-item" href="#">Action 2</a>
                                </div>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- main section start -->
    <main>
        <br>
        <br>
        <?php
        if (isset($_POST['submit'])) {

            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["bookphoto"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $bookname = $_POST["bookname"];
            $bookdetail = $_POST["bookdetail"];
            $bookauthor = $_POST["bookauthor"];
            $bookpub = $_POST["bookpub"];
            $branch = $_POST["branch"];
            $bookprice = $_POST["bookprice"];
            $bookquantity = $_POST["bookquantity"];
            // $bookphoto = $_POST["bookphoto"];
            // $image = $_POST["image"];    
            $sql = "INSERT INTO `books_add`( `bookname`, `detail`, `autor`, `publication`, `branch`, `price`,`quantity`) VALUES ('$bookname','$bookdetail','$bookauthor','$bookpub','$branch','$bookprice','$bookquantity')";
            $submit = mysqli_query($conn, $sql);
            if ($submit) {
                header('location:books form.php');
            } else {
                echo mysqli_error($conn);
            }
        }


        ?>
        <div class=" d-flex justify-content-center">
            <div class="rightinnerdiv">
                <div id="addbook" class="innerright portion">
                    <button class="greenbtn">ADD NEW BOOK</button><br>
                    <form action="" method="post" enctype="multipart/form-data">
                        <label>Book Name:</label>
                        <input type="text" class="form-control" name="bookname">
                        <label>Detail:</label>
                        <input class="form-control" type="text" name="bookdetail">
                        <label>Autor:</label>
                        <input class="form-control" type="text" name="bookauthor">
                        <label>Publication</label>
                        <input class="form-control" type="text" name="bookpub">
                        <div>
                            Branch:
                            <input class="" type="radio" name="branch" value="other">other
                            <input class="" type="radio" name="branch" value="BSIT">BSIT
                            <br>
                            <div style="margin-left:80px">
                                <input class="" type="radio" name="branch" value="BSCS">BSCS
                                <input class="" type="radio" name="branch" value="BSSE">BSSE
                            </div>
                        </div>
                        <label>Price:</label>

                        <input type="number" name="bookprice">

                        <label>Quantity:</label>
                        <input type="number" name="bookquantity">
                        </br>
                        <label>Book Photo</label>
                        <input type="file" name="bookphoto" id="bookphoto" value="upload">
                        </br>


                        <input style="margin: left 40px;" type="submit" name="submit" value="SUBMIT">
                        </br>


                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>