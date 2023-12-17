O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/info/version_compare.js";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/info/version_compare-0cd90d10aace9cc3d3bcec7514118fbf.js";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/info/version_compare.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:3666:"'use strict';

module.exports = function version_compare(v1, v2, operator) {
  // eslint-disable-line camelcase
  //       discuss at: https://locutus.io/php/version_compare/
  //      original by: Philippe Jausions (https://pear.php.net/user/jausions)
  //      original by: Aidan Lister (https://aidanlister.com/)
  // reimplemented by: Kankrelune (https://www.webfaktory.info/)
  //      improved by: Brett Zamir (https://brett-zamir.me)
  //      improved by: Scott Baker
  //      improved by: Theriault (https://github.com/Theriault)
  //        example 1: version_compare('8.2.5rc', '8.2.5a')
  //        returns 1: 1
  //        example 2: version_compare('8.2.50', '8.2.52', '<')
  //        returns 2: true
  //        example 3: version_compare('5.3.0-dev', '5.3.0')
  //        returns 3: -1
  //        example 4: version_compare('4.1.0.52','4.01.0.51')
  //        returns 4: 1

  // Important: compare must be initialized at 0.
  var i = void 0;
  var x = void 0;
  var compare = 0;

  // vm maps textual PHP versions to negatives so they're less than 0.
  // PHP currently defines these as CASE-SENSITIVE. It is important to
  // leave these as negatives so that they can come before numerical versions
  // and as if no letters were there to begin with.
  // (1alpha is < 1 and < 1.1 but > 1dev1)
  // If a non-numerical value can't be mapped to this table, it receives
  // -7 as its value.
  var vm = {
    dev: -6,
    alpha: -5,
    a: -5,
    beta: -4,
    b: -4,
    RC: -3,
    rc: -3,
    '#': -2,
    p: 1,
    pl: 1

    // This function will be called to prepare each version argument.
    // It replaces every _, -, and + with a dot.
    // It surrounds any nonsequence of numbers/dots with dots.
    // It replaces sequences of dots with a single dot.
    //    version_compare('4..0', '4.0') === 0
    // Important: A string of 0 length needs to be converted into a value
    // even less than an unexisting value in vm (-7), hence [-8].
    // It's also important to not strip spaces because of this.
    //   version_compare('', ' ') === 1
  };var _prepVersion = function _prepVersion(v) {
    v = ('' + v).replace(/[_\-+]/g, '.');
    v = v.replace(/([^.\d]+)/g, '.$1.').replace(/\.{2,}/g, '.');
    return !v.length ? [-8] : v.split('.');
  };
  // This converts a version component to a number.
  // Empty component becomes 0.
  // Non-numerical component becomes a negative number.
  // Numerical component becomes itself as an integer.
  var _numVersion = function _numVersion(v) {
    return !v ? 0 : isNaN(v) ? vm[v] || -7 : parseInt(v, 10);
  };

  v1 = _prepVersion(v1);
  v2 = _prepVersion(v2);
  x = Math.max(v1.length, v2.length);
  for (i = 0; i < x; i++) {
    if (v1[i] === v2[i]) {
      continue;
    }
    v1[i] = _numVersion(v1[i]);
    v2[i] = _numVersion(v2[i]);
    if (v1[i] < v2[i]) {
      compare = -1;
      break;
    } else if (v1[i] > v2[i]) {
      compare = 1;
      break;
    }
  }
  if (!operator) {
    return compare;
  }

  // Important: operator is CASE-SENSITIVE.
  // "No operator" seems to be treated as "<."
  // Any other values seem to make the function return null.
  switch (operator) {
    case '>':
    case 'gt':
      return compare > 0;
    case '>=':
    case 'ge':
      return compare >= 0;
    case '<=':
    case 'le':
      return compare <= 0;
    case '===':
    case '=':
    case 'eq':
      return compare === 0;
    case '<>':
    case '!==':
    case 'ne':
      return compare !== 0;
    case '':
    case '<':
    case 'lt':
      return compare < 0;
    default:
      return null;
  }
};
//# sourceMappingURL=version_compare.js-fa0215302ccf1eb384d3a9fbae61793e.map";s:6:"digest";s:32:"0cd90d10aace9cc3d3bcec7514118fbf";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:104:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/info/version_compare.js.map";s:10:"publicPath";s:110:"/assets/@survos/api-grid/node_modules/locutus/php/info/version_compare.js-fa0215302ccf1eb384d3a9fbae61793e.map";s:23:"publicPathWithoutDigest";s:77:"/assets/@survos/api-grid/node_modules/locutus/php/info/version_compare.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"fa0215302ccf1eb384d3a9fbae61793e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:69:"@survos/api-grid/node_modules/locutus/php/info/version_compare.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/info/version_compare.js";}