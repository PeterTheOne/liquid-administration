<h2>Motion: <?php echo h($motion['Motion']['title']); ?></h2>

<?php
echo $this->Html->link(
    'Edit',
    array('action' => 'edit', $motion['Motion']['id'])
);
?>
<?php
echo $this->Form->postLink(
    'Delete',
    array('action' => 'delete', $motion['Motion']['id']),
    array('confirm' => 'Are you sure?')
);
?>

<p><small>Created: <?php echo $motion['Motion']['created']; ?></small></p>

<p><?php echo h($motion['Motion']['text']); ?></p>