<?php
    require '../templates/header.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM `books` WHERE id = $id";
    $result = mysqli_query($dbc, $sql);

    if ($result && mysqli_affected_rows($dbc) > 0) {
        $singleBook = mysqli_fetch_array($result, MYSQLI_ASSOC);
    } elseif ($result && mysqli_affected_rows($dbc) == 0) {
        header("Location : ../errors/404");
    } else {
        die("ERROR: could not ne able to get the data requested");
    }

    $sql = "DELETE FROM `books` WHERE id=$id";
    $result = mysqli_query($dbc, $sql);

 ?>
 <div class="container">
     <div class="row mb-2">
         <div class="col">
             <h1>Are you sure you want to delete, " <?= $singleBook['book_name']; ?> "?</h1>
         </div>
     </div>

     <div class="row mb-2">
         <div class="col">
            <a class="btn btn-outline-secondary" href="./books/book.php">Cancel</a>

            <a class="btn btn-danger" href="index.php">Delete <?= $singleBook['book_name'];  ?> </a>
         </div>
     </div>



 </div>


<?php require '../templates/footer.php' ?>
