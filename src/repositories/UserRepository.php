<?php

require '../services/database/Connect.php';

class UserRepository
{
    protected $db;

    public function __construct()
    {
        $this->db = new Connect();
    }

    public function findAll()
    {
        $conn = $this->db->connect();
        $sql = 'SELECT id, nome, sexo, mensalidade FROM Alunos';
        $sql = $sql . ' ORDER BY nome';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }

    public function findById($value)
    {
        $conn = $this->db->connect();
        $sql = "SELECT id, nome, sexo, mensalidade FROM Alunos WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$value]);
        $result = $stmt->fetchAll();

        return $result[0];
    }

    public function create(array $data)
    {
        $conn = $this->db->connect();
        $sql = "INSERT INTO Alunos (nome, sexo, mensalidade) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
    }

    public function update(array $data)
    {
        $conn = $this->db->connect();
        $sql = "UPDATE Alunos set nome = ?, mensalidade = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
    }

    public function delete($id)
    {
        $conn  = $this->db->connect();
        $sql = 'DELETE FROM Alunos WHERE id = ?';
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
    }
}
