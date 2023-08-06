<? class Db
{
    private $connect;
    /******************************************************************** */
    function __construct($s, $u, $p)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "notes";

        // Create connection
        $this->connect = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($this->connect->connect_error) {
            echo "Connection failed: " . $this->connect->connect_error;
        }
    }
    /******************************************************************** */
    public function getConnection()
    {
        return $this->connect;
    }
    /******************************************************************** */
    public function close()
    {
        $this->connect->close();
    }
    /******************************************************************** */
    public function query($sql)
    {
        $result = $this->connect->query($sql);
        if ($result == null) {
            return null;
        } else {
            return $result[0];
        }
    }
    /******************************************************************** */
    public function first($sql)
    {
        $result = $this->connect->query($sql);
        $records = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $records[] = $row;
            }
        } else {
            return null;
        }
        return $records;
    }
    /******************************************************************** */
}
