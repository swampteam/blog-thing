<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

for ($count = 0; $count < count($result); $count++) {
    if(is_array($result[$count]) == true){


?>
        <p><?php echo $result[$count]['username']?></p>
        <img src=" <?php echo $result[$count]['image']?>" alt="">
        <h2><?php echo $result[$count]['title']?></h2>
        <p><?php echo $result[$count]['message']?></p>
        

<?php
        }
    }
}


