<?php

include_once 'conectar.php';

class aluno
{
    private $matricula;
    private $nome;
    private $endereco;
    private $cidade;
    private $codCurso;
    private $conn;

    public function getCodCurso() {
        return $this ->codCurso;
    }

    public function setCodCurso($codCurso) {
        $this->codCurso = $codCurso;
    }

    public function getCidade() {
        return $this ->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getMatricula() {
        return $this ->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome ($name) {
        $this->nome= $name;
    }

    public function getEndereco () {
        return $this->endereco;
    }

    public function setEndereco ($estoqui) {
        $this->endereco= $estoqui;
    }

    function listar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->query("select * from aluno order by nome");
            $sql->execute();
            return $sql->fetchALL();
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }

    function salvar() {
        try {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("insert into aluno values (?, ?, ?, ?, ?)");
            @$sql-> bindParam(1, $this->getMatricula(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getNome(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getEndereco(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getCidade(), PDO::PARAM_STR);
            @$sql-> bindParam(5, $this->getCodCurso(), PDO::PARAM_STR);
            if($sql->execute() == 1) {
                return 'Registro salvo com sucesso!!';
            }
            $this->conn = null;
        }   
        catch(PDOException $exc) {
            echo 'Erro ao salvar o registro - ' . $exc->getMessage();
        }
    }

    function excluir() {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("delete from aluno where Matricula = ?");
            @$sql-> bindParam(1, $this->getMatricula(), PDO::PARAM_STR);
            if($sql->execute() == 1) {
                return "Excluido com sucesso!!";
            } else {
                return "Erro na exclusao!!";
            }

            $this->conn = null;
        }
        catch(PDOException $exc) {
            echo "Erro ao excluir - " . $exc->getMessage();
        }
    }
} 

class curso
{
    private $codCurso;
    private $nome;
    private $codDisc1;
    private $codDisc3;
    private $codDisc2;
    private $conn;
        
    public function getNome() {
        return $this ->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCodCurso() {
        return $this ->codCurso;
    }

    public function setCodCurso($codCurso) {
        $this->codCurso = $codCurso;
    }

    public function getCodDisc1() {
        return $this ->codDisc1;
    }

    public function setCodDisc1($codDisc1) {
        $this->codDisc1 = $codDisc1;
    }

    public function getCodDisc2() {
        return $this ->codDisc2;
    }

    public function setCodDisc2($codDisc2) {
        $this->codDisc2 = $codDisc2;
    }

    public function getCodDisc3() {
        return $this ->codDisc3;
    }

    public function setCodDisc3($codDisc3) {
        $this->codDisc3 = $codDisc3;
    }

    function listar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->query("select * from curso order by Nome");
            $sql->execute();
            return $sql->fetchALL();
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }

    function salvar() {
        try {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("insert into curso values (?, ?, ?, ?, ?)");
            @$sql-> bindParam(1, $this->getCodCurso(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getNome(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getCodDisc1(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getCodDisc2(), PDO::PARAM_STR);
            @$sql-> bindParam(5, $this->getCodDisc3(), PDO::PARAM_STR);
            if($sql->execute() == 1) {
                return 'Registro salvo com sucesso!!';
            }
            $this->conn = null;
        }   
        catch(PDOException $exc) {
            echo 'Erro ao salvar o registro - ' . $exc->getMessage();
        }
    }

    function excluir() {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("delete from curso where CodCurso = ?");
            @$sql-> bindParam(1, $this->getCodCurso(), PDO::PARAM_STR);
            if($sql->execute() == 1) {
                return "Excluido com sucesso!!";
            } else {
                return "Erro na exclusao!!";
            }

            $this->conn = null;
        }
        catch(PDOException $exc) {
            echo "Erro ao excluir - " . $exc->getMessage();
        }
    }
} 

class disciplinas
{
    private $id;
    private $nome;
    private $conn;
    
    public function getNome() {
        return $this ->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getId() {
        return $this ->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    function listar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->query("select * from disciplinas order by Nome_Disciplina");
            $sql->execute();
            return $sql->fetchALL();
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }

    function salvar() {
        try {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("insert into disciplinas values (?, ?)");
            @$sql-> bindParam(1, $this->getId(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getNome(), PDO::PARAM_STR);
            if($sql->execute() == 1) {
                return 'Registro salvo com sucesso!!';
            }
            $this->conn = null;
        }   
        catch(PDOException $exc) {
            echo 'Erro ao salvar o registro - ' . $exc->getMessage();
        }
    }

    function excluir() {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("delete from disciplinas where CodDisciplina = ?");
            @$sql-> bindParam(1, $this->getId(), PDO::PARAM_STR);
            if($sql->execute() == 1) {
                return "Excluido com sucesso!!";
            } else {
                return "Erro na exclusao!!";
            }

            $this->conn = null;
        }
        catch(PDOException $exc) {
            echo "Erro ao excluir - " . $exc->getMessage();
        }
    }
} 

?>
