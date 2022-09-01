<?php foreach ($data['posts'] as $post):?>
    <p><?= $post->name?><?= $post->about?><?= $post->tweet?></p>
    <?php endforeach ?>
