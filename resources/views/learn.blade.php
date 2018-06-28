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

<h2>Learn to code</h2>
<div><p class="leo-divider">🐆</p></div>

<div class="intro">
	<h3>Why code?</h3>
	<p><ul>
		<li>You want a job</li>
		<li>Remote working</li>
		<li>Freelancing</li>
		<li>You like learning</li>
		<li>You enjoy problem solving and being creative</li>
		<li>Get a promotion or earn more respect in your job</li>
		<li>Build your own site, start your own company, be your own boss</li>
		<li>Cause you can</li>
		<li>30% of people who learn to code, receive a pay rise</li>
		<p><em>Source: <a target="_blank" href="https://news.codecademy.com/2017-retrospective-great-reeducation/">Codecademy</a></em></p>
	</ul></p>
</div>

<div><p class="leo-divider">🐆</p></div>

<div class="resources">
	<h3>What do you want?</h3>
	<h4>A taste of programming</h4>
	<p><ul>
		<li><a target="_blank" href="https://www.codecademy.com/catalog/language/python">Python</a> is the most popular at the moment and great for beginners</li>
		<li><a target="_blank" href="https://www.codecademy.com/courses/learn-javascript-introduction/lessons/introduction-to-javascript">JavaScript</a> is a good all rounder, versatile and used everywhere</li>
	</ul></p>
	<h4>A taste of web development</h4>
	<p><ul>
		<li>Try General Assembly's short online course <a target="_blank" href="https://dash.generalassemb.ly/">Dash</a></li>
		<li><a targe="_blank" href="https://codepen.io/">Codepen</a> is great to quickly try out html + css + js in your browser</li>
	</ul></p>
	<h4>Build your own <a target="_blank" href="https://www.codecademy.com/learn/make-a-website">website</a></h4>
	<p><ul>
		<li><a target="_blank" href="https://www.google.com/chrome/">Google Chrome</a> and it's developer tools to test your sites</li>
		<li><a target="_blank" href="https://code.visualstudio.com/">VS Code</a> to develop your code</li>
		<li>The skeleton of your site will be <a target="_blank" href="https://www.codecademy.com/learn/learn-html">HTML</a></li>
		<li>General design of your site will be <a target="_blank" href="https://www.codecademy.com/learn/learn-css">CSS</a></li>
		<li>Interaction (and possible server side requests) could use <a target="_blank" href="https://www.codecademy.com/tracks/jquery">jQuery</a> (which is a nice <a target="_blank" href="https://www.codecademy.com/courses/learn-javascript-introduction/lessons/introduction-to-javascript">JavaScript</a> library)</li>
		<li><a target="_blank" href="https://github.com/">GitHub</a> is great for version control, but you should look at learning <a target="_blank" href="https://www.codecademy.com/learn/learn-git">git</a> for this</li>
		<li>free hosting can be found on <a target="_blank" href="https://pages.github.com/">GitHub Pages</a></li>
	</ul></p>
	<h4>Develop the backend of your site</h4>
	<p><ul>
		<li><a target="_blank" href="https://www.codecademy.com/tracks/php">PHP</a> or <a target="_blank" href="https://www.codecademy.com/catalog/language/python">Python</a> for server side code (Alternatively, look at JavaScript server side)</li>
		<li>Learn <a target="_blank" href="https://www.codecademy.com/catalog/language/sql">SQL</a> for your database, use <a target="_blank" href="https://www.sequelpro.com/">Sequel Pro</a> to manage it</li>
	</ul></p>
	<h4>Design resources</h4>
	<p><ul>
		<li>Always design with accessibility in mind, WebAIM has good resources such as their <a target="_blank" href="https://webaim.org/resources/contrastchecker/">colour contrast checker</a></li>
		<li><a target="_blank" href="https://www.figma.com/">Figma</a> is a free browser based design tool, it's great</li>
		<li>Free illustrations (you can even customise the colour) <a target="_blank" href="https://undraw.co/illustrations">here</a></li>
		<li>Free photos you can use <a target="_blank" href="https://unsplash.com/public-domain-images">Unsplash</a> which also has a great search feature</li>
		<li>Some neat UI/UX design <a target="_blank" href="https://medium.com/refactoring-ui/7-practical-tips-for-cheating-at-design-40c736799886">tips</a></li>
		<li>More great design help here at <a target="_blank" href="http://designresources.party/">designresources.party</a></li>
		<li>Free organised fonts from <a target="_blank" href="https://fonts.google.com/">Google</a></li>
		<li>Skip some CSS hassle with <a target="_blank" href="https://getbootstrap.com/">Bootstrap</a></li>
		<li><a target="_blank" href="https://css-tricks.com/">css-tricks</a> is great, like their complete guide to <a target="_blank" href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">flexbox</a></li>
	</ul></p>
	<h4>Further study</h4>
	<p>
		You should definitely check out <a target="_blank" href="https://www.codecademy.com/courses/learn-javascript-introduction/lessons/introduction-to-javascript">JavaScript</a>, <a target="_blank" href="https://egghead.io/lessons/react-introduction-to-the-beginner-s-guide-to-reactjs">React</a> and <a target="_blank" href="https://nodejs.org/en/">Node.js</a>.
		Once you get the hang of things, look into programming concepts such as "object orientated programming" (OOP). Also handy, an understanding of servers, domains and other infrastructure.
	</p>

	<div><p class="leo-divider">🐆</p></div>
		
	<h4>Need help?</h4>
	<p><ul>
		<li>The community is great on <a target="_blank" href="https://stackoverflow.com/">Stack Overflow</a>. There's usually someone else who has had the same question or error message as you! I couldn't live without it.</li>
		<li><a target="_blank" href="https://www.w3schools.com/">w3schools</a> is really great as a simple reference to look up syntax and functions in a few languages</li>
		<li>You can always refer to the documentation of the language you're learning</li>
		<li>I really like <a target="_blank" href="https://daylerees.com/books/">Dayle Rees'</a> ebooks for a clean read</li>
		<li><a href="https://technation.io/" target="_blank">Tech Nation</a> has great info for tech entrepreneurs</li>
	</ul></p>
	<h4>Free online courses:</h4>
	<p><ul>
		<li><a target="_blank" href="https://www.codecademy.com/">Codecademy</a> was my main resource, though I am sure it has changed a lot in three years!</li>
		<li><a target="_blank" href="https://generalassemb.ly/education?where=online">General Assembly</a> is good. Try <a target="_blank" href="https://dash.generalassemb.ly/">Dash</a> for a short free course.</li>
		<li><a target="_blank" href="https://www.khanacademy.org/computing/computer-programming">Khan Academy</a> is great, all free, and whilst aimed at younger coders, I used it a lot</li>
		<li><a target="_blank" href="https://laracasts.com/">Laracasts</a> are great for help with a PHP framework I use, <a target="_blank" href="https://laravel.com/">Laravel</a></li>
	</ul></p>
	<h4>Find help in person:</h4>
	<p><ul>
		<li><a target="_blank" href="https://www.codefirstgirls.org.uk/">Code First: Girls</a>, free for students (or recently gradudated), women only</li>
		<li>WOC should check out <a target="_blank" href="https://home.blackgirl.tech/">blackgirl.tech</a> for events and code meet ups</li>
		<li>Programming workshops with <a target="_blank" href="https://codebar.io/">codebar</a> (international)</li>
		<li>Events and podcasts with <a target="_blank" href="http://www.geekgirlmeetup.co.uk/">GeekGirlMeetup</a></li>
		<li>There are many courses and meetups running, tailored to different languages and audiences</li>
		<li>Email me at <a href="mailto:leonoragilmour@sky.com">leonoragilmour@sky.com</a></li>
	</ul></p>
	<h4>Advice</h4>
	<p><ul>
		<li>It's best to learn on a project, for yourself or someone else - you need something to get you through the initial work of learning new syntax</li>
		<li>Never be afraid to ask for help - there's always something to learn or a new perspective</li>
		<li>Ask loads of questions</li>
		<li>Don't give up. Things break, it can be frustrating but <em>"If at first you don't succeed, try, try, try again"</em>.<br>In case you're unconvinced, you're not alone in this: <a href="http://www.commitlogsfromlastnight.com/">Commit Logs From Last Night</a> (cn: swear words)</li>
	</ul></p>
		{{-- Become a video game developer -> C#, like C++, is heavily used in video game development, so any aspiring video game developers would do well to learn both of them. --}}
		{{-- Become an app developer -> Python or Swift but I would recommend browser apps before trying to launch a native app --}}
<div><p class="leo-divider">🐆</p></div>

</div>

@stop