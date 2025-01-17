<?php
/**
 * Template de ferramentas para a listagem de adotantes
 *
 * @package AmigoPet_Wp
 */

// Se este arquivo for chamado diretamente, aborte.
if (!defined('WPINC')) {
    die;
}
?>

<div class="btn-group">
    <a href="<?php echo esc_url(admin_url('admin.php?page=amigopet-wp-adopters-new')); ?>" class="btn btn-success">
        <i class="fas fa-plus"></i>
        <?php esc_html_e('Novo Adotante', 'amigopet-wp'); ?>
    </a>
    
    <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
    </button>
</div>
