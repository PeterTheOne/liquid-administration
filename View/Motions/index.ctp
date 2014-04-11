<h2>Motions</h2>
<?php echo $this->Html->link(
    'Propose Motion',
    array('controller' => 'motions', 'action' => 'propose')
); ?>
<table>
    <tr>
        <th>Title</th>
        <th>Votingsession</th>

    <!-- Here is where we loop through our $motions array, printing out post info -->

    <?php foreach ($motions as $motion): ?>
        <tr>
            <td>
                <?php echo $this->Html->link($motion['Motion']['title'],
                    array('controller' => 'motions', 'action' => 'view', $motion['Motion']['id'])); ?>
            </td>
            <td><?php echo $motion['Votingsession']['name']; ?></td>
        </tr>
    <?php endforeach; ?>
    <?php unset($motion); ?>
</table>