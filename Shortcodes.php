<?php

class Shortcodes {
	public function __construct(){

	}
	function testShortcode(): String {
		$string = "testermester ";
		return $string;
	}

    function wpb_news_shortcode()
    {

        $news1 = array('baz', 'erik Weber investiert in Gold');
        $news2 = array('BBC', 'The King bought 25 ');
        $news3 = array('Eritrea News', 'Nestlé Filiale wird überfallen');
        $news4 = array('CNN', 'Bidon makes Deal with Saudi Arabia to increase Oil Shipping Volumes for US-Industry');
        $news5 = array('monkey', 'wallstreet');


        return "
<!--<div>
<table>
<thr>
<th>Publisher</th>
<th>Inhalt</th>
<th>Publisher</th>
<th>Inhalt</th>
</tr>

<tr><td>
    $news1[0]
</td><td>
    $news1[1]
</td><td>
    $news2[0]
</td><td>
    $news2[1]
</td></tr>
<tr><td>
    $news4[0]
</td><td>
    $news4[1]
</td><td>
    $news5[0]
</td><td>
    $news5[1]
</td></tr>

</table>-->

<table style='width:100%'>
  <tr>
    <th>Publisher:</th>
    <td>$news1[0]</td>
    <td>$news1[0]</td>
    <td>$news1[0]</td>
    <td>$news1[0]</td>
                
  </tr>
  <tr>
    <th>Inhalt:</th>
    <td>555 77 854</td>
  </tr>
</table>
</div>

         ";
    }
}