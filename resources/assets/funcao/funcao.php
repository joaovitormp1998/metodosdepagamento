<?php

   class funcao {  
	   
	   
	    //Seleciona item de acordo com as informações do banco ou no proprio html. Param 1 = valor que existe no formulario 2 valor vindo do banco.
    	function selected( $value, $selected ){
    		return $value==$selected ? ' selected="selected"' : '';
    	} 
		

   
		
		function soNumero($str) {
		    return preg_replace("/[^0-9]/", "", $str);
		}


		function dataAtual(){
			//Retorna a data atual
			$timestamp = mktime(date("H")-4, date("i"), date("s"), date("m"), date("d"), date("Y"), 0);
			$data = gmdate("Y/m/d H:i:s", $timestamp);	
			
			return $data;
		}
	   
	   function datasql($databr) {
			if (!empty($databr)){
				$p_dt = explode('/',$databr);
				$data_sql = $p_dt[2].'-'.$p_dt[1].'-'.$p_dt[0];
				return $data_sql;
			}
		}
		
		function formataDataDiaMesAno($data){
           return date("d/m/Y", strtotime($data));
		}
		
		function parteTexto($frase,$posicaoInicial, $posicaoFinal){			
			return substr($frase, $posicaoInicial, $posicaoFinal);
		}
			
		function alerta($texto,$redirect=""){
			print("<Script language=javascript>");
			if ($texto != '')
				print("alert(\" $texto \");");
			if ($redirect!="")
				print(" location=\"$redirect\";");
			print("</script>");
		}
   }
?>