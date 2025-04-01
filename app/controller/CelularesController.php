<?php
require __DIR__ . '/../conexion.php';


/*require("app/conexion.php");*/ // Incluye la conexión a la base de datos

class CelularesManitaController
{
    private $conexion;

    function __construct()
    {
        global $conexion;
        $this->conexion = $conexion;
    }

    public function index()
    {
        $query = "SELECT * FROM celulares";
        $stmt = $this->conexion->query($query);
        $rowset = $stmt->fetchAll(PDO::FETCH_OBJ);
        require __DIR__ . '/../view/todosRegistros.php';
    }

    public function verRegistro($id)
    {
        $row = $this->obtenerCelularId($id); // Usa el nuevo método
        if ($row) {
            require("view/unRegistro.php");
        } else {
            $this->index();
        }
    }

    public function agregar()
    {
        require __DIR__ . '/../view/agregar.php';

    }

    public function guardar($marca,$modelo, $color, $precio, $plan)
    {
        $query = "INSERT INTO celulares (Marca, Modelo, Color, Precio, plan) VALUES (:Marca, :Modelo, :Color, :Precio, :plan)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':Marca', $marca);
        $stmt->bindParam(':Modelo', $modelo);
        $stmt->bindParam(':Color', $color);
        $stmt->bindParam(':Precio', $precio);
        $stmt->bindParam(':plan', $plan);
        $stmt->execute();

        header("Location: index.php");
        exit();
    }

    public function editarPrecio($id)
    {
        $row = $this->obtenerCelularId($id); // Usa el nuevo método
        if ($row) {
            require __DIR__ . '/../view/editarPrecio.php';

        } else {
            $this->index();
        }
    }

    public function actualizarEquipo($id,$marca, $modelo, $color, $precio, $plan)
    {
        $query = "UPDATE celulares 
                  SET marca = :Marca, 
                      modelo = :Modelo, 
                      color = :Color, 
                      precio = :Precio, 
                      plan = :plan 
                  WHERE id = :id";
    
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':Marca', $marca);
        $stmt->bindParam(':Modelo', $modelo);
        $stmt->bindParam(':Color', $color);
        $stmt->bindParam(':Precio', $precio);
        $stmt->bindParam(':plan', $plan);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    
        header("Location: index.php");
        exit();
    }

    public function eliminar($id)
    {
        if (isset($_GET['confirmar'])) {
            
            $query = "DELETE FROM celulares WHERE id = :id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            header("Location: index.php");
            exit();
        } else {
            // 
            $row = $this->obtenerCelularId($id);
            if ($row) {
                //require __DIR__ . '/../view/eliminar.php';
                require("view/eliminar.php"); // Muestra la confirmación de eliminación
            } else {
                header("Location: index.php"); // Si no existe, redirige al menu
            }
        }
    }

    public function obtenerCelularId($id)
    {
        $query = "SELECT * FROM celulares WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ); // Retorna el celular o false si no existe
    }
}
?>