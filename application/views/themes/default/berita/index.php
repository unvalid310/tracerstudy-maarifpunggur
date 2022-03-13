
        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="section">
                        <div class="section_wrapper clearfix">
                            <!-- One full width row-->
                            <div class="column one column_blog">
                                <div class="blog_wrapper isotope_wrapper">
                                    <?php
                                        $limit = 4;
                                        // Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
                                        $limit_start = ($page - 1) * $limit;

                                        $_query = $this->vw_berita_m->get_limit(array('is_publish' => '1'), $limit, $limit_start);
                                        if (count($_query) > 0) {
                                            # code...
                                            foreach ($_query as $key => $value) {
                                                # code...
                                    ?>
                                    <div class="posts_group lm_wrapper classic">
                                        <div class="post-175 post  format-standard has-post-thumbnail  category-motion category-photography category-uncategorized tag-eclipse tag-grid tag-mysql post-item isotope-item clearfix">
                                            <div class="date_label">
                                                <?php echo $value->publish_datenya ?>
                                            </div>
                                            <div class="image_frame post-photo-wrapper scale-with-grid">
                                                <div class="image_wrapper">
                                                    <a href="<?php echo base_url('view/berita/'.$value->page_id) ?>">
                                                        <div class="mask"></div><img width="576" height="450" src="<?php echo base_url($value->img_url) ?>" class="scale-with-grid wp-post-image" alt="beauty_portfolio_2" style="width: 100%; object-fit: cover">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-desc-wrapper">
                                                <div class="post-desc">
                                                    <div class="post-meta clearfix">
                                                        <div class="author-date">
                                                            <span class="author"><span>Published by </span><i class="icon-user"></i> <a href="#"><?php echo $value->author ?></a>
                                                            </span><span class="date"><span> at </span><i class="icon-clock"></i> <?php echo $value->publish_datenya ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="post-title">
                                                        <h2 class="entry-title"><a href="<?php echo base_url('view/berita/'.$value->page_id) ?>"><?php echo $this->limit_text($value->judul, 35) ?></a></h2>
                                                    </div>
                                                    <div class="post-excerpt">
                                                        <span class="big"><?php echo $this->limit_text($value->content, 160) ?></span>
                                                    </div>
                                                    <a class="mfn-link mfn-link-4" href="<?php echo base_url('view/berita/'.$value->page_id) ?>" data-hover="Phasellus" style="margin: 0"><span data-hover="Phasellus">Selengkapnya</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                            }
                                        }
                                    ?>

                                    <!-- One full width row-->
                                    <div class="column one pager_wrapper">
                                        <!-- Navigation Area -->
                                        <div class="pager">
                                            <?php
                                                if ($page != 1) { // Jika page bukan page ke 1
                                                    $link_prev = ($page > 1)? $page - 1 : 1;
                                            ?>
                                                    <a href="<?php echo base_url('berita/'.$link_prev); ?>">
                                                        <i class="icon-left-open"></i>Prev page
                                                    </a>
                                            <?php
                                                }
                                            ?>
                                            <div class="pages">
                                                <?php  
                                                    $get_jumlah = count($this->vw_berita_m->get());

                                                    $jumlah_page = ceil($get_jumlah / $limit);
                                                    $jumlah_number = 3;
                                                    $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
                                                    $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;

                                                    for ($i = $start_number; $i <= $end_number; $i++){
                                                        $link_active = ($page == $i)? ' class="active"' : '';
                                                ?>
                                                        <a href="<?php echo base_url('berita/'.$i) ?>"<?php echo $link_active ?>><?php echo $i ?></a>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                            <?php
                                                if ($page != $jumlah_page) { 
                                                    $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
                                            ?>
                                                    <a class="next_page" href="<?php echo base_url('berita/'.$link_next); ?>">
                                                        Next page<i class="icon-right-open"></i>
                                                    </a>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="four columns">
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
                                        <a href="<?php echo base_url('view/berita/'.$value->page_id) ?>" title="<?php echo $value->judul ?>">
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
                                            <a href="<?php echo base_url('informasi/id/'.$value->page_id) ?>" title="<?php echo $value->judul?>">Read more</a>
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