<?php
$host = htmlspecialchars(strtolower($_SERVER['SERVER_NAME']));
$path = htmlspecialchars($_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="theme-color" content="#111">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 16 16%22%3E%3Crect width=%2216%22 height=%2216%22 rx=%223%22 fill=%22%23111%22/%3E%3Cpath d=%22M3 4l4 4-4 4M8 12h5%22 stroke=%22%237fd17f%22 stroke-width=%222%22 fill=%22none%22/%3E%3C/svg%3E">
<title><?php echo $host; ?>: 410 Gone</title>
<style>
:root { color-scheme: dark; --bg: #111; --fg: #d4d4d4; --dim: #8a8a8a; --prompt: #7fd17f; --link: #8ab4f8; --err: #e06c75; }
* { box-sizing: border-box; }
body { margin: 0; background: var(--bg); color: var(--fg); font: 15px/1.6 ui-monospace, "SF Mono", Menlo, Consolas, "Liberation Mono", monospace; }
body { padding: env(safe-area-inset-top) env(safe-area-inset-right) env(safe-area-inset-bottom) env(safe-area-inset-left); }
main { max-width: 52rem; margin: 0 auto; padding: 3rem 1.25rem 4rem; }
h1, h2 { font: inherit; margin: 2rem 0 .5rem; color: var(--prompt); overflow-wrap: anywhere; }
h1 { margin-top: 0; }
h1 span, h2 span { color: var(--fg); }
p { margin: 0 0 .5rem; overflow-wrap: anywhere; }
.err { color: var(--err); }
.dim { color: var(--dim); }
a { color: var(--link); text-decoration: none; overflow-wrap: anywhere; }
a:hover, a:focus-visible { text-decoration: underline; }
a:focus-visible { outline: 1px solid var(--link); outline-offset: 2px; }
.cursor { display: inline-block; width: .6em; height: 1.1em; vertical-align: text-bottom; background: var(--fg); animation: blink 1s steps(1) infinite; }
@keyframes blink { 50% { opacity: 0; } }
/* CRT: same tube as index.html */
body { text-shadow: 0 0 .25em rgba(212, 212, 212, .25); }
.crt { position: fixed; inset: 0; pointer-events: none; z-index: 1;
  background: repeating-linear-gradient(to bottom, rgba(0, 0, 0, .2) 0 1px, transparent 1px 2px),
              radial-gradient(ellipse at center, transparent 60%, rgba(0, 0, 0, .55) 100%); }
/* iOS only: fade into the solid theme-color bars Safari 26 paints over the page edges */
@supports (-webkit-touch-callout: none) { .crt::before { content: ""; position: absolute; inset: 0; background: linear-gradient(var(--bg) env(safe-area-inset-top), transparent calc(env(safe-area-inset-top) + 1rem), transparent calc(100% - env(safe-area-inset-bottom) - 1rem), var(--bg) calc(100% - env(safe-area-inset-bottom))); } }
@media (prefers-reduced-motion: reduce) { .cursor { animation: none; } }
@media (max-width: 40rem) { body { font-size: 14px; } }
</style>
</head>
<body>
<div class="crt" aria-hidden="true"></div>
<main>
<h1>~/<?php echo $host; ?> $ <span>cat <?php echo $path; ?></span></h1>
<p class="err">cat: <?php echo $path; ?>: Gone, and not coming back</p>
<p class="dim">This was removed on purpose. There is no new address.</p>

<h2>~/<?php echo $host; ?> $ <span>cd <a href="/">~</a></span></h2>

<h2>~/<?php echo $host; ?> $ <span class="cursor" aria-hidden="true"></span></h2>
</main>
</body>
</html>
