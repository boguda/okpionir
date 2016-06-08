<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Result'), ['action' => 'edit', $result->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Result'), ['action' => 'delete', $result->id], ['confirm' => __('Are you sure you want to delete # {0}?', $result->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Results'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Result'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="results view large-9 medium-8 columns content">
    <h3><?= h($result->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Ekipa') ?></th>
            <td><?= h($result->ekipa) ?></td>
        </tr>
        <tr>
            <th><?= __('Domacin') ?></th>
            <td><?= h($result->domacin) ?></td>
        </tr>
        <tr>
            <th><?= __('Rezultat') ?></th>
            <td><?= h($result->rezultat) ?></td>
        </tr>
        <tr>
            <th><?= __('Gost') ?></th>
            <td><?= h($result->gost) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($result->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Pobeda') ?></th>
            <td><?= $this->Number->format($result->pobeda) ?></td>
        </tr>
    </table>
</div>
