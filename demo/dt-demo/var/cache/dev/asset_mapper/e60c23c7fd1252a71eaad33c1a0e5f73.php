O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/json/json_last_error.js";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/json/json_last_error-d7a11eab21d6af396e94a7d65b326588.js";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/json/json_last_error.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1057:"'use strict';

module.exports = function json_last_error() {
  // eslint-disable-line camelcase
  //  discuss at: https://phpjs.org/functions/json_last_error/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: json_last_error()
  //   returns 1: 0

  // JSON_ERROR_NONE = 0
  // max depth limit to be removed per PHP comments in json.c (not possible in JS?):
  // JSON_ERROR_DEPTH = 1
  // internal use? also not documented:
  // JSON_ERROR_STATE_MISMATCH = 2
  // [\u0000-\u0008\u000B-\u000C\u000E-\u001F] if used directly within json_decode():
  // JSON_ERROR_CTRL_CHAR = 3
  // but JSON functions auto-escape these, so error not possible in JavaScript
  // JSON_ERROR_SYNTAX = 4

  var $global = typeof window !== 'undefined' ? window : global;
  $global.$locutus = $global.$locutus || {};
  var $locutus = $global.$locutus;
  $locutus.php = $locutus.php || {};

  return $locutus.php && $locutus.php.last_error_json ? $locutus.php.last_error_json : 0;
};
//# sourceMappingURL=json_last_error.js-6724cbcd67d96191707ca925d66893b6.map";s:6:"digest";s:32:"d7a11eab21d6af396e94a7d65b326588";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:104:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/json/json_last_error.js.map";s:10:"publicPath";s:110:"/assets/@survos/api-grid/node_modules/locutus/php/json/json_last_error.js-6724cbcd67d96191707ca925d66893b6.map";s:23:"publicPathWithoutDigest";s:77:"/assets/@survos/api-grid/node_modules/locutus/php/json/json_last_error.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"6724cbcd67d96191707ca925d66893b6";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:69:"@survos/api-grid/node_modules/locutus/php/json/json_last_error.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/json/json_last_error.js";}