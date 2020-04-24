<section class="content-header">
    <h1>
        <?php echo ucfirst($this->uri->segment(2));?> <small><?php echo ucfirst($this->uri->segment(3));?></small>
    </h1>
    <ol class="breadcrumb">
        <?php 
        foreach($this->uri->segments as $seg) {
            $url        = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $seg)) . $seg;
            $is_active  = $url == $this->uri->uri_string;
        ?>
        <li class="<?php echo $is_active ? 'active':''; ?>">
            <?php
            if ($is_active) {
                echo ucwords($seg);
            } else {
                echo "<b href='".site_url($url)."'>".ucfirst($seg)."</b>";
            }
            ?>
        </li>
        <?php } ?>
    </ol>
</section>