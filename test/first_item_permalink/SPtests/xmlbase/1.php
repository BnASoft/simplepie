<?php

$data = <<<EOD
<feed xmlns="http://www.w3.org/2005/Atom" xml:base="http://example.com/">
	<entry>
		<link rel="alternate" href="/alternate"/>
	</entry>
</feed>
EOD;

$expected = 'http://example.com/alternate';

?>