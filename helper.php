<?php

class clsMeniu
{
	const CALEAHTTP = "http://www.matematicon.ro/_matematicon20";
	/**
	 * Clasele care sunt folosite in cadrul modulului
	 *
	 * @param   array  $params An object containing the module parameters
	 *
	 * @access public
	 */

// ------------------------ noile clase

public function saveData($codSubiect)
	{
		/*preia categoriile pentru vanzare 
		*/
	//	$myDB = JFactory::getDbo();
	//	$table = 'w2020_programe_video_bac';
	//	$myDB->setQuery("SELECT cod_subiect, cod_categorie, denumire_categorie, valabil FROM $table WHERE (cod_subiect='$codSubiect' AND valabil=1) GROUP BY cod_categorie ORDER BY cod_categorie");
	//	$result = $myDB->loadObjectList();
	//	//print_r($result);
	//	return $result;
	// }


	// Get a db connection.
	$db = JFactory::getDbo();

	// Create a new query object.
	$query = $db->getQuery(true);

	// Insert columns.
	$columns = array('id', 'title', 'text', 'valable');

	// Insert values. - matricea cu valorile care sunt introduse
	$values = array(1001, $db->quote('custom.message'), $db->quote('Inserting a record using insert()'), 1);

	// Prepare the insert query.
	$query
    ->insert($db->quoteName('#__user_profiles'))
    ->columns($db->quoteName($columns))
    ->values(implode(',', $values));

	// Set the query using our newly populated query object and execute it.
	$db->setQuery($query);
	$db->execute();


	}
	public function preia_categorii_meniu(){
		$myDB = JFactory::getDbo();
		$table = 'xyz_categorii';
		$myDB->setQuery("SELECT * FROM $table ORDER BY id");
		$result = $myDB->loadObjectList();
	
		return $result;
	}
	public function preia_date_meniu($id){
		$myDB = JFactory::getDbo();
		$table = 'xyz_meniu';
		$myDB->setQuery("SELECT * FROM $table WHERE id ='$id'");
		$result = $myDB->loadObjectList();
	
		return $result;
	}















//------------------------------

	public function incarcaDateCategorie($codSubiect)
	{
		/*preia categoriile pentru vanzare 
		*/
		$myDB = JFactory::getDbo();
		$table = 'w2020_programe_video_bac';
		$myDB->setQuery("SELECT cod_subiect, cod_categorie, denumire_categorie, valabil FROM $table WHERE (cod_subiect='$codSubiect' AND valabil=1) GROUP BY cod_categorie ORDER BY cod_categorie");
		$result = $myDB->loadObjectList();
		//print_r($result);
		return $result;
	}
	public function incarcaDatePacheteVanzare($codCategorie)
	{
		/*preia categoriile pentru vanzare 
		*/
		$myDB = JFactory::getDbo();
		$table = 'w2020_programe_video_bac';
		$myDB->setQuery("SELECT cod_capitol, denumire_capitol FROM $table WHERE cod_categorie='$codCategorie' AND valabil=1 GROUP BY cod_capitol");
		$result = $myDB->loadObjectList();
		return $result;
	}
	public function numarVideoPachet($codProdus)
	{
		/*preia categoriile pentru vanzare 
		*/
		$myDB = JFactory::getDbo();
		$table = 'w2020_programe_video_bac';
		$myDB->setQuery("SELECT cod_video, cod_capitol FROM $table WHERE cod_capitol='$codProdus' ");
		$result = $myDB->loadObjectList();
		$count = count($result);

		return $count;
	}
	public function incarcaValoareaPachet($codProdus)
	{
		/*preia pretul pachetului 
		*/
		$myDB = JFactory::getDbo();
		$table = 'w2020_produse_valoare_credite';
		$myDB->setQuery("SELECT codprodus, valoareprodus FROM $table WHERE codprodus='$codProdus'");
		$result = $myDB->loadObjectList();
		foreach ($result as $key => $value) {
			$valoare = $value->valoareprodus;
		}

		return $valoare;
	}
	public function verifyProductOwner($codProdus, $idUser)
	{

		$myDB = JFactory::getDbo();
		$table = 'w2020_user_cont_produse';
		$myDB->setQuery("SELECT iduser codprodus FROM $table WHERE codprodus='$codProdus' AND iduser='$idUser'");
		$result = $myDB->loadObjectList();
		$res = ($result) ? 1 : 0;
		return $res;
	}

	public function incarcaLinkExemplu($codProdus)
	{
		/*preia categoriile pentru vanzare 
		*/
		$myDB = JFactory::getDbo();
		$table = 'w2020_programe_video_bac_exemple';
		$myDB->setQuery("SELECT link_vimeo FROM $table WHERE d_capitol='$codProdus'");
		$result = $myDB->loadObjectList();
		// echo 'r' . $result;
		foreach ($result as $key => $value) {
			$link_vimeo = $value->link_vimeo;
		}
		return $link_vimeo;
	}
}
