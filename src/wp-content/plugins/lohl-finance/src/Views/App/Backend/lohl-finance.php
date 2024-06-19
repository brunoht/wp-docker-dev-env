<div class="wrap">
    <h1 class="wp-heading-inline"><?=$this->e($title)?></h1>
    <p><?=$this->e($description)?></p>
    <form method="post" action="post.php">

	    <?= settings_fields('lohl_settings')  ?>
        <?= do_settings_sections($this->e($slug)) ?>
    </form>
</div>