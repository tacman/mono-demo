O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/info/set_time_limit.js";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/info/set_time_limit-a826be0ea7ecf94f6c826368e7ebb833.js";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/info/set_time_limit.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:758:"'use strict';

module.exports = function set_time_limit(seconds) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/set_time_limit/
  // original by: Brett Zamir (https://brett-zamir.me)
  //        test: skip-all
  //   example 1: set_time_limit(4)
  //   returns 1: undefined

  var $global = typeof window !== 'undefined' ? window : global;
  $global.$locutus = $global.$locutus || {};
  var $locutus = $global.$locutus;
  $locutus.php = $locutus.php || {};

  setTimeout(function () {
    if (!$locutus.php.timeoutStatus) {
      $locutus.php.timeoutStatus = true;
    }
    throw new Error('Maximum execution time exceeded');
  }, seconds * 1000);
};
//# sourceMappingURL=set_time_limit.js-433250e250819ca89062f230f851605f.map";s:6:"digest";s:32:"a826be0ea7ecf94f6c826368e7ebb833";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/info/set_time_limit.js.map";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/info/set_time_limit.js-433250e250819ca89062f230f851605f.map";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/info/set_time_limit.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"433250e250819ca89062f230f851605f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/info/set_time_limit.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/info/set_time_limit.js";}