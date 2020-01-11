<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<style>
    .error
    {
        color: #FF0000;
    }
</style>
</head>

<body>

<div class="container">
<div class="container">
        <div style="padding-top: 25px;">
        <center>
        <h2>Pendaftaran Online</h2>
        </center>
        </div>
    <form action="simpan-pendaftaran.php" method="post">
        <div class="row">
        <div class='col-sm-4'></div>
        <div class='col-sm-5'>
        <table class='table table-bordered'>
            <label>Nama:</label>
            <input type="text" name="Nama" class="form-control" placeholder="Masukan Username" />
            <span class="error">
            <?php
                if (isset($_GET["errNama"]))
                 {
                    $err = $_GET["errNama"];
                    echo $err;
                }
            ?>
            </span>
        </div>
    <div class="form-group">
            <label>Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" class="form-control" placeholder="Masukan Nama" />
            <span class="error">
            <?php
                if (isset($_GET["errtgl_lahir"]))
                 {
                    $err = $_GET["errtgl_lahir"];
                    echo $err;
                }
            ?>
            </span>
        </div>
    <div class="form-group">
         <label>Jenis Kelamin:</label>
         <div class="form-control">
         <input type="radio" name="kelamin" value='Laki-laki'> Laki - Laki &nbsp;
         <input type="radio" name="kelamin" value='Perempuan'> Perempuan &nbsp;</div>
         <span class="error">
         <?php
                if (isset($_GET["errkelamin"]))
                 {
                    $err = $_GET["errkelamin"];
                    echo $err;
                }
            ?>
        </span>    
    </div> 
    <div class="form-group">
            <label>Umur:</label>
            <input type="number" name="umur"class="form-control" placeholder="Masukan Umur Anda" />
            <span class="error">
            <?php
                if (isset($_GET["errumur"]))
                 {
                    $err = $_GET["errumur"];
                    echo $err;
                }
            ?>
            </span>
        </div>
    <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" ></textarea>
            <span class="error">
            <?php
                if (isset($_GET["erralamat"]))
                 {
                    $err = $_GET["erralamat"];
                    echo $err;
                }
            ?>
             </span>
    </div>
    <div class="form-group">
            <label>Daftar Riwayat Pekerjaan:</label>
            <textarea name="riwayat" class="form-control" rows="5"placeholder="Riwayat Pekerjaan" ></textarea>
            <span class="error">
            <?php
                if (isset($_GET["errriwayat"]))
                 {
                    $err = $_GET["errriwayat"];
                    echo $err;
                }
            ?>
            </span>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>

</div>
</table>
</body>
