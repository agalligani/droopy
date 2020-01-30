<?php

namespace Drupal\reactpage\Controller;

class ArticleController {
   
    public function page() {

        $items = array(
            array('name' => 'Article one'),
            array('name' => 'Article two'),
            array('name' => 'Article three'),
            array('name' => 'Article four'),
            array('name' => 'Article five'),
            array('name' => 'Article six'),
        );
        
        return array(
            '#theme' => 'article_list',
            '#items' => $items,
            '#title' => 'Our Article list'
        );
    }
}
