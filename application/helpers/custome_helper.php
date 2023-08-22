<?php 

function a($a = ''){
    return base_url('assets/'.$a);
}

function b($a = ''){
    return base_url('assets/mobile/'.$a);
}

function set_pesan($pesan, $tipe = true)
{
    $ci = get_instance();
    if ($tipe) {
        $ci->session->set_flashdata('pesan', "<div class='alert alert-success alert-dismissible fade show'><strong>SUCCESS!</strong> {$pesan}</div>");
    } else {
        $ci->session->set_flashdata('pesan', "<div class='alert alert-danger alert-dismissible fade show'><strong>ERROR!</strong> {$pesan}</div>");
    }
}

?>