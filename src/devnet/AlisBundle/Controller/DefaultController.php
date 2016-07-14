<?php

namespace devnet\AlisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class DefaultController extends Controller
{
    
      public function menuAction(Request $request) {

        $session = $request->getSession();
        
        $admin = $session->get('admin');
        //var_dump($admin);
        $user = $this->getUser();
        
        if (null != $user){
            return $this->render('devnetAlisBundle:Default:menu-user.html.twig'); // Menu User connecté
        }
        elseif (null != $admin){
            return $this->render('devnetAlisBundle:Default:menu-admin.html.twig'); // Menu de l'Administrateur
        }
        else{
            return $this->render('devnetAlisBundle:Default:menu.html.twig'); // Menu pour internaute normal (User non connecté)
        }
        
    }
    
    
    public function indexAction()
    {
        return $this->render('devnetAlisBundle:Default:index.html.twig');
    }
    public function contactAction()
    {
        return $this->render('devnetAlisBundle:Default:contact.html.twig');
    }
    public function connexionAction()
    {
        return $this->render('devnetAlisBundle:Default:connexion.html.twig');
    }
    public function inscriptionAction()
    {
        return $this->render('devnetAlisBundle:Default:inscription.html.twig');
    }
    public function portfolioAction()
    {
        return $this->render('devnetAlisBundle:Default:portfolio.html.twig');
    }
    public function produitsAction()
    {
        return $this->render('devnetAlisBundle:Default:produits.html.twig');
    }
    public function produitAction()
    {
        return $this->render('devnetAlisBundle:Default:produit.html.twig');
    }
    public function serviceAction()
    {
        return $this->render('devnetAlisBundle:Default:service.html.twig');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
