<?php 

    include 'includes/header.php'; 

    if (isset($_GET['edit_id'])) {
        
        $post_id = $_GET['edit_id'];

        
        $query = mysqli_query($db, "SELECT * FROM posts WHERE id = {$post_id}");
        $post = mysqli_fetch_assoc($query);
    }

    if (isset($_POST['update'])) {

        $title = $_POST['title'];
        $author = $_POST['author'];
        $body = $_POST['body'];

        $query = mysqli_query($db, "UPDATE posts SET title='$title', author='$author', body='$body'  WHERE id = {$post_id}");
        
        header("Location: index.php");
        exit();

        
    }

?>
    
    <section class="container mt-5">

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="<?php echo $post['title']; ?>">
            </div>

            <div class="form-group">
            <label for="author">Author</label>
                <input type="text" class="form-control" name="author" value="<?php echo $post['author']; ?>">
            </div>

            <div class="form-group">
                <label for="author">Body</label>
                <textarea class="form-control" name="body">
                    <?php echo $post['title']; ?>
                </textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-outline-dark" name="update" value="Update Post">
                <a href="index.php" class="btn btn-outline-dark float-right">Back</a>
            </div>


        </form>
    </section>


<?php include 'includes/footer.php' ?>