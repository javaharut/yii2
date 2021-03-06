<?php

use yii\apidoc\models\ClassDoc;
use yii\apidoc\models\InterfaceDoc;
use yii\apidoc\models\TraitDoc;
/**
 * @var ClassDoc[]|InterfaceDoc[]|TraitDoc[] $types
 * @var yii\web\View $this
 */

?><h1>Class Reference</h1>

<table class="summaryTable docIndex table table-bordered table-striped table-hover">
	<colgroup>
		<col class="col-package" />
		<col class="col-class" />
		<col class="col-description" />
	</colgroup>
	<tr>
		<th>Class</th>
		<th>Description</th>
	</tr>
<?php
ksort($types);
foreach($types as $i=>$class):
?>
	<tr>
		<td><?= $this->context->typeLink($class, $class->name) ?></td>
		<td><?= \yii\apidoc\helpers\Markdown::process($class->shortDescription, $class) ?></td>
	</tr>
<?php endforeach; ?>
</table>
