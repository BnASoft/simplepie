<?php

class SimplePie_First_Item_Title_Test_RSS_091_Userland_Title_2 extends SimplePie_First_Item_Title_Test
{
	function data()
	{
		$this->data = 
'<rss version="0.91">
	<channel>
		<item>
			<title><![CDATA[This &amp;amp; this]]></title>
		</item>
	</channel>
</rss>';
	}
	
	function expected()
	{
		$this->expected = 'This &amp;amp;amp; this';
	}
}

?>