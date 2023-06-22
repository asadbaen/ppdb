<?php
$role_id = $this->session->userdata('role_id');
$queryMenu = "SELECT `user_menu_id`, `menu`
                                FROM `user_menu` JOIN `access_menu` 
                                ON `user_menu`.`user_menu_id` = `access_menu`.`menu_id`
                                WHERE `access_menu`.`role_id` = $role_id
                                ORDER BY `access_menu`.`menu_id` ASC
                                ";

$menu = $this->db->query($queryMenu)->result_array();

?>
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <?php if ($role_id == 1) { ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('peserta-didik'); ?>">
                    <i class="bi bi-people"></i>
                    <span>Data Peserta Didik</span>
                </a>
            </li><!-- End Contact Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('create_data'); ?>">
                    <i class="bi bi-person-add"></i>
                    <span>TAMBAH</span>
                </a>
            </li><!-- End Contact Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('kontak'); ?>">
                    <i class="bi bi-envelope"></i>
                    <span>Kontak</span>
                </a>
            </li><!-- End Contact Page Nav -->
        <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('create_data'); ?>">
                    <i class="bi bi-envelope"></i>
                    <span>Daftar Peserta Didik</span>
                </a>
            </li><!-- End Contact Page Nav -->
        <?php } ?>


        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= site_url('Auth/logout'); ?>">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Keluar</span>
            </a>
        </li><!-- End Login Page Nav -->
    </ul>
</aside><!-- End Sidebar -->