<?php	
	#printing the <div> using alternative syntax for "while loop"
	/*	$i=0;
		while($i<50):
			echo '<div class="box"></div>';
			$i++; 
		endwhile; */
		
	#printing the <div> using "while loop"
	/* $i=0;
		while($i<50){
			echo '<div class="box"></div>';
			$i++;
		}
	*/
	
	#printing the <div> using "for loop"	
	/*for($i=0,$j=1;$i<50,$j<=50;$i++,$j++){
		echo '<div class="box">',$j,'</div>';
	}*/
	
	#printing the <div> using alternative syntax for "for loop"	
	for($i=0,$j=1;$i<50,$j<=50;$i++,$j++):
	//setting random width and height values, using rand() function
		$rand_width=rand(50,100);
		$rand_height=rand(50,100);
	//dynamically setting randomly generated width and height values of the div
	//while seperating variables html codes from php variables, we can use either "." or single quotes ' '
		echo '<div class="box" style="width:'.$rand_width.'px;height:'.$rand_height.'px;">'.$j.'</div>'; 
	endfor;


?>