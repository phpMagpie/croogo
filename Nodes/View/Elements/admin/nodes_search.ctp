<?php

$url = isset($url) ? $url : array('action' => 'index');

?>
<div class="clearfix filter">
<?php
	echo $this->Form->create('Node', array(
		'class' => 'form-inline',
		'url' => $url,
		'inputDefaults' => array(
			'label' => false,
		),
	));

	echo $this->Form->input('chooser', array(
		'type' => 'hidden',
		'value' => isset($this->request->query['chooser']),
	));

	echo $this->Form->input('filter', array(
		'title' => __d('croogo', 'Search'),
		'placeholder' => __d('croogo', 'Search...'),
		'tooltip' => false,
	));

	if (!isset($this->request->query['chooser'])):

		echo $this->Form->input('type', array(
			'options' => $nodeTypes,
			'empty' => __d('croogo', 'Type'),
		));

		echo $this->Form->input('status', array(
			'options' => array(
				'1' => __d('croogo', 'Published'),
				'0' => __d('croogo', 'Unpublished'),
			),
			'empty' => __d('croogo', 'Status'),
		));

		echo $this->Form->input('promote', array(
			'options' => array(
				'1' => __d('croogo', 'Yes'),
				'0' => __d('croogo', 'No'),
			),
			'empty' => __d('croogo', 'Promoted'),
		));

	endif;

	echo $this->Form->submit(__d('croogo', 'Filter'), array(
		'button' => 'default',
		'div' => false,
	));
	echo $this->Form->end();
?>
</div>
