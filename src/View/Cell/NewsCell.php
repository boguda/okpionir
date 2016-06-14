<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * News cell
 */
class NewsCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $this->loadModel('News');
        $top_news = $this->News->find()
        ->select('title')
        ->order(['created' => 'DESC'])
        ->limit(3)
        ->toArray();

        $this->set('top_news' => $top_news);
    
    }
}
