var c=function(n){return{type:"backend",init:function(i,o,t){},read:function(i,o,t){if(typeof n=="function"){if(n.length<3){try{var r=n(i,o);r&&typeof r.then=="function"?r.then(function(e){return t(null,e&&e.default||e)}).catch(t):t(null,r)}catch(e){t(e)}return}n(i,o,t);return}t(null,n&&n[i]&&n[i][o])}}};export{c as r};
