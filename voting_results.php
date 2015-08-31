<!DOCTYPE html>
<?php
	$list = array();
	
	// Read the text file and retrieve $list
	$file_handle = fopen("poll_result.txt", "a+") or die("Unable to open file!");;
	while (!feof($file_handle) ) 
	{
		$line_of_text = fgets($file_handle);
		$list = explode('|', trim($line_of_text) );
	}
	ftruncate($file_handle, 0);
	fclose($file_handle);
	
	// Add up opt to survey
	$opt1 = $_POST['opt'];
	$opt2 = $_POST['opt2'];
	$opt4 = $_POST['opt4'];
	$opt31= $_POST['opt31'];
	$opt32= $_POST['opt32'];
	$opt33= $_POST['opt33'];
	$opt34= $_POST['opt34'];
	$opt35= $_POST['opt35'];
	$opt36= $_POST['opt36'];
		
	switch ($opt1)
	{
		case "Excellent":
			if ($list[0] != NULL)
				$list[0] = (int)$list[0] + 1;
			else
				$list[0] = "0";
			break;
		case "Good":
			if ($list[1] != NULL)
				$list[1] = (int)$list[1] + 1;
			else
				$list[1] = "0";
			break;		
		case "OK":
			if ($list[2] != NULL)
				$list[2] = (int)$list[2] + 1;
			else
				$list[2] = "0";
			break;		
		case "Bad":
			if ($list[3] != NULL)
				$list[3] = (int)$list[3] + 1;
			else
				$list[3] = "0";
			break;		
		case "Can_Be_Improved":
			if ($list[4] != NULL)
				$list[4] = (int)$list[4] + 1;
			else
				$list[4] = "0";
			break;		
		case "No_Comment":
			if ($list[5] != NULL)
				$list[5] = (int)$list[5] + 1;
			else
				$list[5] = "0";
			break;
	}

	switch ($opt2)
	{
		case "OnlineStore":
			if ($list[6] != NULL)
				$list[6] = (int)$list[6] + 1;
			else
				$list[6] = "0";
			break;
		case "PersonalBlog":
			if ($list[7] != NULL)
				$list[7] = (int)$list[7] + 1;
			else
				$list[7] = "0";
			break;		
		case "DIYWebsite":
			if ($list[8] != NULL)
				$list[8] = (int)$list[8] + 1;
			else
				$list[8] = "0";
			break;		
		case "WeightLoss":
			if ($list[9] != NULL)
				$list[9] = (int)$list[9] + 1;
			else
				$list[9] = "0";
			break;		
		case "EducationalSite":
			if ($list[10] != NULL)
				$list[10] = (int)$list[10] + 1;
			else
				$list[10] = "0";
			break;		
		case "SelfHelpBlog":
			if ($list[11] != NULL)
				$list[11] = (int)$list[11] + 1;
			else
				$list[11] = "0";
			break;
	}
	
	if ($opt31 == "PlayingVideoGames")
	{
		if ($list[12] != NULL)
			$list[12] = (int)$list[12] + 1;
		else
			$list[12] = "0";
	}
	if ($opt32 == "WatchingTelevision")
	{
		if ($list[13] != NULL)
				$list[13] = (int)$list[13] + 1;
			else
				$list[13] = "0";
	}
	if ($opt33 == "ReadingBooks")
	{
		if ($list[14] != NULL)
			$list[14] = (int)$list[14] + 1;
		else
			$list[14] = "0";
	}
	if ($opt34 == "ExploringAndTravelling")
	{
		if ($list[15] != NULL)
			$list[15] = (int)$list[15] + 1;
		else
			$list[15] = "0";
	}
	if ($opt35 == "Sleeping")
	{
		if ($list[16] != NULL)
			$list[16] = (int)$list[16] + 1;
		else
			$list[16] = "0";
	}
	if ($opt36 == "Others")
	{
		if ($list[17] != NULL)
			$list[17] = (int)$list[17] + 1;
		else
			$list[17] = "0";
	}
	
	switch ($opt4)
	{
		case "YesYesYes":
			if ($list[18] != NULL)
				$list[18] = (int)$list[18] + 1;
			else
				$list[18] = "0";
			break;
		case "YesYes":
			if ($list[19] != NULL)
				$list[19] = (int)$list[19] + 1;
			else
				$list[19] = "0";
			break;		
		case "Yes":
			if ($list[20] != NULL)
				$list[20] = (int)$list[20] + 1;
			else
				$list[20] = "0";
			break;		
		case "Hmm":
			if ($list[21] != NULL)
				$list[21] = (int)$list[21] + 1;
			else
				$list[21] = "0";
			break;		
		case "No":
			if ($list[22] != NULL)
				$list[22] = (int)$list[22] + 1;
			else
				$list[22] = "0";
			break;		
		case "NoNoNo":
			if ($list[23] != NULL)
				$list[23] = (int)$list[23] + 1;
			else
				$list[23] = "0";
			break;
	}
	
	
	$sumSite = $list[0] + $list[1] + $list[2] + $list[3] + $list[4] + $list[5];
	$sumProject = $list[6] + $list[7] + $list[8] + $list[9] + $list[10] + $list[11];
	$sumHobbies = $list[12] + $list[13] + $list[14] + $list[15] + $list[16] + $list[17];
	$sumPokemon = $list[18] + $list[19] + $list[20] + $list[21] + $list[22] + $list[23];
	$percent0 = ($list[0] / $sumSite) * 100;
	$percent1 = ($list[1] / $sumSite) * 100;
	$percent2 = ($list[2] / $sumSite) * 100;
	$percent3 = ($list[3] / $sumSite) * 100;
	$percent4 = ($list[4] / $sumSite) * 100;
	$percent5 = ($list[5] / $sumSite) * 100;
	$percent6 = ($list[6] / $sumProject) * 100;
	$percent7 = ($list[7] / $sumProject) * 100;
	$percent8 = ($list[8] / $sumProject) * 100;
	$percent9 = ($list[9] / $sumProject) * 100;
	$percent10 = ($list[10] / $sumProject) * 100;
	$percent11 = ($list[11] / $sumProject) * 100;
	$percent12 = ($list[12] / $sumHobbies) * 100;
	$percent13 = ($list[13] / $sumHobbies) * 100;
	$percent14 = ($list[14] / $sumHobbies) * 100;
	$percent15 = ($list[15] / $sumHobbies) * 100;
	$percent16 = ($list[16] / $sumHobbies) * 100;
	$percent17 = ($list[17] / $sumHobbies) * 100;
	$percent18 = ($list[18] / $sumPokemon) * 100;
	$percent19 = ($list[19] / $sumPokemon) * 100;
	$percent20 = ($list[20] / $sumPokemon) * 100;
	$percent21 = ($list[21] / $sumPokemon) * 100;
	$percent22 = ($list[22] / $sumPokemon) * 100;
	$percent23 = ($list[23] / $sumPokemon) * 100;
	
	
	$myfile = fopen("poll_result.txt", "a+") or die("Unable to open file!");
	
	for ($i = 0; $i < sizeof($list); $i++)
	{
		if ($list[$i] == NULL)
			fwrite($myfile, 0);
		else
			fwrite($myfile, $list[$i]);
		fwrite($myfile, "|");
	}
	fclose($myfile);
?>

<html>
<head>
	<title>PHP Form Survey</title>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row">
	
		<!-- Survey about My Site -->
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-arrow-right"></span>What do you think of my site? 
                    </h3>
                </div>
				<!-- Survey Form about My Site -->
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item">
								Excellent<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent0,1)?>%">
												<?php echo round($percent0,1) . "%";?>
										</div>
									</div>
								</label>
								Good<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent1,1)?>%">
												<?php echo round($percent1,1) . "%";?>
										</div>
									</div>
								</label>
								OK<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent2,1)?>%">
												<?php echo round($percent2,1) . "%";?>
										</div>
									</div>
								</label>
								Bad<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent3,1)?>%">
												<?php echo round($percent3,1) . "%";?>
										</div>
									</div>
								</label>
								Can Be Improved<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent4,1)?>%">
												<?php echo round($percent4,1) . "%";?>
										</div>
									</div>
								</label>
								No Comments<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent5,1)?>%">
												<?php echo round($percent5,1) . "%";?>
										</div>
									</div>
								</label>
						</li>
				</div>
            </div>
        </div>
		
		<!-- Survey about My Project -->
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-arrow-right"></span>What should my project be?
                    </h3>
                </div>
				<!-- Survey Form about My Project -->
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item">
								Online Store<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent6,1)?>%">
												<?php echo round($percent6,1) . "%";?>
										</div>
									</div>
								</label>
								Personal Blog<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent7,1)?>%">
												<?php echo round($percent7,1) . "%";?>
										</div>
									</div>
								</label>
								DIY Website<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent8,1)?>%">
												<?php echo round($percent8,1) . "%";?>
										</div>
									</div>
								</label>
								Weight Loss<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent9,1)?>%">
												<?php echo round($percent9,1) . "%";?>
										</div>
									</div>
								</label>
								Educational Site<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent10,1)?>%">
												<?php echo round($percent10,1) . "%";?>
										</div>
									</div>
								</label>
								Self Help Blog<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent11,1)?>%">
												<?php echo round($percent11,1) . "%";?>
										</div>
									</div>
								</label>
						</li>
				</div>
			</div>
        </div>

		<!-- Survey about Your Hobbies -->
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-hand-right"></span>What is/are your hobby(ies?)</h3>
                </div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item">
								Playing Video Games<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent12,1)?>%">
												<?php echo round($percent12,1) . "%";?>
										</div>
									</div>
								</label>
								Watching Television<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent13,1)?>%">
												<?php echo round($percent13,1) . "%";?>
										</div>
									</div>
								</label>
								Reading Books<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent14,1)?>%">
												<?php echo round($percent14,1) . "%";?>
										</div>
									</div>
								</label>
								Exploring & Travelling<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent15,1)?>%">
												<?php echo round($percent15,1) . "%";?>
										</div>
									</div>
								</label>
								Sleeping<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent16,1)?>%">
												<?php echo round($percent16,1) . "%";?>
										</div>
									</div>
								</label>
								Others<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent17,1)?>%">
												<?php echo round($percent17,1) . "%";?>
										</div>
									</div>
								</label>
						</li>
				</div>

            </div>
        </div>
		
		<!-- Survey about Pokemon -->
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-arrow-right"></span>Do you like Pokemon?
                    </h3>
                </div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item">
								YesYesYes<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent18,1)?>%">
												<?php echo round($percent18,1) . "%";?>
										</div>
									</div>
								</label>
								Yes Yes<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent19,1)?>%">
												<?php echo round($percent19,1) . "%";?>
										</div>
									</div>
								</label>
								Yes<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent20,1)?>%">
												<?php echo round($percent20,1) . "%";?>
										</div>
									</div>
								</label>
								Hmm<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent21,1)?>%">
												<?php echo round($percent21,1) . "%";?>
										</div>
									</div>
								</label>
								No<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent22,1)?>%">
												<?php echo round($percent22,1) . "%";?>
										</div>
									</div>
								</label>
								No No No<label style="width:100%">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar"
											 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percent23,1)?>%">
												<?php echo round($percent23,1) . "%";?>
										</div>
									</div>
								</label>
						</li>
				</div>
            </div>
        </div>
	</div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
				<button type="button" onclick="location.href='voting_form.html'"
				        class="btn btn-warning btn-block">Back to Voting</button>				
		</div>
        <div class="col-md-3"></div>
	</div>
	
</body>
</html>