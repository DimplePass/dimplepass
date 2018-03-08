  <head>

    <meta charset="utf-8">

    {{-- Laravel CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta Tags --}}
    @yield('meta-page')
    <meta name="author" content="Dimple Pass">

	{{-- Social Graph Meta Info set on Specific View. --}}
	@yield('meta-og')

    {{-- Favicon and Apple Icons --}}
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">

    {{-- Mobile Specific Meta Tag --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    {{-- Laravel Mix created file --}}
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" media="screen">

    {{-- Modernizr --}}
    <script src="/js/modernizr.min.js"></script>

    {{--  Global site tag (gtag.js) - Google Analytics --}}
    @if(\App::environment('production'))
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115046513-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-115046513-1');
    </script>
    @endif

    {{-- Start of dimplepass Zendesk Widget script --}}
    <script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="dimplepass.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();
    /*]]>*/</script>
    {{-- End of dimplepass Zendesk Widget script --}}
    
  </head>