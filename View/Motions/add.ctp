<h1>Add Motion</h1>
<?php
echo $this->Form->create('Motion');
echo $this->Form->input('title');
echo $this->Form->input('text', array('rows' => '3'));
echo $this->Form->end('Save Motion');
?>