 <!-- Sidebar Content - Moved to Bottom -->
 <div class="row mt-5 sidebar-bottom">
     <!-- Categories Widget -->
     <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
         <div class="sidebar-widget">
             <h4 class="widget-title">Categories</h4>
             <ul class="category-list">
                 <?php
                    $categories = get_categories();
                    foreach ($categories as $category): ?>
                     <li>
                         <a href="<?php echo get_category_link($category->term_id); ?>">
                             <?php echo $category->name; ?>
                             <span>(<?php echo $category->count; ?>)</span>
                         </a>
                     </li>
                 <?php endforeach; ?>
             </ul>
         </div>
     </div>

     <!-- Recent Posts Widget -->
     <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
         <div class="sidebar-widget">
             <h4 class="widget-title">Recent Posts</h4>
             <?php
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 3,
                    'post_status' => 'publish'
                ));

                foreach ($recent_posts as $post): ?>
                 <div class="recent-post">
                     <div class="recent-post-img">
                         <?php if (has_post_thumbnail($post['ID'])): ?>
                             <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail'); ?>
                         <?php else: ?>
                             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog_img/post<?php echo rand(1, 6); ?>.jpg" alt="Recent Post">
                         <?php endif; ?>
                     </div>
                     <div class="recent-post-content">
                         <h5 class="recent-post-title"><a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a></h5>
                         <div class="recent-post-date"><?php echo get_the_date('M d, Y', $post['ID']); ?></div>
                     </div>
                 </div>
             <?php endforeach; ?>
         </div>
     </div>

     <!-- Tags Widget -->
     <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
         <div class="sidebar-widget">
             <h4 class="widget-title">Tags</h4>
             <div class="tags">
                 <?php
                    $tags = get_tags();
                    foreach ($tags as $tag): ?>
                     <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>
 </div>
 </div>
 </div>