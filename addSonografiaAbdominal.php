<?php

include "config.php";
$input = file_get_contents('php://input');
$data = json_decode($input,true);
$message = array();
$sonoAbdominalIdpaciente=  $data['id_paciente'];
$sonoAbdominalNombre= $data['sonoAbdominalNombre'];
$sonoAbdominalApellido = $data['sonoAbdominalApellido'];
$sonoAbdominalEdad = $data['sonoAbdominalEdad'];
$sonoAbdominalMorfologia = $data['sonoAbdominalMorfologia'];
$sonoAbdominalLesionesFocales = $data['sonoAbdominalLesionesFocales'];
$sonoAbdominalMedidaHigado = $data['sonoAbdominalMedidaHigado'];
$sonoAbdominalViasBiliares = $data['sonoAbdominalViasBiliares'];
$sonoAbdominalVesiculaForma   = $data['sonoAbdominalVesiculaForma'];
$sonoAbdominalVesiculaSituacion = $data['sonoAbdominalVesiculaSituacion'];
$sonoAbdominalVesiculaPared = $data['sonoAbdominalVesiculaPared'];
$sonoAbdominalVesiculaLongitud = $data['sonoAbdominalVesiculaLongitud'];
$sonoAbdominalVesiculaAncho = $data['sonoAbdominalVesiculaAncho'];
$sonoAbdominalVesiculaLitos = $data['sonoAbdominalVesiculaLitos'];
$sonoAbdominalVesiculaPolipos = $data['sonoAbdominalVesiculaPolipos'];
$sonoAbdominalPancreasForma = $data['sonoAbdominalPancreasForma'];
$sonoAbdominalPancreasSituacion = $data['sonoAbdominalPancreasSituacion'];
$sonoAbdominalPancreasCabeza  = $data['sonoAbdominalPancreasCabeza'];
$sonoAbdominalPancreasCuerpo = $data['sonoAbdominalPancreasCuerpo'];
$sonoAbdominalPancreasCola = $data['sonoAbdominalPancreasCola'];
$sonoAbdominalPancreasContorno = $data['sonoAbdominalPancreasContorno'];
$sonoAbdominalPancreasEcogenicidad = $data['sonoAbdominalPancreasEcogenicidad'];
$sonoAbdominalRinonDVisualiza = $data['sonoAbdominalRinonDVisualiza'];
$sonoAbdominalRinonDForma = $data['sonoAbdominalRinonDForma'];
$sonoAbdominalRinonDContornos = $data['sonoAbdominalRinonDContornos'];
$sonoAbdominalRinonDRelacion = $data['sonoAbdominalRinonDRelacion'];
$sonoAbdominalRinonDEvidencia = $data['sonoAbdominalRinonDEvidencia'];
$sonoAbdominalRinonDLitiasis  = $data['sonoAbdominalRinonDLitiasis'];
$sonoAbdominalRinonDTumoraciones = $data['sonoAbdominalRinonDTumoraciones'];
$sonoAbdominalRinonLVisualiza = $data['sonoAbdominalRinonLVisualiza'];
$sonoAbdominalRinonLForma = $data['sonoAbdominalRinonLForma'];
$sonoAbdominalRinonLContornos = $data['sonoAbdominalRinonLContornos'];
$sonoAbdominalRinonLRelacion = $data['sonoAbdominalRinonLRelacion'];
$sonoAbdominalRinonLEvidencia = $data['sonoAbdominalRinonLEvidencia'];
$sonoAbdominalRinonLLitiasis  = $data['sonoAbdominalRinonLLitiasis'];
$sonoAbdominalRinonLTumoraciones = $data['sonoAbdominalRinonLTumoraciones'];
$sonoAbdominalBazoVisualiza=  $data['sonoAbdominalBazoVisualiza'];
$sonoAbdominalBazoForma= $data['sonoAbdominalBazoForma'];
$sonoAbdominalBazoEcotextura = $data['sonoAbdominalBazoEcotextura'];
$sonoAbdominalBazoTumoraciones = $data['sonoAbdominalBazoTumoraciones'];
$sonoAbdominalBazoLongitud = $data['sonoAbdominalBazoLongitud'];
$sonoAbdominalBazoAncho = $data['sonoAbdominalBazoAncho'];
$sonoAbdominalAortaDiametro = $data['sonoAbdominalAortaDiametro'];
$sonoAbdominalAortaValor = $data['sonoAbdominalAortaValor'];
$sonoAbdominalConclusiones = $data['sonoAbdominalConclusiones'];



$q = mysqli_query($con, "INSERT INTO sonografia_abdominal (id_tipo_sonografia,id_paciente, nombre, apellido, edad,morfologia,lesionesFocales,medidaHigado,viasBiliares,vesiculaForma,vesiculaSituacion,vesiculaPared,vesiculaLongitud,vesiculaAncho,vesiculaLitos,vesiculaPolipos,pancreasForma,pancreasSituacion,pancreasCabeza,pancreasCuerpo,pancreasCola,pancreasContorno,pancreasEcogenicidad,rinondVisualiza,rinondForma,rinondContornos,rinondRelacion,rinondEvidencia,rinondLitiasis,rinondtumoraciones,rinonlVisualiza,rinonlForma,rinonlContornos,rinonlRelacion,rinonlEvidencia,rinonlLitiasis,rinonltumoraciones,bazoVisualiza,bazoForma,bazoEcotextura,bazoTumoraciones,bazoLongitud,bazoAncho,aortaDiametro,aortaValor,conclusiones,fecha)
VALUES (1,'$sonoAbdominalIdpaciente','$sonoAbdominalNombre','$sonoAbdominalApellido','$sonoAbdominalEdad','$sonoAbdominalMorfologia','$sonoAbdominalLesionesFocales','$sonoAbdominalMedidaHigado','$sonoAbdominalViasBiliares','$sonoAbdominalVesiculaForma','$sonoAbdominalVesiculaSituacion','$sonoAbdominalVesiculaPared','$sonoAbdominalVesiculaLongitud','$sonoAbdominalVesiculaAncho','$sonoAbdominalVesiculaLitos','$sonoAbdominalVesiculaPolipos','$sonoAbdominalPancreasForma','$sonoAbdominalPancreasSituacion','$sonoAbdominalPancreasCabeza','$sonoAbdominalPancreasCuerpo','$sonoAbdominalPancreasCola','$sonoAbdominalPancreasContorno','$sonoAbdominalPancreasEcogenicidad','$sonoAbdominalRinonDVisualiza','$sonoAbdominalRinonDForma','$sonoAbdominalRinonDContornos','$sonoAbdominalRinonDRelacion','$sonoAbdominalRinonDEvidencia','$sonoAbdominalRinonDLitiasis','$sonoAbdominalRinonDTumoraciones','$sonoAbdominalRinonLVisualiza','$sonoAbdominalRinonLForma','$sonoAbdominalRinonLContornos','$sonoAbdominalRinonLRelacion','$sonoAbdominalRinonLEvidencia','$sonoAbdominalRinonLLitiasis','$sonoAbdominalRinonLTumoraciones','$sonoAbdominalBazoVisualiza','$sonoAbdominalBazoForma','$sonoAbdominalBazoEcotextura','$sonoAbdominalBazoTumoraciones','$sonoAbdominalBazoLongitud','$sonoAbdominalBazoAncho','$sonoAbdominalAortaDiametro','$sonoAbdominalAortaValor','$sonoAbdominalConclusiones', now())");

if($q)
{
    http_response_code(201);
    $message['status'] = "Success";
}
else
{
    http_response_code(422);
    $message['status'] = "Error";
}

echo json_encode($message);
echo mysqli_error($con);