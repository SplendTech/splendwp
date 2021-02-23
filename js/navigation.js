/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	const siteNavigation = document.getElementById( 'site-navigation' );

	// Return early if the navigation don't exist.
	if ( ! siteNavigation ) {
		return;
	}

	const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];

	// Return early if the button don't exist.
	if ( 'undefined' === typeof button ) {
		return;
	}

	const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( ! menu.classList.contains( 'nav-menu' ) ) {
		menu.classList.add( 'nav-menu' );
	}

	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
	button.addEventListener( 'click', function() {
		siteNavigation.classList.toggle( 'toggled' );

		if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
			button.setAttribute( 'aria-expanded', 'false' );
		} else {
			button.setAttribute( 'aria-expanded', 'true' );
		}
	} );

	// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
	document.addEventListener( 'click', function( event ) {
		const isClickInside = siteNavigation.contains( event.target );

		if ( ! isClickInside ) {
			siteNavigation.classList.remove( 'toggled' );
			button.setAttribute( 'aria-expanded', 'false' );
		}
	} );

	// Get all the link elements within the menu.
	const links = menu.getElementsByTagName( 'a' );

	// Get all the link elements with children within the menu.
	const linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

	// Toggle focus each time a menu link is focused or blurred.
	for ( const link of links ) {
		link.addEventListener( 'focus', toggleFocus, true );
		link.addEventListener( 'blur', toggleFocus, true );
	}

	// Toggle focus each time a menu link with children receive a touch event.
	for ( const link of linksWithChildren ) {
		link.addEventListener( 'touchstart', toggleFocus, false );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		if ( event.type === 'focus' || event.type === 'blur' ) {
			let self = this;
			// Move up through the ancestors of the current link until we hit .nav-menu.
			while ( ! self.classList.contains( 'nav-menu' ) ) {
				// On li elements toggle the class .focus.
				if ( 'li' === self.tagName.toLowerCase() ) {
					self.classList.toggle( 'focus' );
				}
				self = self.parentNode;
			}
		}

		if ( event.type === 'touchstart' ) {
			const menuItem = this.parentNode;
			event.preventDefault();
			for ( const link of menuItem.parentNode.children ) {
				if ( menuItem !== link ) {
					link.classList.remove( 'focus' );
				}
			}
			menuItem.classList.toggle( 'focus' );
		}
	}
}() );

/*
 * HC-Sticky
 * =========
 * Version: 2.2.6
 * Author: Some Web Media
 * Author URL: https://github.com/somewebmedia
 * Plugin URL: https://github.com/somewebmedia/hc-sticky
 * Description: JavaScript library that makes any element on your page visible while you scroll
 * License: MIT
 */
"use strict";!function(t,e){if("object"==typeof module&&"object"==typeof module.exports){if(!t.document)throw new Error("HC-Sticky requires a browser to run.");module.exports=e(t)}else"function"==typeof define&&define.amd?define("hcSticky",[],e(t)):e(t)}("undefined"!=typeof window?window:this,function(U){var Y=U.document,$={top:0,bottom:0,bottomEnd:0,innerTop:0,innerSticker:null,stickyClass:"sticky",stickTo:null,followScroll:!0,responsive:null,mobileFirst:!1,onStart:null,onStop:null,onBeforeResize:null,onResize:null,resizeDebounce:100,disable:!1},Q=function(t,e,o){console.warn("%cHC Sticky:%c "+o+"%c '"+t+"'%c is now deprecated and will be removed. Use%c '"+e+"'%c instead.","color: #fa253b","color: default","color: #5595c6","color: default","color: #5595c6","color: default")},X=function(n,f){var o=this;if(f=f||{},"string"==typeof n&&(n=Y.querySelector(n)),!n)return!1;f.queries&&Q("queries","responsive","option"),f.queryFlow&&Q("queryFlow","mobileFirst","option");var p={},u=X.Helpers,s=n.parentNode;"static"===u.getStyle(s,"position")&&(s.style.position="relative");function d(t){t=t||{},u.isEmptyObject(t)&&!u.isEmptyObject(p)||(p=Object.assign({},$,p,t))}function t(){return p.disable}function e(){var t,e=p.responsive||p.queries;if(e){var o=U.innerWidth;if(t=f,(p=Object.assign({},$,t||{})).mobileFirst)for(var i in e)i<=o&&!u.isEmptyObject(e[i])&&d(e[i]);else{var n=[];for(var s in e){var r={};r[s]=e[s],n.push(r)}for(var l=n.length-1;0<=l;l--){var a=n[l],c=Object.keys(a)[0];o<=c&&!u.isEmptyObject(a[c])&&d(a[c])}}}}function i(){var t,e,o,i;P.css=(t=n,e=u.getCascadedStyle(t),o=u.getStyle(t),i={height:t.offsetHeight+"px",left:e.left,right:e.right,top:e.top,bottom:e.bottom,position:o.position,display:o.display,verticalAlign:o.verticalAlign,boxSizing:o.boxSizing,marginLeft:e.marginLeft,marginRight:e.marginRight,marginTop:e.marginTop,marginBottom:e.marginBottom,paddingLeft:e.paddingLeft,paddingRight:e.paddingRight},e.float&&(i.float=e.float||"none"),e.cssFloat&&(i.cssFloat=e.cssFloat||"none"),o.MozBoxSizing&&(i.MozBoxSizing=o.MozBoxSizing),i.width="auto"!==e.width?e.width:"border-box"===i.boxSizing||"border-box"===i.MozBoxSizing?t.offsetWidth+"px":o.width,i),F.init(),b=!(!p.stickTo||!("document"===p.stickTo||p.stickTo.nodeType&&9===p.stickTo.nodeType||"object"==typeof p.stickTo&&p.stickTo instanceof("undefined"!=typeof HTMLDocument?HTMLDocument:Document))),v=p.stickTo?b?Y:"string"==typeof p.stickTo?Y.querySelector(p.stickTo):p.stickTo:s,H=(B=function(){var t=n.offsetHeight+(parseInt(P.css.marginTop)||0)+(parseInt(P.css.marginBottom)||0),e=(H||0)-t;return-1<=e&&e<=1?H:t})(),w=(A=function(){return b?Math.max(Y.documentElement.clientHeight,Y.body.scrollHeight,Y.documentElement.scrollHeight,Y.body.offsetHeight,Y.documentElement.offsetHeight):v.offsetHeight})(),k=b?0:u.offset(v).top,L=p.stickTo?b?0:u.offset(s).top:k,x=U.innerHeight,R=n.offsetTop-(parseInt(P.css.marginTop)||0),S=p.innerSticker?"string"==typeof p.innerSticker?Y.querySelector(p.innerSticker):p.innerSticker:null,T=isNaN(p.top)&&-1<p.top.indexOf("%")?parseFloat(p.top)/100*x:p.top,E=isNaN(p.bottom)&&-1<p.bottom.indexOf("%")?parseFloat(p.bottom)/100*x:p.bottom,j=S?S.offsetTop:p.innerTop?p.innerTop:0,O=isNaN(p.bottomEnd)&&-1<p.bottomEnd.indexOf("%")?parseFloat(p.bottomEnd)/100*x:p.bottomEnd,C=k-T+j+R}function r(){H=B(),w=A(),z=k+w-T-O,N=x<H;var t,e=U.pageYOffset||Y.documentElement.scrollTop,o=u.offset(n).top,i=o-e;I=e<q?"up":"down",M=e-q,C<(q=e)?z+T+(N?E:0)-(p.followScroll&&N?0:T)<=e+H-j-(x-(C-j)<H-j&&p.followScroll&&0<(t=H-x-j)?t:0)?P.release({position:"absolute",bottom:L+s.offsetHeight-z-T}):N&&p.followScroll?"down"==I?i+H+E<=x+.9?P.stick({bottom:E}):"fixed"===P.position&&P.release({position:"absolute",top:o-T-C-M+j}):Math.ceil(i+j)<0&&"fixed"===P.position?P.release({position:"absolute",top:o-T-C+j-M}):e+T-j<=o&&P.stick({top:T-j}):P.stick({top:T-j}):P.release({stop:!0})}function l(){D&&(U.removeEventListener("scroll",r,u.supportsPassive),D=!1)}function a(){null!==n.offsetParent&&"none"!==u.getStyle(n,"display")?(i(),w<H?l():(r(),D||(U.addEventListener("scroll",r,u.supportsPassive),D=!0))):l()}function c(){n.style.position="",n.style.left="",n.style.top="",n.style.bottom="",n.style.width="",n.classList?n.classList.remove(p.stickyClass):n.className=n.className.replace(new RegExp("(^|\\b)"+p.stickyClass.split(" ").join("|")+"(\\b|$)","gi")," "),P.css={},!(P.position=null)===F.isAttached&&F.detach()}function g(){c(),e(),(t()?l:a)()}function m(){p.onBeforeResize&&p.onBeforeResize.call(n,Object.assign({},p)),g(),p.onResize&&p.onResize.call(n,Object.assign({},p))}function y(){W&&(U.removeEventListener("resize",V,u.supportsPassive),W=!1),l()}function h(){W||(U.addEventListener("resize",V,u.supportsPassive),W=!0),e(),(t()?l:a)()}var b,v,S,w,k,L,x,T,E,j,O,C,z,N,H,R,A,B,I,P={css:{},position:null,stick:function(t){t=t||{},u.hasClass(n,p.stickyClass)||(!1===F.isAttached&&F.attach(),P.position="fixed",n.style.position="fixed",n.style.left=F.offsetLeft+"px",n.style.width=F.width,void 0===t.bottom?n.style.bottom="auto":n.style.bottom=t.bottom+"px",void 0===t.top?n.style.top="auto":n.style.top=t.top+"px",n.classList?n.classList.add(p.stickyClass):n.className+=" "+p.stickyClass,p.onStart&&p.onStart.call(n,Object.assign({},p)))},release:function(t){if((t=t||{}).stop=t.stop||!1,!0===t.stop||"fixed"===P.position||null===P.position||!(void 0===t.top&&void 0===t.bottom||void 0!==t.top&&(parseInt(u.getStyle(n,"top"))||0)===t.top||void 0!==t.bottom&&(parseInt(u.getStyle(n,"bottom"))||0)===t.bottom)){!0===t.stop?!0===F.isAttached&&F.detach():!1===F.isAttached&&F.attach();var e=t.position||P.css.position;P.position=e,n.style.position=e,n.style.left=!0===t.stop?P.css.left:F.positionLeft+"px",n.style.width="absolute"!==e?P.css.width:F.width,void 0===t.bottom?n.style.bottom=!0===t.stop?"":"auto":n.style.bottom=t.bottom+"px",void 0===t.top?n.style.top=!0===t.stop?"":"auto":n.style.top=t.top+"px",n.classList?n.classList.remove(p.stickyClass):n.className=n.className.replace(new RegExp("(^|\\b)"+p.stickyClass.split(" ").join("|")+"(\\b|$)","gi")," "),p.onStop&&p.onStop.call(n,Object.assign({},p))}}},F={el:Y.createElement("div"),offsetLeft:null,positionLeft:null,width:null,isAttached:!1,init:function(){for(var t in F.el.className="sticky-spacer",P.css)F.el.style[t]=P.css[t];F.el.style["z-index"]="-1";var e=u.getStyle(n);F.offsetLeft=u.offset(n).left-(parseInt(e.marginLeft)||0),F.positionLeft=u.position(n).left,F.width=u.getStyle(n,"width")},attach:function(){s.insertBefore(F.el,n),F.isAttached=!0},detach:function(){F.el=s.removeChild(F.el),F.isAttached=!1}},q=U.pageYOffset||Y.documentElement.scrollTop,M=0,D=!1,W=!1,V=p.resizeDebounce?u.debounce(m,p.resizeDebounce):m;this.options=function(t){return t?p[t]:Object.assign({},p)},this.refresh=g,this.update=function(t){d(t),f=Object.assign({},f,t||{}),g()},this.attach=h,this.detach=y,this.destroy=function(){y(),c()},this.triggerMethod=function(t,e){"function"==typeof o[t]&&o[t](e)},this.reinit=function(){Q("reinit","refresh","method"),g()},d(f),h(),U.addEventListener("load",g)};if(void 0!==U.jQuery){var i=U.jQuery,n="hcSticky";i.fn.extend({hcSticky:function(e,o){return this.length?"options"===e?i.data(this.get(0),n).options():this.each(function(){var t=i.data(this,n);t?t.triggerMethod(e,o):(t=new X(this,e),i.data(this,n,t))}):this}})}return U.hcSticky=U.hcSticky||X,X}),function(c){var t=c.hcSticky,f=c.document;"function"!=typeof Object.assign&&Object.defineProperty(Object,"assign",{value:function(t,e){if(null==t)throw new TypeError("Cannot convert undefined or null to object");for(var o=Object(t),i=1;i<arguments.length;i++){var n=arguments[i];if(null!=n)for(var s in n)Object.prototype.hasOwnProperty.call(n,s)&&(o[s]=n[s])}return o},writable:!0,configurable:!0}),Array.prototype.forEach||(Array.prototype.forEach=function(t){var e,o;if(null==this)throw new TypeError("this is null or not defined");var i=Object(this),n=i.length>>>0;if("function"!=typeof t)throw new TypeError(t+" is not a function");for(1<arguments.length&&(e=arguments[1]),o=0;o<n;){var s;o in i&&(s=i[o],t.call(e,s,o,i)),o++}});var e=!1;try{var o=Object.defineProperty({},"passive",{get:function(){e={passive:!1}}});c.addEventListener("testPassive",null,o),c.removeEventListener("testPassive",null,o)}catch(t){}function r(t,e){return c.getComputedStyle?e?f.defaultView.getComputedStyle(t,null).getPropertyValue(e):f.defaultView.getComputedStyle(t,null):t.currentStyle?e?t.currentStyle[e.replace(/-\w/g,function(t){return t.toUpperCase().replace("-","")})]:t.currentStyle:void 0}function l(t){var e=t.getBoundingClientRect(),o=c.pageYOffset||f.documentElement.scrollTop,i=c.pageXOffset||f.documentElement.scrollLeft;return{top:e.top+o,left:e.left+i}}t.Helpers={supportsPassive:e,isEmptyObject:function(t){for(var e in t)return!1;return!0},debounce:function(i,n,s){var r;return function(){var t=this,e=arguments,o=s&&!r;clearTimeout(r),r=setTimeout(function(){r=null,s||i.apply(t,e)},n),o&&i.apply(t,e)}},hasClass:function(t,e){return t.classList?t.classList.contains(e):new RegExp("(^| )"+e+"( |$)","gi").test(t.className)},offset:l,position:function(t){var e=t.offsetParent,o=l(e),i=l(t),n=r(e),s=r(t);return o.top+=parseInt(n.borderTopWidth)||0,o.left+=parseInt(n.borderLeftWidth)||0,{top:i.top-o.top-(parseInt(s.marginTop)||0),left:i.left-o.left-(parseInt(s.marginLeft)||0)}},getStyle:r,getCascadedStyle:function(t){var e,o=t.cloneNode(!0);o.style.display="none",Array.prototype.slice.call(o.querySelectorAll('input[type="radio"]')).forEach(function(t){t.removeAttribute("name")}),t.parentNode.insertBefore(o,t.nextSibling),o.currentStyle?e=o.currentStyle:c.getComputedStyle&&(e=f.defaultView.getComputedStyle(o,null));var i={};for(var n in e)!isNaN(n)||"string"!=typeof e[n]&&"number"!=typeof e[n]||(i[n]=e[n]);if(Object.keys(i).length<3)for(var s in i={},e)isNaN(s)||(i[e[s].replace(/-\w/g,function(t){return t.toUpperCase().replace("-","")})]=e.getPropertyValue(e[s]));if(i.margin||"auto"!==i.marginLeft?i.margin||i.marginLeft!==i.marginRight||i.marginLeft!==i.marginTop||i.marginLeft!==i.marginBottom||(i.margin=i.marginLeft):i.margin="auto",!i.margin&&"0px"===i.marginLeft&&"0px"===i.marginRight){var r=t.offsetLeft-t.parentNode.offsetLeft,l=r-(parseInt(i.left)||0)-(parseInt(i.right)||0),a=t.parentNode.offsetWidth-t.offsetWidth-r-(parseInt(i.right)||0)+(parseInt(i.left)||0)-l;0!=a&&1!=a||(i.margin="auto")}return o.parentNode.removeChild(o),o=null,i}}}(window);

jQuery(document).ready(function($) {
  var $sticky = $('#masthead');

  $sticky.hcSticky({
    stickTo: '#full_content'
  });

  $sticky.hcSticky('update', {
    top: 1
  });
});
