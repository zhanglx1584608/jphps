<?php function renderItem($item) {
  if (isset($item)) { ?>
  <li>
    <a href="<?php echo $item['url'] ?>"><?php echo htmlspecialchars($item['title']) ?></a>
  </li>
<?php   }
} ?>

<ul>
<?php renderItem(array('url' => 'http://google.com/', 'title' => 'Google'));
renderItem(array('url' => 'http://www.baidu.com/', 'title' => '百度')); ?>
</ul>