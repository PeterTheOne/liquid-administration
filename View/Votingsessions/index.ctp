<h2>Votingsessions</h2>
<?php echo $this->Html->link(
    'Add Votingsession',
    array('controller' => 'votingsessions', 'action' => 'add')
); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Created</th>
        <th>Name</th>
        <th>Start</th>
        <th>End</th>
        <th>Location</th>
        <th>Actions</th>

    <!-- Here is where we loop through our $votingsessions array, printing out post info -->

    <?php foreach ($votingsessions as $votingsession): ?>
        <tr>
            <td><?php echo $votingsession['Votingsession']['id']; ?></td>
            <td><?php echo $votingsession['Votingsession']['created']; ?></td>
            <td>
                <?php echo $this->Html->link($votingsession['Votingsession']['name'],
                    array('controller' => 'votingsessions', 'action' => 'view', $votingsession['Votingsession']['id'])); ?>
            </td>
        <td><?php echo $votingsession['Votingsession']['start']; ?></td>
        <td><?php echo $votingsession['Votingsession']['end']; ?></td>
        <td><?php echo $votingsession['Votingsession']['location']; ?></td>
            <td>
                <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $votingsession['Votingsession']['id'])
                );
                ?>
                <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $votingsession['Votingsession']['id']),
                    array('confirm' => 'Are you sure?')
                );
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php unset($votingsession); ?>
</table>