
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		//$arquivo = 'msgcontatos.xls';

		$arquivo = 'msgcontatos.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5" align="center">Relatórios </tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>Nome</b></td>';
		$html .= '<td><b>E-mail</b></td>';
		$html .= '<td><b>Assunto</b></td>';
		$html .= '<td><b>Data</b></td>';
		$html .= '</tr>';
		

		$html .= '<td>50</td>';
		$html .= '<td>Jeferson</td>';
		$html .= '<td>jotajeff@gmail.com</td>';
		$html .= '<td>Teste, estamos testando a função / acentuação</td>';
		$html .= '<td>08/07/2020</td>';


		//Selecionar todos os itens da tabela 
		/*
		$result_msg_contatos = "SELECT * FROM mensagens_contatos";
		$resultado_msg_contatos = mysqli_query($conn , $result_msg_contatos);
		
		while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){
			$html .= '<tr>';
			$html .= '<td>'.$row_msg_contatos["id"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nome"].'</td>';
			$html .= '<td>'.$row_msg_contatos["email"].'</td>';
			$html .= '<td>'.$row_msg_contatos["assunto"].'</td>';
			$data = date('d/m/Y H:i:s',strtotime($row_msg_contatos["created"]));
			$html .= '<td>'.$data.'</td>';
			$html .= '</tr>';
			;
		}
		*/
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 2020 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-Transfer-Encoding: UTF-8");
		//header ("Content-type: text/csv");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>