<?php
	$this->title = $title;
	
	$pW= Yii::getAlias('@webroot')."/tmp/PocWSDL/";
	
	//echo $pW."1ASIWPOC1A_PDT_20161010_185735.wsdl";
	//exit;
	$wc=new SoapClient($pW."1ASIWPOC1A_PDT_20161010_185735.wsdl");
	
	echo "<pre>";print_r( $wc->__getFunctions() );echo "</pre>";
?>

<h1>agent/train</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
