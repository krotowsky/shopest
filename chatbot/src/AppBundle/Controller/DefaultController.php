<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;

class DefaultController extends Controller
{
    /**
     * @Route("/product/{id}", name="homepage")
     */
    public function indexAction($id,Request $request)
    {
        $product = $this->getDoctrine()->getManager()
            ->getRepository(Product::class)
            ->findBy(array(), array('id' => 'DESC'),12);


//        $product_atr = json_decode($json = $product->additionalData);

        return $this->render('default/nav_bar.html.twig',array(
//            'product_json' => $product_atr,
            'products' => $product,
        ));
    }
}
