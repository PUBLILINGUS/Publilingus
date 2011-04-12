<?php

namespace Publilingus\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Translation\Translator;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\SecurityContext;

use Knplabs\MenuBundle\Menu;
use Knplabs\MenuBundle\MenuItem;

/**
 * @extra:Route("/admin")
 */
class AdminController extends Controller
{

    /**
     * @extra:Route("/", name="admin")
     * @extra:Template()
     */
    public function indexAction()
    {
        return $this->render('PublilingusAdminBundle:Admin:login.html.twig', array(
            'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
            'error'         => '',
            'menu'=>AdminController::makeMenu(),
        ));
    }

    /**
     * @extra:Route("/login", name="_admin_login")
     * @extra:Template()
     */
    public function loginAction()
    {
        if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return array(
            'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
            'menu'=>AdminController::makeMenu(),
        );
    }

    /**
     * @extra:Route("/login_check", name="_security_check")
     */
    public function securityCheckAction()
    {
        // The security layer will intercept this request
    }

    /**
     * @extra:Route("/logout", name="_admin_logout")
     */
    public function logoutAction()
    {
        // The security layer will intercept this request
    }


    /**
     * @extra:Route("/dommage", name="dommage")
     * @extra:Template()
     */
    public function dommageAction()
    {
        return $this->render('PublilingusAdminBundle:Admin:dommage.html.twig');
    }



    /**
     * @extra:Route("/dashboard", name="dashboard")
     * @extra:Template()
     */
    public function dashboardAction()
    {
        return $this->render('PublilingusAdminBundle:Admin:dashboard.html.twig', array(
            'menu'=>AdminController::makeMenu(),
        ));
    }

    /**
     * @extra:Route("/auteur", name="adminAuteurs")
     * @extra:Template()
     */
    public function auteursAction()
    {
        return $this->render('PublilingusAdminBundle:Admin:auteur.html.twig', array(
            'menu'=>AdminController::makeMenu(),
        ));
    }

    /**
     * @extra:Route("/edition", name="adminEditions")
     * @extra:Template()
     */
    public function editionsAction()
    {
        return $this->render('PublilingusAdminBundle:Admin:edition.html.twig', array(
            'menu'=>AdminController::makeMenu(),
        ));
    }

    /**
     * @extra:Route("/livre", name="adminLivres")
     * @extra:Template()
     */
    public function livresAction()
    {
        return $this->render('PublilingusAdminBundle:Admin:livre.html.twig', array(
            'menu'=>AdminController::makeMenu(),
        ));
    }

    /**
     * @extra:Route("/auteur/{id}", name="adminAuteur")
     * @extra:Template()
     */
    public function auteurAction()
    {
        return $this->render('PublilingusAdminBundle:Admin:auteur.html.twig', array(
            'menu'=>AdminController::makeMenu(),
        ));
    }

    /**
     * @extra:Route("/edition/{id}", name="adminEdition")
     * @extra:Template()
     */
    public function editionAction()
    {
        return $this->render('PublilingusAdminBundle:Admin:edition.html.twig', array(
            'menu'=>AdminController::makeMenu(),
        ));
    }

    /**
     * @extra:Route("/livre/{id}", name="adminLivre")
     * @extra:Template()
     */
    public function livreAction()
    {
        return $this->render('PublilingusAdminBundle:Admin:livre.html.twig', array(
            'menu'=>AdminController::makeMenu(),
        ));
    }


    public function makeMenu(){
        $locale = $this->get('session')->getLocale();

        $menu = new MenuItem('Home');

        $home = $this->get('translator')->trans('homepage.titre');
        $menu->addChild($home, $this->generateUrl('homepage', array('_locale' => $locale)));
        $menu[$home]->setAttribute('id', 'menu_home' );

        $accueil = "Accueil Admin";
        $menu->addChild($accueil, $this->generateUrl('dashboard'));
        $menu[$accueil]->setAttribute('class', 'menu_item');

        $auteur = "Auteur";
        $menu->addChild($auteur, $this->generateUrl('adminAuteurs'));
        $menu[$auteur]->setAttribute('class', 'menu_item');

        $edition = "Edition";
        $menu->addChild($edition, $this->generateUrl('adminEditions'));
        $menu[$edition]->setAttribute('class', 'menu_item');

        $livre = "Livre";
        $menu->addChild($livre, $this->generateUrl('adminLivres'));
        $menu[$livre]->setAttribute('class', 'menu_item');

        return $menu->render();
    }

}
