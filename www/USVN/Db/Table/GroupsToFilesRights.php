<?php
/**
 * Model for users_to_groups table
 *
 * @author Team USVN <contact@usvn.info>
 * @link http://www.usvn.info/
 * @license http://www.cecill.info/licences/Licence_CeCILL_V2-en.txt CeCILL V2
 * @copyright Copyright 2007, Team USVN
 * @since 0.5
 * @package USVN_Db
 * @subpackage Table
 *
 * This software has been written at EPITECH <http://www.epitech.net>
 * EPITECH, European Institute of Technology, Paris - FRANCE -
 * This project has been realised as part of
 * end of studies project.
 *
 * $Id $
 */

/**
 * Model for users_to_groups table
 *
 * Extends USVN_Db_Table for magic configuration and methods
 *
 */
class USVN_Db_Table_GroupsToFilesRights extends USVN_Db_Table {
	/**
	 * The primary key column (underscore format).
	 *
	 * Without our prefixe...
	 *
	 * @var string
	 */
	protected $_primary = array("files_rights_id", "groups_id");

	/**
	 * The table name derived from the class name (underscore format).
	 *
	 * @var array
	 */
	protected $_name = "groups_to_files_rights";


	/**
	 * Associative array map of declarative referential integrity rules.
	 * This array has one entry per foreign key in the current table.
	 * Each key is a mnemonic name for one reference rule.
	 *
	 * Each value is also an associative array, with the following keys:
	 * - columns	   = array of names of column(s) in the child table.
	 * - refTableClass = class name of the parent table.
	 * - refColumns	= array of names of column(s) in the parent table,
	 *				   in the same order as those in the 'columns' entry.
	 * - onDelete	  = "cascade" means that a delete in the parent table also
	 *				   causes a delete of referencing rows in the child table.
	 * - onUpdate	  = "cascade" means that an update of primary key values in
	 *				   the parent table also causes an update of referencing
	 *				   rows in the child table.
	 *
	 * @var array
	 */
	protected $_referenceMap = array(
	"Groups" => array(
	"columns"	   => array("groups_id"),
	"refTableClass" => "USVN_Db_Table_Groups",
	"refColumns"	=> array("groups_id"),
	),
	"FilesRights" => array(
	"columns"		 => array("files_rights_id"),
	"refTableClass"   => "USVN_Db_Table_FilesRight",
	"refColumns"	  => array("files_rights_id"),
	),
	);

	/**
	 * Overload insert's method to check some data before insert
	 *
	 * @param array $data
	 * @return integer the last insert ID.
	 */
	public function insert(array $data)
	{
		$res = parent::insert($data);
		return $res;
	}

	/**
	 * Overload update's method to check some data before update
	 *
	 * @param array $data
	 * @param string $where An SQL WHERE clause.
	 * @return integer The number of rows updated.
	 */
	public function update(array $data, $where)
	{
		$res = parent::update($data, $where);
		return $res;
	}

	/**
	 * Called by parent table's class during delete() method.
	 *
	 * @param  string $parentTableClassname
	 * @param  array  $primaryKey
	 * @return int    Number of affected rows
	 */
	public function delete($where)
	{
		$res = parent::delete($where);
		return $res;
	}

}