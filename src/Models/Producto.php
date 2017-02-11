<?php

namespace PTF\Models;

use PTF\Database;

class Producto
{
    private $id;
    private $nombre;
    private $descripcion;

    public function __construct(array $data = [])
    {
        if ($data) {
            $this->id = $data['id'];
            $this->nombre = $data['nombre'];
            $this->descripcion = $data['descripcion'];
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public static function all()
    {
        $db = Database::getInstance();

        $productos = [];

        if ($rows = $db->query("SELECT * FROM productos")->fetchAll()) {
            foreach ($rows as $row) {
                $productos[] = new Producto($row);
            }
        }

        return $productos;
    }

    public function save(int $id = null)
    {
        $db = Database::getInstance();

        if ($id) {
            $db->query("UPDATE productos SET nombre='{$this->nombre}', descripcion='{$this->descripcion}' WHERE id = {$id}");
        } else {
            $db->query("INSERT INTO productos (nombre, descripcion) VALUES ('{$this->nombre}', '{$this->descripcion}')");
        }
    }

    public function destoy()
    {
        $db = Database::getInstance();

        $db->query("DELETE FROM productos WHERE id = {$this->id}");
    }

    public static function getById($id)
    {
        $db = Database::getInstance();

        if ($row = $db->query("SELECT * FROM productos WHERE id = {$id} LIMIT 1")->fetch()) {
            return new Producto($row);
        }

        return false;
    }
}