<!DOCTYPE html>
<html>
<head>
 <title>Membuat Form Input - AnsoriWeb</title>
</head>
<style>
    body {
    margin: 0;
    padding: 0;
   }
     * {
  box-sizing: border-box;
}
  form {
  padding: 1em;
  background: #f9f9f9;
  border: 1px solid #c1c1c1;
  margin-top: 2rem;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
  padding: 1em;
}
form input {
  margin-bottom: 1rem;
  background: #fff;
  border: 1px solid #9c9c9c;
  text-transform: capitalize;
}
form button {
  background: lightgrey;
  padding: 0.7em;
  border: 0;
}

form button:hover {
  background: green;
  color: white;
}
form span a{
  background: lightblue;
  padding: 0.7em;
  border: 0;
  text-decoration: none;
  color: black;
  text-align: center;
}

form span a:hover {
  background: blue;
  color: white;
}


label {
  text-align: right;
  display: block;
  padding: 0.5em 1.5em 0.5em 0;
}
input {
  width: 100%;
  padding: 0.7em;
  margin-bottom: 0.5rem;
}
input:focus {
  outline: 3px solid green;
}

@media (min-width: 400px) {
  form {
    overflow: hidden;
  }
  label {
    float: left;
    width: 200px;
  }
  input {
    float: left;
    width: calc(100% - 200px);
  }


  button {
    float: right;
    width: calc(50% - 200px);
  }

}
</style>
<body>
 <form action="aksi.php" method="GET">
 <h1 align="center">Form Data pasien covid 19</h1>
   <label> Positif:</label>
    <input name="positif" type="text">
    <label>dirawat:</label>
    <input name="dirawat" type="text">
    <label>sembuh:</label>
    <input name="sembuh" type="text">
    <label>meninggal:</label>
    <input name="mati" type="text">
    <label>Nama Operator:</label>
    <input name="nama" type="text"> <br>
    <label>Nim:</label>
    <input name="nim" type="text">

  <label for="daerah">daerah:</label>
  <select name="daerah" id="cars">
    <option value="DKI Jakarta">DKI Jakarta</option>
    <option value="Jawa Barat">Jawa Barat</option>
    <option value="Banten">Banten</option>
    <option value="Jawa Tengah">Jawa Tengah</option>
  </select>
  <br><br>
  <button>Kirim</button>

 </form>
</body>
</html>