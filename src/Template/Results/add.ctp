<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Results'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="results form large-9 medium-8 columns content">
    <?= $this->Form->create($result) ?>
    <fieldset>
        <legend><?= __('Add Result') ?></legend>
        <?php
            echo $this->Form->input('ekipa');
            echo $this->Form->input('domacin');
            echo $this->Form->input('rezultat');
            echo $this->Form->input('gost');
            echo $this->Form->input('pobeda');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
