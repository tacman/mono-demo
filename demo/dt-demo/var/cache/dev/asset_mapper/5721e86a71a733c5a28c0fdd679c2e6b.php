O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:105:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/i18n/i18n_loc_set_default.js";s:10:"publicPath";s:111:"/assets/@survos/api-grid/node_modules/locutus/php/i18n/i18n_loc_set_default-68a91436cb3c60f4dbb9507cb03ed5f4.js";s:23:"publicPathWithoutDigest";s:78:"/assets/@survos/api-grid/node_modules/locutus/php/i18n/i18n_loc_set_default.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1309:"'use strict';

module.exports = function i18n_loc_set_default(name) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/i18n_loc_set_default/
  // original by: Brett Zamir (https://brett-zamir.me)
  //      note 1: Renamed in PHP6 from locale_set_default(). Not listed yet at php.net
  //      note 1: List of locales at https://demo.icu-project.org/icu-bin/locexp (use for implementing other locales here)
  //      note 1: To be usable with sort() if it is passed the SORT_LOCALE_STRING sorting flag: https://php.net/manual/en/function.sort.php
  //   example 1: i18n_loc_set_default('pt_PT')
  //   returns 1: true

  var $global = typeof window !== 'undefined' ? window : global;
  $global.$locutus = $global.$locutus || {};
  var $locutus = $global.$locutus;
  $locutus.php = $locutus.php || {};
  $locutus.php.locales = $locutus.php.locales || {};

  $locutus.php.locales.en_US_POSIX = {
    sorting: function sorting(str1, str2) {
      // @todo: This one taken from strcmp, but need for other locales;
      // we don't use localeCompare since its locale is not settable
      return str1 === str2 ? 0 : str1 > str2 ? 1 : -1;
    }
  };

  $locutus.php.locale_default = name;
  return true;
};
//# sourceMappingURL=i18n_loc_set_default.js-a71fde3a1a8b024adf5d723007d64004.map";s:6:"digest";s:32:"68a91436cb3c60f4dbb9507cb03ed5f4";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:109:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/i18n/i18n_loc_set_default.js.map";s:10:"publicPath";s:115:"/assets/@survos/api-grid/node_modules/locutus/php/i18n/i18n_loc_set_default.js-a71fde3a1a8b024adf5d723007d64004.map";s:23:"publicPathWithoutDigest";s:82:"/assets/@survos/api-grid/node_modules/locutus/php/i18n/i18n_loc_set_default.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"a71fde3a1a8b024adf5d723007d64004";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:74:"@survos/api-grid/node_modules/locutus/php/i18n/i18n_loc_set_default.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:70:"@survos/api-grid/node_modules/locutus/php/i18n/i18n_loc_set_default.js";}