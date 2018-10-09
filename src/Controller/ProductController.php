<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/products")
 */
class ProductController extends AbstractController {

    /**
     * @Route("/", name="products_index", methods={"GET"})
     * @Template("base.html.twig")
     * @return Response
     */
    public function list() {
        return [''];
    }

    /**
     * @Route("/{id}", name="product_product", methods={"GET"}, requirements={"id"="\d+"})
     * @return Response
     */
    public function show($id) {
        return new Response(
            '<html><body>Product number: ' . $id . '</body></html>'
        );
    }

    /**
     * @Route("", methods={"POST"})
     */
    public function create() {
        return new JsonResponse([
            'test' => 123,

        ]);
    }

}
