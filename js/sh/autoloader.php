<?xml version='1.0' encoding='utf-8' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns='http://www.w3.org/1999/xhtml'>
  <head>
    <title>SyntaxHighlighter - Dynamic Brush Loading</title>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js' type='text/javascript'></script>
    <script type="text/javascript"> 
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-83229-12']);
    _gaq.push(['_trackPageview']);
    
    (function() {
    	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>
  </head>
  <!-- SyntaxHighlighter  3.0.83-->
<link href='http://alexgorbatchev.com/pub/sh/current/styles/shCore.css' rel='stylesheet' type='text/css'/>
<link href='http://alexgorbatchev.com/pub/sh/current/styles/shThemeDefault.css' rel='stylesheet' type='text/css'/>
<script src='http://alexgorbatchev.com/pub/sh/current/scripts/shCore.js' type='text/javascript'/>
<script src='http://alexgorbatchev.com/pub/sh/current/scripts/shAutoloader.js' type='text/javascript'/>
  <body class="syntaxonload();">
    <div id='title'>
      <h1>
        <a href='/SyntaxHighlighter'>SyntaxHighlighter</a>
        <span id='version'>3.0.83</span>
      </h1>
      <a href='https://github.com/alexgorbatchev/SyntaxHighlighter' id='forkme'>Fork Me On GitHub</a>
      <div id='whatsnew'>
        <a href='/SyntaxHighlighter/whatsnew.html'>whats new?</a>
      </div>
      <div id='blurb'>
        <em>SyntaxHighlighter is an open source Java Script client side code syntax highlighter.</em>
      </div>
      <div id='meta'>
        <a href='/SyntaxHighlighter/donate.html'>donate</a>
        <a href='/SyntaxHighlighter/download'>download</a>
        <a href='/SyntaxHighlighter/manual/installation.html'>installation</a>
        <a href='/SyntaxHighlighter/manual/api/autoloader.html'>autoloader</a>
        <a href='/SyntaxHighlighter/manual/configuration'>configuration</a>
        <a href='http://twitter.com/syntaxhighlight'>@syntaxhighlight</a>
      </div>
      <h2>Dynamic Brush Loading</h2>
    </div>
    <pre class="brush: c">
      int main(void)
    </pre>
<pre class="brush: groovy">
println 'Hello World'
println 1 + 2 + 3
</pre>
<!-- SyntaxHighlighter  3.0.83-->
<script type='text/javascript'>
SyntaxHighlighter.autoloader(
  'applescript            http://alexgorbatchev.com/pub/sh/current/scripts/shBrushAppleScript.js',
  'actionscript3 as3      http://alexgorbatchev.com/pub/sh/current/scripts/shBrushAS3.js',
  'bash shell             http://alexgorbatchev.com/pub/sh/current/scripts/shBrushBash.js',
  'coldfusion cf          http://alexgorbatchev.com/pub/sh/current/scripts/shBrushColdFusion.js',
  'cpp c                  http://alexgorbatchev.com/pub/sh/current/scripts/shBrushCpp.js',
  'c# c-sharp csharp      http://alexgorbatchev.com/pub/sh/current/scripts/shBrushCSharp.js',
  'css                    http://alexgorbatchev.com/pub/sh/current/scripts/shBrushCss.js',
  'delphi pascal          http://alexgorbatchev.com/pub/sh/current/scripts/shBrushDelphi.js',
  'diff patch pas         http://alexgorbatchev.com/pub/sh/current/scripts/shBrushDiff.js',
  'erl erlang             http://alexgorbatchev.com/pub/sh/current/scripts/shBrushErlang.js',
  'groovy                 http://alexgorbatchev.com/pub/sh/current/scripts/shBrushGroovy.js',
  'java                   http://alexgorbatchev.com/pub/sh/current/scripts/shBrushJava.js',
  'jfx javafx             http://alexgorbatchev.com/pub/sh/current/scripts/shBrushJavaFX.js',
  'js jscript javascript  http://alexgorbatchev.com/pub/sh/current/scripts/shBrushJScript.js',
  'perl pl                http://alexgorbatchev.com/pub/sh/current/scripts/shBrushPerl.js',
  'php                    http://alexgorbatchev.com/pub/sh/current/scripts/shBrushPhp.js',
  'text plain             http://alexgorbatchev.com/pub/sh/current/scripts/shBrushPlain.js',
  'py python              http://alexgorbatchev.com/pub/sh/current/scripts/shBrushPython.js',
  'ruby rails ror rb      http://alexgorbatchev.com/pub/sh/current/scripts/shBrushRuby.js',
  'sass scss              http://alexgorbatchev.com/pub/sh/current/scripts/shBrushSass.js',
  'scala                  http://alexgorbatchev.com/pub/sh/current/scripts/shBrushScala.js',
  'sql                    http://alexgorbatchev.com/pub/sh/current/scripts/shBrushSql.js',
  'vb vbnet               http://alexgorbatchev.com/pub/sh/current/scripts/shBrushVb.js',
  'xml xhtml xslt html    http://alexgorbatchev.com/pub/sh/current/scripts/shBrushXml.js'
);
SyntaxHighlighter.config.bloggerMode = true;
SyntaxHighlighter.all()
</script>
  </body>

</html>
<!--
      <script type="text/javascript">
        var uservoiceJsHost = ("https:" == document.location.protocol) ? "https://uservoice.com" : "http://cdn.uservoice.com";
        document.write(unescape("%3Cscript src='" + uservoiceJsHost + "/javascripts/widgets/tab.js' type='text/javascript'%3E%3C/script%3E"))
      </script>
      <script type="text/javascript">
      UserVoice.Tab.show({ 
        key: 'SyntaxHighlighter',
        host: 'SyntaxHighlighter.uservoice.com', 
        forum: 'general', 
        alignment: 'left',
        background_color:'#5A86E4', 
        text_color: 'white',
        hover_color: '#CBE2FF',
        lang: 'en'
      })
      </script>
      -->
