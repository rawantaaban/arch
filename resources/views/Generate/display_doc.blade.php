@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>



body {
  margin: 0;
  padding: 0;
  background-color: #FAFAFA;
  font-family: "Cairo";
  
}

* {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.page {
  width: 21cm;
  min-height: 29.7cm;
  padding: 2cm;
  margin: 1cm auto;
  border: 1px #D3D3D3 solid;
  border-radius: 5px;
  background: white;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.subpage {
  padding: 1cm;
  border: 5px black solid;
  height: 256mm;
  outline: 2cm #FFEAEA solid;
}

@page {
  size: A4;
  margin: 0;
}

@media print {
  .page {
    margin: 0;
    border: initial;
    border-radius: initial;
    width: initial;
    min-height: initial;
    box-shadow: initial;
    background: initial;
    page-break-after: always;
  }
}

    </style>
</head>
<body>
    


<div class="book">
  <div class="page">
    <div class="subpage">
        

<div style=" display: flex; justify-content: space-between;">
<h4 style="display:inline-block;font-weight: bold; font-family: 'Cairo'">قسم التخطيط/ شعبة بيانات الطلبة</h4>
<h4 style="display:inline-block;font-weight: bold; font-family: 'Cairo'">رقم (546)</h4>
</div>
<div style=" display: flex; justify-content: space-between;">
<h4 style="display:inline-block;font-weight: bold; font-family: 'Cairo'">السيرة الدراسية للطالب</h4>
<h4 style="display:inline-block;font-weight: bold; font-family: 'Cairo'">التاريخ    22 /   03 / 2021</h4>
</div>
<br>
<br>
<br><br>
<br>
<br>

<h4 style="display:inline-block;text-align: right; font-family: 'Cairo'">
تم تدقيق اسم الطالب (  روان علي تعبان حوشان  ) وتبين وروده في قاعدة بيانات في جامعة/ كلية (  الامام جعفر الصادق عليه السلام  ) قسم ( ادارة الاعمال )



<br>
<br>
<br>
<br>


* العام الدراسي (2011-2012) مرحلة اولى - صباحي 
<br><br>

* العام الدراسي (2014-2013) مرحلة اولى - صباحي 
<br><br>

* العام الدراسي (2015-2014) مرحلة اولى - صباحي 
<br><br>

* العام الدراسي (2016-2015) مرحلة اولى - صباحي 
<br><br>



</h4>

<br><br><br><br>
<br><br><br><br>
<div style=" display: flex; justify-content: space-between;">
<h4 style="display:inline-block;font-weight: bold; font-family: 'Cairo'">
    الموظف
</h4>

<h4 style="display:inline-block;font-weight: bold; font-family: 'Cairo'">
    م.م خالد محمد عبد
    <br>
    مدير قسم التخطيط
    <br>
    2021 / 04 / 22
</h4 >
    </div>
    </div>
        

  </div>
</div>
			
<center><button class="btn btn-info" style=" background-color:#184969; width: 30%; font-family: 'Cairo'; " id="search" name="search" type="button">طباعة</button>
</center>

</body>
</html>
@endsection


