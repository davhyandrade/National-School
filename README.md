# CRUD com MySQL e PHP

> Status: Development

## National-School

Projeto proposto pela matéria PW2 da Etec Zona Leste, ao qual consiste no desenvolvimento de um CRUD com MySQL e PHP com a temática de Escola.

![screencapture-localhost-pw-2022-10-23-12_02_31](https://user-images.githubusercontent.com/109045257/197399673-1b5b3770-82e6-455a-be18-d1682defbf62.png)

# Desenvolvimento

Desenvolvido com `HTML`, `JavaScript`, `PHP` e `Sass` puro, sem nenhuma biblioteca, mas em breve será atualizado para LARAVEL.

Basicamente este projeto está sendo cobrado todas as funcinalidades básicas de CRUD (cadastrar, listar, alterar e deletar). Ao qual está sendo desenvolvido com banco de dados MySQL e a conexão realizada com `PHP`.

# CRUD

* CRUD são as quatro operações básicas utilizadas em bases de dados relacionais fornecidas aos utilizadores do sistema. 

* Create, Read, Update, Delete

#

    Create || Cadastrar

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

#

    Read || Listar

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

#

    Delete || Excluir

```js
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
```

#

    Pesquisar

```js
    function consultar() {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from aluno where Nome like ?");
            @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        } catch(PDOException $exc) {
            echo "Erro ao executar consulta - " . $exc->getMessage();
        }
    }
```
