O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:88:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/c/math/frexp.js";s:10:"publicPath";s:94:"/assets/@survos/api-grid/node_modules/locutus/c/math/frexp-d3f2a84f04255ab350b32eea5cccb852.js";s:23:"publicPathWithoutDigest";s:61:"/assets/@survos/api-grid/node_modules/locutus/c/math/frexp.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2798:""use strict";

module.exports = function frexp(arg) {
  //  discuss at: https://locutus.io/c/frexp/
  // original by: Oskar Larsson Högfeldt (https://oskar-lh.name/)
  //      note 1: Instead of
  //      note 1: double frexp( double arg, int* exp );
  //      note 1: this is built as
  //      note 1: [double, int] frexp( double arg );
  //      note 1: due to the lack of pointers in JavaScript.
  //      note 1: See code comments for further information.
  //   example 1: frexp(1)
  //   returns 1: [0.5, 1]
  //   example 2: frexp(1.5)
  //   returns 2: [0.75, 1]
  //   example 3: frexp(3 * Math.pow(2, 500))
  //   returns 3: [0.75, 502]
  //   example 4: frexp(-4)
  //   returns 4: [-0.5, 3]
  //   example 5: frexp(Number.MAX_VALUE)
  //   returns 5: [0.9999999999999999, 1024]
  //   example 6: frexp(Number.MIN_VALUE)
  //   returns 6: [0.5, -1073]
  //   example 7: frexp(-Infinity)
  //   returns 7: [-Infinity, 0]
  //   example 8: frexp(-0)
  //   returns 8: [-0, 0]
  //   example 9: frexp(NaN)
  //   returns 9: [NaN, 0]

  // Potential issue with this implementation:
  // the precisions of Math.pow and the ** operator are undefined in the ECMAScript standard,
  // however, sane implementations should give the same results for Math.pow(2, <integer>) operations

  // Like frexp of C and std::frexp of C++,
  // but returns an array instead of using a pointer argument for passing the exponent result.
  // Object.is(n, frexp(n)[0] * 2 ** frexp(n)[1]) for all number values of n except when Math.isFinite(n) && Math.abs(n) > 2**1023
  // Object.is(n, (2 * frexp(n)[0]) * 2 ** (frexp(n)[1] - 1)) for all number values of n
  // Object.is(n, frexp(n)[0]) for these values of n: 0, -0, NaN, Infinity, -Infinity
  // Math.abs(frexp(n)[0]) is >= 0.5 and < 1.0 for any other number-type value of n
  // See https://en.cppreference.com/w/c/numeric/math/frexp for a more detailed description

  arg = Number(arg);

  var result = [arg, 0];

  if (arg !== 0 && Number.isFinite(arg)) {
    var absArg = Math.abs(arg);
    // Math.log2 was introduced in ES2015, use it when available
    var log2 = Math.log2 || function log2(n) {
      return Math.log(n) * Math.LOG2E;
    };
    var exp = Math.max(-1023, Math.floor(log2(absArg)) + 1);
    var x = absArg * Math.pow(2, -exp);

    // These while loops compensate for rounding errors that sometimes occur because of ECMAScript's Math.log2's undefined precision
    // and also works around the issue of Math.pow(2, -exp) === Infinity when exp <= -1024
    while (x < 0.5) {
      x *= 2;
      exp--;
    }
    while (x >= 1) {
      x *= 0.5;
      exp++;
    }

    if (arg < 0) {
      x = -x;
    }
    result[0] = x;
    result[1] = exp;
  }
  return result;
};
//# sourceMappingURL=frexp.js-e948e4772be1f0b9f65a03fb4f3dcb90.map";s:6:"digest";s:32:"d3f2a84f04255ab350b32eea5cccb852";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:92:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/c/math/frexp.js.map";s:10:"publicPath";s:98:"/assets/@survos/api-grid/node_modules/locutus/c/math/frexp.js-e948e4772be1f0b9f65a03fb4f3dcb90.map";s:23:"publicPathWithoutDigest";s:65:"/assets/@survos/api-grid/node_modules/locutus/c/math/frexp.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"e948e4772be1f0b9f65a03fb4f3dcb90";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:57:"@survos/api-grid/node_modules/locutus/c/math/frexp.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:53:"@survos/api-grid/node_modules/locutus/c/math/frexp.js";}