<h2>Edit Votingsession</h2>
<?php
echo $this->Form->create('Votingsession');
echo $this->Form->input('name');
echo $this->Form->input('text', array('rows' => '3'));
echo $this->Form->input('start');
echo $this->Form->input('end');
echo $this->Form->input('location');
echo $this->Form->end('Save Votingsession');
?>