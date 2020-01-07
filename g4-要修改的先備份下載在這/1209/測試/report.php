<?php
try{
    require_once("../../connection.php");
    
    // $sql="SELECT report.repNo, report.memNo, member.memId, activity.actNo, activity.actName, report.repDate, report.repReason, report.repStat FROM `activity` JOIN `report` on activity.memNo = report.memNo JOIN `member` on member.memNo = activity.memNo";
    $sql="SELECT report.repNo, report.memNo, member.memId, activity.actNo, activity.actName, report.repDate, report.repReason, report.repStat FROM `report` JOIN `activity` on activity.actNo = report.actNo JOIN `member` on member.memNo = report.memNo";
    $report=$pdo->query($sql);
    $repRows = $report->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode( $repRows);
  

}catch(PDOException $e){
    echo $e->getMessage();
  }

?>
