<?php 
/**
* 
*/
require('Main.php');
class formula
{
	private $correo;
	private $nombre;
	private $ciudad;
    private $estrato;
	private $contrato;
	private $cargo;
    private $salario;
	private $pri;
	private $seg;
    private $ter;
	private $cuar;
	private $quin;
    private $sex;
	private $sept;
	private $oct;
    private $nov;
	private $deci;
    private $onc;
	private $doc;
	
	function __construct($correo, $nombre, $ciudad, $estrato, $contrato, $cargo, $salario, $pri, $seg, $ter, $cuar, $quin, $sex, $sept, $oct, $nov, $deci, $onc, $doc)
	{
		$this->setCorreo($correo);
		$this->setNombre($nombre);
		$this->setCiudad($ciudad);
        $this->setEstrato($estrato);
		$this->setContrato($contrato);
		$this->setCargo($cargo);
        $this->setSalario($salario);
		$this->setPri($pri);
		$this->setSeg($seg);
        $this->setTer($ter);
		$this->setCuar($cuar);
		$this->setQuin($quin);
        $this->setSex($sex);
		$this->setSept($sept);
		$this->setOct($oct);
        $this->setNov($nov);
		$this->setDeci($deci);
		$this->setOnc($onc);
        $this->setDoc($doc);
	}

	public function getCorreo(){
		return $this->correo;
	}
    public function setCorreo($correo){
		$this->correo = $correo;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getciudad(){
		return $this->ciudad;
	}

	public function setciudad($ciudad){
		$this->ciudad = $ciudad;
	}

    public function getestrato(){
		return $this->estrato;
	}

	public function setestrato($estrato){
		$this->estrato = $estrato;
	}
    public function getcontrato(){
		return $this->contrato;
	}

	public function setcontrato($contrato){
		$this->contrato = $contrato;
	}
    public function getcargo(){
		return $this->cargo;
	}

	public function setcargo($cargo){
		$this->cargo = $cargo;
	}
    public function getsalario(){
		return $this->salario;
	}

	public function setsalario($salario){
		$this->salario = $salario;
	}
    public function getpri(){
		return $this->pri;
	}

	public function setpri($pri){
		$this->pri = $pri;
	}
    public function getseg(){
		return $this->seg;
	}

	public function setseg($seg){
		$this->seg = $seg;
	}
    public function getter(){
		return $this->ter;
	}

	public function setter($ter){
		$this->ter = $ter;
	}
    public function getcuar(){
		return $this->cuar;
	}

	public function setcuar($cuar){
		$this->cuar = $cuar;
	}
    public function getquin(){
		return $this->quin;
	}

	public function setquin($quin){
		$this->quin = $quin;
	}
    public function getsex(){
		return $this->sex;
	}

	public function setsex($sex){
		$this->sex = $sex;
	}
    public function getsept(){
		return $this->sept;
	}

	public function setsept($sept){
		$this->sept = $sept;
	}
    public function getoct(){
		return $this->oct;
	}

	public function setoct($oct){
		$this->oct = $oct;
	}
    public function getnov(){
		return $this->nov;
	}

	public function setnov($nov){
		$this->nov = $nov;
	}
    public function getdeci(){
		return $this->deci;
	}

	public function setdeci($deci){
		$this->deci = $deci;
	}
    public function getonc(){
		return $this->onc;
	}

	public function setonc($onc){
		$this->onc = $onc;
	}
    public function getdoc(){
		return $this->doc;
	}

	public function setdoc($doc){
		$this->doc = $doc;
	}
	public static function save($formu){
		$db=Db::getConnect();

		$insert=$db->prepare('INSERT INTO datos VALUES (null,:correo, :nombre, :ciudad,  :estrato, :contrato, :cargo, :salario, :pri, :seg, :ter, :cuar, :quin, :sex, :sept, :oct, :nov, :deci, :onc, :doc)');
		$insert->bindValue('correo',$formu->getCorreo());
		$insert->bindValue('nombre',$formu->getNombre());
		$insert->bindValue('ciudad',$formu->getciudad());
        $insert->bindValue('estrato',$formu->getestrato());
		$insert->bindValue('contrato',$formu->getcontrato());
        $insert->bindValue('cargo',$formu->getcargo());
		$insert->bindValue('salario',$formu->getsalario());
        $insert->bindValue('pri',$formu->getpri());
		$insert->bindValue('seg',$formu->getseg());
        $insert->bindValue('ter',$formu->getter());
		$insert->bindValue('cuar',$formu->getcuar());
        $insert->bindValue('quin',$formu->getquin());
		$insert->bindValue('sex',$formu->getsex());
        $insert->bindValue('sept',$formu->getsept());
        $insert->bindValue('oct',$formu->getoct());
		$insert->bindValue('nov',$formu->getnov());
        $insert->bindValue('deci',$formu->getdeci());
		$insert->bindValue('onc',$formu->getonc());
		$insert->bindValue('doc',$formu->getdoc());
		$insert->execute();

		$mensaje_seg_1="Tus condiciones en cuanto a espacio cumplen los requerimientos; puedes trabajar con seguridad.";
		$mensaje_seg_1_2="Es importante que tenga en cuenta: El puesto de trabajo debe tener una dimensión suficiente y estar acondicionado de tal manera que exista el espacio necesario para permitir los cambios de postura y movimientos de trabajo.";
		$mensaje_seg_1_3=" Para el trabajo en posición sentado, debe habilitarse el suficiente espacio para alojar los miembros inferiores y para permitir los cambios de postura en el transcurso de la actividad.";
		$mensaje_final_seg="";
		if($formu->getseg() == "si"){
			$mensaje_final_seg=$mensaje_seg_1;
		}else{
			$mensaje_final_seg=$mensaje_seg_1_2."<br>".$mensaje_seg_1_3;
		}

		$mensaje_parte1="Tus condiciones en cuanto a distancia entre ojos y pantalla de computador cumplen los requerimientos; puedes trabajar con seguridad.";
		$mensaje_parte1_2="Importante: La pantalla, el teclado y los documentos escritos con los que trabaja el operador de pantallas de visualización deberían encontrarse, respectivamente, a una distancia similar de los ojos para evitar fatiga visual.";
		$mensaje_parte1_3=" La distancia visual óptima debe estar entre los 450 y 550 mm, con un máximo de 700 mm para casos excepcionales es decir entre 45 cm y 55 cm";
		$mensaje_final_ter="";
		if($formu->getter() == "si"){
			$mensaje_final_ter=$mensaje_parte1;
		}else{
			$mensaje_final_ter=$mensaje_parte1_2."<br>".$mensaje_parte1_3;
		}

	$mensaje_cuar_1="Tus condiciones en cuanto a ángulo entre ojos y pantalla de computador cumplen los requerimientos; puedes trabajar con seguridad.";
	$mensaje_cuar_1_2="Importante: El ángulo visual óptimo para que el operador de pantallas de visualización trabaje en posición de sentado debe estar comprendido entre 10º y 20º por debajo de la horizontal";
	$mensaje_final_cuar="";
	if($formu->getcuar() == "si"){
		$mensaje_final_cuar=$mensaje_cuar_1;
	}else{
		$mensaje_final_cuar=$mensaje_cuar_1_2;
	}

	$mensaje_quin_1="Tu espacio de trabajo cuenta con un espacio óptimo; puedes trabajar con seguridad.";
	$mensaje_quin_1_2="Importante: La mesa de trabajo deberá cumplir entre otras características:
	1- ser poco reflectante con el fin de minimizar los reflejos y su color no debería ser demasiado claro u oscuro.";
	$mensaje_quin_1_3="2- debe contar con dimensiones suficientes para colocar los elementos de trabajo".
	$mensaje_quin_1_4= "3- contar con un hueco debajo de la mesa para mover extremidades sin dificultad.";
	$mensaje_final_quin="";
	if($formu->getquin() == "si"){
		$mensaje_final_quin=$mensaje_quin_1;
	}else{
		$mensaje_final_quin=$mensaje_quin_1_2."<br>".$mensaje_quin_1_3."<br>".$mensaje_quin_1_4;
	}

	$mensaje_nov_1="En hora buena ! Sigue adoptando buenas posturas y aplicando la ergonomía en casa.";
	$mensaje_nov_1_2="Su dolor se debe a que la pantalla está mal situada al no encontrarse alineada hacia ti; o tenga la altura inapropiada.";
	$mensaje_final_nov="";
	if($formu->getnov() == "si"){
		$mensaje_final_nov=$mensaje_nov_1;
	}else{
		$mensaje_final_nov=$mensaje_nov_1_2;
	}

	$mensaje_deci_1="En hora buena ! Sigue adoptando buenas posturas y aplicando la ergonomía en casa.";
	$mensaje_deci_1_2="Tu dolor se debe a que la altura de la mesa es inadecuada o bien tu silla carezca de reposabrazos que te permitan descansar tus brazos.";
	$mensaje_final_deci="";
	if($formu->getdeci() == "si"){
		$mensaje_final_deci=$mensaje_deci_1;
	}else{
		$mensaje_final_deci=$mensaje_deci_1_2;
	}

	$mensaje_onc_1="En hora buena ! Sigue adoptando buenas posturas y aplicando la ergonomía en casa.";
	$mensaje_onc_1_2="Tu dolor es debido al uso de una silla inadecuada por la altura.";
	$mensaje_final_onc="";
	if($formu->getonc() == "si"){
		$mensaje_final_onc=$mensaje_onc_1;
	}else{
		$mensaje_final_onc=$mensaje_onc_1_2;
	}

	$mensaje_doc_1="En hora buena ! Sigue adoptando buenas posturas y aplicando la ergonomía en casa.";
	$mensaje_doc_1_2="Lo más probable es que tengas un ratón inadecuado o que no sea ergonómico.";
	$mensaje_doc_1_3="Puede ser que no estés apoyando tus antebrazos, tengas las muñecas en el aire por lo que necesitas un reposamuñecas.";
	$mensaje_final_doc="";
	if($formu->getdoc() == "si"){
		$mensaje_final_doc=$mensaje_doc_1;
	}else{
		$mensaje_final_doc=$mensaje_doc_1_2."<br>".$mensaje_doc_1_3;
	}
	include("respuesta.php");

}

	public static function all(){
		$db=Db::getConnect();
		$listaformu=[];
		$select=$db->query('SELECT * FROM datos');

		foreach($select->fetchAll() as $formu){
			$listaformu[] = new formula($formu['id'], $formu['nombre'], $formu['estrato'], $formu['contrato'], $formu['cargo'], $formu['salario'],$formu['pri'], $formu['seg'], $formu['ter'],$formu['cuar'], $formu['quin'], $formu['sex'],$formu['sept'], $formu['oct'], $formu['nov'],$formu['deci'], $formu['onc'], $formu['doc']);
		}
		return $listaformu;
	}


}


?>