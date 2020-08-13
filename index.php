<?php include 'includes/header.php' ?>
    <section class="container mt-5">

        <?php
            $query = mysqli_query($db, "SELECT * FROM posts ORDER BY id DESC");
            
            while ($row = mysqli_fetch_assoc($query)) {
                $post_id = $row['id'];
                $post_title = $row['title'];
                $post_body = $row['body'];
                $post_author = $row['author'];
                $created_at = $row['created_at'];
        ?>

            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h3><?php echo $post_title; ?></h3>
                    <p><?php echo $created_at; ?> By <?php echo $post_author ?></p>
                    <p class="text-truncate"><?php echo $post_body; ?></p>
                    <a href="post.php?id=<?php echo $post_id ?>" class="btn btn-outline-dark">Read More</a>
                </div>
            </div>

        <?php } ?>
    </section>


<?php include 'includes/footer.php' ?>