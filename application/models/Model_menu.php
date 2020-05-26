<?php

class Model_menu extends CI_Model
{
    public function tampilMenu()
    {
        return $this->db->get('user_menu')->result_array();
    }

    public function tambahMenu()
    {
        $data = ['menu'  => htmlspecialchars($this->input->post('menu', true))];
        $this->db->insert('user_menu', $data);
    }

    public function tampilSubMenu()
    {
        $querySubMenu = "SELECT `user_sub_menu`.* , `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`";

        return $this->db->query($querySubMenu)->result_array();
    }
}
