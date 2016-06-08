<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $school->skola],
                ['confirm' => __('Are you sure you want to delete # {0}?', $school->skola)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="schools form large-9 medium-8 columns content">
    <?= $this->Form->create($school) ?>
    <fieldset>
        <legend><?= __('Edit School') ?></legend>
        <?php
            echo $this->Form->input('naziv');
            echo $this->Form->input('mesto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
