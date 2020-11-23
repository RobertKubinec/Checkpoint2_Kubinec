<?php

class Proces
{

    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "databazaturistov";
    private $connection;

    public function __construct()
    {
        try {
            /*
             * Prepojenie s databazou - localhost/phpmyadmin
             */
            $this->connection = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }

    public function vloz()
    {

        if (isset($_POST['submit'])) {
            if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['destination']) && isset($_POST['comment'])) {
                if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['destination']) && !empty($_POST['comment'])) {

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $destination = $_POST['destination'];
                    $comment = $_POST['comment'];
                    /*
                     * Vypis zo strany servera
                     */
                    $query = "INSERT INTO polozky (name,email,destination,comment) VALUES ('$name','$email','$destination','$comment')";
                    if ($sql = $this->connection->query($query)) {
                        echo "<script>alert('Položky sa úspešne odoslali');</script>";
                        echo "<script>window.location.href = 'formular.php';</script>";
                    } else {
                        echo "<script>alert('Zlyhanie');</script>";
                        echo "<script>window.location.href = 'formular.php';</script>";
                    }

                }
// else {
//                    echo "<script>alert('Prázdne pole!');</script>";
//                    echo "<script>window.location.href = 'formular.php';</script>";
//                }
            }
        }
    }

    /*
     *
     */
    public function zobrazPolozku()
    {
        $data = null;

        $query = "SELECT * FROM polozky";
        if ($sql = $this->connection->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function zmaz($id)
    {

        $query = "DELETE FROM polozky where id = '$id'";
        if ($sql = $this->connection->query($query)) {
            return true;
        } else {
            return false;
        }
    }


    public function edituj($id)
    {

        $data = null;

        $query = "SELECT * FROM polozky WHERE id = '$id'";
        if ($sql = $this->connection->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    /*
     * Funkcia, ktora sluzi na update obsahu poli, ktore boli vyplnene - nastavi im nove hodnoty
     */
    public function updatuj($data)
    {

        $query = "UPDATE polozky SET name='$data[name]', email='$data[email]', destination='$data[destination]', comment='$data[comment]' WHERE id='$data[id] '";

        if ($sql = $this->connection->query($query)) {
            return true;
        } else {
            return false;
        }
    }
}

?>