<?php

namespace SoftUniBlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SoftUniBlogBundle\Entity\Article;
use SoftUniBlogBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
	/**
	 * @param Request $request
	 * @Route ("article/create", name="article_create")
	 * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
	 * @return Response
	 */
	public function createArticle(Request $request)
	{
		$article=new Article();
		$form=$this->createForm(ArticleType::class,$article);
		$form->handleRequest($request);
		if ($form->isSubmitted()&&$form->isValid()){
			$article->setAuthor($this->getUser());
			$em=$this->getDoctrine()->getManager();
			$em->persist($article);
			$em->flush();

			return $this->redirectToRoute('blog_index');
		}
		return $this->render('article/create.html.twig', array('form'=> $form->createView()));
	}

	/**
	 * @param Request $request
	 * @Route ("article/{id}", name="article_view")
	 * @return Response
	 */
	public function viewArticle($id){
		$article=$this->getDoctrine()->getRepository(Article::class)->find($id);

		return $this->render('article/article.html.twig',array('article'=>$article));
	}
}