<?php
// modules/your-module/src/Controller/DemoController.php

namespace IdeModule\Controller;

use Symfony\Component\HttpFoundation\Response;


use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;

class IdeController extends FrameworkBundleAdminController
{
    
    public function demoAction()
    {
        return new Response('Hello test') ;
    }
}