<?php 

    include 'includes/header.php'; 

    if (isset($_POST['submit'])) {
        $title = trim(sanitize($_POST['title']));
        $author = trim(sanitize($_POST['author']));
        $body = trim(sanitize($_POST['body']));

        if (empty($title) || empty($author) || empty($body)) {
            $msg = 'All Fields Are required';
            $msgClass = 'alert-danger';
        }else{
            $query = mysqli_query($db, "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')");
            header('Location: index.php');
            exit();
        }
        
    }

?>
    
    <section class="container mt-5">

        <?php if(!empty($msg)) : ?>
            <div class="alert <?php echo $msgClass ?>">
                All Fields Are required
            </div>
        <?php endif; ?>

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="form-group">
            <label for="author">Author</label>
                <input type="text" class="form-control" name="author">
            </div>

            <div class="form-group">
                <label for="author">Body</label>
                <textarea class="form-control" name="body"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-outline-dark" name="submit" value="Add Post">
                <!-- <a href="editpost.php?edit_id=<?php echo $post_id;  ?>" class="btn btn-outline-dark float-right">Edit</a> -->
                <a href="index.php" class="btn btn-outline-dark float-right">Back</a>
            </div>


        </form>
    </section>


<?php include 'includes/footer.php' ?>