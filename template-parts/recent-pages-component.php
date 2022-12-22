<?php

$pageArgs = array(
    'sort_column' => 'post_date',
	'post_type' => 'page',
	'post_status' => 'publish'
);

$pages = get_pages($pageArgs);

$pages = array_splice($pages, 0, 6);

?>

<div class="recent-pages">
    <?php foreach ($pages as $page): ?>
        <div class="recent-pages__page">
            <a href="<?php echo $page->guid; ?>" target="_blank">
                <?php echo $page->post_title; ?>
            </a>
        </div>
    <?php endforeach ?>
</div>
