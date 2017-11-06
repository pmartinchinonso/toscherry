(function(d){"function"===typeof define&&define.amd?define(["jquery"],d):"object"===typeof module&&module.exports?module.exports=d(require("jquery")):d(jQuery)})(function(d){var q=Array.prototype.slice,u=Array.prototype.splice,n={topSpacing:0,bottomSpacing:0,className:"is-sticky",wrapperClassName:"sticky-wrapper",center:!1,getWidthFrom:"",widthFromWrapper:!0,responsiveWidth:!1,zIndex:"auto"},p=d(window),v=d(document),l=[],r=p.height(),k=function(){var b=p.scrollTop(),f=v.height(),c=f-r;c=b>c?c-b:
0;for(var e=0,g=l.length;e<g;e++){var a=l[e],h=a.stickyWrapper.offset().top-a.topSpacing-c;a.stickyWrapper.css("height",a.stickyElement.outerHeight());if(b<=h)null!==a.currentTop&&(a.stickyElement.css({width:"",position:"",top:"","z-index":""}),a.stickyElement.parent().removeClass(a.className),a.stickyElement.trigger("sticky-end",[a]),a.currentTop=null);else{h=f-a.stickyElement.outerHeight()-a.topSpacing-a.bottomSpacing-b-c;h=0>h?h+a.topSpacing:a.topSpacing;if(a.currentTop!==h){var m;a.getWidthFrom?
m=d(a.getWidthFrom).width()||null:a.widthFromWrapper&&(m=a.stickyWrapper.width());null==m&&(m=a.stickyElement.width());a.stickyElement.css("width",m).css("position","fixed").css("top",h).css("z-index",a.zIndex);a.stickyElement.parent().addClass(a.className);null===a.currentTop?a.stickyElement.trigger("sticky-start",[a]):a.stickyElement.trigger("sticky-update",[a]);a.currentTop===a.topSpacing&&a.currentTop>h||null===a.currentTop&&h<a.topSpacing?a.stickyElement.trigger("sticky-bottom-reached",[a]):
null!==a.currentTop&&h===a.topSpacing&&a.currentTop<h&&a.stickyElement.trigger("sticky-bottom-unreached",[a]);a.currentTop=h}var k=a.stickyWrapper.parent();a.stickyElement.offset().top+a.stickyElement.outerHeight()>=k.offset().top+k.outerHeight()&&a.stickyElement.offset().top<=a.topSpacing?a.stickyElement.css("position","absolute").css("top","").css("bottom",0).css("z-index",""):a.stickyElement.css("position","fixed").css("top",h).css("bottom","").css("z-index",a.zIndex)}}},t=function(){r=p.height();
for(var b=0,f=l.length;b<f;b++){var c=l[b],e=null;c.getWidthFrom?c.responsiveWidth&&(e=d(c.getWidthFrom).width()):c.widthFromWrapper&&(e=c.stickyWrapper.width());null!=e&&c.stickyElement.css("width",e)}},g={init:function(b){return this.each(function(){var f=d.extend({},n,b),c=d(this),e=c.attr("id"),k=e?e+"-"+n.wrapperClassName:n.wrapperClassName,a=d("<div></div>").attr("id",k).addClass(f.wrapperClassName);c.wrapAll(function(){if(0==d(this).parent("#"+k).length)return a});e=c.parent();f.center&&e.css({width:c.outerWidth(),
marginLeft:"auto",marginRight:"auto"});"right"===c.css("float")&&c.css({"float":"none"}).parent().css({"float":"right"});f.stickyElement=c;f.stickyWrapper=e;f.currentTop=null;l.push(f);g.setWrapperHeight(this);g.setupChangeListeners(this)})},setWrapperHeight:function(b){b=d(b);var f=b.parent();f&&f.css("height",b.outerHeight())},setupChangeListeners:function(b){window.MutationObserver?(new window.MutationObserver(function(f){(f[0].addedNodes.length||f[0].removedNodes.length)&&g.setWrapperHeight(b)})).observe(b,
{subtree:!0,childList:!0}):window.addEventListener?(b.addEventListener("DOMNodeInserted",function(){g.setWrapperHeight(b)},!1),b.addEventListener("DOMNodeRemoved",function(){g.setWrapperHeight(b)},!1)):window.attachEvent&&(b.attachEvent("onDOMNodeInserted",function(){g.setWrapperHeight(b)}),b.attachEvent("onDOMNodeRemoved",function(){g.setWrapperHeight(b)}))},update:k,unstick:function(b){return this.each(function(){for(var b=d(this),c=-1,e=l.length;0<e--;)l[e].stickyElement.get(0)===this&&(u.call(l,
e,1),c=e);-1!==c&&(b.unwrap(),b.css({width:"",position:"",top:"","float":"","z-index":""}))})}};window.addEventListener?(window.addEventListener("scroll",k,!1),window.addEventListener("resize",t,!1)):window.attachEvent&&(window.attachEvent("onscroll",k),window.attachEvent("onresize",t));d.fn.sticky=function(b){if(g[b])return g[b].apply(this,q.call(arguments,1));if("object"!==typeof b&&b)d.error("Method "+b+" does not exist on jQuery.sticky");else return g.init.apply(this,arguments)};d.fn.unstick=
function(b){if(g[b])return g[b].apply(this,q.call(arguments,1));if("object"!==typeof b&&b)d.error("Method "+b+" does not exist on jQuery.sticky");else return g.unstick.apply(this,arguments)};d(function(){setTimeout(k,0)})});