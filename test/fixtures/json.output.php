<?php $items = json_decode('[
  {
    "name": "马东敏",
    "title": "百度->CEO李彦宏夫人"
  }, {
    "name": "马云",
    "title": "阿里巴巴集团->创始人"
  }, {
    "name": "马化腾",
    "title": "腾讯公司->创始人兼CEO"
  }
]'); ?>

<div>
  <ol>
<?php foreach ($items as $item) { ?>
    <li>
      <span><?php echo htmlspecialchars($item->name) ?></span><em>:</em><span><?php echo htmlspecialchars($item->title) ?></span><button>show</button>
    </li>
<?php } ?>
  <ol>
</div>