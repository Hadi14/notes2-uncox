<? class Db
{
    private $connect;
    /******************************************************************** */
    function __construct($options = null)
    {
        if ($options == null) {
            global $config;
            $s = $config['db']['host'];
            $u =  $config['db']['user'];
            $p = $config['db']['pass'];
            $db =  $config['db']['dbname'];
        } else {
            $s = $options['host'];
            $u = $options['user'];
            $p = $options['pass'];
            $db = $options['dbname'];
        }
        // Create connection
        $this->connect = new mysqli($s, $u, $p, $db);
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
    public function first($sql)
    {
        $result = $this->connect->query($sql);
        if ($result == null) {
            return null;
        } else {
            return $result[0];
        }
    }
    /******************************************************************** */
    public function query($sql)
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
