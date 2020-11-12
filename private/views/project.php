<?php $this->layout("layout") ?>

<?php foreach($project as $row) {
    ?> <?php $this->insert("_navbar") ?> <?php
    echo $row['titel'];
    ?> <br> <?php
    echo $row['taal'];
    foreach($images as $image) {
        ?> <img src="<?php echo site_url('/img/' . $image['image']) ?>" alt=""> <?php
    }

    ?> <h1><?php echo $row['titel'] ?></h1> <?php

    foreach($methods as $method) {
        $methodes[] = $method['method'];
        $result = implode(', ', $methodes);
    }

    echo $result;
} ?>