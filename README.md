jphps(<%>)
-----

[![Build Status](https://img.shields.io/travis/zswang/jphps/master.svg)](https://travis-ci.org/zswang/jphps)
[![NPM version](https://img.shields.io/npm/v/jphps.svg)](http://badge.fury.io/js/jphps)

## 处理前

```html
function renderItem($item) {
  if (isset($item)) {
<<<<<<< HEAD
	<li>
	  <a href="!#{$item['url']}">#{$item['title']}</a>
	</li>
=======
  <li>
    <a href="!#{$item['url']}">#{$item['title']}</a>
  </li>
>>>>>>> origin/master
  }
}

<ul>
renderItem(array('url' => 'http://google.com/', 'title' => 'Google'));
renderItem(array('url' => 'http://www.baidu.com/', 'title' => '百度'));
</ul>
```

## 处理后

```php
<?php function renderItem($item) { ?>
<?php   if (isset($item)) { ?>
<<<<<<< HEAD
	<li>
	  <a href="<?php echo $item['url'] ?>"><?php echo htmlentities($item['title']) ?></a>
	</li>
=======
  <li>
    <a href="<?php echo $item['url'] ?>"><?php echo htmlentities($item['title']) ?></a>
  </li>
>>>>>>> origin/master
<?php   } ?>
<?php } ?>

<ul>
<?php renderItem(array('url' => 'http://google.com/', 'title' => 'Google')); ?>
<?php renderItem(array('url' => 'http://www.baidu.com/', 'title' => '百度')); ?>
</ul>
```

## 运行后

```html

<ul>
  <li>
    <a href="http://google.com/">Google</a>
  </li>
  <li>
    <a href="http://www.baidu.com/">百度</a>
  </li>
</ul>
```
