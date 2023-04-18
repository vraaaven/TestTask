<div class="content_block">
    <h1 class="header">Новости</h1>
    <div class="news_list">
        <?php foreach ($news as $val): ?>
            <div class="headline">
                <span class="date"> <?php echo gmdate("d.m.y", $val['idate']); ?></span>
                    <a href="view/id=<?php echo $val['id'] ?>"><?php echo $val['title']; ?></a>
            </div>
            <div class="announce"><?php echo $val['announce']; ?></div>
        <?php endforeach; ?>
    </div>
    <h3>Страницы: </h3>
    <div class="pagination"><?php echo $pagination ?></div>
</div>
