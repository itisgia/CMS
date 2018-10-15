<?php
    require '../templates/header.php';

    $sql = "SELECT `id`, `book_name`, `image_name` FROM `books` WHERE 1";
    $result = mysqli_query($dbc, $sql);

    if ($result ) {
        $allBooks = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //give me every entry
    } else {
        die("ERROR: something went wrong could not be able to get the books");
    }


 ?>
 <div class="container">
     <div class="row mb-2">
         <div class="col">
             <h1>All Books</h1>
         </div>
     </div>

     <div class="row mb-2">
         <div class="col">
             <a class="btn btn-outline-primary" href="./books/add.php">Add new Book</a>
         </div>
     </div>

     <div class="row">
        <?php if($allBooks): ?>

        <?php else: ?>
            <div class="col">
                <p>Sorry! There aren't any books in the library at the moment!</p>
            </div>
        <?php endif; ?>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="book.php" class="btn btn-sm btn-outline-info">View</a>
                            <a href="update.php" class="btn btn-sm btn-outline-secondary">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


 </div>


<?php require '../templates/footer.php' ?>