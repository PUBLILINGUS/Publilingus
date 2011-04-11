<?php

/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       '_security_login' => true,
       '_security_check' => true,
       '_security_logout' => true,
       'homepage' => true,
       'auteur' => true,
       'edition' => true,
       'chronologique' => true,
       'aleatoire' => true,
       'livre' => true,
       'admin' => true,
       'adminAuteurs' => true,
       'adminEditions' => true,
       'adminLivres' => true,
       'adminAuteur' => true,
       'adminEdition' => true,
       'adminLivre' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(array $context = array(), array $defaults = array())
    {
        $this->context = $context;
        $this->defaults = $defaults;
    }

    public function generate($name, array $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new \InvalidArgumentException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction';

        return array(array (  'token' => '{token}',), $defaults, array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{token}',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_wdt',    3 => NULL,  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'search',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'purge',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'import',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction';

        return array(array (  'token' => '{token}',), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '.',    2 => 'txt',    3 => NULL,  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '{token}',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'export',    3 => NULL,  ),  3 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction';

        return array(array (  'token' => '{token}',), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'results',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'search',    3 => NULL,  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '{token}',    3 => 'token',  ),  3 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    private function get_profilerRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction';

        return array(array (  'token' => '{token}',), $defaults, array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{token}',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::checkAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => '',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_configurator',    3 => NULL,  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::stepAction';

        return array(array (  'index' => '{index}',), $defaults, array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{index}',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'step',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => '_configurator',    3 => NULL,  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::finalAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'final',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_configurator',    3 => NULL,  ),));
    }

    private function get_security_loginRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Publilingus\\AdminBundle\\Controller\\AdminController::loginAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'login',    3 => NULL,  ),));
    }

    private function get_security_checkRouteInfo()
    {
        $defaults = $this->defaults;

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'login_check',    3 => NULL,  ),));
    }

    private function get_security_logoutRouteInfo()
    {
        $defaults = $this->defaults;

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'logout',    3 => NULL,  ),));
    }

    private function gethomepageRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_locale'] = 'fr';
        $defaults['_controller'] = 'Publilingus\\PubliBundle\\Controller\\PubliController::indexAction';

        return array(array (  '_locale' => '{_locale}',), $defaults, array (  '_locale' => 'fr|en',), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => '',    3 => NULL,  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '{_locale}',    3 => '_locale',  ),));
    }

    private function getauteurRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_locale'] = 'fr';
        $defaults['_controller'] = 'Publilingus\\PubliBundle\\Controller\\PubliController::auteurAction';

        return array(array (  '_locale' => '{_locale}',  'id' => '{id}',), $defaults, array (  '_locale' => 'fr|en',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{id}',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'auteur',    3 => NULL,  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '{_locale}',    3 => '_locale',  ),));
    }

    private function geteditionRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_locale'] = 'fr';
        $defaults['_controller'] = 'Publilingus\\PubliBundle\\Controller\\PubliController::editionAction';

        return array(array (  '_locale' => '{_locale}',  'id' => '{id}',), $defaults, array (  '_locale' => 'fr|en',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{id}',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'edition',    3 => NULL,  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '{_locale}',    3 => '_locale',  ),));
    }

    private function getchronologiqueRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_locale'] = 'fr';
        $defaults['_controller'] = 'Publilingus\\PubliBundle\\Controller\\PubliController::chronoAction';

        return array(array (  '_locale' => '{_locale}',), $defaults, array (  '_locale' => 'fr|en',), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'chronologique',    3 => NULL,  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '{_locale}',    3 => '_locale',  ),));
    }

    private function getaleatoireRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_locale'] = 'fr';
        $defaults['_controller'] = 'Publilingus\\PubliBundle\\Controller\\PubliController::aleatoireAction';

        return array(array (  '_locale' => '{_locale}',), $defaults, array (  '_locale' => 'fr|en',), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'aleatoire',    3 => NULL,  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '{_locale}',    3 => '_locale',  ),));
    }

    private function getlivreRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_locale'] = 'fr';
        $defaults['_controller'] = 'Publilingus\\PubliBundle\\Controller\\PubliController::livreAction';

        return array(array (  '_locale' => '{_locale}',  'id' => '{id}',), $defaults, array (  '_locale' => 'fr|en',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{id}',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'livre',    3 => NULL,  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '{_locale}',    3 => '_locale',  ),));
    }

    private function getadminRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Publilingus\\AdminBundle\\Controller\\AdminController::indexAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => '',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'admin',    3 => NULL,  ),));
    }

    private function getadminAuteursRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Publilingus\\AdminBundle\\Controller\\AdminController::auteursAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'auteur',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'admin',    3 => NULL,  ),));
    }

    private function getadminEditionsRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Publilingus\\AdminBundle\\Controller\\AdminController::editionsAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'edition',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'admin',    3 => NULL,  ),));
    }

    private function getadminLivresRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Publilingus\\AdminBundle\\Controller\\AdminController::livresAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'livre',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'admin',    3 => NULL,  ),));
    }

    private function getadminAuteurRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Publilingus\\AdminBundle\\Controller\\AdminController::auteurAction';

        return array(array (  'id' => '{id}',), $defaults, array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{id}',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'auteur',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'admin',    3 => NULL,  ),));
    }

    private function getadminEditionRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Publilingus\\AdminBundle\\Controller\\AdminController::editionAction';

        return array(array (  'id' => '{id}',), $defaults, array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{id}',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'edition',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'admin',    3 => NULL,  ),));
    }

    private function getadminLivreRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Publilingus\\AdminBundle\\Controller\\AdminController::livreAction';

        return array(array (  'id' => '{id}',), $defaults, array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{id}',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'livre',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'admin',    3 => NULL,  ),));
    }
}
