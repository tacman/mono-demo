O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/datetime/gettimeofday.js";s:10:"publicPath";s:107:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/gettimeofday-70a1545237b51be181d6166a383eeac4.js";s:23:"publicPathWithoutDigest";s:74:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/gettimeofday.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1332:""use strict";

module.exports = function gettimeofday(returnFloat) {
  //  discuss at: https://locutus.io/php/gettimeofday/
  // original by: Brett Zamir (https://brett-zamir.me)
  // original by: Josh Fraser (https://onlineaspect.com/2007/06/08/auto-detect-a-time-zone-with-javascript/)
  //    parts by: Breaking Par Consulting Inc (https://www.breakingpar.com/bkp/home.nsf/0/87256B280015193F87256CFB006C45F7)
  //  revised by: Theriault (https://github.com/Theriault)
  //   example 1: var $obj = gettimeofday()
  //   example 1: var $result = ('sec' in $obj && 'usec' in $obj && 'minuteswest' in $obj &&80, 'dsttime' in $obj)
  //   returns 1: true
  //   example 2: var $timeStamp = gettimeofday(true)
  //   example 2: var $result = $timeStamp > 1000000000 && $timeStamp < 2000000000
  //   returns 2: true

  var t = new Date();
  var y = 0;

  if (returnFloat) {
    return t.getTime() / 1000;
  }

  // Store current year.
  y = t.getFullYear();
  return {
    sec: t.getUTCSeconds(),
    usec: t.getUTCMilliseconds() * 1000,
    minuteswest: t.getTimezoneOffset(),
    // Compare Jan 1 minus Jan 1 UTC to Jul 1 minus Jul 1 UTC to see if DST is observed.
    dsttime: 0 + (new Date(y, 0) - Date.UTC(y, 0) !== new Date(y, 6) - Date.UTC(y, 6))
  };
};
//# sourceMappingURL=gettimeofday.js-7672304099d9953b88f7cf5c03105c4c.map";s:6:"digest";s:32:"70a1545237b51be181d6166a383eeac4";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:105:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/datetime/gettimeofday.js.map";s:10:"publicPath";s:111:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/gettimeofday.js-7672304099d9953b88f7cf5c03105c4c.map";s:23:"publicPathWithoutDigest";s:78:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/gettimeofday.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"7672304099d9953b88f7cf5c03105c4c";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:70:"@survos/api-grid/node_modules/locutus/php/datetime/gettimeofday.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:66:"@survos/api-grid/node_modules/locutus/php/datetime/gettimeofday.js";}