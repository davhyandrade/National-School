# CRUD com MySQL e PHP

> Status: Development

## National-School

<img src="https://i.postimg.cc/prgzH5Yy/bank-small.png" alt="bank-small" width="100%">

Projeto proposto pela matéria PW2 da Etec Zona Leste, ao qual consiste no desenvolvimento de um CRUD com MySQL e PHP com a temática de Escola.

# Desenvolvimento

Desenvolvido com `HTML`, `JavaScript`, `PHP` e `Sass` puro, sem nenhuma biblioteca, mas em breve será atualizado para LARAVEL.

Basicamente este projeto está sendo cobrado todas as funcinalidades básicas de CRUD (cadastrar, listar, alterar e deletar). Ao qual está sendo desenvolvido com banco de dados MySQL e a conexão realizada com `PHP`.

# CRUD

* CRUD são as quatro operações básicas utilizadas em bases de dados relacionais fornecidas aos utilizadores do sistema. 

* Create, Read, Update, Delete

- `Create || Cadastrar` 

```js
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
```

- `Read || Listar` 

```js
    function listar() {
        try {
            $this-> conn = new Conectar();
            $sql = $this->conn->query("select * from aluno order by nome");
            $sql->execute();
            return $sql->fetchALL();
            $this->conn = null;
        } catch(PDOException $exc) {
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }
```

- `Update || Alterar` 


