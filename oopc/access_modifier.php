<pre><?php
 ini_set('display_errors', '1');
 ini_set('display_startup_errors', '1');
 error_reporting(E_ALL);
class Access_modifier
{
    
    public $name;
    private $password;
    protected $email;
    public function __construct($name, $password, $email)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
    }
    public function get_data()
    {
        return array(
            'name' => $this->name,
            'password' => $this->password,
            'email' => $this->email
        );
    }
    public function set_data($var_name, $value){
        $this->$var_name = $value;
    }
}

$obj = new Access_modifier('raj','123','raj@gmail.com');
// $obj->email; error
// $obj->password; error

$obj->set_data("password", "Harsh");
print_r($obj->get_data());
?>
</pre>