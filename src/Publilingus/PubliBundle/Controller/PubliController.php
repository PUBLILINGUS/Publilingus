<?php

namespace Publilingus\PubliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Translation\Translator;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Knplabs\MenuBundle\Menu;
use Knplabs\MenuBundle\MenuItem;

/**
 * @extra:Route("/{_locale}", requirements={"_locale"="fr|en"}, defaults={"_locale"="fr"})
 */
class PubliController extends Controller
{

    /**
     * @extra:Route("/", name="homepage")
     * @extra:Template()
     */
    public function indexAction()
    {
        return $this->render('PublilingusPubliBundle:Publi:index.html.twig', array(
            'menu'=>PubliController::makeMenu(),
            'langue' => $this->get('session')->getLocale(),
        ));
    }

    /**
     * @extra:Route("/auteur/{id}", name="auteur")
     * @extra:Template()
     */
    public function auteurAction($id)
    {
        return $this->render('PublilingusPubliBundle:Publi:page.html.twig', array(
            'menu'=>PubliController::makeMenu(),
            'langue' => $this->get('session')->getLocale(),
            'titre' => $this->get('translator')->trans('auteur.titre')." - Auteur ".$id,
            'livres' => array(
                1 => array(
                    'titre' => $this->get('translator')->trans('livre1.titre'),
                    'auteur' => $this->get('translator')->trans('livre1.auteur'),
                    'image' => $this->get('translator')->trans('livre1.image'),
                    'url' => $this->generateUrl('livre', array('id' => 1))
                ),
                2 => array(
                    'titre' => $this->get('translator')->trans('livre2.titre'),
                    'auteur' => $this->get('translator')->trans('livre2.auteur'),
                    'image' => $this->get('translator')->trans('livre2.image'),
                    'url' => $this->generateUrl('livre', array('id' => 2))
                ),
                3 => array(
                    'titre' => $this->get('translator')->trans('livre3.titre'),
                    'auteur' => $this->get('translator')->trans('livre3.auteur'),
                    'image' => $this->get('translator')->trans('livre3.image'),
                    'url' => $this->generateUrl('livre', array('id' => 3))
                )
            )
        ));
    }

    /**
     * @extra:Route("/edition/{id}", name="edition")
     * @extra:Template()
     */
    public function editionAction($id)
    {
        return $this->render('PublilingusPubliBundle:Publi:page.html.twig', array(
            'menu'=>PubliController::makeMenu(),
            'langue' => $this->get('session')->getLocale(),
            'titre' => $this->get('translator')->trans('edition.titre')." - Maison d'édition ".$id,
            'livres' => array(
                1 => array(
                    'titre' => $this->get('translator')->trans('livre1.titre'),
                    'auteur' => $this->get('translator')->trans('livre1.auteur'),
                    'image' => $this->get('translator')->trans('livre1.image'),
                    'url' => $this->generateUrl('livre', array('id' => 1))
                ),
                2 => array(
                    'titre' => $this->get('translator')->trans('livre2.titre'),
                    'auteur' => $this->get('translator')->trans('livre2.auteur'),
                    'image' => $this->get('translator')->trans('livre2.image'),
                    'url' => $this->generateUrl('livre', array('id' => 2))
                ),
                3 => array(
                    'titre' => $this->get('translator')->trans('livre3.titre'),
                    'auteur' => $this->get('translator')->trans('livre3.auteur'),
                    'image' => $this->get('translator')->trans('livre3.image'),
                    'url' => $this->generateUrl('livre', array('id' => 3))
                )
            )
        ));
    }

    /**
     * @extra:Route("/chronologique", name="chronologique")
     * @extra:Template()
     */
    public function chronoAction()
    {
        return $this->render('PublilingusPubliBundle:Publi:page.html.twig', array(
            'menu'=>PubliController::makeMenu(),
            'langue' => $this->get('session')->getLocale(),
            'titre' => $this->get('translator')->trans('chrono.titre'),
            'livres' => array(
                1 => array(
                    'titre' => $this->get('translator')->trans('livre1.titre'),
                    'auteur' => $this->get('translator')->trans('livre1.auteur'),
                    'image' => $this->get('translator')->trans('livre1.image'),
                    'url' => $this->generateUrl('livre', array('id' => 1))
                ),
                2 => array(
                    'titre' => $this->get('translator')->trans('livre2.titre'),
                    'auteur' => $this->get('translator')->trans('livre2.auteur'),
                    'image' => $this->get('translator')->trans('livre2.image'),
                    'url' => $this->generateUrl('livre', array('id' => 2))
                ),
                3 => array(
                    'titre' => $this->get('translator')->trans('livre3.titre'),
                    'auteur' => $this->get('translator')->trans('livre3.auteur'),
                    'image' => $this->get('translator')->trans('livre3.image'),
                    'url' => $this->generateUrl('livre', array('id' => 3))
                )
            )
        ));
    }

    /**
     * @extra:Route("/aleatoire", name="aleatoire")
     * @extra:Template()
     */
    public function aleatoireAction()
    {
        $id = rand(1, 3);
        return $this->render('PublilingusPubliBundle:Publi:livre.html.twig', array(
            'menu'=>PubliController::makeMenu(),
            'langue' => $this->get('session')->getLocale(),
            'id' => $id,
            'titre' => $this->get('translator')->trans('livre'.$id.'.titre'),
            'auteur' => $this->get('translator')->trans('livre'.$id.'.auteur'),
            'edition' => $this->get('translator')->trans('livre'.$id.'.edition'),
            'annee' => $this->get('translator')->trans('livre'.$id.'.annee'),
            'image' => $this->get('translator')->trans('livre'.$id.'.image'),
            'histoire' => $this->get('translator')->trans('livre'.$id.'.histoire'),
            'pense' => $this->get('translator')->trans('livre'.$id.'.pense'),
            'culte' => $this->get('translator')->trans('livre'.$id.'.culte'),
            'bonus' => $this->get('translator')->trans('livre'.$id.'.bonus'),
        ));
    }

    /**
     * @extra:Route("/livre/{id}", name="livre")
     * @extra:Template()
     */
    public function livreAction($id)
    {
        return $this->render('PublilingusPubliBundle:Publi:livre.html.twig', array(
            'menu'=>PubliController::makeMenu(),
            'langue' => $this->get('session')->getLocale(),
            'id' => $id,
            'titre' => $this->get('translator')->trans('livre'.$id.'.titre'),
            'auteur' => $this->get('translator')->trans('livre'.$id.'.auteur'),
            'edition' => $this->get('translator')->trans('livre'.$id.'.edition'),
            'annee' => $this->get('translator')->trans('livre'.$id.'.annee'),
            'image' => $this->get('translator')->trans('livre'.$id.'.image'),
            'histoire' => $this->get('translator')->trans('livre'.$id.'.histoire'),
            'pense' => $this->get('translator')->trans('livre'.$id.'.pense'),
            'culte' => $this->get('translator')->trans('livre'.$id.'.culte'),
            'bonus' => $this->get('translator')->trans('livre'.$id.'.bonus'),
        ));
    }


    public function makeMenu(){
        $locale = $this->get('session')->getLocale();

        $menu = new MenuItem('Home');

        $home = $this->get('translator')->trans('homepage.titre');
        $menu->addChild($home, $this->generateUrl('homepage', array('_locale' => $locale)));
        $menu[$home]->setAttribute('id', 'menu_home' );

        $auteur = $this->get('translator')->trans('homepage.menu.auteur');
        $menu->addChild($auteur,'#');
        $menu[$auteur]->setAttribute('class', 'menu_item');
        $menu[$auteur]->addChild($this->get('translator')->trans('homepage.menu.auteur1'), $this->generateUrl('auteur', array('_locale' => $locale, 'id' => '1')));
        $menu[$auteur]->addChild($this->get('translator')->trans('homepage.menu.auteur2'), $this->generateUrl('auteur', array('_locale' => $locale, 'id' => '2')));
        $menu[$auteur]->addChild($this->get('translator')->trans('homepage.menu.auteur3'), $this->generateUrl('auteur', array('_locale' => $locale, 'id' => '3')));
        $menu[$auteur]->addChild($this->get('translator')->trans('homepage.menu.auteur4'), $this->generateUrl('auteur', array('_locale' => $locale, 'id' => '4')));

        $edition = $this->get('translator')->trans('homepage.menu.edition');
        $menu->addChild($edition,'#');
        $menu[$edition]->setAttribute('class', 'menu_item');
        $menu[$edition]->addChild($this->get('translator')->trans('homepage.menu.edition1'), $this->generateUrl('edition', array('_locale' => $locale, 'id' => '1')));
        $menu[$edition]->addChild($this->get('translator')->trans('homepage.menu.edition2'), $this->generateUrl('edition', array('_locale' => $locale, 'id' => '2')));
        $menu[$edition]->addChild($this->get('translator')->trans('homepage.menu.edition3'), $this->generateUrl('edition', array('_locale' => $locale, 'id' => '3')));
        $menu[$edition]->addChild($this->get('translator')->trans('homepage.menu.edition4'), $this->generateUrl('edition', array('_locale' => $locale, 'id' => '4')));

        $chrono = $this->get('translator')->trans('homepage.menu.chrono');
        $menu->addChild($chrono, $this->generateUrl('chronologique', array('_locale' => $locale)));
        $menu[$chrono]->setAttribute('class', 'menu_item');

        $alea = $this->get('translator')->trans('homepage.menu.aleatoire');
        $menu->addChild($alea, $this->generateUrl('aleatoire', array('_locale' => $locale)));
        $menu[$alea]->setAttribute('class', 'menu_item');

        return $menu->render();
    }

}
