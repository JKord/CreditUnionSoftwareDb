<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // Creditunions
        if (rtrim($pathinfo, '/') === '/Creditunions') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Creditunions');
            }
            return array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\CreditunionsController::indexAction',  '_route' => 'Creditunions',);
        }

        // Creditunions_show
        if (0 === strpos($pathinfo, '/Creditunions') && preg_match('#^/Creditunions/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\CreditunionsController::showAction',)), array('_route' => 'Creditunions_show'));
        }

        // Creditunions_new
        if ($pathinfo === '/Creditunions/new') {
            return array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\CreditunionsController::newAction',  '_route' => 'Creditunions_new',);
        }

        // Creditunions_create
        if ($pathinfo === '/Creditunions/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_Creditunions_create;
            }
            return array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\CreditunionsController::createAction',  '_route' => 'Creditunions_create',);
        }
        not_Creditunions_create:

        // Creditunions_edit
        if (0 === strpos($pathinfo, '/Creditunions') && preg_match('#^/Creditunions/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\CreditunionsController::editAction',)), array('_route' => 'Creditunions_edit'));
        }

        // Creditunions_update
        if (0 === strpos($pathinfo, '/Creditunions') && preg_match('#^/Creditunions/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_Creditunions_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\CreditunionsController::updateAction',)), array('_route' => 'Creditunions_update'));
        }
        not_Creditunions_update:

        // Creditunions_delete
        if (0 === strpos($pathinfo, '/Creditunions') && preg_match('#^/Creditunions/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_Creditunions_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\CreditunionsController::deleteAction',)), array('_route' => 'Creditunions_delete'));
        }
        not_Creditunions_delete:

        // Customers
        if (rtrim($pathinfo, '/') === '/Customers') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Customers');
            }
            return array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\CustomersController::indexAction',  '_route' => 'Customers',);
        }

        // Customers_show
        if (0 === strpos($pathinfo, '/Customers') && preg_match('#^/Customers/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\CustomersController::showAction',)), array('_route' => 'Customers_show'));
        }

        // Customers_new
        if ($pathinfo === '/Customers/new') {
            return array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\CustomersController::newAction',  '_route' => 'Customers_new',);
        }

        // Customers_create
        if ($pathinfo === '/Customers/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_Customers_create;
            }
            return array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\CustomersController::createAction',  '_route' => 'Customers_create',);
        }
        not_Customers_create:

        // Customers_edit
        if (0 === strpos($pathinfo, '/Customers') && preg_match('#^/Customers/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\CustomersController::editAction',)), array('_route' => 'Customers_edit'));
        }

        // Customers_update
        if (0 === strpos($pathinfo, '/Customers') && preg_match('#^/Customers/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_Customers_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\CustomersController::updateAction',)), array('_route' => 'Customers_update'));
        }
        not_Customers_update:

        // Customers_delete
        if (0 === strpos($pathinfo, '/Customers') && preg_match('#^/Customers/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_Customers_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\CustomersController::deleteAction',)), array('_route' => 'Customers_delete'));
        }
        not_Customers_delete:

        // creditunion_frontend_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'creditunion_frontend_default_index'));
        }

        // Depositsandloans
        if (rtrim($pathinfo, '/') === '/Depositsandloans') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Depositsandloans');
            }
            return array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\DepositsandloansController::indexAction',  '_route' => 'Depositsandloans',);
        }

        // Depositsandloans_show
        if (0 === strpos($pathinfo, '/Depositsandloans') && preg_match('#^/Depositsandloans/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\DepositsandloansController::showAction',)), array('_route' => 'Depositsandloans_show'));
        }

        // Depositsandloans_new
        if ($pathinfo === '/Depositsandloans/new') {
            return array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\DepositsandloansController::newAction',  '_route' => 'Depositsandloans_new',);
        }

        // Depositsandloans_create
        if ($pathinfo === '/Depositsandloans/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_Depositsandloans_create;
            }
            return array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\DepositsandloansController::createAction',  '_route' => 'Depositsandloans_create',);
        }
        not_Depositsandloans_create:

        // Depositsandloans_edit
        if (0 === strpos($pathinfo, '/Depositsandloans') && preg_match('#^/Depositsandloans/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\DepositsandloansController::editAction',)), array('_route' => 'Depositsandloans_edit'));
        }

        // Depositsandloans_update
        if (0 === strpos($pathinfo, '/Depositsandloans') && preg_match('#^/Depositsandloans/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_Depositsandloans_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\DepositsandloansController::updateAction',)), array('_route' => 'Depositsandloans_update'));
        }
        not_Depositsandloans_update:

        // Depositsandloans_delete
        if (0 === strpos($pathinfo, '/Depositsandloans') && preg_match('#^/Depositsandloans/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_Depositsandloans_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\DepositsandloansController::deleteAction',)), array('_route' => 'Depositsandloans_delete'));
        }
        not_Depositsandloans_delete:

        // Price
        if (rtrim($pathinfo, '/') === '/Price') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Price');
            }
            return array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\PricelistController::indexAction',  '_route' => 'Price',);
        }

        // Price_show
        if (0 === strpos($pathinfo, '/Price') && preg_match('#^/Price/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\PricelistController::showAction',)), array('_route' => 'Price_show'));
        }

        // Price_new
        if ($pathinfo === '/Price/new') {
            return array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\PricelistController::newAction',  '_route' => 'Price_new',);
        }

        // Price_create
        if ($pathinfo === '/Price/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_Price_create;
            }
            return array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\PricelistController::createAction',  '_route' => 'Price_create',);
        }
        not_Price_create:

        // Price_edit
        if (0 === strpos($pathinfo, '/Price') && preg_match('#^/Price/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\PricelistController::editAction',)), array('_route' => 'Price_edit'));
        }

        // Price_update
        if (0 === strpos($pathinfo, '/Price') && preg_match('#^/Price/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_Price_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\PricelistController::updateAction',)), array('_route' => 'Price_update'));
        }
        not_Price_update:

        // Price_delete
        if (0 === strpos($pathinfo, '/Price') && preg_match('#^/Price/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_Price_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\PricelistController::deleteAction',)), array('_route' => 'Price_delete'));
        }
        not_Price_delete:

        // creditunion_frontend_welcome_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'creditunion_frontend_welcome_index');
            }
            return array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\WelcomeController::indexAction',  '_route' => 'creditunion_frontend_welcome_index',);
        }

        // worker
        if (rtrim($pathinfo, '/') === '/Worker') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'worker');
            }
            return array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\WorkerController::indexAction',  '_route' => 'worker',);
        }

        // worker_show
        if (0 === strpos($pathinfo, '/Worker') && preg_match('#^/Worker/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\WorkerController::showAction',)), array('_route' => 'worker_show'));
        }

        // worker_new
        if ($pathinfo === '/Worker/new') {
            return array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\WorkerController::newAction',  '_route' => 'worker_new',);
        }

        // worker_create
        if ($pathinfo === '/Worker/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_worker_create;
            }
            return array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\WorkerController::createAction',  '_route' => 'worker_create',);
        }
        not_worker_create:

        // worker_edit
        if (0 === strpos($pathinfo, '/Worker') && preg_match('#^/Worker/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\WorkerController::editAction',)), array('_route' => 'worker_edit'));
        }

        // worker_update
        if (0 === strpos($pathinfo, '/Worker') && preg_match('#^/Worker/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_worker_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\WorkerController::updateAction',)), array('_route' => 'worker_update'));
        }
        not_worker_update:

        // worker_delete
        if (0 === strpos($pathinfo, '/Worker') && preg_match('#^/Worker/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_worker_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CreditUnion\\FrontendBundle\\Controller\\WorkerController::deleteAction',)), array('_route' => 'worker_delete'));
        }
        not_worker_delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
