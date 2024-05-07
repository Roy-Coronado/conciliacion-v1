<?php include "../conexion/conciliacion.php" ;
 $tablaMeses = mysqli_query($conect,"SELECT mes,nombre_mes FROM meses");
$saldo_anterior= "";
$mas_deposito = "";
$chequeAnulados= "";
$notasCredito = "";
$ajusteLibro = "";
$subtotal1 = "";
$chequesGirados = "";
$notasDebito ="";
$menosAjusteLibro = "";
$subtotal2="";
$saldoLibro="";
$saldoBanco =""; 
$depositoTransito ="";
$chequesCirculacion="";
$ajusteBanco="";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $mes = $_POST["mes"];
    $anio = $_POST["anio"];

    $sql = "SELECT * FROM conciliacion WHERE mes = '$mes' AND agno = '$anio'";
    $result = $conect -> query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $saldo_anterior = $row["saldo_anterior"];
        $mas_deposito = $row["masdepositos"];
        $chequeAnulados= $row["maschequesanulados"];
        $notasCredito = $row["masnotascredito"];
        $ajusteLibro = $row["masajusteslibro"];
        $subtotal1 = $row["subtotal1"];
        $chequesGirados = $row["menoschequesgirados"] ;
        $notasDebito = $row["menosnotasdebito"];
        $menosAjusteLibro = $row["menosajusteslibro"];
        $subtotal2=  $row["saldolibros"] ;
        $saldoLibro= $row["saldolibros"];
        $depositoTransito = $row["masdepositostransito"];
        $chequesCirculacion = $row["menoschequescirculacion"];
        $ajusteBanco =$row ["masajustesbanco"];
        $saldoBanco =$row["saldobanco"];        
    } else {
        echo "<script>alert('No hay datos de conciliacion')</script>";
    }
}
?>