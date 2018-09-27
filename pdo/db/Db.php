<?php

class Db extends PDO
{
    public function __construct($sgdb, $host, $banco, $username, $password, $persistent = true)
    {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => $persistent
        ];

        $dsn = sprintf("%s:host=%s;dbname=%s;charset=utf8", $sgdb, $host, $banco);

        parent::__construct($dsn, $username, $password, $options);
    }

    protected function bindValues(&$stmt, $data)
    {
        foreach($data as $chave => $valor) {
            $tipo = is_int($valor) ? PDO::PARAM_INT : PDO::PARAM_STR;
            $stmt->bindValue(":$chave", $valor, $tipo);
        }
    }

    public function select($sql, array $where = [], $all = true, $fetchMode = PDO::FETCH_OBJ)
    {
        $stmt = $this->prepare($sql);
        $this->bindValues($stmt, $where);
        $stmt->execute();

        if ($all) {
            return $stmt->fetchAll($fetchMode);
        }

        return $stmt->fetch($fetchMode);
    }

    public function insert($table, $data)
    {
        $camposNomes = implode('`, `', array_keys($data));
        $camposValores = ':' . implode(', :', array_keys($data));

        $sql = sprintf("INSERT INTO %s (`%s`) VALUES (%s)", $table, $camposNomes, $camposValores);

        $stmt = $this->prepare($sql);
        $this->bindValues($stmt, $data);
        $stmt->execute();
        return $this->lastInsertId();
    }

    public function update($table, $data, $where)
    {
        $novosDados = '';
        foreach($data as $chave => $valor) {
            $novosDados .= "`$chave` = :$chave,";
        }
        $novosDados = rtrim($novosDados, ',');

        $sql = sprintf("UPDATE %s SET %s WHERE %s", $table, $novosDados, $where);

        $stmt = $this->prepare($sql);
        $this->bindValues($stmt, $data);
        return $stmt->execute();
    }

    public function delete($table, $where, $limit = 1)
    {
        $sql = sprintf("DELETE FROM %s WHERE %s LIMIT %s", $table, $where, $limit);
        return $this->exec($sql);
    }
}