<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06d69eabffd306e57c9dcf2a0aac2cbc
{
    public static $files = array (
        'c730ac5ba4946398dd12db7e8d42d1c8' => __DIR__ . '/..' . '/codeinwp/themeisle-sdk/load.php',
    );

    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HFG\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HFG\\' => 
        array (
            0 => __DIR__ . '/../..' . '/header-footer-grid',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'HFG\\Core\\Builder\\Abstract_Builder' => __DIR__ . '/../..' . '/header-footer-grid/Core/Builder/Abstract_Builder.php',
        'HFG\\Core\\Builder\\Footer' => __DIR__ . '/../..' . '/header-footer-grid/Core/Builder/Footer.php',
        'HFG\\Core\\Builder\\Header' => __DIR__ . '/../..' . '/header-footer-grid/Core/Builder/Header.php',
        'HFG\\Core\\Components\\Abstract_Component' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/Abstract_Component.php',
        'HFG\\Core\\Components\\Abstract_FooterWidget' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/Abstract_FooterWidget.php',
        'HFG\\Core\\Components\\Button' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/Button.php',
        'HFG\\Core\\Components\\CartIcon' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/CartIcon.php',
        'HFG\\Core\\Components\\CustomHtml' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/CustomHtml.php',
        'HFG\\Core\\Components\\EddCartIcon' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/EddCartIcon.php',
        'HFG\\Core\\Components\\FooterWidgetFour' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/FooterWidgetFour.php',
        'HFG\\Core\\Components\\FooterWidgetOne' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/FooterWidgetOne.php',
        'HFG\\Core\\Components\\FooterWidgetThree' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/FooterWidgetThree.php',
        'HFG\\Core\\Components\\FooterWidgetTwo' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/FooterWidgetTwo.php',
        'HFG\\Core\\Components\\Logo' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/Logo.php',
        'HFG\\Core\\Components\\MenuIcon' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/MenuIcon.php',
        'HFG\\Core\\Components\\Nav' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/Nav.php',
        'HFG\\Core\\Components\\NavFooter' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/NavFooter.php',
        'HFG\\Core\\Components\\PaletteSwitch' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/PaletteSwitch.php',
        'HFG\\Core\\Components\\Search' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/Search.php',
        'HFG\\Core\\Components\\SearchResponsive' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/SearchResponsive.php',
        'HFG\\Core\\Components\\SecondNav' => __DIR__ . '/../..' . '/header-footer-grid/Core/Components/SecondNav.php',
        'HFG\\Core\\Css_Generator' => __DIR__ . '/../..' . '/header-footer-grid/Core/Css_Generator.php',
        'HFG\\Core\\Customizer' => __DIR__ . '/../..' . '/header-footer-grid/Core/Customizer.php',
        'HFG\\Core\\Interfaces\\Builder' => __DIR__ . '/../..' . '/header-footer-grid/Core/Interfaces/Builder.php',
        'HFG\\Core\\Interfaces\\Component' => __DIR__ . '/../..' . '/header-footer-grid/Core/Interfaces/Component.php',
        'HFG\\Core\\Magic_Tags' => __DIR__ . '/../..' . '/header-footer-grid/Core/Magic_Tags.php',
        'HFG\\Core\\Script_Register' => __DIR__ . '/../..' . '/header-footer-grid/Core/Script_Register.php',
        'HFG\\Core\\Settings\\Config' => __DIR__ . '/../..' . '/header-footer-grid/Core/Settings/Config.php',
        'HFG\\Core\\Settings\\Defaults' => __DIR__ . '/../..' . '/header-footer-grid/Core/Settings/Defaults.php',
        'HFG\\Core\\Settings\\Manager' => __DIR__ . '/../..' . '/header-footer-grid/Core/Settings/Manager.php',
        'HFG\\Main' => __DIR__ . '/../..' . '/header-footer-grid/Main.php',
        'HFG\\Traits\\Core' => __DIR__ . '/../..' . '/header-footer-grid/Traits/Core.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06d69eabffd306e57c9dcf2a0aac2cbc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06d69eabffd306e57c9dcf2a0aac2cbc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit06d69eabffd306e57c9dcf2a0aac2cbc::$classMap;

        }, null, ClassLoader::class);
    }
}
