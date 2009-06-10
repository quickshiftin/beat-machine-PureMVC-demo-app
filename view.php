<div id="bpmView">
	<p id="bpmViewTitle">
		BPM View
	</p>
	<p id="bpmGraphic">
	<?php
		if(!is_string($this->sBpmGraphic) || empty($this->sBpmGraphic))
			echo 'N/A';
		else
			echo $this->sBpmGraphic;
	?>
	</p>
	<p>
	<?php
		/// display 0 by default
		$iBpm = $this->iBpm;
		if(!is_integer($this->iBpm) && $this->iBpm > 0)
			$iBpm = 0;
	?>
	Current BPM: <?=$iBpm?>
	</p>
</div>
