<link href="<?php echo base_url('assets/css/blog.css'); ?>" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" type="text/css" />
<section id="content" class="section-1 single featured bg-white"><!--  style="background-color: hsl(0, 0%, 6.7%);" -->
    <div class="container">
        <div class="entry-title">
            <h2><?php echo $post['post_title']; ?></h2>
        </div>
        <div class="row">
            <div class="clearfix my-4"></div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><i class="far fa-calendar-alt"></i> <?php
                        $syscreatedate = new DateTime($post['syscreatedate']);
                        $stringDate = $syscreatedate->format('Y F d');
                        echo $stringDate;
                        ?></li>
                    <li class="breadcrumb-item"><i class="fas fa-user"></i> <?php echo $post['nama']; ?></li>
                    <li class="breadcrumb-item"><i class="fas fa-folder-open"></i> <?php echo $post['category']; ?></li>
                    <li class="breadcrumb-item">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url('Blog/Read/' . $post['post_title']); ?>" target="blank" title="Share this post to facebook" class="mx-3"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://twitter.com/share?url=<?php echo base_url('Blog/Read/' . $post['post_title']); ?>" target="blank" title="Share this post to twitter" class="mx-3"><i class="fab fa-twitter-square"></i></a>
                        <a href="https://www.facebook.com/dialog/send?app_id=356445735231&link=<?php echo base_url('Blog/Read/' . $post['post_title']); ?>" target="blank" title="Share this post to messenger" class="mx-3"><i class="fab fa-facebook-messenger"></i></a>
                        <a href="https://web.whatsapp.com/send?text=<?php echo base_url('Blog/Read/' . $post['post_title']); ?>" target="blank" title="Share this post to whatsapp" class="mx-3"><i class="fab fa-whatsapp"></i></a>
                        <a href="mailto:?subject=<?php echo $post['post_title'] . '&amp;body=' . base_url('Blog/Read/' . $post['post_title']); ?>" target="blank" title="Share this post to email" class="mx-3"><i class="fas fa-envelope"></i></a>
                        <a href="https://social-plugins.line.me/lineit/share?url=<?php echo base_url('Blog/Read/' . $post['post_title']); ?>" target="blank" title="Share this post to line" class="mx-3"><i class="fab fa-line"></i></a>
                    </li>
                </ol>
            </nav>
            <div class="mb-4" style="border-bottom: 1px dashed #e2e2e2;width:100%;"></div>
            <main class="col-12 col-lg-8 p-0">
                <div class="blogposts-wrap">
                    <div class="blog-lists-blog clearfix">
                        <div class="blogposts-tp-site-wrap clearfix" id="themepacific_infinite">
                            <div class="align-self-center my-4 mx-4" id="post_content">
                                <h4 class="text-center" style="display: none;"><strong><?php echo $post['post_title']; ?></strong> - <?php echo strtoupper($this->bodo->Sys('company_name')); ?></h4>
                                <?php echo $post['post_content']; ?>
                                <div class="clearfix my-4"></div>
                                <div style="clear: both;position: relative;width: 100%;margin: 60px 0;border-top: 1px solid #eee;"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        Share this Post:
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group text-right">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url('Blog/Read/' . $post['post_title']); ?>" target="blank" title="Share this post to facebook" class="mx-2"><i class="fab fa-facebook-square"></i></a>
                                            <a href="https://twitter.com/share?url=<?php echo base_url('Blog/Read/' . $post['post_title']); ?>" target="blank" title="Share this post to twitter" class="mx-2"><i class="fab fa-twitter-square"></i></a>
                                            <a href="https://www.facebook.com/dialog/send?app_id=356445735231&link=<?php echo base_url('Blog/Read/' . $post['post_title']); ?>" target="blank" title="Share this post to messenger" class="mx-2"><i class="fab fa-facebook-messenger"></i></a>
                                            <a href="https://web.whatsapp.com/send?text=<?php echo base_url('Blog/Read/' . $post['post_title']); ?>" target="blank" title="Share this post to whatsapp" class="mx-2"><i class="fab fa-whatsapp"></i></a>
                                            <a href="mailto:?subject=<?php echo $post['post_title'] . '&amp;body=' . base_url('Blog/Read/' . $post['post_title']); ?>" target="blank" title="Share this post to email" class="mx-2"><i class="fas fa-envelope"></i></a>
                                            <a href="https://social-plugins.line.me/lineit/share?url=<?php echo base_url('Blog/Read/' . $post['post_title']); ?>" target="blank" title="Share this post to line" class="mx-2"><i class="fab fa-line"></i></a>
                                        </div>
                                    </div>
                                </div>  
                                <div style="clear: both;position: relative;width: 100%;margin: 60px 0;border-top: 1px solid #eee;"></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (!empty($asside_related)) {
                        require_once 'related_post.php';
                    } else {
                        null;
                    }
                    ?>
                </div>
            </main>
            {sidebar}
        </div>
    </div>
</section>