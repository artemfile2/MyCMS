<?php

namespace Cms\Controller;

class ProductController extends CmsController
{
    public function products($id){
        echo 'it my products ' . $id;
    }
}