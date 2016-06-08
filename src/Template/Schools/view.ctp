<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit School'), ['action' => 'edit', $school->skola]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete School'), ['action' => 'delete', $school->skola], ['confirm' => __('Are you sure you want to delete # {0}?', $school->skola)]) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schools view large-9 medium-8 columns content">
    <h3><?= h($school->skola) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Naziv') ?></th>
            <td><?= h($school->naziv) ?></td>
        </tr>
        <tr>
            <th><?= __('Mesto') ?></th>
            <td><?= h($school->mesto) ?></td>
        </tr>
        <tr>
            <th><?= __('Skola') ?></th>
            <td><?= $this->Number->format($school->skola) ?></td>
        </tr>
    </table>
</div>
