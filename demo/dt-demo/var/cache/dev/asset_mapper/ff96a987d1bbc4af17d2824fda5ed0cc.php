O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:88:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/bc/bcadd.js";s:10:"publicPath";s:94:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcadd-cdf44f7b0ba70c7521119bbeed8c710b.js";s:23:"publicPathWithoutDigest";s:61:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcadd.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1166:"'use strict';

module.exports = function bcadd(leftOperand, rightOperand, scale) {
  //  discuss at: https://locutus.io/php/bcadd/
  // original by: lmeyrick (https://sourceforge.net/projects/bcmath-js/)
  //   example 1: bcadd('1', '2')
  //   returns 1: '3'
  //   example 2: bcadd('-1', '5', 4)
  //   returns 2: '4.0000'
  //   example 3: bcadd('1928372132132819737213', '8728932001983192837219398127471', 2)
  //   returns 3: '8728932003911564969352217864684.00'

  var bc = require('../_helpers/_bc');
  var libbcmath = bc();

  var first = void 0,
      second = void 0,
      result = void 0;

  if (typeof scale === 'undefined') {
    scale = libbcmath.scale;
  }
  scale = scale < 0 ? 0 : scale;

  // create objects
  first = libbcmath.bc_init_num();
  second = libbcmath.bc_init_num();
  result = libbcmath.bc_init_num();

  first = libbcmath.php_str2num(leftOperand.toString());
  second = libbcmath.php_str2num(rightOperand.toString());

  result = libbcmath.bc_add(first, second, scale);

  if (result.n_scale > scale) {
    result.n_scale = scale;
  }

  return result.toString();
};
//# sourceMappingURL=bcadd.js-40d30c93fb6ace6ee3ec76616053f315.map";s:6:"digest";s:32:"cdf44f7b0ba70c7521119bbeed8c710b";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:92:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/bc/bcadd.js.map";s:10:"publicPath";s:98:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcadd.js-40d30c93fb6ace6ee3ec76616053f315.map";s:23:"publicPathWithoutDigest";s:65:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcadd.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"40d30c93fb6ace6ee3ec76616053f315";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:57:"@survos/api-grid/node_modules/locutus/php/bc/bcadd.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:53:"@survos/api-grid/node_modules/locutus/php/bc/bcadd.js";}