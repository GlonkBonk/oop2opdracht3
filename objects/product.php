// Maak in product.php de volgende code:
<?php
class Product
{
   // database connectie en tabel-naam
   private $conn;
   private $table_name = "product";
   // object properties
   public $id;
   // constructor with $db as database connection
   public function __construct($db)
   {
       $this->conn = $db;
   }
   // read products
   public function read()
   {
       // select all query
       $query = "SELECT * FROM " . $this->table_name;
       $result = $this->conn->query($query);
       return $result;
   }
   
   // create products
   public function create($insertArray)
   {
        var_dump($insertArray);
       
        echo "<br>";

       // select all query
       $insertQuery = "INSERT INTO `product` (`naam`, `beschrijving`, `prijs`, `category_id`) VALUES ('".$insertArray['naam']."', '".$insertArray['beschrijving']."', '".$insertArray['prijs']."', '".$insertArray['category_id']."');";

       echo $insertQuery;

       //exit();

       //$query = "SELECT * FROM " . $this->table_name;
       $result = $this->conn->query($insertQuery);

       var_dump($result);
       return $result;
   }
    // create products
    public function delete($insertInt)
    {
         var_dump($insertInt);
        
         echo "<br>";
 
        // select all query
        $deleteQuery = "DELETE FROM `product` WHERE `product`.`id` = ".$insertInt['id'];
 
        echo $deleteQuery;
 
        //exit();
 
        //$query = "SELECT * FROM " . $this->table_name;
        $result = $this->conn->query($deleteQuery);
 
        var_dump($result);
        return $result;
    }
    public function update($updateArray)

    {
    
    var_dump($updateArray);
    
    echo "<br>";
    
    // UPDATE Customers
    
    // SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
    
    // WHERE CustomerID = 1;
    
    
    
    // select all query
    
    $updateArray = "UPDATE `product` SET `naam` = '".$updateArray['naam']."', `beschrijving` = '".$updateArray['beschrijving']."', `prijs` = '".$updateArray['prijs']."' WHERE id =".$updateArray['id'];
    
    
    
    echo $updateArray;
    
    
    
    //exit();
    
    
    
    //$query = "SELECT * FROM " . $this->table_name;
    
    $result = $this->conn->query($updateArray);
    
    
    
    var_dump($result);
    
    return $result;
    
    }
    
    }