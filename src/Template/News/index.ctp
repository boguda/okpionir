

<div class="container-fluid"><!--container-->
 <hr class="divider>">
 <p><?= $this->Paginator->counter() ?></p>

     
    <div class="row">
         

        <div class="col-md-8 col-sm-6 col-md-offset-1">
        <h2>Obaveštenja kluba...</h2>
            <?php foreach ($news as $news): ?>
                <div class="well">
                 
                   <h3><?= h($news->title) ?></h3>

                         <?= $this->Html->image($news->imgpath,['alt'=>'Logo','class'=>'thumbnail img-responsive pull-right'])?>
                    <p class="lead"><?= $this->Text->autoParagraph(h($news->body)) ?></p>
                     
                    <h5><?= h($news->created) ?></h5> 
                                    
                 </div>
                 
                <hr class="divider>">
            <?php endforeach; ?>
        
        </div>

        <div class="col-md-3 col-sm-3">

         <div class="fb-page " data-href="https://www.facebook.com/O%D0%A0%D0%9A-%D0%9F%D0%B8%D0%BE%D0%BD%D0%B8%D1%80-1562647044050137/" data-height="auto"  data-width="400" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">       
             </div>
            
        </div>

    </div><!-- /. row -->

</div> <!-- /.container-fluid -->      
         
     
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div><!-- end of container-->
