O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:108:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/filesystem/file_get_contents.js";s:10:"publicPath";s:114:"/assets/@survos/api-grid/node_modules/locutus/php/filesystem/file_get_contents-072594bb4e6a94d4204b4140460b23aa.js";s:23:"publicPathWithoutDigest";s:81:"/assets/@survos/api-grid/node_modules/locutus/php/filesystem/file_get_contents.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1188:"'use strict';

module.exports = function file_get_contents(url, flags, context, offset, maxLen) {
  // eslint-disable-line camelcase
  //       discuss at: https://locutus.io/php/file_get_contents/
  //      original by: Legaev Andrey
  //         input by: Jani Hartikainen
  //         input by: Raphael (Ao) RUDLER
  //      improved by: Kevin van Zonneveld (https://kvz.io)
  //      improved by: Brett Zamir (https://brett-zamir.me)
  //      bugfixed by: Brett Zamir (https://brett-zamir.me)
  // reimplemented by: Kevin van Zonneveld (https://kvz.io)
  //           note 1: This used to work in the browser via blocking ajax
  //           note 1: requests in 1.3.2 and earlier
  //           note 1: but then people started using that for real app,
  //           note 1: so we deprecated this behavior,
  //           note 1: so this function is now Node-only
  //        example 1: var $buf = file_get_contents('test/never-change.txt')
  //        example 1: var $result = $buf.indexOf('hash') !== -1
  //        returns 1: true

  var fs = require('fs');

  return fs.readFileSync(url, 'utf-8');
};
//# sourceMappingURL=file_get_contents.js-b0e9437bbc3deee9f3dc038973aa2fd2.map";s:6:"digest";s:32:"072594bb4e6a94d4204b4140460b23aa";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:112:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/filesystem/file_get_contents.js.map";s:10:"publicPath";s:118:"/assets/@survos/api-grid/node_modules/locutus/php/filesystem/file_get_contents.js-b0e9437bbc3deee9f3dc038973aa2fd2.map";s:23:"publicPathWithoutDigest";s:85:"/assets/@survos/api-grid/node_modules/locutus/php/filesystem/file_get_contents.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"b0e9437bbc3deee9f3dc038973aa2fd2";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:77:"@survos/api-grid/node_modules/locutus/php/filesystem/file_get_contents.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:73:"@survos/api-grid/node_modules/locutus/php/filesystem/file_get_contents.js";}