<?php
  require 'private.php';  
  /**
   * Connect to the database and send query to the database.
   * 
   * @method connect()
   *  Connect to the database.
   * @method add()
   *  Add data into the table.
   * @method select()
   *  Select column and fetch data from the database.
   * @method saveTask()
   *  Save the task number of the last task visted.
   * @method selectTask()
   *  Select the task number.
   * @method resetPassword()
   *  Reset the password.
   */
  class SendQuery {

    /**
     * Connect to the database.
     * 
     * @property string $serverName
     *  Store the server name.
     * @property string $userName
     *  Store username.
     * @property string $password
     *  Store the password.
     * @property string $dbName
     *  Store the name of the database.
     * 
     * @return mysqli object
     *  Return mysqli object after connecting to database.
     */
    public static function connect() {

      /**
       * Store the server name.
       * @var string $serverName
       */
      $serverName = "localhost";
      /**
       * Store the username.
       * @var string $userName
       */
      $userName = "root";
      /**
       * Store the password.
       * @var string $password
       */
      $password = $_ENV['password'];
      /**
       * Store the database name.
       * @var string $dbName
       */
      $dbName = "Library_db";
      // Create connection.
      $conn = new mysqli($serverName, $userName, $password, $dbName);
      // Check connection.
      if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      else {
        return $conn;
      }
    }

    /**
     * Select password and role from the table.
     * 
     * @param string $userName
     *  Store the username.
     *
     * @return mixed
     *  Return query result if exists or else returns NULL.
     */
    public function select(string $userName) {
      $conn = self::connect();
      $data = "SELECT Username, Password, Role FROM Users WHERE Username = '$userName'";
      $result = $conn->query($data);
      if($result) {
        if(mysqli_num_rows($result) > 0) {
          $conn->close();
          return $result;
        }
        else {
          $conn->close();
          return NULL;
        }
      }
    }

    /**
     * Select the firstname and lastname from the table.
     * 
     * @param string $userName
     * Store the username
     * 
     * @return mysqli object
     * Return the query result.
     */
    public function realname(string $userName) {
      $conn = self::connect();
      $data = "SELECT Firstname, Lastname FROM Users WHERE Username = '$userName'";
      $result = $conn->query($data);
      $conn->close();
      return $result;
    }

    /**
     * Select the reader details.
     * 
     * @param string $userName
     * Store the username.
     * 
     * @return mysqli object
     * Return the query result.
     */
    public function readerDetails(string $userName) {
      $conn = self::connect();
      $data = "SELECT Bucket_list, Wish_list, Reading
      FROM Reader_details
      WHERE Username = '$userName'";
      $result = $conn->query($data);
      $conn->close();
      return $result;
    }

    /**
     * Select the book names.
     * 
     * @return mysqli object
     * Return the query result.
     */
    public function bookList(int $start, int $end) {
      $conn = self::connect();
      $data = "SELECT Book_name, Author
      FROM Books
      ORDER BY Book_name
      LIMIT '$start', '$end'";
      $result = $conn->query($data);
      $conn->close();
      return $result;
    }
  }
?>
