<?php
//koneksi ke database, username,password  dan namadatabase menyesuaikan 


//memanggil file excel_reader
include '../../IndoCaliPlast/Model/excel_reader.php';




?>

<form name="myForm" id="myForm" onSubmit="return validateForm()" action="/Controller/TambahKaryawanController.php" method="post" enctype="multipart/form-data">
    <input type="file" id="filepegawaiall" name="filepegawaiall" />
    <input type="submit" name="sub" value="Import" /><br/>
</form>

<script type="text/javascript">
//    validasi form (hanya file .xls yang diijinkan)
    function validateForm()
    {
        function hasExtension(inputID, exts) {
            var fileName = document.getElementById(inputID).value;
            return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
        }

        if(!hasExtension('filepegawaiall', ['.xls'])){
            alert("Hanya file XLS (Excel 2003) yang diijinkan.");
            return false;
        }
    }
</script>