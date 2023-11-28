<?php
class Database
{
    protected $pdo;
    protected $table;
    protected $fields ='*';
    protected $wheres = [];

    public function __construct(PDO $pdo){
        $this->pdo=$pdo;
    }

    public function table($table){
        $this->table = $table;
        return $this;
    }

    public function select($fields){
        $this -> fields = $fields;
        return $this;
    }

    public function where($column, $operator, $value){
        $this->wheres[] = [
            'type' => 'AND',
            'column' => $column,
            'operator' => $operator,
            'value' => $value
        ];
        return $this;
    }
    public function orWhere($column, $operator, $value){
        $this->wheres[] = [
            'type' => 'OR',
            'column' => $column,
            'operator' => $operator,
            'value' => $value
        ];
        return $this;
    }

    public function get(){
        $sql = ' SELECT ' . $this->fields .' FROM ' . $this->table;
        if(!empty($this->wheres)){
            $sql .= ' WHERE ';
            foreach($this->wheres as $index => $where){
                if($index > 0){
                    $sql .= $where['type'] . ' ';
                }
                    $sql .= $where['column'] . ' '
                    . $where['operator']
                    . '?';
            }
        }

        $stmt = $this->pdo->prepare($sql);
        $bindedValues = array_column($this->wheres, 'value');
        $stmt->execute($bindedValues);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
     }
}

$dsn = 'mysql:host=localhost;dbname=example';
$username = 'root';
$password = '';
$pdo = new PDO($dsn, $username, $password,[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$db = new Database($pdo);
$users = $db->table('users')
    ->select('id,name')
    ->where('name', '=', 'john')
    ->orWhere('name', '=','mary')
    ->get();

foreach($users as $user){
    echo $user->id . ' - ' . $user->name .  PHP_EOL;
}