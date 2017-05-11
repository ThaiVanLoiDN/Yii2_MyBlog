<?php

use frontend\widgets\Category;
use yii\helpers\Html;

?>
<aside id="categories-3" class="widget widget_categories">
	<h2 class="widget-title">Categories</h2>
	<ul>
		<?php foreach ($listCategory as $key => $category): ?>
			
		<li class="cat-item cat-item-<?= $category->id; ?>"><a href="/category/show?id=<?= $category->id; ?>"><?= $category->name; ?></a></li>
		<?php endforeach ?>
	</ul>
</aside>