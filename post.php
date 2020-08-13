<?php include 'includes/header.php' ?>
    <section class="container mt-5">
        <?php 
            if (isset($_GET['id'])) {
                $post_id = $_GET['id'];

                $query = mysqli_query($db, "SELECT * FROM posts WHERE id = {$post_id}");
                $post = mysqli_fetch_assoc($query);
            }

            if (isset($_GET['delete'])) {
                $delete_id = $_GET['delete'];

                mysqli_query($db, "DELETE FROM posts WHERE id = {$delete_id}");
                header("Location: index.php");
            }

        ?>

        <h2><?php echo $post['title']; ?></h2>
        <p>created on <?php echo $post['created_at']; ?> By <?php echo $post['author']; ?></p>
        <p><?php echo $post['body']; ?></p>
        
        <a href="edit.php?edit_id=<?php echo $post_id; ?>" class="btn btn-outline-dark">Edit</a>
        <a href="post.php?delete=<?php echo $post_id; ?>" class="btn btn-outline-dark">Delete</a>
        <a href="index.php" class="btn btn-outline-dark float-right">Back</a>



<?php include 'includes/footer.php' ?>