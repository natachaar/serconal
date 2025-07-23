<?php

namespace App\Models;

use CodeIgniter\Model;

class GeneralModel extends Model {

    public function get($table, $where = NULL, $orderby = NULL) { //metodo get
        $builder = $this->db->table($table)->select('*');
        if (!empty($where)) {
            $builder->where($where);
        }
        if (!empty($orderby)) {
            $builder->orderBy($orderby);
        }
        return $builder->get()->getResult();
    }

    public function getRow($table, $where = NULL, $orderby = NULL) { //metodo get
        $builder = $this->db->table($table)->select('*');
        if (!empty($where)) {
            $builder->where($where);
        }
        if (!empty($orderby)) {
            $builder->orderBy($orderby);
        }
        return $builder->get()->getRow();
    }

    public function updateInfo($table, $set, $where = NULL) { //metodo update
        $builder = $this->db->table($table)->set($set);
        if ($where) {
            $builder->where($where);
        }
        $builder->update();
        return $this->db->affectedRows();
    }

    public function insertInfo($table, $data) { //metodo insert
        $this->db->table($table)->insert($data);
        return $this->db->insertID();
    }

    public function deleteInfo($table, $where) { //metodo delete
        $this->db->table($table)->where($where)->delete();
        return $this->db->affectedRows();
    }

    public function runQuery($sql) { //metodo ejecutar query
        return $this->db->query($sql)->getResult();
    }

    public function numRows($query) {
        $resul = $this->db->query($query);
        return $resul->getNumRows();
    }
}
