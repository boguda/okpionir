
<ul class="nav nav-pills">  
  <li role="presentation"><?= $this->Html->link(__('Lista korisnika'), ['action' => 'index']) ?></li>
</ul>
<div class="col-md-6 col-md-offset-3">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Dodaj novog koriosnika') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('role', ['options' => ['admin'=>'Admin', 'guest'=> 'Guest']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
