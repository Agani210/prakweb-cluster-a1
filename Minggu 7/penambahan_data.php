<?php
 require_once 'penghubung.php';

 $query = "SELECT * FROM jurusan ";

 $result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Data</title>
    <style type="text/css">
      * {
        font-family: "Times New Roman";
      }
      h1 {
        text-transform: uppercase;
        color: blue;
      }
    button {
          background-color: blue;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: blue;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Data</h1>
      <center>
      <form method="POST" action="tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>NRP</label>
          <input type="text" name="nrp" autofocus="" required="" />
        </div>
        <div>
          <label>Nama</label>
         <input type="text" name="nama" />
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat" required="" />
        </div>
        <div>
          <label>Jurusan</label>
 
         <select>

<?php while($data = mysqli_fetch_assoc($result) ){?>

 <option value="<?php echo $data['nama_jur']; ?>"><?php echo $data['nama_jur']; ?></option>

<?php } ?>

</select>
        </div>
        <div>
          <label>Foto</label>
         <input type="file" name="foto" required="" />
        </div>
        <div>
         <button type="submit">Simpan Data</button>
        </div>
        </section>
      </form>
  </body>
</html>