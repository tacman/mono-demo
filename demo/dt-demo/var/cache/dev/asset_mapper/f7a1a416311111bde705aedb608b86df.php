O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:89:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/bc/bccomp.js";s:10:"publicPath";s:95:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bccomp-19f00f010bfc8195358fa8b2427308cc.js";s:23:"publicPathWithoutDigest";s:62:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bccomp.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1124:"'use strict';

module.exports = function bccomp(leftOperand, rightOperand, scale) {
  //  discuss at: https://locutus.io/php/bccomp/
  // original by: lmeyrick (https://sourceforge.net/projects/bcmath-js/)
  //   example 1: bccomp('-1', '5', 4)
  //   returns 1: -1
  //   example 2: bccomp('1928372132132819737213', '8728932001983192837219398127471')
  //   returns 2: -1
  //   example 3: bccomp('1.00000000000000000001', '1', 2)
  //   returns 3: 0
  //   example 4: bccomp('97321', '2321')
  //   returns 4: 1

  var bc = require('../_helpers/_bc');
  var libbcmath = bc();

  // bc_num
  var first = void 0,
      second = void 0;
  if (typeof scale === 'undefined') {
    scale = libbcmath.scale;
  }
  scale = scale < 0 ? 0 : scale;

  first = libbcmath.bc_init_num();
  second = libbcmath.bc_init_num();

  // note bc_ not php_str2num
  first = libbcmath.bc_str2num(leftOperand.toString(), scale);
  // note bc_ not php_str2num
  second = libbcmath.bc_str2num(rightOperand.toString(), scale);
  return libbcmath.bc_compare(first, second, scale);
};
//# sourceMappingURL=bccomp.js-7500f8e603a8ce3c49130467683529a6.map";s:6:"digest";s:32:"19f00f010bfc8195358fa8b2427308cc";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:93:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/bc/bccomp.js.map";s:10:"publicPath";s:99:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bccomp.js-7500f8e603a8ce3c49130467683529a6.map";s:23:"publicPathWithoutDigest";s:66:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bccomp.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"7500f8e603a8ce3c49130467683529a6";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:58:"@survos/api-grid/node_modules/locutus/php/bc/bccomp.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:54:"@survos/api-grid/node_modules/locutus/php/bc/bccomp.js";}