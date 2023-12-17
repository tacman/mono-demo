O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/exec/escapeshellarg.js";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/exec/escapeshellarg-8ea7feb68becdddbcfba6ef39199fdb1.js";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/exec/escapeshellarg.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:989:"'use strict';

module.exports = function escapeshellarg(arg) {
  //  discuss at: https://locutus.io/php/escapeshellarg/
  // Warning: this function emulates escapeshellarg() for php-running-on-linux
  // the function behaves differently when running on Windows, which is not covered by this code.
  //
  // original by: Felix Geisendoerfer (https://www.debuggable.com/felix)
  // improved by: Brett Zamir (https://brett-zamir.me)
  // bugfixed by: divinity76 (https://github.com/divinity76)
  //   example 1: escapeshellarg("kevin's birthday")
  //   returns 1: "'kevin'\\''s birthday'"
  //   example 2: escapeshellarg("/home'; whoami;''")
  //   returns 2: "'/home'\\''; whoami;'\\'''\\'''"

  if (arg.indexOf('\x00') !== -1) {
    throw new Error('escapeshellarg(): Argument #1 ($arg) must not contain any null bytes');
  }

  var ret = '';

  ret = arg.replace(/'/g, '\'\\\'\'');

  return "'" + ret + "'";
};
//# sourceMappingURL=escapeshellarg.js-dcb22c4f4ad75969a03a83600b81ad0c.map";s:6:"digest";s:32:"8ea7feb68becdddbcfba6ef39199fdb1";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/exec/escapeshellarg.js.map";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/exec/escapeshellarg.js-dcb22c4f4ad75969a03a83600b81ad0c.map";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/exec/escapeshellarg.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"dcb22c4f4ad75969a03a83600b81ad0c";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/exec/escapeshellarg.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/exec/escapeshellarg.js";}