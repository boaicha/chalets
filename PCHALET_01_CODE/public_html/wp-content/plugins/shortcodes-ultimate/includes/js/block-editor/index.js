!function n(o,c,i){function l(t,e){if(!c[t]){if(!o[t]){var r="function"==typeof require&&require;if(!e&&r)return r(t,!0);if(u)return u(t,!0);throw(r=new Error("Cannot find module '"+t+"'")).code="MODULE_NOT_FOUND",r}r=c[t]={exports:{}},o[t][0].call(r.exports,function(e){return l(o[t][1][e]||e)},r,r.exports,n,o,c,i)}return c[t].exports}for(var u="function"==typeof require&&require,e=0;e<i.length;e++)l(i[e]);return l}({1:[function(e,t,r){"use strict";var n=wp.element.Fragment,o=wp.blockEditor.BlockControls,c=wp.components,i=c.SVG,l=c.Path;wp.hooks.addFilter("editor.BlockEdit","shortcodes-ultimate/with-insert-shortcode-button",function(t){return function(e){return-1===SUBlockEditorSettings.supportedBlocks.indexOf(e.name)?React.createElement(t,e):React.createElement(n,null,React.createElement(t,e),React.createElement(o,{controls:[{icon:React.createElement(i,{viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},React.createElement(l,{d:"m3 3h5.833v2.333h-3.5v9.334h3.5v2.333h-5.833zm8.167 0h5.833v14h-5.833v-2.333h3.5v-9.334h-3.5z"})),title:SUBlockEditorL10n.insertShortcode,onClick:function(){window.SUG.App.insert("block",{props:e})}}]}))}})},{}]},{},[1]);
//# sourceMappingURL=index.js.map
