O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/sha1_file.js";s:10:"publicPath";s:103:"/assets/@survos/api-grid/node_modules/locutus/php/strings/sha1_file-73e92814b501dfae2b7e2d347981bffa.js";s:23:"publicPathWithoutDigest";s:70:"/assets/@survos/api-grid/node_modules/locutus/php/strings/sha1_file.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:934:"'use strict';

module.exports = function sha1_file(str_filename) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/sha1_file/
  // original by: Kevin van Zonneveld (https://kvz.io)
  //      note 1: Relies on file_get_contents which does not work in the browser, so Node only.
  //      note 2: Keep in mind that in accordance with PHP, the whole file is buffered and then
  //      note 2: hashed. We'd recommend Node's native crypto modules for faster and more
  //      note 2: efficient hashing
  //   example 1: sha1_file('test/never-change.txt')
  //   returns 1: '0ea65a1f4b4d69712affc58240932f3eb8a2af66'

  var fileGetContents = require('../filesystem/file_get_contents');
  var sha1 = require('../strings/sha1');
  var buf = fileGetContents(str_filename);

  if (buf === false) {
    return false;
  }

  return sha1(buf);
};
//# sourceMappingURL=sha1_file.js-05c3682f588ae8efa5699eac7798af09.map";s:6:"digest";s:32:"73e92814b501dfae2b7e2d347981bffa";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/sha1_file.js.map";s:10:"publicPath";s:107:"/assets/@survos/api-grid/node_modules/locutus/php/strings/sha1_file.js-05c3682f588ae8efa5699eac7798af09.map";s:23:"publicPathWithoutDigest";s:74:"/assets/@survos/api-grid/node_modules/locutus/php/strings/sha1_file.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"05c3682f588ae8efa5699eac7798af09";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:66:"@survos/api-grid/node_modules/locutus/php/strings/sha1_file.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:62:"@survos/api-grid/node_modules/locutus/php/strings/sha1_file.js";}