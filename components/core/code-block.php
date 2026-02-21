<?php
/**
 * {
 * "dl-type": "component",
 * "name": "Code Block",
 * "description": "A block for displaying source code",
 * "category": "Core"
 * }
 */

/*
This custom component is a code block styled with Tailwind.
Since Tailwind's preflight CSS resets default styles, this component makes it easy for users
to insert a code block with styles you specify for your theme.
*/
?>

<pre class="w-full overflow-auto p-3 block bg-slate-700 font-mono text-zinc-100 rounded-sm">
  <code>Code</code>
</pre>