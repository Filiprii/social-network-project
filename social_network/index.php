<?php include "inc/header.php" ?>

<?php
if(isset($_SESSION['email'])) : ?>
    <?php create_post(); ?>
    <br>

    <form method="POST">
        <h3>Create New Post</h3>
        <textarea name="post_content" cols="60" rows="10" placeholder="Post Content..."></textarea>
        <input type="submit" value="Post" name="submit">
    </form>

    <div>
        <?php display_message(); ?>
    </div>

    <hr>

    <div class="posts">
        <?php fetch_all_posts(); ?>
    </div>



<?php else : ?>

    <div class="homepage">

        <h1>Welcome to My Social Network</h1>
        <p>This is my social network where you can easily and safely share your ideas, interests and moments with people. Create a profile, explore new communities, participate in discussions and be part of something bigger.</p>

        <h2>Click <a href="login.php">here</a> to login!</h2>

        <img src="css/img/social.jpg" alt="">

    </div>




<?php endif; ?>

<?php include "inc/footer.php" ?>