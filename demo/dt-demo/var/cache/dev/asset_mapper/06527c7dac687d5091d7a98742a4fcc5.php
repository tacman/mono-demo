O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:105:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/bootstrap/js/dist/dom/selector-engine.js";s:10:"publicPath";s:111:"/assets/@survos/api-grid/node_modules/bootstrap/js/dist/dom/selector-engine-b4f3dc8bfa7d5dab3137a69efcdf3116.js";s:23:"publicPathWithoutDigest";s:78:"/assets/@survos/api-grid/node_modules/bootstrap/js/dist/dom/selector-engine.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2733:"/*!
  * Bootstrap selector-engine.js v5.2.3 (https://getbootstrap.com/)
  * Copyright 2011-2022 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
  */
(function (global, factory) {
  typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory(require('../util/index')) :
  typeof define === 'function' && define.amd ? define(['../util/index'], factory) :
  (global = typeof globalThis !== 'undefined' ? globalThis : global || self, global.SelectorEngine = factory(global.Index));
})(this, (function (index) { 'use strict';

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.2.3): dom/selector-engine.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * Constants
   */

  const SelectorEngine = {
    find(selector, element = document.documentElement) {
      return [].concat(...Element.prototype.querySelectorAll.call(element, selector));
    },

    findOne(selector, element = document.documentElement) {
      return Element.prototype.querySelector.call(element, selector);
    },

    children(element, selector) {
      return [].concat(...element.children).filter(child => child.matches(selector));
    },

    parents(element, selector) {
      const parents = [];
      let ancestor = element.parentNode.closest(selector);

      while (ancestor) {
        parents.push(ancestor);
        ancestor = ancestor.parentNode.closest(selector);
      }

      return parents;
    },

    prev(element, selector) {
      let previous = element.previousElementSibling;

      while (previous) {
        if (previous.matches(selector)) {
          return [previous];
        }

        previous = previous.previousElementSibling;
      }

      return [];
    },

    // TODO: this is now unused; remove later along with prev()
    next(element, selector) {
      let next = element.nextElementSibling;

      while (next) {
        if (next.matches(selector)) {
          return [next];
        }

        next = next.nextElementSibling;
      }

      return [];
    },

    focusableChildren(element) {
      const focusables = ['a', 'button', 'input', 'textarea', 'select', 'details', '[tabindex]', '[contenteditable="true"]'].map(selector => `${selector}:not([tabindex^="-"])`).join(',');
      return this.find(focusables, element).filter(el => !index.isDisabled(el) && index.isVisible(el));
    }

  };

  return SelectorEngine;

}));
//# sourceMappingURL=selector-engine.js-cac033c80215b1c9583e8847899b07c9.map
";s:6:"digest";s:32:"b4f3dc8bfa7d5dab3137a69efcdf3116";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:109:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/bootstrap/js/dist/dom/selector-engine.js.map";s:10:"publicPath";s:115:"/assets/@survos/api-grid/node_modules/bootstrap/js/dist/dom/selector-engine.js-cac033c80215b1c9583e8847899b07c9.map";s:23:"publicPathWithoutDigest";s:82:"/assets/@survos/api-grid/node_modules/bootstrap/js/dist/dom/selector-engine.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"cac033c80215b1c9583e8847899b07c9";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:74:"@survos/api-grid/node_modules/bootstrap/js/dist/dom/selector-engine.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:70:"@survos/api-grid/node_modules/bootstrap/js/dist/dom/selector-engine.js";}