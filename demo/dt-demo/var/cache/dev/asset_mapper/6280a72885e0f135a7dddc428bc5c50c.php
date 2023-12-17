O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:90:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/bc/bcround.js";s:10:"publicPath";s:96:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcround-eb22c43b5baf7109fd4871b7927c6c89.js";s:23:"publicPathWithoutDigest";s:63:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcround.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1687:"'use strict';

module.exports = function bcround(val, precision) {
  //  discuss at: https://locutus.io/php/bcround/
  // original by: lmeyrick (https://sourceforge.net/projects/bcmath-js/)
  //   example 1: bcround(1, 2)
  //   returns 1: '1.00'

  var _bc = require('../_helpers/_bc');
  var libbcmath = _bc();

  var temp = void 0,
      result = void 0,
      digit = void 0;
  var rightOperand = void 0;

  // create number
  temp = libbcmath.bc_init_num();
  temp = libbcmath.php_str2num(val.toString());

  // check if any rounding needs
  if (precision >= temp.n_scale) {
    // nothing to round, just add the zeros.
    while (temp.n_scale < precision) {
      temp.n_value[temp.n_len + temp.n_scale] = 0;
      temp.n_scale++;
    }
    return temp.toString();
  }

  // get the digit we are checking (1 after the precision)
  // loop through digits after the precision marker
  digit = temp.n_value[temp.n_len + precision];

  rightOperand = libbcmath.bc_init_num();
  rightOperand = libbcmath.bc_new_num(1, precision);

  if (digit >= 5) {
    // round away from zero by adding 1 (or -1) at the "precision"..
    // ie 1.44999 @ 3dp = (1.44999 + 0.001).toString().substr(0,5)
    rightOperand.n_value[rightOperand.n_len + rightOperand.n_scale - 1] = 1;
    if (temp.n_sign === libbcmath.MINUS) {
      // round down
      rightOperand.n_sign = libbcmath.MINUS;
    }
    result = libbcmath.bc_add(temp, rightOperand, precision);
  } else {
    // leave-as-is.. just truncate it.
    result = temp;
  }

  if (result.n_scale > precision) {
    result.n_scale = precision;
  }

  return result.toString();
};
//# sourceMappingURL=bcround.js-ace7b8d847e9c004ac2966ee09b3b66c.map";s:6:"digest";s:32:"eb22c43b5baf7109fd4871b7927c6c89";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/bc/bcround.js.map";s:10:"publicPath";s:100:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcround.js-ace7b8d847e9c004ac2966ee09b3b66c.map";s:23:"publicPathWithoutDigest";s:67:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcround.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"ace7b8d847e9c004ac2966ee09b3b66c";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:59:"@survos/api-grid/node_modules/locutus/php/bc/bcround.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:55:"@survos/api-grid/node_modules/locutus/php/bc/bcround.js";}