O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/str_ireplace.js";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_ireplace-5d87952718e19b4f55b2ecef15050f8e.js";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_ireplace.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:3302:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function str_ireplace(search, replace, subject, countObj) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/str_ireplace/
  // original by: Glen Arason (https://CanadianDomainRegistry.ca)
  // bugfixed by: Mahmoud Saeed
  //      note 1: Case-insensitive version of str_replace()
  //      note 1: Compliant with PHP 5.0 str_ireplace() Full details at:
  //      note 1: https://ca3.php.net/manual/en/function.str-ireplace.php
  //      note 2: The countObj parameter (optional) if used must be passed in as a
  //      note 2: object. The count will then be written by reference into it's `value` property
  //   example 1: str_ireplace('M', 'e', 'name')
  //   returns 1: 'naee'
  //   example 2: var $countObj = {}
  //   example 2: str_ireplace('M', 'e', 'name', $countObj)
  //   example 2: var $result = $countObj.value
  //   returns 2: 1
  //   example 3: str_ireplace('', '.', 'aaa')
  //   returns 3: 'aaa'

  var i = 0;
  var j = 0;
  var temp = '';
  var repl = '';
  var sl = 0;
  var fl = 0;
  var f = '';
  var r = '';
  var s = '';
  var ra = '';
  var otemp = '';
  var oi = '';
  var ofjl = '';
  var os = subject;
  var osa = Object.prototype.toString.call(os) === '[object Array]';
  // var sa = ''

  if ((typeof search === 'undefined' ? 'undefined' : _typeof(search)) === 'object') {
    temp = search;
    search = [];
    for (i = 0; i < temp.length; i += 1) {
      search[i] = temp[i].toLowerCase();
    }
  } else {
    search = search.toLowerCase();
  }

  if ((typeof subject === 'undefined' ? 'undefined' : _typeof(subject)) === 'object') {
    temp = subject;
    subject = [];
    for (i = 0; i < temp.length; i += 1) {
      subject[i] = temp[i].toLowerCase();
    }
  } else {
    subject = subject.toLowerCase();
  }

  if ((typeof search === 'undefined' ? 'undefined' : _typeof(search)) === 'object' && typeof replace === 'string') {
    temp = replace;
    replace = [];
    for (i = 0; i < search.length; i += 1) {
      replace[i] = temp;
    }
  }

  temp = '';
  f = [].concat(search);
  r = [].concat(replace);
  ra = Object.prototype.toString.call(r) === '[object Array]';
  s = subject;
  // sa = Object.prototype.toString.call(s) === '[object Array]'
  s = [].concat(s);
  os = [].concat(os);

  if (countObj) {
    countObj.value = 0;
  }

  for (i = 0, sl = s.length; i < sl; i++) {
    if (s[i] === '') {
      continue;
    }
    for (j = 0, fl = f.length; j < fl; j++) {
      if (f[j] === '') {
        continue;
      }
      temp = s[i] + '';
      repl = ra ? r[j] !== undefined ? r[j] : '' : r[0];
      s[i] = temp.split(f[j]).join(repl);
      otemp = os[i] + '';
      oi = temp.indexOf(f[j]);
      ofjl = f[j].length;
      if (oi >= 0) {
        os[i] = otemp.split(otemp.substr(oi, ofjl)).join(repl);
      }

      if (countObj) {
        countObj.value += temp.split(f[j]).length - 1;
      }
    }
  }

  return osa ? os : os[0];
};
//# sourceMappingURL=str_ireplace.js-801769f3aa94d6c5fc4d9f48ec649b77.map";s:6:"digest";s:32:"5d87952718e19b4f55b2ecef15050f8e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:104:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/str_ireplace.js.map";s:10:"publicPath";s:110:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_ireplace.js-801769f3aa94d6c5fc4d9f48ec649b77.map";s:23:"publicPathWithoutDigest";s:77:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_ireplace.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"801769f3aa94d6c5fc4d9f48ec649b77";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:69:"@survos/api-grid/node_modules/locutus/php/strings/str_ireplace.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/strings/str_ireplace.js";}