<!DOCTYPE html>
<html lang="bn" xml:lang="bn">
<head>
	<title>Attendance Report</title>
	<meta charset="utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="{!! asset('assets/img/logo.png') !!}"/>

<style>
@font-face {
    font-weight: 400;
    font-weight:normal;
    font-style: normal;
}

body, html{
  background-color: #ffffff;
  font-size: 15px;
}

.invoice{
  width: 960px;
  margin: 20px auto;
  padding: 10px;
  background-color: #ffffff;
  position: relative;
}
.invoice-head{
  top: 0px;
  text-align: center;
}
@page {
  header: page-header;
  footer: page-footer;
}

.logo_img{
  position: absolute;
  top: 20px;
  left: 50px;
  width: 180px;
}
 
.assessment_status {
  position: absolute;
  top: 60px;
  font-size: 25px;
  color: #FF0000;
  font-weight: bold;
  border: 1px dashed #FF0000;
  padding: 2px 5px;
}

.assessment_status_green{
    position: absolute;
    top: 58px;
    font-size: 25px;
    width: 140px;
    color: #008000;
    font-weight: bold;
    border: 1px dashed #008000;
    padding: 2px 5px;
    margin-left: -400px;
}

.invoice h2, .invoice h3, .invoice h4{
  text-align: center;
  margin: 0px;
  font-weight: 600px;
}

.invoice h5{
  text-align: center;
  margin-bottom: 5px; 
  line-height: 1.5;
}
 
table.invoice-head{
  border: 0px;      
  width: 99%;
  margin: 30px auto 15px;
}

table.invoice-head th, table.invoice-head td{
  border: 0px;
  font-weight: normal;
  font-size: 15px;
}

table.invoice-body{
  font-weight: 400;
  border: 0px;
  margin: 0px auto;
}

table.invoice-body th, table.invoice-body td:first-child{
  text-align: center;
  font-weight: normal;
}

table.invoice-body td, table.invoice-body th{
  font-weight: 400;
  border: .5px solid #484848; /*0px*/
  font-size: 15px;
}
 
table.invoice-foot{  
  width: 100%;
  margin: 15px auto;
}

table.invoice-foot th, table.invoice-foot td{
  font-weight: 400;
  font-size: 13px;
}

.invoice-footer{  
  text-align: center;
  display: block;
}
 
.dashedline {
  border:none; 
  border-bottom: dashed 1px #000;

}
  
</style>

</head>
<body>
  <htmlpageheader name="page-header">
    {{ date("Y/m/d") }}
  </htmlpageheader>
	<div class="invoice" id="invoice">
 	 
<table>
    <tr>
      <td width="180px"></td>
      <td width="300px" align="center">
        <strong class="invoice-head"><img class="logo_img" src="{!! public_path('assets/img/logo.png') !!}"/></strong>
        <br><br>
        <h3>{{ $report_name }}
        <h4 style="text-align:center"><small>of</small> {{ $department->name }}</h4>
        <br>
        <h4>{{ $search_date_range }}</h4>
      </td>
  </tr>
  </table>  
<br/><br/><br/>
 
<table class="invoice-body" width="100%" cellpadding="5" cellspacing="0">

    <tr>
        <th scope="col">Sl.</th>
        <th scope="col">Name</th>
        <th scope="col">Account No.</th>
        <th scope="col">Absent Date</th>
        <th scope="col">Week</th>
        <th scope="col">Card Number</th>
        <th scope="col">TimeTable</th>
    </tr>
    @foreach($attendances as $key => $attendance)
	  <tr> 
        <td>{{ $key+1 }}</td>
        <td>{{ $attendance->information->name }}</td>
        <td>{{ $attendance->account_no }}</td>
        <td>{{ $attendance->absent_date }}</td>
        <td>{{ date("l",strtotime($attendance->absent_date)) }}</td>
        <td>{{ $attendance->information->card_number }}</td>
        <td>
            @if($attendance->information->department->timetable)
            {{ date('h:i A',strtotime($attendance->information->department->timetable->checkin)) }} - {{ date('h:i A',strtotime($attendance->information->department->timetable->checkout)) }}
            @endif
        </td>
	  </tr>
    @endforeach
  </table>
  <br>  <br>
  <div class="dashedline" width="110px"></div> 
  <h5 align="left" style="margin-top: 5px">Principal Signature</h5>

<htmlpagefooter name="page-footer">
  <b>Powered By: </b><a href="IT Lounge" style="color: #000000;text-decoration: none;">IT Lounge</a>
</htmlpagefooter>
</body>
</html>