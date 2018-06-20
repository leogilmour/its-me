@extends('layouts.layout')
@section('styles')
    <link href="/css/learn.css" rel="stylesheet">
@stop
@section('content')

<header>
		<div class="title">
				<a href="/"><h1>Leo Gilmour</h1></a>
		</div>
</header>
<div><p class="leo-divider">🐆</p></div>

<h2>Learn to code</h2>

<div class="intro">
	<h3>Why code?</h3>
	<ul>
		<li>You want a job</li>
		<li>Build your own site, start your own company, be your own boss</li>
		<li>You enjoy problem solving and being creative</li>
		<li>Remote working</li>
		<li>Freelancing</li>
		<li>Get a promotion or earn more respect in your job</li>
		<p><em>Source: <a href="https://news.codecademy.com/2017-retrospective-great-reeducation/">Codecademy</a></em></p>
	</ul>
</div>

<div><p class="leo-divider">🐆</p></div>

<div class="resources">
	<h3>What do you want to do first?</h3>
	<h4>A taste of programming?</h4>
	<p>
		<li><a href="https://www.codecademy.com/catalog/language/python">Python</a> is the most popular at the moment and great for beginners</li>
		<li><a href="https://www.codecademy.com/courses/learn-javascript-introduction/lessons/introduction-to-javascript">JavaScript</a> is a good all rounder, versatile and used everywhere</li>
	</p>
	<h4>A taste of web development?</h4>
	<p>
		Try General Assembly's short online course <a href="https://dash.generalassemb.ly/">Dash</a>
	</p>
	<h4>Building your own <a href="https://www.codecademy.com/learn/make-a-website">website</a>?</h4>
	<p>
		<li><a href="https://code.visualstudio.com/">VS Code</a> to develop your code</li>
		<li>The skeleton of your site will be <a href="https://www.codecademy.com/learn/learn-html">HTML</a></li>
		<li>General design of your site will be <a href="https://www.codecademy.com/learn/learn-css">CSS</a></li>
		<li>Interaction (and possible server side requests) could use <a href="https://www.codecademy.com/tracks/jquery">jQuery</a> (which is a nice JavaScript library)</li>
		<li><a href="https://github.com/">GitHub</a> is great for version control, but you should look at learning <a href="https://www.codecademy.com/learn/learn-git">git</a> for this</li>
		<li>free hosting can be found on <a href="https://pages.github.com/">GitHub Pages</a></li>
	</p>
	<h4>Develop the backend of your site</h4>
	<p>
		<li><a href="https://www.codecademy.com/tracks/php">PHP</a> or <a href="https://www.codecademy.com/catalog/language/python">Python</a> for server side code (Alternatively, look at JavaScript server side)</li>
		<li>Learn <a href="https://www.codecademy.com/catalog/language/sql">SQL</a> for your database, use <a href="https://www.sequelpro.com/">Sequel Pro</a> to manage it</li>
	</p>
	<h4>Design resources</h4>
	<p>
		<li>Always design with accessibility in mind, WebAIM has good resources such as their <a href="https://webaim.org/resources/contrastchecker/">colour contrast checker</a></li>
		<li><a href="https://www.figma.com/">Figma</a> is a free browser design tool, it's great</li>
		<li>Free illustrations (you can even customise the colour) <a href="https://undraw.co/illustrations">here</a></li>
		<li>Free photos you can use <a href="https://unsplash.com/public-domain-images">Unsplash</a> which also has a great search feature</li>
		<li>Some neat design <a href="https://medium.com/refactoring-ui/7-practical-tips-for-cheating-at-design-40c736799886">tips</a></li>
		<li>More great design help here at <a href="http://designresources.party/">designresources.party</a></li>
		<li>Free organised fonts from <a href="https://fonts.google.com/">Google</a></li>
		<li>Skip some CSS hassle with <a href="https://getbootstrap.com/">Bootstrap</a></li>
	</p>
	<h4>Further study</h4>
	<p>
		You should definitely check out JavaScript, <a href="https://egghead.io/lessons/react-introduction-to-the-beginner-s-guide-to-reactjs">React</a> and node.js
	</p>

	<div><p class="leo-divider">🐆</p></div>
		
	<h4>Need help?</h4>
	<p>
		<li>Community help is great on <a href="https://stackoverflow.com/">Stack Overflow</a>... I couldn't live without it</li>
		<li>Documentation for beginners is great <a href="https://www.w3schools.com/">w3schools</a></li>
		<li>You can always refer to the documentation of the language you're learning</li>
		<li>I really like <a href="https://daylerees.com/books/">Dayle Rees'</a> ebooks for a clean read
	</p>
	<h4>Free online courses:</h4>
	<p>
		<li><a href="https://www.codecademy.com/">Codecademy</a> was my main resource, though I am sure it has changed a lot in three years!</li>
		<li><a href="https://generalassemb.ly/education?where=online">General Assembly</a> is good. Try <a href="https://dash.generalassemb.ly/">Dash</a> for a short free course.</li>
		<li><a href="https://www.khanacademy.org/computing/computer-programming">Khan Academy</a> is great, all free, and whilst aimed at younger coders, I used it a lot</li>
		<li><a href="https://laracasts.com/">Laracasts</a> are great for help with a PHP framework I use, <a href="https://laravel.com/">Laravel</a></li>
	</p>
	<h4>Find help in person:</h4>
	<p>
		<li>Programming workshops with <a href="https://codebar.io/">codebar</a></li>
		<li><a href="https://www.codefirstgirls.org.uk/">Code First: Girls</a>, free for students (or recently gradudated), women only</li>
		{{-- <li>Message me</li> --}}
	</p>
	<h4>Advice</h4>
	<p>It's best to learn on a project, for yourself or someone else... you need something to get you through the initial step of learning new syntax. As usual, never be afraid to ask for help, and ask loads of questions.</p>
		{{-- Become a video game developer -> C#, like C++, is heavily used in video game development, so any aspiring video game developers would do well to learn both of them. --}}
		{{-- Become an app developer -> Python or Swift but I would recommend browser apps before trying to launch a native app --}}
<div><p class="leo-divider">🐆</p></div>

</div>

@stop