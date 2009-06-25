<div class="list_model">

    <ul class="nav">
        <li><a href="<?=$url_base?>">&laquo; back to models</a></li>
        <?php if (!empty($pagination)): ?>
            <li class="pagination">
                <?=$pagination->render('digg')?>
            </li>
        <?php endif ?>
    </ul>

    <?= View::factory("{$view_base}/list_model/list")->render() ?>

    <?php if (!empty($pagination)): ?>
        <?=$pagination->render('digg')?>
    <?php endif ?>

</div>
