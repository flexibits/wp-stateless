<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc00cd3c666f8dfa818cb7edfd488ed20
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'ChromePhp' => 
            array (
                0 => __DIR__ . '/..' . '/ccampbell/chromephp',
            ),
        ),
    );

    public static $classMap = array (
        'UsabilityDynamics\\Job' => __DIR__ . '/..' . '/usabilitydynamics/lib-utility/lib/class-job.php',
        'UsabilityDynamics\\Loader' => __DIR__ . '/..' . '/usabilitydynamics/lib-utility/lib/class-loader.php',
        'UsabilityDynamics\\Settings' => __DIR__ . '/..' . '/usabilitydynamics/lib-settings/lib/class-settings.php',
        'UsabilityDynamics\\Structure' => __DIR__ . '/..' . '/usabilitydynamics/lib-utility/lib/class-structure.php',
        'UsabilityDynamics\\Term' => __DIR__ . '/..' . '/usabilitydynamics/lib-utility/lib/class-term.php',
        'UsabilityDynamics\\Utility' => __DIR__ . '/..' . '/usabilitydynamics/lib-utility/lib/class-utility.php',
        'UsabilityDynamics\\Utility\\Guid_Fix' => __DIR__ . '/..' . '/usabilitydynamics/lib-utility/lib/class-guid-fix.php',
        'UsabilityDynamics\\WP\\Bootstrap' => __DIR__ . '/..' . '/usabilitydynamics/lib-wp-bootstrap/lib/classes/class-bootstrap.php',
        'UsabilityDynamics\\WP\\Bootstrap_Plugin' => __DIR__ . '/..' . '/usabilitydynamics/lib-wp-bootstrap/lib/classes/class-bootstrap-plugin.php',
        'UsabilityDynamics\\WP\\Bootstrap_Theme' => __DIR__ . '/..' . '/usabilitydynamics/lib-wp-bootstrap/lib/classes/class-bootstrap-theme.php',
        'UsabilityDynamics\\WP\\Dashboard' => __DIR__ . '/..' . '/usabilitydynamics/lib-wp-bootstrap/lib/classes/class-dashboard.php',
        'UsabilityDynamics\\WP\\Errors' => __DIR__ . '/..' . '/usabilitydynamics/lib-wp-bootstrap/lib/classes/class-errors.php',
        'UsabilityDynamics\\WP\\Scaffold' => __DIR__ . '/..' . '/usabilitydynamics/lib-wp-bootstrap/lib/classes/class-scaffold.php',
        'UsabilityDynamics\\WP\\TGMPA_List_Table' => __DIR__ . '/..' . '/usabilitydynamics/lib-wp-bootstrap/lib/classes/class-tgm-list-table.php',
        'UsabilityDynamics\\WP\\TGM_Bulk_Installer' => __DIR__ . '/..' . '/usabilitydynamics/lib-wp-bootstrap/lib/classes/class-tgm-bulk-installer.php',
        'UsabilityDynamics\\WP\\TGM_Bulk_Installer_Skin' => __DIR__ . '/..' . '/usabilitydynamics/lib-wp-bootstrap/lib/classes/class-tgm-bulk-installer.php',
        'UsabilityDynamics\\WP\\TGM_Plugin_Activation' => __DIR__ . '/..' . '/usabilitydynamics/lib-wp-bootstrap/lib/classes/class-tgm-plugin-activation.php',
        'UsabilityDynamics\\WP\\Utility' => __DIR__ . '/..' . '/usabilitydynamics/lib-wp-bootstrap/lib/classes/class-utility.php',
        'wpCloud\\StatelessMedia\\API' => __DIR__ . '/../..' . '/lib/classes/class-api.php',
        'wpCloud\\StatelessMedia\\Ajax' => __DIR__ . '/../..' . '/lib/classes/class-ajax.php',
        'wpCloud\\StatelessMedia\\Bootstrap' => __DIR__ . '/../..' . '/lib/classes/class-bootstrap.php',
        'wpCloud\\StatelessMedia\\CompatibilityAcfImageCrop' => __DIR__ . '/../..' . '/lib/classes/compatibility/acf-image-crop.php',
        'wpCloud\\StatelessMedia\\GS_Client' => __DIR__ . '/../..' . '/lib/classes/class-gs-client.php',
        'wpCloud\\StatelessMedia\\ICompatibility' => __DIR__ . '/../..' . '/lib/classes/class-compatibility.php',
        'wpCloud\\StatelessMedia\\Logger' => __DIR__ . '/../..' . '/lib/classes/class-logger.php',
        'wpCloud\\StatelessMedia\\Module' => __DIR__ . '/../..' . '/lib/classes/class-compatibility.php',
        'wpCloud\\StatelessMedia\\Settings' => __DIR__ . '/../..' . '/lib/classes/class-settings.php',
        'wpCloud\\StatelessMedia\\Sync' => __DIR__ . '/../..' . '/lib/classes/class-sync.php',
        'wpCloud\\StatelessMedia\\Upgrader' => __DIR__ . '/../..' . '/lib/classes/class-upgrader.php',
        'wpCloud\\StatelessMedia\\Utility' => __DIR__ . '/../..' . '/lib/classes/class-utility.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc00cd3c666f8dfa818cb7edfd488ed20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc00cd3c666f8dfa818cb7edfd488ed20::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc00cd3c666f8dfa818cb7edfd488ed20::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc00cd3c666f8dfa818cb7edfd488ed20::$classMap;

        }, null, ClassLoader::class);
    }
}
