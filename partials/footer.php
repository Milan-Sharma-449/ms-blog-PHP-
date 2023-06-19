<footer>
    <div class="footer__socials">
        <a href="https://github.com/Milan-Sharma-449" target="_blank"><i class="uil uil-github"></i></a>
        <a href="https://www.facebook.com/milan.sharma.980315/" target="_blank"><i class="uil uil-facebook-f"></i></a>
        <a href="https://www.instagram.com/milansharma_449/" target="_blank"><i class="uil uil-instagram-alt"></i></a>
        <a href="https://www.linkedin.com/in/milan-sharma-3b9985166/" target="_blank"><i class="uil uil-linkedin"></i></a>
        <a href="https://twitter.com/milansharma449" target="_blank"><i class="uil uil-twitter"></i></a>
        <a href="https://stackoverflow.com/users/20611664/milan-sharma" target="_blank"><i class="uil uil-file"></i></a>
    </div>
    <div class="container footer__container">
        <article>
            <h4>Categories</h4>
            <ul>
                <li>
                <?php
        $all_categories_query = "SELECT * FROM categories";
        $all_categories = mysqli_query($connection, $all_categories_query);
        ?>
        <?php while ($category = mysqli_fetch_assoc($all_categories)) : ?>
            <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $category['id'] ?>" class="footer__container" ><?= $category['title'] ?></a>
        <?php endwhile ?>
                </li>
            </ul>
        </article>
        <article>
            <h4>Support</h4>
            <ul>
                <li><a href="https://milansharma.me/contact/">Online Support</a></li>
                <li><a href="https://milansharma.me/contact/">Call Numbers</a></li>
                <li><a href="https://milansharma.me/contact/">Emails</a></li>
                <li><a href="https://milansharma.me/contact/">Social Support</a></li>
                <li><a href="https://milansharma.me/contact/">Location</a></li>
            </ul>
        </article>
        <article>
            <h4>Permalinks</h4>
            <ul>
                <li><a href="<?= ROOT_URL ?>index.php">Home</a></li>
                <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>
            </ul>
        </article>
    </div>
    <div class="footer__copyright">
        <small>Copyright &copy; 2023 <a href="https://milansharma.me">Milan Sharma</a></small>
    </div>
</footer>


<script src="<?= ROOT_URL ?>js/main.js"></script>
</body>

</html>