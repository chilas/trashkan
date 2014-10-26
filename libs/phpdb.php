<?php
class phpdb{
	/***Allows multiple database connections***/
	/*** each connection is stored as an element in the array, and the active connection is maintained in a variable (see below)***/
	private $connections = array();
	private static $instance; //it keeps d instance of the class
	/*** Tells the DB object which connection to use***/
	/*** setActiveConnection($id) allows us to change this***/
	private $activeConnection = 0;	
	//private $queryCounter = 0;	//Number of queries made during execution process
	private $last; //Record/resource of the last query
	private $returnedRow; //the row returned after executing a database query

	
	/***create instance of the class**/
	public static function GetInstance(){
            if (!isset(self::$instance)){//doesn't exists the isntance
                self::$instance = new self();
            }
            return self::$instance;
	}
	
	/*** Construct our database object ***/
    public function __construct(){
    	$this->newConnection();
    }
    /*
     * Create a new database connection
     * @param String database hostname
     * @param String database username
     * @param String database password
     * @param String database name of the application
     * @return int the id of the new connection
     */

    public function newConnection(){
        $mysqli = new mysqli( DBHOST, DBUSER, DBPWD, DBNAME);
        if ($mysqli->connect_errno){
            throw new Exception('Unable to connect to the database at this time, please try again.');
        }else{
            $this->connections[] = $mysqli;
            $connection_id = count($this->connections)-1;
	}
    	return $connection_id;
    }

    /**
     * Close the active connection
     * @return void
     */
    public function closeConnection(){
    	$this->connections[$this->activeConnection]->close();
    }

    /**
     * Change which database connection is actively used for the next operation
     * @param int the new connection id
     * @return void
     */

    public function setActiveConnection( int $new ){
    	$this->activeConnection = $new;
    }    

    /** 
     * Delete records from the database
     * @param String the table to remove rows from
     * @param String the condition for which rows are to be removed
     * @param int the number of rows to be removed
     * @return void
     */
    public function deleteRecords( $table, $condition, $limit = '')
    {
    	$limit = ( $limit == '' ) ? '' : ' LIMIT ' . $limit;
    	$delete = "DELETE FROM {$table} WHERE {$condition} {$limit}";
        //echo $delete;
    	return $this->executeQuery( $delete );
    }
   
    /**
     * Update records in the database
     * @param String the table
     * @param array of changes field => value
     * @param String the condition
     * @return bool
     */
    public function updateRecords( $table, $changes, $condition ){
    	$update = "UPDATE " . $table . " SET ";
    	foreach( $changes as $field => $value ){
    		$update .= "" . $field . " = '{$value}',";
    	}
    	// remove our trailing ,
    	$update = substr($update, 0, -1);
    	if( $condition != '' )
    	{
    		$update .= " WHERE " . $condition;
    	}
		//echo $update;
    	return $this->executeQuery( $update );
    }
    /**
     * Insert records into the database
     * @param String the database table
     * @param array data to insert field => value
     * @return bool
     */
    public function insertRecords($table, $data){
    	// setup some variables for fields and values
    	$fields  = "";
        $values = "";
		/* populate them
		foreach ($data as $f => $v){
			$fields  .= "`$f`,";
			$values .= "'".$v."',";
		}*/
		/**/
	foreach ($data as $f => $v){
            $fields  .= "`$f`,";
            $values .= ( (is_numeric( $v ) && ( intval( $v ) == $v ))) ? $v."," : "'$v',";
	}

	// remove our trailing ,
    	$fields = substr($fields, 0, -1);
    	// remove our trailing ,
    	$values = substr($values, 0, -1);    	

	$insert = "INSERT INTO $table ({$fields}) VALUES({$values})";
	//echo $insert;
	return  $this->executeQuery( $insert );	
    }    
    public function lastInsertID(){
	    return $this->connections[$this->activeConnection]->insert_id;
    }

    /**
     * Execute a query string
     * @param String the query
     * @return void
     */
    public function executeQuery( $queryStr ){
	$this->connections[$this->activeConnection]->query('SET CHARACTER SET ' . DBCHARSET);
    	if( !$result = $this->connections[$this->activeConnection]->query($queryStr)){
	    throw new Exception('Error executing query: ' . $queryStr );
	}
	else{
            $this->last = $result;
            return $result;
	}
    }
	
    /**
     * Fetch the database rows as data objects
     * @return the current row of a result set as an object
     */
    public function fetch_object(){
	return $this->last->fetch_object();
    }
    
    /**
     *Fetch the database rows as data objects
     *@return fetch a result row as an associative array
     */
    public function fetch_array(){
	return $this->last->fetch_array(MYSQLI_ASSOC);
    }
    
    /**
     *Fetch the database rows as data objects
     *@return fetch a result row as an associative array and numeric array
     */
    public function fetch_both_array(){
	return $this->last->fetch_array(MYSQLI_BOTH);
    }

    /**
     * Get the rows from the most recently executed query
     * @return array 
     */
	 
    public function numRows(){
	    return $this->last->num_rows;		
    }   

    /**
     * Gets the number of affected rows from the previous query
     * @return int the number of affected rows
     */

    public function affectedRows(){
    	return $this->connections[$this->activeConnection]->affected_rows;
    }

     /**
     * Sanitize data
     * @param String the data to be sanitized
     * @return String the sanitized data
     */
	 
    public function sanitizeData( $value ){
    	// Quote value
	return $this->connections[$this->activeConnection]->real_escape_string( $value );
    	//return $value;
    }

	public function displayMysqlError(){}
    /**
     * Deconstruct the object
     * close all of the database connections
     */
	
    public function __deconstruct(){
        $this->offConnection();
    }
    
	
    public function offConnection(){
	foreach( $this->connections as $connection ){
            $connection->close();
    	}
    }
}
?>