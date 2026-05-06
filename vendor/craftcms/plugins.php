<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'craftcms/postmark' => 
  array (
    'class' => 'craftcms\\postmark\\Plugin',
    'basePath' => $vendorDir . '/craftcms/postmark/src',
    'handle' => 'postmark',
    'aliases' => 
    array (
      '@craftcms/postmark' => $vendorDir . '/craftcms/postmark/src',
    ),
    'name' => 'Postmark',
    'version' => '3.1.0',
    'description' => 'Postmark adapter for Craft CMS',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/postmark/blob/master/README.md',
  ),
  'adigital/cookie-consent-banner' => 
  array (
    'class' => 'adigital\\cookieconsentbanner\\CookieConsentBanner',
    'basePath' => $vendorDir . '/adigital/cookie-consent-banner/src',
    'handle' => 'cookie-consent-banner',
    'aliases' => 
    array (
      '@adigital/cookieconsentbanner' => $vendorDir . '/adigital/cookie-consent-banner/src',
    ),
    'name' => 'Cookie Consent Banner',
    'version' => '3.1.1',
    'description' => 'Add a configurable cookie consent banner to the website.',
    'developer' => 'A Digital',
    'developerUrl' => 'https://adigital.agency',
    'documentationUrl' => 'https://github.com/a-digital/cookie-consent-banner/blob/master/README.md',
    'changelogUrl' => 'https://github.com/a-digital/cookie-consent-banner/blob/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => false,
  ),
  'nystudio107/craft-seomatic' => 
  array (
    'class' => 'nystudio107\\seomatic\\Seomatic',
    'basePath' => $vendorDir . '/nystudio107/craft-seomatic/src',
    'handle' => 'seomatic',
    'aliases' => 
    array (
      '@nystudio107/seomatic' => $vendorDir . '/nystudio107/craft-seomatic/src',
    ),
    'name' => 'SEOmatic',
    'version' => '5.1.21',
    'description' => 'SEOmatic facilitates modern SEO best practices & implementation for Craft CMS 5. It is a turnkey SEO system that is comprehensive, powerful, and flexible.',
    'developer' => 'nystudio107',
    'developerUrl' => 'https://nystudio107.com',
    'documentationUrl' => 'https://nystudio107.com/docs/seomatic/',
  ),
  'craftcms/ckeditor' => 
  array (
    'class' => 'craft\\ckeditor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/ckeditor/src',
    'handle' => 'ckeditor',
    'aliases' => 
    array (
      '@craft/ckeditor' => $vendorDir . '/craftcms/ckeditor/src',
    ),
    'name' => 'CKEditor',
    'version' => '5.5.0',
    'description' => 'Edit rich text content in Craft CMS using CKEditor.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/ckeditor/blob/5.x/README.md',
  ),
);
