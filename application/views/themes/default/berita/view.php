<?php
    $_query = $this->vw_berita_m->get_by(array('page_id' => $page_id));
    if (count($_query) > 0) {
        # code...
        foreach ($_query as $key => $value);
    } else {
        redirect(base_url('404_override'),'refresh');
    }
?>

        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div id="post-175" class="post-175 post  format-standard has-post-thumbnail  category-motion category-photography category-uncategorized tag-eclipse tag-grid tag-mysql no-title">
                        <div class="section section-post-header">
                            <div class="section_wrapper clearfix">
                                <!-- One full width row-->
                                <div class="column one" style="margin-bottom: 5px;">
                                    <div class="title_wrapper">
                                        <div class="post-meta clearfix">
                                            <div class="author-date">
                                                <span class="author">Published by <i class="icon-user"></i> <a href="#"><?php echo $value->author ?></a></span><span class="date">at <i class="icon-clock"></i>
                                                <time class="entry-date" datetime="2014-05-13T15:40:00+00:00" >
                                                    <?php echo $value->publish_datenya ?>
                                                </time></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column one">
                                    <div class="title_wrapper">
                                        <h2><?php echo $value->judul ?></h2>
                                    </div>
                                </div>

                                <!-- One full width row-->
                                <div class="column one single-photo-wrapper">
                                    <div class="image_frame scale-with-grid" style="margin-left: 0">
                                        <div class="image_wrapper">
                                            <a href="<?php echo base_url($value->img_url) ?>" rel="prettyphoto">
                                                <div class="mask"></div><img width="1200" height="480" src="<?php echo base_url($value->img_url) ?>" class="scale-with-grid wp-post-image" alt="beauty_portfolio_2" style="width: 100%; object-fit: cover;" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post Content-->
                        <div class="post-wrapper-content">
                            <div class="entry-content">
                                <div class="section flv_sections_11">
                                    <div class="section_wrapper clearfix">
                                        <div class="items_group clearfix">
                                            <!-- One full width row-->
                                            <div class="column one column_column">
                                                <div class="column_attr ">
                                                    <?php echo $value->content ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section section-post-footer">
                                <div class="section_wrapper clearfix">
                                    <!-- One full width row-->
                                    <div class="column one post-pager"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Sidebar area-->
                <div class="sidebar sidebar-1 four columns">
                    <div class="widget-area clearfix " style="min-height: 1739px; padding-bottom: 50px">

                        <!-- Recent posts -->
                        <aside class="widget widget_mfn_recent_posts">
                            <h3>Berita terbaru</h3>
                            <div class="Recent_posts">
                                    <?php
                                        $_query = $this->vw_berita_m->get_limit(array('is_publish' => '1'), 4, 0);
                                        if (count($_query) > 0) {
                                            # code...
                                    ?>
                                <ul>
                                    <?php  
                                        foreach ($_query as $key => $value) {
                                                # code...
                                    ?>
                                    <li class="post ">
                                        <a href="<?php echo base_url('berita/id/'.$value->page_id); ?>" title="<?php echo $value->judul ?>">
                                            <div class="photo"><img width="80" height="80" src="<?php echo base_url($value->img_url) ?>" class="scale-with-grid wp-post-image" alt="beauty_portfolio_2" style="object-fit: cover; height: 100%"></div>
                                            <div class="desc">
                                                <h6><?php echo $this->limit_text($value->judul, 18) ?></h6><span class="date"><i class="icon-clock"></i><?php echo $value->publish_datenya ?></span>
                                            </div>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <?php } ?>
                            </div>
                        </aside>

                        <!-- Archives Area -->
                        <aside id="archives-3" class="widget widget_archive">
                            <h3>Archives</h3>
                            <?php
                                $_query = $this->vw_archive_m->get();
                                if (count($_query) > 0) {
                                    # code...
                            ?>
                            <ul>
                                <?php
                                    foreach ($_query as $key => $value) {
                                        # code...
                                ?>
                                <li>
                                    <a href="<?php echo base_url('archive/'.$value->bulan.'/'.$value->tahun) ?>"><?php echo $value->archive_datenya.' ('.$value->countnya.')';?></a>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                            <?php } ?>
                        </aside>

                        <!-- Recent Comments Area -->
                        <aside class="widget widget_mfn_recent_comments">
                            <h3>Informasi terbaru</h3>
                            <div class="Recent_comments">
                                <?php
                                    $_query = $this->vw_informasi_m->get_limit(array('is_publish' => '1'), 4, 0);
                                    if (count($_query) > 0) {
                                        # code...
                                ?>
                                <ul>
                                    <?php  
                                        foreach ($_query as $key => $value) {
                                            # code...
                                    ?>
                                    <li>
                                        <span class="date_label"><?php echo $value->publish_datenya ?></span>
                                        <p>
                                            </i><strong><?php echo $this->limit_text($value->judul, 25) ?></strong> 
                                        </p>
                                        <p>
                                            <a href="<?php echo base_url('view/informasi/'.$value->page_id) ?>" title="<?php echo $value->judul?>">Read more</a>
                                        </p>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <?php } ?>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>