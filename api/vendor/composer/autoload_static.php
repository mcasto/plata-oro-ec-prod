<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32336c8d42d1fa1c6def6899296e1855
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '79f66bc0a1900f77abe4a9a299057a0a' => __DIR__ . '/..' . '/starkbank/ecdsa/src/ellipticcurve.php',
    );

    public static $prefixLengthsPsr4 = array (
        'j' => 
        array (
            'joshtronic\\' => 11,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Component\\Finder\\' => 25,
            'SendGrid\\Stats\\' => 15,
            'SendGrid\\Mail\\' => 14,
            'SendGrid\\Helper\\' => 16,
            'SendGrid\\EventWebhook\\' => 22,
            'SendGrid\\Contacts\\' => 18,
            'SendGrid\\' => 9,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'PhpZip\\' => 7,
        ),
        'C' => 
        array (
            'Castoware\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'joshtronic\\' => 
        array (
            0 => __DIR__ . '/..' . '/joshtronic/php-loremipsum/src',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'SendGrid\\Stats\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/stats',
        ),
        'SendGrid\\Mail\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/mail',
        ),
        'SendGrid\\Helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/helper',
        ),
        'SendGrid\\EventWebhook\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/eventwebhook',
        ),
        'SendGrid\\Contacts\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/contacts',
        ),
        'SendGrid\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/php-http-client/lib',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'PhpZip\\' => 
        array (
            0 => __DIR__ . '/..' . '/nelexa/zip/src',
        ),
        'Castoware\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Castoware',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'BaseSendGridClientInterface' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/BaseSendGridClientInterface.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Dibi\\Bridges\\Nette\\DibiExtension22' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Bridges/Nette/DibiExtension22.php',
        'Dibi\\Bridges\\Tracy\\Panel' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Bridges/Tracy/Panel.php',
        'Dibi\\Connection' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Connection.php',
        'Dibi\\ConstraintViolationException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\DataSource' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/DataSource.php',
        'Dibi\\DateTime' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/DateTime.php',
        'Dibi\\Driver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/interfaces.php',
        'Dibi\\DriverException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\Drivers\\DummyDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/DummyDriver.php',
        'Dibi\\Drivers\\FirebirdDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/FirebirdDriver.php',
        'Dibi\\Drivers\\FirebirdReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/FirebirdReflector.php',
        'Dibi\\Drivers\\FirebirdResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/FirebirdResult.php',
        'Dibi\\Drivers\\MySqlReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/MySqlReflector.php',
        'Dibi\\Drivers\\MySqliDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/MySqliDriver.php',
        'Dibi\\Drivers\\MySqliResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/MySqliResult.php',
        'Dibi\\Drivers\\NoDataResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/NoDataResult.php',
        'Dibi\\Drivers\\OdbcDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OdbcDriver.php',
        'Dibi\\Drivers\\OdbcReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OdbcReflector.php',
        'Dibi\\Drivers\\OdbcResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OdbcResult.php',
        'Dibi\\Drivers\\OracleDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OracleDriver.php',
        'Dibi\\Drivers\\OracleReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OracleReflector.php',
        'Dibi\\Drivers\\OracleResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OracleResult.php',
        'Dibi\\Drivers\\PdoDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/PdoDriver.php',
        'Dibi\\Drivers\\PdoResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/PdoResult.php',
        'Dibi\\Drivers\\PostgreDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/PostgreDriver.php',
        'Dibi\\Drivers\\PostgreReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/PostgreReflector.php',
        'Dibi\\Drivers\\PostgreResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/PostgreResult.php',
        'Dibi\\Drivers\\Sqlite3Driver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/Sqlite3Driver.php',
        'Dibi\\Drivers\\Sqlite3Result' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/Sqlite3Result.php',
        'Dibi\\Drivers\\SqliteDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqliteDriver.php',
        'Dibi\\Drivers\\SqliteReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqliteReflector.php',
        'Dibi\\Drivers\\SqliteResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqliteResult.php',
        'Dibi\\Drivers\\SqlsrvDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqlsrvDriver.php',
        'Dibi\\Drivers\\SqlsrvReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqlsrvReflector.php',
        'Dibi\\Drivers\\SqlsrvResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqlsrvResult.php',
        'Dibi\\Event' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Event.php',
        'Dibi\\Exception' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\Expression' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Expression.php',
        'Dibi\\Fluent' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Fluent.php',
        'Dibi\\ForeignKeyConstraintViolationException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\HashMap' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/HashMap.php',
        'Dibi\\HashMapBase' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/HashMap.php',
        'Dibi\\Helpers' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Helpers.php',
        'Dibi\\IConnection' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/interfaces.php',
        'Dibi\\IDataSource' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/interfaces.php',
        'Dibi\\Literal' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Literal.php',
        'Dibi\\Loggers\\FileLogger' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Loggers/FileLogger.php',
        'Dibi\\NotImplementedException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\NotNullConstraintViolationException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\NotSupportedException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\PcreException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\ProcedureException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\Reflection\\Column' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/Column.php',
        'Dibi\\Reflection\\Database' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/Database.php',
        'Dibi\\Reflection\\ForeignKey' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/ForeignKey.php',
        'Dibi\\Reflection\\Index' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/Index.php',
        'Dibi\\Reflection\\Result' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/Result.php',
        'Dibi\\Reflection\\Table' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/Table.php',
        'Dibi\\Reflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/interfaces.php',
        'Dibi\\Result' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Result.php',
        'Dibi\\ResultDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/interfaces.php',
        'Dibi\\ResultIterator' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/ResultIterator.php',
        'Dibi\\Row' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Row.php',
        'Dibi\\Strict' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Strict.php',
        'Dibi\\Translator' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Translator.php',
        'Dibi\\Type' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Type.php',
        'Dibi\\UniqueConstraintViolationException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'SendGrid' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/SendGrid.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'TwilioEmail' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/TwilioEmail.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
        'dibi' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/dibi.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit32336c8d42d1fa1c6def6899296e1855::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32336c8d42d1fa1c6def6899296e1855::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit32336c8d42d1fa1c6def6899296e1855::$classMap;

        }, null, ClassLoader::class);
    }
}
