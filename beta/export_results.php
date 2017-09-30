<?php
require_once "PHPExcel-1.8/Classes/PHPExcel.php";
include_once('connectDB.php');
session_start();
if($_SESSION['admin']){
	
	$fetch_user_lessons = mysqli_query($con, "SELECT * FROM complete_lesson INNER JOIN lessons on complete_lesson.lesson_id = lessons.lesson_no WHERE complete_lesson.user_id = {$_GET['id']}") or die(mysqli_error($con));
	$fetch_account_name = mysqli_query($con, "SELECT * FROM accounts WHERE id = {$_GET['id']}");
	$username = mysqli_fetch_assoc($fetch_account_name)['username'];
	if(mysqli_num_rows($fetch_user_lessons) != 0){
		$overrallScore = 140;
		$currentScore = 0;
		$rowcount = 2;
		
		$e = new PHPExcel();
		$e->setActiveSheetIndex(0)->setCellValue('A1','Lessons')->setCellValue('B1','Score')->setCellValue('C1','Game Type');
		while($row = mysqli_fetch_assoc($fetch_user_lessons)){
			$currentScore += $row['score'];
			$e->setActiveSheetIndex(0)->setCellValue("A{$rowcount}",$row['lesson_name'])->setCellValue("B{$rowcount}", $row['score'])->setCellValue("C{$rowcount}",$row['game_type']);
			$rowcount++;
		}
		$percentage = number_format((($currentScore/$overrallSCore) * 50) + 50,2);
		$e->setActiveSheetIndex(0)->setCellValue("B{$rowcount}", "$currentScore/$overrallScore")->setCellValue("C{$rowcount}","$percentage");
		$file = PHPExcel_IOFactory::createWriter($e, 'Excel2007');
		$file->save("reports/{$username}.xlsx");
		
		$_SESSION['success']="<b>Success</b> Result for {$username} has been generated";
		header("Location: accounts_admin.php");
	}
	else{
		$_SESSION['error'] = "<b>Unable to generate report</b> This user hasn't taken any lessons yet.";
		header("Location: accounts_admin.php");
	}
}
else{
	$_SESSION['error'] = '<b>Error</b> Acccess Denied';
	header("Location: index.php");
}
?>