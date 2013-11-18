<?php if (isset($images) && is_array($images)){ ?>
<ul>
<?php
foreach ($images as $imageKey => $image) {
    $curImage = isset($image['imageSmall']) ? $image['imageSmall'] : '';
    $curImageBig = isset($image['imageBig']) ? $image['imageBig'] : '';
    $curTitle = isset($image['title']) ? $image['title'] : '';
?>
    <li>
        <a href="<?php echo $this->esc(\Ip\Config::baseUrl($curImageBig)) ?>" title="<?php echo $this->esc($curTitle); ?>">
            <img src="<?php echo $this->esc(\Ip\Config::baseUrl($curImage)) ?>" alt="<?php echo $this->esc($curTitle); ?>" />
        </a>
    </li>
<?php } ?>
</ul>
<?php } ?>
