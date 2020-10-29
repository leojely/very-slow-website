<?php
header('Cache-Control: no-cache, no-store, must-revalidate');	//	No Cacheing
header('Pragma: no-cache');	//	No Cacheing
header('Expires: 0');	//	No Cacheing
header('Content-Encoding: none'); // Disable gzip compression
header('Content-Type: text/html; charset=utf-8');	//	Be nice to the browser
ob_end_flush(); // Stop buffer
ob_implicit_flush();
//	Send the header as fast as possible to get something on the screen quickly
?><?php
//	The body
$str = <<<EOT
<!DOCTYPE html>
<html lang=en-gb>
<head>
<meta charset=utf-8>
<title>Very Slow Website - by @edent</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>p::after{content:" ▒";}</style>
</head>
<body>
<p>You are now experiencing the web at 175 bits per second. No matter how fast your Internet connection is, this page will load slowly.
<br>Please wait…
<script>function s(){b=document.getElementsByTagName("br");b[b.length-1].scrollIntoView();}var i=setInterval(s,1000);</script>
<br>Back in the early days of the Internet, people argued that there was no need for modems which ran any faster than this.
<style class=i>.i{display:none}style{display:block;font-family:monospace}</style>
<br>About 20 characters a second is as fast as the average person can read.
<br>Why transmit information any faster?
<style class=i>style::before{content:'<style>'}style::after{content:'<\/style>'}</style>
<br>Nowadays, we want everything instantly.
<br>But sometimes it is nice to have d&zwj;e&zwj;l&zwj;a&zwj;y&zwj;e&zwj;d          g&zwj;r&zwj;&zwj;a&zwj;&zwj;&zwj;t&zwj;&zwj;&zwj;i&zwj;&zwj;f&zwj;i&zwj;c&zwj;&zwj;&zwj;&zwj;&zwj;&zwj;ation.
<br>
<br>Because <code>HTML</code> supports progressive loading - we can take advantage of your browser's <strong>built-in</strong> capabilities.
<br>We can also add some CSS to make it a bit more readable.        Here it comes!
<style>body{margin:5em auto}</style>
<style>body{max-width:55em}</style>
<style>body{line-height:1.6}</style>
<style>body{font-size:1.2em}</style>
<style>body{color:#333}</style>
<style>body{padding:0 3em}</style>
<style>body{font-family:sans}</style>
<style>button{font-size:2em}</style>
<br>Of course, reading text is one thing - but what about images? Loading up an image takes ages. But JPEG compressision gives us "progressive images". Take a look: <br>
<img src="j.php" width=180 height=180 alt="A slow loading image"/>
<style class=i>img{float:left;margin:auto 1em}</style>
<br>This 968 byte image will take about 40 seconds to fully load.    Over time, the image will reveal itself.       It begins by loading a low resolution version.              Just give it a few moments.                           Here we go!     It will be a blurry, pixelly mess to start with. As each bit slowly matures into a byte you will gradually get a sense of what the image is. This JPG is as small as I could make it, while still maintaining some quality. The JPG compression is set to a quality of "10" - you would normally expect a modern high resolution image to be set to a quality of at least 85.                 Can you tell what the image is yet?        Incidentally, this slowness effect is not being done with JavaScript - the server is <i>intentionally</i> only serving you a few bytes per second.      It's maddening and infuriating. But that's the way we used to live! JPG compression was released in 1992 - by which time modem speed was a blisteringly fast 14,400 bits per second. About 80 times faster than what you're experiencing now. Has that image loaded yet?                     Good Rabbit!
<br>
<br>It isn't just modem speed which has advanced. Let's look at this image:<br>
<img src="w.php" width=180 height=180 alt="A quicker loading image"/>
<br>Compression technology has also improved significantly.       This image uses the WebP image format & is 470 Bytes.         For about half the file size, we get similar - if not better - picture quality.        This was set to quality level 5. By default WebP compression uses quality 75.
<br>You'll notice that the image does <i>not</i> load progressively.      You have to watch it draw line by line.     It's quicker to load, but is it more satisfying to watch?     OK, that's enough bunnies… for now!     We'll come back to them shortly.
<br>
<br>Indeed, at this speed, even Scalable Vector Graphics (SVG) are problematic. This logo is a mere 399 bytes - & you still have to watch it draw out.
<br>
<svg style="width:5em" xmlns="http://www.w3.org/2000/svg"
aria-label="HTML5" role="img"
viewBox="0 0 512 512"><path fill="#e34f26" d="M71 460L30 0h451l-41 460-185 52"/><path fill="#ef652a" d="M256 472l149-41 35-394H256"/><path fill="#ebebeb" d="M256 208h-75l-5-58h80V94H114l15 171h127zm-1 147l-63-17-4-45h-56l7 89 116 32z"/><path fill="#fff" d="M255 208v57h70l-7 73-63 17v59l116-32 16-174zm0-114v56h137l5-56z"/></svg>
<br>Audio is difficult over an extremely slow connection. Here's a short clip:<br>
<audio src=a.php autoplay controls preload></audio>
<br>It will take about a minute to fully load.                    This is 2 second clip of my voice compressed down to 1,595 bytes.                    It uses the Opus codec - which is pretty good at low bandwidth.                    Opus is a modern, web-first codec, it can do extremely high quality surround sound <i>and</i> low-bandwidth audio.                    This clip has bitrate of 6,000 bits per second                    - that's quite a bit more than the 175bps this website is loading at! 6Kbps is just about OK for speech                    but                    for music, it's a bit less acceptable!
<br>Wow! This is taking a <em>really</em> long time!                    That's what the web is like for a lot of people.                    Big fat websites, loaded over slow connections, onto creaking old devices.                    And this is just for speech!                    Music just takes too long to download - even at super-low quality.
<br>You might think MIDI is the way to go for loading music on a slow website.                    But, sadly / luckily no modern browser supports MIDI playback natively.                    And the JavaScript libraries required to enable playback are prohibitively large.
<br>                    While we wait, let me tell you more about this page. On most screens, the page will be automatically scrolling to the bottom whenever a new line of text appears.                    There is a tiny scrap of <mark>JavaScript</mark> firing every second.
<br>OK! That audio should have loaded. <button onclick="document.querySelector('audio').play();" type="button">Press This Button To Play Audio</button>
<br>Wasn't that exciting!
<br>
<br>Of course, we have a <i>very</i> efficient way to transmit voice. Modern browsers have Text-To-Speech built in!
<style>script::before{content:'<script>'}script::after{content:'</script>'}script{display:block;font-family:monospace}</style>
<script>m=new SpeechSynthesisUtterance;
m.rate=.8,m.pitch=0,m.text="Hello. This is your browser speaking to you! This is a very slow website.",m.lang="en-CA";</script>
<br><button onclick='speechSynthesis.speak(m)'>Press This Button To Hear Your Browser Speak</button>
<br>Did that work? I hope so!                                                                                                                          <br>Isn't it amazing what browsers can do these days?
<br>
<br>So, if compressed audio is out and we can't use MIDI, what can we use?
<script>var o,x=new AudioContext;
function playOscillator(t,e,c){(o=x.createOscillator()).frequency.setValueAtTime(t,e), o.connect(x.destination),o.start(e),o.stop(c)}</script>
<br>Your browser has a pretty sophisticated audio API. That means, in JavaScript, we can <i>program</i> audio.
<br>After a few seconds, your browser will create a famous piece of music.
<br><button onclick='playOscillator(392,x.currentTime,x.currentTime+1),playOscillator(440,x.currentTime+1,x.currentTime+2),playOscillator(349,x.currentTime+2,x.currentTime+3),playOscillator(175,x.currentTime+3,x.currentTime+4),playOscillator(261,x.currentTime+4,x.currentTime+5);' type="button">Press This Button To Play Audio</button>
<br>
<br><b>🐰 🥕</b>
<br>This site is too slow for even highly compressed video. So let's finish with some basic CSS animation for the bunny.
<style>b{font-size:3em;position:relative;animation:k 4s linear infinite;}
@keyframes k{0%{left:0;top:0;}33%{left:5em;top:0;}66%{left:3em;top:5em;}99%{left:0;top:0;}</style>
<br>
<br>That's it. There is no more to this demo site. Let me just close the HTML & turn off the JS.
<script>clearInterval(i);</script>
<a href="https://shkspr.mobi/blog/?p=37039">Read more about this site</a>.
</body>
</html>
EOT;

//	Remove formatting newlines
$str = str_replace("\n", '', $str);

//	Count character in a safe way
$len = mb_strlen($str, 'UTF-8');

//	Echo each character and wait
for ($i = 0; $i < $len; $i++) {
	echo mb_substr($str, $i, 1, 'UTF-8');
	//	1 second is 1000000
	usleep(  40000);
}

die();