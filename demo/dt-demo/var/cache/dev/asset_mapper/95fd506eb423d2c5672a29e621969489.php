O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/network/ip2long.js";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/network/ip2long-bceb40c11a042be07889d81fc235905f.js";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/network/ip2long.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1820:"'use strict';

module.exports = function ip2long(argIP) {
  //  discuss at: https://locutus.io/php/ip2long/
  // original by: Waldo Malqui Silva (https://waldo.malqui.info)
  // improved by: Victor
  //  revised by: fearphage (https://my.opera.com/fearphage/)
  //  revised by: Theriault (https://github.com/Theriault)
  //    estarget: es2015
  //   example 1: ip2long('192.0.34.166')
  //   returns 1: 3221234342
  //   example 2: ip2long('0.0xABCDEF')
  //   returns 2: 11259375
  //   example 3: ip2long('255.255.255.256')
  //   returns 3: false

  var i = 0;
  // PHP allows decimal, octal, and hexadecimal IP components.
  // PHP allows between 1 (e.g. 127) to 4 (e.g 127.0.0.1) components.

  var pattern = new RegExp(['^([1-9]\\d*|0[0-7]*|0x[\\da-f]+)', '(?:\\.([1-9]\\d*|0[0-7]*|0x[\\da-f]+))?', '(?:\\.([1-9]\\d*|0[0-7]*|0x[\\da-f]+))?', '(?:\\.([1-9]\\d*|0[0-7]*|0x[\\da-f]+))?$'].join(''), 'i');

  argIP = argIP.match(pattern); // Verify argIP format.
  if (!argIP) {
    // Invalid format.
    return false;
  }
  // Reuse argIP variable for component counter.
  argIP[0] = 0;
  for (i = 1; i < 5; i += 1) {
    argIP[0] += !!(argIP[i] || '').length;
    argIP[i] = parseInt(argIP[i]) || 0;
  }
  // Continue to use argIP for overflow values.
  // PHP does not allow any component to overflow.
  argIP.push(256, 256, 256, 256);
  // Recalculate overflow of last component supplied to make up for missing components.
  argIP[4 + argIP[0]] *= Math.pow(256, 4 - argIP[0]);
  if (argIP[1] >= argIP[5] || argIP[2] >= argIP[6] || argIP[3] >= argIP[7] || argIP[4] >= argIP[8]) {
    return false;
  }

  return argIP[1] * (argIP[0] === 1 || 16777216) + argIP[2] * (argIP[0] <= 2 || 65536) + argIP[3] * (argIP[0] <= 3 || 256) + argIP[4] * 1;
};
//# sourceMappingURL=ip2long.js-e89095ab444e96646da9c176fda82c8c.map";s:6:"digest";s:32:"bceb40c11a042be07889d81fc235905f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/network/ip2long.js.map";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/network/ip2long.js-e89095ab444e96646da9c176fda82c8c.map";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/network/ip2long.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"e89095ab444e96646da9c176fda82c8c";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/network/ip2long.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/network/ip2long.js";}