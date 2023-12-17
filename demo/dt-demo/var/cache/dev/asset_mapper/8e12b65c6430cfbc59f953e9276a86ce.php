O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/datetime/date_parse.js";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/date_parse-253c92cd291b609e7b473134287c42ef.js";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/date_parse.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1013:"'use strict';

module.exports = function date_parse(date) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/date_parse/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: date_parse('2006-12-12 10:00:00')
  //   returns 1: {year : 2006, month: 12, day: 12, hour: 10, minute: 0, second: 0, fraction: 0, is_localtime: false}

  var strtotime = require('../datetime/strtotime');
  var ts = void 0;

  try {
    ts = strtotime(date);
  } catch (e) {
    ts = false;
  }

  if (!ts) {
    return false;
  }

  var dt = new Date(ts * 1000);

  var retObj = {};

  retObj.year = dt.getFullYear();
  retObj.month = dt.getMonth() + 1;
  retObj.day = dt.getDate();
  retObj.hour = dt.getHours();
  retObj.minute = dt.getMinutes();
  retObj.second = dt.getSeconds();
  retObj.fraction = parseFloat('0.' + dt.getMilliseconds());
  retObj.is_localtime = dt.getTimezoneOffset() !== 0;

  return retObj;
};
//# sourceMappingURL=date_parse.js-95b24375f25f7ff2bffaae4f052d8edf.map";s:6:"digest";s:32:"253c92cd291b609e7b473134287c42ef";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/datetime/date_parse.js.map";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/date_parse.js-95b24375f25f7ff2bffaae4f052d8edf.map";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/date_parse.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"95b24375f25f7ff2bffaae4f052d8edf";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/datetime/date_parse.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/datetime/date_parse.js";}