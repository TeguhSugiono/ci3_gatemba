<?php

defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class M_tpsonline extends CI_Model {

    function __construct() { // untuk awalan membuat class atau lawan kata nya index
        parent::__construct();
        $this->tpsonline = $this->load->database('tpsonline', TRUE);
    }

    function get_datatables($array_table) {
        $term = $_REQUEST['search']['value'];
        $this->_get_datatables_query($term, $array_table);
        if ($_REQUEST['length'] != -1)
            $this->tpsonline->limit($_REQUEST['length'], $_REQUEST['start']);
        $query = $this->tpsonline->get();
        return $query->result();
    }

    function _get_datatables_query($term = '', $array_table) {
        $select = isset($array_table['select']) ? $array_table['select'] : '';
        $form = isset($array_table['form']) ? $array_table['form'] : '';
        $join = isset($array_table['join']) ? $array_table['join'] : array();
        $where = isset($array_table['where']) ? $array_table['where'] : array();
        $where_like = isset($array_table['where_like']) ? $array_table['where_like'] : array();
        $where_in = isset($array_table['where_in']) ? $array_table['where_in'] : array();
        $where_not_in = isset($array_table['where_not_in']) ? $array_table['where_not_in'] : array();
        $where_term = isset($array_table['where_term']) ? $array_table['where_term'] : array();
        $column_order = isset($array_table['column_order']) ? $array_table['column_order'] : array();
        $group = isset($array_table['group']) ? $array_table['group'] : '';
        $order = isset($array_table['order']) ? $array_table['order'] : array();

        if ($select != '') {
            $this->tpsonline->select($select);
        }

        if ($form != '') {
            $this->tpsonline->from($form);
        }

        if (count((array) $join) > 0) {
            for ($a = 0; $a < count($join); $a++) {
                $this->tpsonline->join($join[$a][0], $join[$a][1], $join[$a][2]);
            }
        }

        if (count((array) $where) > 0) {
            $this->tpsonline->where($where);
        }

        if (count((array) $where_like) > 0) {
            if (count((array) $where_like) == 1) {
                $this->tpsonline->like($where_like[0]['field'], $where_like[0]['value']);
            } else {
                $this->tpsonline->group_start();
                for ($a = 0; $a < count((array) $where_like); $a++) {
                    if ($a == 0) {
                        $this->tpsonline->like($where_like[$a]['field'], $where_like[$a]['value']);
                    } else {
                        $this->tpsonline->or_like($where_like[$a]['field'], $where_like[$a]['value']);
                    }
                }
                $this->tpsonline->group_end();
            }
        }

        if (count((array) $where_in) > 0) {
            if (count((array) $where_in) == 1) {
                $this->tpsonline->where_in($where_in[0]['field'], $where_in[0]['value']);
            } else {
                $this->tpsonline->group_start();
                for ($a = 0; $a < count((array) $where_in); $a++) {
                    if ($a == 0) {
                        $this->tpsonline->where_in($where_in[$a]['field'], $where_in[$a]['value']);
                    } else {
                        $this->tpsonline->or_where_in($where_in[$a]['field'], $where_in[$a]['value']);
                    }
                }
                $this->tpsonline->group_end();
            }
        }

        if (count((array) $where_not_in) > 0) {
            if (count((array) $where_not_in) == 1) {
                $this->tpsonline->where_not_in($where_not_in[0]['field'], $where_not_in[0]['value']);
            } else {
                $this->tpsonline->group_start();
                for ($a = 0; $a < count((array) $where_not_in); $a++) {
                    if ($a == 0) {
                        $this->tpsonline->where_not_in($where_not_in[$a]['field'], $where_not_in[$a]['value']);
                    } else {
                        $this->tpsonline->or_where_not_in($where_not_in[$a]['field'], $where_not_in[$a]['value']);
                    }
                }
                $this->tpsonline->group_end();
            }
        }

        if ($term != "") {
            if (count((array) $where_term) == 1) {
                $this->tpsonline->like($where_term[0], $term);
            } else {

                $this->tpsonline->group_start();

                for ($a = 0; $a < count((array) $where_term); $a++) {
                    if ($a == 0) {
                        $this->tpsonline->like($where_term[$a], $term);
                    } else {
                        $this->tpsonline->or_like($where_term[$a], $term);
                    }
                }

                $this->tpsonline->group_end();
            }
        }

        if ($group != '') {
            $this->tpsonline->group_by($group);
        }

        if (isset($_POST['order'])) {
            $this->tpsonline->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($order)) {
            $order = $order;
            $this->tpsonline->order_by(key($order), $order[key($order)]);
        }
    }

    function count_filtered($array_table) {
        $term = $_REQUEST['search']['value'];
        $this->_get_datatables_query($term, $array_table);
        $query = $this->tpsonline->get();
        return $query->num_rows();
    }

    function count_all($array_table) {
        $select = isset($array_table['select']) ? $array_table['select'] : '';
        $form = isset($array_table['form']) ? $array_table['form'] : '';
        $join = isset($array_table['join']) ? $array_table['join'] : array();
        $where = isset($array_table['where']) ? $array_table['where'] : array();
        $where_like = isset($array_table['where_like']) ? $array_table['where_like'] : array();
        $where_in = isset($array_table['where_in']) ? $array_table['where_in'] : array();
        $where_not_in = isset($array_table['where_not_in']) ? $array_table['where_not_in'] : array();
        $where_term = isset($array_table['where_term']) ? $array_table['where_term'] : array();
        $column_order = isset($array_table['column_order']) ? $array_table['column_order'] : array();
        $group = isset($array_table['group']) ? $array_table['group'] : '';
        $order = isset($array_table['order']) ? $array_table['order'] : array();

        if ($select != '') {
            $this->tpsonline->select($select);
        }

        if ($form != '') {
            $this->tpsonline->from($form);
        }

        if (count((array) $join) > 0) {
            for ($a = 0; $a < count($join); $a++) {
                $this->tpsonline->join($join[$a][0], $join[$a][1], $join[$a][2]);
            }
        }

        if (count((array) $where) > 0) {
            $this->tpsonline->where($where);
        }

        if (count((array) $where_like) > 0) {
            if (count((array) $where_like) == 1) {
                $this->tpsonline->like($where_like[0]['field'], $where_like[0]['value']);
            } else {
                $this->tpsonline->group_start();
                for ($a = 0; $a < count((array) $where_like); $a++) {
                    if ($a == 0) {
                        $this->tpsonline->like($where_like[$a]['field'], $where_like[$a]['value']);
                    } else {
                        $this->tpsonline->or_like($where_like[$a]['field'], $where_like[$a]['value']);
                    }
                }
                $this->tpsonline->group_end();
            }
        }

        if (count((array) $where_in) > 0) {
            if (count((array) $where_in) == 1) {
                $this->tpsonline->where_in($where_in[0]['field'], $where_in[0]['value']);
            } else {
                $this->tpsonline->group_start();
                for ($a = 0; $a < count((array) $where_in); $a++) {
                    if ($a == 0) {
                        $this->tpsonline->where_in($where_in[$a]['field'], $where_in[$a]['value']);
                    } else {
                        $this->tpsonline->or_where_in($where_in[$a]['field'], $where_in[$a]['value']);
                    }
                }
                $this->tpsonline->group_end();
            }
        }

        if (count((array) $where_not_in) > 0) {
            if (count((array) $where_not_in) == 1) {
                $this->tpsonline->where_not_in($where_not_in[0]['field'], $where_not_in[0]['value']);
            } else {
                $this->tpsonline->group_start();
                for ($a = 0; $a < count((array) $where_not_in); $a++) {
                    if ($a == 0) {
                        $this->tpsonline->where_not_in($where_not_in[$a]['field'], $where_not_in[$a]['value']);
                    } else {
                        $this->tpsonline->or_where_not_in($where_not_in[$a]['field'], $where_not_in[$a]['value']);
                    }
                }
                $this->tpsonline->group_end();
            }
        }

        if ($group != '') {
            $this->tpsonline->group_by($group);
        }

        return $this->tpsonline->count_all_results();
    }
    

}
