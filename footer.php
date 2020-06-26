<footer class="bg-primary text-white p-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php dynamic_sidebar('footer'); ?>
            </div>
            <div class="col-md-6">
                <small>
                    &copy; <?php the_author() ?>
                    <?php echo date('Y'); ?>
                </small>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>