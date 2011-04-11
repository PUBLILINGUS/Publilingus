<?php

use Symfony\Component\Routing\Matcher\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Matcher\Exception\NotFoundException;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(array $context = array(), array $defaults = array())
    {
        $this->context = $context;
        $this->defaults = $defaults;
    }

    public function match($pathinfo)
    {
        $allow = array();

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        // _profiler_search
        if ($pathinfo === '/_profiler/search') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',)), array('_route' => '_profiler_search'));
        }

        // _profiler_purge
        if ($pathinfo === '/_profiler/purge') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',)), array('_route' => '_profiler_purge'));
        }

        // _profiler_import
        if ($pathinfo === '/_profiler/import') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',)), array('_route' => '_profiler_import'));
        }

        // _profiler_export
        if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\.]+?)\.txt$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
        }

        // _profiler_search_results
        if (0 === strpos($pathinfo, '/_profiler') && preg_match('#^/_profiler/(?P<token>[^/\.]+?)/search/results$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
        }

        // _profiler
        if (0 === strpos($pathinfo, '/_profiler') && preg_match('#^/_profiler/(?P<token>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
        }

        // _configurator_home
        if (rtrim($pathinfo, '/') === '/_configurator') {
            if (substr($pathinfo, -1) !== '/') {
                return array('_controller' => 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction', 'url' => $this->context['base_url'].$pathinfo.'/', 'permanent' => true, '_route' => '_configurator_home');
            }
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::checkAction',)), array('_route' => '_configurator_home'));
        }

        // _configurator_step
        if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
        }

        // _configurator_final
        if ($pathinfo === '/_configurator/final') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::finalAction',)), array('_route' => '_configurator_final'));
        }

        // _security_login
        if ($pathinfo === '/login') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Publilingus\\AdminBundle\\Controller\\AdminController::loginAction',)), array('_route' => '_security_login'));
        }

        // _security_check
        if ($pathinfo === '/login_check') {
            return array_merge($this->mergeDefaults(array(), array ()), array('_route' => '_security_check'));
        }

        // _security_logout
        if ($pathinfo === '/logout') {
            return array_merge($this->mergeDefaults(array(), array ()), array('_route' => '_security_logout'));
        }

        // homepage
        if (preg_match('#^/?(?:/(?P<_locale>fr|en))?/?$#x', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return array('_controller' => 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction', 'url' => $this->context['base_url'].$pathinfo.'/', 'permanent' => true, '_route' => 'homepage');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_locale' => 'fr',  '_controller' => 'Publilingus\\PubliBundle\\Controller\\PubliController::indexAction',)), array('_route' => 'homepage'));
        }

        // auteur
        if (preg_match('#^/(?P<_locale>fr|en)/auteur/(?P<id>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_locale' => 'fr',  '_controller' => 'Publilingus\\PubliBundle\\Controller\\PubliController::auteurAction',)), array('_route' => 'auteur'));
        }

        // edition
        if (preg_match('#^/(?P<_locale>fr|en)/edition/(?P<id>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_locale' => 'fr',  '_controller' => 'Publilingus\\PubliBundle\\Controller\\PubliController::editionAction',)), array('_route' => 'edition'));
        }

        // chronologique
        if (preg_match('#^/(?P<_locale>fr|en)/chronologique$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_locale' => 'fr',  '_controller' => 'Publilingus\\PubliBundle\\Controller\\PubliController::chronoAction',)), array('_route' => 'chronologique'));
        }

        // aleatoire
        if (preg_match('#^/(?P<_locale>fr|en)/aleatoire$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_locale' => 'fr',  '_controller' => 'Publilingus\\PubliBundle\\Controller\\PubliController::aleatoireAction',)), array('_route' => 'aleatoire'));
        }

        // livre
        if (preg_match('#^/(?P<_locale>fr|en)/livre/(?P<id>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_locale' => 'fr',  '_controller' => 'Publilingus\\PubliBundle\\Controller\\PubliController::livreAction',)), array('_route' => 'livre'));
        }

        // admin
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return array('_controller' => 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction', 'url' => $this->context['base_url'].$pathinfo.'/', 'permanent' => true, '_route' => 'admin');
            }
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Publilingus\\AdminBundle\\Controller\\AdminController::indexAction',)), array('_route' => 'admin'));
        }

        // adminAuteurs
        if ($pathinfo === '/admin/auteur') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Publilingus\\AdminBundle\\Controller\\AdminController::auteursAction',)), array('_route' => 'adminAuteurs'));
        }

        // adminEditions
        if ($pathinfo === '/admin/edition') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Publilingus\\AdminBundle\\Controller\\AdminController::editionsAction',)), array('_route' => 'adminEditions'));
        }

        // adminLivres
        if ($pathinfo === '/admin/livre') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Publilingus\\AdminBundle\\Controller\\AdminController::livresAction',)), array('_route' => 'adminLivres'));
        }

        // adminAuteur
        if (0 === strpos($pathinfo, '/admin/auteur') && preg_match('#^/admin/auteur/(?P<id>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Publilingus\\AdminBundle\\Controller\\AdminController::auteurAction',)), array('_route' => 'adminAuteur'));
        }

        // adminEdition
        if (0 === strpos($pathinfo, '/admin/edition') && preg_match('#^/admin/edition/(?P<id>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Publilingus\\AdminBundle\\Controller\\AdminController::editionAction',)), array('_route' => 'adminEdition'));
        }

        // adminLivre
        if (0 === strpos($pathinfo, '/admin/livre') && preg_match('#^/admin/livre/(?P<id>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Publilingus\\AdminBundle\\Controller\\AdminController::livreAction',)), array('_route' => 'adminLivre'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new NotFoundException();
    }
}
