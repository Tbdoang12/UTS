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
    width: calc(100% - 200px);
  }

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

}
</style>
<body>
 <form>
   <h2 align="center">Data Pemantauan Covid 19 Wilayah  <?php echo $_GET["daerah"]; ?></h2>
   <h4 align="center"><?php $t=time();
   echo(date("Y-m-d",$t)); ?>
   </h4>
   <h4 align="center"> <?php echo $_GET["nama"]; ?> <?php echo $_GET["nim"]; ?></h4>
   <table border="1">
       <label>Positif: <?php echo $_GET["positif"]; ?></label>
       <label>dirawat: <?php echo $_GET["dirawat"]; ?></label>
       <label>
         <label>sembuh: <?php echo $_GET["sembuh"]; ?></label>
         <label>meninggal: <?php echo $_GET["mati"]; ?></label>
         
        </form>
      </table>
</body>
</html>