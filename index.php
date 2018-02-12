<?php
/**
 * Filename     = index.php
 * Location     = /core/MVC.php
 * Date create  = 14 January 2018 4:38 PM
 * ------------------------------------------------------------------------------
 *
 * CellBIS.php
 *
 * Simple PHP Web Framework - Influenced by Mojolicious Perl
 * Tool which used in this Framework based on Mojolicious Perl
 *
 * This packages is released under the Artistic License 2.0
 *
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * THE PACKAGE IS PROVIDED BY THE COPYRIGHT HOLDER AND CONTRIBUTORS "AS IS'
 * AND WITHOUT ANY EXPRESS OR IMPLIED WARRANTIES. THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT
 * ARE DISCLAIMED TO THE EXTENT PERMITTED BY YOUR LOCAL LAW. UNLESS REQUIRED
 * BY LAW, NO COPYRIGHT HOLDER OR CONTRIBUTOR WILL BE LIABLE FOR ANY DIRECT,
 * INDIRECT, INCIDENTAL, OR CONSEQUENTIAL DAMAGES ARISING IN ANY WAY OUT OF
 * THE USE OF THE PACKAGE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @package     CellBIS.php
 * @author      Achmad Yusri Afandi with CellBIS OpenSource Project.
 * @copyright   (c) 2018, CellBIS OpenSource Project. (http://cellbis.org)
 * @since       0.1000
 * @link        http://cellbis.org/php
 * @license     https://opensource.org/licenses/Artistic-2.0  Artistic License 2.0
 */

/**
 * -----------------------------------------------------------------
 * PATH APPLICATION
 * -----------------------------------------------------------------
 *
 * This "Named Constant" for base path application. It's will be use
 * for all path in Application.
 *
 * You can change content of "Named Constant", if you want "core"
 * is not same base directory with this files.
 *
 */
DEFINE('BASEAPP_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);

/**
 * -----------------------------------------------------------------
 * CORE DIRECTORY NAME
 * -----------------------------------------------------------------
 *
 * This "Named Constant" must contain the name of your "core" directory.
 * Default directory name is "core".
 *
 * You can change content of "Named Constant", if you want "core"
 * is not same base directory with this files.
 */
DEFINE('CORE_PATH', BASEAPP_PATH.'core');

/**
 * -----------------------------------------------------------------
 * LIBRARY DIRECTORY NAME
 * -----------------------------------------------------------------
 *
 * This Constant contain path of modules which to use in this
 * Web Framework
 *
 * You can change content of "Named Constant", if you want "library"
 * is not same base directory with this files.
 *
 */
DEFINE('LIB_PATH', BASEAPP_PATH.'module');

/**
 * -----------------------------------------------------------------
 * PLUGIN DIRECTORY NAME
 * -----------------------------------------------------------------
 *
 * This Constant contain path of plugin which to use in this
 * Web Framework
 *
 * You can change content of "Named Constant", if you want "plugin"
 * is not same base directory with this files.
 */
DEFINE('PLG_PATH', BASEAPP_PATH.'plugin');

/**
 * -----------------------------------------------------------------
 * LOAD CORE BASE FRAMEWORK
 * -----------------------------------------------------------------
 *
 */
include(CORE_PATH.DIRECTORY_SEPARATOR.'cB.php');
