O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:90:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/strval.js";s:10:"publicPath";s:96:"/assets/@survos/api-grid/node_modules/locutus/php/var/strval-6bcff03aae5f3217bdbd1d69cc8c0c26.js";s:23:"publicPathWithoutDigest";s:63:"/assets/@survos/api-grid/node_modules/locutus/php/var/strval.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:861:"'use strict';

module.exports = function strval(str) {
  //  discuss at: https://locutus.io/php/strval/
  // original by: Brett Zamir (https://brett-zamir.me)
  // improved by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  //   example 1: strval({red: 1, green: 2, blue: 3, white: 4})
  //   returns 1: 'Object'

  var gettype = require('../var/gettype');
  var type = '';

  if (str === null) {
    return '';
  }

  type = gettype(str);

  // Comment out the entire switch if you want JS-like
  // behavior instead of PHP behavior
  switch (type) {
    case 'boolean':
      if (str === true) {
        return '1';
      }
      return '';
    case 'array':
      return 'Array';
    case 'object':
      return 'Object';
  }

  return str;
};
//# sourceMappingURL=strval.js-a94d847236cd8747b986b328a0edadd9.map";s:6:"digest";s:32:"6bcff03aae5f3217bdbd1d69cc8c0c26";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/strval.js.map";s:10:"publicPath";s:100:"/assets/@survos/api-grid/node_modules/locutus/php/var/strval.js-a94d847236cd8747b986b328a0edadd9.map";s:23:"publicPathWithoutDigest";s:67:"/assets/@survos/api-grid/node_modules/locutus/php/var/strval.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"a94d847236cd8747b986b328a0edadd9";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:59:"@survos/api-grid/node_modules/locutus/php/var/strval.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:55:"@survos/api-grid/node_modules/locutus/php/var/strval.js";}