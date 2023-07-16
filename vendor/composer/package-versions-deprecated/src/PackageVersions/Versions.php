<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'spagreen/yoori';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'anandsiddharth/laravel-paytm-wallet' => 'v2.0.0@5342add0719e9c5ca94fdd13f766e6a810f2ef45',
  'asm89/stack-cors' => 'v2.1.1@73e5b88775c64ccc0b84fb60836b30dc9d92ac4a',
  'aws/aws-crt-php' => 'v1.0.2@3942776a8c99209908ee0b287746263725685732',
  'aws/aws-sdk-php' => '3.253.4@da3b60b090b2070bd452d8b87737ea1e00d8002f',
  'brian2694/laravel-toastr' => '5.57@1274f58564b9d845dfe82d5aca60b99b6fbb5a71',
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'cartalyst/sentinel' => 'v5.1.0@6f641c0c6fda3627a6aee9d1cd3c409e73e4fd0d',
  'cartalyst/support' => 'v5.1.2@1bf18efdc7e1c7bd4adabdbccfac48ce0fa946fe',
  'composer/ca-bundle' => '1.3.4@69098eca243998b53eed7a48d82dedd28b447cd5',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'dflydev/dot-access-data' => 'v3.0.2@f41715465d65213d644d3141a6a93081be5d3549',
  'doctrine/annotations' => '1.14.1@9e034d7a70032d422169f27d8759e8d84abb4f51',
  'doctrine/common' => '3.4.3@8b5e5650391f851ed58910b3e3d48a71062eeced',
  'doctrine/deprecations' => 'v1.0.0@0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
  'doctrine/event-manager' => '1.2.0@95aa4cb529f1e96576f3fda9f5705ada4056a520',
  'doctrine/inflector' => '2.0.6@d9d313a36c872fd6ee06d9a6cbcf713eaa40f024',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'doctrine/persistence' => '3.1.1@d87426f07dd66f97cfdcf5210925e483b6c993b5',
  'dragonmantank/cron-expression' => 'v3.3.2@782ca5968ab8b954773518e9e49a6f892a34b2a8',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'ezyang/htmlpurifier' => 'v4.13.0@08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
  'fruitcake/laravel-cors' => 'v2.2.0@783a74f5e3431d7b9805be8afb60fd0a8f743534',
  'geo-sot/laravel-env-editor' => 'v1.1.0@d519594fcbc5dd9d35d47d56a96aae17f12c685f',
  'graham-campbell/result-type' => 'v1.1.0@a878d45c1914464426dc94da61c9e1d36ae262a8',
  'guzzlehttp/guzzle' => '7.5.0@b50a2a1251152e43f6a37f0fa053e730a67d25ba',
  'guzzlehttp/promises' => '1.5.2@b94b2807d85443f9719887892882d0329d1e2598',
  'guzzlehttp/psr7' => '2.4.3@67c26b443f348a51926030c83481b85718457d3d',
  'intervention/image' => '2.7.2@04be355f8d6734c826045d02a1079ad658322dad',
  'iyzico/iyzipay-php' => 'v2.0.51@fa2a07634cfc099ca47d5397ef6591d06b31cbb4',
  'joedixon/laravel-translation' => 'v1.1.2@4a467398bae73cd16522d523b557e96f3455b9d2',
  'kkiapay/kkiapay-php' => 'dev-master@b8b5ab30c29e286b0db7c322b5dac7ea639bf73e',
  'laminas/laminas-diactoros' => '2.17.0@5b32597aa46b83c8b85bb1cf9a6ed4fe7dd980c5',
  'laravel/framework' => 'v8.83.27@e1afe088b4ca613fb96dc57e6d8dbcb8cc2c6b49',
  'laravel/sanctum' => 'v2.15.1@31fbe6f85aee080c4dc2f9b03dc6dd5d0ee72473',
  'laravel/serializable-closure' => 'v1.2.2@47afb7fae28ed29057fdca37e16a84f90cc62fae',
  'laravel/socialite' => 'v5.5.6@1cd1682b709b8808a5b5dbb68179a58d1342aa7b',
  'laravel/tinker' => 'v2.7.3@5062061b4924af3392225dd482ca7b4d85d8b8ef',
  'lcobucci/jwt' => '3.3.3@c1123697f6a2ec29162b82f170dd4a491f524773',
  'league/commonmark' => '2.3.8@c493585c130544c4e91d2e0e131e6d35cb0cbc47',
  'league/config' => 'v1.2.0@754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
  'league/flysystem' => '1.1.10@3239285c825c152bcc315fe0e87d6b55f5972ed1',
  'league/flysystem-aws-s3-v3' => '1.0.30@af286f291ebab6877bac0c359c6c2cb017eb061d',
  'league/mime-type-detection' => '1.11.0@ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
  'league/oauth1-client' => 'v1.10.1@d6365b901b5c287dd41f143033315e2f777e1167',
  'maatwebsite/excel' => '3.1.44@289c3320982510dacfe0dd00de68061a2b7f4a43',
  'maennchen/zipstream-php' => '2.2.6@30ad6f93cf3efe4192bc7a4c9cad11ff8f4f237f',
  'markbaker/complex' => '3.0.2@95c56caa1cf5c766ad6d65b6344b807c1e8405b9',
  'markbaker/matrix' => '3.0.1@728434227fe21be27ff6d86621a1b13107a2562c',
  'mcamara/laravel-localization' => 'v1.7.0@27565315c585e90d8d93aa06afd49d6a5992fe5a',
  'mercadopago/dx-php' => '2.5.3@c41853bde4a85742fd3b6741effde34c6919da2d',
  'mews/purifier' => '3.3.8@164b420c4a80d2d0a89c1023f0aa9b3c0e3d6dc5',
  'midtrans/midtrans-php' => '2.5.2@a1ad0c824449ca8c68c4cf11b3417ad518311d2b',
  'mollie/laravel-mollie' => 'v2.20.2@6faa93bb82845ff04b5544a8b0f4b7446006dfef',
  'mollie/mollie-api-php' => 'v2.49.0@b5e4fd8581f91914a2f58e293bca4182722173df',
  'monolog/monolog' => '2.8.0@720488632c590286b88b80e62aa3d3d551ad4a50',
  'mpdf/mpdf' => 'v8.1.4@add590e93b7502efafd9839a68cff99f3497b318',
  'mtdowling/jmespath.php' => '2.6.1@9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'myclabs/php-enum' => '1.8.4@a867478eae49c9f59ece437ae7f9506bfaa27483',
  'namshi/jose' => '7.2.3@89a24d7eb3040e285dd5925fcad992378b82bcff',
  'nesbot/carbon' => '2.64.0@889546413c97de2d05063b8cb7b193c2531ea211',
  'nette/schema' => 'v1.2.3@abbdbb70e0245d5f3bf77874cea1dfb0c930d06f',
  'nette/utils' => 'v3.2.8@02a54c4c872b99e4ec05c4aec54b5a06eb0f6368',
  'nexmo/client' => '2.4.0@9d515f6592d466159f79dde460ce2b99b8128279',
  'nexmo/client-core' => 'v2.6.0@1f3cf17ad38e44a7625653c0851f8d7503088995',
  'nikic/php-parser' => 'v4.15.2@f59bbe44bf7d96f24f3e2b4ddc21cd52c1d2adbc',
  'niklasravnsborg/laravel-pdf' => 'v4.1.0@a5f5c22dd5e10d8f536102cec01c21282e18ebae',
  'obydul/laraskrill' => 'v1.2.0@b3f936b3acd9fd1e44857e946d6fde2090ea64e4',
  'opis/closure' => '3.6.3@3d81e4309d2a927abbe66df935f4bb60082805ad',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'paragonie/sodium_compat' => 'v1.19.0@cb15e403ecbe6a6cc515f855c310eb6b1872a933',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'phpoffice/phpspreadsheet' => '1.24.1@69991111e05fca3ff7398e1e7fca9ebed33efec6',
  'phpoption/phpoption' => '1.9.0@dc5ff11e274a90cc1c743f66c9ad700ce50db9ab',
  'predis/predis' => 'v1.1.10@a2fb02d738bedadcffdbb07efa3a5e7bd57f8d6e',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.11.9@1acec99d6684a54ff92f8b548a4e41b566963778',
  'pusher/pusher-php-server' => '7.2.1@5d708d43d774218e1068037c56a887658a4930ac',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.2@cccc74ee5e328031b15640b51056ee8d3bb66c0a',
  'ramsey/uuid' => '4.2.3@fc9bb7fb5388691fd7373cd44dcb4d63bbcf24df',
  'razorpay/razorpay' => '2.8.5@31027cfb689b9480d67419dbec7c203097e9d9ac',
  'rmccue/requests' => 'v2.0.5@b717f1d2f4ef7992ec0c127747ed8b7e170c2f49',
  'setasign/fpdi' => 'v2.3.6@6231e315f73e4f62d72b73f3d6d78ff0eed93c31',
  'silviolleite/laravelpwa' => '2.0.3@5f7135d2ee870af01793c9fdf6b1b932b546e20e',
  'stripe/stripe-php' => 'v7.128.0@c704949c49b72985c76cc61063aa26fefbd2724e',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/console' => 'v5.4.16@8e9b9c8dfb33af6057c94e1b44846bee700dc5ef',
  'symfony/css-selector' => 'v5.4.11@c1681789f059ab756001052164726ae88512ae3d',
  'symfony/deprecation-contracts' => 'v2.5.2@e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
  'symfony/error-handler' => 'v5.4.15@539cf1428b8442303c6e876ad7bf5a7babd91091',
  'symfony/event-dispatcher' => 'v5.4.9@8e6ce1cc0279e3ff3c8ff0f43813bc88d21ca1bc',
  'symfony/event-dispatcher-contracts' => 'v2.5.2@f98b54df6ad059855739db6fcbc2d36995283fe1',
  'symfony/finder' => 'v5.4.11@7872a66f57caffa2916a584db1aa7f12adc76f8c',
  'symfony/http-foundation' => 'v5.4.16@5032c5849aef24741e1970cb03511b0dd131d838',
  'symfony/http-kernel' => 'v5.4.16@b432c57c5de73634b1859093c1f58e3cd84455a1',
  'symfony/mime' => 'v5.4.16@46eeedb08f0832b1b61a84c612d945fc85ee4734',
  'symfony/polyfill-ctype' => 'v1.27.0@5bbc823adecdae860bb64756d639ecfec17b050a',
  'symfony/polyfill-iconv' => 'v1.27.0@927013f3aac555983a5059aada98e1907d842695',
  'symfony/polyfill-intl-grapheme' => 'v1.27.0@511a08c03c1960e08a883f4cffcacd219b758354',
  'symfony/polyfill-intl-idn' => 'v1.27.0@639084e360537a19f9ee352433b84ce831f3d2da',
  'symfony/polyfill-intl-normalizer' => 'v1.27.0@19bd1e4fcd5b91116f14d8533c57831ed00571b6',
  'symfony/polyfill-mbstring' => 'v1.27.0@8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
  'symfony/polyfill-php56' => 'v1.20.0@54b8cd7e6c1643d78d011f3be89f3ef1f9f4c675',
  'symfony/polyfill-php72' => 'v1.27.0@869329b1e9894268a8a61dabb69153029b7a8c97',
  'symfony/polyfill-php73' => 'v1.27.0@9e8ecb5f92152187c4799efd3c96b78ccab18ff9',
  'symfony/polyfill-php80' => 'v1.27.0@7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
  'symfony/polyfill-php81' => 'v1.27.0@707403074c8ea6e2edaf8794b0157a0bfa52157a',
  'symfony/process' => 'v5.4.11@6e75fe6874cbc7e4773d049616ab450eff537bf1',
  'symfony/routing' => 'v5.4.15@5c9b129efe9abce9470e384bf65d8a7e262eee69',
  'symfony/service-contracts' => 'v2.5.2@4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
  'symfony/string' => 'v5.4.15@571334ce9f687e3e6af72db4d3b2a9431e4fd9ed',
  'symfony/translation' => 'v5.4.14@f0ed07675863aa6e3939df8b1bc879450b585cab',
  'symfony/translation-contracts' => 'v2.5.2@136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
  'symfony/var-dumper' => 'v5.4.14@6894d06145fefebd9a4c7272baa026a1c394a430',
  'tijsverkoyen/css-to-inline-styles' => '2.2.5@4348a3a06651827a27d989ad1d13efec6bb49b19',
  'twilio/sdk' => '6.44.0@d0f8b4c642209a08066990eaea55ee6f292e4f8d',
  'tymon/jwt-auth' => '1.0.2@e588cb719539366c0e2f6017f975379cb73e9680',
  'unicodeveloper/laravel-paystack' => '1.0.9@785aa1c5a1b07e06e2cc5c63f11e9dcf6c29a648',
  'vlucas/phpdotenv' => 'v5.5.0@1a7ea2afc49c3ee6d87061f5a233e3a035d0eae7',
  'voku/portable-ascii' => '1.6.1@87337c91b9dfacee02452244ee14ab3c43bc485a',
  'vonage/nexmo-bridge' => '0.1.1@36490dcc5915f12abeaa233c6098e0dce14bbb0a',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'xenon/nagad-api' => 'v1.9.1.6@b7d54e92b97ec85ab5c15e1fcb624cc9211b1bba',
  'spagreen/yoori' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
