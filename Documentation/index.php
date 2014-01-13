<!DOCTYPE html>
<html>
<head>
<title>Ideabox Theme Documentation</title>

<meta name = "keywords" content = "" />
<meta name = "description" content = "" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1 user-scalable=no">

<link href="css/style.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script type="text/javascript" 	src="js/jquery.smint.js"></script>

<script type="text/javascript">
	
$(document).ready( function() {
    $('.subMenu').smint({
    	'scrollSpeed' : 1000
    });
});

</script>

</head>

<body>

	<div class="wrap">

	  <div class="subMenu" >
	 	<div class="inner">
	 		<a href="#" id="sTop" class="subNavBtn">Home</a> 
			<a href="#" id="s1" class="subNavBtn">Installation</a>
			<a href="#" id="s2" class="subNavBtn">Theme Options</a>
			<a href="#" id="s3" class="subNavBtn">Customizations</a>
			<a href="#" id="s4" class="subNavBtn">Support</a>
			<a href="#" id="s5" class="subNavBtn end">Sources & Credits</a>
		</div>
		
		
				
	</div>


	<div class="section sTop">
		


		<div class="inner">
			<h1>Ideabox Theme - Premium Q2A Theme </h1>
			<p>Created & Documentation by &ldquo;<a href="http://towhidn.com/" style="color: rgb(34, 34, 136);">Towhid</a>&rdquo;  - Provided by <a href="http://QA-Themes.com/" style="color: rgb(34, 34, 136);">QA-Themes</a></p>
			<small>v2.0.0</small>

		</div>
		<br class="clear">
	</div>





	<div class="section s1">
		
		<div class="inner">

			<h1>Installation</h1>
			<h3>Installing theme & Plugin</h3>
			<ol>
				<li><p>Extract <strong>Ideabox-theme.zip</strong>.</p></li>
				<li>upload Content of <strong>Ideabox-theme</strong> directory to <strong>qa-themes/</strong> directory in your Q2A site</li>
				<li><p>Log in as Administrator, then Go to <strong>Admin &gt; General</strong> and select 'Ideabox-Theme' as your default theme.</p></li>
				<li>Go to <strong>Admin &gt; <i>Theme Options</i></strong>. there you can customize your theme.</li>
			</ol>
			<p>if you had any problems installing or using this theme feel free to ask for help on <a title="Q2A support forum" href="http://qa-themes.com/forums/">Our Forum</a>.</p>
			<p>if you are paid customer you can contact me directly at <a href="http://qa-themes.com/contact-us">QA-Themes.com</a></p>
			<h3>Making your site like our <a href="http://demo.qa-themes.com/ideabox/">demo</a></h3>
			<p>visit "<strong>Admin &gt; Users</strong>" and in "Default avatar" section upload an avatar and check it's option button. then in "Avatar size on question lists" field enter '20' and save the form. also activate "Show excerpt in question lists" and set it's value to something like 300.</p>
		</div>
	</div>

	<div class="section s2">
		<div class="inner">
			<p><strong>Ideabox Theme</strong> offers a wide range of customizations that you can easily apply on your theme.</p>
			<p>here is a list of options that is available in your Theme options. to access this options visit <strong>Admin &gt; <i>Theme Options</i></strong></p>
			<h1>Theme Options</h1>
			<ol>
				<li><strong>loading bar:</strong> with this option enabled you will get a loading bar in each page load.</li>
				<li><strong>Hide Navigation Menu:</strong> you can hide  'main navigation menu' from normal users, so all normal and anonymous users won't see it.</li>
				<li><strong>Show Sub-Navigation Menu in homepage:</strong> it will add "Question Page's" sub-navigation to homepage .</li>
				<li><strong>Excerpt in question list:</strong> this options let you to add a short description of your the question in lists.</li>
				<li><strong>Background Customization:</strong> This options let you choose 'background color' & 'background image'. you can choose up to <strong>350 backgrounds</strong>!</li>
				<li><strong>Typography:</strong> you can change the Font & Font Size of nearly everything in this theme.</li>
				<li><strong>CSS Style Files:</strong> you can choose any of CSS compressions</li>
			</ol>			
		</div>

	</div>

	<div class="section s3">
		<div class="inner">

		<h1>Customizations</h1>
		<p>you can easily customize and extend your theme. here is a list of tricks you can use:</p>
		<h3>Add More Backgrounds</h3>
		<p>you have more backgrounds that you want to try on your theme? simply save them as .png files and upload the file in 'qa-themes/Ideabox-theme/patterns' and it will be added to backgrounds list.</p>
		<h3>Custom CSS styling</h3>
		<p>you can easily add more CSS styles to your theme or customize them. your theme might also come with a few custom CSS files for adding different colors, typography, etc ...</p>
		<p>to add a new CSS file you can upload it in 'qa-themes/Ideabox-theme/styles' or you can edit one of pre-made styles.</p>
		<h3>Language Customization</h3>
		<p>if you are planning to use IdeaBox Theme as an <i>Idea & Suggestion sharing and collaboration tool</i> you can upload "custom" directory inside "Custom-Language" directory into your Q2A's "qa-lang" directory. this will change your Q2A's interface text.</p>
		<h3>URL Customization</h3>
		<p>to use this theme as an <i>Idea & Suggestion box</i> you can change Q2A's default URL parameters. to do so you will need to edit $QA_CONST_PATH_MAP variable in "qa-config.php" file.</p>
		<p>for example:</p>
<pre>
$QA_CONST_PATH_MAP=array(
	'questions' => 'ideas',
	'categories' => 'sections',
	'users' => 'contributors',
	'user' => 'user',
);
</pre>	
		
		</div>

	</div>

	<div class="section s4">
		<div class="inner">


			<h1>Product Support</h1>
			<p>For free support you can post your requests on <a title="Q2A support forum" href="http://qa-themes.com/forums/">Our Forum</a>.
			<p>if you have suggestion or requests for free themes and plugins you can send them on our <a href="http://idea.qa-themes.com/" title="Q2A Idea and Suggestion box">IdeaBox</a> or vote other suggestions and ideas</p>
			
			<p>you can also contact <a href="http://QA-Themes.com" title="free Q2A Themes & Services">QA-Themes</a> to <strong><i>hire a developer</i></strong> to request more features or personal customizations.</p>
			<p>if you are a Premium user you can also get support for this theme using <a href="http://qa-themes.com/contact-us">Contact form</a> or send tickets in <a href="http://project.qa-themes.com">Project Manager</a>.</p>
		</div>

	</div>

	<div class="section s5">
		<div class="inner">
		
		<h1>Sources and Credits</h1>
		<p>This section discloses the sources of various files used within the theme and describes their function.</p>
		<ul>
			<li><a target="_blank" href="http://subtlepatterns.com/">Subtle Patterns</a> for backgrounds</li>
			<li><a target="_blank" href="https://github.com/Belelros/jQuery-ColorPicker">jQuery ColorPicker</a> used in Theme Options</li>
			<li><a target="_blank" href="http://ricostacruz.com/nprogress">NProgress</a> handles progress bar for page loads</li>
			<li><a target="_blank" href="http://www.outyear.co.uk/smint/">Smint</a> for this documentation template</li>
		</ul>
		
		</div>

	</div>

	

</div>
</body>
</html>