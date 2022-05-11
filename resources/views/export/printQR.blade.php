<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
            body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
       
        font: 12pt "Tahoma";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 210mm;
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        padding-top: 4cm;
       
        height: 257mm;
      
    }
    
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 297mm;        
        }
        .page {
            margin: 0;
           
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
        <div class="subpage">{{QrCode::size(50)->generate("http://localhost/reg_archive/public/".$doc->attach);}}</div>    
    </div>
 
</div>
</body>
</html>

<script>
   window.print();
   window.location = "/reg_archive/public/Export/"  ;

</script>