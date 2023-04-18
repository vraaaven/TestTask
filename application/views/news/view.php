<?php foreach ($news as $val): ?>
    <div class="block">
        <div class="title"><h2><?php echo $val['title']; ?></h2></div>
        <div class="content"><p><?php echo $val['content']; ?></p></div>
       <!-- <div><a href="#" onclick="history.back();">Все новости »</a></div> -->
        <div><a href="http://news/">Все новости >></a></div>
    </div>
<?php endforeach; ?>