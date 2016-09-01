<?php
/**
 * Facades.
 *
 * @author @jaswsinc
 * @copyright WP Sharks™
 */
declare (strict_types = 1);
namespace WebSharks\WpSharks\WpSiteSearch\Classes\Base;

use WebSharks\WpSharks\WpSiteSearch\Classes;
use WebSharks\WpSharks\WpSiteSearch\Interfaces;
use WebSharks\WpSharks\WpSiteSearch\Traits;
#
use WebSharks\WpSharks\WpSiteSearch\Classes\AppFacades as a;
use WebSharks\WpSharks\WpSiteSearch\Classes\SCoreFacades as s;
use WebSharks\WpSharks\WpSiteSearch\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;
#
use function assert as debug;
use function get_defined_vars as vars;

/**
 * Facades.
 *
 * @since 160901.56373
 */
abstract class Facades
{
    use Traits\Facades\GoogleCse;
}
