<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List News'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="news form large-9 medium-8 columns content">
    <?= $this->Form->create($news) ?>
    <fieldset>
        <legend><?= __('Add News') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('body');
            echo $this->Form->input('imgpath');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
