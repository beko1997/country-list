<?php
/*
* This file is part of Monarobase-CountryList
*
* (c) 2013 Monarobase
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*
*
* @category    Monarobase
* @package     CountryList
* @copyright   (c) 2013 Monarobase <jonathan@monarobase.net>
* @link        http://monarobase.net
*/

namespace Monarobase\LanguageList;

use Illuminate\Support\ServiceProvider;

/**
 * CountryListServiceProvider
 *
 * @author Monarobase <jonathan@monarobase.net>
 */
class LanguageListServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('countrylist', function ($app) {
            return new LanguageList(base_path('vendor/umpirsky/country-list/data'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('countrylist');
    }

}