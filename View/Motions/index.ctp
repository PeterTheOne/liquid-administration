<h1>Motions</h1>
<?php echo $this->Html->link(
    'Add Motion',
    array('controller' => 'motions', 'action' => 'add')
); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Created</th>
        <th>Title</th>
        <th>Text</th>
        <th>Actions</th>

    <!-- Here is where we loop through our $motions array, printing out post info -->

    <?php foreach ($motions as $motion): ?>
        <tr>
            <td><?php echo $motion['Motion']['id']; ?></td>
            <td><?php echo $motion['Motion']['created']; ?></td>
            <td>
                <?php echo $this->Html->link($motion['Motion']['title'],
                    array('controller' => 'motions', 'action' => 'view', $motion['Motion']['id'])); ?>
            </td>
            <td><?php echo $motion['Motion']['text']; ?></td>
            <td>
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
            </td>
        </tr>
    <?php endforeach; ?>
    <?php unset($motion); ?>
</table>