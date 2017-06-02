<?php

echo '<form id="insertingComment" method="post" action="../php/InsertComment.php">
	    <div class="comments">
	    	<p style="text-align: left;">Napisi komentar</p>
            <input type="text" name="naslovKomentara" placeholder="Naslov komentara" style="margin-bottom:15px; width: 100%; height: 25px">
	    	<br />
	    	<textarea name="tekstKomentara"  placeholder="Napisite tekst komentara" style="width: 100%; height: 80px" ></textarea>
	    	<button style="margin: 5px" type="submit" name="postavi" >Postavi komentar</button>
	    </div>
	  </form>';

?>