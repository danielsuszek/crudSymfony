<?php

namespace Dev\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Dev\TaskBundle\Entity\Comment;
use Symfony\Component\HttpFoundation\Request;

class CommentController extends Controller
{
    public function newAction(Request $request)
    {
        $comment = new Comment();
        
        $form = $this->createFormBuilder($comment)
                        ->add('commentContent', 'text')
                        ->add('commentDate', 'date')
                        ->add('save', 'submit', array('label' => 'Dodaj komentarz'))
                        ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            return $this->render('DevTaskBundle:Comment:new.html.twig', array(
                'comment' => $comment,
                
                'form' => $form->createView(),
            ));
        }
        
        return $this->render('DevTaskBundle:Comment:new.html.twig', array(
            'form' => $form->createView(),
        ));
        
    }
    
    public function commentSuccesAction()
    {
        
    }
}
