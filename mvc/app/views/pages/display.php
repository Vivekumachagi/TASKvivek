<?php foreach ($data['posts'] as $post):?>
    <p><?= $post->id?><?= $post->name?><?= $post->comment?></p>
    <?php endforeach ?>
