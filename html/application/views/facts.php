<h3>Facts</h3>
<ul>
    <?php
    foreach ($facts as $fact) {
        echo '<li><a href="/facts/view/'.$fact.'/">'.$fact.'</a></li>';
    }
    ?>
</ul>