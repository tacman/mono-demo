O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:110:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/bootstrap/js/dist/util/component-functions.js";s:10:"publicPath";s:116:"/assets/@survos/api-grid/node_modules/bootstrap/js/dist/util/component-functions-20fc8aca32a2a89448b09285853534e5.js";s:23:"publicPathWithoutDigest";s:83:"/assets/@survos/api-grid/node_modules/bootstrap/js/dist/util/component-functions.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2207:"/*!
  * Bootstrap component-functions.js v5.2.3 (https://getbootstrap.com/)
  * Copyright 2011-2022 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
  */
(function (global, factory) {
  typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports, require('../dom/event-handler'), require('./index')) :
  typeof define === 'function' && define.amd ? define(['exports', '../dom/event-handler', './index'], factory) :
  (global = typeof globalThis !== 'undefined' ? globalThis : global || self, factory(global.ComponentFunctions = {}, global.EventHandler, global.Index));
})(this, (function (exports, EventHandler, index) { 'use strict';

  const _interopDefaultLegacy = e => e && typeof e === 'object' && 'default' in e ? e : { default: e };

  const EventHandler__default = /*#__PURE__*/_interopDefaultLegacy(EventHandler);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.2.3): util/component-functions.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */

  const enableDismissTrigger = (component, method = 'hide') => {
    const clickEvent = `click.dismiss${component.EVENT_KEY}`;
    const name = component.NAME;
    EventHandler__default.default.on(document, clickEvent, `[data-bs-dismiss="${name}"]`, function (event) {
      if (['A', 'AREA'].includes(this.tagName)) {
        event.preventDefault();
      }

      if (index.isDisabled(this)) {
        return;
      }

      const target = index.getElementFromSelector(this) || this.closest(`.${name}`);
      const instance = component.getOrCreateInstance(target); // Method argument is left, for Alert and only, as it doesn't implement the 'hide' method

      instance[method]();
    });
  };

  exports.enableDismissTrigger = enableDismissTrigger;

  Object.defineProperties(exports, { __esModule: { value: true }, [Symbol.toStringTag]: { value: 'Module' } });

}));
//# sourceMappingURL=component-functions.js-ae096af8518894dcbe5ff0c736c5ae03.map
";s:6:"digest";s:32:"20fc8aca32a2a89448b09285853534e5";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:114:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/bootstrap/js/dist/util/component-functions.js.map";s:10:"publicPath";s:120:"/assets/@survos/api-grid/node_modules/bootstrap/js/dist/util/component-functions.js-ae096af8518894dcbe5ff0c736c5ae03.map";s:23:"publicPathWithoutDigest";s:87:"/assets/@survos/api-grid/node_modules/bootstrap/js/dist/util/component-functions.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"ae096af8518894dcbe5ff0c736c5ae03";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:79:"@survos/api-grid/node_modules/bootstrap/js/dist/util/component-functions.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:75:"@survos/api-grid/node_modules/bootstrap/js/dist/util/component-functions.js";}