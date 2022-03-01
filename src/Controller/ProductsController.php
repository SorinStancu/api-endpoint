<?php

namespace App\Controller;

use App\Entity\Products;
use App\Repository\ProductsRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;

class ProductsController extends AbstractFOSRestController
{
  /**
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   * @Rest\Route("/produse", methods={"GET"})
   */
  public function index(ProductsRepository $produse)
    {
      $view = $this->view($produse->findAll());
      return $this->handleView($view);
    }

  /**
   * @Rest\Route("/produse", methods={"POST"})
   */
  public function create(Request $request)
    {
      $post = new Products();
      $post->setTitle($request->get('title'));
      $post->setKeywords($request->get('keywords'));

      $em = $this->getDoctrine()->getManager();
      $em->persist($post);
      $em->flush();

      $view = $this->view($post);
      return $this->handleView($view);
    }

  /**
   * @Rest\Route("/posts/{id}", methods={"PUT"})
   */
  public function update($id, ProductsRepository $produse, Request $request)
    {
      $post = $produse->find($id);
      $post->setTitle($request->get('title'));
      $post->setKeywords($request->get('keywords'));

      $this->getDoctrine()->getManager()->flush();
      $view = $this->view($post);
      return $this->handleView($view);
    }

  /**
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   * @Rest\Route('/posts/{id}', methods={'DELETE'})
   */
  public function delete($id, ProductsRepository $produse)
    {

      $post = $produse->find($id);
      $em = $this->getDoctrine()->getManager();
      $em->remove($post);
      $em->flush();

      return $this->json(['message' => "Post with ID $id has been deleted"]);
    }

}