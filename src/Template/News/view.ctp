<div class="container-fluid" >
    <div class="row">
        <div class="col-md-2">     
            <?= $this->Html->link(__('Sva obaveštenja...'), ['action' => 'index']) ?>  
        </div>

        <div class="col-md-8 well">
            <h3><?= h($news->title) ?></h3>
      
            <?= $this->Html->image($news->imgpath, ['alt'=>'Obaveštenje!!!', 'class'=>'thumbnail pull-right'])?>
             
            <?= h($news->created) ?>
             
             <br>
    
             
            <?= $this->Text->autoParagraph(h($news->body)); ?>
        </div>
    </div>
</div>