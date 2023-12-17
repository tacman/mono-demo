O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/md5_file.js";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/php/strings/md5_file-4eec0826a3f90a46db75cc1913f76c27.js";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/php/strings/md5_file.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1029:"'use strict';

module.exports = function md5_file(str_filename) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/md5_file/
  // original by: Kevin van Zonneveld (https://kvz.io)
  //    input by: Brett Zamir (https://brett-zamir.me)
  // bugfixed by: Kevin van Zonneveld (https://kvz.io)
  //      note 1: Relies on file_get_contents which does not work in the browser, so Node only.
  //      note 2: Keep in mind that in accordance with PHP, the whole file is buffered and then
  //      note 2: hashed. We'd recommend Node's native crypto modules for faster and more
  //      note 2: efficient hashing
  //   example 1: md5_file('test/never-change.txt')
  //   returns 1: 'bc3aa724b0ec7dce4c26e7f4d0d9b064'

  var fileGetContents = require('../filesystem/file_get_contents');
  var md5 = require('../strings/md5');
  var buf = fileGetContents(str_filename);

  if (buf === false) {
    return false;
  }

  return md5(buf);
};
//# sourceMappingURL=md5_file.js-cf0aa0ecf7c899b012a337e01ebacfe6.map";s:6:"digest";s:32:"4eec0826a3f90a46db75cc1913f76c27";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/md5_file.js.map";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/strings/md5_file.js-cf0aa0ecf7c899b012a337e01ebacfe6.map";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/strings/md5_file.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"cf0aa0ecf7c899b012a337e01ebacfe6";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/strings/md5_file.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/php/strings/md5_file.js";}