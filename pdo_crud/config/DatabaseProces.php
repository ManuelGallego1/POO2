<?php


include_once('db.php');


class DatabaseProcess extends DatabasePDO
{

    private $user;
    private $pass;
    private $data = [];
    private $data2 = [];
    private $id;
    private $id_son;
    private $dni;

    public function getAll()
    {
        try {

            # Conexión a MySQL
            // Instantiate database.
            $cnn = $this->conn();
            //Preparamos la consulta sql
            $respuesta = $cnn->prepare("select * from student");
            //Ejecutamos la consulta
            $respuesta->execute();
            //Creamos un array donde almacenaremos la data obtenida
            $usuarios = [];
            //Recorremos la data obtenida
            foreach ($respuesta as $res) {
                //Llenamos la data en el array
                $usuarios[] = $res;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $usuarios;
    }

    public function getAll2()
    {
        try {

            # Conexión a MySQL
            // Instantiate database.
            $cnn = $this->conn();
            //Preparamos la consulta sql
            $respuesta = $cnn->prepare("select * from accudent");
            //Ejecutamos la consulta
            $respuesta->execute();
            //Creamos un array donde almacenaremos la data obtenida
            $usuarios = [];
            //Recorremos la data obtenida
            foreach ($respuesta as $res) {
                //Llenamos la data en el array
                $usuarios[] = $res;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $usuarios;
    }




    public function login($user, $pass)
    {
        try {

            $this->user = $user;
            $this->pass = $pass;

            # Conexión a MySQL
            // Instantiate database.
            $cnn = $this->conn();

            //Preparamos la consulta sql
            $stmt = $cnn->prepare("SELECT * FROM user WHERE user=:usernameEmail  AND pass=:hash_password");
            $stmt->bindParam("usernameEmail", $this->user, PDO::PARAM_STR);
            $stmt->bindParam("hash_password", $this->pass, PDO::PARAM_STR);
            //Ejecutamos la consulta
            $stmt->execute();
            $count = $stmt->rowCount();
            $data = $stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            $mesage = "";
            if ($count) {

                $mesage = "verdadero";
            } else {
                $mesage = "Falso";
            }
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
        return $mesage;
    }



    public function insertData($data,$data2)
    {
        try {
            $cnn = $this->conn();
            $this->data = $data;
            $values = "'" . implode("','", array_values($data)) . "'"; 
            $stmt = $cnn->prepare("INSERT INTO student VALUES (null,$values)");
            $stmt->execute();
            $count = $stmt->rowCount();

            $this->data2 = $data2;
            $values2 = "'" . implode("','", array_values($data2)) . "'";
            $stmt2 = $cnn->prepare("INSERT INTO accudent VALUES (null,$values2)");
            $stmt2->execute();
            $count2 = $stmt->rowCount();

            $mesage = "";
            if ($count || $count2) {

                $mesage = "verdadero";
            } else {
                $mesage = "Falso";
            }
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
        return $mesage;
        
    }

    public function updateData($id,$id_son,$data,$data2)
    {
        $mesage = "";
        try {
            $cnn = $this->conn();
            $this->data = $data;
            $this->id = $id;
            $this->id_son = $id_son;
            $placeholders = array_map(function ($col) {
                return "$col = ?";
            }, array_keys($data));
            $set_clause = implode(", ", $placeholders);
            $stmt = $cnn->prepare("UPDATE student SET $set_clause WHERE id = ?");
            $stmt->execute(array_merge(array_values($data), array($id)));
            $count = $stmt->rowCount();

            $this->data2 = $data2;
            $placeholders2 = array_map(function ($col2) {
                return "$col2 = ?";
            }, array_keys($data2));
            $set_clause2 = implode(", ", $placeholders2);
            $stmt2 = $cnn->prepare("UPDATE accudent SET $set_clause2 WHERE id = ?");
            $stmt2->execute(array_merge(array_values($data), array($id_son)));
            $count2 = $stmt2->rowCount();

            $mesage = "";
            if ($count || $count2) {

                $mesage = "verdadero";
            } else {
                $mesage = "Falso";
            }
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
        return $mesage;
    }

    public function deleteData($dni)
    {
        try {
            $cnn = $this->conn();
            $this->dni = $dni;

            $stmt2 = $cnn->prepare("DELETE FROM accudent WHERE dni_son=:hash_dni");
            $stmt2->bindParam("hash_dni", $this->dni, PDO::PARAM_INT);
            $stmt2->execute();
            $count2 = $stmt2->rowCount();

            $stmt = $cnn->prepare("DELETE FROM student WHERE dni=:hash_dni");
            $stmt->bindParam("hash_dni", $this->dni, PDO::PARAM_INT);
            $stmt->execute();
            $count = $stmt->rowCount();
            $mesage = "";
            if ($count || $count2) {

                $mesage = "verdadero";
            } else {
                $mesage = "Falso";
            }
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
        return $mesage;
    }
}